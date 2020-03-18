<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller {
    public function list() {
        $customers = [
            'John Doe',
            'Jane Doe',
            'Bob the Builder',
            'Another Name'
        ];

        return view('internals/customers', [
            'custumers' => $customers,
        ]);
    }
}
