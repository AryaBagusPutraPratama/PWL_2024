<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show() {
        // Generating URLs...
        $url = route('profile');

        // Generating Redirects...
        return redirect()->route('profile');
    }
}
