<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/login', 'Auth\LoginController@getUserLogin')->name('login');
Route::post('/login', 'Auth\LoginController@userLogin');
Route::get('/changePassword','Auth\ChangePasswordController@showChangePasswordForm');
Route::post('/changePassword','Auth\ChangePasswordController@changePassword')
    ->name('changePassword');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@showAboutPage')->name('about');
Route::get('/nganh-dao-tao/chat-luong-cao', 'HomeController@showChatLuongCaoPage');
Route::get('/nganh-dao-tao/{courseId}', 'HomeController@showLandingPages');
Route::post('/contact', 'Client\RegistrationController@store');

Route::get('/nganh-dao-tao/chat-luong-cao/{majorId}', 'HomeController@showMajorsPages');

Route::group(['prefix' => 'tuyen-sinh'], function(){
    Route::get('tin-tuyen-sinh', 'HomeController@showTuyenSinhPage')
        ->name('tin_tuyen_sinh');
    Route::get('quy-che-tuyen-sinh', 'HomeController@showQuyCheTuyenSinhPage')
        ->name('quy_che_tuyen_sinh');
    Route::get('hoc-phi-hoc-bong', 'HomeController@showHocPhiPage')
        ->name('hoc_phi_hoc_bong');
    Route::get('lo-trinh-hoc-tap', 'HomeController@showLoTrinhPage')
        ->name('lo_trinh_hoc_tap');
    Route::get('hoi-dap', 'HomeController@showHoiDapPage')
        ->name('hoi_dap');
});


Route::group(['prefix' => 'tin-tuc'], function(){
    Route::get('/', 'Client\NewsController@index');
    Route::get('/tin-noi-bo', 'Client\NewsController@showNewsByType')
        ->name('tin_noi_bo');
    Route::get('/tin-cong-nghe', 'Client\NewsController@showNewsByType')
        ->name('tin_cong_nghe');
    Route::get('/su-kien', 'Client\NewsController@showNewsByType')
        ->name('events');
    Route::get('/{slug}', 'Client\NewsController@show');
});

Route::group(['prefix' => 'hoi-nhap-quoc-te'], function() {
    Route::get('/', 'HomeController@showhoinhap')->name('hoi_nhap_quoc_te');
    Route::get('/ky-su-nhat-ban', 'Client\NewsController@showNewsByType')->name('ky_su_nhat_ban');
    Route::get('/thuc-tap', 'Client\NewsController@showNewsByType')->name('thuc_tap');
    Route::get('/du-hoc', 'Client\NewsController@showNewsByType')->name('du_hoc');
});

Route::group(['prefix' => 'sinh-vien'], function(){
    Route::get('thoi-khoa-bieu', 'Client\ScheduleController@index')
        ->name('thoi_khoa_bieu');
    Route::get('thoi-khoa-bieu/download/{id}', "Client\ScheduleController@downloadSchedule")
        ->name('downloadSchedule');
    Route::get('ket-qua-hoc-tap', 'Client\ResultController@index')
        ->name('ket_qua_hoc_tap');
    Route::get('ket-qua-hoc-tap/{id}', 'Client\ResultController@show');
    Route::get('mau-van-ban', 'Client\DocumentController@index')
        ->name('mau_van_ban');
    Route::get('mau-van-ban/download/{id}', "Client\DocumentController@downloadDocument")
        ->name('downloadDocument');
    Route::get('phan-mem-ho-tro', 'Client\DocumentController@softwares')
      ->name('phan_mem_ho_tro');
});
// lien he
Route::get('/lien-he', 'HomeController@showContactPage')->name('contact');
Route::get('/trac-nghiem', 'HomeController@showTest')->name('test');

Route::group(['prefix' => 'admin'], function() {
    Route::resource('/students', 'StudentController')->except(['show']);
    Route::resource('/majors', 'MajorsController');
    Route::resource('/news', 'NewsController');
    Route::resource('/classes', 'ClassController');
    Route::resource('/lessons', 'LessonController');
    Route::resource('/registrations', 'RegistrationController');
    Route::resource('/subjects', 'SubjectController');
    Route::resource('/results', 'ResultController');
    Route::resource('/documents', 'DocumentController');
    Route::resource('/courses', 'CoursesController');
    Route::resource('/sales', 'SaleController');
    Route::resource('/schedules', 'ScheduleController');
    Route::resource('/softwares', 'SoftwareController')
        ->except(['index', 'show', 'edit', 'update']);

    Route::get('/login', 'Auth\LoginController@getAdminLogin')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@adminLogin');
    
    Route::post('/courses/{courseId}', 'CoursesController@addSection');
    Route::post('/courses/{courseId}/sections/{sectionId}', 'CoursesController@addLesson');
    Route::delete('/courses/{courseId}/sections/{sectionId}/lessons/{lessonId}', 'CoursesController@deleteLesson');
    Route::delete('/courses/{courseId}/sections/{sectionId}', 'CoursesController@deleteSection');

    Route::get('/classes/{classId}/addStudent', 'ClassController@getAddStudent');
    Route::post('/classes/{classId}/addStudent', 'ClassController@postAddStudent');
    Route::post('/classes/{classId}/{studentID}', 'ClassController@postDeleteStudent');
    Route::post('/classes/{classId}', 'ClassController@addSubject');

    //export danh sach sinh vien
    Route::get('/students/export', 'ExcelController@exportStudentList')
        ->name('export');
    Route::get('/classes/{classId}/export', 'ExcelController@exportStudentsInClass')
        ->name('exportStudentInClass');
});