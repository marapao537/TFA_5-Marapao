<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'username' => 'aldrin',
                'full_name' => 'Aldrin Brylle Marapao',
            ],
            [
                'username' => 'hunter',
                'full_name' => 'Hunter Feuerstein',
            ],
            [
                'username' => 'kohei',
                'full_name' => 'Kohei Nishimura',
            ],
            [
                'username' => 'mir',
                'full_name' => 'Mir Kim',
            ],
            [
                'username' => 'jakub',
                'full_name' => 'Jakub Dolejs',
            ],
        ];

        return view('users', compact('users'));
    }
}