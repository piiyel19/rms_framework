<?php

namespace App\Http\Controllers;


use File;

use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AutomateCmdLine extends Controller
{
    //
    public function write_controller($id_form)
    {


        $data_hdrs = DB::table('controller_hdrs')->where('id_form',$id_form)->get(); 


        if(count($data_hdrs)>0){

            $class_name = '';
            $controller_path = '';

            foreach($data_hdrs as $hdrs)
            {
                $class_name = $hdrs->class_name;
                $controller_path = $hdrs->controller_path;
            }

            $class = $class_name;
            $directory = $controller_path;

            $path_folder = 'C:\inetpub\wwwroot\rms_framework\app\Http\Controllers'.$directory;

            //dd($path_folder);
            if (!file_exists($path_folder)) {
                File::makeDirectory($path_folder, 755, true);
            }


            $path_base = 'C:\inetpub\wwwroot\rms_framework\app\Http\Controllers'.$directory;
            // $file = '\TestController.php';

            $slash = "/";
            $slash = str_replace('/', '\\', $slash);

            $filename = $slash.$class;
            $file = '.php';

            $path = $path_base.$filename.$file;

            //dd($parameter);

            $myfile = fopen($path, "w") or die("Unable to open file!");


            

            $function_dtls = DB::table('controller_function_dtls')->where('id_form',$id_form)->get(); 

            if(count($function_dtls)>0){

                $text = '';
                foreach($function_dtls as $fun_dtls)
                {
                    $function_file = $fun_dtls->function_file;
                    $function_name = $fun_dtls->function_name;
                    $model_name = $fun_dtls->model_name; 
                    $return_view = $fun_dtls->return_view;


                    $text .= $this->make_structure_function($id_form,$function_file,$function_name,$model_name,$return_view);

                }
            }



            $class = ucwords($class);

            $txt = '<?php
                    // Library Declare
                    namespace App\Http\Controllers'.$directory.';
                    use Illuminate\Http\Request;
                    use Illuminate\Support\Facades\Auth;
                    use Illuminate\Support\Facades\Redirect;
                    use Session;

                    use App\Http\Controllers\Controller;

                    class '.$class.' extends Controller
                    {
                        public function __construct()
                        {
                            $this->middleware("auth");
                            date_default_timezone_set("Asia/Kuala_Lumpur"); //Timezone
                            //$date = date("Y-m-d H:i:s");
                        }


                        
                        '.$text.'
                        


                        

                        
                    }
            ';

            fwrite($myfile, "\n". $txt);
            fclose($myfile);

        }

    }




    public function make_structure_function($id_form,$function_file,$function_name,$model_name,$return_view)
    {

        $data_params = DB::table('controller_parameter_dtls')->where('id_form',$id_form)->get(); 

        $param = '';
        if(count($data_params)>0){
            foreach($data_params as $params)
            {
                $field_name = $params->field_name;

                $param .= '$'.$field_name.' = $this->request("'.$field_name.'");';
            }
        }



        $contain = '';
        $container = '';
        if(count($data_params)>0){
            foreach($data_params as $params)
            {
                $field_name = $params->field_name;

                $contain .= '"$'.$field_name.'"=>$'.$field_name.",";
            }

            //dd($contain);
            $container = rtrim($contain,',');
            //dd($container);
        }



        $blade = '';
        if(!empty($return_view)){
            $blade = "return view('".$return_view."');";
        }


        if($function_file=='Create')
        {
            $text = '
                    public function create(Request $request)
                    {
                        '.$param.'

                        DB::table("'.$model_name.'")->insert([
                            '.$container.'
                        ]);


                        '.$blade.'
                    }
                ';   
        } else if($function_file=='Edit'){
            
            $text = '
                    public function update(Request $request )
                    {
                        $id = $request->id;
                        '.$param.'

                        DB::table("'.$model_name.'")->where("id",$id)
                        ->update([
                            '.$container.'
                        ]);

                        '.$blade.'

                    }
                '; 

        }  else if($function_file=='Delete'){

            $text = '
                    public function delete(Request $request)
                    {
                        $id = $request->id;
                        DB::table("'.$model_name.'")->where("id",$id)->delete();

                        '.$blade.'

                    }
                ';  

        }  else if($function_file=='List'){

            $text = '
                    public function list(Request $request)
                    {
                        $id = $request->id;
                        DB::table("'.$model_name.'")->where("id",$id)->get();

                        '.$blade.'

                    }
                ';  

        }  


        return $text;
    }


    public function get_insert()
    {
        $text = '
                    public function create(Request $request)
                    {
                        $test = $this->request("test");

                        User::create([
                            "test"=>$test
                        ]);
                    }
                ';   
        return $text;      
    }


    public function get_update()
    {
        $text = '
                    public function update(Request $request )
                    {
                        $id = $request->id;
                        $test = $request->test;

                        User::where("id",$id);
                        ->update([
                            "test"=>$test
                        ]);

                    }
                ';   
        return $text;
    }



    public function get_delete()
    {
        $text = '
                    public function delete(Request $request)
                    {
                        $id = $request->id;
                        DB::table("User")->where("id",$id)->delete();

                    }
                ';   
        return $text;
    }




    public function get_list()
    {
        $text = '
                    public function list()
                    {

                        return view("nama_view/list");
                    }
                ';   
        return $text;
    }



    public function write_model($id_form)
    {
        $data_hdrs = DB::table('model_hdrs')->where('id_form',$id_form)->get(); 


        if(count($data_hdrs)>0){

            $class_name = '';
            $model_path = '';

            foreach($data_hdrs as $hdrs)
            {
                $class_name = $hdrs->class_name;
                $model_path = $hdrs->model_path;
            }

            $class = $class_name;
            $directory = $model_path;

            $path_folder = 'C:\inetpub\wwwroot\rms_framework\app\Http\Models'.$directory;

            //dd($path_folder);
            if (!file_exists($path_folder)) {
                File::makeDirectory($path_folder, 755, true);
            }


            $path_base = 'C:\inetpub\wwwroot\rms_framework\app\Http\Models'.$directory;
            // $file = '\TestController.php';

            $slash = "/";
            $slash = str_replace('/', '\\', $slash);

            $filename = $slash.$class;
            $file = '.php';

            $path = $path_base.$filename.$file;

            //dd($parameter);

            $myfile = fopen($path, "w") or die("Unable to open file!");



            $data_params = DB::table('model_parameter_dtls')->where('id_form',$id_form)->get(); 


            $contain = '';
            $container = '';
            if(count($data_params)>0){
                foreach($data_params as $params)
                {
                    $field_name = $params->field_name;

                    $contain .= '"'.$field_name.'",';
                }

                //dd($contain);
                $container = rtrim($contain,',');
                //dd($container);
            }


            $txt =  '
                        <?php

                        namespace App\Models'.$model_path.';

                        use Illuminate\Database\Eloquent\Factories\HasFactory;
                        use Illuminate\Database\Eloquent\Model;

                        use Illuminate\Notifications\Notifiable;

                        class '.$class.' extends Model
                        {
                            use HasFactory;
                            use Notifiable;



                            protected $fillable = [
                                '.$container.'
                            ];
                        }
                    ';

            fwrite($myfile, "\n". $txt);
            fclose($myfile);
        }

    }


    public function write_view($id_form)
    {
        
        $data_hdrs = DB::table('view_hdrs')->where('id_form',$id_form)->get(); 


        if(count($data_hdrs)>0){

            $class_name = '';
            $model_path = '';
            $function_file = '';
            $title_page = '';

            foreach($data_hdrs as $hdrs)
            {
                $class_name = $hdrs->class_name;
                $view_path = $hdrs->view_path;
                $function_file = $hdrs->function_file;
                $title_page = $hdrs->title_page;
            }

            $class = $class_name;
            $directory = $view_path;







            $data_params = DB::table('view_parameter_dtls')->where('id_form',$id_form)->get(); 


            




            $structure = '';
            if(($function_file=='Create')||($function_file=='Edit')){

                $contain = '';
                $container = '';
                if(count($data_params)>0){
                    $container .= '<form action="" method="POST">';
                    $container .= '<div class="row">';
                    foreach($data_params as $params)
                    {
                        $label_name = $params->label_name;
                        $field_name = $params->field_name;

                        $container .= '
                                        <div class="col-md-4">
                                            <label>'.$label_name.'</label>
                                            <input type="text" class="form-control" name="'.$field_name.'" id="'.$field_name.'" placeholder="">
                                        </div>
                                    ';
                    }


                    $container .= '</div>';
                    $container .= '</form>';

                    //dd($contain);
                    //$container = rtrim($contain,',');
                    //dd($container);
                }


            } else if($function_file=='List'){

                $contain = '';
                $container = '';

                $header = '';
                $thead = '';
                $tbody = '';
                $tr = '';
                $tr2 = '';
                $th = '';
                $tb = '';
                $thead2 = '';
                $tbody2 = '';
                $header2 = '';

                $i=0;
                if(count($data_params)>0){
                    $header = ' <div class="row">
                                    <div class="col-md-12">
                                    <table class="table">';

                    $thead = '<thead>';
                    $tbody = '<tbody>';
                    $tr = '<tr>';
                    $class = 'first_row';

                    $th .= '<th class="'.$class.'">No</th>';
                    $tb .= '<td class="'.$class.'">1</td>';

                    foreach($data_params as $params)
                    {
                        $label_name = $params->label_name;
                        $field_name = $params->field_name;

                        $th .= '<th class="">'.$label_name.'</th>';
                        $tb .= '<td class="">'.$field_name.'</td>';
                        

                        

                        $i++;
                    }
                    $tr2 = '</tr>';
                    $thead2 = '</thead>';
                    $tbody2 = '</tbody>';

                    $header2 = '</table></div></div>';


                    $container = $header.$thead.$tr.$th.$tr2.$thead2.$tbody.$tr.$tb.$tr2.$tbody2.$header2;

                }
                

            } else if($function_file=='Action'){

                $contain = '';
                $container = '';

                $header = '';
                $thead = '';
                $tbody = '';
                $tr = '';
                $tr2 = '';
                $th = '';
                $tb = '';
                $thead2 = '';
                $tbody2 = '';
                $header2 = '';


                if(count($data_params)>0){
                    $header = ' <div class="row">
                                    <div class="col-md-12">
                                    <table class="table">';

                    $thead = '<thead>';
                    $tbody = '<tbody>';
                    $tr = '<tr>';
                    $class = 'first_row';
                    $i = 0;

                    $th .= '<th class="'.$class.'">No</th>';
                    $tb .= '<td class="'.$class.'">1</td>';

                    foreach($data_params as $params)
                    {
                        $label_name = $params->label_name;
                        $field_name = $params->field_name;

                        
                        $th .= '<th class="">'.$label_name.'</th>';
                        $tb .= '<td class="">'.$field_name.'</td>';
                        

                        

                        $i++;
                    }
                    $tr2 = '</tr>';
                    $thead2 = '</thead>';
                    $tbody2 = '</tbody>';

                    $header2 = '</table></div></div>';


                    $th_edit = '<th>Edit</th>';
                    $th_delete = '<th>Delete</th>';
                    $td_edit = '<td><center><button class="btn btn-danger btn-sm">Edit</button></center></td>';
                    $td_delete = '<td><center><button class="btn btn-danger btn-sm">Delete</button></center></td>';


                    $container = $header.$thead.$tr.$th.$th_edit.$th_delete.$tr2.$thead2.$tbody.$tr.$tb.$td_edit.$td_delete.$tr2.$tbody2.$header2;

                }

            }  




            $title = '
                        <div class="container segment_d_container">

                            <div class="card">
                                <div class="card-header title">'.$title_page.'
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
                     ';


            $endtitle = '
                            </div></div>
                        ';

        

            $path_folder = 'C:\inetpub\wwwroot\rms_framework\resources\views'.$directory;

            //dd($path_folder);
            if (!file_exists($path_folder)) {
                File::makeDirectory($path_folder, 755, true);
            }


            $path_base = 'C:\inetpub\wwwroot\rms_framework\resources\views'.$directory;
            // $file = '\TestController.php';

            $slash = "/";
            $slash = str_replace('/', '\\', $slash);


            $class = $class_name;

            $filename = $slash.$class;
            $file = '.blade.php';

            $path = $path_base.$filename.$file;

            //dd($parameter);

            $myfile = fopen($path, "w") or die("Unable to open file!");

            // $create = $this->get_form_create();
            // $update = $this->get_form_update();
            // $list = $this->get_form_list();
            // $list_with_action = $this->get_form_list_with_action();

            $txt = '
                    @extends("template.layout.app")

                    @section("content")
                        
                        '.$title.'
                        '.$container.'
                        '.$endtitle.'

                    @endsection
                   ';

            fwrite($myfile, "\n". $txt);
            fclose($myfile);

        }
    }


    public function get_form_create()
    {
        $text = '
                    <form action="./namaController/create" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Test</label>
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                    </form>
                ';
        return $text;
    }


    public function get_form_update()
    {
        $text = '
                    <form action="./namaController/update" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Test</label>
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                    </form>
                ';
        return $text;
    }



    public function get_form_list()
    {
        $text = '
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                ';
        return $text;
    }


    public function get_form_list_with_action()
    {
        $text = '
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                </td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                ';
        return $text;
    }



    // CONTROLLER
    public function controller_function(Request $request)
    {
        //dd($_POST);
        $id_form = $request->id_form;
        $function_file = $request->function_file;
        $function_name = $request->function_name;
        $model_name = $request->model_name;
        $return_view = $request->return_view;

        DB::table('controller_function_dtls')->insert([
            'id_form'=>$id_form,
            'function_file'=>$function_file,
            'function_name'=>$function_name,
            'model_name'=>$model_name,
            'return_view'=>$return_view
        ]);
    }


    public function controller_fields(Request $request)
    {
        $id_form = $request->id_form;
        $field_name = $request->field_name;

        DB::table('controller_parameter_dtls')->insert([
            'id_form'=>$id_form,
            'field_name'=>$field_name
        ]);
    }

    public function create_controller(Request $request)
    {
        $id_form = $request->id_form;
        $class_name = $request->class_name;
        $controller_path = $request->controller_path;

        DB::table('controller_hdrs')->insert([
            'id_form'=>$id_form,
            'class_name'=>$class_name,
            'controller_path'=>$controller_path
        ]);


        $this->write_controller($id_form);


        return redirect('/controller')->with('msg_succes', 'Success !');
    }

    public function controller_list_function(Request $request)
    {
        $id_form = $request->id_form;
        $data_params = DB::table('controller_function_dtls')->where('id_form',$id_form)->get(); 

        $param = '';
        if(count($data_params)>0){
            foreach($data_params as $params)
            {
                $id = $params->id;
                $function_file = $params->function_file;
                $function_name = $params->function_name;
                $model_name = $params->model_name;
                $return_view = $params->return_view;

                $table = "'controller_function_dtls'";

                echo '
                        <tr>
                            <td>'.$function_file.'</td>
                            <td>'.$function_name.'</td>
                            <td>'.$model_name.'</td>
                            <td>'.$return_view.'</td>
                            <td><button type="button" class="btn btn-sm btn-danger" onclick="delete_direct('.$table.','.$id.'); return false;">Delete</button></td>
                        </tr>
                     ';

            }
        }
    }


    public function controller_list_field(Request $request)
    {
        $id_form = $request->id_form;
        $data_params = DB::table('controller_parameter_dtls')->where('id_form',$id_form)->get(); 

        $param = '';
        if(count($data_params)>0){
            foreach($data_params as $params)
            {
                $id = $params->id;
                $field_name = $params->field_name;

                $table = "'controller_parameter_dtls'";

                echo '
                        <tr>
                            <td>'.$field_name.'</td>
                            <td><button type="button" class="btn btn-sm btn-danger" onclick="delete_direct('.$table.','.$id.'); return false;">Delete</button></td>
                        </tr>
                     ';

            }
        }
    }


    public function delete_direct(Request $request)
    {
        $id_form = $request->id_form;
        $id = $request->id;
        $table = $request->table;

        DB::table($table)->where('id_form',$id_form)->where('id',$id)->delete();
    }
    // // END



    // MODEL 
    public function model_fields(Request $request)
    {
        $id_form = $request->id_form;
        $field_name = $request->field_name;

        DB::table('model_parameter_dtls')->insert([
            'id_form'=>$id_form,
            'field_name'=>$field_name
        ]);
    }


    public function model_list_field(Request $request)
    {
        $id_form = $request->id_form;
        $data_params = DB::table('model_parameter_dtls')->where('id_form',$id_form)->get(); 

        $param = '';
        if(count($data_params)>0){
            foreach($data_params as $params)
            {
                $id = $params->id;
                $field_name = $params->field_name;

                $table = "'model_parameter_dtls'";

                echo '
                        <tr>
                            <td>'.$field_name.'</td>
                            <td><button type="button" class="btn btn-sm btn-danger" onclick="delete_direct('.$table.','.$id.'); return false;">Delete</button></td>
                        </tr>
                     ';

            }
        }
    }


    public function create_model(Request $request)
    {
        $id_form = $request->id_form;
        $class_name = $request->class_name;
        $model_path = $request->model_path;

        DB::table('model_hdrs')->insert([
            'id_form'=>$id_form,
            'class_name'=>$class_name,
            'model_path'=>$model_path
        ]);


        $this->write_model($id_form);


        return redirect('/model')->with('msg_succes', 'Success !');
    }
    // END



    // START VIEW
    public function view_fields(Request $request)
    {
        $id_form = $request->id_form;
        $label_name = $request->label_name;
        $field_name = $request->field_name;

        DB::table('view_parameter_dtls')->insert([
            'id_form'=>$id_form,
            'label_name'=>$label_name,
            'field_name'=>$field_name
        ]);
    }


    public function create_view(Request $request)
    {
        $id_form = $request->id_form;
        $title_page = $request->title_page;
        $function_file = $request->function_file;
        $class_name = $request->class_name;
        $view_path = $request->view_path;

        DB::table('view_hdrs')->insert([
            'id_form'=>$id_form,
            'title_page'=>$title_page,
            'function_file'=>$function_file,
            'class_name'=>$class_name,
            'view_path'=>$view_path
        ]);


        $this->write_view($id_form);


        return redirect('/view')->with('msg_succes', 'Success !');
    }


    public function view_list_field(Request $request)
    {
        $id_form = $request->id_form;
        $data_params = DB::table('view_parameter_dtls')->where('id_form',$id_form)->get(); 

        $param = '';
        if(count($data_params)>0){
            foreach($data_params as $params)
            {
                $id = $params->id;
                $label_name = $params->label_name;
                $field_name = $params->field_name;

                $table = "'view_parameter_dtls'";

                echo '
                        <tr>
                            <td>'.$label_name.'</td>
                            <td>'.$field_name.'</td>
                            <td><button type="button" class="btn btn-sm btn-danger" onclick="delete_direct('.$table.','.$id.'); return false;">Delete</button></td>
                        </tr>
                     ';

            }
        }
    }
    // END



    // ROUTE 
    public function create_route(Request $request)
    {   
        $id_form = $request->id_form;
        $method = $request->method;
        $route_name = $request->route_name;
        $route_parameter = $request->route_parameter;
        $directory = $request->directory;
        $className = $request->className;
        $function_name = $request->function_name;
        $label = $request->label;

        $check = count($route_parameter);
        
        if($check>0){
            for($i=0;$i<$check;$i++){
                //dd($route_parameter);
                $param = $route_parameter[$i];

                if($param==''){

                } else {
                    DB::table('route_parameter')->insert([
                        'id_form'=>$id_form,
                        'route_parameter'=>$param
                    ]);
                }
                
                
            }
        }


        DB::table('route_hdrs')->insert([
                    'id_form'=>$id_form,
                    'method'=>$method,
                    'route_name'=>$route_name,
                    'directory'=>$directory,
                    'className'=>$className,
                    'function_name'=>$function_name,
                    'label'=>$label
                ]);



        $data = DB::table('route_parameter')->where('id_form',$id_form)->get();
        $param_list = '';
        if(count($data)>0){
            foreach($data as $dt)
            {
                $route_parameter = $dt->route_parameter;
                if(!empty($route_parameter)){ $route_parameter = '{'.$route_parameter.'}'; }
                $param_list .= '/'.$route_parameter;
            }
        }



        $hdrs = DB::table('route_hdrs')->where('id_form',$id_form)->get();
        if(!empty($hdrs)){
            foreach($hdrs as $hd)
            {
                $method = $hd->method;
                $route_name = $hd->route_name;
                $directory = $hd->directory;

                $backslash = '\A';
                $backslash = rtrim($backslash, "A");

                if(!empty($directory)){

                    

                    $directory = $backslash.$directory;

                } else {

                }

                $className = $hd->className;
                $function_name = $hd->function_name;
                $label = $hd->label;

                if($method=='POST'){
                    $text = "Route::post('/".$route_name.$param_list."', 'App\Http\Controllers".$directory.$backslash.$className."@".$function_name."')->name('".$label."');".PHP_EOL;
                } else {
                    $text = "Route::get('/".$route_name.$param_list."', 'App\Http\Controllers".$directory.$backslash.$className."@".$function_name."')->name('".$label."');".PHP_EOL;
                }


                //dd($text);
            }
        }



        $path_base = 'C:\inetpub\wwwroot\rms_framework\routes\web.php';
        $fp = fopen($path_base, 'a');//opens file in append mode  


        fwrite($fp, $text);
        fclose($fp);  
          
        // echo "File appended successfully";
        return redirect('/route')->with('msg_succes', 'Success !');  
    }


    public function routeClear()
    {
        \Artisan::call('route:clear');
        return redirect('/route')->with('msg_succes', 'Success !'); 
    }


    public function routeCache()
    {
        \Artisan::call('route:cache');
        return redirect('/rms/route')->with('msg_succes', 'Success !'); 
    }


    public function viewClear()
    {
        \Artisan::call('view:clear');
        return redirect('/route')->with('msg_succes', 'Success !'); 
    }


    public function viewCache()
    {
        \Artisan::call('view:cache');
        return redirect('/route')->with('msg_succes', 'Success !'); 
    }

}
