<?php

use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docs', fn() => response()->json(
    [
        "status" => "200",
        "active_endpoints" => [
            "Documentation" => [
                "GET" => "/docs"
            ],
            "Authentication" => [
                "POST" => [
                    "/signup" => [
                        "name" => "Nama",
                        "email" => "user@mail.com",
                        "phone" => "08xxxxx",
                        "password" => "password123"
                    ],
                    "/signin" => [
                        "email" => "user@mail.com",
                        "password" => "password123"
                    ],
                ],
                "GET" => "/profile",
                "PUT" => [
                    "/editme",
                    "/changepassword"
                ]
            ],
            "History" => [
                "POST" => "/savehistory",
                "GET" => "/history"
            ]
        ]
    ]
));
