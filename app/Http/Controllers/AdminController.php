<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
  
    public function dashboard()
    {
        return view('admin.home');
    }

    public function product()
    {
        return view('admin.product');
    }
    // UPLOAD PRODUCT
    public function uploadproduct(Request $request)
    {
        $data = new Product;

        // IMAGE UPLOAD
        $image = $request->file('file');

        if ($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $image->move('productimage', $imagename);

            $data->image = $imagename;
        }

        // SAVE PRODUCT DATA
        $data->title = $request->title;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;

        // ⭐ IMPORTANT
        $data->type = $request->type;

        $data->save();

        return redirect()->back()->with(
            'message',
            'Product Added Successfully'
        );
    }

    // SHOW ALL PRODUCTS
    public function showproduct()
    {
        $data = Product::all();

        return view('admin.showproduct', compact('data'));
    }

    // DELETE PRODUCT
    public function deleteproduct($id)
    {
        $data = Product::find($id);

        $data->delete();

        return redirect()->back()->with(
            'message',
            'Product Deleted Successfully'
        );
    }

    // VIEW UPDATE PAGE
    public function updateview($id)
    {
        $data = Product::find($id);

        return view('admin.updateview', compact('data'));
    }

    // UPDATE PRODUCT
    public function updateproduct(Request $request, $id)
    {
        $data = Product::find($id);

        // IMAGE UPDATE
        $image = $request->file('file');

        if ($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $image->move('productimage', $imagename);

            $data->image = $imagename;
        }

        // UPDATE DATA
        $data->title = $request->title;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;

        // ⭐ IMPORTANT FIX
        $data->type = $request->type;

        $data->save();

        return redirect()->back()->with(
            'message',
            'Product Updated Successfully'
        );
    }

    // SHOW ORDERS
    public function showorder()
    {
        $order = Order::all();

        return view('admin.showorder', compact('order'));
    }

    // UPDATE ORDER STATUS
    public function updatestatus($id)
    {
        $order = Order::find($id);

        if ($order)
        {
            $order->status = 'Delivered';

            $order->save();
        }

        return redirect()->back()->with(
            'message',
            'Order Status Updated'
        );
    }
}