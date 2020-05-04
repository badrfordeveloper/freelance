<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Projet;
use App\Skill;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $skills=Skill::All();
        $categories=Category::All();
        return view('admin.projets.create',compact('categories','users','skills'));
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

        $directoryPhoto = 'projet';
        Storage::makeDirectory($directoryPhoto);
        
        $requestData = $request->all();

        if($request->hasFile('image')) $requestData['image']= $request->file('image')->store($directoryPhoto);

        $projet=Projet::create($requestData);

        $skills = Skill::find($request->input('skill_id'));
        $projet->skills()->attach($skills);

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
        $skills=Skill::All();
        $users=User::All();
        $categories=Category::All();
        $projet = Projet::findOrFail($id);

       

        return view('admin.projets.edit', compact('projet','categories','users','skills'));
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

        $oldPhoto =$projet->image;
        $directoryPhoto = 'projet';
        Storage::makeDirectory($directoryPhoto);

        if($request->hasFile('image')) $requestData['image']= $request->file('image')->store($directoryPhoto);
        if( !empty($requestData['image']) ) Storage::delete($oldPhoto);

        $projet->update($requestData);

        $skills = Skill::find($request->input('skill_id'));

        $projet->skills()->sync($skills);
      
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

        $projet=Projet::find($id);
        Storage::delete($projet->image);
        $projet->skills()->detach();
        Projet::destroy($id);

        return redirect('admin/projets')->with('flash_message', 'Projet deleted!');
    }
}
