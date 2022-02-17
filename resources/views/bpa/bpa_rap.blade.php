@extends("template.layout.app")
@section("content")
<div class="container segment_d_container">
    <div class="card">
        <div class="card-header title">
            Risk Action Plan (RAP) Details - RAP/IT/1/21-1-1-1
            
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
                            <th class="left">Specific Risk</th>
                            <td colspan="5"></td>
                         </tr>
                         <tr>
                            <th class="left">Residual Rating</th>
                            <td colspan="2"></td>
                            <th class="left">Risk Action Plan Owner </th>
                            <td colspan="2"></td>
                         </tr>
                         <tr>
                            <th class="left">Treatment Option</th>
                            <td colspan="2"></td>
                            <th class="left"><b>Justification</b> <i style="font-size:10px; font-weight:500;">(Justification is required if Treatment Option is Accept or Pass On or Terminate)</i> </th>
                            <td colspan="2"></td>
                         </tr>
                         <tr>
                            <th class="left">Team Members</th>
                            <td colspan="5"></td>
                         </tr>
                         <tr>
                            <th class="left">Risk Linked to Objectives / Consequences</th>
                            <td colspan="5"></td>
                         </tr>
                         <tr>
                            <th class="left">Risk Description</th>
                            <td colspan="5"></td>
                         </tr>
                         <tr>
                            <th class="left" colspan="6">Proposed Additional Control</th>
                         </tr>
                         <tr>
                            <td class="left" colspan="6">
                                <b><i> 1 Implement SAP backup replication to Disaster Recovery Centre (DRC) </i></b>
                                <p>Action Plan Priority</p>
                                <br>
                                <table class="table">
                                    <tr>
                                        <th class="left" style="width: 5%;">No</th>
                                        <th class="left" style="width: 10%;">Details of additional control action flow</th>
                                        <th class="left" style="width: 10%;">Person In-Charge</th>
                                        <th class="left" style="width: 10%;">Action Plan to Reduce</th>
                                        <th class="left" style="width: 10%;">Expected Implementation Cost</th>
                                        <th class="left" style="width: 10%;">Expected Action Benefit</th>
                                        <th class="left" style="width: 10%;">Expected Start Date</th>
                                        <th class="left" style="width: 10%;">Expected Completion Date</th>
                                        <th class="left" style="width: 5%;">Status</th>
                                    </tr>
                                    <tr>
                                        <td class="" style="width: 5%;">No</td>
                                        <td class="" style="width: 10%;"></td>
                                        <td class="" style="width: 10%;"></td>
                                        <td class="" style="width: 10%;"></td>
                                        <td class="" style="width: 10%;"></td>
                                        <td class="" style="width: 10%;"></td>
                                        <td class="" style="width: 10%;"></td>
                                        <td class="" style="width: 10%;"></td>
                                        <td class="" style="width: 5%;"></td>
                                    </tr>
                                </table>

                            </td>
                         </tr>
                         <tr>
                            <td colspan="6">
                               <a href="" style="color: #0281ff;">Back</a> 
                               <a href="" style="color: #0281ff;">Edit</a> 
                               <a href="" style="color: #0281ff;"><i class="fa fa-file-pdf-o"></i> Export to PDF </a>
                            </td>
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