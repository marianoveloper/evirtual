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
        //$this->middleware('auth')->except(['index']);
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
        
        //dd($request);
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'msg' =>  'required',
            'curso' => 'required|not_in:0'

           ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->msg,
            'email' => $request->email,
            'curso' => $request->curso
        );

       // dd($data);
        $curso=$data['curso'];
        $mail=$data['email'];
        $nombre=$data['name'];
        $subject = "Informacion del curso " + $nombre;
        $for = "b.mariano05@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for,$mail,$nombre){
            $msj->from($mail,$nombre);
            $msj->subject($subject);
            $msj->to($for);
        });
        return back()->with('success', 'Gracias por contactarse con nosotros!');
    }


}
