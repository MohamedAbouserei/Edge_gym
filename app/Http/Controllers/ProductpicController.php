<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use Storage;
use App\Productpics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductpicController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $productpic = Productpics::latest('id')->paginate($perPage);
        } else {
            $productpic = Productpics::latest('id')->paginate($perPage);
        }

        return view('admin.productpic.index', compact('productpic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $products=Product::all();
        return view('admin.productpic.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'pic'=>'required|file|image|max:20000',
            'product_id'=>'required|numeric|exists:product,id',
    ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/productpic')->with('errors', $errors);
        }
        $requestData = $request->all();

        if ($this->storeimage($request->file('pic'), $requestData['product_id'])) {
            $requestData['pic']=$request->product_id.'_'.$request->file('pic')->getClientOriginalName();

            Productpics::create($requestData);

            return redirect('admin/productpic')->with('flash_message', 'Productpic added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $productpic = Productpics::findOrFail($id);

        return view('admin.productpic.show', compact('productpic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $products=Product::all();

        $productpic = Productpics::findOrFail($id);

        return view('admin.productpic.edit', compact('productpic', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'pic'=>'required|file|image|max:20000',
            'product_id'=>'required|numeric|exists:product,id',
    ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/productpic')->with('errors', $errors);
        }
        $requestData = $request->all();

        $productpic = Productpics::findOrFail($id);
        $productpic->update($requestData);

        return redirect('admin/productpic')->with('flash_message', 'Productpic updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $suser=Productpics::findorfail($id);
        $this->destroyimage($suser->product_id, $suser->pic);
        Productpics::destroy($id);

        return redirect('admin/productpic')->with('flash_message', 'Productpic deleted!');
    }
    /**
     * add the specified resource to storage.
     *
     * @param  int  $image,$id
     *
     * @return state
     */
    public function storeimage($image, $id)
    {
        return Storage::disk('public')->putFileAs(
            'product_pic/'.$id,
            $image,
            $id.'_'.$image->getClientOriginalName()
        );
    }
    /**
     * remove the specified resource from storage.
     *
     * @param  int  $id,$image
     *
     * @return state
     */
    public function destroyimage($id, $image)
    {
        //unlink('storage\product_pic\\'.$id.'\\'.$image);
        //  try {
        return unlink('storage\product_pic\\'.$id.'\\'.$image);
    }
    //}
    //catch(Exception )
}
