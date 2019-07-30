<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
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
            $news = News::latest()->paginate($perPage);
        } else {
            $news = News::latest()->paginate($perPage);
        }

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.news.create');
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
            'news'=>'required|string|min:1',
            'duration'=>'required|date',

        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/news')->with('errors',$errors );
        }
        $requestData = $request->all();

        News::create($requestData);

        return redirect('admin/news')->with('flash_message', 'News added!');
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
        $news = News::findOrFail($id);

        return view('admin.news.show', compact('news'));
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
        $news = News::findOrFail($id);

        return view('admin.news.edit', compact('news'));
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
            'news'=>'required|string|min:1',
            'duration'=>'required|date',


        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/news')->with('errors',$errors );
        }

        $requestData = $request->all();

        $news = News::findOrFail($id);
        $news->update($requestData);

        return redirect('admin/news')->with('flash_message', 'News updated!');
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
        News::destroy($id);

        return redirect('admin/news')->with('flash_message', 'News deleted!');
    }
}
