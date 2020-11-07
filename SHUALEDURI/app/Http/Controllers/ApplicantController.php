<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicantRequest;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();
        return view('applicant_list', compact('applicants'));
    }

    public function hire(Applicant $applicant)
    {
        $applicant->is_hired = 1;
        $applicant->save();
        return back();
    }

    public function edit(Applicant $applicant)
    {
        return view('edit', compact('applicant'));
    }

    public function update($id, ApplicantRequest $request)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->update($request->toArray());
        return back();

    }
}

