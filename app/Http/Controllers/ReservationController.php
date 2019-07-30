<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Support\Facades\Validator;
//use Auth;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
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
        //return Auth::user()->name;
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $reservation = Reservation::latest()->paginate($perPage);
        } else {
            $reservation = Reservation::latest()->paginate($perPage);
        }

        return view('admin.reservation.index', compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $program=Program::all();

        return view('admin.reservation.create',compact('program'));
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
            'user_id'=>'required|string|max:55|min:5',
            'program_id'=>'required|numeric|exists:program,id',
        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/reservation')->with('errors', $errors);
        }

        $requestData = $request->all();

        Reservation::create($requestData);

        return redirect('admin/reservation')->with('flash_message', 'Reservation added!');
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
        $reservation = Reservation::findOrFail($id);

        return view('admin.reservation.show', compact('reservation'));
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
        $program=Program::all();

        $reservation = Reservation::findOrFail($id);

        return view('admin.reservation.edit', compact('reservation','program'));
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

        $requestData = $request->all();

        $reservation = Reservation::findOrFail($id);
        $reservation->update($requestData);

        return redirect('admin/reservation')->with('flash_message', 'Reservation updated!');
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
        Reservation::destroy($id);

        return redirect('admin/reservation')->with('flash_message', 'Reservation deleted!');
    }
}
