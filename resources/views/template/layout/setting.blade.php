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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="{{ asset('public/js/jquery/app.js') }}"></script>
    <script src="{{ asset('public/js/jquery/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/styles.js') }}"></script>
    <script src="{{ asset('public/js/jquery/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('public/js/jquery/jquery-3.5.1.min.js') }}"></script>



    <style type="text/css">
      #header {
          margin: 0;
          padding: 10px 10px 0 10px;
          background: #b0b0b0 url("{{ asset('public/images/header_background.png') }}") repeat;
      }
    </style>

    <title>Application Customize</title>
  </head>
  <body>

    <div id="header" style="padding-bottom: 0px;">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="background: bisque;">
          <span class="navbar-toggler-icon" style="background: #000;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#" style="color: #fff;    margin: 6px 0 10px 0; padding: 0;"><h1 style="font-size: 22px; font-weight: bold;">Application Customize</h1></a>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a style="color: #fff;" class="nav-link" href="#">System Administrator <span class="sr-only">(current)</span>|</a>
            </li>
            <li class="nav-item">
              <a style="color: #fff;" class="nav-link disabled" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush" style="padding-left:10px; padding-right:10px; padding-top: 20px;">
                <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a> -->


                <div class="card" style="padding-left:5px; padding-right:5px; border-color: white;">
                  <div class="card-header" style="background: #00366b; color:#fff; padding-left: 5px; padding-right: 5px; font-weight: 700;">
                    Page Creator
                  </div>
                  <div class="card-body" style="border-top: 1px solid #4377ab;    border-bottom: 1px solid #326395; background:#376ea6; color:#fff; padding-left: 5px; padding-right: 5px;">
                    
                    <a href="<?= url('/')?>/controller" style="color:#fff; text-decoration: none; ">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i> Controller
                    </a>
                    <br>
                    <a href="<?= url('/')?>/model" style="color:#fff; text-decoration: none;">
                      <i class="fa fa-chevron-right" aria-hidden="true" style="padding-top: 10px;"></i> Model
                    </a>
                    <br>
                    <a href="<?= url('/')?>/view" style="color:#fff; text-decoration: none;">
                      <i class="fa fa-chevron-right" aria-hidden="true" style="padding-top: 10px;"></i> View
                    </a>
                    <br>
                    <a href="<?= url('/')?>/route" style="color:#fff; text-decoration: none;">
                      <i class="fa fa-chevron-right" aria-hidden="true" style="padding-top: 10px;"></i> Route
                    </a>


                  </div>
                </div>


                <div class="card" style="padding-left:5px; padding-right:5px; border-color: white; padding-top: 10px;">
                  <div class="card-header" style="background: #00366b; color:#fff; padding-left: 5px; padding-right: 5px; font-weight: 700;">
                    Artisan Command
                  </div>
                  <div class="card-body" style="border-top: 1px solid #4377ab;    border-bottom: 1px solid #326395; background:#376ea6; color:#fff; padding-left: 5px; padding-right: 5px;">
                    
                    <span style="color:#fff; text-decoration: none; ">
                      <form action="<?= url('/')?>/routeClear" method="post" id="routeClear">
                        @csrf
                        <a onclick="cmd('routeClear'); return false;"  style="cursor: pointer;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Route Clear</a>
                      </form>
                    </span>
                    <br>
                    <span style="color:#fff; text-decoration: none; ">
                      <form action="<?= url('/')?>/routeCache" method="post" id="routeCache">
                        @csrf
                        <a onclick="cmd('routeCache'); return false;"  style="cursor: pointer;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Route Cache</a>
                      </form>
                    </span>
                    <br>
                    <span style="color:#fff; text-decoration: none; ">
                      <form action="<?= url('/')?>/viewClear" method="post" id="viewClear">
                        @csrf
                        <a onclick="cmd('viewClear'); return false;"  style="cursor: pointer;"><i class="fa fa-chevron-right" aria-hidden="true"></i> View Clear</a>
                      </form>
                    </span>
                    <br>
                    <span style="color:#fff; text-decoration: none; ">
                      <form action="<?= url('/')?>/viewCache" method="post" id="viewCache">
                        @csrf
                        <a onclick="cmd('viewCache'); return false;"  style="cursor: pointer;"><i class="fa fa-chevron-right" aria-hidden="true"></i> View Cache</a>
                      </form>
                    </span>
                    <br>

                  </div>
                </div>


                <div class="card" style="padding-left:5px; padding-right:5px; border-color: white; padding-top: 10px;">
                  <div class="card-header" style="background: #00366b; color:#fff; padding-left: 5px; padding-right: 5px; font-weight: 700;">
                    Page Customize
                  </div>
                  <div class="card-body" style="border-top: 1px solid #4377ab;    border-bottom: 1px solid #326395; background:#376ea6; color:#fff; padding-left: 5px; padding-right: 5px;">
                    
                    <a href="<?= url('/')?>/page_customize" style="color:#fff; text-decoration: none; ">
                      <i class="fa fa-chevron-right" aria-hidden="true" style="padding-top: 10px;"></i> Color
                    </a>
                    <br>
                    <a href="<?= url('/')?>/ui_template" style="color:#fff; text-decoration: none; ">
                      <i class="fa fa-chevron-right" aria-hidden="true" style="padding-top: 10px;"></i> Template
                    </a>


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

  </body>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    
  </body>
  </body>
</html>


<script type="text/javascript">
  function cmd(idForm)
  {
    $("#"+idForm).submit();
  }
</script>


<style type="text/css">
  

  ul {
      list-style: none;
  }


  html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

li {
    display: list-item;
    text-align: -webkit-match-parent;
}


body {
    margin: 0;
    padding: 0;
    height: 100%;
    background: #F5F9FD;
    font-family: Lucida Grande, Verdana, Lucida Sans Regular, Lucida Sans Unicode, Arial, sans-serif;
    font-size: 11px;
}

#header #logo h1 {
    margin: 6px 0 10px 0;
    padding: 0;
    color: #ffffff;
    font-size: 22px;
}

#sidebar-wrapper .list-group {
    width: 13rem;
}


body {
  /*overflow-y: hidden;*/ /* Hide vertical scrollbar */
  overflow-x: hidden; /* Hide horizontal scrollbar */
}
</style>
