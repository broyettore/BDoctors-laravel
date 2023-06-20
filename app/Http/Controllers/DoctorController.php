<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Specialisation;
use Illuminate\Support\Facades\Storage;


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
        $data = $request->validated();

        $newDoctor = new Doctor();
        $newDoctor->fill($data);

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

        return to_route('admin.user.show', $newDoctor->user->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('admin.user.show', compact("doctor"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $user = $doctor->user;

        if (auth()->user() == $user) {
            $specialisations = Specialisation::all();
            return view('admin.doctor.edit', compact("doctor", "specialisations"));
        }

        return redirect('/admin');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $data = $request->validated();

        if (isset($data['photo'])) {
            if ($doctor->photo) {
                Storage::delete($doctor->photo);
            }
            $doctor->photo = Storage::put('uploads', $data['photo']);
        }

        if (isset($data['cv'])) {
            if ($doctor->cv) {
                Storage::delete($doctor->cv);
            }
            $doctor->cv = Storage::put('uploads', $data['cv']);
        }


        $specialisations = isset($data['specialisations']) ? $data['specialisations'] : [];
        $doctor->specialisations()->sync($specialisations);

        $doctor->update($data);

        return to_route('admin.user.show', $doctor->id);
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
