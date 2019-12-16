<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type_events;

class DanhmucController extends Controller
{
    
    public function getDanhsach(){
        $danhmuc = Type_events::all();
        return view('admin.danhmuc.danhsach',['danhmuc'=>$danhmuc]);
    }


    //SỬa danh mục
    public function getSua($id){
        $danhmuc = Type_events::find($id);
        return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc]);

    }
    public function postSua(Request $request,$id){
        $danhmuc = Type_events::find($id);
        $this->validate($request,
        [
            'ten_loai' => 'required|unique:Type_events,ten_loai|min:3|max:100|'
        ],
        [
            'ten_loai.required' => 'Bạn chưa nhập tên danh mục',
            'ten_loai.unique' => 'Tên danh mục đã tồn tại',
            'ten_loai.min' => 'Tên danh mục phải có từ 3 đến 100 ký tự',
            'ten_loai.max' => 'Tên danh mục phãi có từ 3 đến 100 ký tự',
        ]);
            $danhmuc->ten_loai = $request->ten_loai;
            $danhmuc->save();

            return redirect('admin/danhmuc/sua/'.$danhmuc->id)->with('thongbao','Sửa thành công'); // Đưa người dùng về trnag sửa
    }

    //THêm danh mục
    public function getThem(){
        return view('admin.danhmuc.them');
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'ten_loai' => 'required|min:2|max: 100|'
        ],
        [
            'ten_loai.required' => ' Bạn chưa nhập tên danh mục',
            'ten_loai.min' => ' Tên danh mục phải có từ 3 đến 100 ký tự',
            'ten_loai.max' => ' Tên danh mục phải có từ 3 đến 100 ký tự'
        ]);

        $danhmuc = new Type_events;
        $danhmuc->ten_loai = $request->ten_loai;
        $danhmuc->save();
        return redirect('admin/danhmuc/them')->with('thongbao','Thêm thành công');
    }

//Xóa

    public function getXoa($id){
        $danhmuc = Type_events::find($id);
        $danhmuc->delete();
        return redirect('admin/danhmuc/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
