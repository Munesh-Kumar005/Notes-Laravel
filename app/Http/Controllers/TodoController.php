<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'surname' => 'required|min:5',

        ]);
        $name = $request->input('name');
        $surname = $request->input('surname');

        $res = new Todo;
        $res->name = $name;
        $res->surname = $surname;
        $res->save();
        $request->session()->flash('msg',"Your record is submitted is successfully...");
        return redirect('todo_show');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
       return view('todoshow')->with('todoarr',Todo::all());


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo,$id)
    {
        return view('todoedit')->with('todoarr', Todo::find($id));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $res =  Todo::find($request->id);
        $res->name = $name;
        $res->surname = $surname;
        $res->save();
        $request->session()->flash('msg', "Your data is updated is successfully...");
        return redirect('todo_show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo , $id)
    {
        Todo::destroy(array('id',$id));

        return redirect('todo_show');
    }





}
