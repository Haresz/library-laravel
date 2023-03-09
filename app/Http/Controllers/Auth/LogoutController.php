<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Auth::logout(); // Logout user

        $session = $request->session(); // Get session
        $session->invalidate(); // Invalidate session
        $session->regenerateToken(); // Regenerate token

        toastr()->success('Berhasil logout', 'Berhasil Logout!'); // Show success message

        return to_route('home.index'); // Redirect to home
    }
}
