<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewMessage;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Review;
use App\Models\Sponsorship;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function searchDoctorById($id)
    {
        $doctor = Doctor::where('id', $id)->with("specialisations", "user", "reviews", "votes")->get();

        try {
            if ($doctor) {

                return response()->json([
                    "success" => true,
                    "result" => $doctor
                ]);
            } else {
                return response()->json([
                    "success" => false,
                    "result" => null
                ], 404);
            }
        } catch (\Throwable $th) {

            return response()->json([
                "success" => false,
                "result" => null
            ], 500);
        }
    }

    public function searchDoctor($searchQuery)
    {

        $doctors = Doctor::whereRelation('specialisations', 'name', '=', $searchQuery)->with("specialisations", "user", "reviews", "votes", "sponsorships")->get();
        return response()->json([
            'success' => true,
            'results' => $doctors
        ]);
    }

    public function sponsoredDoctors()
    {

        $doctors = Doctor::whereRelation('sponsorships', 'end_date', '>=', Carbon::now())->with("specialisations", "user", "reviews", "votes")->get();
        return response()->json([
            'success' => true,
            'results' => $doctors
        ]);
    }

    public function newReview(Request $request)
    {
        $newReview = new Review();

        $newReview->doctor_id = $request['review']['doctor_id'];
        $newReview->first_name = $request['review']['first_name'];
        $newReview->last_name = $request['review']['last_name'];
        $newReview->email = $request['review']['email'];
        $newReview->description = $request['review']['description'];

        $newReview->save();
        $doctor = Doctor::find($request['review']['doctor_id']);
        $vote = Vote::where('id', $request['review']['vote'])->get();

        $doctor->votes()->attach($vote, ['rating' => $request['review']['vote']]);
    }

    public function contactDoctor(Request $request)
    {
        $new_message = new Message();
        $new_message->user = $request['user'];
        $new_message->email = $request['email'];
        $new_message->message = $request['message'];
        $new_message->doctor_id = $request['doctor_id'];

        $new_message->save();

         Mail::to('projects-contact@me.com')->send(new NewMessage($new_message));

        return $new_message;
    }
}
