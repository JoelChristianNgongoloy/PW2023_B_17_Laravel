<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            $userType = Auth::user()->type;

            if ($userType === 'admin') {
                return redirect('admin');
            } elseif ($userType ==='regular') {
                return redirect('profile');
            }
        } else {
            return view('Login');
        }
    }
    // public function login()
    // {
    //     if (Auth::check()) {
    //         $userType = Auth::user()->type;

    //         $userId = Auth::user()->id;
    //         $transaksi = Transaksi::where('id_user', $userId)->get();

    //         if ($userType === 'admin') {
    //             return redirect('admin');
    //         } elseif ($userType ==='regular') {
    //             return redirect('contentCustomer.profile', compact('transaksi'));
    //         }
    //     } else {
    //         return view('Login');
    //     }
    // }

    public function actionLogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->active) {
                $userType = Auth::user()->type;
                if ($userType === 'admin') {
                    return redirect('admin');
                } elseif ($userType === 'regular') {
                    return redirect('profile');
                }
            } else {
                Auth::logout();
                Session::flash('error', 'Akun Anda Belum diverifikasi. Silakan cek email Anda.');
                return redirect('/');
            }
        } else {
            Session::flash('error', 'Username atau password salah');
            return redirect('/');
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
