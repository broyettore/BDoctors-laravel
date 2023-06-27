<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with("specialisations", "user")->get();
        return response()->json([
            'success' => true,
            'results' => $doctors
        ]);
    }

    public function searchDoctor($searchQuery) {

        $doctors = Doctor::whereRelation('specialisations', 'name', '=', $searchQuery)->with("specialisations", "user", "reviews", "votes")->get();
        return response()->json([
            'success' => true,
            'results' => $doctors
        ]);
    }

    public function sponsoredDoctors() {

        $doctors = Doctor::whereRelation('sponsorships', 'end_date', '>=', Carbon::now())->with("specialisations", "user", "reviews", "votes")->get();
        return response()->json([
            'success' => true,
            'results' => $doctors
        ]);
    }
}
