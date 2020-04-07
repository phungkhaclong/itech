<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;
use App\Course;
use App\Section;
use App\Lesson;
use App\Sale;
use DateTime;

use Illuminate\Support\Collection;

use function PHPSTORM_META\map;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $news = News::latest()->take(8)->get();
        $admissionNews = News::where('type', 'tuyen-sinh')->latest()->first();
        $questions = [
            "Điều kiện tuyển sinh của Viện Đào tạo CNTT Quốc tế I-Tech là gì?",
            "Trình độ Tiếng Anh chưa tốt có đủ điều kiện học tại Viện Đào tạo CNTT Quốc
            tế I-Tech không?",
            "Khi đã có người thân học tại Viện Đào tạo CNTT Quốc tế I-Tech thì khi nhập
            học có được giảm học phí không?",
            "Trong chương trình học có kỳ thực tập doanh nghiệp không? Em sẽ được tự
            chọn chỗ thực tập không hay nhà trường sắp xếp? Và thực tập có lương hay không?",
            "Tại Viện Đào tạo CNTT Quốc tế I-Tech, mỗi lớp có bao nhiêu sinh viên?",
            "Ngành Quản trị và bảo mật hệ thống mạng sinh viên học tại Viện Đào tạo CNTT
            Quốc tế I-Tech có điểm gì nổi bật so với những Trường khác?",
            "Học lập trình tại Viện Đào tạo CNTT Quốc tế I-Tech ra trường làm những công
            việc gì?",
            "Giữa Phần mềm và An toàn thông tin, ngành nào khó học hơn, ngành nào dễ
            kiếm việc hơn?",
            "Ngành Thiết kế đồ họa sinh viên học tại Viện Đào tạo CNTT Quốc tế I-Tech
            có nơi để thực tập không?",
            "Sinh viên học tại Viện Đào tạo CNTT Quốc tế I-Tech có thể đi du học ở nước
            ngoài được không?"
        ];
        return view('home', compact('questions', 'news', 'admissionNews'));
    }

    public function showAboutPage()
    {
        return view('client.about');
    }

    public function showLandingPages(Request $request, $courseId)
    {
        $sale = Sale::where('course_id', $courseId)->first();

        $course = Course::where("course_id", $courseId)->first();
        $sections = Section::where("course_id", $courseId)
            ->get();
            
            $date = new DateTime();
            $today = $date->format('Y-m-d');
            // dd($date);

            if(empty($sale)) {
                $sale = new Sale();
                $sale->from_date = $today;
                $sale->to_date = $today;
            }

        foreach($sections as $section) {
            $lessons = Lesson::where("section_id", $section->id)
                ->orderBy("id", "asc")
                ->get();
                $section->lessons = $lessons;
        }
        return view('client.landing.pages', compact('course', 'sections', 'sale'));
    }

    public function showTuyenSinhPage()
    {
        return view("client.admissions.tuyensinh");
    }

    public function showhoinhap()
    {
      $kySuNhatBanNews = News::latest()->where('type', 'ky-su-nhat-ban')->take(6)->get();
      $thucTapNhatBanNews = News::latest()->where('type', 'thuc-tap-nhat-ban')->take(6)->get();
      $duHocHanQuocNews = News::latest()->where('type', 'du-hoc-han-quoc')->take(6)->get();
      return view("client.hoinhap", \compact('kySuNhatBanNews', 'thucTapNhatBanNews', 'duHocHanQuocNews'));
    }

    public function showChatLuongCaoPage()
    {
        return view("client.chatluongcao.chatLuongCao");
    }

    public function showContactPage()
    {
        return view("client.contact");
    }

    public function showQuyCheTuyenSinhPage()
    {
        return view("client.admissions.quyCheTuyenSinh");
    }

    public function showHocPhiPage()
    {
        return view('client.admissions.hocPhi');
    }
    
    public function showLoTrinhPage()
    {
        return view('client.admissions.loTrinhHocTap');
    }
    
    public function showTest()
    {
        $questionList = [
            "question1" => [
                "a", "b", "c"
            ],
            "question2" => [
                "a", "b", "c"
            ],
            "question3" => [
                "a", "b", "c"
            ],
            "question4" => [
                "a", "b", "c"
            ],
            "question5" => [
                "a", "b", "c"
            ],
            "question6" => [
                "a", "b", "c"
            ],
            "question7" => [
                "a", "b", "c"
            ],
            "question8" => [
                "a", "b", "c"
            ],
            "question9" => [
                "a", "b", "c"
            ],
            "question10" => [
                "a", "b", "c"
            ],
            "question11" => [
                "a", "b", "c"
            ],
            "question12" => [
                "a", "b", "c"
            ],
            "question13" => [
                "a", "b", "c"
            ],
            "question14" => [
                "a", "b", "c"
            ],
        ];


        $sections = array_rand($questionList, 5);
        $questions = array();

        foreach($sections as $section){
            $questions[$section] = $questionList[$section];
        }

        return view('client.test', compact('questions'));
    }
    
    


    public function showHoiDapPage()
    {
        $questions = [
            "Điều kiện tuyển sinh của Viện Đào tạo CNTT Quốc tế I-Tech là gì?",
            "Trình độ Tiếng Anh chưa tốt có đủ điều kiện học tại Viện Đào tạo CNTT Quốc
            tế I-Tech không?",
            "Khi đã có người thân học tại Viện Đào tạo CNTT Quốc tế I-Tech thì khi nhập
            học có được giảm học phí không?",
            "Trong chương trình học có kỳ thực tập doanh nghiệp không? Em sẽ được tự
            chọn chỗ thực tập không hay nhà trường sắp xếp? Và thực tập có lương hay không?",
            "Tại Viện Đào tạo CNTT Quốc tế I-Tech, mỗi lớp có bao nhiêu sinh viên?",
            "Ngành Quản trị và bảo mật hệ thống mạng sinh viên học tại Viện Đào tạo CNTT
            Quốc tế I-Tech có điểm gì nổi bật so với những Trường khác?",
            "Học lập trình tại Viện Đào tạo CNTT Quốc tế I-Tech ra trường làm những công
            việc gì?",
            "Giữa Phần mềm và An toàn thông tin, ngành nào khó học hơn, ngành nào dễ
            kiếm việc hơn?",
            "Ngành Thiết kế đồ họa sinh viên học tại Viện Đào tạo CNTT Quốc tế I-Tech
            có nơi để thực tập không?",
            "Sinh viên học tại Viện Đào tạo CNTT Quốc tế I-Tech có thể đi du học ở nước
            ngoài được không?"
        ];
        $answers = [
            "Điều kiện tuyển sinh của Viện Đào tạo CNTT Quốc tế I-Tech là gì?" => "answer 0",
            "Trình độ Tiếng Anh chưa tốt có đủ điều kiện học tại Viện Đào tạo CNTT Quốc
            tế I-Tech không?" => "answer 1",
            "Khi đã có người thân học tại Viện Đào tạo CNTT Quốc tế I-Tech thì khi nhập
            học có được giảm học phí không?" => "answer 2",
            "Trong chương trình học có kỳ thực tập doanh nghiệp không? Em sẽ được tự
            chọn chỗ thực tập không hay nhà trường sắp xếp? Và thực tập có lương hay không?" => "answer 3",
            "Tại Viện Đào tạo CNTT Quốc tế I-Tech, mỗi lớp có bao nhiêu sinh viên?" => "answer 4",
            "Ngành Quản trị và bảo mật hệ thống mạng sinh viên học tại Viện Đào tạo CNTT
            Quốc tế I-Tech có điểm gì nổi bật so với những Trường khác?" => "answer 5",
            "Học lập trình tại Viện Đào tạo CNTT Quốc tế I-Tech ra trường làm những công
            việc gì?" => "answer 6",
            "Giữa Phần mềm và An toàn thông tin, ngành nào khó học hơn, ngành nào dễ
            kiếm việc hơn?" => "answer 7",
            "Ngành Thiết kế đồ họa sinh viên học tại Viện Đào tạo CNTT Quốc tế I-Tech
            có nơi để thực tập không?" => "answer 8",
            "Sinh viên học tại Viện Đào tạo CNTT Quốc tế I-Tech có thể đi du học ở nước
            ngoài được không?" => "answer 9"
        ];
        return view('client.admissions.hoiDap', compact('questions', 'answers'));
    }

    public function showMajorsPages()
    {
        return view('client.chatluongcao.pages');
    }
}
