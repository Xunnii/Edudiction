<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{

    public function loginform()
    {
        return view('login-form');
    }
    public function login(Request $request)
    {
        // Validate the input
        $request->validate(
            [
                'username' => 'required',
                'password' => ['required', 'min:3', 'regex:/[A-Z]/'],
            ]
        );

        // Store the request data
        $pagedata['username'] = $request->username; // Changed 'username' to 'name'
        $pagedata['password'] = $request->password;

        // Check if the credentials match
        if (
            $request->username == 'A2357301085' &&
            $request->password == 'A2357301085'
        ) {
            return redirect()->route('home')->with('success', 'Login berhasil');
        } else {
            // Clear session data
            Session::flush();
            return redirect()->route('formlogin')->with('error', 'Login gagal coba kembali');
        }
    }


    public function registrasiform()
    {
        return view('registrasi-form');
    }
    public function registrasi(Request $request)
    {
        $request->validate(

            [
                'nama' => ['required', 'regex:/^[A-Za-z\s]+$/',],
                'alamat' => 'required|max:300', // Address is required and max length is 300 characters
                'tanggalLahir' => ['required', 'date'], // Date of birth is required and must be a valid date
                'username' => 'required',
                'password' => [
                    'required',
                    'regex:/[A-Z]/', // Must contain at least one uppercase letter
                    'regex:/[0-9]/', // Must contain at least one number
                ],
                'konfir' => 'required|same:password', // Confirm password must match the password
            ],
            [
                'nama.regex' => 'Nama hanya boleh berisi huruf dan spasi.', // Custom error message for nama validation
                'password.regex' => 'Password harus mengandung minimal satu huruf kapital dan satu angka.', // Custom error message for password validation
            ]

        );
        return redirect()->route('login')->with('success', 'Registrasi berhasil! silahkan login');
    }
}
