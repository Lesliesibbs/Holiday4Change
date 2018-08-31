<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;
use Auth;
use Session;


class CompetitionController extends Controller
{
  public function __construct() {
        $this->middleware(['auth', 'clearance'])->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Competition::orderby('id', 'desc')->paginate(10); //show only 5 items at a time in descending order

      return view('admin.competition.index', compact('competition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'question'=>'required|max:100',
          'answer' =>'required|max:100',
          ]);

          $question = $request['question'];
          $answer = $request['answer'];

          $competition = Competition::create($request->only('title', 'body'));

    //Display a successful message upon save
        return redirect()->route('admin.competition.index')
            ->with('flash_message', 'Question,
             '. $competition->question.' created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

      $competition = Competition::findOrFail($id); //Find post of id = $id

      return view ('admin.competition.show', compact('competition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $competition = Competition::findOrFail($id);

    return view('admin.competition.edit', compact('competition'));
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
      $this->validate($request, [
          'title'=>'required|max:100',
          'body'=>'required',
      ]);

      $competition = Competition::findOrFail($id);
      $competition->title = $request->input('title');
      $competition->body = $request->input('body');
      $competition->save();

      return redirect()->route('admin.competition.show',
          $post->id)->with('flash_message',
          'Question, '. $competition->question.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $competition = Competition::findOrFail($id);
      $competition->delete();

     return redirect()->route('admin.competition.index')
         ->with('flash_message',
          'Question successfully deleted');

    }
}
