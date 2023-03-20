<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function viewTours(){
        return view('client.tours');
    }
    public function viewThanhToan(){
        return view('client.thanh_toan');
    }
    public function viewDatVe(){
        return view('client.dat_ve');
    }
}
