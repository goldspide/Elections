<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Bulletin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bulletin = Bulletin::all();
        return response()->json($bulletin,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $bulletin = Bulletin::create([
                'label'=> $request->label,
                'couleur'=> $request->couleur,
                'photo' => $request->photo
            ]);
            DB::commit();

            return response()->json($bulletin, 200);
        } catch (\Throwable $th) {
            return response()->json('erreur sur le serveur',500);
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bulletin $bulletin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try {
            DB::beginTransaction();
            $bulletin = Bulletin::find($id);
            $bulletin->update($request->all());
            DB::commit();
            return response()->json($bulletin,200);
        } catch (\Throwable $th) {
            return response()->json('erreur du serveur',500);
            //throw $th;
        }
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            DB::beginTransaction();
            $bulletin = Bulletin::find($id);
            $bulletin->delete();
            DB::commit();
            return response()->json('suppression effectue avec success',200);
        } catch (\Throwable $th) {
            return response()->json('erreur de suppression',500);
            //throw $th;
        }
    }
}
