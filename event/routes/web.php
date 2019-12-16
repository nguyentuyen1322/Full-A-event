<?php
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
use Symfony\Component\Routing\Annotation\Route;
*/




// pages website


Route::group(['prefix'=>'pages'], function(){
    Route::get('index', 'PagesController@getIndex');

    Route::get('search', 'PagesController@getSearch');
    Route::post('search', 'PagesController@postSearch');

    Route::get('addevent', 'AddeventController@getAddevent')->middleware('check_addevent');
    Route::post('addevent', 'AddeventController@postAddevent');

    Route::get('chitiet/{id}',[
        'as' =>'chitiet',
        'uses'=>'PagesController@getChitiet',
    ]);
    Route::get('chitiettintuc/{id}',[
        'as' =>'chitiettintuc',
        'uses'=>'NewController@getChitiettintuc',
    ]);



    Route::get('bookingone/{id}',[
        'as' => 'bookingone',
        'uses' => 'BookingController@getBookingone',
    ]);

    Route::get('bookingtwo/{id}',[
        'as' => 'bookingtwo',
        'uses' =>'BookingController@getBookingtwo']);

    Route::post('bookingtwo/{id}',[
                'as' => 'postbookingtwo',
                'uses' =>'BookingController@postBookingtwo']);

    Route::post('bookingthree/{id}',[
                'as' => 'postBookingthree',
                'uses' =>'BookingController@postBookingthree']);

    Route::get('bookingthree/{id}', 'BookingController@getBookingthree');

    Route::get('danhmuc/{id}',[
        'as' => 'danhmuc',
        'uses' => 'PagesController@getDanhmuc',
    ]);
    Route::post('danhmuc/{id}', 'PagesController@postDanhmuc');

    Route::get('eventcreate','InfouserController@getEventcreate');

    Route::get('editevent/sua/{id}', 'InfouserController@getSua');
    Route::post('editevent/sua/{id}', 'InfouserController@postSua');

    Route::get('eventcreate/xoa/{id}', 'InfouserController@getXoa');

    Route::get('infouser', 'InfouserController@getInfouser');

    Route::get('edituser/sua/{id}', 'InfouserController@getEdituser');
    Route::post('edituser/sua/{id}', 'InfouserController@postEdituser');

    Route::get('login', 'PagesController@getLogin');
    Route::post('login', 'PagesController@postLogin');

    Route::get('register', 'PagesController@getRegister');
    Route::post('/register', 'PagesController@postRegister');

    Route::get('dangxuat', 'PagesController@getDangxuat');

    Route::get('login/loginsuccess', 'Auth\SocialController@loginsuccess');

    Route::get('login/{provider}', 'Auth\SocialController@redirectToGoogle');
    Route::get('login/{provider}/callback', 'Auth\SocialController@handleGoogleCallback');

    Route::get('erorr', 'PagesController@getErorr');

});
// pages website

// admin

    Route::get('admin/login', 'PagesController@getLoginAdmin');
    Route::post('admin/login', 'PagesController@postLoginAdmin');
    Route::get('admin/logout', 'PagesController@getLogoutAdmin');


Route::group(['prefix'=>'admin','middleware'=>'checklogin'], function(){
    // danhmuc
    Route::group(['prefix' => 'danhmuc'], function () {
        // hướng đi admin/danhmuc/danhsach
        Route::get('danhsach','DanhmucController@getDanhsach');

        Route::get('sua/{id}', 'DanhmucController@getSua');
        Route::post('sua/{id}', 'DanhmucController@postSua');


        Route::get('them', 'DanhmucController@getThem');
        Route::post('them', 'DanhmucController@postThem');
        // Hàm post nhận dữ liệu về và lưu vào cơ sở dữ liệu
        Route::get('xoa/{id}', 'DanhmucController@getXoa');
    });

    // danhmuc


    // Sự kiện
    Route::group(['prefix' => 'event'], function () {
        // hướng đi admin/event/danhsach
        Route::get('danhsach','EventController@getDanhsach');

        Route::get('sua/{id}', 'EventController@getSua');
        Route::post('sua/{id}', 'EventController@postSua');


        Route::get('them', 'EventController@getThem');
        Route::post('them', 'EventController@postThem');
        // Hàm post nhận dữ liệu về và lưu vào cơ sở dữ liệu
        Route::get('xoa/{id}', 'EventController@getXoa');

        // Phê duyệt
        Route::get('pheduyet/{id}', 'EventController@getDuyet');
        Route::post('pheduyet/{id}', 'EventController@postDuyet');
    });
    // Loại tin
    Route::group(['prefix' => 'loaitin'], function () {

        Route::get('danhsach','LoaitinController@getDanhsach');

        Route::get('sua/{id}', 'LoaitinController@getSua');
        Route::post('sua/{id}', 'LoaitinController@postSua');


        Route::get('them', 'LoaitinController@getThem');
        Route::post('them', 'LoaitinController@postThem');
        // Hàm post nhận dữ liệu về và lưu vào cơ sở dữ liệu
        Route::get('xoa/{id}', 'LoaitinController@getXoa');

    });
    // Tin tức
    Route::group(['prefix' => 'new'], function () {

        Route::get('danhsach','NewController@getDanhsach');

        Route::get('sua/{id}', 'NewController@getSua');
        Route::post('sua/{id}', 'NewController@postSua');

        Route::get('them', 'NewController@getThem');
        Route::post('them', 'NewController@postThem');

        Route::get('xoa/{id}', 'NewController@getXoa');
    });
    // Addevent
    // Accounts
    Route::group(['prefix' => 'user'], function () {
        Route::get('danhsach','UserController@getDanhsach');

        Route::get('sua/{id}', 'UserController@getSua');
        Route::post('sua/{id}', 'UserController@postSua');

        Route::get('them', 'UserController@getThem');
        Route::post('them', 'UserController@postThem');

        Route::get('xoa/{id}', 'UserController@getXoa');
    });
    // Accounts
    // Seenmail
    Route::group(['prefix' => 'booking'], function () {

        Route::get('danhsach','SeenmailController@getDanhsach');

        Route::get('xoa/{id}', 'SeenmailController@getXoa');
    });
    // Seenmail
    Route::get('dashboard', 'PagesController@getDashboard');
});

// admin
