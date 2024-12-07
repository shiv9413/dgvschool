<?php

namespace App\Exports;

use App\Models\AdmissionForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AdmissionExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AdmissionForm::with([
            'grandParents',
            'transports',
            'attractions',
            'userQuestions'
        ])->get();
    }
    
    public function headings(): array
    {
        return [
            'Child Name',
            'Date of Birth',
            'Class Seeking Admission',
            'Gender',
            'Previous School Name',
            'Sibling Name',
            'Sibling Relation',
            'Sibling Age',
            'Sibling School',
            'Father Name',
            'Father Qualification',
            'Father Mobile',
            'Father occupation',
            'Mother Name',
            'Mother Qualification',
            'Mother Mobile',
            'Mother occupation',
            'Address',
            'Attraction',
            'GrandParent Occupation',
            'Child Tranport',
            'Personal Tranport',
            'Question 1',
            'Question 2',
            'Question 3',
        ];
    }
    
     public function map($admissionForm): array
    {
        // Example of concatenating multiple grandparent records
        $grandParents = $admissionForm->grandParents->pluck('occupation')->implode(', ');
        $transports = $admissionForm->transports->first();
        $attractions = $admissionForm->attractions->pluck('attraction')->implode(', ');
        $userQuestions = $admissionForm->userQuestions->first();

        return [
            $admissionForm->child_name,
            $admissionForm->date_of_birth,
            $admissionForm->admission_seeking_class,
            $admissionForm->gender,
            $admissionForm->previous_school,
            $admissionForm->sibling_name,
            $admissionForm->sibling_relation,
            $admissionForm->sibling_age,
            $admissionForm->sibling_school,
            $admissionForm->father_name,
            $admissionForm->father_qualifications,
            $admissionForm->father_mobile,
            $admissionForm->father_occupation,
            $admissionForm->mother_name,
            $admissionForm->mother_qualifications,
            $admissionForm->mother_mobile,
            $admissionForm->mother_occupation,
            $admissionForm->address,
            $attractions,
            $grandParents,
            $transports->child_transport,
            $transports->personal_transport,
            $userQuestions->question1,
            $userQuestions->question2,
            $userQuestions->question3,
        ];
    }
}
