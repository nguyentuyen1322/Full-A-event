<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Type_events;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AddeventController extends Controller
{
    // k hiện user thì add cái này vô controller
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            if($request->cookie('loginfb'))
            view()->share('loginfb',json_decode($request->cookie('loginfb')));
            return $next($request);
        });
        $this->middleware(function ($request, $next) {
            if($request->cookie('logingg'))
            view()->share('logingg',json_decode($request->cookie('logingg')));
            return $next($request);
        });

    }
    public function getAddevent(){
        $danhmuc = Type_events::all();
        return view('pages.addevent',['danhmuc'=>$danhmuc]);
    }

    public function postAddevent(Request $request){
        $this->validate($request,
        [
            'ten_su_kien' => 'required|unique:Events,ten_su_kien|min:2|max: 100|',
            'ngay_dien_ra' =>'required',
            'thoi_gian' => 'required',
            'nha_tai_tro' => 'required',
            'gia_ve'=> 'required|integer|min:1000|max:100000000|',
            'vi_tri_ve_thuong' => 'min:0|max:200|',
            'qua_tang_thuong' => 'min:2|max:200|',
            'vi_tri_ve_vip' => 'min:0|max:200|',
            'qua_tang_vip'=>'min:2|max:200|',
            'gia_ve_vip'=>'|integer|min:1000|max:100000000|',
            'banner'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048|',
            'logo'=>'mimes:jpeg,png,jpg.gif,svg|max:2048|',
            'dia_chi' => 'required',
            'mo_ta' => 'required',
            'so_luong_ve_thuong' => 'required|integer|',
            'so_luong_ve_vip' => 'required|integer|',
        ],
        [
            'ten_su_kien.required' => ' Bạn chưa nhập tên sự kiện',
            'ten_su_kien.unique' => 'Tên sự kiện đã trùng với 1 sự kiện khác',
            'ten_su_kien.min' => ' Tên sự kiện phải có từ 3 đến 100 ký tự',
            'ten_su_kien.max' => ' Tên sự kiện phải có từ 3 đến 100 ký tự',
            'nha_tai_tro.required' => ' Bạn chưa nhập nhà tài trợ',
            'ngay_dien_ra.required' => 'Bạn chưa chọn ngày diễn ra sự kiện',
            'thoi_gian.required' =>'Bạn chưa chọn thời gian diễn ra sự kiện',
            'gia_ve.required' => 'Bạn chưa nhập giá vé',
            'gia_ve.integer' => 'Giá vé phải là số nguyên dương',
            'gia_ve.min' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng',
            'gia_ve.max' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng',
            'gia_ve_vip.max' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng',
            'gia_ve_vip.min' => 'Giá tối thiếu 1 000 đồng đến 100 000 000 đồng',
            'gia_ve_vip.integer' => 'Giá vé phải là số nguyên dương',
            'vi_tri_ve_thuong.min' => 'Nhập vị trí ngồi của vé thường( Không được quá 2 -> 200 kí tự )',
            'vi_tri_ve_thuong.max' => 'Nhập vị trí ngồi của vé thường( Không được quá 2 -> 200 kí tự )',
            'qua_tang_thuong.max' => 'Nhập quà tặng của vé thường( Không được quá 2 -> 200 kí tự )',
            'qua_tang_thuong.min' => 'Nhập quà tặng của vé thường( Không được quá 2 -> 200 kí tự )',
            'qua_tang_thuong.vip' => 'Nhập quà tặng của vé vip( Không được quá 0 -> 200 kí tự )',
            'qua_tang_thuong.vip' => 'Nhập quà tặng của vé vip( Không được quá 0 -> 200 kí tự )',
            'vi_tri_ve_vip.min' => 'Nhập vị trí ngồi của vé vip( Không được quá 0 -> 200 kí tự )',
            'vi_tri_ve_vip.max' => 'Nhập vị trí ngồi của vé vip( Không được quá 00 -> 200 kí tự )',
            'gia_ve.integer' => 'Giá vé phải là số ',
            'banner.required' => 'Bạn chưa add banner sự kiện',
            'banner.mimes' => 'Banner phải là hình có đuôi jpeg,png,jpg,gif,svg',
            'banner.max'=>'Dung lượng hình không được quá 2Mb',
            'logo.mimes'=>'Logo phải là hình có đuôi jpeg,png,jpg,gif,svg',
            'logo.max'=>'Dung lượng hình không được quá 2Mb',
            'dia_chi.required' => 'Bạn chưa nhập nơi diễn ra sự kiện',
            'mo_ta.required' => 'Bạn chưa nhập mô tả sự kiện',
            'so_luong_ve_thuong.required' => 'Bạn chưa nhập số lượng vé thường',
            'so_luong_ve_thuong.integer' => ' Số lượng phải là số',
            'so_luong_ve_vip.required' => 'Bạn chưa nhập số lượng vé vip',
            'so_luong_ve_vip.integer' => ' Số lượng phải là số'
        ]
        );

        $event = new Events;
        $event->ten_su_kien = $request->ten_su_kien;
        $event->id_loai = $request->id_loai;
        $event->ngay_dien_ra = $request->ngay_dien_ra;
        $event->nha_tai_tro = $request->nha_tai_tro;
        $event->vi_tri_ve_thuong = $request->vi_tri_ve_thuong;
        $event->vi_tri_ve_vip = $request->vi_tri_ve_vip;
        $event->gia_ve_vip = $request->gia_ve_vip;
        $event->qua_tang_thuong = $request->qua_tang_thuong;
        $event->qua_tang_vip = $request->qua_tang_vip;
        $event->thoi_gian = $request->thoi_gian;
        $event->gia_ve = $request->gia_ve;
        $event->dia_chi = $request->dia_chi;
        $event->tom_tat = $request->tom_tat;
        $event->mo_ta = $request->mo_ta;
        $event->so_luong_ve_thuong = $request->so_luong_ve_thuong;
        $event->so_luong_ve_vip = $request->so_luong_ve_vip;
        $event->email_chu = Auth::user()->email;
        $event->id_user = Auth::user()->id;

        if($request->hasFile('logo')){
            $file_logo = $request->file('logo');
            $name_logo = $file_logo->getClientOriginalName();
            $logo = Str::random(10)."_". $name_logo;
            $file_logo->move('images/logo',$logo);
            $event->logo = $logo;
        }
        else
        {
        $event->logo = "";
        }

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $name = $file->getClientOriginalName();
            $banner = Str::random(10)."_". $name;
            $file->move('images/product',$banner);
            $event->banner = $banner;
        }
        else
        {
            $event->banner = "";
        }

        $event->save();
        echo "
           <script>
                alert('Đã thêm !!! Sự kiện bạn đang đợi phê duyệt');
                window.location = '".url('pages/addevent')."'
           </script>
        ";
        // return redirect('pages/addevent');
    }

}
