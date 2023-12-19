<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\MailSend;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function actionRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|regex:/[A-Za-z0-9!@#$%^&*()_+]/',
            'no_telp' => 'required|regex:/^08[0-8]{9,}$/',
            'alamat' => 'required|string|max:255',
        ]);

        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            Session::flash('error', 'Email sudah terdaftar, mohon memakai email yang belum terdaftar !');
            return redirect('register');
        }

        $existUsername = User::where('username', $request->username)->first();

        if ($existUsername) {
            Session::flash('error', 'Username sudah terdaftar, mohon memakai Username yang belum terdaftar !');
            return redirect('register');
        }

        $str = Str::random(100);

        User::create(
            [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'type' => 'regular',
                'verify_key' => $str,
            ]
        );

        $details = [
            'name' => $request->name,
            'website' => 'Mobil Pillihan',
            'datetime' => date('y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');
        return redirect('register');
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')->where('verify_key', $verify_key)->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'active' => 1,
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);
            return view('contentCustomer.verify');
        } else {
            return "Keys tidak valid";
        }
    }
}
