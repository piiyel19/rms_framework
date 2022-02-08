@extends('template.layout.setting')

@section('content')
<div class="container" style="padding-top:30px;">
    <div class="row">
        <div class="card">
            <div class="card-body">
                Page Creator - View


                <form action="<?= url('/')?>/create_view" method="post">

                    @csrf

                    <input type="hidden" name="id_form" value="<?= rand()?>">

                    <div class="row" style="padding-top:30px">

                        <div class="col-md-4">
                            <label>Title Page</label>
                            <input type="text" class="form-control" name="title_page">
                        </div>

                        <div class="col-md-4">
                            <label>Function</label>
                            <br><br>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input btn_show" name="function_file" type="radio" id="btn_create" value="Create" checked>
                              <label class="form-check-label" for="inlineCheckbox1">Create</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input btn_show" name="function_file" type="radio" id="btn_edit" value="Edit">
                              <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input btn_show" type="radio" name="function_file"  id="btn_list" value="List" >
                              <label class="form-check-label" for="inlineCheckbox3">List</label>
                            </div>

                            <div class="form-check form-check-inline">
                              <input class="form-check-input" name="function_file" type="radio" id="btn_delete" value="Action" >
                              <label class="form-check-label" for="inlineCheckbox3">List With Action</label>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <label>Class Name</label>
                            <input type="text" class="form-control" name="class_name" onblur="this.value=removeSpaces(this.value);">
                        </div>

                        <div class="col-md-4">
                            <label>Folder Path <span style="font-size:10px; color:red;"><i>(Option : If your have folder for view)</i></span></label>
                            <input type="text" class="form-control" name="view_path" placeholder="Start with '\'" onblur="this.value=removeSpaces(this.value);">
                        </div>

                    </div>


                    <div class="row" style="padding-top:30px">

                            <div class="col-md-4">
                                <label>Label</label>
                                <input type="text" class="form-control" name="label_name">
                            </div>

                            <div class="col-md-4">
                                <label>Field</label>
                                <input type="text" class="form-control" name="field_name" onblur="this.value=removeSpaces(this.value);">
                            </div>


                            <div class="col-md-4">
                                <label>Action</label>
                                <br>
                                <button type="button" class="btn btn-primary btn-sm" onclick="add_field(); return false;">Add</button>
                            </div>
                            
                        </div>



                    <div class="row field_div" style="padding-top:30px">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Label</th>
                                    <th>Field</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody id="list_fields">
                                    
                                </tbody>
                            </table>
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


<script type="text/javascript">
    
    var base = "<?= url('/')?>";

    function add_field()
    {
        var label_name = $("input[name='label_name']").val();
        var id_form = $("input[name='id_form']").val();
        var field_name = $("input[name='field_name']").val();

        var data = {
            label_name: label_name,
            id_form : id_form,
            field_name : field_name,
            _token: "{{ csrf_token() }}",
        };

        $.ajax({
            type:'POST',
            url:base+'/view_fields',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data : data,
            success:function(data){
                $("input[name='label_name']").val('');
                $("input[name='field_name']").val('');
                list_field();
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
            url:base+'/view_list_field',
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
                list_field();
            }
        });
    }


    function removeSpaces(string) {
        return string.split(' ').join('');
    }

    
</script>

@endsection