<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Type_news;
use Illuminate\Support\Str;
use Carbon\Carbon;
class NewController extends Controller
{
    public function getDanhsach(){
        $tintuc = News::paginate(5);
        return view('admin.new.danhsach',compact('tintuc'));

    }
    public function getChitiettintuc(Request $req){
        $chitiet = News::where('id',$req->id)->first();
        $danhmuclienquan = News::where('loai_tin',$chitiet->loai_tin)->get();
        return view('pages.chitiettintuc',['chitiet'=>$chitiet],['danhmuclienquan'=>$danhmuclienquan]);
    }



// Thêm
    public function getThem(){
        $loaitin = Type_news::all();
        return view('admin.new.them',['loaitin'=>$loaitin]);
    }
    public function postThem(Request $request){
       $this->validate($request,
       [
        'tieu_de' => 'required|unique:tintuc,tieu_de|min:2|max: 100|',
        'banner'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048|',
        'noi_dung'=>'required',
       ],
       [
        'tieu_de.required' => ' Bạn chưa nhập tiêu đề',
        'tieu_de.unique' => 'Tiêu đề đã trùng với 1 tiêu đề khác',
        'tieu_de.min' => ' Tiêu đề phải có từ 3 đến 100 ký tự',
        'tieu_de.max' => ' Tiêu đề phải có từ 3 đến 100 ký tự',
        'banner.required' => 'Bạn chưa add banner tin tức',
        'banner.mimes' => 'Banner phải là hình có đuôi jpeg,png,jpg,gif,svg',
        'banner.max'=>'Dung lượng hình không được quá 2Mb',
        'noi_dung.required' => 'Bạn chưa nhập nội dung tin tức',
       ]
       );

       $news = new News;
       $news->tieu_de = $request->tieu_de;
       $news->loai_tin = $request->loai_tin;
       $news->noi_dung = $request->noi_dung;
       $news->noi_bat= $request->noi_bat;


       if($request->hasFile('banner')){
        $file = $request->file('banner');
        $name = $file->getClientOriginalName();
        $banner = Str::random(10)."_". $name;
        $file->move('images/news',$banner);
        $news->banner = $banner;
    }
    else
    {
    $news->banner = "";
    }
    $news->save();
    return redirect('admin/new/them')->with('thongbao','Thêm thành công');
    }




    public function getSua($id){
        $loaitin = Type_news::all();
        $news = News::find($id);
        return view('admin.new.sua',['loaitin'=>$loaitin],['news'=>$news]);

    }

    public function postSua(Request $request,$id){
        $news = News::find($id);
        $this->validate($request,
        [
            'tieu_de' => 'required|min:2|max: 100|',
            'banner'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048|',
            'noi_dung'=>'required',
        ],
        [
            'tieu_de.required' => ' Bạn chưa nhập tiêu đề',
            'tieu_de.min' => ' Tiêu đề phải có từ 3 đến 100 ký tự',
            'tieu_de.max' => ' Tiêu đề phải có từ 3 đến 100 ký tự',
            'banner.required' => 'Bạn chưa add banner tin tức',
            'banner.mimes' => 'Banner phải là hình có đuôi jpeg,png,jpg,gif,svg',
            'banner.max'=>'Dung lượng hình không được quá 2Mb',
            'noi_dung.required' => 'Bạn chưa nhập nội dung tin tức',
        ]);

        $news->tieu_de = $request->tieu_de;
        $news->loai_tin = $request->loai_tin;
        $news->noi_dung = $request->noi_dung;
        $news->noi_bat= $request->noi_bat;


       if($request->hasFile('banner')){
        $file = $request->file('banner');
        $name = $file->getClientOriginalName();
        $banner = Str::random(10)."_". $name;
        $file->move('images/news',$banner);
        $news->banner = $banner;

        }
        $news->save();

        return redirect('admin/new/sua/'.$news->id)->with('thongbao','Sửa thành công');

    }



    // Xóa

public function getXoa($id){
    $news = News::find($id);
    $news->delete();
    return redirect('admin/new/danhsach')->with('thongbao','Bạn đã xóa thành công');
}



}