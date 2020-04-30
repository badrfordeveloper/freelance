<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Projet;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class ProjetsController extends Controller
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
      
        $projets = Projet::All();
        return view('admin.projets.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users=User::All();
        $categories=Category::All();
        return view('admin.projets.create',compact('categories','users'));
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
        
        Projet::create($requestData);

        return redirect('admin/projets')->with('flash_message', 'Projet added!');
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
        $projet = Projet::findOrFail($id);

        return view('admin.projets.show', compact('projet'));
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
        $users=User::All();
        $categories=Category::All();
        $projet = Projet::findOrFail($id);

        return view('admin.projets.edit', compact('projet','categories','users'));
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
        
        $projet = Projet::findOrFail($id);
        $projet->update($requestData);

        return redirect('admin/projets')->with('flash_message', 'Projet updated!');
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
        Projet::destroy($id);

        return redirect('admin/projets')->with('flash_message', 'Projet deleted!');
    }
}
