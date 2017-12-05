<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\NoteBook;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {              
         $user= Auth::user();
         $user_notes= $user->NoteBook;
       return view('home')->with('user_notes',$user_notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= Auth::user();
        $user_notes = new NoteBook;        
        $user_notes->name= $request->name;
        $user_notes->number= $request->number;   
        $user_notes->Note= $request->Note;
        $user_notes->user_id=$user->id;
        $user_notes->save();
        return redirect('home'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_notes = NoteBook::find($id);
        return view('home')->with('user_notes',$user_notes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_notes = NoteBook::find($id);
        return view('edit')->with('user_notes',$user_notes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $content = Auth::User()->NoteBook->find($id);
        $content->name= $request->name;
        $content->number= $request->number;   
        $content->Note= $request->Note;
        $content->update();
        return redirect('home'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $user_notes = NoteBook::find($id);
        $user_notes->delete();
        return redirect('home');
    }

}
