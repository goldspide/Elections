<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Bulletin;
use App\Models\Election;
use App\Models\Participant;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vote = Vote::all();
        return response()->json($vote, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $vote = Vote::create([
                'label'=> $request->label,
                'id_participant' => $request->id_paricipant,
                'id_election' => $request->id_election,
                'id_bulletin' => $request->id_bulletin
            ]);

            DB::commit();
            return response()->json($vote,200);
        } catch (\Throwable $th) {
            return response()->json('erreur dajout',500);
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        try {
            DB::beginTransaction();
            $vote = Vote::find($id);
            $vote->update($request->all());
            DB::commit();
            return response()->json($vote,200);
        } catch (\Throwable $th) {
            return response()->json('erreur sur le serveur',500);
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            DB::beginTransaction();
        $vote = Vote::find($id);
        $vote->delete();
        DB::commit();
        return response()->json('supression reussi',200);
        } catch (\Throwable $th) {
            return response()->json('erreur sur le serveur',500);
            //throw $th;
        }
    }


    public function selectParti(){
        $participant = Participant::all();
        return response()->json($participant,200);
    }

    public function selectElect(){
        $election = Election::all();
        return response()->json($election,200);
    }
    public function selectBull(){
        $bulletin = Bulletin::all();
        return response()->json($bulletin,200);
    }
}
