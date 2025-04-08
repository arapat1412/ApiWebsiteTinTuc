<?php

namespace Database\Seeders;

use App\Models\Tin;
use Illuminate\Database\Seeder;
use App\Helpers\MyHelper;

class TinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $danhSachTin = [
            //1. Bóng Đá
            [
                'Võ Hoàng Minh Khoa và thử thách mang tên Hoàng Đức',
                'bongda.jpg',
                'Chiều tối nay, đại chiến Cúp Quốc gia sẽ diễn ra trên sân Gò Đậu, khi Bình Dương chạm trán Phù Đổng Ninh Bình. Đây là cơ hội để NHM chứng kiến màn so tài giữa 2 tiền vệ của ĐT quốc gia.',
                'Võ Hoàng Minh Khoa đang trải qua những tháng ngày tươi đẹp nhất sự nghiệp. Cầu thủ sinh năm 2001 mới có trận ra mắt ĐT quốc gia Việt Nam dưới thời HLV Kim Sang Sik, cùng các đồng đội đánh bại tuyển Lào với tỷ số 5-0 tại vòng loại Asian Cup. Đây là phần thưởng hoàn toàn xứng đáng cho tiền vệ trẻ sau chuỗi phong độ ổn định từ đầu mùa.
Tính đến thời điểm hiện tại, Minh Khoa đã ghi 3 bàn thắng tại V.League, nhiều nhất trong số các tiền vệ được triệu tập lên tuyển. Để so sánh với con số 2 bàn trong toàn bộ mùa giải V.League 2023/24, Võ Hoàng Minh Khoa đã tiến một bước dài. Tiền vệ duy nhất có số bàn thắng ở giải quốc nội với cầu thủ Bình Dương, không ai khác chính là Hoàng Đức. Nhưng cần nhớ rằng, Hoàng Đức đang thi đấu ở giải hạng Nhất trong màu áo Phù Đổng Ninh Bình.
Chiều tối nay khi Bình Dương chạm trán Ninh Bình cho một suất đi tiếp tại Cúp Quốc gia, đó cũng chính là màn so tài trực tiếp giữa Võ Hoàng Minh Khoa và Nguyễn Hoàng Đức.
Một bên đang là niềm hy vọng mới của bóng đá Việt Nam, một bên là trụ cột trong suốt những năm qua của ĐT. Tất nhiên, điểm chung của cả 2 tiền vệ này, bên cạnh chữ “Hoàng” trong tên, còn là khả năng hỗ trợ tấn công rất xuất sắc.
Trong trận đấu với Lào, Hoàng Đức được sắp xếp trấn giữ khu trung tuyến, tạo điều kiện cho Minh Khoa – người thay Doãn Ngọc Tân đá chính, nhưng lại được cho phép dâng lên nhiều hơn. Không ít lần, tiền vệ sinh năm 2001 xuất hiện ở khu vực đáy biên, đem tới những đường chuyền trả ngược về tuyến hai. Trong bàn thắng nâng tỷ số lên 2-0 của Văn Vĩ, Minh Khoa chính là cầu thủ được giao nhiệm vụ đá phạt góc.
Những pha di chuyển, phối hợp của cầu thủ này với đàn anh Hoàng Đức khiến NHM thích thú. Sau trận, HLV Kim Sang Sik cũng bày tỏ sự hài lòng: “Minh Khoa đã thể hiện tốt trong vai trò tiền vệ, đặc biệt là khả năng di chuyển thông minh. Tôi tin rằng mình đã có lựa chọn đúng khi trao cơ hội cho cậu ấy và kỳ vọng Minh Khoa sẽ chơi tốt hơn trong những trận đấu tiếp theo”.
Tất nhiên, sẽ là quá sớm để tiền vệ mới bước sang tuổi 24 có thể trực tiếp thay thế những đàn anh trên tuyển. Nhìn vào sự xuất hiện của Quang Hải khi được tung vào sân, lập tức tạo ra 2 bàn thắng (kiến tạo cho Hai Long và tự mình ấn định tỷ số 5-0), rõ ràng Minh Khoa còn chặng đường dài để cố gắng. Nhưng với tuổi đời còn trẻ và thực tế cầu thủ này mới có trận ra mắt tuyển quốc gia, anh sẽ là sự lựa chọn chất lượng trong tương lai của HLV Kim Sang Sik.
Sở hữu lối chơi thông minh, kỹ thuật tốt, khả năng điều tiết trận đấu và cả những cú sút xa, Minh Khoa nằm trong thành phần U23 Việt Nam vô địch giải U23 Đông Nam Á vào năm 2023 dưới sự dẫn dắt của HLV Hoàng Anh Tuấn. Một năm sau, anh là hạt nhân nơi tuyến giữa khi cùng toàn đội tranh tài ở VCK U23 châu Á 2024, lọt vào tứ kết. Tới hiện tại, Minh Khoa đã là tuyển thủ quốc gia.
Trong suốt khoảng thời gian tuyển quân, HLV Kim Sang Sik đã vài lần trực tiếp dự khán sân Gò Đậu. Khi đó, giới chuyên môn cho rằng ông muốn theo dõi Bùi Vĩ Hào, tiếp thêm động lực cho Nguyễn Tiến Linh. Nhưng đến nay NHM đã biết, trong mắt HLV Kim Sang Sik còn có Võ Hoàng Minh Khoa.
“Khi biết mình có tên trong danh sách tập trung của ĐT Việt Nam, tôi rất vui và cảm thấy tự hào. Tôi không có áp lực nào cả mà xem đấy chính là động lực để thể hiện tốt nhất với HLV Kim Sang Sik. Còn nếu may mắn được giữ lại là điều hạnh phúc với tôi”, Minh Khoa chia sẻ về niềm vinh dự được triệu tập lên tuyển.
Cầu thủ này đã bỏ lỡ chiến dịch ASEAN Cup 2024 khi ĐT giành chức vô địch, bởi HLV Kim ưu tiên những cái tên giàu kinh nghiệm như Doãn Ngọc Tân. Nhưng giờ khi đã được trao cơ hội, Minh Khoa đã nắm chặt và tận dụng tốt.
Sẽ là thử thách đầy thú vị giữa một ngôi sao mới nổi của ĐT Việt Nam với chủ nhân của 2 Quả bóng vàng. Sau trận đấu chiều tối nay, sẽ chỉ một người đi tiếp.'
            ],
            //2. Bóng Rổ
            [
                "'Trương Twins' tỏa sáng, bóng rổ 3x3 nữ Việt Nam đi tiếp ở giải châu Á",
                'bongro.jpg',
                'Sự có mặt của chị em Trương Thảo My-Trương Thảo Vy giúp đội tuyển bóng rổ 3x3 nữ Việt Nam làm nên chuyện ở FIBA 3x3 Asia Cup 2025.',
                'Đội tuyển bóng rổ 3x3 nữ Việt Nam chính thức có mặt ở vòng bảng giải vô địch châu Á - FIBA 3x3 Asia Cup 2025 nhờ sự tỏa sáng của "Trương Twins" - Trương Thảo My (Kayleigh Trương) và Trương Thảo Vy (Kaylynne Trương).
Bóng rổ 3x3 nữ Việt Nam phải bắt đầu hành trình từ vòng loại, nằm ở bảng C cùng với Kazakhstan, Iran và Maldives. Ở trận ra quân vào trưa ngày hôm qua (26/3), Việt Nam gặp đôi chút khó khăn trước Iran, song 10 điểm của Thảo My đã giúp chúng ta giành thắng lợi 19-16. Cũng trong ngày hôm qua, trước đối thủ yếu Maldives, "Trương Twins" cùng hai đồng đội Nguyễn Thị Tiểu Duy và Bùi Thu Hằng đã giành chiến thắng đậm đà 21-8.
Do chỉ lấy duy nhất đội đầu bảng vào vòng trong, một kết quả tốt ở trận còn lại với Kazakhstan vào trưa nay (27/3) mới đảm bảo cho đội 3x3 nữ Việt Nam tấm vé đi tiếp. Với sức mạnh vượt trội, các cô gái của chúng ta đã thắng cách biệt đối thủ 22-12, giữ vững mạch trận bất bại để góp mặt ở vòng bảng của FIBA 3x3 Asia Cup năm nay.
Bộ đôi Trương Thảo My - Trương Thảo Vy tỏa sáng rực rỡ ở 3 trận vừa qua với lần lượt 22 điểm và 21 điểm, Tiểu Duy và Thu Hằng cũng có màn thể hiện rất tốt với 7 điểm và 12 điểm có được.
Tại vòng bảng đội tuyển bóng rổ 3x3 nữ Việt Nam sẽ nằm cùng bảng C với Nhật Bản và chủ nhà Singapore. Trương Twins cùng các đồng đội được dự báo sẽ gặp nhiều khó khăn, song không gì là không thể khi các cô gái của chúng ta đang đạt phong độ cao.
Các trận đấu của đội tuyển nữ Việt Nam ở vòng bảng FIBA 3x3 Asia Cup 2025 sẽ diễn ra từ ngày mai 28/3. Nếu lọt tứ kết, đội sẽ thi đấu sau đó 2 ngày (30/3).
Với đội 3x3 nam Việt Nam, Đinh Thanh Tâm và các đồng đội sẽ buộc phải thắng Thái Lan ở trận đấu vòng loại chiều nay để hi vọng có vé đi tiếp. Ở 2 trận đấu trước, Việt Nam lần lượt thua 16-17 rất đáng tiếc trước Turkmenistan và thắng cách biệt New Caledonia với tỉ số 21-11.'
            ],
            //3. Tennis
            [
                'Djokovic phá kỷ lục của Federer',
                'tennis.jpg',
                'Novak Djokovic trở thành tay vợt lớn tuổi nhất vào bán kết hệ thống Masters 1000',
                'Ở tuổi 37 lẻ 10 tháng, Djokovic vượt qua Roger Federer để trở thành tay vợt già nhất vào tới bán kết sự kiện Masters 1000, từ khi hệ thống ra đời năm 1990. Trước đó, Federer ở 37 tuổi lẻ 7 tháng vào tới vòng này của cả BNP Paribas Open lẫn Miami Mở rộng mùa 2019.
Cơ hội để Djokovic vào chung kết, và thậm chí vô địch, đang rộng mở khi hầu hết hạt giống cao nhất ở Miami năm nay đều đã bị loại. Trước khi Djokovic đấu Sebastian Korda, hạt giống số một Alexander Zverev gác vợt trước Arthur Fils ở vòng bốn. Đối thủ lớn nhất còn lại là hạt giống số ba Taylor Fritz trải qua trận đấu nhọc nhằn với Matteo Berrettini khi thắng 7-5, 6-7(9), 7-5.
Ở bán kết Djokovic sẽ gặp nạn nhân quen thuộc là Grigor Dimitrov, trong bối cảnh tay vợt Bulgaria bị kiệt sức sau trận tứ kết dai dẳng và kịch tính với Francisco Cerundolo. Nole thắng 12 trong 13 lần gặp Dimitrov trước đây, bao gồm 10 lần gần nhất.
Djokovic chơi gần như hoàn hảo trước Korda, chỉ thua một điểm sau những tình huống giao bóng một ở set đầu tiên. Anh khép lại set đấu bằng phong độ đỉnh cao khi thắng toàn bộ 12 điểm cuối. Trong trận đấu dài 82 phút, kỷ lục gia giữ 40 Masters 1000 thắng 84% điểm sau cú giao bóng một và chỉ đối mặt một break-point.
Chính break-point này khiến Djokovic rơi vào thế khó ở set hai, khi để Korda vượt lên dẫn 4-2. Dù vậy, bản lĩnh trong thời điểm quan trọng luôn là khác biệt của Djokovic so với phần còn lại. Trong thế buộc phải thắng game đỡ bóng ở tỷ số 3-5, Djokovic đã ép Korda về cuối sân bằng những pha điều bóng khó, rồi tận dụng ngay break-point đầu tiên để rút cách biệt. Tay vợt Serbia sau đó thắng trắng game giao kế tiếp, kéo đàn em vào loạt tie-break. Ở loạt đấu sở trường, Djokovic giữ toàn bộ sáu điểm giao bóng, và tận dụng thành công một mini-break để giành chiến thắng 7-4.
"Hôm nay tôi hoàn toàn cảm nhận được cú giao bóng", Djokovic nói về yếu tố quan trọng giúp anh thắng trận. "Korda khiến tôi phải chạy khá nhiều và cậu ấy thực sự hay ở cuối sân. Tôi đã nhiều lần nhờ cú giao bóng để thoát khỏi rắc rối, đặc biệt ở loạt tie-break. Tôi đã kết thúc nó bằng một cú giao ăn điểm trực tiếp và nó thực sự hoàn hảo".
Djokovic chỉ còn cách hai trận thắng để giành danh hiệu thứ bảy tại Miami và là chức vô địch ATP Tour thứ 100 trong sự nghiệp. Anh đang trải qua cơn khát danh hiệu dài một năm rưỡi, kể từ ATP Finals năm 2023. Thành tích của Djokovic tại Miami rất ấn tượng, với 20 thắng – 1 thua sau khi vào tới tứ kết. Thất bại duy nhất của anh trong chuỗi này là trước chính HLV của anh - Andy Murray ở chung kết năm 2009.'
            ],
            //4. Cầu Lông
            [
                'Thay đổi nhánh đấu, Nguyễn Thùy Linh gặp khó tại Swiss Open 2025',
                'caulong.jpg',
                'Nguyễn Thùy Linh rơi vào nhánh đấu tương đối khó khăn tại giải cầu lông Super 300 Swiss Open 2025.',
                'Tay vợt số 1 Việt Nam - Nguyễn Thùy Linh sẽ tham dự giải cầu lông Super 300 Swiss Open 2025 khởi tranh từ ngày mai (19/3) với các trận đấu ở nội dung đơn. 
Theo lịch trình ban đầu, Thùy Linh sẽ chạm trán đối thủ quen thuộc Michelle Li (Canada), song do có tới 3 tay vợt rút lui: Ratchanok Intanon, Sung Shuo-yun và Mia Blichfeldt, ban tổ chức giải đấu đã phải sắp xếp lại nhánh đấu và cô gái vàng của cầu lông Việt Nam sẽ chạm trán đối thủ mới.
Dựa vào cập nhật trên trang chủ của BWF (Liên đoàn Cầu lông thế giới), đối thủ vòng 1 Swiss Open 2025 của Thùy Linh sẽ là Dai Wang - tay vợt người Trung Quốc đang xếp hạng 67 thế giới.
Dai Wang sinh năm 2001, là gương mặt không quá xa lạ với người hâm mộ cầu lông Việt Nam. Tay vợt 23 tuổi thường xuyên tham dự các giải quốc tế tổ chức ở Việt Nam trước đây, từng lọt bán kết FELET Vietnam International Series 2023 và Vietnam Open 2024 - giải đấu Thùy Linh 3 năm liên tiếp vô địch.
Đây hứa hẹn sẽ là thử thách không hề dễ chịu với Thùy Linh khi cô phải đối đầu với tay vợt tiềm ẩn nhiều bất ngờ đến từ Trung Quốc. Nếu vượt qua Dai, "Hoa khôi cầu lông Việt Nam" nhiều khả năng tái ngộ Line Kjaersfeldt - bại tướng của cô ở China Masters 2023. Đối thủ tiềm năng của Thùy Linh ở tứ kết là hạt giống số 1 Pornpawee Chochuwong - người bạn thân của tay vợt quê Phú Thọ.
Nhánh đấu của Nguyễn Thùy Linh tại Swiss Open 2025 tiềm ẩn nhiều khó khăn, và trong trường hợp tiến sâu, cơ hội để tay vợt 27 tuổi tạo ra bất ngờ ở giải đấu này cũng không cao khi còn đó những "đá tảng" như HCV Olympic Tokyo 2020 - Chen Yufei, Supanida Katethong hay Zhang Beiwen.
Trận đấu giữa Nguyễn Thùy Linh và Dai Wang thuộc vòng 1 (vòng 1/16) giải cầu lông Super 300 Swiss Open 2025 dự kiến diễn ra vào ngày mai (19/3) theo giờ Việt Nam.'
            ],
            //5. Đua Xe
            [
                'Đua xe F1, Chinese GP: McLaren áp đảo ở Thượng Hải với chiến thắng 1-2',
                'duaxe.jpg',
                '(Tin thể thao, tin đua xe F1) Oscar Piastri “chuộc lỗi” thành công với chiến thắng áp đảo từ vị trí pole. Ferrari bất ngờ trắng tay sau khi chặng đua hạ màn, khi cả hai chiếc xe của họ được phát hiện vi phạm trong khâu hậu kiểm.',
                'Trước thềm chặng đua, tất cả đã dành một phút tri ân tới Eddie Jordan quá cố, nhà sáng lập đội đua Jordan. Sau đó, tất cả toàn tâm tập trung cho 56 vòng đua tốc độ cao tại trường đua quốc tế Thượng Hải.
Lựa chọn lốp cho cú bứt phá đầu tiên là lốp Medium C3. Stroll, Bearman, và Lawson - tay đua Red Bull phải xuất phát từ pit với những thay đổi của xe sau phiên phân hạng, lại lựa chọn bộ lốp Hard C2. Chiến thuật 2 dừng an toàn và được dự đoán là nhanh nhất, nhưng liệu phải chăng đánh cược với chiến thuật 1 dừng mới là lựa chọn chính xác?
Hoàn tất vòng khởi động, bộ 5 đèn tín hiệu vụt tắt, báo hiệu cuộc đua bắt đầu. Piastri xuất phát chậm, nhưng tay đua có pole nhanh chóng chặn đường tấn công của Russell tại góc cua đầu tiên. Pha phòng ngự này giúp cho Norris dễ dàng vươn lên giành lấy vị trí thứ 2. Trong khi đó, Verstappen đã tụt lại vị trí thứ 6, phía sau 2 chiếc Ferrari, hai tay đua đội Đỏ có va chạm nhẹ, và Leclerc đã mất một phần cánh gió trước
Khi Alonso chậm lại trên đường, cùng với đó là thông báo mất phanh. Aston Martin buộc phải kết thúc cuộc đua của Alonso để đảm bảo an toàn. Với “một nửa” chiếc cánh gió trước, Leclerc vẫn có thể bám sát theo Hamilton, trong khi Verstappen dần chậm lại, và khoảng cách được mở ra lên tới 5 giây.
Vòng 11, Gasly bắt đầu những lượt pit đầu tiên, nối theo sau đó là Doohan. Vòng 14, Hamilton và Verstappen cùng xuất hiện trong pit. Piastri và Russell được đưa vào pit kế tiếp, cùng với Norris và Leclerc. Russell thành công vươn lên vị trí thứ 2, nhưng đó không phải là thử thách quá lớn đối với sức mạnh của chiếc MCL39, khi ngay sau đó Norris nhanh chóng đoạt lại vị trí với lợi thế từ DRS.
Top đầu chậm rãi lấy lại vị trí từ những tay đua còn chưa pit. Vòng 21, Ferrari đổi chỗ 2 tay đua của họ, và Leclerc nhanh chóng đuổi theo Russell phía trước cho vị trí thứ 4. Bearman có cuộc cạnh tranh mãn nhãn cho vị trí thứ 7 với Stroll, cả 2 đều chưa thực hiện lượt pit của mình
Piastri giành chiến thắng hoàn hảo
Bước vào nửa sau của cuộc đua, các đội đua bắt đầu suy nghĩ tới khả năng của chiến thuật 1 dừng. Vòng 38, Hamilton vào pit, và trở lại phía sau Verstappen với bộ lốp Hard mới. Nhà đương kim vô địch như được thức tỉnh, mở khóa tiềm năng và nhanh chóng đuổi theo vị trí thứ 4 của Leclerc.
Tương tự như Hamilton, Racing Bulls cũng nhận thấy chiến thuật 2 dừng đã không đem lại hiệu quả trong cuộc đua này. Vòng 46, cánh gió của Tsunoda bật gãy trên đoạn thẳng chính, và tay đua người Nhật phải trở về pit sau đó. Một cuộc đua đáng quên, mặc dù Racing Bulls đem đã đem tới màn thể hiện xuất sắc tại phiên phân hạng.
Trở lại phía đầu đoàn đua, Norris từ vị trí thứ 2 phát hiện vấn đề với bàn đạp phanh. Vì vậy, McLaren không mạo hiểm và đưa cả 2 chiếc xe về an toàn. Trong khi đó, Verstappen đã trở lại vào tầm DRS so với Leclerc
Vòng 53, Verstappen với DRS vươn lên dẫn trước tại góc cua thứ nhất. Leclerc ‘chịu thua’ sau pha phòng thủ tại góc cua thứ 14 trước đó. Ở phía sau, Doohan và Hadjar tiếp tục cạnh tranh sát sao cho vị trí thứ 14, mặc dù tay đua Alpine đã phải nhận án phạt 10 giây sau khi chặn đứng đường tấn công của Hadjar tại góc cua thứ 14 trước đó.
Piastri hoàn tất cuộc đua hoàn hảo, và có được chiến thắng tại GP Trung Quốc 2025 lần này. Norris cán đích và đem về chiến thắng 1-2 đầu tiên của mùa giải dành cho McLaren. Mặc dù cuối cuộc đua, #4 thực sự gặp khó khăn với chân phanh, và may mắn cho anh là cuộc đua không kéo dài thêm 1-2 vòng đua.
Cú sốc với Leclerc, Hamilton
Russell tiếp tục góp mặt trên top 3 chung cuộc. Verstappen về đích tại vị trí thứ 4. Hai tay đua Ferrari chỉ có kết quả khiêm tốn tại vị trí thứ 5 và thứ 6, đúng với vị trí xuất phát của họ.
Haas xuất sắc đưa cả 2 tay đua lọt vào top 10 với Ocon và Bearman lần lượt tại vị trí thứ 7 và thứ 10. Cuối cùng là Antonelli tại vị trí thứ 8, và Albon tại vị trí thứ 9
Tuy nhiên, sau khi hoàn tất khâu kiểm tra sau chặng đua, ban trọng tài đã phát hiện vi phạm trên chiếc xe của Leclerc, Hamilton, Gasly. Trong đó, với chiếc xe #16 và #10 không đạt trọng lượng tối thiểu. Còn với #44 là tấm sàn được cho là bị mòn quá mức cho phép. Với các vi phạm nếu trên, kết quả của cả 3 tay đua đều bị hủy. Điều này cũng đồng nghĩa với việc Ocon, Antonelli, Albon, Bearman được thăng hạng, và Stroll cùng Sainz sẽ nhận vị trí thứ 9 và thứ 10 chung cuộc.
Hai chặng đua đầu tiên đã đem tới đẩy đủ yếu tố hỗn loạn như điều kiện thời tiết khó lường, nhiều tai nạn, cũng như là những màn cạnh tranh nảy lửa, và những tình huống vượt mãn nhãn. F1 sẽ có 1 tuần tạm nghỉ khỏi những điều đó, trước khi bước vào triple-header đầu tiên của mùa giải.'
            ],
            //6. Phim Ảnh
            [
                "Phim tài liệu âm nhạc 'Anh trai say hi: Kẻ phản diện tạo nên người hùng' gây sốt phòng vé.",
                'phimanh.jpg',
                'Bộ phim tài liệu âm nhạc tái hiện những khoảnh khắc đáng nhớ từ 4 đêm nhạc tại TP HCM và Hà Nội trong năm 2024, đồng thời mang đến góc nhìn chân thật về các nghệ sĩ sau ánh hào quang sân khấu.',
                '"Anh trai say hi: Kẻ phản diện tạo nên người hùng" – Câu chuyện từ bóng tối đến ánh sáng của âm nhạc Việt
Một hành trình âm nhạc đầy cảm hứng
"Anh trai say hi: Kẻ phản diện tạo nên người hùng" không chỉ đơn thuần là một bộ phim tài liệu âm nhạc mà còn là một hành trình đầy cảm hứng, kể về sự trưởng thành, vươn lên và tìm lại ánh sáng của những con người từng lạc lối trong thế giới giải trí. Được phát triển từ chương trình giải trí đình đám "Anh trai say hi", bộ phim mang đến một cái nhìn chân thực và sâu sắc về những góc khuất của nghệ sĩ trên hành trình chinh phục giấc mơ âm nhạc.
Khám phá sự thật đằng sau ánh hào quang
Điều làm nên sự đặc biệt của bộ phim này là cách mà nó phơi bày sự thật đằng sau những phút giây thăng hoa trên sân khấu. Những nghệ sĩ từng được công chúng yêu mến và tung hô đã phải đối mặt với những khoảng tối, những giây phút lầm lạc, thậm chí là gục ngã trước áp lực từ sự nổi tiếng và những lời phán xét vô hình từ dư luận. Bộ phim không ngần ngại vạch trần những góc tối đó, nhưng không phải để trách cứ, mà là để khơi dậy một niềm tin mới, rằng dù có vấp ngã, con người ta vẫn có thể đứng lên và tiếp tục cuộc hành trình.
Hành trình của "kẻ phản diện" tìm lại chính mình
Nhân vật chính của phim – một nghệ sĩ từng gây tranh cãi bởi những scandal đời tư và sự nổi loạn trên sân khấu – được khắc họa không chỉ như một "kẻ phản diện" mà còn là một người hùng trong chính câu chuyện cuộc đời mình. Sự nổi loạn đó không đơn thuần là sự bốc đồng mà còn là hệ quả của những tổn thương sâu sắc từ quá khứ, từ những thất bại mà anh đã phải đối mặt. Bộ phim giúp khán giả thấu hiểu rằng, đôi khi để trở thành một người hùng, chúng ta phải trải qua những giai đoạn tăm tối nhất của cuộc đời.
Thành công vang dội – Hơn 12,3 tỷ đồng doanh thu và sự ủng hộ từ khán giả
Ngay từ khi ra mắt, "Anh trai say hi: Kẻ phản diện tạo nên người hùng" đã nhận được sự ủng hộ nhiệt tình từ đông đảo khán giả. Bộ phim đã mang về hơn 12,3 tỷ đồng doanh thu, một con số ấn tượng đối với một tác phẩm tài liệu âm nhạc tại Việt Nam. Điều này chứng tỏ rằng khán giả không chỉ tò mò về cuộc đời nghệ sĩ mà còn đồng cảm với thông điệp mạnh mẽ mà bộ phim truyền tải – rằng ai cũng có thể sai lầm, nhưng quan trọng là cách chúng ta đứng lên và vượt qua.
Thông điệp sâu sắc về nghị lực sống và niềm tin vào tương lai
Bộ phim không chỉ là một hành trình âm nhạc mà còn là một thông điệp nhân văn về sự vươn lên, sự tha thứ và sự kiên trì trong cuộc sống. Những giọt nước mắt, những giây phút ngậm ngùi và những lời tâm sự từ đáy lòng của nhân vật chính khiến khán giả không khỏi xúc động. "Anh trai say hi: Kẻ phản diện tạo nên người hùng" như một lời nhắc nhở rằng, dù con đường phía trước có khó khăn đến đâu, chỉ cần có nghị lực và lòng tin, chúng ta hoàn toàn có thể chuyển hóa những vết thương thành động lực để vươn lên.
Một tác phẩm không thể bỏ lỡ đối với người yêu nhạc và điện ảnh
Với cách kể chuyện độc đáo, những thước phim chân thực và nhạc nền đầy cảm xúc, bộ phim đã tạo được dấu ấn mạnh mẽ trong lòng khán giả. Không chỉ là câu chuyện của một cá nhân, "Anh trai say hi: Kẻ phản diện tạo nên người hùng" còn là tấm gương phản chiếu cho những ai từng vấp ngã và mất đi niềm tin vào bản thân. Bộ phim đã thành công trong việc truyền tải thông điệp tích cực, giúp khán giả nhận ra rằng, từ những thất bại, chúng ta vẫn có thể tìm lại được chính mình và viết tiếp những chương mới của cuộc đời.
Kết luận
"Anh trai say hi: Kẻ phản diện tạo nên người hùng" là một bộ phim tài liệu âm nhạc hiếm hoi gây được tiếng vang lớn trong lòng công chúng. Với sự ủng hộ nhiệt tình và doanh thu ấn tượng, bộ phim đã khẳng định được sức mạnh của âm nhạc trong việc hàn gắn và khơi dậy nghị lực sống. Đây là một tác phẩm không thể bỏ qua đối với những ai yêu thích âm nhạc, điện ảnh và cả những ai đang tìm kiếm nguồn cảm hứng để đứng dậy sau những lần vấp ngã.'
            ],
            //7. Âm nhạc
            [
                'Ed Sheeran hứa hẹn phát hành ca khúc mới và album thứ tám',
                'amnhac.jpg',
                'Ca sĩ nổi tiếng người Anh, Ed Sheeran, thông báo sẽ ra mắt ca khúc mới và chuẩn bị phát hành album thứ tám trong sự nghiệp.',
                'Ed Sheeran hé lộ album thứ tám với nhiều điều bất ngờ: Sự trở lại ngoạn mục của “hoàng tử nhạc Pop”
Ed Sheeran, cái tên không còn xa lạ với người yêu nhạc trên toàn thế giới, đang khiến người hâm mộ háo hức chờ đón khi thông báo về kế hoạch phát hành ca khúc mới, đồng thời tiết lộ về album thứ tám đầy hứa hẹn. Với hàng loạt bản hit toàn cầu như Shape of You, Perfect, Thinking Out Loud, Ed Sheeran luôn biết cách khiến khán giả mê đắm bởi giọng ca ấm áp và khả năng sáng tác đầy cảm xúc.
Hành trình âm nhạc và sự trưởng thành của Ed Sheeran
Sau thành công vang dội của album trước đó, Ed Sheeran dường như không hề dừng lại. Anh đã âm thầm làm việc trong suốt thời gian qua, không ngừng tìm kiếm cảm hứng mới từ những trải nghiệm cá nhân và cuộc sống xung quanh. Được biết, album thứ tám lần này sẽ mang phong cách hoàn toàn mới, khác biệt so với những dự án trước đây, với sự pha trộn độc đáo giữa các thể loại nhạc từ pop, folk đến R&B và indie.
Theo tiết lộ từ phía nam ca sĩ, ca khúc mới dự kiến sẽ là một bản ballad lãng mạn, mang đậm dấu ấn cá nhân nhưng vẫn không thiếu đi sự cuốn hút vốn có. Đặc biệt, ca khúc này được anh ấp ủ trong một khoảng thời gian dài, với lời ca được trau chuốt và giai điệu mang đậm chất tự sự. Ed chia sẻ rằng anh muốn mang đến một câu chuyện đầy cảm xúc và chạm đến trái tim của mọi người nghe.
Album thứ tám: Một bức tranh đa chiều về cuộc sống và tình yêu
Album thứ tám của Ed Sheeran được ví như một bức tranh ghép từ những mảnh ghép cuộc sống, tình yêu và những suy tư sâu sắc. Không chỉ có những bản ballad ngọt ngào, album còn có cả những bản nhạc sôi động và phá cách, thể hiện rõ nét sự trưởng thành trong âm nhạc của anh. Điều khiến người hâm mộ phấn khích chính là việc Ed tiết lộ rằng album sẽ bao gồm các bản song ca với nhiều nghệ sĩ nổi tiếng, hứa hẹn sẽ mang đến sự mới mẻ và bùng nổ.
Quá trình sáng tác và cảm hứng đằng sau album
Trong một buổi phỏng vấn gần đây, Ed Sheeran chia sẻ rằng anh đã dành nhiều thời gian để hoàn thiện các ca khúc, làm việc với nhiều nhà sản xuất âm nhạc tài năng trên khắp thế giới. Không chỉ vậy, anh còn tự mình thử nghiệm với các nhạc cụ mới và nhiều phong cách phối âm khác biệt, nhằm mang đến sự tươi mới và không nhàm chán cho người nghe.
Bên cạnh đó, Ed cũng tâm sự rằng khoảng thời gian giãn cách vì đại dịch đã khiến anh có cơ hội nhìn lại bản thân, suy ngẫm về những thăng trầm trong sự nghiệp và cuộc sống. Từ đó, nhiều ý tưởng mới đã ra đời, giúp anh xây dựng một album mang đậm dấu ấn cá nhân, nhưng cũng không thiếu đi sự kết nối với người nghe thông qua những giai điệu gần gũi và lời ca sâu lắng.
Sự chờ đợi của người hâm mộ trên toàn thế giới
Ngay sau khi thông báo về dự án mới, cộng đồng fan của Ed Sheeran trên toàn cầu đã không giấu nổi sự phấn khích. Nhiều người đã nhanh chóng đăng tải lên mạng xã hội để bày tỏ niềm vui và sự háo hức. Các diễn đàn âm nhạc cũng nhanh chóng trở nên sôi động với vô số lời dự đoán về ca khúc mới và album sắp tới.
Được biết, Ed Sheeran cũng sẽ tổ chức một buổi livestream đặc biệt để giới thiệu ca khúc mới, nơi anh sẽ trò chuyện trực tiếp với người hâm mộ và chia sẻ thêm về quá trình sáng tác cũng như thông điệp mà album muốn truyền tải. Đây hứa hẹn sẽ là một sự kiện đáng mong chờ, giúp người nghe hiểu rõ hơn về những câu chuyện đằng sau từng nốt nhạc và lời ca.
Kỳ vọng về một kỷ lục mới
Với sức hút của một trong những nghệ sĩ hàng đầu thế giới, Ed Sheeran chắc chắn sẽ không làm người hâm mộ thất vọng. Các chuyên gia trong ngành âm nhạc đều kỳ vọng rằng album thứ tám của anh sẽ nhanh chóng đứng đầu các bảng xếp hạng, đồng thời phá vỡ nhiều kỷ lục đã được thiết lập trước đó.
Đối với Ed Sheeran, mỗi ca khúc không chỉ là một tác phẩm nghệ thuật mà còn là một phần trong hành trình trưởng thành của anh. Việc ra mắt album thứ tám không chỉ là một dấu mốc quan trọng trong sự nghiệp mà còn là lời tri ân dành cho người hâm mộ – những người luôn đồng hành và ủng hộ anh qua bao thăng trầm.
Với tất cả những yếu tố đặc sắc ấy, không khó để nhận thấy rằng album sắp tới của Ed Sheeran sẽ là một "cơn sốt" trong làng nhạc quốc tế, đưa tên tuổi của anh lên một tầm cao mới và khẳng định vị thế của “hoàng tử nhạc Pop” trong lòng công chúng.'
            ],
            //8. Game
            [
                "Phim dựa trên game 'Liên minh huyền thoại' sẽ quay tại Cát Bà",
                'game.jpg',
                "Riot Studios dự kiến quay loạt phim truyền hình 9 tập dựa trên game 'Liên minh huyền thoại' tại Cát Bà vào cuối năm nay.",
                'Riot Games đưa "Liên minh huyền thoại" lên màn ảnh: Loạt phim truyền hình và phim hoạt hình tại Cát Bà, Hải Phòng – Bước đột phá trong việc quảng bá du lịch Việt Nam
Riot Games, nhà phát triển game đình đám với tựa game nổi tiếng toàn cầu Liên minh huyền thoại (League of Legends), đã khiến cộng đồng game thủ và người hâm mộ phấn khích khi công bố dự án loạt phim truyền hình và phim hoạt hình dựa trên tựa game này. Điều đặc biệt là các cảnh quay của loạt phim sẽ được thực hiện tại Cát Bà, Hải Phòng – một trong những địa điểm du lịch nổi tiếng của Việt Nam.
Bước đột phá của Riot Games trong lĩnh vực điện ảnh
Riot Games vốn không còn xa lạ với việc khai thác thế giới Liên minh huyền thoại dưới nhiều hình thức sáng tạo khác nhau. Tuy nhiên, việc đưa tựa game này lên màn ảnh với loạt phim truyền hình và phim hoạt hình dài tập thực sự là một bước tiến đầy tham vọng. Được biết, đây sẽ là một dự án hợp tác quốc tế với đội ngũ sản xuất hùng hậu và chuyên nghiệp, nhằm mang đến cho người xem trải nghiệm hoàn toàn mới mẻ và hấp dẫn.
Trong thông báo chính thức, Riot Games đã khẳng định loạt phim sẽ mang đến cái nhìn sâu sắc hơn về vũ trụ Runeterra – thế giới huyền bí đầy màu sắc mà các vị tướng trong Liên minh huyền thoại sinh sống và chiến đấu. Khán giả sẽ được chiêm ngưỡng những câu chuyện gắn liền với các nhân vật huyền thoại như Yasuo, Jinx, Ahri, và nhiều vị tướng khác.
Sự lựa chọn đầy bất ngờ: Cát Bà, Hải Phòng
Một trong những điểm nhấn đặc biệt của dự án lần này là việc lựa chọn Cát Bà, Hải Phòng làm bối cảnh quay chính. Đây là địa danh nổi tiếng với thiên nhiên hùng vĩ, biển xanh trong vắt và hệ sinh thái đa dạng, hứa hẹn mang đến cho loạt phim một vẻ đẹp tự nhiên đầy cuốn hút.
Theo Riot Games, Cát Bà không chỉ phù hợp với cảnh quan kỳ ảo của Runeterra mà còn giúp tạo ra sự giao thoa độc đáo giữa nét đẹp văn hóa Việt Nam và thế giới giả tưởng trong Liên minh huyền thoại. Dự án này cũng là một cơ hội tuyệt vời để quảng bá hình ảnh du lịch Việt Nam ra thế giới, thu hút du khách quốc tế đến khám phá vùng đất tuyệt đẹp này.
Quảng bá du lịch Việt Nam qua lăng kính điện ảnh
Việc Riot Games chọn Việt Nam làm địa điểm quay phim không chỉ mang lại niềm tự hào cho cộng đồng game thủ Việt mà còn góp phần tạo ra hiệu ứng tích cực trong ngành du lịch. Với sức hút từ thương hiệu Liên minh huyền thoại cùng lượng fan đông đảo trên toàn cầu, loạt phim này sẽ giúp giới thiệu cảnh sắc tuyệt đẹp của Cát Bà đến hàng triệu khán giả quốc tế.
Các chuyên gia du lịch đánh giá rằng, nếu loạt phim thành công, Cát Bà có thể trở thành điểm đến thu hút du khách trẻ yêu thích game và điện ảnh. Điều này cũng đồng nghĩa với việc tạo ra động lực mới cho ngành du lịch Việt Nam, đặc biệt là khi các cảnh quay tại Cát Bà được tái hiện một cách hoành tráng và sống động trên màn ảnh.
Sự mong đợi từ cộng đồng game thủ và người yêu điện ảnh
Ngay sau khi thông tin được công bố, cộng đồng game thủ và người hâm mộ Liên minh huyền thoại đã nhanh chóng thể hiện sự háo hức và tò mò về dự án này. Trên các diễn đàn và mạng xã hội, không ít người bày tỏ sự phấn khích và hy vọng rằng loạt phim sẽ giữ được tinh thần nguyên bản của trò chơi, đồng thời mang lại những trải nghiệm đầy cảm xúc.
Một số người còn kỳ vọng rằng loạt phim sẽ không chỉ dừng lại ở việc tái hiện các trận chiến hoành tráng mà còn khai thác sâu hơn về câu chuyện cá nhân của từng vị tướng. Điều này sẽ giúp khán giả, dù là game thủ hay không, đều có thể cảm nhận được sự phức tạp và chiều sâu của thế giới Liên minh huyền thoại.
Kỳ vọng về một siêu phẩm điện ảnh mang dấu ấn Việt Nam
Không chỉ mang lại làn gió mới cho cộng đồng game thủ, dự án còn được kỳ vọng trở thành một tác phẩm điện ảnh đột phá, tạo dựng dấu ấn riêng trong thị trường phim quốc tế. Với sự đầu tư kỹ lưỡng từ Riot Games, cùng đội ngũ sản xuất giàu kinh nghiệm, loạt phim không chỉ nhằm phục vụ người hâm mộ của tựa game mà còn hướng đến đối tượng khán giả đại chúng.
Đại diện Riot Games cũng chia sẻ rằng họ sẽ nỗ lực để giữ nguyên tinh thần của trò chơi, nhưng đồng thời mở rộng câu chuyện theo một hướng tiếp cận mới mẻ và đầy sáng tạo. Các yếu tố như âm nhạc, kỹ xảo và kịch bản đều được chăm chút kỹ lưỡng, đảm bảo mang lại trải nghiệm tuyệt vời cho người xem.
Tương lai của dự án và sự phát triển của du lịch Việt Nam
Dự án loạt phim Liên minh huyền thoại không chỉ là dấu ấn đáng nhớ của Riot Games trong lĩnh vực điện ảnh mà còn là cơ hội hiếm có để quảng bá vẻ đẹp Việt Nam ra thế giới. Với tiềm năng thu hút du khách từ khắp nơi, Cát Bà hứa hẹn sẽ trở thành một trong những điểm đến yêu thích của cộng đồng game thủ và người yêu điện ảnh.
Từ một trò chơi điện tử trở thành một hiện tượng văn hóa đại chúng, Liên minh huyền thoại đã chứng minh sức ảnh hưởng vượt ra khỏi thế giới ảo. Và với dự án phim lần này, Riot Games tiếp tục khẳng định tầm nhìn chiến lược và khả năng tạo ra những sản phẩm chất lượng, không chỉ thu hút người hâm mộ mà còn góp phần tôn vinh vẻ đẹp tự nhiên và văn hóa Việt Nam.
Hãy cùng chờ đón loạt phim Liên minh huyền thoại và xem liệu Riot Games có thể chinh phục trái tim khán giả toàn cầu một lần nữa bằng sự kết hợp độc đáo giữa thế giới game và nghệ thuật điện ảnh!'
            ],
            //9. Sách
            [
                'Marvel vén màn bí mật về những siêu anh hùng',
                'sach.jpg',
                'Marvel chuẩn bị ra mắt loạt sách hé lộ lịch sử ra đời của những nhân vật siêu anh hùng biểu tượng như Người Nhện, Người Sắt.',
                'Marvel ra mắt loạt sách mới: Hé lộ hành trình phát triển của các siêu anh hùng huyền thoại
Marvel, một trong những cái tên đình đám trong ngành công nghiệp truyện tranh và phim ảnh, lại tiếp tục khiến cộng đồng người hâm mộ phấn khích với thông báo ra mắt loạt sách mới. Đây là một bước đi đầy bất ngờ và thú vị, khi Marvel không chỉ tập trung vào việc phát triển các dự án điện ảnh bom tấn mà còn mở rộng sang lĩnh vực sách chuyên sâu, giúp độc giả khám phá chiều sâu của vũ trụ siêu anh hùng.
Cuốn sách tiết lộ bí mật về hành trình hình thành siêu anh hùng
Loạt sách mới của Marvel sẽ mang đến những câu chuyện chưa từng được kể về quá trình hình thành và phát triển của các siêu anh hùng nổi tiếng như Iron Man, Captain America, Thor, Hulk, Spider-Man, và rất nhiều nhân vật khác. Không chỉ đơn thuần là những câu chuyện phiêu lưu đầy kịch tính, loạt sách còn đào sâu vào những yếu tố nội tâm, tâm lý và những khó khăn mà các nhân vật phải đối mặt trên hành trình trở thành anh hùng.
Điều đặc biệt ở loạt sách lần này là Marvel sẽ kết hợp nhiều tài liệu, bản phác thảo gốc, cũng như những đoạn phỏng vấn độc quyền với các nhà sáng tạo đã góp phần xây dựng nên những nhân vật mang tính biểu tượng này. Độc giả sẽ có cơ hội khám phá những câu chuyện hậu trường thú vị, từ ý tưởng ban đầu cho đến quá trình phát triển nhân vật qua từng thời kỳ.
Khám phá vũ trụ Marvel qua từng trang sách
Trong bối cảnh các siêu anh hùng ngày càng trở nên quen thuộc với khán giả qua màn ảnh rộng, việc Marvel cho ra mắt loạt sách chuyên sâu về từng nhân vật như một lời khẳng định rằng câu chuyện của họ vẫn còn rất nhiều điều chưa được khai thác. Với sự tỉ mỉ và chi tiết trong từng trang sách, người hâm mộ sẽ không chỉ được sống lại những khoảnh khắc hào hùng mà còn được khám phá những góc khuất đằng sau hào quang của các siêu anh hùng.
Loạt sách sẽ đi sâu vào từng giai đoạn phát triển của các nhân vật, từ những năm tháng sơ khai khi họ còn chưa được công nhận là anh hùng, đến khi vượt qua những thử thách cam go để trở thành biểu tượng bảo vệ công lý. Bằng cách khai thác câu chuyện theo hướng chân thực và giàu cảm xúc, Marvel kỳ vọng sẽ tạo ra sự đồng cảm sâu sắc hơn từ phía người đọc.
Tầm quan trọng của loạt sách đối với cộng đồng người hâm mộ
Việc Marvel ra mắt loạt sách này không chỉ là món quà dành cho các fan cứng, mà còn là cơ hội để những người mới làm quen với vũ trụ Marvel có cái nhìn toàn diện hơn về từng siêu anh hùng. Những câu chuyện đằng sau bộ giáp sắt của Iron Man, tấm khiên kiên cố của Captain America hay chiếc búa thần của Thor sẽ được kể lại với một chiều sâu mới, đầy nhân văn và tinh tế.
Đại diện Marvel chia sẻ rằng dự án sách này là sự kết hợp của nhiều năm nghiên cứu, biên tập và tổng hợp tài liệu từ các nguồn khác nhau. Họ mong muốn mang đến cho độc giả trải nghiệm phong phú và độc đáo, để từ đó hiểu rõ hơn về ý nghĩa thực sự của từng siêu anh hùng trong bối cảnh văn hóa đại chúng.
Kỳ vọng từ người hâm mộ và giới phê bình
Ngay khi thông tin về loạt sách mới được công bố, cộng đồng người hâm mộ đã nhanh chóng thể hiện sự háo hức và mong chờ. Nhiều người cho rằng đây sẽ là một cơ hội hiếm có để hiểu rõ hơn về thế giới siêu anh hùng mà họ luôn yêu mến.
Các chuyên gia phê bình cũng nhận định rằng đây là một bước đi thông minh của Marvel trong việc đa dạng hóa nội dung và tiếp cận nhiều đối tượng độc giả hơn. Thay vì chỉ tập trung vào các sản phẩm điện ảnh, Marvel đã nhận ra tầm quan trọng của việc giữ lửa đam mê thông qua các ấn phẩm văn học.
Góc nhìn sâu sắc hơn về nhân vật và giá trị nhân văn
Không chỉ dừng lại ở việc cung cấp thông tin về quá trình sáng tạo, loạt sách của Marvel còn mang đến những bài học sâu sắc về tinh thần trách nhiệm, lòng dũng cảm và khả năng vượt qua nghịch cảnh. Những thông điệp nhân văn đằng sau từng siêu anh hùng sẽ được khắc họa rõ nét, giúp độc giả nhìn nhận họ không chỉ là những người có sức mạnh phi thường, mà còn là những cá nhân đầy yếu đuối và mâu thuẫn.
Việc xây dựng hình tượng siêu anh hùng luôn gắn liền với thông điệp về hy vọng và sự đoàn kết. Do đó, loạt sách không chỉ là một chuyến phiêu lưu về mặt cảm xúc mà còn là nguồn cảm hứng để độc giả học hỏi từ chính những sai lầm và thành công của các nhân vật.
Ngày ra mắt và kỳ vọng của độc giả
Theo thông tin từ Marvel, loạt sách mới dự kiến sẽ được phát hành đồng loạt tại nhiều quốc gia trong thời gian tới. Độc giả có thể đặt mua trước qua các trang thương mại điện tử hoặc tại các cửa hàng sách lớn trên toàn cầu.
Với lượng fan hùng hậu và niềm yêu mến cuồng nhiệt dành cho các siêu anh hùng, chắc chắn rằng loạt sách này sẽ nhanh chóng trở thành hiện tượng trong cộng đồng người hâm mộ Marvel. Hãy cùng chờ đón và khám phá những câu chuyện chưa từng được kể về hành trình vĩ đại của các siêu anh hùng nổi tiếng nhất thế giới!'
            ],
            //10. Thời Trang
            [
                'Làn sóng Hàn Quốc và bài học phát triển công nghiệp văn hóa',
                'thoitrang.jpg',
                'Làn sóng Hàn Quốc (Hallyu) đã thúc đẩy sự phát triển mạnh mẽ của các lĩnh vực như âm nhạc, phim ảnh, thời trang, trở thành bài học quý giá cho việc phát triển công nghiệp văn hóa.',
                'Hallyu - Làn sóng văn hóa Hàn Quốc chinh phục thế giới
Trong vài thập kỷ qua, Hallyu (hay còn gọi là Làn sóng Hàn Quốc) đã trở thành hiện tượng văn hóa toàn cầu, mang theo sức mạnh lan tỏa của nghệ thuật, âm nhạc, điện ảnh, thời trang và nhiều lĩnh vực khác. Được hình thành từ sự kết hợp hài hòa giữa yếu tố truyền thống và hiện đại, Hallyu không chỉ mang đậm bản sắc văn hóa Hàn Quốc mà còn chứa đựng sự sáng tạo và đổi mới không ngừng.
Nguồn gốc và sự phát triển của Hallyu
Hallyu bắt đầu nhen nhóm từ cuối những năm 1990 với sự phổ biến của các bộ phim truyền hình Hàn Quốc tại các quốc gia châu Á, đặc biệt là Trung Quốc và Nhật Bản. Bộ phim nổi tiếng "Winter Sonata" đã mở đầu cho cơn sốt phim truyền hình Hàn, thu hút sự quan tâm của hàng triệu khán giả quốc tế. Thành công ban đầu đó đã khuyến khích nền công nghiệp giải trí Hàn Quốc đầu tư mạnh mẽ vào việc sản xuất các nội dung chất lượng cao.
Bên cạnh phim ảnh, âm nhạc cũng là một yếu tố quan trọng góp phần làm nên sức hút của Hallyu. Các nhóm nhạc K-pop như BTS, BLACKPINK, EXO, TWICE đã trở thành những biểu tượng toàn cầu, phá vỡ nhiều kỷ lục về lượt xem trên YouTube cũng như doanh số bán đĩa. Âm nhạc Hàn Quốc với giai điệu bắt tai, vũ đạo ấn tượng và phong cách trình diễn độc đáo đã thu hút không chỉ giới trẻ mà còn cả các thế hệ lớn tuổi trên khắp thế giới.
Thời trang và làm đẹp Hàn Quốc: Xu hướng dẫn đầu
Bên cạnh âm nhạc và phim ảnh, thời trang và làm đẹp cũng là những yếu tố giúp Hallyu lan tỏa mạnh mẽ. Phong cách thời trang của các thần tượng K-pop luôn được yêu thích và học hỏi, từ trang phục sân khấu đến thời trang thường ngày. Các thương hiệu thời trang Hàn Quốc như Stylenanda, Gentle Monster hay các hãng mỹ phẩm như Innisfree, Etude House cũng không ngừng mở rộng thị trường quốc tế.
Làn sóng làm đẹp từ Hàn Quốc, với các xu hướng trang điểm tự nhiên, chăm sóc da 10 bước hay sử dụng mặt nạ giấy, đã tạo ra cơn sốt chưa từng có. Các sản phẩm chăm sóc da từ Hàn Quốc nổi tiếng với công thức từ thiên nhiên và công nghệ hiện đại, đáp ứng nhu cầu chăm sóc sắc đẹp của đông đảo người tiêu dùng trên toàn cầu.
Hallyu trong đời sống hiện đại
Sự thành công của Hallyu không chỉ giới hạn trong ngành giải trí mà còn ảnh hưởng sâu rộng đến các lĩnh vực khác như ẩm thực, du lịch và văn hóa sống. Người hâm mộ trên khắp thế giới không chỉ yêu thích các sản phẩm nghệ thuật mà còn muốn trải nghiệm trực tiếp văn hóa Hàn Quốc qua các món ăn như kimchi, bulgogi hay thậm chí là tham quan những địa điểm nổi tiếng từng xuất hiện trong các bộ phim truyền hình.
Thành công của Hallyu còn được củng cố qua việc tổ chức các buổi hòa nhạc quốc tế, sự kiện thời trang hay triển lãm văn hóa Hàn Quốc tại nhiều quốc gia. Các buổi biểu diễn của BTS, BLACKPINK hay các lễ hội Hallyu luôn thu hút hàng chục nghìn khán giả, khẳng định sức hút chưa hề suy giảm của làn sóng này.
Sự kết hợp hài hòa giữa truyền thống và hiện đại
Một trong những yếu tố tạo nên sức hút mạnh mẽ của Hallyu chính là khả năng kết hợp hài hòa giữa văn hóa truyền thống và phong cách hiện đại. Âm nhạc K-pop không ngại lồng ghép các yếu tố truyền thống như nhạc cụ dân gian vào các bản hit hiện đại. Các bộ phim cổ trang như "The King: Eternal Monarch" hay "Kingdom" không chỉ kể về quá khứ mà còn đan xen những yếu tố kỳ ảo và hiện đại, tạo nên sức hút độc đáo.
Trong thời trang, sự kết hợp giữa trang phục Hanbok truyền thống với các thiết kế hiện đại cũng tạo nên những bộ sưu tập độc đáo và thu hút sự chú ý của giới thời trang quốc tế. Các bộ trang phục lấy cảm hứng từ văn hóa dân gian được các nghệ sĩ K-pop diện trên sân khấu đã góp phần tôn vinh nét đẹp văn hóa truyền thống mà không làm mất đi tính thời thượng.
Tầm ảnh hưởng của Hallyu đối với nền kinh tế
Hallyu không chỉ mang lại lợi ích văn hóa mà còn tạo ra nguồn thu lớn cho nền kinh tế Hàn Quốc. Ngành công nghiệp giải trí đóng góp hàng tỷ USD vào GDP mỗi năm thông qua doanh thu từ các buổi hòa nhạc, sản phẩm âm nhạc, phim ảnh, mỹ phẩm và du lịch. Chính phủ Hàn Quốc cũng tích cực hỗ trợ và quảng bá Hallyu như một công cụ ngoại giao văn hóa, nhằm nâng cao vị thế quốc gia trên trường quốc tế.
Lời kết
Hallyu không chỉ là một hiện tượng nhất thời mà đã trở thành một biểu tượng văn hóa đại diện cho sức mạnh sáng tạo và đổi mới của Hàn Quốc. Sự lan tỏa mạnh mẽ của làn sóng này đã chứng minh rằng việc kết hợp giữa truyền thống và hiện đại có thể tạo nên sức hút bền vững. Với tình yêu và sự ủng hộ từ người hâm mộ trên toàn cầu, Hallyu chắc chắn sẽ tiếp tục phát triển và khẳng định vị thế của mình trong tương lai.
'
            ],
            //11. Chính Trị
            [
                'Tổng thống Brazil: Việt Nam là bạn bè gần gũi, đối tác quan trọng',
                'chinhtri.jpg',
                'Tổng Bí thư nhấn mạnh tiềm năng hợp tác giữa hai nước trong các lĩnh vực kinh tế - thương mại, nông nghiệp, năng lượng, quốc phòng, và cho rằng cần tăng cường trao đổi, hợp tác về giáo dục, văn hóa, thể thao.',
                'Tổng Bí thư Tô Lâm đánh giá cao việc Brazil công nhận Quy chế Kinh tế thị trường của Việt Nam, tạo thuận lợi cho thương mại song phương. Tổng Bí thư đề nghị hai bên phối hợp thúc đẩy đàm phán một khuôn khổ thương mại ưu đãi giúp gắn kết Việt Nam và Khối Thị trường chung Nam Mỹ (MERCOSUR).
Tổng thống Lula da Silva nhấn mạnh hai nước cần tiếp tục trao đổi để xác định các mặt hàng, lĩnh vực hợp tác cụ thể, phù hợp với nhu cầu của mỗi nước, qua đó mở rộng thương mại song phương, hướng tới mục tiêu kim ngạch thương mại đạt 15 tỷ USD trong thời gian tới.
Chiều 23/8, Thủ tướng Phạm Minh Chính hội kiến Tổng thống Lula da Silva tại Trụ sở Chính phủ, thông báo Việt Nam sẵn sàng có bước đi mở cửa thị trường cho thịt bò của Brazil trong tổng thể gói mở cửa thị trường nông sản sẽ được thống nhất giữa hai nước, trong đó có sản phẩm cá tra và tôm của Việt Nam.
Thủ tướng hoan nghênh các doanh nghiệp lớn của Brazil đang cân nhắc đầu tư tại Việt Nam, trong đó có Tập đoàn JBS S.A. trong lĩnh vực chế biến thực phẩm. Thủ tướng khẳng định sẽ chỉ đạo các bộ, ngành tạo điều kiện thuận lợi cho các hoạt động thương mại, đầu tư của doanh nghiệp Brazil, đặc biệt là trong lĩnh vực hàng không, khoáng sản.
Tổng thống Lula da Silva nhất trí chỉ đạo cơ quan chức năng Brazil xem xét tích cực đề xuất của Việt Nam về sớm khởi động đàm phán một khuôn khổ hiệp định thương mại giữa Việt Nam và MERCOSUR, nhằm kết nối chuỗi cung ứng.
Tổng thống Brazil mời Việt Nam cử đoàn cấp cao tham dự Hội nghị thượng đỉnh BRICS và Hội nghị Liên Hợp Quốc về Biến đổi khí hậu (COP30) tại nước này trong năm 2025.
Hội kiến Tổng thống Brazil chiều cùng ngày, Chủ tịch Quốc hội Trần Thanh Mẫn khẳng định Quốc hội Việt Nam sẽ ủng hộ việc phê duyệt và triển khai các thỏa thuận hợp tác giữa hai nước, đặc biệt là trong các lĩnh vực còn nhiều tiềm năng như quốc phòng, nông nghiệp, tài chính, thông tin truyền thông, giáo dục, y tế, vận tải hàng không, công nghiệp bán dẫn, chuyển đổi số.
Tổng thống Brazil bày tỏ mong muốn Quốc hội hai nước tiếp tục tăng cường hợp tác trong các vấn đề cùng quan tâm như ứng phó với biến đổi khí hậu, xóa đói giảm nghèo.
Việt Nam và Brazil thiết lập quan hệ ngoại giao năm 1989, quan hệ Đối tác Toàn diện năm 2007. Hai nước đã nâng cấp quan hệ lên Đối tác chiến lược khi Thủ tướng Phạm Minh Chính dự Hội nghị Thượng đỉnh G20 tại thành phố Rio de Janeiro tháng 11/2024.
Brazil là đối tác thương mại lớn nhất của Việt Nam tại khu vực Mỹ Latin. Kim ngạch hai chiều năm 2024 đạt gần 8 tỷ USD, chiếm 34,8% tổng kim ngạch của Việt Nam với khu vực. Việt Nam là nước nhập khẩu nông sản Brazil nhiều thứ năm trên toàn cầu và hai nước còn nhiều tiềm năng hợp tác về cà phê, lúa gạo, hàng điện tử.'
            ],
            //12. Xã hội
            [
                'Xảy ra động đất cần làm gì để thoát hiểm?',
                'xahoi.jpg',
                'Nếu động đất xảy ra, người dân không sử dụng thang máy, nên sử dụng cầu thang bộ nếu cần thiết.',
                'Động đất lớn tại Myanmar, nhiều nơi ở Hà Nội, TP Hồ Chí Minh rung lắc mạnh
Vào lúc 13h20 ngày 28 tháng 3, theo đại diện của Trung tâm báo tin động đất và cảnh báo sóng thần (Viện Các Khoa học Trái đất), xảy ra vụ động đất ở Myanmar. Độ sâu tiêu chấn của nó là 10 km, ảnh hưởng đến Việt Nam."Cấp độ rủi ro thiên tai là cấp 0", đại diện Trung tâm báo tin động đất và cảnh báo sóng thần thông tin.
Lúc 13h20 ngày 28/3, tại Myanmar xảy ra vụ động đất ở tọa độ 21.71N - 96.02 E đã ảnh hưởng đến Hà Nội. Vụ động đất có độ lớn 7.3, độ sâu chấn tiêu 10 km.
Làm gì khi xảy ra động đất?
Theo Viện Vật lý Địa cầu, có một số kỹ năng phòng, tránh rủi ro động đất cơ bản mà người dân cần nắm được. Trước động đất, người dân cần lập kế hoạch phòng tránh an toàn, lập kế hoạch cho cả gia đình, quy định nơi gặp nhau sau động đất, danh sách số điện thoại quan trọng… học cách bật, tắt ga, điện, nước.
Nếu động đất xảy ra khi đang ngủ, nên bảo vệ đầu bằng gối và nằm úp mặt xuống. Nếu kệ trên giường hoặc đèn treo trên trần nhà có thể rơi xuống đầu, cần chui xuống gầm giường hoặc là di chuyển tới địa điểm an toàn khác như góc phòng và khi đã an toàn thì ra ngoài.
Đặc biệt, người dân không sử dụng thang máy, nên sử dụng cầu thang bộ nếu cần thiết. Nếu không may động đất xảy ra khi đang ở trong thang máy, bạn cần nằm xuống sàn, bảo vệ đầu bằng tay, đợi cho đến khi thang máy bắt đầu làm việc trở lại, ra khỏi thang máy ở tầng tiếp theo và sử dụng cầu thang bộ.
Nếu đang ở ngoài đường, chúng ta cần tránh xa các tòa nhà cao tầng, đường dây điện, đường hầm, các cây cầu. Nếu đang lái xe, cần dừng xe bên lề đường, không ra khỏi xe cho đến khi động đất dừng lại. Với những người dân ở vùng đồi núi, cần tránh xa chỗ dốc đứng, quả đồi nghiêng vì chỗ đó có thể bị lở đất .
Sau động đất, người dân cần tránh xa các bức tường bằng gạch vì chúng có thể bị suy yếu và có thể lật đổ trong các đợt dư chấn. Không bao giờ chạm vào đường dây điện bị rơi hoặc bất kỳ vật thể nào tiếp xúc với chúng. Nếu bị kẹt trong đống đổ nát, cần gõ vào vật cứng để báo vị trí của mình cho cứu hộ…'
            ],
            //13. Quân sự
            [
                'Tổng Bí thư Tô Lâm trao Huân chương Lao động hạng Nhất tặng thành phố Đà Nẵng',
                'quansu.jpg',
                'Ngày 29-3, Thành ủy, HĐND, UBND, UBMTTQ Việt Nam TP Đà Nẵng long trọng tổ chức Lễ kỷ niệm 95 năm Ngày thành lập Đảng bộ thành phố Đà Nẵng (28-3-1930 / 28-3-2025) và 50 năm Ngày giải phóng thành phố Đà Nẵng (29-3-1975 / 29-3-2025).',
                'Phát biểu tại lễ kỷ niệm, Tổng Bí thư Tô Lâm đã biểu dương và chúc mừng những thành tựu của Đảng bộ, chính quyền và nhân dân Đà Nẵng đạt được trong chặng đường lịch sử vẻ vang 95 năm qua.
Tổng Bí thư khẳng định: "Đà Nẵng luôn giữ vị trí quan trọng trong các cuộc kháng chiến bảo vệ Tổ quốc và phát triển đất nước. Đảng và Nhà nước đã trao tặng nhiều danh hiệu cao quý cho Đảng bộ, chính quyền và nhân dân thành phố. Đà Nẵng đã tạo ra "kỳ tích sông Hàn" ở Việt Nam trong phát triển kinh tế-xã hội với mô hình 5 cao, gồm: Tri thức cao, văn hóa cao, thu nhập cao, quản trị cao và mức sống cao. Những thành quả đó là kết tinh của trí tuệ, công sức, tâm huyết, sự trăn trở, phấn đấu không mệt mỏi của đội ngũ lãnh đạo địa phương và nhân dân toàn thành phố, vì mục tiêu chung là hạnh phúc, ấm no của nhân dân”.
Tổng Bí thư Tô Lâm đánh giá, những kết quả Đà Nẵng đạt được thể hiện sự năng động, tư duy nhạy bén, tinh thần tự lực, tự cường, dám nghĩ, dám làm, biết làm và dám chịu trách nhiệm của các cấp ủy, tổ chức đảng, chính quyền, là bài học lớn về phát huy sức mạnh đoàn kết, đồng thuận, thống nhất giữa ý Đảng, lòng dân.'
            ],
            //14. Khoa Học
            [
                'NASA/ESA chụp được "cánh cổng mở vào vũ trụ khác"',
                'khoahoc.jpg',
                'Kính viễn vọng không gian Hubble của NASA/ESA vừa chụp được hình ảnh ngoạn mục từ vùng vũ trụ xa xôi cách chúng ta tận 1.350 năm ánh sáng.
Theo Science Alert, vật thể ma quái mang tên NGC 1999, thật ra là một "tinh vân phản chiếu".',
                'Có thể hiểu nó như một mảnh vỡ bị bỏ lại sau quá trình hình thành sao, trong trường hợp này là một hệ thống gồm nhiều sao nhỏ mang tên V380 Orionis trong chòm sao Orion. Khoảng trống giữa tinh vân phản chiếu, được các nhà khoa học gọi là "lỗ khóa của vũ trụ" hay "cánh cổng mở vào vũ trụ khác" là thứ gây tò mò nhất của tinh vân.
ESA ban đầu cho rằng đó rất có thể là vật thể hiếm thấy trong giới thiên văn gọi là khối cầu Bok, một đám mây dày đặc và lạnh, cực kỳ đen tối
Tuy nhiên, các bước nghiên cứu xong cho thấy nó đích thực là một cái lỗ khổng lồ, được quấn quanh bởi sương mù phát sáng. Dù cho rằng nó là kết quả của quá trình hình thành sao, nhưng cụ thể cơ chế gì tạo ra lỗ thủng kỳ quái đó vẫn là điều các nhà khoa học chưa giải thích rõ ràng được.
Để người yêu thiên văn trên thế giới chiêm ngưỡng vật thể bí ẩn, các nhà khoa học đã kết hợp dữ liệu Hubble với hình ảnh từ Đài quan sát không gian Herchel của ESA, điều chỉnh màu đôi chút để tạo thành bức ảnh vừa được ESA công bố.'
            ],
            //15. Môi Trường
            [
                'Bộ trưởng Đỗ Đức Duy: Đẩy mạnh liên kết sản xuất để thúc đẩy tăng trưởng ngành trồng trọt',
                'moitruong.jpg',
                'Trong cuộc họp ngày 8/3, Bộ trưởng Bộ Nông nghiệp và Môi trường Đỗ Đức Duy cùng Thứ trưởng Hoàng Trung chủ trì cuộc họp đề ra những định hướng quan trọng, thực hiện các chương trình, kế hoạch mới,...',
                'Theo Bộ trưởng Đỗ Đức Duy, ngành trồng trọt và bảo vệ thực vật đã có những bước tiến quan trọng trong những năm qua, góp phần bảo đảm an ninh lương thực, cung cấp nguyên liệu cho công nghiệp chế biến và xuất khẩu. Với nhiều sản phẩm nông sản chủ lực như lúa, rau quả, cây công nghiệp, ngành trồng trọt đã mở rộng được thị trường xuất khẩu, đóng góp khoảng 50% tổng giá trị xuất khẩu của ngành nông nghiệp. Cùng với đó, việc áp dụng công nghệ cao và phát triển sản xuất nông nghiệp hữu cơ đã làm gia tăng chất lượng và giá trị của sản phẩm.
Cả nước đã hình thành nhiều vùng sản xuất hàng hóa tập trung, quy mô lớn, ứng dụng các tiến bộ khoa học kỹ thuật. Tuy nhiên, dù ngành đã có sự phát triển mạnh mẽ, nhưng vẫn còn đối mặt với nhiều thách thức như chi phí đầu vào cao, biến đổi khí hậu ảnh hưởng đến năng suất, cạnh tranh quốc tế gay gắt, cùng những vấn đề về ô nhiễm môi trường và lạm dụng hóa chất bảo vệ thực vật. Những thách thức này đã làm giảm khả năng cạnh tranh của nông sản Việt Nam trên thị trường quốc tế.
Nhằm đạt được mục tiêu tăng trưởng kinh tế 8% vào năm 2025, Bộ trưởng Đỗ Đức Duy nhận định rằng ngành nông nghiệp, trong đó có lĩnh vực trồng trọt và bảo vệ thực vật, sẽ phải nỗ lực rất lớn để duy trì mức tăng trưởng gần 4% - một chỉ tiêu đầy thách thức trong bối cảnh nền kinh tế và sản xuất nông nghiệp hiện nay. Bộ trưởng nhấn mạnh, để đạt được mục tiêu này, cần phải rà soát lại các chiến lược, kế hoạch phát triển trong từng lĩnh vực, đặc biệt là lĩnh vực trồng trọt và bảo vệ thực vật.
'
            ],
            //16. Chứng Khoán
            [
                'Thay đổi cách nới room ngoại và đề xuất cấm sử dụng cụm từ "chơi chứng khoán"',
                'chungkhoan.jpg',
                'Tỷ lệ sở hữu nước ngoài trở thành chủ đề trọng tâm tại Hội nghị Quỹ đầu tư và đầu tư nước ngoài do Bộ Tài chính tổ chức ngày 28/03. Các chuyên gia và cơ quan quản lý nhận định, giới hạn hiện tại là rào cản lớn trong việc nâng hạng thị trường,...',
                'Theo ông Albert Kwang-Chin Ting - Chủ tịch HĐQT Chứng khoán Phú Hưng (PHS), khảo sát từ các quỹ quản lý tại Đài Bắc cho thấy nhiều quỹ có vốn trên 500 triệu USD không thể giao dịch. Vị này đề xuất nâng giới hạn sở hữu nước ngoài lên 65% ở một số ngành để thu hút nhà đầu tư gián tiếp, đồng thời kiến nghị đẩy nhanh quy trình phê duyệt thành lập quỹ ETF nhằm tăng thanh khoản và ổn định thị trường.
Bà Vũ Thị Chân Phương - Chủ tịch Ủy ban Chứng khoán Nhà nước (UBCKNN), cho biết Việt Nam đang áp dụng hạn mức sở hữu nước ngoài theo cam kết với WTO và các hiệp định thương mại tự do ASEAN. Tuy nhiên, nhiều ngành nghề không trọng yếu vẫn bị giới hạn thấp, gây khó khăn cho nhà đầu tư quốc tế.
Để tháo gỡ, đại diện UBCKNN đã đề nghị các công ty niêm yết rà soát ngành nghề kinh doanh có điều kiện. Những ngành không tạo doanh thu hoặc doanh thu thấp cần loại bỏ hoặc chuyển sang công ty con để nâng tỷ lệ sở hữu nước ngoài. Chẳng hạn, các công ty dược đăng ký ngành nghề phân phối dược (tỷ lệ sở hữu nước ngoài 0%) có thể chuyển hoạt động này sang công ty con để nâng tỷ lệ sở hữu nước ngoài tại công ty niêm yết lên.
Với lĩnh vực ngân hàng, ông Phạm Chí Quang - Vụ trưởng Vụ Chính sách tiền tệ, Ngân hàng Nhà nước, cho biết Nghị định 69/2025 ban hành ngày 18/03 vừa qua đã nâng hạn mức sở hữu nước ngoài tại tổ chức tín dụng phi ngân hàng từ tối đa 30% lên 50%.
Đặc biệt, với ngân hàng thương mại tham gia chuyển nhượng các ngân hàng thuộc diện chuyển giao bắt buộc, nhà đầu tư nước ngoài có thể nắm tối đa 49% vốn điều lệ. Việc này áp dụng với VPBank, HDBank và MB tùy theo phương án được phê duyệt.
"Đây là điểm rất mới trong Nghị định lần này", ông nói và cho biết nghị định cũng trao quyền cho Thủ tướng quyết định mức sở hữu nước ngoài trong trường hợp đặc biệt nhằm đảm bảo an toàn hệ thống tín dụng.
Ngoài nới room trực tiếp, cơ quan quản lý còn đang xem xét phát triển các sản phẩm tài chính giúp nhà đầu tư nước ngoài vượt giới hạn sở hữu. UBCKNN cũng nghiên cứu quỹ ETF cổ phiếu đơn (single stock ETF) và đang lấy ý kiến nhà đầu tư nước ngoài để đánh giá tính khả thi.
Thứ trưởng Bộ Tài chính Nguyễn Đức Chi cho hay Bộ sẽ tiếp thu ý kiến, thực hiện chỉ đạo của Chính phủ về minh bạch hóa và cắt giảm thủ tục đầu tư, đồng thời xem xét nới room ngoại để thu hút vốn quốc tế.
Đề xuất cấm sử dụng cụm từ "chơi chứng khoán" để thay đổi nhận thức đầu tư
Một vấn đề nổi bật khác cũng được nhắc đến trong hội nghị là thay đổi cách nhìn nhận về đầu tư trên thị trường chứng khoán. Ông Don Lam, cổ đông sáng lập đồng thời là Tổng Giám đốc VinaCapital, đề xuất cấm sử dụng cụm từ "chơi chứng khoán" trên các phương tiện truyền thông. 
Để hỗ trợ thay đổi nhận thức, ông đề xuất xuất bản "Sổ tay Đầu tư" hoặc "Sổ tay Quản lý Tài chính Cá nhân" nhằm hướng dẫn nhà đầu tư cá nhân, đặc biệt là về rủi ro khi đầu tư trực tiếp. Ông cũng kiến nghị xây dựng cổng thông tin trực tuyến quốc gia cho nhà đầu tư vào quỹ mở, kèm theo công bố thông tin và xếp hạng hiệu suất để tăng minh bạch.

Thứ trưởng Bộ Tài chính Nguyễn Đức Chi đồng tình với đề xuất này và nhấn mạnh sự cần thiết của việc định vị lại khái niệm đầu tư chứng khoán. Theo ông, thay đổi nhận thức sẽ giúp nhà đầu tư nhỏ lẻ đưa tài sản vào các quỹ đầu tư chuyên nghiệp, giảm rủi ro và tối ưu hóa lợi ích.
Đại diện UBCKNN cho biết trên thị trường chứng khoán Việt Nam, nhà đầu tư cá nhân thường tự giao dịch và muốn tự kiểm soát hoạt động đầu tư của mình, chưa có thói quen đầu tư qua các quỹ đầu tư chuyên nghiệp. Để thị trường phát triển bền vững, UBCKNN đang triển khai hai đề án gồm tái cấu trúc nhà đầu tư và đào tạo nhà đầu tư
"Chúng tôi sẽ tăng số lượng các quỹ đầu tư có tổ chức và giảm tỷ lệ nhà đầu tư cá nhân để đảm bảo tính ổn định của thị trường. Đồng thời, chúng tôi đang triển khai đề án đào tạo nhà đầu tư thông qua các công ty chứng khoán, quản lý quỹ và các hiệp hội", bà Phương chia sẻ.
Ngoài ra, để thu hút nhà đầu tư vào quỹ mở, ông Don Lam đề xuất miễn thuế và đẩy mạnh chính sách ưu đãi thuế cho quỹ hưu trí tự nguyện.
Có mặt tại sự kiện, ông Trương Bá Tuấn - Phó vụ trưởng Vụ Chính sách Thuế, Bộ Tài chính, cho biết cơ quan này đang nghiên cứu sửa đổi ba sắc thuế liên quan đến thị trường chứng khoán. Đặc biệt, với Luật Thuế thu nhập cá nhân, Bộ đang xem xét miễn thuế cho khoản đóng góp của người lao động vào quỹ hưu trí bổ sung tự nguyện. "Chúng tôi sẽ báo cáo Chính phủ và Quốc hội để sửa đổi theo hướng không phân biệt hình thức chi trả, đảm bảo quyền lợi cho người tham gia", ông Tuấn thông tin.
'
            ],
            //17. Bất Động Sản
            [
                "Sau 'cơn sốt', giá chung cư nhiều khu vực ở Hà Nội đang chững lại",
                'batdongsan.jpg',
                'Giá chung cư tại nhiều khu vực của Hà Nội có dấu hiệu ngừng tăng giá. Theo đó, nhiều người có nhu cầu bán “cắt lãi” từ 100 - 300 triệu đồng/căn hộ để tìm khách.',
                'Chung cư giảm từ 100 - 300 triệu đồng/căn hộ
Chị Nguyễn Thoa, môi giới một sàn giao dịch bất động sản Hà Nội đang rao bán hộ chủ nhà một căn chung cư 36 Phạm Hùng (Nam Từ Liêm, Hà Nội). Căn hộ có diện tích 54m2 được chủ nhà gửi rao bán 3,8 tỷ đồng. Trước Tết Nguyên đán, căn hộ được rao 4 tỷ đồng. “Chỉ sau 2 tháng, chủ nhà đồng ý giảm 200 triệu đồng để bán nhanh bởi thấy giá chung cư ngừng tăng. Tuy nhiên, tôi rao bán nửa tháng nay vẫn chưa có khách hỏi mua”, chị Thoa nói.
Chị Thoa cho biết thêm, căn hộ này chủ nhà chỉ “giảm lãi” chứ không có chuyện bị lỗ. Giá chung cư tăng liên tục trong 2 năm nay và đang ở mức đỉnh.
Còn anh Trung Kiên (Hà Đông, Hà Nội) chia sẻ, cuối tháng 10/2024 vợ chồng anh ưng ý 1 căn chung cư 70m2 tại Thanh Trì (Hà Nội) với giá 3,5 tỷ đồng. Tuy nhiên, đến ngày mang tiền sang đặt cọc thì chủ nhà đổi ý, đòi 3,7 tỷ đồng mới bán. Sau đó đến tầm tháng 11/2024, căn hộ này tiếp tục được môi giới mời chào với giá 3,8 tỷ đồng.
Nhận thấy chủ nhà không thiện chí bán nên dù rất ưng ý căn hộ, vợ chồng anh Nam cũng đành bỏ cuộc, tìm căn hộ mới phù hợp với nhu cầu và khả năng tài chính hơn.
"Sau đó vợ chồng tôi đi tìm các dự án xa trung tâm Hà Nội nhưng càng tìm giá lại càng tăng bởi nhiều người cũng trong tình trạng cố gắng mua nhà để đón cái Tết ở nhà mới. Quá nản nên vợ chồng tôi để sang năm mới tính tiếp", anh Kiên nói.
Tuy nhiên, điều bất ngờ là mới đây, trong khi vẫn đang tìm mua căn hộ mới thì một môi giới khác đã giới thiệu với anh Kiên chính căn chung cư đã được giới thiệu từ tháng 10/2024 với giá bán được chủ nhà đưa ra là 3,6 tỷ đồng, thấp hơn hẳn thời điểm tháng 11/2024.
Vì biết chủ nhà có tính "quay xe" nên anh Kiên đã hỏi môi giới rất kỹ về căn hộ này. Theo lời môi giới, chủ nhà trước đó đẩy giá lên quá cao nhưng không bán nổi, giờ thấy xu hướng giá chững lại nên họ không để mức đó nữa.
Cũng theo môi giới này, giá chung cư đang chững lại và rất khó để tăng cao trong năm 2025, vì thế, nhiều chủ nhà chấp nhận bán thấp hơn mức giá rao trước đó 100 - 200 triệu đồng, để có thể bán nhanh, thu hồi tiền sớm. Các chủ nhà thời điểm này đều đã tính toán kỹ lưỡng thiệt hơn khi thị trường có sự biến chuyển.
"Dù chủ nhà đã hạ giá bán nhưng vợ chồng tôi vẫn không muốn mua căn hộ này nữa vì đã qua 2 môi giới giới thiệu, hơn nữa chủ nhà đã từng không giữ chữ tín cũng khiến tôi không tin tưởng", anh Kiên cho hay.
Còn tại một dự án đang xây dựng tại quận Nam Từ Liêm, môi giới Hoàng Đức đang rao bán loạt căn hộ từng là "hàng siêu hot" hồi giữa năm 2024. Có thời điểm, các căn này tăng giá 400-600 triệu đồng, có căn tăng gần 1 tỷ đồng. Tuy nhiên, đến nay, chủ nhà - phần lớn là các nhà đầu tư - đồng loạt gửi bán với giá "cắt" 100-200 triệu đồng so với đỉnh cách đây gần nửa năm.
Điểm chung của các căn hộ này là đều thuộc các dự án chung cư cao cấp, giá trên 80 triệu đồng/m2.
Người bán giảm nhưng người mua chờ giảm thêm
Theo lý giải của ông Nguyễn Văn Đính - Chủ tịch Hội Môi giới bất động sản Việt Nam, những căn hộ gắn mác cao cấp đang có giá quá cao, người lao động phổ thông gần như không thể tiếp cận. Trong khi đó, nhóm khách hàng phổ biến hiện nay là các nhà đầu tư lại không nhìn thấy khả năng sinh lời đủ hấp dẫn, do đó phân khúc cao cấp trở nên khó hấp thụ.
Ông Phạm Đức Toản - Tổng giám đốc Công ty Cổ phần đầu tư và phát triển Bất động sản EZ cũng cho rằng, thời gian qua giá căn hộ chung cư chỉ "nóng" tại Hà Nội do chênh lệch giữa cung và cầu. Đến nay, giá chung cư Hà Nội đã vượt đỉnh. "Tôi có một nhóm bạn là những người có thu nhập tốt nhưng khi nhìn vào giá chung cư hiện tại họ đều cho rằng quá cao, không tương xứng với giá trị và rất khó tiếp cận", ông Toản nói.
Chính vì thế nhiều người tạm dừng kế hoạch mua nhà, kéo theo thanh khoản chung cư sẽ dần ít đi. Năm 2025 giá chung cư sẽ không có chuyện tiếp tục tăng lên. Nếu có cũng sẽ chỉ là hiện tượng cục bộ không đáng kể. Chính vì vậy, hiện tượng chủ nhà liên tục đẩy giá cao sẽ khó xảy ra trong thời gian tới. Thay vào đó, nếu muốn có thanh khoản, chủ nhà sẽ buộc phải đưa ra mức giá hợp lý để cung - cầu gặp nhau.
Ông Nguyễn Quốc Anh - Phó tổng giám đốc kênh Batdongsan, cho hay so với đà tăng 40-50% của năm ngoái, chung cư giảm bản chất là "người bán giảm kỳ vọng lợi nhuận". Khi thị trường đi xuống, tâm lý FOMO (sợ bỏ lỡ) không còn, chủ nhà và môi giới có thể dùng chiêu "giảm giá" để thu hút người mua. Tuy nhiên, ông Quốc Anh cho rằng phần lớn người mua hiện nay đều giữ tâm lý cẩn trọng và muốn chờ giá giảm thêm.
'
            ],
            //18. Khởi Nghiệp
            [
                'Cơ hội cho các start-up khởi nghiệp trong kỷ nguyên mới',
                'khoinghiep.jpg',
                'Các ý kiến tại Diễn đàn Khởi nghiệp sáng tạo quốc gia lần thứ 6 cho thấy các start-up có nhiều cơ hội khởi nghiệp trong kỷ nguyên mới.',
                'Ngày 27-3, các ý kiến tại Diễn đàn Khởi nghiệp sáng tạo quốc gia lần thứ 6 do UBND tỉnh Bình Định phối hợp Hiệp hội Khởi nghiệp quốc gia tổ chức tại TP Quy Nhơn, cho thấy các start-up có nhiều cơ hội khởi nghiệp trong kỷ nguyên mới .
Nêu rõ chủ đề "Hội tụ nguồn lực toàn cầu phát triển hệ sinh thái đổi mới sáng tạo và khởi nghiệp sáng tạo địa phương trong kỷ nguyên kinh tế số", TS Đinh Việt Hòa, chủ tịch Hiệp hội Khởi nghiệp quốc gia, nói tinh thần khởi nghiệp ở Việt Nam cho rằng mặc dù nền kinh tế đất nước đang đối mặt với không ít khó khăn, nhưng điều đó càng khơi dậy tinh thần khởi nghiệp, khát vọng vươn lên làm giàu ở thế hệ trẻ.
Trình bày tham luận tại diễn đàn, ông Nguyễn Tiến Quang - giám đốc Liên đoàn Thương mại và Công nghiệp Việt Nam Miền Trung - Tây Nguyên - cho hay theo báo cáo PCI (chỉ số năng lực cạnh tranh cấp tỉnh) giai đoạn 2014-2024 thì Đà Nẵng, Huế, Bình Định luôn nằm trong nhóm dẫn đầu. 
Tuy nhiên khu vực vẫn đối mặt với nhiều thách thức, tốc độ cải thiện có dấu hiệu chững lại khi chỉ có 3 tỉnh vào top 30 địa phương có chất lượng điều hành tốt nhất.
Dù được hỗ trợ chính sách và nỗ lực của địa phương, kinh tế miền Trung phát triển nhưng số lượng doanh nghiệp còn thấp, chủ yếu là nhỏ và siêu nhỏ, khả năng cạnh tranh hạn chế. 
Trước thực tế này, ông Quang cho rằng chính quyền phải cải thiện môi trường kinh doanh hiệu quả, kịp thời tháo gỡ khó khăn cho doanh nghiệp. Cần hoàn thiện quy hoạch, đầu tư hạ tầng, tăng cường liên kết vùng, giảm chi phí logistics. Đồng thời rà soát, điều chỉnh chính sách hỗ trợ doanh nghiệp phù hợp với hội nhập quốc tế. Xây dựng chiến lược phát triển nguồn nhân lực cho doanh nghiệp...
"Bối cảnh mới đòi hỏi doanh nghiệp không chỉ tăng trưởng mà phải tăng trưởng xanh, bền vững. Ngoài kinh doanh truyền thống, doanh nghiệp cần đầu tư vào ngành công nghiệp tiên phong. Tăng trưởng không thể dựa vào vốn và tài nguyên, mà phải dựa vào khoa học, công nghệ, đổi mới sáng tạo", ông Quang nói.
Về phía lãnh đạo địa phương, ông Phạm Anh Tuấn - chủ tịch UBND tỉnh Bình Định - cho biết địa phương luôn dành sự quan tâm đặc biệt đến khoa học công nghệ, xem đây là nền tảng quan trọng để thúc đẩy đổi mới sáng tạo, nâng cao năng lực cạnh tranh và tạo động lực cho tăng trưởng kinh tế.
Chủ tịch UBND tỉnh Bình Định cũng kêu gọi cộng đồng start-up, doanh nghiệp tạo ra những giải pháp đột phá, biến Bình Định thành điểm đến tin cậy của những doanh nghiệp công nghệ.
"Chúng tôi cam kết sẽ tạo mọi điều kiện thuận lợi nhất về chính sách, môi trường kinh doanh và hệ sinh thái hỗ trợ để doanh nghiệp, nhà đầu tư và các start-up có thể phát triển bền vững tại Bình Định", ông Tuấn nói.
Tại diễn đàn, ông Denis Fourmeau - tùy viên hợp tác khoa học và đại học, Đại sứ quán Pháp - cho hay Đại sứ quán Pháp sẽ khởi động "Năm Đổi mới sáng tạo Pháp - Việt" diễn ra từ tháng 5-2025 đến tháng 10-2026, sẽ thúc đẩy hợp tác giữa hai nước trong lĩnh vực công nghệ và đào tạo.
Các start-up và giới trẻ Việt Nam là đối tượng trọng tâm, được tạo điều kiện để khám phá và phát triển thông qua các sự kiện, cuộc thi và chương trình đào tạo chuyên đề.
Trong đó sự kiện "French Tech Summit" sẽ diễn ra vào ngày 27-5-2025 tại TP.HCM. Đây sẽ là cơ hội quý báu để các start-up tiếp cận các quỹ đầu tư và nhà đầu tư Pháp.'
            ],
            //19. Thương Mại
            [
                'Xuất nhập khẩu từ đầu năm đến nửa đầu tháng 3/2025 tăng 12% so với cùng kỳ',
                'thuongmai.jpg',
                'Kết quả đạt được trong nửa đầu tháng 3/2025 đã đưa tổng trị giá xuất nhập khẩu của cả nước đến hết ngày 15/3/2025 đạt 162,78 tỷ USD, tăng 12%, tương ứng tăng 17,46 tỷ USD về số tuyệt đối so với cùng kỳ năm 2024...',
                'Theo số liệu sơ bộ được Cục Hải quan (Bộ Tài chính) công bố ngày 28/3, tổng trị giá xuất nhập khẩu hàng hóa của Việt Nam trong kỳ 1 tháng 3/2025 (từ ngày 01/3/2025 đến ngày 15/3/2025) đạt 35,66 tỷ USD, tăng 10,7% (tương ứng tăng 3,44 tỷ USD) so với kết quả thực hiện trong nửa cuối tháng 02/2025.
Kết quả đạt được trong nửa đầu tháng 3/2025 đã đưa tổng trị giá xuất nhập khẩu của cả nước đến hết ngày 15/3/2025 đạt 162,78 tỷ USD, tăng 12%, tương ứng tăng 17,46 tỷ USD về số tuyệt đối so với cùng kỳ năm 2024.
Trong đó, tổng trị giá xuất nhập khẩu của doanh nghiệp có vốn đầu tư trực tiếp nước ngoài (FDI) đạt 110,09 tỷ USD, tăng 10,8% (tương ứng tăng 10,73 tỷ USD).
Cụ thể hơn, tổng trị giá hàng hoá xuất khẩu của Việt Nam trong kỳ 1 tháng 3 năm 2025 đạt 17,98 tỷ USD, tăng 6,3% (tương ứng tăng 1,07 tỷ USD về số tuyệt đối) so với kỳ 2 tháng 02/2025.
Trị giá xuất khẩu kỳ 1 tháng 3/2025 tăng so với kỳ 2 tháng 02/2025 ở các nhóm hàng sau: máy vi tính, sản phẩm điện tử và linh kiện tăng 27,7% (tương ứng tăng 878 triệu USD); điện thoại các loại và linh kiện giảm 137 triệu USD, tương ứng tăng 6,3%; gỗ và sản phẩm từ gỗ tăng 77 triệu USD, tăng 12,4%...
Như vậy, tính đến hết 15/3/2025, tổng trị giá xuất khẩu của Việt Nam đạt 82,29 tỷ USD, tăng 6,3% tương ứng tăng 1,07 tỷ USD so với cùng kỳ năm 2024.
Trong đó, một số nhóm hàng tăng như: máy vi tính sản phẩm điện tử và linh kiện tăng 3,75 tỷ USD, tương ứng tăng 29,2%; cà phê tăng 675 triệu USD, tương ứng tăng 42%; hàng dệt may tăng 603 triệu USD, tương ứng tăng 9,4% so với cùng kỳ năm 2024.
Số liệu thống kê của Tổng cục Hải quan cũng cho thấy trị giá xuất khẩu hàng hóa của các doanh nghiệp có vốn đầu tư trực tiếp nước ngoài (FDI) trong kỳ 1 tháng 3/2025 đạt 12,79 tỷ USD, tăng 6,7% tương ứng tăng 800 triệu USD so với kỳ 2 tháng 02/2025. Tính đến hết ngày 15/3/2025, tổng trị giá xuất khẩu hàng hóa của nhóm các doanh nghiệp này đạt 58,93 tỷ USD, tăng 8,2%, tương ứng tăng 4,45 tỷ USD so với cùng kỳ năm trước, chiếm 71,6% tổng trị giá xuất khẩu của cả nước.
Theo chiều ngược lại, tổng trị giá hàng hoá nhập khẩu của Việt Nam trong kỳ 1 tháng 3/2025 đạt 17,68 tỷ USD, tăng 15,5% (tương ứng tăng 2,38 tỷ USD về số tuyệt đối) so với kết quả thực hiện trong nửa cuối tháng 02/2025.
Trị giá nhập khẩu hàng hóa trong kỳ 1 tháng 3/2025 tăng so với kỳ 2 tháng 02/2025 chủ yếu ở một số nhóm hàng sau: máy vi tính, sản phẩm điện tử & linh kiện tăng 885 triệu USD, tương ứng tăng 18,5%; máy móc, thiết bị, dụng cụ & phụ tùng khác tăng 418 triệu USD, tương ứng tăng 22%; vải các loại tăng 181 triệu USD, tương ứng tăng 42,5%.
Như vậy, tính đến hết 15/3/2025, tổng trị giá nhập khẩu của cả nước đạt 80,49 tỷ USD, tăng 15,2% (tương ứng tăng 10,61 tỷ USD) so với cùng kỳ năm 2024.
Trong đó, một số nhóm hàng tăng mạnh như: máy vi tính, sản phẩm điện tử & linh kiện tăng 5,85 tỷ USD, tương ứng tăng 29,3%; máy móc thiết bị dụng cụ và phụ tùng tăng 1,68 tỷ USD, tương ứng tăng 20% so với cùng kỳ năm 2024.
Trị giá nhập khẩu hàng hóa của các doanh nghiệp FDI trong kỳ này đạt 11,15 tỷ USD, tăng 16,9% (tương ứng tăng 1,62 tỷ USD) so với kỳ 2 tháng 02/2025. Tính đến hết ngày 15/3/2025, tổng trị giá nhập khẩu của nhóm các doanh nghiệp này đạt 51,16 tỷ USD, tăng 14% (tương ứng tăng 6,28 tỷ USD) so với cùng kỳ năm 2024, chiếm 64% tổng trị giá nhập khẩu của cả nước.
Với những kết quả trên, trong kỳ 1 tháng 3 năm 2025, cán cân thương mại hàng hóa thặng dư 307 triệu USD. Tính từ đầu năm đến hết ngày 15/3, cán cân thương mại hàng hóa thặng dư 1,81 tỷ USD.'
            ],
            //20. Tài Chính
            [
                'Giá bán vàng miếng tăng 1,7 triệu đồng mỗi lượng sau một ngày',
                'taichinh.jpg',
                'Ngày 28/3, các doanh nghiệp đồng loạt tăng mạnh giá vàng miếng thêm 500 nghìn đến 1,7 triệu đồng/lượng so với hôm qua, trong đó chiều bán tăng mạnh hơn chiều mua. Theo đà này, giá vàng nhẫn cũng tăng tới 1,5 triệu đồng mỗi lượng...',
                'Cập nhật lúc 11h30 ngày 28/3, các Công ty SJC, DOJI, PNJ và Phú Quý đồng loạt niêm yết giá mua/bán vàng miếng SJC ở mức 98,4 triệu – 100,4 triệu đồng/lượng. So với giá chốt phiên hôm qua (27/3), giá vàng miếng tăng 1 triệu – 1,2 triệu đồng/lượng đối với chiều mua và tăng 1,5  - 1,7 triệu đồng/lượng đối với chiều bán. Chênh lệch giá mua/bán vàng miếng tại bốn thương hiệu trên là 2 triệu đồng/lượng.
Bảo Tín Minh Châu niêm yết giá mua/bán vàng miếng SJC ở mức 98,5 triệu – 100,4 triệu đồng/lượng, tăng 1 triệu đồng/lượng đối với chiều mua và tăng 1,5 triệu nghìn đồng/lượng đối với chiều bán. Chênh lệch giá mua/bán vàng miếng tại Bảo Tín Minh Châu là 1,9 triệu đồng/lượng.
Biên độ giá mua/bán 98,7 triệu – 100,4 triệu đồng/lượng được niêm yết tại Bảo Tín Mạnh Hải với mức tăng 1 triệu đồng/lượng đối với chiều mua và tăng 1,5 triệu đồng/lượng đối với chiều bán. Chênh lệch giá mua/bán vàng miếng Bảo Tín Mạnh Hải là 1,7 triệu đồng/lượng.
Tại khu vực phía Nam, Công ty Mi Hồng niêm yết giá mua/bán vàng miếng ở mức 99 triệu – 100,5 triệu đồng/lượng, tăng 500 nghìn đồng/lượng đối với chiều mua và tăng 800 nghìn đồng/lượng đối với chiều bán. Chênh lệch giá mua/bán vàng miếng tại Mi Hồng là 1,5 triệu đồng/lượng.
Ngoại trừ ngân hàng Agribank chưa cập nhật giá, hai ngân hàng Vietcombank và VietinBank cùng niêm yết giá bán vàng miếng SJC ở mức 100,4 triệu đồng/lượng. Trong khi BIDV   niêm yết giá bán vàng miếng SJC ở mức 99,4 triệu đồng/lượng.
So với giá chốt phiên 27/3, giá bán vàng miếng tại Vietcombank và VietinBank tăng 2 triệu đồng/lượng. Giá bán vàng miếng tại BIDV tăng 1 triệu đồng/lượng.
Công ty SJC ghi nhận 2 lần điều chỉnh tăng giá vàng nhẫn trong phiên sáng nay. Tính đến 11h30 ngày 28/3, Công ty SJC niêm yết giá vàng nhẫn ở mức 98,4 triệu – 100,4 triệu đồng/lượng, tăng 600 nghìn – 500 nghìn đồng/lượng (chiều mua – chiều bán). Chênh lệch giá mua/bán vàng nhẫn tại SJC ở mức 2 triệu đồng/lượng.
Công ty DOJI niêm yết giá mua/bán vàng nhẫn tại 98,4 triệu – 100,4 triệu đồng/lượng. Giá vàng nhẫn tại DOJI tăng 1 triệu đồng/lượng đối với chiều mua và tăng 900 nghìn đồng/lượng đối với chiều bán. Chênh lệch giá mua/bán vàng nhẫn tại DOJI là 1,8 triệu đồng/lượng. 
Giá vàng nhẫn tại PNJ và Phú Quý tăng lần lượt 1,2 triệu và 1,3 triệu đồng/lượng đối với chiều mua trong khi tăng 1,1 triệu và 1,2 triệu đồng/lượng đối với chiều bán. Hai thương hiệu trên cùng niêm yết giá vàng nhẫn ở mức 98,4 triệu – 100,4 triệu đồng/lượng. Chênh lệch giá mua/bán vàng nhẫn tại PNJ và Phú Quý là 2 triệu đồng/lượng.
Biên độ giá mua/bán 98,5 triệu – 100,4 triệu đồng/lượng được niêm yết tại Bảo Tín Minh Châu. Giá vàng nhẫn tăng 1 triệu đồng/lượng đối với chiều mua và tăng 900 nghìn đồng/lượng đối với chiều bán. Chênh lệch giá mua/bán vàng nhẫn tại Bảo Tín Minh Châu là 2 triệu đồng/lượng. 
Mức giá 98,7 triệu – 100,8 triệu đồng/lượng được niêm yết tại Bảo Tín Mạnh Hải. Giá. So với giá chốt phiên 27/3, giá vàng nhẫn tại Bảo Tín Mạnh Hải tăng 1 triệu đồng/lượng đối với chiều mua và tăng 900 nghìn đồng/lượng đối với chiều bán. Chênh lệch giá mua/bán vàng nhẫn tại Bảo Tín Mạnh Hải là 2,1 triệu đồng/lượng. 
ại khu vực phía Nam, giá vàng nhẫn tại Công ty Mi Hồng lúc mở cửa phiên sáng vẫn giữ nguyên ở mức 97 triệu đồng/lượng chiều mua – 98,7 triệu đồng/lượng chiều bán.
Tính đến 11h30 ngày 28/3, giá vàng nhẫn tại Mi Hồng ghi nhận 3 nhịp điều chỉnh tăng. Công ty Mi Hồng niêm yết giá mua/bán vàng nhẫn ở mức 98 triệu – 99 triệu đồng/lượng. So với giá chốt phiên 27/3, giá vàng nhẫn tăng 1 triệu đồng/lượng đối với chiều mua và tăng 300 nghìn đồng/lượng đối với chiều bán. Chênh lệch giá mua/bán vàng nhẫn tại Mi Hồng là 1 triệu đồng/lượng.
Trên thị trường thế giới, giá vàng giao ngay tiếp tục ghi nhận phiên tăng thứ tư liên tiếp. Tính đến 11h30 ngày 28/3, trên thị trường New York, giá vàng giao ngay bật tăng 0,66% so với mức chốt phiên 27/3, tương đương với mức tăng 20,4 USD/oz, lùi về mức 3.076 USD/oz. 
So giá vàng thế giới và trong nước (tỷ giá Vietcombank, đã bao gồm thuế và phí...), tính đến 11h30 ngày 28/3, tại khu vực miền Bắc, giá bán vàng miếng đều cao hơn so với giá thế giới khoảng 3,79 triệu đồng/lượng. Tuỳ từng thương hiệu, giá vàng nhẫn cao hơn giá vàng thế giới từ 3,59 triệu – 4,19 triệu đồng/lượng, trong đó Bảo Tín Mạnh Hải có mức chênh lệch so với giá thế giới cao nhất thị trường là 4,19 triệu đồng/lượng. Chênh lệch giữa giá bán vàng miếng SJC và vàng nhẫn tại Mi Hồng so với giá vàng thế giới lần lượt là 3,89 triệu đồng/lượng và 2,39 triệu đồng/lượng.
Theo giới phân tích, sự bất ổn xung quanh chính sách thuế quan thương mại,căng thẳng địa chính trị và và khả năng Fed cắt giảm lãi suất  đều đóng vai trò thúc đẩy giá vàng tăng vọt vào năm nay.
Thứ nhất, căng thẳng thương mại giữa Mỹ và các đối tác đồng minh đang tác động tiêu cực đến chuỗi cung ứng hàng hoá toàn cầu. Hôm thứ Tư, ông Trump tuyên bố áp thuế quan 25% lên “tất cả ô tô không sản xuất ở Mỹ”, có hiệu lực từ ngày 3/4 sắp tới. Ngoài ra, ngày 3/4 cũng là thời điểm ông Trump dự kiến sẽ áp thuế quan có đi có lại lên tất cả các đối tác thương mại có đánh thuế quan và sử dụng các hàng rào phi thuế quan khác đối với hàng hóa Mỹ.
Cuộc chiến thương mại không chỉ nóng lên từ phía Mỹ mà từ cả phía các đối tác thương mại của Mỹ. Chính phủ nhiều nước từ Canada tới Pháp đã lên tiếng cảnh báo sẽ trả đũa thuế quan ô tô. Thương chiến leo thang đẩy tâm lý thị trường đứng trước mối lo ngại về lạm phát, kéo dòng tiền đầu tư quay lại kênh vàng.
Thứ hai, trong 2 tuần qua, quỹ ETF vàng lớn nhất thế giới SPDR Gold Trust đã mua ròng tổng cộng 36 tấn vàng. Sau 2 ngày liên tiếp không mua ròng, quỹ ETF mua ròng trở lại vào phiên ngày thứ Năm. Dù vậy, “cá mập” này chỉ mua ròng gần 0,3 tấn vàng trong phiên ngày thứ Năm, nâng khối lượng nắm giữ lên gần 929,7 tấn.
Trước đó, Goldman Sachs đã nâng dự báo giá vàng vào cuối năm 2025 từ 3.100 USD/oz lên 3.300 USD/oz, nhờ dòng vốn ETF đổ vào mạnh hơn dự kiến cũng như nhu cầu mua vàng dự trữ của các ngân hàng trung ương liên tục tăng cao để phòng tránh rủi ro trước những bất ổn tài chính.'
            ],
            //21. Học Đường
            [
                'TP.HCM tuyển sinh lớp 1, lớp 6 theo địa bàn khu phố mới',
                'hocduong.jpg',
                'Các trường học tại TP.HCM bắt đầu thực hiện rà soát dữ liệu thông tin cư trú của học sinh để chuẩn bị cho việc phân tuyến tuyển sinh lớp 1, lớp 6 theo địa bàn khu phố mới.',
                'Lãnh đạo Sở yêu cầu phòng GD-ĐT TP.Thủ Đức và các quận, huyện chỉ đạo các cơ sở giáo dục trực thuộc rà soát, thu thập, cập nhật dữ liệu lên cơ sở dữ liệu dùng chung của ngành. Các trường phải phối hợp với công an địa phương tổ chức cấp CCCD và kích hoạt định danh điện tử mức độ 2 trên ứng dụng VNeID đối với các cá nhân đủ 14 tuổi chưa có căn cước công dân hoặc chưa kích hoạt định danh điện tử mức độ 2.

PHÂN TUYẾN THEO ĐỊA BÀN KHU PHỐ, CHỖ Ở HIỆN TẠI
Ông Dương Văn Dân, Trưởng phòng GD-ĐT Q.8, cho biết năm học 2025-2026, địa phương sẽ thực hiện phân tuyến tuyển sinh các lớp đầu cấp lớp 1, lớp 6 theo địa bàn khu phố mới. Tuy nhiên, để đảm bảo quyền lợi HS và không gây xáo trộn trong công tác tuyển sinh đầu cấp thì tiêu chí chính vẫn là căn cứ vào chỗ ở hiện tại của HS để phân bổ chỗ học theo bản đồ GIS.

Ông Dân cho biết theo thống kê, năm học 2025-2026, Q.8 có gần 10.000 HS ra lớp 1 và lên lớp 6. Trong đó, lớp 1 có 4.727 HS, lớp 6 có 4.524 em, tăng khoảng 200 HS so với năm học trước.

Hiện nay các phường đang xác minh điều tra lập danh sách trẻ trong độ tuổi tuyển sinh chính xác diện cư trú theo địa chỉ khu phố mới, từ đó làm căn cứ để quận phân bổ chỗ học phù hợp. Song công tác tuyển sinh vẫn được áp dụng theo tiêu chí chính là chỗ ở hiện tại của HS, để khi quét trên bản đồ GIS, HS sẽ được phân chỗ học ở trường gần nhà. Đối với số HS tăng thêm, các trường sẽ cải tạo thêm phòng học để đảm bảo đủ chỗ học và không gây quá tải. Ông Dân lưu ý quan trọng vẫn là việc PHHS phải cập nhật thông tin chính xác về chỗ ở hiện tại.

Tương tự, ông Trần Anh Kiệt, Trưởng phòng GD-ĐT Q.Bình Thạnh, cho hay năm học 2025-2026 địa phương sẽ phân tuyến tuyển sinh các lớp đầu cấp lớp lá, lớp 1 và lớp 6 theo địa bàn khu phố mới. Công tác tuyển sinh thực hiện theo hình thức trực tuyến, áp dụng theo tiêu chí chính là chỗ ở hiện tại của HS để phân bổ chỗ học cho trẻ theo bản đồ GIS. Thời điểm này các phường đang rà soát trẻ theo diện cư trú mới.

"Việc phân tuyến tuyển sinh theo địa bàn khu phố mới sẽ không ảnh hưởng đến quyền lợi của HS. Bởi thực tế quận phân bổ chỗ học theo bản đồ GIS thì HS được học trường gần nhà. Tuy nhiên, với những trường được xem là "hot" khi hằng năm luôn có nhu cầu vào học cao thì công tác tuyển sinh ngoài việc gắn vào bản đồ GIS, địa phương sẽ làm thật kỹ trong xác minh, kiểm tra, đảm bảo phân bổ đúng nơi cư trú của HS", ông Kiệt nói.

Năm học 2025-2026, TP.Thủ Đức cũng thực hiện phân tuyến tuyển sinh các lớp đầu cấp theo địa bàn khu phố mới và sử dụng bản đồ GIS để xác định khoảng cách từ nhà HS đến trường khi phân bổ chỗ học.

Ông Nguyễn Thái Vĩnh Nguyên, Trưởng phòng GD-ĐT TP.Thủ Đức, cho biết UBND TP.Thủ Đức đã yêu cầu Phòng GD-ĐT kết hợp với các trường trên địa bàn nắm bắt điều kiện cơ sở vật chất, phòng học, khả năng tiếp nhận HS của các trường để điều phối phân tuyến tuyển sinh hợp lý, không gây quá tải hay tạo áp lực cho nhà trường trong việc bố trí phòng học và đảm bảo thực hiện Chương trình Giáo dục phổ thông 2018.'
            ],
            //22. Du Học
            [
                'Nam sinh đỗ Đại học Johns Hopkins với nghiên cứu phát hiện tế bào ung thư',
                'duhoc.jpg',
                'Xuân Khôi, 18 tuổi, chinh phục ngôi trường top 6 nước Mỹ với điểm 1580/1600 SAT, 7 môn IGCSE điểm A* và nghiên cứu dùng vật liệu đánh dấu y sinh để phát hiện sớm tế bào ung thư.',
                'Từng có người thân bị ung thư, Khôi cho hay mong có thể tham gia nghiên cứu, phát triển thuốc chữa bệnh này. Biết Johns Hopkins có thế mạnh về y sinh, thường tổ chức những khóa học về chế tạo thuốc, Khôi xác định theo đuổi ngành Kỹ thuật hóa học định hướng y sinh ở đây.

Nhờ định hướng sớm, Khôi có nhiều thời gian tham gia nghiên cứu khoa học. Em tâm đắc nhất với nghiên cứu về sử dụng vật liệu đánh dấu y sinh để phát hiện sớm các tế bào ung thư.

Nam sinh giải thích, vật liệu Terbium phosphate chứa nguyên tố đất hiếm Tb3+, có thể phát quang và dễ dàng hấp thụ vào trong các khối u. Hợp chất TbPO4 từ vật liệu này sẽ khiến các tế bào ung thư "phát sáng". Vì vậy, thông qua máy quét, bác sĩ có thể phát hiện và đánh dấu tế bào ung thư trong cơ thể.

Nghiên cứu Khôi góp phần hướng tới việc chế tạo TbPO4 bằng phương pháp thủy nhiệt, giúp quá trình tìm kiếm tế bào ung thư nhanh chóng và tối ưu hơn.

Khôi thực hiện nghiên cứu này dưới sự hướng dẫn của TS Lê Thị Vinh, giảng viên khoa Khoa học cơ bản, trường Đại học Mỏ-Địa chất. Nghiên cứu này giúp Khôi nhận giải vàng tại một cuộc thi Sáng tạo khoa học Kỹ thuật quốc tế với hàng nghìn thí sinh tham dự ở Mỹ.

Cô Vinh nhận xét Khôi có tố chất nghiên cứu với sự tỉ mỉ, cẩn thận và kiên trì. Có thế mạnh ngoại ngữ, Khôi chủ động tìm tài liệu, tự học thêm kiến thức. Dù mới tiếp cận nghiên cứu, Khôi luôn suy nghĩ hướng mới để áp dụng kết quả cũ vào nghiên cứu.

"Tôi đánh giá rất cao phẩm chất này ở Khôi", cô Vinh nói.

Ngoài ra, Khôi tham gia dự án chế tạo kit test để kiểm tra nồng độ canxi trong nước, có ý nghĩa trong việc nuôi, thả cá; nghiên cứu về xử lý nước thải tại một làng nghề ở Hà Nội. Những dự án này giúp Khôi giành nhiều giải thưởng trong và ngoài nước, như giải ba nghiên cứu khoa học cấp thành phố, huy chương bạc nghiên cứu quốc tế dành cho các nhà khoa học trẻ (IRCYS)...

"Em thấy mình hợp nghiên cứu hơn là các hoạt động xã hội đòi hỏi phải khuấy động không khí, kêu gọi nhà tài trợ", Khôi nói. "Vì vậy, em tập trung vào thế mạnh này để làm điểm nhấn cho hồ sơ".'
            ],
            //23. Học Bổng
            [
                'Thầy giáo U90 tặng một tỷ đồng cho sinh viên Bách khoa Hà Nội',
                'hocbong.jpg',
                'Muốn hỗ trợ phần nào sinh viên khó khăn, thầy Bùi Long Biên đến Đại học Bách khoa Hà Nội tặng một tỷ đồng, là số tiền lớn nhất mà một nhà giáo ủng hộ. Nhà giáo Bùi Long Biên, 88 tuổi, là giảng viên cao cấp bộ môn Hóa phân tích, khoa Hóa',
                'Chia sẻ với VnExpress chiều 22/3, thầy giáo U90 nhìn nhận hành động của mình là điều rất bình thường, được cả gia đình ủng hộ. Theo thầy, đất nước đang phát triển nhanh chóng, 10 năm nữa, số sinh viên nghèo khó cần trợ giúp có lẽ không còn đáng kể. Do đó, thầy thấy may mắn "vì chớp được cơ hội" để giúp đỡ họ.

"Tôi mãn nguyện khi đã làm được điều này", thầy tâm sự.

Với số tiền do nhà giáo Bùi Long Biên trao tặng, Đại học Bách khoa Hà Nội cho biết sẽ xây dựng quỹ học bổng mang tên thầy, trước 30/4.

Theo bà Phạm Thanh Huyền, số tiền được chia thành 100 suất học bổng, mỗi suất 10 triệu đồng. Mỗi học kỳ, trường sẽ xét cấp 10 suất cho 10 sinh viên có gia đình thuộc hộ nghèo, cận nghèo hoặc hoàn cảnh đặc biệt khó khăn khác. Những em này phải đạt đồng thời các điều kiện: đang theo chương trình đào tạo chuẩn, điểm trung bình kỳ trước liền kề (GPA) từ 2.5/4 trở lên, điểm rèn luyện tối thiểu 65/100.

Sinh viên đã được nhận học bổng này vẫn được nhận ở các học kỳ tiếp theo cho đến khi chương trình kết thúc, nếu đáp ứng các yêu cầu trên. Đại học Bách khoa Hà Nội hiện có học bổng khuyến khích học tập cho sinh viên có thành tích học tập và rèn luyện tốt (khoảng 70 tỷ đồng năm học này); học bổng Trần Đại Nghĩa cấp cho những em nghèo vượt khó (khoảng 2,6 tỷ đồng mỗi năm), học bổng do các mạnh thường quân tài trợ (5-7 tỷ đồng mỗi năm); học bổng Trao đổi sinh viên quốc tế (cấp vé và bảo hiểm trị giá lên đến 30tr/suất); học bổng Gắn kết quê hương cho sinh viên có đồ án tốt nghiệp được ứng dụng ở địa phương nơi các em tốt nghiệp THPT...'
            ],
            //24. Đào Tạo Nghề
            [
                'Long An đặt mục tiêu 75% lao động đã qua đào tạo',
                'daotaonghe.jpg',
                'Địa phương tổ chức các lớp đào tạo nghề, liên kết doanh nghiệp, cơ sở giáo dục đào tạo nhân lực với mục tiêu 75% lao động qua đào tạo.

Đào tạo nguồn nhân lực đáp ứng nhu cầu phát triển công nghiệp và nông nghiệp là một trong ba nội dung trọng tâm.',
                'Địa phương tổ chức các lớp đào tạo nghề, liên kết doanh nghiệp, cơ sở giáo dục đào tạo nhân lực với mục tiêu 75% lao động qua đào tạo.

Đào tạo nguồn nhân lực đáp ứng nhu cầu phát triển công nghiệp và nông nghiệp là một trong ba nội dung trọng tâm trong phát triển tỉnh Long An giai đoạn 2020-2025.

Sau hơn 3 năm, địa phương cửa ngõ Tây Nam Bộ đã mở 84 lớp đào tạo nghề cho lao động nông thôn gắn với vùng nông nghiệp ứng dụng công nghệ cao, vùng nguyên liệu, thành viên tổ hợp tác, hợp tác xã, trang trại. Các lớp đào tạo này thu hút 3.500 người tham gia. Tỉnh cũng mở 140 lớp đào tạo nghề cho lao động nông thôn khác với gần 4.200 học viên. Sau đào tạo, đã có gần 37.000 trên tổng số 42.000 lao động nông thôn có việc làm.

Theo bà Đinh Thị Phương Khanh, Phó giám đốc Sở Nông nghiệp và Phát triển nông thôn, mỗi năm tỉnh đều xây dựng kế hoạch đào tạo nguồn nhân lực cho ngành nông nghiệp và xem đây là việc làm thường xuyên, góp phần vào mục tiêu xây dựng nông nghiệp xanh, bền vững. Từ đầu năm 2023, Sở tổ chức 7 lớp đào tạo nghề phục vụ vùng nông nghiệp ứng dụng công nghệ cao như nuôi tôm thẻ chân trắng, trồng rau, lúa công nghệ cao. 8 lớp đào tạo nghề nông nghiệp thường xuyên cho 240 học viên.

Cũng theo lãnh đạo Sở, ngành nông nghiệp còn chiêu sinh tập trung đào tạo và tái đào tạo một số ngành nghề để theo kịp nhu cầu phát triển. "Các lớp tập huấn giúp nông dân thay đổi tư duy từ sản xuất nông nghiệp sang kinh tế nông nghiệp, ứng dụng khoa học - kỹ thuật góp phần tăng năng suất, lợi nhuận trên cùng diện tích canh tác, nâng tầm nông sản địa phương", bà Khanh nói.

Bên cạnh nông nghiệp, Long An có nhiều giải pháp để đổi mới và nâng cao chất lượng giáo dục nghề nghiệp, đào tạo nhân lực chất lượng cao thích ứng với sự phát triển công nghiệp, khoa học, công nghệ. Toàn tỉnh có 3 trường cao đẳng, 5 trường trung cấp, 3 trung tâm giáo dục nghề nghiệp và 2 cơ sở tham gia giáo dục nghề nghiệp. Gần đây, địa phương này tổ chức các hội nghị, tọa đàm hướng nghiệp và định hướng phân luồng học sinh trong giáo dục phổ thông, tư vấn học nghề, việc làm cho hơn 40.500 học sinh cuối cấp gồm lớp 9 và lớp 12.'
            ],
            //25. Công Nghệ Giáo Dục
            [
                'FPT Schools tổ chức sự kiện công nghệ giáo dục tại Hải Phòng',
                'congnghegiaoduc.jpg',
                'HẢI PHÒNG_FPT Schools tổ chức sự kiện F-Edutech với hàng loạt hoạt động như tọa đàm với chuyên gia, cuộc thi STEM, robotics… tại Trung tâm Hội nghị thành phố, ngày 31/3.',
                'Trường THCS và THPT FPT tổ chức chương trình với quy mô lớn dành cho hàng nghìn giáo viên, phụ huynh và học sinh. Tại đây, người tham gia có thể cập nhật những thông tin, xu hướng mới về công nghệ giáo dục trong thời đại số.

Chủ đề của F-Edutech là "Công nghệ kiến tạo hạnh phúc". FPT School Hải Phòng hướng đến mục tiêu đưa STEM, công nghệ 4.0 trong giáo dục lan tỏa rộng rãi tới cộng đồng trường học, từ đó, khơi gợi niềm đam mê nghiên cứu khoa học, công nghệ cho học sinh. Sự kiện bao gồm nhiều trải nghiệm đa dạng để các bạn trẻ tiếp cận và chuẩn bị cho tương lai làm chủ công nghệ, kiến tạo hạnh phúc cho chính mình.

"Điều này góp phần tích cực cho quá trình chuyển đổi số của thành phố Hải Phòng", đại diện ban tổ chức khẳng định.

Ban tổ chức dự kiến thu hút 1.500 người tham gia sự kiện nhờ chuỗi hoạt động đa dạng xoay quanh chủ đề công nghệ. Trong đó, talkshow F-Edutech quy tụ nhiều chuyên gia có tiếng trong lĩnh vực công nghệ, giáo dục, gồm: Tiến sĩ tâm lý Tô Nhi A, ông Hoàng Nam Tiến - Phó Chủ tịch Hội đồng trường Đại học FPT và ông Lê Ngọc Tuấn - Giám đốc trải nghiệm công nghệ Tổ chức Giáo dục FPT.

Các diễn giả sẽ cung cấp kiến thức mới về xu hướng, ứng dụng công nghệ trong dạy và học, các tác động của công nghệ đối với ngành nghề trong tương lai... Từ đó, giáo viên, phụ huynh có thể tiếp cận góc nhìn tổng quát về bức tranh thế giới hiện tại.'
            ]
        ];
        $loaitinId = 1;
        $tacGia = ['Ngọc Hiếu', 'Ra Pát', 'Định Nguyễn', 'Xuân Long', 'Vinh Thắng'];
        $index = 0;
        foreach ($danhSachTin as $tin) {
            Tin::create([
                'tieude' => $tin[0],
                'hinhdaidien' => MyHelper::uploadImageSeed($tin[1]),
                'mota' => $tin[2],
                'noidung' => $tin[3],
                'ngaydangtin' => now(),
                'tacgia' => $tacGia[($loaitinId % 5 == 0) ? $index++ : $index],
                'solanxem' => 0,
                'tinhot' => 0,
                'trangthai' => 1,
                'id_loaitin' => $loaitinId++
            ]);
        }
    }
}
