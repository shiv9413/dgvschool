<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\AdmissionForm;
use App\Models\GrandParent;
use App\Models\Transport;
use App\Models\Attraction;
use App\Models\UserQuestion;
use DB;
use DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AdmissionExport;

class AdmissionController extends Controller
{

    public function list(Request $request){
    	if ($request->ajax()) {
            $data = AdmissionForm::select([
                'id',
                'child_name',
                'date_of_birth',
                'admission_seeking_class',
                'gender',
                'previous_school',
                'father_name',
                'mother_name',
                'address'
            ]);

            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    	return view('admin.admissions.list');
    }	
    public function submitAdmissionForm(Request $request){
    	  try {
		$admissionForm = AdmissionForm::create([
		    'child_name' => $request->input('child_name'),
		    'date_of_birth' => $request->input('date_of_birth'),
		    'admission_seeking_class' => $request->input('admission_seeking_class'),
		    'gender' => $request->input('gender'),  
		    'previous_school' => $request->input('previous_school'),
		    'sibling_name' => $request->input('sibling_name'),
		    'sibling_relation' => $request->input('sibling_relation'),
		    'sibling_age' => $request->input('sibling_age'),
		    'sibling_school' => $request->input('sibling_school'),
		    'father_name' => $request->input('father_name'),
		    'father_qualifications' => $request->input('father_qualifications'),
		    'father_mobile' => $request->input('father_mobile'),
		    'father_occupation' => $request->input('father_occupation'),
		    'father_designation' => $request->input('father_designation'),
		    'father_annual_income' => $request->input('father_annual_income'),
		    'mother_name' => $request->input('mother_name'),
		    'mother_qualifications' => $request->input('mother_qualifications'),
		    'mother_mobile' => $request->input('mother_mobile'),
		    'mother_occupation' => $request->input('mother_occupation'),
		    'mother_designation' => $request->input('mother_designation'),
		    'mother_annual_income' => $request->input('mother_annual_income'),
		    'address' => $request->input('address'),
		]);

		Grandparent::create([
		    'admission_form_id' => $admissionForm->id,
		    'reside_with_child' => $request->input('reside_with_child', false), 
		    'occupation' => json_encode($request->input('grandparents_occupation')), 
		]);

		
		Transport::create([
		    'admission_form_id' => $admissionForm->id,
		    'child_transport' => json_encode($request->input('child_transport')), 
		    'personal_transport' => json_encode($request->input('personal_transport')), 
		]);

		
		Attraction::create([
		    'admission_form_id' => $admissionForm->id,
		    'attraction' => json_encode($request->input('attraction')),
		]);

		
		UserQuestion::create([
		    'admission_form_id' => $admissionForm->id,
		    'question1' => $request->input('question1'),
		    'question2' => $request->input('question2'),
		    'question3' => $request->input('question3'),
		]);

		DB::commit(); 
		return back()->with('success', 'Form data saved successfully.');

	    } catch (\Exception $e) {
		DB::rollBack();
		return response()->json(['success' => false, 'message' => 'Error saving form data.', 'error' => $e->getMessage()]);
	    }
    }
    
    public function exportAdmissionData(){
    	return Excel::download(new AdmissionExport, 'admissions.xlsx');
    }
}
