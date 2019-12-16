<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Bills;
use Illuminate\Support\Facades\View;
class DuyetSKController extends Controller
{
    public function __construct()
    {
        $bills = Bills::orderBy('id', 'desc')->paginate(5);
        view()->share('bills', $bills);
    }
    public function getDanhsach(){
        return view('admin.thongbao.danhsach');
    }
    public function postThongbao(Request $request){
        $this->validate($request, [
            'ten_su_kien'=>'required',

        ],[
            'ten_su_kien.required'=>'bạn chưa nhập tên sự kiện',

        ]);

        $data = [
            'ten_su_kien' => $request->ten_su_kien,
            'banner' => 'images/email/banner.jpg',
            'logo'=>'images/email/logo.png',
            'email'=> $request->sadsad

        ];

        Mail::send('admin.thongbao.duyetsk', $data, function ($message) use ($data) {
            $message->from('hotroaevent@gmail.com', 'Hỗ trợ Aevent');
            $message->to($data['email'], 'Khách hàng');
            $message->subject($data['banner']);
            $message->subject($data['logo']);
            $message->subject($data['ten_su_kien']);
        });


        // echo "
        //    <script>
        //         alert('Gửi mail thành công !');
        //         window.location = '".url('admin/seenmail/getmail')."'
        //    </script>
        // ";

        return redirect('admin/thongbao/danhsach');
    }
}
