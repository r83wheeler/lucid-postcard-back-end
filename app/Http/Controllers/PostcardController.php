<?php

namespace App\Http\Controllers;

use App\Models\Postcard;
use App\Models\Image;
use App\Models\UserPostcard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PostcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Postcard::all()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // Log::debug($request["postcardImage"]);
            //store your file into directory and db

            // create the userpostcard
            // it needs data from the $request obj
            // the request object contains, Text, Address, Image
            // 1.  Save the Image file and record in the database

            // $image = new Image();
            // $image->path = $filename;
            // $image->user_id = $request->user()->id;
            // $image->save();

            // 2.  Save the UserPostCard and reference the image id from the new image
            $postcard = new UserPostcard;
            $user = $request->user();
            //Log::debug(print_r($user, true));
            $postcard->image_id = $request["postcardImage"];
            $postcard->user_id = $user->id;
            $postcard->text = $request['message'];
            $postcard->address1 = $request['address1'];
            $postcard->address2 = "-";
            $postcard->city = $request['city'];
            $postcard->state = $request['state'];
            $postcard->zip = $request['zip'];
            $postcard->postcard_id = $request["postcardImage"];
            $postcard->save();

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "postcard" => $postcard
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function show(Postcard $postcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function edit(Postcard $postcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postcard $postcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postcard $postcard)
    {
        //
    }
}
