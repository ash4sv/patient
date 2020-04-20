<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Patient\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patient.index', [
            'patients' => $patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create', [
            'patient' => new Patient
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ic_num' => 'required',
            'sex' => 'required',
            'race' => 'required',
            'nationality' => 'required',
            'tel_no' => 'required',
            'address_building' => 'required',
            'address_street_1' => 'required',
            'state' => 'required',
            'address_town' => 'required',
            'postcode' => 'required'
        ]);
        $patient = new Patient;
        $patient->ref_num = request('ref_num');
        $patient->name = request('name');
        $patient->ic_num = request('ic_num');
        $patient->sex = request('sex');
        $patient->race = request('race');
        $patient->nationality = request('nationality');
        $patient->tel_no = request('tel_no');
        $patient->emerg_no = request('emerg_no');
        $patient->address_building = request('address_building');
        $patient->address_street_1 = request('address_street_1');
        $patient->address_street_2 = request('address_street_2');
        $patient->address_town = request('address_town');
        $patient->state = request('state');
        $patient->postcode = request('postcode');
        $patient->save();
        return redirect()->route('patients.show',$patient)->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patient.show', [
            'patient' => $patient
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit', [
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->ref_num = request('ref_num');
        $patient->name = request('name');
        $patient->ic_num = request('ic_num');
        $patient->sex = request('sex');
        $patient->race = request('race');
        $patient->nationality = request('nationality');
        $patient->tel_no = request('tel_no');
        $patient->emerg_no = request('emerg_no');
        $patient->address_building = request('address_building');
        $patient->address_street_1 = request('address_street_1');
        $patient->address_street_2 = request('address_street_2');
        $patient->address_town = request('address_town');
        $patient->state = request('state');
        $patient->postcode = request('postcode');
        $patient->save();
        return redirect()->route('patients.show',$patient)->with('edited', 'Data has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('delete', 'Data has been deleted');
    }
}
