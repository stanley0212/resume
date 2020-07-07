<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use App\experience;
use App\blog;
use App\bloginfo;

class ResumeController extends Controller
{
    public function about(){
        $profile = About::all();
        $total = experience::orderBy('id', 'desc')->get();
        $blog = Blog::orderBy('id', 'desc')->paginate(6);
        $newpost = Blog::orderBy('id' , 'desc')->get();
        return view('index', ['profile' => $profile,'total' => $total, 'blog' => $blog, 'newpost' => $newpost]);
     }
     public function info($id){
        $info = bloginfo::findOrFail($id);
        return view('article', ['info' => $info]);
    }
}
