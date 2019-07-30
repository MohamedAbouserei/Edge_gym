<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
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
            $offer = Offer::latest()->paginate($perPage);
        } else {
            $offer = Offer::latest()->paginate($perPage);
        }

        return view('admin.offer.index', compact('offer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.offer.create');
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
            'offer'=>'required|string|min:1',
            'discount'=>'required|numeric|max:100',


        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/offer')->with('errors',$errors );
        }
        $requestData = $request->all();

        Offer::create($requestData);

        return redirect('admin/offer')->with('flash_message', 'Offer added!');
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
        $offer = Offer::findOrFail($id);

        return view('admin.offer.show', compact('offer'));
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
        $offer = Offer::findOrFail($id);

        return view('admin.offer.edit', compact('offer'));
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
            'offer'=>'required|string|min:1',
            'discount'=>'required|numeric|max:100',
        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/offer')->with('errors',$errors );
        }

        $requestData = $request->all();

        $offer = Offer::findOrFail($id);
        $offer->update($requestData);

        return redirect('admin/offer')->with('flash_message', 'Offer updated!');
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
        Offer::destroy($id);

        return redirect('admin/offer')->with('flash_message', 'Offer deleted!');
    }
}
