<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product; 
use App\Models\Bookmark; 
use App\Models\Order; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            $data=product::paginate(3);
            $user=auth()->user();
            $count=bookmark::where('phone', $user->phone)->count();

            return view ('user.home', compact('data','count'));
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }

        else
        {

            $data=product::paginate(3);

            return view ('user.home', compact('data'));
        }
    }

    public function search(Request $request)
    {
        $search=$request->search;
        if($search=='')
        {
            $data=product::paginate(3);

            return view ('user.home', compact('data'));
        }
        $data=product::where('location','Like','%'.$search.'%')->get();
        return view('user.home',compact('data'));
    }

    public function addbookmark(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $product=product::find($id);
            $bookmark=new bookmark;
            $bookmark->name=$user->name;
            $bookmark->phone=$user->phone;
            $bookmark->address=$user->address;
            $bookmark->title=$product->title;
            $bookmark->location=$product->location;
            $bookmark->price=$product->price;
            $bookmark->save();
            return redirect()->back()->with('message',
            'Bookmarked Successfully');
        }
        else
        {
            return redirect('login');
        }
    }

    public function showbookmark()
    {
        $user=auth()->user();
        $bookmark=bookmark::where('phone',$user->phone)->get();
        $count=bookmark::where('phone', $user->phone)->count();
        return view('user.showbookmark', compact('count','bookmark'));
    }

    public function deletebookmark($id)
    {
        $data=bookmark::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function confirmorder(Request $request)
    {
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;

        foreach($request->title as $key=>$title)
        {
            $order=new order;

            $order->title=$request->title[$key];
            $order->location=$request->location[$key];
            $order->price=$request->price[$key];

            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;

            $order->status='Not Confirmed';

            $order->save();
        }
        DB::table('bookmarks')->where('phone', $phone)->delete();
        return redirect()->back()->with('message',
        'Rental Confirmed!');
    }
    public function about()
    {
        return view('user.about');
    }

    public function product_details($id)
    {
        $product=product::find($id);
        return view('user.product_details',compact('product'));
    }
}
