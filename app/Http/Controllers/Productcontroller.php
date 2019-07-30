<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Product;
use Illuminate\Http\Request;

class Productcontroller extends Controller
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
            $product = Product::latest()->paginate($perPage);
        } else {
            $product = Product::latest()->paginate($perPage);
        }

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.product.create');
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
            'SizeandSpecifications'=>'string|min:1',
            'Trademark'=>'required|string|min:1',
            'Packing'=>'required|string|min:1',
            'Name'=>'required|max:55|string|min:1',
        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/product')->with('errors',$errors );
        }

        $requestData = $request->all();

        Product::create($requestData);

        return redirect('admin/product')->with('flash_message', 'Product added!');
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
        if (Product::findorfail($id)) {
        $product = Product::findOrFail($id);

        return view('admin.product.show', compact('product'));
    } else {
        return redirect('admin/product')->with('errors', 'Product not found!');
    }
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
        if (Product::findorfail($id)) {
        $product = Product::findOrFail($id);

        return view('admin.product.edit', compact('product'));
    } else {
        return redirect('admin/product')->with('errors', 'Product not found!');
    }
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
            'Trademark'=>'required|string|min:1',
            'Sizeandspecifications'=>'string|min:1',
            'Packing'=>'required|string|min:1',
            'Name'=>'required|max:55|string|min:1',
        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
           return redirect('admin/product')->with('errors', $errors);
        }


        $requestData = $request->all();

        $product = Product::findOrFail($id);
        $product->update($requestData);

        return redirect('admin/product')->with('flash_message', 'Product updated!');
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
        if (Product::findorfail($id)) {
            Product::destroy($id);

            return redirect('admin/product')->with('flash_message', 'Product deleted!');
        } else {
            return redirect('admin/product')->with('errors', 'Product not found!');
        }
    }
}
