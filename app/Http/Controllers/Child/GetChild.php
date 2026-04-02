<?php

namespace App\Http\Controllers\Child;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterChildRequest;
use App\Http\Resources\ChildResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GetChild extends Controller
{
    public function index()
    {
        $children = auth()->user()->children()->paginate(10);

        return response()->json([
            'message' => 'Success',
            'data' => $children
        ]);
    }
}
