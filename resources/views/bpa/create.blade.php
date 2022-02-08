@extends("template.layout.app")
@section("content")
<div class="container segment_d_container">
<div class="card">
   <div class="card-header title">
      New BPA
      <span class="search-frame"><input type="text" placeholder="" id="display_search" name="search">
      <button type="button" onclick="search_now();" class="search-btn">Search</button>
      </span>
      <form action="" class="hide" method="POST">
         @csrf 
         <input type="text" value="" id="function_search" name="btn_search">
         <button type="submit" id="search_now"></button>
      </form>
   </div>
   <div class="card-body">
      <form action="" method="POST">
         <div class="row">
            <div class="col-md-12">
               <table class="table">
                  <tr>
                     <th class="left">Division</th>
                     <td>
                        <input class="form-control" type="text" name="" readonly="readonly" value="Corporate Services">
                        <input type="hidden" name="bpa[division_id]" value="9">
                     </td>
                     <th class="left">
                        Department
                     </th>
                     <td>
                        <input class="form-control" type="text" name="" readonly="readonly" value="Information Technology">
                        <input type="hidden" name="bpa[unit_id]" value="2">
                     </td>
                     <th class="left">
                        HoD
                     </th>
                     <td>
                        <input class="form-control" type="text" name="bpa[hou_id]" value="AB Malek Mahmood" readonly="readonly" id="bpa_hou_id">                                <span class="error"></span>
                     </td>
                  </tr>
                  <tr>
                     <th class="left opener" title="Briefly name the business process">Business Process</th>
                     <td colspan="5">
                        <ul id="business_process">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control" rows="4" cols="40" name="bpaedit[business_process][old][0]" id="bpaedit_business_process_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a class="addMore" id="addbusiness_process" href="#">Add</a>
                     </td>
                  </tr>
                  <tr>
                     <th class="left opener" title="Briefly name the business process">Process Objectives </th>
                     <td colspan="5">
                        <ul id="business_process">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control" rows="4" cols="40" name="bpaedit[business_process][old][0]" id="bpaedit_business_process_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a class="addMore" id="addbusiness_process" href="#">Add</a>
                     </td>
                  </tr>
                  <tr>
                     <th class="left opener" title="Briefly name the business process">Inputs</th>
                     <td colspan="5">
                        <ul id="business_process">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control" rows="4" cols="40" name="bpaedit[business_process][old][0]" id="bpaedit_business_process_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a class="addMore" id="addbusiness_process" href="#">Add</a>
                     </td>
                  </tr>
                  <tr>
                     <th class="left" title="The activities are those actions or sub-processes that together produce the outputs of the process. For some processes, arrows are omitted due to the non-sequential nature of the activities.">Process Flow</th>
                     <td colspan="5">
                        <ul id="process_flow">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control" rows="4" cols="40" name="bpaedit[process_flow][old][0]" id="bpaedit_process_flow_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a id="addprocess_flow" href="#">Add</a>
                        <br>
                        <input type="file" class="file test">
                        <img height="18" src="{{ asset('public/images/paperclip.png') }}">
                        <span>(Attachment file cannot exceed 5MB  **Only PDF and image files can be attached(jpg,png,gif))</span>
                     </td>
                  </tr>
                  <tr>
                     <th class="left opener" title="Briefly name the business process">Outputs</th>
                     <td colspan="5">
                        <ul id="business_process">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control" rows="4" cols="40" name="bpaedit[business_process][old][0]" id="bpaedit_business_process_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a class="addMore" id="addbusiness_process" href="#">Add</a>
                     </td>
                  </tr>
                  <tr>
                     <th class="left opener" title="Briefly name the business process">Systems</th>
                     <td colspan="5">
                        <ul id="business_process">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control" rows="4" cols="40" name="bpaedit[business_process][old][0]" id="bpaedit_business_process_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a class="addMore" id="addbusiness_process" href="#">Add</a>
                     </td>
                  </tr>
                  <tr>
                     <th class="left">Classes of Transaction</th>
                     <td colspan="2">
                        <label title="The classes of transactions are data and information that are related to the process for use in one or more reports to management or third parties. The classes of transactions, which are broken down into routine and non-routine transactions and accounting estimates, provide a link from the process to the financial statements of the client. Every process will have one or more classes of transactions."><b>Routine</b>
                        <label>                               
                           <ul id="classes_routine">
                              <li>
                                 <div class="textarea">
                                    <textarea class="form-control" rows="4" cols="40" name="bpaedit[classes_routine][old][0]" id="bpaedit_classes_routine_old_0" class="validate[required]"></textarea>
                                 </div>
                              </li>
                           </ul>
                           <a class="addMore" id="addclasses_routine" href="#">Add</a>
                        </label>
                        </label>
                     </td>
                     <td colspan="3">
                        <label title="The classes of transactions are data and information that are related to the process for use in one or more reports to management or third parties. The classes of transactions, which are broken down into routine and non-routine transactions and accounting estimates, provide a link from the process to the financial statements of the client. Every process will have one or more classes of transactions."><b>Non Routine</b></label><br>                                
                        <ul id="classes_non_routine">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control" rows="4" cols="40" name="bpaedit[classes_non_routine][old][0]" id="bpaedit_classes_non_routine_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a class="addMore" id="addclasses_non_routine" href="#">Add</a>
                     </td>
                  </tr>
                  <tr>
                     <th colspan="3" title="Critical success factors (CSF’s) are the prerequisites and areas of dependency for a process to be successful. CSF’s may be inputs, parallel or supporting activities, or aspects of a business’s philosophy or infrastructure necessary to ensure the proper delivery of the process. The CSF’s relate directly to one or more of the processes objectives. They are normally limited in number.">Critical Success Factors (CSFs)</th>
                     <th colspan="3" title="Process risks are risks that may threaten the attainment of the processes objectives. Every process has one or more risks threatening the achievement of its objectives.">Risks which Threatens Objectives</th>
                  </tr>
                  <tr>
                     <td colspan="3">
                        <ul id="critical_success_factor">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control"  rows="4" cols="40" name="bpaedit[critical_success_factor][old][0]" id="bpaedit_critical_success_factor_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a  class="addMore" id="addcritical_success_factor" href="#">Add</a>
                     </td>
                     <td colspan="3">
                        <ul id="risks_threaten_obj">
                           <li>
                              <div class="textarea">
                                 <textarea class="form-control" rows="4" cols="40" name="bpaedit[risks_threaten_obj][old][0]" id="bpaedit_risks_threaten_obj_old_0" class="validate[required]"></textarea>
                              </div>
                           </li>
                        </ul>
                        <a  class="addMore" id="addrisks_threaten_obj" href="#">Add</a>
                     </td>
                  </tr>
                  <tr>
                     <th class="left"><label for="bpa_is_complete">Is BPA Completed?</label></th>
                     <td colspan="6">
                        <select name="bpa[is_complete]" id="bpa_is_complete">
                           <option value="No">No</option>
                           <option value="Yes">Yes</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="6">
                        <input type="hidden" name="bpa[id]" id="bpa_id"><input type="hidden" name="bpa[_csrf_token]" value="48e27f57f45d2ef617ecc195b407baae" id="bpa__csrf_token">
                        <a href="/index.php/bpa">Back to list</a>
                        <input type="submit" value="Save" class="btn btn-sm btn-success save" role="button" aria-disabled="false">
                     </td>
                  </tr>
               </table>
            </div>
         </div>
      </form>
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

