<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Skill;

use App\Category;
use Illuminate\Http\Request;

class SkillsController extends Controller
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
       
        $skills = Skill::All();

        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {


        $categories=Category::All();
        return view('admin.skills.create',compact('categories'));
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
            $request->validate([
                    'libelle' => 'required|min:3',
                    'categorie_id' => 'required',
                ]);
        
        $requestData = $request->all();
        
        Skill::create($requestData);

        return redirect('admin/skills')->with('flash_message', 'Skill added!');
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
        $skill = Skill::findOrFail($id);

        return view('admin.skills.show', compact('skill'));
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
         $categories=Category::All();
        $skill = Skill::findOrFail($id);

        return view('admin.skills.edit', compact('skill','categories'));
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
           $request->validate([
                    'libelle' => 'required|min:3',
                    'categorie_id' => 'required',
                ]);
           
        $requestData = $request->all();
        
        $skill = Skill::findOrFail($id);
        $skill->update($requestData);

        return redirect('admin/skills')->with('flash_message', 'Skill updated!');
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
        Skill::destroy($id);

        return redirect('admin/skills')->with('flash_message', 'Skill deleted!');
    }
}
