<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Frontend extends Controller
{

     public function index()
    {
        $projects =  Project::with('media')->latest()->take(2)->get();
        return  view ('front-end.index' ,compact('projects'));
    }
    public function about()
    {
        return  view ('front-end.about');
    }

    public function contact()
    {
        return view('front-end.contact');
    }

    public function projects(){
        $projects =  Project::with('media')->paginate(20);
        return  view ('front-end.projects' ,compact('projects'));
    }

    public function services(){
        $services = Service::with('media')->get();
        return  view ('front-end.services.index', compact('services'));
    }

    public function gallery(){
        return  view ('front-end.gallery',);
    }

    public function serviceShow($slug){
        $service = Service::where('slug', $slug)->firstOrFail();
        return  view ('front-end.services._slug' ,compact('service'));
   }

   public function blogs(){
    $blogs = Post::with('media')->paginate(10);
    return  view ('front-end.blogs.index', compact('blogs'));
}

public function blogShow($slug){
    $blog = Post::where('slug', $slug)->firstOrFail();
    return  view ('front-end.blogs._slug' ,compact('blog'));
}

}
