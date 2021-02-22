<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_students(){
        static $students = array(0=>"Dauren", 1=>"Talgat", 2=>"Maksat");
        return $students;
    }
    
    public function showName($id)
    {
        $students = $this->get_students();
        return view("student_information", ["name"=>$students[$id]]);
    }

    public function showBirthday($date)
    {
        return view("student_date") -> with("date", $date);
    }

    public function showAge($age)
    {
        return view("student_age", compact('age'));
    }
}