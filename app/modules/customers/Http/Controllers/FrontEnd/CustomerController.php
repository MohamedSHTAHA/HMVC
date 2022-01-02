<?php

namespace Customers\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

class CustomerController extends Controller{
    public function index( )
    {
       return view('customers::frontend.index');
    }
}
