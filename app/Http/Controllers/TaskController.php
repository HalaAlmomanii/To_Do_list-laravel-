<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //

    public function update($id)
    {
    $update= Task::find($id);
    $update->title=request('title');
    $update->iscompleted=request('iscompleted');

     $update->save();
        return redirect('index');
    }


    public function index()
    {

        $task=Task::all();
          return view('Tasks.index',compact('task'));
    }
    public function edit($id)
    {
       $edit= Task::find($id);
         return view('Tasks.edit',compact('edit'));
    }

     public function destroy($id)
    {
//        dd($id);
        Task::find($id)->delete();
        return redirect('index');
//dd(
//        return view('Tasks.destroy');
    }


   public function create()
    {
        $task= new Task();
        $task->title=request('title');
          $task->iscompleted=0;
        $task->save();

        return redirect('/index');

//       return  request('title');
//       return request()->all();
    }

   public function show()
    {
       return view('Tasks.create');

    }
}
