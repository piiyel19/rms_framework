@extends("template.layout.app")
@section("content")
<div class="container segment_d_container">
<div class="card">
   <div class="card-header title">
      Activity Logs
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
      <div class="row">
         <div class="col-md-12">
            <table class="table">
               <thead>
                  <tr>
                     <th class="first_row">No</th>
                     <th class="">Activity</th>
                     <th class="">Date</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="first_row">1</td>
                     <td class="">activity</td>
                     <td class="text-center">date</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection