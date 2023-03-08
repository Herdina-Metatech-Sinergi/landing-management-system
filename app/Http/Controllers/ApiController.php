<?php

namespace App\Http\Controllers;

use App\Models\Sim;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function sim(Request $request){
        $sim = Sim::with('feature');
        if ($request->nama) {
            # code...
            $sim = $sim->where('nama',$request->nama);
        }
        return response()->json([
            [
                'meta' => true,
                'message' => 'success'
            ],
            [
                'data' => [
                    'sim' => $sim->get()
                ]
            ]
        ]);
    }
}
