@extends("template.layout.app")
@section("content")
<div class="container segment_d_container">
<div class="card">
   <div class="card-header title">
      List of Risk Register (RR)
      
   </div>
   <div class="card-body">
      <div class="row">
         <div class="col-md-12">
            <table class="table">
               <thead>
                  <tr>
                     <th class="first_row">No</th>
                     <th class="">BPA ID</th>
                     <th class="">Risk Register ID</th>
                     <th class="">Business Process</th>
                     <th class="">Risk Event</th>
                     <th class="">Created By</th>
                     <th class="">Date Created</th>
                     <th class="">RR Completed?</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="first_row">1</td>
                     <td class="">bpa_id</td>
                     <td class="">risk_register_id</td>
                     <td class="">business_process</td>
                     <td class="">risk_event</td>
                     <td class="">created_by</td>
                     <td class="">date_created</td>
                     <td class="">rr_completed</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection