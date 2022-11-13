<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotions;
use App\Models\apprenants;
use App\Models\briefs;
use Illuminate\support\Facades\DB;


class ApprenantsController extends Controller
{
    public function addapp($id){
        return view('addapp',['id'=>$id]);

    }

        public function insertapp(Request $request){
            $addapprenants = new apprenants();
            $addapprenants->first_name = $request->name;
            $addapprenants->last_name = $request->last;
            $addapprenants->email = $request->email;
            $addapprenants->promotionID = $request->idapp;
            $addapprenants->save();
            return redirect('index');
        }

            public function editapp($id){
            $edit = new apprenants();
            $apprenant = $edit::where('id', $id )->get();
            return view('edit-app', compact('apprenant'));
        }


            public function deleteapprenants(Request $request){
            $query = apprenants::find($request->id)->first();
            apprenants::where('id',$request->id)->delete();
            return redirect(('update' .$query->id));

        }

}
