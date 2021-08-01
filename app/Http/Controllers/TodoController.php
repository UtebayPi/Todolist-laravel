<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
class TodoController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all();
        return view('index', compact('tasks'));
    }
    public function submit()
    {
        $data = request()->validate(['task'=>'']);
        $newtask = new Tasks();
        $tasks = Tasks::all();

        if(!$data['task']=='' and (count($tasks)<10))
        {
            $newtask->create(['task'=>$data['task']]);
        }
        return redirect('/');
    }


    public function delete($id)
    {
       $deltask=Tasks::where('id',$id)->delete();
       return redirect('/');
    }
}

