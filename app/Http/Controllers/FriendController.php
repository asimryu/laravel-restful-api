<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Friend;
class FriendController extends Controller
{
    public function index()
    {
    	return Friend::all();
    }
	public function show(Friend $friend)
    {
         return $friend;
    }
    public function store(Request $request)
    {
        $friend = Friend::create($request->all());
        return response()->json($friend, 201);
    }
    public function update(Request $request, Friend $friend)
    {
        $friend->update($request->all());
        return response()->json($friend, 200);
    }
    public function delete(Friend $friend)
    {
        $friend->delete();
        return response()->json(null, 204);
    }    
}
