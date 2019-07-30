<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use App\Product;
use App\Productpics;
use App\News;
use Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        //  $news= new News();
        //$pics=DB::select('select * from product_pics ');
        $program=DB::select('select * from program ORDER BY program.updated_at DESC ');
        $news=DB::select('select * from news where duration > ?  ORDER BY `created_at` DESC', [Carbon::now()]);
        $aboutus=DB::select('select * from aboutus');
        return view('home', compact('aboutus', 'program', 'news'));
    }
    public function showcatpro()
    {
        $products=DB::table('product')->get();
        if ($products) {
            $pics=productpics::all();
            return view('welcome', compact('products', 'pics'));
        } else {
            return view('welcome');
        }
    }
    public function productinfo($id)
    {
        $product=Product::findOrFail($id);

        $pics=DB::table('product_pics')->where('product_id', '=', $id)->get();
        $products=DB::table('product')->where('id', '=', $id)->get();
        return view('productinfo2', compact('products', 'pics'));
    }
    public function searchproduct(Request $request)
    {
        if ($request->ajax()) {
            $output="";

            $products=DB::table('product')->where('Name', 'LIKE', '%'.$request->searchproduct."%")->get();

            if ($products) {
                foreach ($products as $obj) {
                    $output.='
<div class="item showService col-sm-4" style="height:50vh" >
                                <div class="thumbnail item-box"style="border:none;" style="height:auto;
        max-width:100%;
        border:none;
        display:block;">
                                    <div class="overlayContainer">

                                        <img src="/storage/'.$obj->id.'/product_pic//'.\App\Productpics::where(['product_id' => $obj->id])->pluck('pic')->first().'" class="img-circle" alt="no current image " width="100%" height="236" style="height:auto;
        max-width:100%;
        border:none;
        display:block;">



                                        </div>
                                    <div class="caption">
                                        <p>
                                          '.$obj->Name.'
                                        </p>
                                      </div>
</div>
                                        <div >
                                          <a href="/productinfo/'.$obj->id.'" style=" position:relative;"><button class="btn btn-success" >Show Product Health Facts</button></a>
                                          &nbsp&nbsp&nbsp

  <br><br><br>
                                        </div>


                                    </div>

                            </div>

 <div class="span4" >
    <div class="block">
<a href="/productinfo/'.$obj->id.'">
  <h2>   <strong>'.$obj->Name.'</a>  </h2>

  <hr style="border-top: 1px solid #ccc;
  ">

    <h2>About <span>Product</span></h2>
    <table class="table table-dark">
      <thead>

        <tr style="background-color:green;font-family:Lucida Grande;">
          <th >Size and Specification</th>
          <th >Trademark</th>


        </tr>
      </thead>

        <tbody>

        <tr style="background-color:#C6C6C4;color:black;font-family:Lucida Grande;">'.

'<td>'.$obj->SizeandSpecifications.'</td>'.
'<td>'.$obj->Trademark.'</td>'.


'  </tr>
  <br>
</tbody>
</table> </div>
</div><br><br>';
                }
                return Response($output);
            }
        }
    }
}
