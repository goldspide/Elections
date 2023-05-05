<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $election = Election::all();
        return response()->json($election, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $election = Election::create([
                'label'=> $request->label,
                'description' => $request->description,
                'status'=> $request->status,
                'date'=> $request->date
            ]);
            DB::commit();
            return response()->json($election,200);
        } catch (\Throwable $th) {

        return response()->json('erreur du serveur',500);
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Election $election)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        try {
            DB::beginTransaction();
            $election = Election::find($id);
            $election->update($request->all());
            DB::commit();

        return response()->json($election,200);

        } catch (\Throwable $th) {
            return response()->json('erreur du serveur',500);
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
        $election = Election::find($id);
        $election->delete();
        DB::commit();
        return response()->json('supression reussi',200);
        } catch (\Throwable $th) {
            return response()->json('erruer de supression',500);
            //throw $th;
        }
    }
}
