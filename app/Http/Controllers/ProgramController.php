<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
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
            $program = Program::latest()->paginate($perPage);
        } else {
            $program = Program::latest()->paginate($perPage);
        }

        return view('admin.program.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.program.create');
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
            'data'=>'required|string|min:1',
            'name'=>'required|string|max:55|min:4',
            'type'=>'required|string|max:55|min:4',
            'startdate'=>'required|date',
            'duration'=>'required|date',
            'price'=>'required|numeric',

        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/program')->with('errors',$errors );
        }


        $requestData = $request->all();

        Program::create($requestData);

        return redirect('admin/program')->with('flash_message', 'Program added!');
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
        $program = Program::findOrFail($id);

        return view('admin.program.show', compact('program'));
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
        $program = Program::findOrFail($id);

        return view('admin.program.edit', compact('program'));
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
            'data'=>'required|string|min:1',
            'name'=>'required|string|max:55|min:4',
            'type'=>'required|string|max:55|min:4',
            'startdate'=>'required|date',
            'duration'=>'required|date',
            'price'=>'required|numeric',

        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/program')->with('errors',$errors );
        }

        $requestData = $request->all();

        $program = Program::findOrFail($id);
        $program->update($requestData);

        return redirect('admin/program')->with('flash_message', 'Program updated!');
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
        Program::destroy($id);

        return redirect('admin/program')->with('flash_message', 'Program deleted!');
    }
}
