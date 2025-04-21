<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class CapNhatSLXemController
{
    public function capNhatLuotXem($id)
    {
        $tin = Tin::find($id);

        if (!$tin) {
            return; // Không làm gì nếu không tìm thấy
        }
        $tin->increment('solanxem');
    }
}
