<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Expert;
use App\Models\Bookings;
use App\Models\Post;
use App\Models\blogDetails;
use App\Models\Contact;
use App\Notifications\SendEmailNotification;
use Notification;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {


        if (Auth::id()) {
            $post = Post::where('post_status', '=', 'active')->get();

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
        $user = Auth()->user();
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
        return redirect()->back()->with('message', 'Post Added successfulle');
    }
    public function showPost()
    {
        $post = Post::all();
        return view('admin.showPost', compact('post'));
    }
    public function deletePost($id)
    {
        $post = Post::find($id);

        $post->delete();
        return redirect()->back()->with('message', 'Post Delete Successfully');
    }
    public function editPost($id)
    {
        $post = Post::find($id);

        return view('admin.editPost', compact('post'));
    }
    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }

        $post->title = $request->title;
        $post->save();
        return redirect()->back()->with('message', 'Post Update Successfully');
    }
    public function acceptPost($id)
    {
        $data = Post::find($id);

        $data->post_status='active';
        $data->save();
        return redirect()->back()->with('message', 'Post Status Changed to Active');
    }
    public function rejectPost($id)
    {
        $data = Post::find($id);

        $data->post_status='rejected';
        $data->save();
        return redirect()->back()->with('message', 'Post Status Changed to Rejected');
    }

    //blog
    public function blogDetails()
    {
        $dblog = blogDetails::all();
        return view('admin.blogDetails', compact('dblog'));
    }
    public function postBlog()
    {
        return view('admin.postBlog');
    }
    public function addBlog(Request $request)
    {
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $dblog = new blogDetails;

        $dblog->title = $request->title;
        $dblog->description = $request->description;

        $dblog->user_id = $user_id;
        $dblog->name = $name;
        $dblog->usertype = $usertype;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);
            $dblog->image = $imagename;
        }

        $dblog->save();
        return redirect()->back()->with('message', 'Blog Details Added successfulle');
    }
    public function deleteBlog($id)
    {
        $dblog = blogDetails::find($id);

        $dblog->delete();
        return redirect()->back()->with('message', 'Post Delete Successfully');
    }
    public function editBlog($id)
    {
        $dblog = blogDetails::find($id);

        return view('admin.editBlog', compact('dblog'));
    }
    public function updateBlog(Request $request, $id)
    {
        $dblog = blogDetails::find($id);
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);
            $dblog->image = $imagename;
        }

        $dblog->title = $request->title;
        $dblog->description = $request->description;
        $dblog->save();
        return redirect()->back()->with('message', 'Post Update Successfully');
    }

    //messages
    public function all_messages()
    {
        $data1 = Contact::all();
        return view('admin.all_messages',compact('data1'));
    }
    public function sendMail($id)
    {
        $data1 = Contact::find($id);
        return view('admin.sendMail',compact('data1'));
    }
    public function mail(Request $request, $id)
{
    $data1 = Contact::find($id);
    $details = [
        'greeting' => $request->greeting,
        'body' => $request->body,
        'action_text' => $request->action_text,
        'action_url' => $request->action_url,
        'endline' => $request->endline,
    ];
    Notification::send($data1, new SendEmailNotification($details));

    return redirect()->back();
}

}
