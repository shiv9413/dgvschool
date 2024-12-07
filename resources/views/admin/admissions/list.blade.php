@extends('admin.layouts.app')
@push('css')
<style type="text/css">
   table th{
   text-align: center;
   }
   table{
   text-align: center;
   }
</style>
@endpush
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
               <div class="page-header-title">
                  <h4>{{__('Admissions List')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="index-2.html">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">{{__('Admissions List')}}</a>
                     </li>
                     <li class="breadcrumb-item"><a href="#!">{{__('Admissions List')}}</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
               <div class="row">
                  <div class="col-sm-12">
                     <!-- Basic Form Inputs card start -->
                     <div class="card">
                        <div class="card-header">
                           <h5>{{__('Admissions List')}}</h5>
                           
                           <div class="card-header-right">
                              <i class="icofont icofont-rounded-down"></i>
                               <a href="{{ route('exportAdmissions') }}">
				  <i class="icofont icofont-file-excel"></i>
			        </a>
                              <i class="icofont icofont-refresh"></i>
                              <i class="icofont icofont-close-circled"></i>
                           </div>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive">
                              <table align="center"  id="admissionFormTable" class="table table-striped  nowrap table-bordered">
                              <thead>
                                
                                 <tr>
                                    	<th>#</th>
					<th>Child Name</th>
					<th>Date of Birth</th>
					<th>Class Seeking Admission</th>
					<th>Gender</th>
					<th>Previous School Name</th>
					<th>Father's Name</th>
					<th>Mother's Name</th>
					<th>Address</th>
                                 </tr>
                              </thead>
                              <tbody>
                               
                              </tbody>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Page body end -->
         </div>
      </div>
   </div>
</div>
@endsection
<script>
document.addEventListener('DOMContentLoaded', function() {
    const admissionFormTable = document.querySelector('#admissionFormTable');
    if (admissionFormTable) {
        $(admissionFormTable).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("admission-list") }}', // Replace with your actual route
            columns: [
                 { data: 'id', name: 'id' },
                { data: 'child_name', name: 'child_name' },
                { data: 'date_of_birth', name: 'date_of_birth' },
                { data: 'admission_seeking_class', name: 'admission_seeking_class' },
                 { data: 'gender', name: 'gender' },
                  { data: 'previous_school', name: 'previous_school' },
                { data: 'father_name', name: 'father_name' },
                { data: 'mother_name', name: 'mother_name' },
                { data: 'address', name: 'address' },
            ]
        });
    } else {
        console.error('The admissionFormTable element was not found!');
    }
});

</script>
@push('js')

@endpush
