<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\users;

class UserController extends Controller
{
    public function getDanhsach(){
        $user = users::paginate(5);
        return view('admin.user.danhsach',['user'=>$user]);
    }
    public function getThem(){
        return view('admin.user.them');
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'email'=>'required|min:3|max:32',
            'name'=>'required|min:3|max:32',
            'password'=>'required|min:3|max:32',
            'dien_thoai'=>'required|min:1|max:11',
            'dia_chi'=>'required|min:3|max:32',
            'ngay_sinh'=>'required',
            'gioi_tinh'=>'required',
            'hinh'=>'required',
            'vip'=>'required',
            'type'=>'required',
        ],
        [
            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 3 kí tự',
            'email.max'=>'email không quá 32 kí tự',

            'name.required'=>'bạn chưa nhập tên',
            'name.min'=>'tên phải lơn hơn 3 kí tự',
            'name.max'=>'tên không quá 32 kí tự',

            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu phải lớn hơn 3 kí tự',
            'password.max'=>'mật khẩu không quá 32 kí tự',

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

            'type.required'=>'bạn chưa chọn kiểu Accounts',
        ]);
        $user = new users;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->dien_thoai = $request->dien_thoai;
        $user->dia_chi = $request->dia_chi;
        $user->ngay_sinh = $request->ngay_sinh;
        $user->gioi_tinh = $request->gioi_tinh;
        if($request->hasFile('hinh')){
            $file = $request->file('hinh');
            if($file->getClientOriginalExtension() == 'png' || 'jpg' || 'jpeg' || 'gif'){
                $filename = md5(time()).'_'.$file->getClientOriginalName();
                $file->move('images/user',$filename);
                $link = $filename;
                $user->hinh = $link;
            }
        }else{
            $user->hinh= '';
        }
        $user->vip = $request->vip;
        $user->type = $request->type;
        $user->save();
        return redirect('admin/user/them')->with('thongbao', 'Đăng kí Accounts thành công !');
    }
    public function getSua($id){
        $user = users::find($id);
        return view('admin.user.sua',['user'=>$user]);
    }

    public function postSua(Request $request, $id){
        $user = users::find($id);
        $this->validate($request,
        [
            'email'=>'required|min:3|max:32',
            'name'=>'required|min:3|max:32',
            'password'=>'required|min:3|max:32',
            'dien_thoai'=>'required|min:1|max:11',
            'dia_chi'=>'required|min:3|max:32',
            'ngay_sinh'=>'required',
            'gioi_tinh'=>'required',
            'hinh'=>'required',
            'vip'=>'required',
            'type'=>'required',
        ],
        [
            'email.required'=>'bạn chưa nhập email',
            'email.min'=>'email phải lớn hơn 3 kí tự',
            'email.max'=>'email không quá 32 kí tự',

            'name.required'=>'bạn chưa nhập tên',
            'name.min'=>'tên phải lơn hơn 3 kí tự',
            'name.max'=>'tên không quá 32 kí tự',

            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu phải lớn hơn 3 kí tự',
            'password.max'=>'mật khẩu không quá 32 kí tự',

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

            'type.required'=>'bạn chưa chọn kiểu Accounts',
        ]);

        $user->email = $request->email;
        $user->name = $request->name;
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
        $user->type = $request->type;
        $user->save();
        return redirect('admin/user/sua/'.$user->id)->with('thongbao', 'Sửa Accounts thành công !');
    }

    public function getXoa($id){
        $user = users::find($id);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Bạn đã xóa Accounts thành công !');
    }

}
