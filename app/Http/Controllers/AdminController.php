<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Video;
use App\Models\Article;
use App\Models\Youtube_video;
use App\Models\Question;
use App\Models\Question_an;
use App\Models\Comment;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function logout()
    {

        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function index()
    {
        return view('index');
    }

    public function admin_dashboard()
    {
        return view('admin_dashboard');
    }

    public function show_add_user()
    {
        return view('add_user_form');
    }

    public function csv()
    {
        return view('csv',['pagename'=>'csv']);
    }

    public function org()
    {
        return view('org');
    }
    public function add_org()
    {
      
        return view('add_org');
    }
}
