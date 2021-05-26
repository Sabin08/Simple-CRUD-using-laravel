<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('todo_create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, $this->rules());
        $res= new Todo;
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data inserted successfully');
        return redirect('todo_show');
    }

    public function rules(){
        return [
            'name' => 'required|unique:todos'
        ];
    }

    
    public function show(Todo $todo)
    {
        return view('todo_show')->with('todoArr', Todo::all());
    }

    
    public function edit(Todo $todo, $id)
    {
        return view('todo_edit')->with('todoArr', Todo::find($id));
    }

    
    public function update(Request $request, Todo $todo)
    {
        $res=Todo::find($request->id);
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data updated successfully');
        return redirect('todo_show');
    }

    public function destroy(Todo $todo, $id)
    {
        Todo::destroy(array('id',$id));
        return Redirect('todo_show');
    }
}
