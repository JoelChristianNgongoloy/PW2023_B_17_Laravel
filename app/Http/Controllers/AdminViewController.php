<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminViewController extends Controller
{
    public function index()
    {
        return view('viewAdmin.admin');
    }

    public function tampilUser(Request $request)
    {
        if ($request->has('search')) {
            $user = User::where('type', 'regular')
                ->where('name', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $user = User::where('type', 'regular')->paginate(5);
        }
        return view('viewAdmin.viewUser', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('viewAdmin.viewUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
}
