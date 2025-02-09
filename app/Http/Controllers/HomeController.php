<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'homePage',
            'projectsPage',
            'aboutPage',
            'contactPage',
            'projectPage'
        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function homePage() {
        $images = \App\project_image::inRandomOrder()->take(30)->get();
        return view('main.index', ['images' => $images]);
    }

    public function projectsPage() {

        $project_ids = [];
        $output = [];
        $images = \App\project_image::orderBy('score', 'desc')->with('project')->get();

        foreach ($images as $img) {
            if ($img->project != null && !in_array($img->project->id, $project_ids) && $img->project->live == 'on') {
                array_push($project_ids, $img->project->id);
                array_push($output, $img);
            }
        }

        return view('main.projects', ['images' => $output]);
    }

    public function contactPage() {
        return view('main.contact');
    }

    public function aboutPage() {
        return view('main.about');
    }

    public function projectPage(project $project) {
        $project->load('project_images');
        //dd($project);
        return view('main.project', ['project' => $project]);
    }
}
