<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $orders = Order::where('user_id', $user->id)
                    ->latest()
                    ->get();

        return view('user.account', compact('user', 'orders'));
    }

  public function update(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'phone' => 'nullable',
        'address' => 'nullable',
        'password' => 'nullable|min:6',
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
    ]);

    if ($request->password) {
        $user->password = Hash::make($request->password);
        $user->save();
    }

    return back()->with('success', 'Profile updated successfully!');
}
}