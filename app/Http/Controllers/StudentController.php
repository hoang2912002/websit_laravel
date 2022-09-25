<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();
        //mình sẽ tạo 1 biến tên student sau đó sẽ lấy hết dữ liệu từ model Student bằng hàm ::all()
        //query() nó có tác dụng là câu truy vấn từ đó sẽ nhảy đến được hàm khác như get()
        // bản chất get() == all()
        return view('students.index',[
            'students'=>$students,
        ]);
        //student.index nghĩa là mình sẽ gọi đến thư mục student trong đó có file index
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $rq)
    {
        //dd($rq->first_name);
        //dd() là để debug kết hợp giữa die câu lệnh và in nó ra 
        $student = new Student();
        $student->first_name = $rq->get('first_name');
        $student->last_name = $rq->get('last_name');
        $student->gender = $rq->get('gender');
        $student->birthdate = $rq->get('birthdate');
        $student->save();
    }
}
