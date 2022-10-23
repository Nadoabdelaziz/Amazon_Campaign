<?php



namespace App\Http\Controllers;

include '../resources/views/partials/head.blade.php';

include '../simple_html_dom.php';

use Illuminate\Support\Facades\Artisan;
use App\Models\Category;
use App\Models\AirFryer;
use App\Models\Cleaner;
use App\Models\Flosser;
use App\Models\Chair;
use App\Models\FoodProcessor;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

use App\Models\HairStraightner;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index($name){
        $cat = Category::where('name',$name)->first();

        $data=array();

        switch($name){

            case 'Air Fryers' :
                $data = AirFryer::all();
                break;

            case 'Carpet Cleaners':
                $data = Cleaner::all();
                break;

            case 'Hair Straightener':
                $data = HairStraightner::all();
                break;
                
            case 'Food Processors':
                $data = FoodProcessor::all();
                break;
            
            case 'Water Flossers':
                $data = Flosser::all();
                break;    

            case 'Fridge':
                $data = Fridge::all();
                break; 

            default:
                break;      
        }



        return view('partials.scrape',['cat' => $cat,'data'=>$data]);
    }

    public function AddCat(Request $request)
    {

        if (!Schema::hasTable($request->tbl_name))
        {
            Artisan::call('make:model ' . $request->cat_name);

            Artisan::call('make:migration create_'.$request->tbl_name.'_table --create='.$request->tbl_name);

            Artisan::call('migrate');

            // Do something if exists
        }

        Category::create([
            'name' => $request->cat_name,
            'description' => $request->cat_link,
            'col_val' => 1,
            'col_nxt' => 0,
            'tbl_name' => $request->tbl_name
        ]);

        
        // $parm=$request->cat_link;

       
        return redirect()->back()->with('success', 'Succesfully Added New'.$request->name .'Category',['cat_name'=>$request->cat_name]);   
        
    }

    public function LoadData($category)
    {
        $cat = Category::where('name',$category)->first();

        $html=file_get_html($cat->description);

        for ($i=0; $i < 6 ; $i++) { 

            $results=$html->find('div.item-card',$i);
            $result_m[$i] = $results->find('div.detail_text',1);
            $title[$i] = $results->find('strong',1);
            $img[$i] = $results->find('img',3);

            print_r($title[0]);
            // print_r($methods);
            die();


            // $Chai::create([
            //     'title' => $title[$i],
            //     'img' => $img[$i],
            //     'link' => $img[$i],
            // ]);
            DB::table('chairs')->insert([
                 'title' => $title[$i],
                 'img' => $img[$i],
                 'link' => $img[$i],
            ]);
                        
        }



        $data = DB::table('chairs')->get();


        // $data = $category::all();


        // dd($category);
        return view('partials.scrape',['cat' => $category,'data'=>$data]);
    }
}