<?php

namespace App\Http\Controllers\Child;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterChildRequest;
use App\Http\Resources\ChildResource;
use Illuminate\Http\Request;
use App\Models\Child;
use Illuminate\Support\Facades\Auth;

class RegisterChild extends Controller
{
    public function store(RegisterChildRequest $request)
    {
        $child = Child::create([
            'user_id' => Auth::id(),
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'muac' => $request->muac,
        ]);

        return response()->json([
            'message' => 'Register success',
            'child' => new ChildResource($child),
        ], 201);
    }
}
