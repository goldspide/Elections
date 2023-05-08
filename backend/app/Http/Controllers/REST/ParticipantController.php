<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

use function GuzzleHttp\Promise\all;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $participant = Participant::all();
        return response()->json($participant, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $this->validate($request,[
        //     'nom' => 'required|max:100',
        //     'num_cni' => 'required|unique:participant',
        //     'age' => 'required|max:100',
        //     'sexe' => 'required',
        //     'status' => 'required',
        //     'id_region' => 'required',
        //     'login' => 'required|min:5',
        //     'password' => 'required|min:8',
        //     'email' => 'required|email|unique:participant',
        // ]);

        try {
            DB::beginTransaction();
            $participant = Participant::create([
                'nom' => $request->nom,
                'num_cni' => $request->num_cni,
                'age' => $request->age,
                'sexe' => $request->sexe,
                'status' => $request->status,
                'id_region' => $request->id_region,
                'login' => $request->login,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'etat' => $request->etat,
                'telephone' => $request->telephone,
            ]);
            DB::commit();


            return response()->json($participant, 200);
        } catch (Throwable $th) {
            return response()->json('{"erreur": "impossible de sauvegarde"}', 405);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
        $region = Region::all();
        return response()->json($region, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            // $participant = Participant:: create([
            //     'nom' => $request->nom,
            //     'num_cni' => $request->num_cni,
            //     'age' => $request->age,
            //     'sexe' => $request->sexe,
            //     'status' => $request->status,
            //     'id_region' => $request->id_region,
            //     'login' => $request->login,
            //     'password' =>Hash::make($request->password),
            //     'email' => $request->email,
            //     'etat' => $request->etat,
            //     'telephone' => $request->telephone,
            // ]);
            $participant = Participant::find($id);

            $participant->update($request->all());
            DB::commit();
            return response()->json($participant, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur de mise a jour', 500);
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
            $participant = Participant::find($id);
            $participant->delete();
            DB::commit();
            return response()->json('participant suprimer avec succes', 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression', 500);
        }
    }

    public function Status($id)
    {
        try {
            //code...
            DB::beginTransaction();
            $part = Participant::find($id);
            $part->etat = !($part->etat);
            $part->update();
            DB::commit();
            return response()->json("status mise ajour avec succes", 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur participant inactif', 500);
        }
    }
}
