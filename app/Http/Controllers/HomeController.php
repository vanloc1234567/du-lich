<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('client.trang_chu');
    }
    public function veThamQuan(){
        return view('client.ve_tham_quan');
    }
    public function baiViet(){
        return view('client.bai_viet');
    }
    public function lienHe(){
        return view('client.lien_he');
    }

}
