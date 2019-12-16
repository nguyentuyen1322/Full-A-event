<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events;
use App\users;
use Illuminate\Support\Str;
use App\Type_events;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
class InfouserController extends Controller
{
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

    public function getEventcreate(){
        $users = users::all();
        // $create_event = Events::where('id_user',Auth::user()->id)->get();
        $create_event = Events::all()->take(2);
        return view('pages/eventcreate',['eventcreate'=>$create_event,'user'=>$users]);
    }

    public function getSua($id){
        $edit_event = Events::find($id);
        $danhmuc = Type_events::all();
        return view('pages.editevent',['edit_events'=>$edit_event,'danhmuc'=>$danhmuc]);
    }

    public function postSua(Request $request,$id){
        $event = Events::find($id);
        $this->validate($request,
        [
            'ten_su_kien' => 'required|unique:events,ten_su_kien|min:2|max: 100|',
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
        $event->ngay_ban = $request->ngay_ban;
        $event->tom_tat = $request->tom_tat;
        $event->mo_ta = $request->mo_ta;
        $event->so_luong_ve_thuong = $request->so_luong_ve_thuong;
        $event->so_luong_ve_vip = $request->so_luong_ve_vip;

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
                alert('Đã sửa !!! Sự kiện bạn đang đợi phê duyệt');
                window.location = '".url('pages/editevent/sua/'.$event->id)."'
           </script>
        ";
        // return redirect('pages/editevent/sua/'.$event->id)->with('thongbao','Đã sửa !!! Sự kiện bạn đang đợi phê duyệt');
    }

    public function getXoa($id){
        $create_event = Events::find($id);
        $create_event->delete();
        return redirect('pages/eventcreate');
    }

    public function getInfouser(Request $request){
        $gg = json_decode($request->cookie('logingg'));
        if(isset($gg->id_gg)){
             $user = users::where('id_gg', $gg->id_gg)->get();
        return view('pages.infouser',['logingg'=>$user[0]]);
        }
        $fb = json_decode($request->cookie('loginfb'));
        if(isset($fb->id_fb)){
             $user = users::where('id_fb', $fb->id_fb)->get();
        return view('pages.infouser',['loginfb'=>$user[0]]);
        }
        $user = users::all();
        return view('pages.infouser',['user'=>$user]);
    }

    public function getEdituser($id){
       
        $user = users::find($id);
        return view('pages.edituser', ['users'=> $user]);
    }

    public function postEdituser(Request $request,$id){
        $user = users::find($id);
        $this->validate($request, 
        [
            'email'=>'required|min:3|max:32',
            'name'=>'required|min:3|max:32',
            'dien_thoai'=>'required|min:1|max:11',
            'dia_chi'=>'required|min:3|max:32',
            'ngay_sinh'=>'required',
            'gioi_tinh'=>'required',
            'hinh'=>'required',
            'vip'=>'required',
        ],
        [
            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 3 kí tự',
            'email.max'=>'email không quá 32 kí tự',

            'name.required'=>'bạn chưa nhập tên',
            'name.min'=>'tên phải lơn hơn 3 kí tự',
            'name.max'=>'tên không quá 32 kí tự',

            'dien_thoai.required'=>'bạn chưa nhập số điện thoại',
            'dien_thoai.min'=>'số điện thoại phải lớn hơn 1 kí tự',
            'dien_thoai.max'=>'số điện thoại không quá 11 kí tự',

            'dia_chi.required'=>'bạn chưa nhập địa chỉ',
            'dia_chi.min'=>'địa chỉ phải lớn hơn 3 kí tự',
            'dia_chi.max'=>'địa chỉ không quá 32 kí tự',

            'ngay_sinh.required'=>'bạn chưa nhập ngày sinh',

            'gioi_tinh.required'=>'bạn chưa chọn giới tính',

            'hinh.required'=>'bạn chưa chọn hình',

            'vip.required'=>'bạn chưa nhập chọn khách hàng',
        ]);
            $user->email = $request->email;
            $user->name = $request->name;
            if($request->password)
            $user->password = bcrypt($request->password);
            $user->dien_thoai = $request->dien_thoai;
            $user->dia_chi = $request->dia_chi;
            $user->ngay_sinh = $request->ngay_sinh;
            $user->gioi_tinh = $request->gioi_tinh;
            if($request->hasFile('hinh')){
                $file = $request->file('hinh');
                if($file->getClientOriginalExtension() == 'png' || 'jpg' || 'jpeg' || 'gif'){
                    $filename = md5(time()).'_'.$file->getClientOriginalName();
                    $file->move(public_path('images/user'), $filename);
                    $link = $filename;
                    $user->hinh = $link;
                }
            }else{
                $user->hinh= '';
            }
            $user->vip = $request->vip;
            $user->save();
  
        return redirect('pages/edituser/sua/'.Auth::user()->id)->with('thongbao','Sửa thông tin thành công !');
    }
}
