<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
class BookController extends Controller
{
    function laythongtintheloai()
    {
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }
    function laythongtinsach()
    {
        $sach = Book::where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach"));
    }
    function themtheloai()
    {
        $data = ["id"=>4,"ten_the_loai"=>"Trinh thám"];
        DB::table("the_loai")->insert($data);
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }
}