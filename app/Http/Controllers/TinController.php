<?php

namespace App\Http\Controllers;

use App\Models\LoaiTin;
use App\Models\Tin;
use Illuminate\Http\Request;
use App\Helpers\MyHelper; // Import helper
use App\Models\BinhLuan;

class TinController
{
    public function danhSachTin(Request $request)
    {
        $idNhomTin = $request->input('id_nhomtin');
        $idLoaiTin = $request->input('id_loaitin');

        // Nếu có id_nhomtin, lấy tất cả loại tin thuộc nhóm đó
        if ($idNhomTin) {
            // Lấy tất cả loai_tin thuộc nhom_tin với id_nhomtin
            $loaiTins = LoaiTin::where('id_nhomtin', $idNhomTin)->pluck('id_loaitin');

            // Lọc các tin theo id_loaitin trong danh sách loai_tin
            $tinTuc = Tin::whereIn('id_loaitin', $loaiTins)->get();
        }
        // Nếu có id_loaitin, lọc tin tức theo loại tin
        elseif ($idLoaiTin) {
            $tinTuc = Tin::where('id_loaitin', $idLoaiTin)->get();
        }
        // Nếu không có tham số nào, lấy tất cả tin tức
        else {
            $tinTuc = Tin::all();
        }

        return response()->json($tinTuc);
    }

    // Thêm tin mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tieude' => 'required|string|max:255',
            'hinhdaidien' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mota' => 'required|string|max:255',
            'noidung' => 'required|string',
            'ngaydangtin' => 'required|date',
            'tacgia' => 'required|string|max:255',
            'tinhot' => 'required|boolean',
            'trangthai' => 'required|boolean',
            'id_loaitin' => 'required|integer|exists:loai_tin,id_loaitin',
        ]);

        try {
            $path = $request->file('hinhdaidien')->getRealPath();
            $validated['hinhdaidien'] = MyHelper::uploadImage($path);
            $tin = Tin::create($validated);
            return response()->json(['message' => 'Tin đã được thêm thành công!', 'tin' => $tin], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Lỗi khi upload ảnh',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Sửa tin
    public function update(Request $request, $id_tin)
    {
        $tin = Tin::find($id_tin);

        if (!$tin) {
            return response()->json(['message' => 'Không tìm thấy tin.'], 404);
        }

        $validated = $request->validate([
            'tieude' => 'required|string|max:255',
            'hinhdaidien' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mota' => 'required|string|max:255',
            'noidung' => 'required|string',
            'ngaydangtin' => 'required|date',
            'tacgia' => 'required|string|max:255',
            'tinhot' => 'required|boolean',
            'trangthai' => 'required|boolean',
            'id_loaitin' => 'required|integer|exists:loai_tin,id_loaitin',
        ]);

        try {
            // Nếu có file ảnh mới được gửi lên
            if ($request->hasFile('hinhdaidien')) {
                // Xóa ảnh cũ trên Cloudinary (nếu có)
                if ($tin->hinhdaidien) {
                    MyHelper::deleteImage($tin->hinhdaidien);
                }

                // Cập nhật URL ảnh mới vào dữ liệu
                $path = $request->file('hinhdaidien')->getRealPath();
                $validated['hinhdaidien'] = MyHelper::uploadImage($path);
            }

            // Cập nhật thông tin món ăn
            $tin->update($validated);

            return response()->json([
                'message' => 'Tin đã được cập nhật thành công!',
                'tin' => $tin
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Lỗi khi cập nhật tin',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Xóa tin
    public function destroy($id_tin)
    {
        $tin = Tin::find($id_tin);

        if (!$tin) {
            return response()->json(['message' => 'Không tìm thấy tin.'], 404);
        }

        if (BinhLuan::where('id_tin', $id_tin)->exists()) {
            return response()->json(['message' => 'Không thể xóa! Tin đã có bình luận.'], 400);
        }

        try {
            // Xóa ảnh cũ trên Cloudinary (nếu có)
            if ($tin->hinhdaidien) {
                MyHelper::deleteImage($tin->hinhdaidien);

                $tin->delete();
                return response()->json(['message' => 'Tin đã được xóa thành công!'], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Lỗi khi xóa tin',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function traVeDanhSachTin(Request $request)
    {
        $ngaybd = $request->input('ngaybd');
        $ngaykt = $request->input('ngaykt');
        $idLoaiTin = $request->input('id_loaitin');
        $idTin = $request->input('id_tin');
    
        // Khởi tạo query
        $query = Tin::query();
    
        // Lọc theo ngày nếu có
        if ($ngaybd && $ngaykt) {
            $query->whereDate('ngaydangtin', '>=', $ngaybd)
                  ->whereDate('ngaydangtin', '<=', $ngaykt);
        }
    
        // Lọc theo loại tin nếu khác 0
        if ($idLoaiTin != 0) {
            $query->where('id_loaitin', $idLoaiTin);
        }
    
        // Nếu có idTin → lấy bản ghi cụ thể
        if ($idTin) {
            $tin = $query->where('id_tin', $idTin)->first();
            $loaiTin = $idLoaiTin ? LoaiTin::firstWhere('id_loaitin', $idLoaiTin) : null;
            if (!$tin) {
                return response()->json(['message' => 'Tin với mã ' . $idTin . ' không tồn tại'. ($loaiTin ? ' trong loại tin ' . $loaiTin->ten_loaitin : '') . (($loaiTin && $ngaybd && $ngaykt) ? ' và' : '') . (($ngaybd && $ngaykt) ? ' trong khoảng '. date('d/m/Y', strtotime($ngaybd)) . ' - '. date('d/m/Y', strtotime($ngaykt)) : '')]);
            }
            return response()->json($tin, 200);
        }
    
        // Lấy danh sách cuối cùng nếu không lọc theo idTin
        $listTin = $query->orderBy('ngaydangtin', 'desc')->get();
    
        return response()->json($listTin, 200);
    }
}
