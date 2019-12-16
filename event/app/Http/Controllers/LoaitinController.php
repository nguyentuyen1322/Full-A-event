<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type_news;
class LoaitinController extends Controller
{
    public function getDanhsach(){
        $loaitin = Type_news::all();
        return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
    }


    //SỬa
    public function getSua($id){
        $loaitin = Type_news::find($id);
        return view('admin.loaitin.sua',['loaitin'=>$loaitin]);

    }
    public function postSua(Request $request,$id){
        $loaitin = Type_news::find($id);
        $this->validate($request,
        [
            'ten_loai' => 'required|unique:Type_news,ten_loai|min:3|max:100|'
        ],
        [
            'ten_loai.required' => 'Bạn chưa nhập tên loại tin',
            'ten_loai.unique' => 'Tên loại tin đã tồn tại',
            'ten_loai.min' => 'Tên loại tin phải có từ 3 đến 100 ký tự',
            'ten_loai.max' => 'Tên loại tin phãi có từ 3 đến 100 ký tự',
        ]);
            $loaitin->ten_loai = $request->ten_loai;
            $loaitin->save();

            return redirect('admin/loaitin/sua/'.$loaitin->id)->with('thongbao','Sửa thành công'); // Đưa người dùng về trnag sửa
    }

    //THêm loại tin
    public function getThem(){
        return view('admin.loaitin.them');
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'ten_loai' => 'required|min:2|max: 100|'
        ],
        [
            'ten_loai.required' => ' Bạn chưa nhập tên loại tin',
            'ten_loai.min' => ' Tên loại tin phải có từ 3 đến 100 ký tự',
            'ten_loai.max' => ' Tên loại tin phải có từ 3 đến 100 ký tự'
        ]);

        $loaitin = new Type_news;
        $loaitin->ten_loai = $request->ten_loai;
        $loaitin->save();
        return redirect('admin/loaitin/them')->with('thongbao','Thêm thành công');
    }

//Xóa

    public function getXoa($id){
        $loaitin = Type_news::find($id);
        $loaitin->delete();
        return redirect('admin/loaitin/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
