<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function product()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.product');
            }
        }
        else
        {
            return rdirect('login');
        }
    }

    public function uploadlisting(Request $request)
    {
        $data=new product;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);

        $data->image=$imagename;
        
        $data->title=$request->title;
        $data->price=$request->price;
        $data->location=$request->location;
        $data->information=$request->information;
        $data->save();

        return redirect()->back()->with('message',
        'Listing Added Successfully');
        
    }

    public function showproduct()
    {
        $data=product::all();
        return view('admin.showproduct',compact('data'));
    }

    public function deleteproduct($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message',
        'Listing Deleted Successfully');
    }

    public function updateview($id)
    {
        $data=product::find($id);
        return view('admin.updateview', compact('data'));
    }

    public function updatelisting(Request $request, $id)
    {
        $data=product::find($id);
        $image=$request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage',$imagename);

            $data->image=$imagename;
        }
        
        $data->title=$request->title;
        $data->price=$request->price;
        $data->location=$request->location;
        $data->information=$request->information;
        $data->save();

        return redirect()->back()->with('message',
        'Listing Updated Successfully');
    }
    
    public function showrental()
    {
        $order=order::all();
        return view('admin.showrental',compact('order'));
    }

    public function updatestatus($id)
    {
        $order=order::find($id);
        $order->status='Confirmed';
        $order->save();

        return redirect()->back();
    }
}
