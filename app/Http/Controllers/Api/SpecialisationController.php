<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Specialisation;
use Illuminate\Http\Request;

class SpecialisationController extends Controller
{
    public function index()
    {
        $specialisation = Specialisation::all();
        return response()->json([
            'success' => true,
            'results' => $specialisation
        ]);
    }

}
