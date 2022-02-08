<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/boostrap_4/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/boostrap_4/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/default.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    


    <script src="{{ asset('public/js/jquery/app.js') }}"></script>
    <script src="{{ asset('public/js/jquery/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/styles.js') }}"></script>
    <script src="{{ asset('public/js/jquery/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/jquery-3.5.1.min.js') }}"></script>



    <title>Risk Managemnt System</title>
  </head>
  <body>

    <?php 
      $color = DB::table('page_color')->get();

      $segment_a_bg_val = '';
      $segment_a_font_val = '#fff';
      $segment_a_bg_nav_val = '';
      $segment_a_font_nav_val = '#fff';


      $segment_b_bg_val = '#cedfea';
      $segment_b_font_val = '';
      $segment_b_bg_nav_val = '#2e5c89';
      $segment_b_font_nav_val = '#fff';


      $segment_c_bg_val = '#ffffff';
      $segment_c_bg_header_val = '#00366b';
      $segment_c_bg_contain_val = '#376ea6';
      $segment_c_font_val = '#fff';

        $segment_d_bg_val = '#F5F9FD';

      $segment_e_bg_val = '#2a2a2a';
      $segment_e_font_val = '#fff';

      if(count($color)>0){
        foreach($color as $c)
        {
          $segment_a_bg_val = $c->segment_a_bg_val;
          $segment_a_font_val = $c->segment_a_font_val;
          $segment_a_bg_nav_val = $c->segment_a_bg_nav_val;
          $segment_a_font_nav_val = $c->segment_a_font_nav_val;

          $segment_b_bg_val = $c->segment_b_bg_val;
          $segment_b_font_val = $c->segment_b_font_val;
          $segment_b_bg_nav_val = $c->segment_b_bg_nav_val;
          $segment_b_font_nav_val = $c->segment_b_font_nav_val;


          $segment_c_bg_val = $c->segment_c_bg_val;
          $segment_c_bg_header_val = $c->segment_c_bg_header_val;
          $segment_c_bg_contain_val = $c->segment_c_bg_contain_val;
          $segment_c_font_val = $c->segment_c_font_val;

          $segment_d_bg_val = $c->segment_d_bg_val;
          $segment_d_bg_contain_val = $c->segment_d_bg_contain_val;
          $segment_d_font_title_val = $c->segment_d_font_title_val;

          $segment_e_bg_val = $c->segment_e_bg_val;
          $segment_e_font_val = $c->segment_e_font_val;
        }
      }
    ?>


    <style type="text/css">
      <?php if(!empty($segment_a_bg_val)){ ?>
        #header {
            margin: 0;
            padding: 10px 10px 0 10px;
            background: <?= $segment_a_bg_val ?> repeat;
        }
      <?php } else { ?>
        #header {
            margin: 0;
            padding: 10px 10px 0 10px;
            background: #b0b0b0 url("{{ asset('public/images/header_background.png') }}") repeat;
        }
      <?php } ?>


      .colorlink{
        color: <?= $segment_a_font_nav_val ?>;
        background: <?= $segment_a_bg_nav_val ?>;
      }

      .nav-link.disabled{
        color: <?= $segment_a_font_nav_val ?>;
      }

      #title-color{
        color: <?= $segment_a_font_val ?>;
      }
    </style>

    <div id="header" style="padding-bottom: 0px;">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="background: bisque;">
          <span class="navbar-toggler-icon" style="background: #000;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#" id="title-color" style="margin: 6px 0 10px 0; padding: 0;"><h1 style="font-size: 22px; font-weight: bold;">Risk Management System</h1></a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a  class="nav-link btn_go colorlink" href="#">Ganaphanty Manoharan <span class="sr-only">(current)</span>|</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link disabled colorlink" href="#">Corporate Services |</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link disabled colorlink" href="#">Information Technology |</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link btn_go colorlink" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </nav>





      <div class="row">
        <div class="col-1 segment_b_col1">
          <div class="card segment_b_card1">
            <div class="card-body" style="padding-top: 10px;">
              <h1 class="segment_b_icon1" onclick="window.location.href='<?= url('/')?>/bpa_list'"><i class="fa fa-home" aria-hidden="true"></i></h1>
            </div>
          </div>
        </div>
        <div class="col-11" style="padding-left: 0px;">
          <div class="card" style="height: 40px;border-radius: 0rem; background: <?= $segment_b_bg_val ?>;">
            <div class="card-body" style="vertical-align: center; padding-top: 5px;">


                
              

                <div class="row segment_b_row">
                  <div class="col-md-3 segment_b_col3">
                    <div class="card segment_b_card">
                      <div class="card-body btn_go segment_b_body">
                        <span class="icon"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                        <span class="segment_b_fontweight">Risk Management Framework</span>  
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 segment_b_col3">
                    <div class="card segment_b_card">
                      <div class="card-body btn_go segment_b_body" id="archieve">
                        <span class="icon"><i class="fa fa-database" aria-hidden="true"></i></span>
                        <span class="segment_b_fontweight">Archieve</span>  
                      </div>
                    </div>


                    
                    <style type="text/css">
                      .li-related{
                        padding-left: 5px;background: aliceblue;padding-right: 5px;border: solid 1px #dddddd;
                      }

                      .li-a-contain{
                        text-decoration: none; color: #468ed5;
                      }


                      a.li-a-contain:hover {
                        color: #468ed5;
                        text-decoration: none;
                      }

                    </style>


                    <ul id="archieve_list" style="visibility: hidden;display: block;z-index:100; position: absolute; width: 100px; padding-top:0px;">
                        <li class="li-related"><a href="<?= url('')?>/archieve/2020" class="li-a-contain">2020</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2019" class="li-a-contain">2019</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2018" class="li-a-contain">2018</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2017" class="li-a-contain">2017</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2016" class="li-a-contain">2016</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2015" class="li-a-contain">2015</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2014" class="li-a-contain">2014</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2013" class="li-a-contain">2013</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2012" class="li-a-contain">2012</a></li>
                    </ul>


                  </div>
                  <div class="col-md-3 segment_b_col3">
                    <div class="card segment_b_card">
                      <div class="card-body btn_go segment_b_body">
                        <span class="icon"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
                        <span class="segment_b_fontweight">Reports</span>  
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 segment_b_col3">
                    <div class="card segment_b_card">
                      <div class="card-body btn_go segment_b_body" id="report">
                        <span class="icon"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
                        <span class="segment_b_fontweight">Reports</span>  
                      </div>
                    </div>
                    <ul id="report_list" style="visibility: hidden;display: block;z-index:100; position: absolute; width: 200px; padding-top:0px;">
                        <li class="li-related"><a href="<?= url('')?>/archieve/2021" class="li-a-contain">Report For Current Year</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2020" class="li-a-contain">Report For 2020</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2019" class="li-a-contain">Report For 2019</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2018" class="li-a-contain">Report For 2018</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2017" class="li-a-contain">Report For 2017</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2016" class="li-a-contain">Report For 2016</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2015" class="li-a-contain">Report For 2015</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2014" class="li-a-contain">Report For 2014</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2013" class="li-a-contain">Report For 2013</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2012" class="li-a-contain">Report For 2012</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 segment_b_col3">
                    <div class="card segment_b_card">
                      <div class="card-body btn_go segment_b_body">
                        <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <span class="segment_b_fontweight">Profile</span>  
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 segment_b_col3">
                    <div class="card segment_b_card">
                      <div class="card-body btn_go segment_b_body" id="admin">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="segment_b_fontweight">Admin</span>  
                      </div>
                    </div>
                    <ul id="admin_list" style="visibility: hidden;display: block;z-index:100; position: absolute; width: 100px; padding-top:0px;">
                        <li class="li-related"><a href="<?= url('')?>/archieve/2021" class="li-a-contain">Company</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2020" class="li-a-contain">Division</a></li>
                        <li class="li-related"><a href="<?= url('')?>/archieve/2019" class="li-a-contain">Unit</a></li>
                    </ul>
                  </div>
                </div>  



            </div>
          </div>
        </div>
      </div>


    </div>


    <style type="text/css">
        .segment_b_row{
          float: right;
        }

        .segment_b_col1{
          width: 5%; padding-left: 10px; padding-right: 0px;
        }

        .segment_b_col3{
          width: auto; max-width: 100%; padding-right: 1px;
        }


        .segment_b_card1{
          height: 40px;border-radius: 0rem; background:<?= $segment_b_bg_nav_val ?>;
        }


        .segment_b_icon1{
          color:<?= $segment_b_font_nav_val ?>; vertical-align:middle; font-size: 15px;
        }


        .segment_b_card{
          height:30px; background:<?= $segment_b_bg_nav_val ?>; color: <?= $segment_b_font_nav_val ?>;
        }

        .segment_b_body{
          padding-top:5px;
        }

        .segment_b_fontweight{
          font-weight: 700;
        }
    </style>


    <style type="text/css">
      .segment_c_header{
        padding-left:10px; padding-right:10px; padding-top: 20px;
        background: <?= $segment_c_bg_val ?>;
      }

      .segment_c_card{
        padding-left:5px; padding-right:5px; border-color: <?= $segment_c_bg_val ?>;
        background: <?= $segment_c_bg_val ?>;
      }

      .segment_c_card_header{
        background: <?= $segment_c_bg_header_val ?>; color:<?= $segment_c_font_val ?>; padding-left: 5px; padding-right: 5px; font-weight: 700;
      }

      .segment_c_card_body{
        border-top: 1px solid #4377ab;    border-bottom: 1px solid #326395; background:<?= $segment_c_bg_contain_val ?>; color:<?= $segment_c_font_val ?>; padding-left: 5px; padding-right: 5px;
      }

      .segment_c_li{
        color:<?= $segment_c_font_val ?>; text-decoration: none;
      }

      .pad10{
        padding-top: 10px;
      }

      .sidebar-wrapper{

      }


      .segment_c_warning{
        padding-left:5px; padding-right:5px; color:red; font-weight:700; padding-top: 10px;
      }
    </style>


    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush segment_c_header">


                <div class="card segment_c_card">
                  <div class="card-header segment_c_card_header">
                    Data Entry
                  </div>
                  <div class="card-body segment_c_card_body">
                    
                    <a href="<?= url('/')?>/bpa_list" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> Business Process Analysis
                    </a>
                    <hr>
                    <a href="<?= url('/')?>/rr_list" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> Risk Register
                    </a>
                    <hr>
                    <a href="<?= url('/')?>/rap_list" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> Risk Action Plan
                    </a>


                  </div>
                </div>


                <div class="card segment_c_card pad10">
                  <div class="card-header segment_c_card_header">
                    Audit Trail
                  </div>
                  <div class="card-body segment_c_card_body">
                    
                    <a href="<?= url('/')?>/audit_logs" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> Activity Logs
                    </a>


                  </div>
                </div>



                <div class="card segment_c_card pad10">
                  <div class="card-header segment_c_card_header">
                      Notes
                    </a>
                  </div>
                </div>
                <p class="segment_c_warning"><i>1. System will automatically number the multiple entries</i></p>
                
                <p class="segment_c_warning"><i>2. All fields are mandatory. Key In "None" if there is no values</i></p>


                <div class="card segment_c_card pad10">
                  <div class="card-header segment_c_card_header">
                    Risk Review
                  </div>
                  <div class="card-body segment_c_card_body">
                    
                    <a href="" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> Pending HOD's Approval
                    </a>
                    <hr>
                    <a href="" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> View Documents
                    </a>
                    <hr>
                    <a href="" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> RMD Pending For Review
                    </a>
                    <hr>
                    <a href="" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> View Documents
                    </a>
                    <hr>
                    <a href="" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> View 
                    </a>
                    <hr>
                    <a href="" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> Activity Logs 
                    </a>
                    <hr>
                    <a href="" class="segment_c_li">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> Pending HoDv's 
                      <br><span style="padding-left:12px;">Endorsement</span> 
                    </a>


                  </div>
                </div>

                <script type="text/javascript">
                  function subNav(menu,state)
                  {

                    if(state=='off'){
                      $("#"+menu+"_tag").show();
                      var direction = "'"+menu+"'";
                      var state = "'on'";
                      $("#"+menu+"_control").html('<i class="fa fa-minus" aria-hidden="true" style="padding:0px;" onclick="subNav('+direction+','+state+');"></i>');
                    } else {
                      $("#"+menu+"_tag").hide();
                      var direction = "'"+menu+"'";
                      var state = "'off'";
                      $("#"+menu+"_control").html('<i class="fa fa-plus" aria-hidden="true" style="padding:0px;" onclick="subNav('+direction+','+state+');"></i>');
                    }
                    
                  }
                </script>

                <div class="card segment_c_card pad10">
                  <div class="card-header segment_c_card_header">
                    Risk Profile
                  </div>
                  <div class="card-body segment_c_card_body" style="padding:0px; border-top: none;">
                    
                    <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 0px;">
                      <div class="col-2" style="background:#326395; padding-left: 5px; width: 10px;" id="riskProfile_control">
                        <i class="fa fa-plus" aria-hidden="true" style="padding:0px;" onclick="subNav('riskProfile','off');"></i>
                      </div>
                      <div class="col-10" style="padding-left:5px;">
                        Division
                        
                        <ul style="display:none; padding-bottom:10px;" id="riskProfile_tag">
                          <hr>
                          <li>
                            <a href="" class="segment_c_li">
                              <i class="fa fa-chevron-right" aria-hidden="true"></i> Advisory Services
                            </a>
                          </li>
                          <hr>
                          <li>
                            <a href="" class="segment_c_li">
                              <i class="fa fa-chevron-right" aria-hidden="true"></i> Corporate Affairs
                            </a>
                          </li>
                          <hr>
                          <li>
                            <a href="" class="segment_c_li">
                              <i class="fa fa-chevron-right" aria-hidden="true"></i> Corporate Services
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            
            <!-- Page content-->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>


    </div>

  </div>
  <div id="footer">
        <span style="float: right; color: <?= $segment_e_font_val ?>; padding-right: 10px;">
          Copyright © 2010-2022 Prokhas Sdn Bhd. All Rights Reserved.
        </span>
  </div>

  </body>

