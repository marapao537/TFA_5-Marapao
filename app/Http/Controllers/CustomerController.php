<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Dong Hun Nam',
                'email' => 'dong44@gmail.com',
                'phone' => '09xxxxxxxxx',
            ],
            [
                'full_name' => 'Garbkamol limangkul',
                'email' => 'polo@gmail.com',
                'phone' => '09xxxxxxxxx',
            ],
            [
                'full_name' => 'Pedro Flores',
                'email' => 'flores@gmail.com',
                'phone' => '09xxxxxxxxx',
            ],
            [
                'full_name' => 'Thomas Rajan',
                'email' => 'thrajan@gmail.com',
                'phone' => '09xxxxxxxxx',
            ],
            [
                'full_name' => 'Sora Uchihashi',
                'email' => 'sorajt@gmail.com',
                'phone' => '09xxxxxxxxx',
            ],
        ];

        return view('customers', compact('customers'));
    }
}