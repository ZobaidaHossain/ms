<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    /**
     * Show the form for changing the password.
     *
     * @return \Illuminate\View\View
     */
    public function showChangePasswordForm()
    {
        return view('auth.passwords.change');
    }

    /**
     * Change the password.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {
        // Validate the new password fields
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',  // Add more rules as needed
        ]);

        // Check if the current password matches
        if (!Hash::check($validatedData['current_password'], Auth::user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The current password does not match our records.'],
            ]);
        }

        // Update the user's password
        Auth::user()->update([
            'password' => Hash::make($validatedData['new_password']),
        ]);

   
        Auth::logout();

        return redirect()->route('login')->with('status', 'Password changed successfully. Please log in with your new password.');
    }
}
