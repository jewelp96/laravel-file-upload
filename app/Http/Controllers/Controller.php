<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donal Trump";
        $age = "75";

        // Prepare data as an associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set the cookie with the required parameters
        $cookie = Cookie::make(
            'access_token',      // Cookie name
            '123-XYZ',           // Cookie value
            1,                   // Minutes
            '/',                 // Path
            $_SERVER['SERVER_NAME'], // Domain
            false,               // Secure
            true                 // HttpOnly
        );

        // Return response with the data and attach the cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
