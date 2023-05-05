<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class regionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $region = Region::all();
        return response()->json($region, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            $region = Region::create(['label' => $request->label]);
            DB::commit();
            return response()->json($region,201);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json("erreur d'insertion",500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
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
        $region = Region::find($id);
        $region->update($request->all());
        DB::commit();
        return response()->json($region,200);
      } catch (\Throwable $th) {
        //throw $th;
        return response()->json('erreur au niveau de la modification',500);
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            $region=Region::find($id);
            $region->delete();
            DB::commit();
          return response()->json('pla region a etait suprimer avec succes',200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression',500);
        }
    }
}
