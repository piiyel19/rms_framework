@extends('template.layout.setting')

@section('content')

<div class="container" style="padding-top:30px;">
    <div class="row">
        <div class="card">
            <div class="card-body">

                <form action="<?= url('/')?>/customize_color" method="POST">
                    @csrf
                    Page Creator - Page Customize

                    <div class="row" style="padding-top:30px">
                        <div class="col-md-6">
                            <label>Frame</label>
                            <img src="{{ asset('public/images/mockup.png') }}" style="width:100%">
                        </div>

                        <div class="col-md-6">
                            <label>Customize Frame</label>
                            
                            <div id="accordion">

                              <div class="card">
                                <div class="card-header">
                                  <a class="card-link" data-toggle="collapse" href="#segmentA">
                                    Segment A
                                  </a>
                                </div>
                                <div id="segmentA" class="collapse show" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            HEADER
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_a_bg_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background
                                            <input type="text" id="segment_a_bg_val" name="segment_a_bg_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_a_font_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Font Color
                                            <input type="text" id="segment_a_font_val" name="segment_a_font_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            NAV
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_a_bg_nav_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background
                                            <input type="text" id="segment_a_bg_nav_val" name="segment_a_bg_nav_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_a_font_nav_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Font Color
                                            <input type="text" id="segment_a_font_nav_val" name="segment_a_font_nav_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>


                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header">
                                  <a class="collapsed card-link" data-toggle="collapse" href="#segmentB">
                                    Segment B
                                  </a>
                                </div>
                                <div id="segmentB" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            SUB HEADER
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_b_bg_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background
                                            <input type="text" id="segment_b_bg_val" name="segment_b_bg_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_b_font_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Font Color
                                            <input type="text" id="segment_b_font_val" name="segment_b_font_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            NAV
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_b_bg_nav_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background
                                            <input type="text" id="segment_b_bg_nav_val" name="segment_b_bg_nav_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_b_font_nav_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Font Color
                                            <input type="text" id="segment_b_font_nav_val" name="segment_b_font_nav_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>


                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header">
                                  <a class="collapsed card-link" data-toggle="collapse" href="#segmentC">
                                    Segment C
                                  </a>
                                </div>
                                <div id="segmentC" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            SIDE MENU
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_c_bg_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background Outside
                                            <input type="text" id="segment_c_bg_val" name="segment_c_bg_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_c_bg_header_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background Header
                                            <input type="text" id="segment_c_bg_header_val" name="segment_c_bg_header_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_c_bg_contain_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background Contain
                                            <input type="text" id="segment_c_bg_contain_val" name="segment_c_bg_contain_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_c_font_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Font Color Menu
                                            <input type="text" id="segment_c_font_val" name="segment_c_font_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="card">
                                <div class="card-header">
                                  <a class="collapsed card-link" data-toggle="collapse" href="#segmentD">
                                    Segment D
                                  </a>
                                </div>
                                <div id="segmentD" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            CONTAIN
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_d_bg_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background Outside
                                            <input type="text" id="segment_d_bg_val" name="segment_d_bg_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_d_bg_contain_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background Contain
                                            <input type="text" id="segment_d_bg_contain_val" name="segment_d_bg_contain_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_d_font_title_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Font Color Title
                                            <input type="text" id="segment_d_font_title_val" name="segment_d_font_title_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>



                              <div class="card">
                                <div class="card-header">
                                  <a class="collapsed card-link" data-toggle="collapse" href="#segmentE">
                                    Segment E   
                                  </a>
                                </div>
                                <div id="segmentE" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            FOOTER
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_e_bg_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Background
                                            <input type="text" id="segment_e_bg_val" name="segment_e_bg_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="color" class="theme" id="segment_e_font_color" />
                                        </div>
                                        <div class="col-10" style="padding-top: 5px;">
                                            Font Color
                                            <input type="text" id="segment_e_font_val" name="segment_e_font_val" style="display:none">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>

                        </div>

                    </div>


                    <div class="row" style="padding-top:30px; float: right;">
                        <button type="submit" class="btn btn-success btn-sm">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<style type="text/css">
    a{
        text-decoration: none;
    }
</style>


