@extends("template.layout.app")
@section("content")
<div class="container segment_d_container">
    <div class="card">
        <div class="card-header title">
            Risk Register (RR) Details - RR/IT/1/21-1-1
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    
                    <table class="table">
                         <tr>
                            <th class="left">Business Process</th>
                            <td colspan="5"></td>
                         </tr>
                         <tr>
                            <th class="left">Risk Event</th>
                            <td colspan="5"></td>
                         </tr>
                         <tr>
                            <th class="left">Risk Description</th>
                            <td colspan="5"></td>
                         </tr>
                         <tr>
                            <th class="left">Risk Category</th>
                            <td colspan="2"></td>
                            <th class="left">HoD</th>
                            <td colspan="2"></td>
                         </tr>
                         <tr>
                            <th class="left" colspan="6">Gross Risk</th>
                         </tr>
                         <tr>
                             <td colspan="3">
                                 <b>Causes</b>
                             </td>
                             <td colspan="3">
                                 <b>Consequences / Risk Linked to Objectives</b>
                             </td>
                         </tr>
                         <tr>
                            <th class="left" style="width:10%;">Impact</th>
                            <td colspan="" style="width:20%;"></td>
                            <th class="left" style="width:10%;">Likelihood</th>
                            <td colspan="" style="width:20%;"></td>
                            <th class="left" style="width:10%;">Rating</th>
                            <td colspan="" style="width:20%;"></td>
                         </tr>
                         <tr>
                            <th class="left" colspan="6">Residual Risk</th>
                         </tr>
                         <tr>
                             <td colspan="3">
                                 <b>Controls</b>
                             </td>
                             <td colspan="3">
                                 <b>Additional Controls</b>
                             </td>
                         </tr>
                         <tr>
                            <th class="left">Control Effectiveness</th>
                            <td colspan="5"></td>
                         </tr>
                         <tr>
                            <th class="left" style="width:10%;">Impact</th>
                            <td colspan="" style="width:20%;"></td>
                            <th class="left" style="width:10%;">Likelihood</th>
                            <td colspan="" style="width:20%;"></td>
                            <th class="left" style="width:10%;">Rating</th>
                            <td colspan="" style="width:20%;"></td>
                         </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top:30px;">
      <div class="col-md-6">
         <div class="card">
            <div class="card-header title">
               Comments
            </div>
            <div class="card-body">
               <b>Comments :</b>
               <textarea class="form-control" name="" cols="5" rows="5"></textarea>
               <br>
               <button class="btn btn-primary btn-sm" style="float:right;">Save</button>
            </div>
         </div>
      </div>

      <div class="col-md-6">
         <div class="card">
            <div class="card-header title">
               List Of Comments
            </div>
            <div class="card-body">

                  <table class="table">
                     <tr>
                        <th class="left" style="width: 10%;">No</th>
                        <th class="left" style="width: 50%;">Remarks</th>
                        <th class="left">Comment From</th>
                        <th class="left">Date</th>
                        <th class="left">Action</th>
                     </tr>
                     <tr>
                        <td class="left" style="width: 10;">1</td>
                        <td class="left" style="width: 50%;"></td>
                        <td class="left"></td>
                        <td class="left"></td>
                        <td class="left"></td>
                     </tr>
                  </table>

            </div>
         </div>
      </div>
   </div>

</div>


<style type="text/css">
   .form-control{
   font-size: 0.8rem;
   line-height: 1.5;
   }


   .left {
        background: #eeeeee;
    }

   .addMore, a.addMore:hover {
       color: #0062ff;
       text-decoration: none;
   }

   .addMore{
      float: right;
   }
</style>

@endsection
