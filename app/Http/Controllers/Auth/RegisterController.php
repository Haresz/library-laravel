<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.auth.register'); // Return view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404); // Abort 404
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [ // Validate request
            'name' => ['required', 'string', 'min:1', 'max:255'],
            'email' => ['required', 'email', 'min:1', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:1', 'max:255', 'confirmed']
        ]);

        if ($validator->fails()) { // If validation failed
            toastr()->error('Email atau password salah', 'Gagal Login!'); // Show error message

            return back(); // Redirect back
        }

        $validated = $validator->validated(); // Get validated data
        $validated['password'] = bcrypt($validated['password']); // Hash password

        $user = User::create($validated); // Create user

        if ($user) { // If user created
            toastr()->success('Selamat datang, ' . $user->name, 'Berhasil Login!'); // Show success message

            return to_route('login.index'); // Redirect to login
        }

        toastr()->error('Email atau password salah', 'Gagal Login!'); // Show error message

        return back(); // Redirect back
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
    }
}
