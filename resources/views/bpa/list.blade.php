@extends("template.layout.app")
@section("content")
<div class="container" style="padding-top:30px; padding-bottom: 30px;">
<div class="card">
   <div class="card-header title">
      List of Business Process Analysis (BPA)
      
   </div>
   <div class="card-body">
      <div class="row">

         <div class="col-md-12">
            <a href="<?= url('/')?>/bpa_create" style="text-decoration: none;">
            <button class="btn btn-sm" style="float:right; font-size:11px; background:#e5e3e3;color: #515151;border-top: 1px solid #DDDDDD;border-left: 1px solid #c6c6c6;    border-right: 1px solid #DDDDDD; border-bottom: 1px solid #c6c6c6; font-weight: 700;">Create New BPA</button>
            </a>
         </div>

         <div class="col-md-12">
            <br>
            <table class="table">
               <thead>
                  <tr>
                     <th class="first_row">No</th>
                     <th class="">BPA</th>
                     <th class="">Division</th>
                     <th class="">Department</th>
                     <th class="">Business Process</th>
                     <th class="">Created By</th>
                     <th class="">Date Created</th>
                     <th class="">BPA Completed ?</th>
                     <th class="">Endorsed By HODv</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="first_row">1</td>
                     <td class="">bpa</td>
                     <td class="">division</td>
                     <td class="">department</td>
                     <td class="">business_process</td>
                     <td class="">created_by</td>
                     <td class="">date_created</td>
                     <td class="">bpa_completed</td>
                     <td class="">endorsed_by_hodv</td>
                  </tr>
               </tbody>
            </table>
            <br>
         </div>

         <div class="col-md-12">
            <a href="<?= url('/')?>/bpa_create" style="text-decoration: none;">
            <button class="btn btn-sm" style="float:right; font-size:11px; background:#e5e3e3;color: #515151;border-top: 1px solid #DDDDDD;border-left: 1px solid #c6c6c6;    border-right: 1px solid #DDDDDD; border-bottom: 1px solid #c6c6c6; font-weight: 700;">Create New BPA</button>
            </a>
         </div>

      </div>
   </div>
</div>
@endsection