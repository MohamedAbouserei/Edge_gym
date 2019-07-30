<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\News;
use App\Offer;
use App\Program;
use App\Product;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {


            $dashboard = User::get();


        return view('admin.dashboarceo.index', compact('dashboard'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index2(Request $request)
    {
$array[]=null;
      $news = News::get();
      $offers = Offer::get();
      $program = Program::get();
      $product = Product::get();

        return view('admin.dashboaradmin.index', compact('news','offers','program','product'));
    }




}
