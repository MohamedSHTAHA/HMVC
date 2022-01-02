<?php

namespace Customers\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\CustomerRequest;

class CustomerController extends Controller{
    public function index(CustomerRequest $requst )
    {
       return view('customers::backend.index');
    }
}
