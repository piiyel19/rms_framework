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

    <style type="text/css">
      #header {
          margin: 0;
          padding: 10px 10px 0 10px;
          background: #b0b0b0 url("{{ asset('public/images/header_background.png') }}") repeat;
      }
    </style>


    <script src="{{ asset('public/js/jquery/app.js') }}"></script>
    <script src="{{ asset('public/js/jquery/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/styles.js') }}"></script>
    <script src="{{ asset('public/js/jquery/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/jquery-3.5.1.min.js') }}"></script>



    <title>Risk Managemnt System</title>
  </head>
  <body style="padding-top:10%">

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-4">
          <div class="card" style="border: 1px solid #F5F9FD;">
            <div class="card-header" id="header2">Risk Management System</div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-4" style="text-align: center;">
                    <img src="{{ asset('public/images/lock.png') }}">
                  </div>
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-5 top8 no-pad">
                        <span class="label-field"> Username : </span>
                      </div>
                      <div class="col-7 no-pad">
                        <input type="text" class="form-control no-pad">
                      </div>
                    </div>
                    <div class="row" style="padding-top:10px;">
                      <div class="col-5 top8 no-pad">
                        <span class="label-field"> Password : </span>
                      </div>
                      <div class="col-7 no-pad">
                        <input type="password" class="form-control no-pad">
                      </div>
                    </div>
                    <div class="row" style="padding-top:10px;">
                      <div class="col-5 top8 no-pad">
                      </div>
                      <div class="col-7 no-pad">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Remember Me
                      </div>
                    </div>


                  </div>
                </div>

                <div class="row" style="">
                  <div class="col-12 top8 no-pad" style="padding-left: 10%;">
                    <hr>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4" style="text-align: center;">
                  </div>
                  <div class="col-md-8">
                      <button style="float:right; padding: 6px 12px 6px 12px; background: #e5e3e3; border-top: 1px solid #DDDDDD;border-left: 1px solid #c6c6c6;border-right: 1px solid #DDDDDD;border-bottom: 1px solid #c6c6c6;color: #515151; font-weight:700;">Sign In</button>
                  </div>
                </div>

            </div>
          </div>
      </div>
      <div class="col-md-4"></div>
    </div>

  </body>
</html>

<style type="text/css">
    
    .form-control:focus {
      outline: none;
      box-shadow: none;
    }

    #header2 {
        margin: 0;
        padding: 10px 10px 0 10px;
        font-weight: 700; 
        font-size: 15px;
        background: linear-gradient( to top, #d2e1ec, #d2e1ec 1rem, #d2e1ec 1rem, #d2e1ec42 100% );
        color: #425B79;
        border: 1px solid #AFCBDF;

    }
  </style>

<style type="text/css">
  .center {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
</style>



<style type="text/css">

  .no-pad{
    padding-left:0px; 
    padding-right:0px;
  }

  .top10{
    padding-top: 10px;
  }

  .top8{
    padding-top: 8px;
  }

  .label-field{
    float: right;
    padding-right: 5px;
    font-weight:700;
  }
  
  .form-control{
    font-size: 0.7rem;
  }

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


.first_row{
    width: 10px;
    text-align: center;
}


.table thead th {
    border: 1px solid #cdcdcd;
    padding: 10px;
    background: #eeeeee;
    vertical-align: bottom;
    border-bottom: 1px solid #dee2e6;
    text-align: center;
}

.table > tbody{
    background: #fff;
    border: 1px solid #dee2e6;
}


.table td, .table th {
    vertical-align: top;
    border-right: 1px solid #d5d5d5;
    border-top: 1px solid #dee2e6;
}

.table > :not(:last-child) > :last-child > * {
    border-bottom-color: #cdcdcd;
}

.title{
    background: #336699;
    color: #fff;
    margin: 0;
    /*padding: 11px 0 11px 10px;*/
    float: left;
    border: none;
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    padding: 0.4rem; 
    padding-left:15px;
}


input,
input::-webkit-input-placeholder {
    font-size: 12px;
    line-height: 3;
}

input:focus, textarea:focus, select:focus{
    outline: none;
}

.search-frame{
    float:right; padding-right:10px;
}

.search-btn{
    background: #4e85bb;color: #FFFFFF;border: #336699; height: 24px; font-size: 12px;
}

.btn_go{
  cursor: pointer;
}

#footer {
    margin: 0;
    padding: 5px 0 5px 0;
    clear: both;
    overflow: hidden;
    background: #2a2a2a;
    text-align: right;
}

button{
  cursor: pointer;
}
</style>