@extends("template.layout.app")
@section("content")
<div class="container segment_d_container">
<div class="card">
   <div class="card-header title">
      List of Risk Action Plan (RAP)
      
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
                     <th class="">RAP ID</th>
                     <th class="">Business Process</th>
                     <th class="">Risk Event</th>
                     <th class="">Additional Control</th>
                     <th class="">Created By / Date</th>
                     <th class="">Submitted By</th>
                     <th class="">Date Submitted</th>
                     <th class="">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="first_row">1</td>
                     <td class=""><a href="<?= url('/')?>/bpa_details" style="color: #468ed5;">bpa_id</a></td>
                     <td class=""><a href="<?= url('/')?>/rr_details" style="color: #468ed5;">risk_register_id</a></td>
                     <td class=""><a href="<?= url('/')?>/rap_details" style="color: #468ed5;">rap_id</a></td>
                     <td class="">business_process</td>
                     <td class="">risk_event</td>
                     <td class="">additional_control</td>
                     <td class="">created_by_date</td>
                     <td class="">submitted_by</td>
                     <td class="">date_submitted</td>
                     <td class="">action</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection