@extends("template.layout.app")
@section("content")
<div class="container" style="padding-top:30px; padding-bottom: 30px;">
<div class="card">
   <div class="card-header title">
      Risk Document <?= $year ?>
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
                     <th class="">Risk Event</th>
                     <th class="">Additional Control</th>
                     <th class="">Date Submitted/Submitted By</th>
                     <th class="">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="first_row">1</td>
                     <td class="">bpa_id</td>
                     <td class="">risk_register_id</td>
                     <td class="">rap_id</td>
                     <td class="">risk_event</td>
                     <td class="">additional_control</td>
                     <td class="">date_submitted_or_submitted_by</td>
                     <td class="">action</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection