<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\briefs;
use App\Models\task;

class BriefsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = briefs::all();
        return view('briefs' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('addbrief');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
            $newpromotion = new briefs;
            $newpromotion->name = $request->name;
            $newpromotion->date_de_livraison = $request->date_de_livraison;
            $newpromotion->date_de_récupération = $request->date_de_récupération;
            $newpromotion->save();
           return redirect('briefs');

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function updatebrief($id){
        $briefs = briefs::where('id',$id)->get();
        $brief1 = briefs::where('id',$id)->first();
        $alltasks = $brief1->task;
        return view('updatebrief', compact('briefs','alltasks'));

    }
        public function editbrief($id ,Request $request)
    {
        $editbrief = briefs::where('id',$id)->first();
        $editbrief->name = $request->name;
        $editbrief->date_de_livraison = $request->date_de_livraison;
        $editbrief->date_de_récupération = $request->date_de_récupération;
        $editbrief->save();
        return redirect('briefs');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function deletebrief(Request $request){
         briefs::where('id',$request->id)->delete();
         return  redirect('briefs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
