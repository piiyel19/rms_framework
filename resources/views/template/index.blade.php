

                    @extends("template.layout.app")

                    @section("content")
                        
                        
                        <div class="container" style="padding-top:30px; padding-bottom: 30px;">

                            <div class="card">
                                <div class="card-header title">Form Create
                                        <span class="search-frame"><input type="text" placeholder="" id="display_search" name="search" style="height: 25px;">
                                            <button type="button" onclick="search_now();" class="search-btn">Search</button>
                                        </span>

                                        <form action="" method="POST" style="display: none;">
                                            @csrf 
                                            <input type="text" value="" id="function_search" name="btn_search">
                                            <button type="submit" id="search_now"></button>
                                        </form>
                                </div>
                                <div class="card-body">
                     
                        <form action="" method="POST"><div class="row">
                                        <div class="col-md-4">
                                            <label>field</label>
                                            <input type="text" class="form-control" name="field1" id="field1" placeholder="">
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <label>field 2</label>
                                            <input type="text" class="form-control" name="field2" id="field2" placeholder="">
                                        </div>
                                    </div></form>
                        
                            </div></div>
                        

                    @endsection
                   