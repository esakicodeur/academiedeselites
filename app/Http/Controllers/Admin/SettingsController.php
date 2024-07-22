<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::findOrFail(Auth::id());

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'Le profile a été modifié avec succès.');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();

                flashy()->success('Le mot de passe a été modifié avec succès.');

                return redirect()->back();
            } else {
                flashy()->error('Le nouveau mot de passe ne peut pas être le même que l\'ancien mot de passe.');

                return redirect()->back();
            }
        } else {
            flashy()->error('le mot de passe actuel ne correspond pas.');

            return redirect()->back();
        }
    }
}
