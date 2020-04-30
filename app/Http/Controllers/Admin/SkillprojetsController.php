<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Skillprojet;
use Illuminate\Http\Request;

class SkillprojetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
      
        $skillprojets = Skillprojet::All();

        return view('admin.skillprojets.index', compact('skillprojets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.skillprojets.create');
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
        
        $requestData = $request->all();
        
        Skillprojet::create($requestData);

        return redirect('admin/skillprojets')->with('flash_message', 'Skillprojet added!');
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
        $skillprojet = Skillprojet::findOrFail($id);

        return view('admin.skillprojets.show', compact('skillprojet'));
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
        $skillprojet = Skillprojet::findOrFail($id);

        return view('admin.skillprojets.edit', compact('skillprojet'));
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
        
        $skillprojet = Skillprojet::findOrFail($id);
        $skillprojet->update($requestData);

        return redirect('admin/skillprojets')->with('flash_message', 'Skillprojet updated!');
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
        Skillprojet::destroy($id);

        return redirect('admin/skillprojets')->with('flash_message', 'Skillprojet deleted!');
    }
}
