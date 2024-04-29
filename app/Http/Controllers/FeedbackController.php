<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

// class FeedbackController extends Controller
// {
//     public function store() {
//         // dump(request());
//         // dump(request()->get('feed'));

//         //insert data
//         // $feed = new Feed([
//         // 'content'=> (request()->get('feed')),
//         // ]);
//         // $feed->save();

//         //validate data
//         request()->validate([
//             'feed'=> 'required|min:5|max:255'
//         ]);

//         //other way to insert data
//         $feed = Feed::create([
//            'content'=> (request()->get('feed')),
//         ]);
//         $feed->save();

//         //redirect the user to dashboard
//         return redirect()->route('dashboard')->with('success','Feedback created Successfully!');
//     }
//         public function destroy(Feed $feed) {
//             // dump("$id");

//             //route model binding
//             $feed->delete();

//             // Feed::where('id', $id)->first()->delete();
//             return redirect()->route('dashboard')->with('success','Feedback delted Successfully!');
//     }

//         public function edit(Feed $feed) {
//             $editing = true;
//             return view('feeds.show', [
//                 'feed'=>$feed,
//                 'editing'=> $editing
//             ]);
//     }


// }
