<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\JsonResponse;

class RoleController extends Controller
{
    /**
     * Get all roles.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $roles = Role::all(); // Fetch all roles
        return response()->json($roles); // Return as JSON
    }
}
