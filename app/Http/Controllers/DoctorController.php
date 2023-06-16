<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Specialisation;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.doctor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Doctor $doctor)
    {
        $specialisations = Specialisation::all();
        return view('admin.doctor.create', compact("doctor", "specialisations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        $user = User::all();
        $data = $request->validated();

        $newDoctor = new Doctor();
        $newDoctor->fill($data);

        foreach ($user as $key) {
            $newDoctor->user_id =  $key->id;
            $newDoctor->update();
        }

        // check if photo exists and puts it in storage
        if (isset($data["photo"])) {
            $newDoctor->photo = Storage::put("uploads", $data["photo"]);
        }

        // check if cv exists and puts it in storage
        if (isset($data["cv"])) {
            $newDoctor->cv = Storage::put("uploads", $data["cv"]);
        }

        $newDoctor->save();

        if (isset($data['specialisations'])) {
            $newDoctor->specialisations()->sync($data['specialisations']);
        }

        dd($data);

        return to_route('admin.doctor.show', $newDoctor->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        $user = User::all();
        $specialisations = Specialisation::all();
        return view('admin.doctor.show', compact("doctor", "user", "specialisations"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
    $specialisations = Specialisation::all();
    return view('admin.doctor.edit', compact("doctor", "specialisations"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $data = $request->validated();

        dd($data);

                if ($doctor->photo) {
                    Storage::delete($doctor->photo);
                    $doctor->photo = Storage::put('uploads', $data['photo']);
                }

                if ($doctor->cv) {
                    Storage::delete($doctor->cv);
                    $doctor->photo = Storage::put('uploads', $data['photo']);
                }


                $specialisations = isset($data['specialisations']) ? $data['specialisations'] : [];
                $doctor->specialisations()->sync($specialisations);
                
                $doctor->update($data);
                


        return to_route('admin.doctor.show', $doctor->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        // if photo exists,deletes it from storage
        if ($doctor->photo) {
            Storage::delete($doctor->photo);
        }

         // if photo exists, deletes it from storage
        if ($doctor->cv) {
            Storage::delete($doctor->cv);
        }

        $doctor->delete();

        return to_route('admin.dashboard');
    }
}
