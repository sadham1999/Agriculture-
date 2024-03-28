<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('customers')->join('upload','customers.auth_id', '=', 'upload.auth_id')->select('customers.id AS cid','customers.image AS cImage','customers.*','customers.comments as caption','upload.*')->get();
        // $upload = DB::select('SELECT * FROM upload WHERE auth_id = ?',[Auth::user()->id]);
        $upload = DB::table('upload')
    ->join('users', 'upload.auth_id', '=', 'users.id')
    ->select('upload.*', 'users.*') // Add columns from the users table that you want to select
    ->where('upload.auth_id', '=', Auth::user()->id)
    ->get();
    $userId = Auth::user()->id; // Get the authenticated user's ID

    $wishlist = DB::table('wishlist')
        ->where('user_id', $userId)
        ->select('customer_id')
        ->get();
      
        $countwish = DB::table('customers')
        ->join('wishlist','customers.id','=','wishlist.customer_id')
        ->join('users','wishlist.user_id','=','users.id')
        ->where('customers.auth_id', $userId)
        ->select("users.name")
        ->get();
        $comments = DB::table('comments')
        ->join('users','comments.user_id','=','users.id')
        ->select('comments.*', 'users.name as user_name')
        ->get();
// dd($upload);
        // dd($comments);
        return view('home', compact('data', 'upload', 'wishlist','countwish','comments'));

    }

    public function upload(Request $request)
{
    
    $file = $request->file('image');

        $destinationPath = 'asset/uploads/category';

        $name = $file->move($destinationPath, $file->getClientOriginalName());

 
// dd($request->caption);
        DB::table('customers')->insert([

            'customer_name'  => Auth::user()->name,

            'auth_id'  => Auth::user()->id,

            'image'  => $destinationPath . "/" . $file->getClientOriginalName(),
            'comments' => $request->caption,

        ]);

    return back();
}

public function flag($id){
    
    $userId = Auth::user()->id;
    $customerId = $id;

    // Check if a wishlist entry already exists
    $existingWishlist = DB::table('wishlist')
        ->where('user_id', $userId)
        ->where('customer_id', $customerId)
        ->first();

    if ($existingWishlist) {
        // If the entry exists, remove it
        DB::table('wishlist')
            ->where('user_id', $userId)
            ->where('customer_id', $customerId)
            ->delete();
    } else {
        // If the entry doesn't exist, add a new row
        DB::table('wishlist')->insert([
            'user_id' => $userId,
            'customer_id' => $customerId,
        ]);
    }

    // Redirect back or to the desired page
    return back();
   
  
}

public function comment(Request $request, $id){
   // Validate the form data if necessary
   $validatedData = $request->validate([
    'comments' => 'required|string', // Add any validation rules you need
]);

// Get the authenticated user's ID
$user_id = Auth::id();

// Update the comments in the comments table
DB::table('comments')->insert([
    'user_id' => $user_id,
    'customer_id' => $id,
    'comments' => $request->input('comments'),
    'created_at' => now(),
    'updated_at' => now(),
]);

return back()->with('success', 'Comment added successfully'); // Optionally, you can provide a success message
   
 }

 public function search(Request $request)
{

    $search = $request->input('search'); // Get the search query from the request
    $upload = DB::select('SELECT * FROM upload WHERE auth_id = ?',[Auth::user()->id]);
    $data =  DB::table('customers')->where('customer_name', 'like', '%' . $search . '%')->get();

    return view('home', compact('upload','data'));
}

public function delete($id){

    DB::table('customers')->where('id',$id)->delete();
    return back();
    //dd($id);

}
}
