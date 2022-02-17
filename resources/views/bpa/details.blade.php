@extends("template.layout.app")
@section("content")
<div class="container segment_d_container">
   <div class="card">
      <div class="card-header title">
         Business Process Analysis (BPA) Details - BPA/IT/1/21-1
      </div>
      <div class="card-body">
         <form action="" method="POST">
            <div class="row">
               <div class="col-md-12">
                  <table class="table">
                     <tr>
                        <th class="left">Division</th>
                        <td>
                           
                        </td>
                        <th class="left">
                           Department
                        </th>
                        <td>
                           
                        </td>
                        <th class="left">
                           HoD
                        </th>
                        <td>
                           
                        </td>
                     </tr>
                     <tr>
                        <th class="left">Business Process</th>
                        <td colspan="5"></td>
                     </tr>
                     <tr>
                        <th class="left">Process Objectives </th>
                        <td colspan="5"></td>
                     </tr>
                     <tr>
                        <th class="left">Inputs</th>
                        <td colspan="5"></td>
                     </tr>
                     <tr>
                        <th class="left">Process Flow </th>
                        <td colspan="5"></td>
                     </tr>
                     <tr>
                        <th class="left">Outputs</th>
                        <td colspan="5"></td>
                     </tr>
                     <tr>
                        <th class="left">Systems</th>
                        <td colspan="5"></td>
                     </tr>
                     <tr>
                        <th class="left">Classes of Transaction </th>
                        <td colspan="3">
                           <b>Routine</b>
                        </td>
                        <td colspan="3">
                           <b>Non Routine</b>
                        </td>
                     </tr>
                     <tr>
                        <th class="left" colspan="4">
                           Critical Success Factors (CSFs)  
                        </th>
                        <th class="left" colspan="3">
                           Risk which Threatens Objectives
                        </th>
                     </tr>
                     <tr>
                        <td class="left" colspan="4">
                           
                        </td>
                        <td class="left" colspan="3">
                           
                              <button class="btn btn-primary btn-sm" style="float:right; font-size:10px;"><a href="<?= url('/')?>/bpa_rap">View RAP</a></button>
                           
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
         </form>
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

