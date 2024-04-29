<?php

namespace App\Http\Controllers;

use App\Models\Feed;
// use App\Models\Contact;
use Illuminate\Http\Request;

class DashboarController extends Controller
{

public function dashboard() {

    // contact form trial to insert data
    // $contact = new Contact();
    // $contact->name ="user1";
    // $contact->email ="user1@gmail.com";
    // $contact->phone ="123456";
    // $contact->query ="Hello there";
    // $contact->save();

    // 1st way to insert data to the database | created instance then line by line
        // $feed = new Feed();
        // $feed->content ="Testing";
        // $feed->likes = 5;
        // $feed->save();

       // 2nd way to insert data to the database via mass assignment
    //    $feed = new Feed([
    //     'content'=> "Testing 1",
    //     'Likes'=> 10,
    //    ]);

    //    $feed->save();

    // dump(Feed::all());
    return view('dashboard', [
        // "feeds"=>Feed::orderBy("created_at","desc")->paginate(1),
    ]);
}
}

