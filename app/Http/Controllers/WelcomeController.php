<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function form()
    {
        return view('form');
        // return view('form',compact('a'));
        //compact('a') sẽ hiểu là truyền cái biến a vào mảng nó giống hệt ['a'=>$a] thường thì ngta sẽ làm theo []
        // thay vì dùng compact
    }
    public function post(Request $rq)
    {
        //Hồi ở cơ bản là muốn lấy thông tin xuống từ thanh địa chỉ là 
        //$a = $_GET['a'] nhưng sang laravel thì chuyên nghiệp hơn tứ là
        //truyền Request cùng với tên biến là $rq vào
        //sau đó $a = $rq->get('a') để lấy giá trị của a từ biến $rq 
        
        $a = $rq->get('a');
        //tại sao lại dùng get mà k phải  post vì nó k phải là method get 
        //mà nó chỉ là lâý dữ liệu ra thôi nên nó cũng như post
        
        return view('show',[
            'a'=>$a
        ]);
    }
}
