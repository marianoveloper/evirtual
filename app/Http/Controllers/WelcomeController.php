<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use DB;
use Mail;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	

        $courses=DB::table('courses')
        ->where('status', Course::PUBLISHED)
        ->get();
      //dd($courses);
        return view('welcome')->with('courses',$courses);
    }
    public function contact(Request $request){
        $subject = "Asunto del correo";
        $for = "b.mariano05@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("benitezmariano5@gmail.com","Alma");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }


}
