<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Expert;
use App\Models\Bookings;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {


        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.index');
            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }
    public function home()
    {
        return view('home.index');
    }

    public function createExpert()
    {
        return view('admin.createExpert');
    }

    public function addExpert(Request $request)
    {
        $data1 = new Expert();

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('expertimage', $imagename);
        $data1->image = $imagename;

        $data1->name = $request->name;
        $data1->speciality = $request->speciality;

        $data1->save();

        return redirect()->back();
    }
    public function viewExpert()
    {
        $data1 = Expert::all();
        return view('admin.viewExpert', compact('data1'));
    }
    public function updateExpert($id)
    {
        $data1 = Expert::find($id);

        return view('admin.updateExpert', compact('data1'));
    }
    public function editExpert(Request $request, $id)
    {
        $data1 = Expert::find($id);
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('expertimage', $imagename);
            $data1->image = $imagename;
        }

        $data1->name = $request->name;
        $data1->speciality = $request->speciality;

        $data1->save();
        return redirect()->back();
    }

    public function deleteExpert($id)
    {
        $data1 = Expert::find($id);

        $data1->delete();
        return redirect()->back();
    }
    //book expert
    public function bookings()
    {
        $books = Booking::all();

        return view('admin.bookings', compact('books'));
    }
    public function deleteBookings($id)
    {
        $books = Booking::find($id);

        $books->delete();
        return redirect()->back();
    }
    public function approvedBook($id)
    {
        $books = Booking::find($id);

        $books->status = 'approved';

        $books->save();

        return redirect()->back();
    }
    public function rejectedBook($id)
    {
        $books = Booking::find($id);

        $books->status = 'rejected';

        $books->save();

        return redirect()->back();
    }

    //post for blog

    public function postPage()
    {
        return view('admin.postPage');
    }
    public function addPost(Request $request)
    {
        $user=Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post;

        $post->title = $request->title;
        $post->post_status = 'active';

        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }

        $post->save();
        return redirect()->back()->with('message','Post Added successfulle');
    }
    public function showPost()
    {
        $post = Post::all();
        return view('admin.showPost' , compact('post'));
    }
    public function deletePost($id)
    {
        $post = Post::find($id);

        $post->delete();
        return redirect()->back()->with('message','Post Delete Successfully');
    }
}
