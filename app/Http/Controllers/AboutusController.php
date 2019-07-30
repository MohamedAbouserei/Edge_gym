<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
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
            $aboutus = Aboutus::latest('id')->paginate($perPage);
        } else {
            $aboutus = Aboutus::latest('id')->paginate($perPage);
        }

        return view('admin.aboutus.index', compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.aboutus.create');
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
            'emails'=>'email',
            'phonenumbers'=>'string|max:55',
            'adresses'=>'string|max:550',
        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/aboutus')->with('errors',$errors );
        }

        $requestData = $request->all();

        Aboutus::create($requestData);

        return redirect('admin/aboutus')->with('flash_message', 'Aboutus added!');
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
        $aboutus = Aboutus::findOrFail($id);

        return view('admin.aboutus.show', compact('aboutus'));
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
        $aboutus = Aboutus::findOrFail($id);

        return view('admin.aboutus.edit', compact('aboutus'));
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
            'emails'=>'email',
            'phonenumbers'=>'string|max:55|min:4',
            'adresses'=>'string|max:550|min:4',
        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/aboutus')->with('errors',$errors );
        }

        $requestData = $request->all();

        $aboutus = Aboutus::findOrFail($id);
        $aboutus->update($requestData);

        return redirect('admin/aboutus')->with('flash_message', 'Aboutus updated!');
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
        Aboutus::destroy($id);

        return redirect('admin/aboutus')->with('flash_message', 'Aboutus deleted!');
    }
}
