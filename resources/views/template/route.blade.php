@extends('template.layout.setting')

@section('content')
<div class="container" style="padding-top:30px;">
    <div class="row">
        <div class="card">
            <div class="card-body">
                Page Creator - Route


                <div class="row" style="padding-top:30px;">
                	<div class="col-md-12" style="font-weight:700">Example :</div>
                	<div class="col-md-12">
                		<label>Route::{ Method }('/{ Route Name}/{ Parameter }', 'App\Http\Controllers\{ Directory }\	{ Class Name }@{ Function Name }')->name('{ Label }');</label>
                	</div>
                </div>


                <form action="<?= url('/')?>/create_route" method="post">

                    @csrf

                    <input type="hidden" name="id_form" value="<?= rand()?>">

                    <div class="row" style="padding-top:30px">

                    	<div class="col-md-3">
                            <label>* Method</label>
                            <select required class="form-control" name="method">
                            	<option value="POST">POST</option>
                            	<option value="GET">GET</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label>* Route Name</label>
                            <input required type="text" class="form-control" name="route_name" onblur="this.value=removeSpaces(this.value);">
                        </div>

                    </div>


                    <div class="row" style="padding-top:30px">
                        <div class="col-md-3">
                            <label>Parameter</label>
                            <input type="text" class="form-control" name="route_parameter[]" onblur="this.value=removeSpaces(this.value);">
                        </div>
                        <div class="col-md-3" style="padding-top:20px;">
                        	<button type="button" class="btn btn-sm btn-primary" onclick="expand_parameter();">Add</button>
                        </div>

                    </div>


                    <div class="row" style="padding-top:30px" id="list_parameter">
                        
                    </div>


                    <div class="row" style="padding-top:30px">

                    	<div class="col-md-3">
                            <label>Directory</label>
                            <input type="text" class="form-control" name="directory" onblur="this.value=removeSpaces(this.value);">
                        </div>

                        <div class="col-md-3">
                            <label>* Class Name</label>
                            <input required type="text" class="form-control" name="className" onblur="this.value=removeSpaces(this.value);">
                        </div>


                        <div class="col-md-3">
                            <label>* Function Name</label>
                            <input required type="text" class="form-control" name="function_name" onblur="this.value=removeSpaces(this.value);">
                        </div>


                        <div class="col-md-3">
                            <label>* Label</label>
                            <input required type="text" class="form-control" name="label" onblur="this.value=removeSpaces(this.value);">
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
	function expand_parameter()
	{
		$("#list_parameter").append('<div class="col-md-3" style="padding-top:10px;"><label>Parameter</label><input type="text" class="form-control" name="route_parameter[]" onblur="this.value=removeSpaces(this.value);"></div>');
	}
</script>

@endsection