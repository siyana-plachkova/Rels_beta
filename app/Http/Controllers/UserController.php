<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($id = null)
    {
        $user = Auth::user();
        $is_user = true;
        if ($id !== null)
        {
            $user = \App\User::find(intval($id));
            if (Auth::user()->id === $user->id)
            {
                return redirect('/profile');
            }
            $is_user = false;
        }

        return view('profile', ['user' => $user, 'is_user' => $is_user]);
    }

    public function add_image(Request $request)
    {
        $user = Auth::user();
        $image_url = trim($request->input('image_url'));

        if ($image_url !== '')
        {
            \App\Image::create(['profile_id' => $user->profile->id,
                                'photo_url' => $image_url]);
        }

        return redirect('/profile');
    }

    public function search(Request $request)
    {
        $search_query = trim($request->input('search_query'));

        $queries = explode(' ', $search_query);

        if($queries[0] == "all" && $queries[1] == "users") {

        }

        $profiles = \App\Profile::where(function($query) use ($queries) {
            $query = $query->orWhere('name', $queries[0]);
            $query = $query->orWhere('surname', $queries[0]);
            if (count($queries) > 1)
            {
                $query = $query->orWhere('name', $queries[1]);
                $query = $query->orWhere('surname', $queries[1]);
            }
        })->get();

        return view('search_results', ['results' => $profiles]);
    }
}