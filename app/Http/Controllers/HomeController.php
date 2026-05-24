<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    // ---------------- HOME PAGE ----------------
    public function index()
    {
        $data = Product::paginate(6);

        $newProducts = Product::where('type', 'new')->take(3)->get();
        $saleProducts = Product::where('type', 'sale')->take(3)->get();

        $count = 0;

        if (auth()->check()) {
            $count = Cart::where('phone', auth()->user()->phone)->count();
        }

        return view('user.home', compact('data', 'newProducts', 'saleProducts', 'count'));
    }

    // ---------------- REDIRECT ----------------
    public function redirect()
    {
        $user = auth()->user();

        if ($user->usertype == '1') {
            return view('admin.home');
        }

        return redirect('/');
    }

    // ---------------- SEARCH ----------------
    public function search(Request $request)
    {
        $search = $request->search;

        if ($search == '') {
            return redirect('/');
        }

        $data = Product::where('title', 'LIKE', '%' . $search . '%')
            ->paginate(6);

        $newProducts = Product::where('type', 'new')
            ->take(3)
            ->get();

        $saleProducts = Product::where('type', 'sale')
            ->take(3)
            ->get();

        $count = 0;

        if (auth()->check()) {
            $count = Cart::where('phone', auth()->user()->phone)->count();
        }

        return view('user.home', compact(
            'data',
            'newProducts',
            'saleProducts',
            'count'
        ));
    }

    // ---------------- ADD TO CART ----------------
    public function addcart(Request $request, $id)
    {
        if (!Auth::id()) {
            return redirect('login');
        }

        $user = auth()->user();
        $product = Product::find($id);

        $cart = new Cart;

        $cart->name = $user->name;
        $cart->phone = $user->phone;
        $cart->address = $user->address;

        $cart->product_title = $product->title;
        $cart->price = $product->price;
        $cart->quantity = $request->quantity;

        $cart->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    // ---------------- SHOW CART ----------------
    public function showcart()
    {
        $user = auth()->user();

        $cart = Cart::where('phone', $user->phone)->get();
        $count = Cart::where('phone', $user->phone)->count();

        return view('user.showcart', compact('count', 'cart'));
    }

    // ---------------- REMOVE CART ----------------
    public function removecart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back()->with('message', 'Item removed from cart');
    }

    // ---------------- CHECKOUT ----------------
    public function confirmorder(Request $request)
    {
        $user = auth()->user();

        foreach ($request->product_title as $key => $value) {

            $order = new Order;

            $order->user_id = Auth::id();

            $order->product_title = $request->product_title[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];

            $order->name = $user->name;
            $order->email = $user->email;
            $order->phone = $user->phone;
            $order->address = $user->address;

            $order->status = 'Not Delivered';

            $order->save();
        }

        DB::table('carts')
            ->where('phone', $user->phone)
            ->delete();

        return redirect('/showcart')
            ->with('message', 'Order confirmed successfully');
    }

    // ---------------- PRODUCTS PAGE ----------------
    public function products()
    {
        $data = Product::paginate(6);

        $count = 0;

        if (auth()->check()) {
            $count = Cart::where('phone', auth()->user()->phone)->count();
        }

        return view('user.products', compact('data', 'count'));
    }
}
