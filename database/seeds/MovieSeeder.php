<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new Movie();
        $movie->name = 'FALL IN LOVE AT FIRST KISS';
        $movie->description = 'Bộ phim xoay quanh câu chuyện tình của Giang Trực Thụ và Viên Tương Cầm. Trong khi Trực Thục là một chàng trai thư sinh học giỏi vạn người mê thì Tương Cầm lại vô cùng hậu đậu, vụng về. Quyết định từ bỏ Trục Thụ sau khi tỏ tình thất bại nhưng nào ngờ đâu gia đình Tương Cầm lại về sống cạnh nhà anh chàng. Và những những ngọt ngào xen lẫn cả nước mắt bắt đầu xảy ra...';
        $movie->time = 120;
        $movie->category = '2D';
        $movie->releaseDate = '2019/10/02';
        $movie->save();

        $movie = new Movie();
        $movie->name = 'MOBILE SUIT GUNDAM NARRATIVE';
        $movie->description = 'Năm U.C.0096, sau sự kiện chấn động "Laplace Incident" dẫn đến sự suy tàn của đế chế Neo Zeon (những con người bị lưu đày khỏi trái đất và đi vào vũ trụ), 2 bộ giáp chiến hùng mạnh Unicorn Gundam và Banshee bị phong tỏa và cất giữ bởi Chính Quyền Liên Bang. Tuy nhiên năm U.C.0097, một bộ giáp Gundam thứ 3 bỗng nhiên xuất hiện mệnh danh là Phenex và trở thành mục tiêu đuổi bắt của cả hai thế lực là Chính Quyền Liên Ban và Neo Zeon cùng với âm mưu che giấu tội ác phía sau những con người mang năng lực dự đoán tương lai Newtypes.';
        $movie->time = 90;
        $movie->category = '2D';
        $movie->releaseDate = '2019/10/02';
        $movie->save();

        $movie = new Movie();
        $movie->name = 'ALITA: BATTLE ANGEL';
        $movie->description = 'Tác phẩm live-action chuyển thể từ manga cùng tên của Yukito Kishiro. ALITA: BATTLE ANGEL (Thiên Thần Chiến Binh) hứa hẹn là một tác phẩm hành động viễn tưởng đỉnh cao qua bàn tay nhào nặn của những tên tuổi huyền thoại - James Cameron, Jon Landau và đạo diễn Robert Rodriguez. Phim lấy bối cảnh ở thế kỷ 26, xoay quanh nữ cyborg Alita do nữ diễn viên Rosa Salazar thủ vai. ';
        $movie->time = 120;
        $movie->category = '2D, 3D';
        $movie->releaseDate = '2019/10/02';
        $movie->save();
    }
}
