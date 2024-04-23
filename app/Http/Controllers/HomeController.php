<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Expert;
use App\Models\Booking;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expert = Expert::all();
        return view('home.expert', compact('expert'));
    }
    public function expertDetails($id)
    {
        $expert = Expert::find($id);
        return view('home.expertDetails', compact('expert'));
    }
    public function addBooking(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
        ]);


        $book = new Booking;
        $book->expert_id = $id;
        $book->name = $request->name;
        $book->email = $request->email;
        $book->phone = $request->phone;
        $book->date = $request->date;

        $book->save();

        return redirect()->back()->with('message', 'Expert booked successfully');
    }


    //for blog
    public function blog()
    {
        $blog = Post::where('post_status','=','active')->get();
        return view('home.blog', compact('blog'));
    }
    public function blog_details($id)
    {
        $blog = Post::find($id);
        return view('home.blog_details', compact('blog'));
    }
    public function createBlog()
    {
        return view('home.createBlog');
    }
    public function userBlog(Request $request)
    {
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $ublog = new Post;

        $ublog->title = $request->title;

        $ublog->user_id = $user_id;
        $ublog->name = $name;
        $ublog->usertype = $usertype;
        $ublog->post_status = 'pending';



        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);
            $ublog->image = $imagename;
        }
        $ublog->save();

        return redirect()->back()->with('message', 'Blog Added successfulle');
    }
    public function myBlog()
    {
        $user = Auth()->user();
        $user_id = $user->id;
        // $name = $user->name;
        // $usertype = $user->usertype;

        $mblog = Post::where('user_id', '=', $user_id)->get();
        return view('home.myBlog', compact('mblog'));
    }
    public function delete_myBlog($id)
    {
        $mblog = Post::find($id);

        $mblog->delete();
        return redirect()->back()->with('message', 'Post Delete Successfully');
    }

    public function edit_myBlog($id)
    {
        $mblog = Post::find($id);

        return view('home.edit_myBlog', compact('mblog'));
    }
    public function update_myBlog(Request $request, $id)
    {
        $mblog = Post::find($id);
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);
            $mblog->image = $imagename;
        }

        $mblog->title = $request->title;
        $mblog->save();
        return redirect()->back()->with('message', 'Post Update Successfully');
    }
}
