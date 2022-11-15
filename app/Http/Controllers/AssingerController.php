<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotions;
use App\Models\apprenants;
use App\Models\briefs;

class AssingerController extends Controller
{
    public  function select($id){
        $apprenants = Apprenants::all();
        return view('assinger', compact('apprenants','id'));
    }

    public function AssignBrief($id,$id_apprenant){
        $apprennants = Apprenants::where('id',$id_apprenant)->first();
        $apprennants->brief()->attach($id);
        return redirect('briefs');
    }

    public function DesAssignBrief($id,$id_apprenant){
        $desassigner = Apprenants::where('id',$id_apprenant)->first();
        $desassigner->brief()->detach($id);
        return redirect('briefs');
    }
}