<script type="text/javascript">
    $(document).ready(function (){
        <?php 
            $data = DB::table('page_color')->first();
            if(!empty($data)){ 
               $segment_a_bg_val = $data->segment_a_bg_val;
               $segment_a_font_val = $data->segment_a_font_val;
               $segment_a_bg_nav_val = $data->segment_a_bg_nav_val;
               $segment_a_font_nav_val = $data->segment_a_font_nav_val;

               $segment_b_bg_val = $data->segment_b_bg_val;
               $segment_b_font_val = $data->segment_b_font_val;
               $segment_b_bg_nav_val = $data->segment_b_bg_nav_val;
               $segment_b_font_nav_val = $data->segment_b_font_nav_val;


               $segment_c_bg_val = $data->segment_c_bg_val;
               $segment_c_bg_header_val = $data->segment_c_bg_header_val;
               $segment_c_bg_contain_val = $data->segment_c_bg_contain_val;
               $segment_c_font_val = $data->segment_c_font_val;


               $segment_d_bg_val = $data->segment_d_bg_val;
               $segment_d_bg_contain_val = $data->segment_d_bg_contain_val;
               $segment_d_font_title_val = $data->segment_d_font_title_val;

               $segment_e_bg_val = $data->segment_e_bg_val;
               $segment_e_font_val = $data->segment_e_font_val;

               //dd($data);
        ?>

                $("#segment_a_bg_color").val("<?= $segment_a_bg_val ?>");
                $("#segment_a_bg_val").val("<?= $segment_a_bg_val ?>");

                $("#segment_a_font_color").val("<?= $segment_a_font_val ?>");
                $("#segment_a_font_val").val("<?= $segment_a_font_val ?>");

                $("#segment_a_bg_nav_color").val("<?= $segment_a_bg_nav_val ?>");
                $("#segment_a_bg_nav_val").val("<?= $segment_a_bg_nav_val ?>");

                $("#segment_a_font_nav_color").val("<?= $segment_a_font_nav_val ?>");
                $("#segment_a_font_nav_val").val("<?= $segment_a_font_nav_val ?>");



                $("#segment_b_bg_color").val("<?= $segment_b_bg_val ?>");
                $("#segment_b_bg_val").val("<?= $segment_b_bg_val ?>");

                $("#segment_b_font_color").val("<?= $segment_b_font_val ?>");
                $("#segment_b_font_val").val("<?= $segment_b_font_val ?>");

                $("#segment_b_bg_nav_color").val("<?= $segment_b_bg_nav_val ?>");
                $("#segment_b_bg_nav_val").val("<?= $segment_b_bg_nav_val ?>");

                $("#segment_b_font_nav_color").val("<?= $segment_b_font_nav_val ?>");
                $("#segment_b_font_nav_val").val("<?= $segment_b_font_nav_val ?>");



                $("#segment_c_bg_color").val("<?= $segment_c_bg_val ?>");
                $("#segment_c_bg_val").val("<?= $segment_c_bg_val ?>");

                $("#segment_c_bg_header_color").val("<?= $segment_c_bg_header_val ?>");
                $("#segment_c_bg_header_val").val("<?= $segment_c_bg_header_val ?>");

                $("#segment_c_bg_contain_color").val("<?= $segment_c_bg_contain_val ?>");
                $("#segment_c_bg_contain_val").val("<?= $segment_c_bg_contain_val ?>");

                $("#segment_c_font_color").val("<?= $segment_c_font_val ?>");
                $("#segment_c_font_val").val("<?= $segment_c_font_val ?>");



                $("#segment_d_bg_color").val("<?= $segment_d_bg_val ?>");
                $("#segment_d_bg_val").val("<?= $segment_d_bg_val ?>");

                $("#segment_d_bg_contain_color").val("<?= $segment_d_bg_contain_val ?>");
                $("#segment_d_bg_contain_val").val("<?= $segment_d_bg_contain_val ?>");

                $("#segment_d_font_title_color").val("<?= $segment_d_font_title_val ?>");
                $("#segment_d_font_title_val").val("<?= $segment_d_font_title_val ?>");


                $("#segment_e_bg_color").val("<?= $segment_e_bg_val ?>");
                $("#segment_e_bg_val").val("<?= $segment_e_bg_val ?>");

                $("#segment_e_font_color").val("<?= $segment_e_font_val ?>");
                $("#segment_e_font_val").val("<?= $segment_e_font_val ?>");

        <?php } ?>
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
        
        // SEGMENT A
        $("#segment_a_bg_color").change(function(){
            var color = $("#segment_a_bg_color").val();
            $("#segment_a_bg_val").val(color);
        });

        $("#segment_a_font_color").change(function(){
            var color = $("#segment_a_font_color").val();
            $("#segment_a_font_val").val(color);
        });

        $("#segment_a_bg_nav_color").change(function(){
            var color = $("#segment_a_bg_nav_color").val();
            $("#segment_a_bg_nav_val").val(color);
        });

        $("#segment_a_font_nav_color").change(function(){
            var color = $("#segment_a_font_nav_color").val();
            $("#segment_a_font_nav_val").val(color);
        });


        // SEGMENT B
        $("#segment_b_bg_color").change(function(){
            var color = $("#segment_b_bg_color").val();
            $("#segment_b_bg_val").val(color);
        });


        $("#segment_b_font_color").change(function(){
            var color = $("#segment_b_font_color").val();
            $("#segment_b_font_val").val(color);
        });


        $("#segment_b_bg_nav_color").change(function(){
            var color = $("#segment_b_bg_nav_color").val();
            $("#segment_b_bg_nav_val").val(color);
        });

        $("#segment_b_font_nav_color").change(function(){
            var color = $("#segment_b_font_nav_color").val();
            $("#segment_b_font_nav_val").val(color);
        });


        // SEGMENT C
        $("#segment_c_bg_color").change(function(){
            var color = $("#segment_c_bg_color").val();
            $("#segment_c_bg_val").val(color);
        });


        $("#segment_c_bg_header_color").change(function(){
            var color = $("#segment_c_bg_header_color").val();
            $("#segment_c_bg_header_val").val(color);
        });


        $("#segment_c_bg_contain_color").change(function(){
            var color = $("#segment_c_bg_contain_color").val();
            $("#segment_c_bg_contain_val").val(color);
        });


        $("#segment_c_font_color").change(function(){
            var color = $("#segment_c_font_color").val();
            $("#segment_c_font_val").val(color);
        });


        // SEGMENT D
        $("#segment_d_bg_color").change(function(){
            var color = $("#segment_d_bg_color").val();
            $("#segment_d_bg_val").val(color);
        });

        $("#segment_d_bg_contain_color").change(function(){
            var color = $("#segment_d_bg_contain_color").val();
            $("#segment_d_bg_contain_val").val(color);
        });

        $("#segment_d_font_title_color").change(function(){
            var color = $("#segment_d_font_title_color").val();
            $("#segment_d_font_title_val").val(color);
        });


        // SEGEMENT E
        $("#segment_e_bg_color").change(function(){
            var color = $("#segment_e_bg_color").val();
            $("#segment_e_bg_val").val(color);
        });


        $("#segment_e_font_color").change(function(){
            var color = $("#segment_e_font_color").val();
            $("#segment_e_font_val").val(color);
        });


    });




</script>


@endsection