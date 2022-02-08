@extends('template.layout.setting')

@section('content')
<div class="container" style="padding-top:30px;">
    <div class="row">
        <div class="card">
            <div class="card-body">
                Page Creator - Controller


                <form action="<?= url('/')?>/create_controller" method="post">

                    @csrf

                    <input type="hidden" name="id_form" value="<?= rand()?>">

                    <div class="row" style="padding-top:30px">
                        <div class="col-md-4">
                            <label>Class Name</label>
                            <input type="text" class="form-control" name="class_name" required onblur="this.value=removeSpaces(this.value);">
                        </div>

                        <div class="col-md-4">
                            <label>Folder Path <span style="font-size:10px; color:red;"><i>(Option : If your have folder for controller)</i></span></label>
                            <input type="text" class="form-control" name="controller_path" onblur="this.value=removeSpaces(this.value);" placeholder="Start with '\'">
                        </div>

                    </div>

                    <div class="row" style="padding-top:30px">
                        <div class="col-md-4">
                            <label>Function</label>
                            <br><br>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" name="function_file" type="radio" id="inlineCheckbox1" value="Create" checked>
                              <label class="form-check-label" for="inlineCheckbox1">Create</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" name="function_file" type="radio" id="inlineCheckbox2" value="Edit">
                              <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="function_file"  id="inlineCheckbox3" value="Delete" >
                              <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                            </div>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" name="function_file" type="radio" id="inlineCheckbox3" value="List" >
                              <label class="form-check-label" for="inlineCheckbox3">List</label>
                            </div>

                        </div>

                        <div class="col-md-2">
                            <label>Function Name</label>
                            <input type="text" class="form-control" name="function_name"  onblur="this.value=removeSpaces(this.value);">
                        </div>

                        <div class="col-md-2">
                            <label>Table Name</label>
                            <input type="text" class="form-control" name="model_name" onblur="this.value=removeSpaces(this.value);">
                        </div>

                        <div class="col-md-2">
                            <label>Return View</label>
                            <input type="text" class="form-control" name="return_view" onblur="this.value=removeSpaces(this.value);" placeholder="Folder.file">
                        </div>

                        <div class="col-md-2">
                            <label>Action</label>
                            <br>
                            <button class="btn btn-primary btn-sm" onclick="add_function(); return false;">Add</button>
                        </div>

                    </div>


                    <div class="row" style="padding-top:30px">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Function</th>
                                    <th>Function Name</th>
                                    <th>Table Name</th>
                                    <th>Return View</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody id="list_function">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row" style="padding-top:30px">
                        <div class="col-md-4">
                            <label>Field</label>
                            <input type="text" class="form-control" name="field_name" onblur="this.value=removeSpaces(this.value);">
                        </div>

                        <div class="col-md-4">
                            <label>Action</label>
                            <br>
                            <button class="btn btn-primary btn-sm" onclick="add_field(); return false;">Add</button>
                        </div>
                        
                    </div>



                    <div class="row" style="padding-top:30px">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Field</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody id="list_fields">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row" style="padding-top:30px; float: right;">
                        <button class="btn btn-success btn-sm" type="submit">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    var base = "<?= url('/')?>";

    function add_function()
    {
        var id_form = $("input[name='id_form']").val();

        var function_file = $('input[name="function_file"]:checked').val();
        var function_name = $("input[name='function_name']").val();
        var model_name = $("input[name='model_name']").val(); 
        var return_view = $("input[name='return_view']").val(); 


        var data = {
            id_form : id_form,
            function_file : function_file,
            function_name : function_name,
            model_name : model_name,
            return_view : return_view,
            _token: "{{ csrf_token() }}",
        };

        $.ajax({
            type:'POST',
            url:base+'/controller_function',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data : data,
            success:function(data){

                $("input[name='function_name']").val('');
                $("input[name='model_name']").val(''); 
                $("input[name='return_view']").val(''); 

                list_function();
            }
        });

    }

    function add_field()
    {
        var id_form = $("input[name='id_form']").val();
        var field_name = $("input[name='field_name']").val();

        var data = {
            id_form : id_form,
            field_name : field_name,
            _token: "{{ csrf_token() }}",
        };

        $.ajax({
            type:'POST',
            url:base+'/controller_fields',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data : data,
            success:function(data){
                $("input[name='field_name']").val('');
                list_field();
            }
        });
    }


    function list_function()
    {
        var id_form = $("input[name='id_form']").val();
        var data = {
            id_form : id_form,
            _token: "{{ csrf_token() }}",
        };

        $.ajax({
            type:'POST',
            url:base+'/controller_list_function',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data : data,
            success:function(data){
                if(data){
                    $("#list_function").html(data);
                } else {
                    $("#list_function").html('');
                }
            }
        });

    }



    function list_field()
    {
        var id_form = $("input[name='id_form']").val();
        var data = {
            id_form : id_form,
            _token: "{{ csrf_token() }}",
        };

        $.ajax({
            type:'POST',
            url:base+'/controller_list_field',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data : data,
            success:function(data){
                if(data){
                    $("#list_fields").html(data);
                } else {
                    $("#list_fields").html('');
                }
            }
        });

    }


    function delete_direct(table,id)
    {
        var id_form = $("input[name='id_form']").val();
        var data = {
            id_form : id_form,
            table:table,
            id :id,
            _token: "{{ csrf_token() }}",
        };

        $.ajax({
            type:'POST',
            url:base+'/delete_direct',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data : data,
            success:function(data){
                list_function();
                list_field();
            }
        });
    }


    function removeSpaces(string) {
        return string.split(' ').join('');
    }
</script>

@endsection