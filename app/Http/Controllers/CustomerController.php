<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function viewLogin(){
        return view('client.login');
    }
    public function viewRegister(){
        return view('client.register');
    }
}