</html>



<script type="text/javascript">
  $( "#archieve" ).mouseover(function() {
    $("#archieve_list").css("visibility", "visible");
  });

  $( "#archieve_list" ).mouseover(function() {
    $("#archieve_list").css("visibility", "visible");
  });

  $( "#archieve" ).mouseout(function() {
    $("#archieve_list").css("visibility", "hidden");
  });


  $( "#archieve_list" ).mouseout(function() {
    $("#archieve_list").css("visibility", "hidden");
  });



  $( "#report" ).mouseover(function() {
    $("#report_list").css("visibility", "visible");
  });

  $( "#report_list" ).mouseover(function() {
    $("#report_list").css("visibility", "visible");
  });

  $( "#report" ).mouseout(function() {
    $("#report_list").css("visibility", "hidden");
  });


  $( "#report_list" ).mouseout(function() {
    $("#report_list").css("visibility", "hidden");
  });


  $( "#admin" ).mouseover(function() {
    $("#admin_list").css("visibility", "visible");
  });

  $( "#admin_list" ).mouseover(function() {
    $("#admin_list").css("visibility", "visible");
  });

  $( "#admin" ).mouseout(function() {
    $("#admin_list").css("visibility", "hidden");
  });


  $( "#admin_list" ).mouseout(function() {
    $("#admin_list").css("visibility", "hidden");
  });
</script>


<style type="text/css">

body {
    margin: 0;
    padding: 0;
    height: 100%;
    background: <?= $segment_d_bg_val ?>;
    font-family: Lucida Grande, Verdana, Lucida Sans Regular, Lucida Sans Unicode, Arial, sans-serif;
    font-size: 11px;
}





#footer {
    margin: 0;
    padding: 5px 0 5px 0;
    clear: both;
    overflow: hidden;
    background: <?= $segment_e_bg_val ?>;
    text-align: right;
}



a, a:hover {
  color: <?= $segment_b_font_nav_val ?>;
  text-decoration: none;
}

li, li:hover {
  color: <?= $segment_b_font_nav_val ?>;
  text-decoration: none;
}

a.nav-link.btn_go.colorlink, a.nav-link.btn_go.colorlink:hover {
  color: <?= $segment_b_font_nav_val ?>;
  text-decoration: none;
}

</style>


<style type="text/css">
  .segment_d_container{
    padding-top:30px; padding-bottom: 30px;
  }
</style>

<script type="text/javascript">
  $("document").ready(function (){
    
  });
  $("#display_search").keyup(function() {
      $("#function_search").val($(this).val());
  });

  function search_now(){
    $("#search_now").trigger('click');
  }
</script>