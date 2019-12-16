<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Bills;
use Illuminate\Support\Facades\View;
class SeenmailController extends Controller
{
    public function __construct()
    {
        $bills = Bills::orderBy('id', 'desc')->paginate(5);
        view()->share('bills', $bills);
    }
    public function getDanhsach(){
        return view('admin.thongbao.danhsach');
    }
    public function getXoa($id){
        $bills = Bills::find($id);
        $bills->delete();
        return redirect('admin/booking/danhsach')->with('thongbao','Bạn đã xóa bills thành công !');
    }
}
