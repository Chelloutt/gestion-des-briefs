<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\briefs;
use App\Models\task;
class TasksController extends Controller
{
    public function add($id){
        return view('addtask', compact("id"));
    }

    public function store(Request $request){
        $newtask = new task();
        $newtask->name = $request->name;
        $newtask->brief()->associate($request->briefs_id);
        $newtask->description = $request->description;
        $newtask->start_date = $request->start_date;
        $newtask->end_date = $request->end_date;
        $newtask->save();
        return redirect('briefs');
    }

    public function update($id){
        $data = task::where('id', $id)->get();
        return view("updatetask", compact('data'));
    }

    public function edittask($id , Request $req){
        $query = task::where('id', $id)->first();
        task::where('id', $id)->update([
        "name" => $req->name,
        "start_date" => $req->start_date,
        "end_date" => $req->end_date,
        "description" => $req->description]);
        return redirect('briefs');
    }
    public function delete($id){

        task::where('id', $id)->delete();
        return redirect('briefs');
    }
}
