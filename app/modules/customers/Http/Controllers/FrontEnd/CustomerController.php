<?php

namespace Customers\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\CustomerRequest;

class CustomerController extends Controller{
    public function index(CustomerRequest $requst )
    {
       return view('customers::frontend.index');
    }
}
