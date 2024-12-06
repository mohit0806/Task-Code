<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name'          => 'required|string|max:255',
                'email'         => 'required|email|unique:users,email',
                'phone'         => 'required|regex:/^[6-9]\d{9}$/',
                'description'   => 'nullable|string|max:500',
                'role_id'       => 'required|exists:roles,id',
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            ]);

            if ($request->hasFile('profile_image')) {
                $fileName                       = time() . '_' . $request->file('profile_image')->getClientOriginalName();
                $path                           = $request->file('profile_image')->storeAs('profile_images', $fileName, 'public');
                $validatedData['profile_image'] = $path;
            }

            $user = User::create($validatedData);
            $user->load('role');

            return response()->json([
                'status'  => 'success',
                'message' => 'User created successfully!',
                'data'    => $user,
            ]);

        }
        catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Validation failed',
                'errors'  => $e->errors(),
            ], 422);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
