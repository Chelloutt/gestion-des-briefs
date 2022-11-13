<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\briefs;
use App\Models\promotions;
use App\Models\apprenants;
use Illuminate\support\Facades\DB;



class PromotionsController extends Controller
{
    public function select(){
        $data = promotions::all();
        return view ('index', compact("data"));
    }
    public function add(){
        return view('add');
    }

    public function insert(Request $request){
        $addmodal = new promotions();
        $addmodal->name = $request->name;
        $addmodal->save();
        return redirect('index');
    }
    public function update($id){
        $apprenants = DB::table('apprenants')->join('promotions', 'promotions.id', '=', 'apprenants.promotionID')->select('apprenants.*')->where('promotionID', $id)->get();
        $edit = new promotions();
        $promotion = $edit::where('id', $id )->get();
        return view('update', compact('promotion', 'apprenants'));
    }

    public function edit($id,Request $request){
        $editpromo = promotions::where('id',$id)->first();
        $editpromo->name = $request->name;
        $editpromo->save();
        return redirect('index');
    }


    public function search($name=null){
        if($name == null){
            $data =promotions::all();
            return view('search',compact('data'));}
        else {
            $data =promotions::where('name', 'like','%'.$name.'%')->get();
            return view('search',compact('data'));
        }
    }
    public function delete(Request $request){
        promotions::where('id',$request->id)->delete();
        return redirect('index');
    }

}
