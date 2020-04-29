<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Skillprofile;
use Illuminate\Http\Request;

class SkillprofilesController extends Controller
{
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
            $skillprofiles = Skillprofile::where('categorie_id', 'LIKE', "%$keyword%")
                ->orWhere('profile_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $skillprofiles = Skillprofile::latest()->paginate($perPage);
        }

        return view('admin.skillprofiles.index', compact('skillprofiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.skillprofiles.create');
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
        
        Skillprofile::create($requestData);

        return redirect('admin/skillprofiles')->with('flash_message', 'Skillprofile added!');
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
        $skillprofile = Skillprofile::findOrFail($id);

        return view('admin.skillprofiles.show', compact('skillprofile'));
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
        $skillprofile = Skillprofile::findOrFail($id);

        return view('admin.skillprofiles.edit', compact('skillprofile'));
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
        
        $skillprofile = Skillprofile::findOrFail($id);
        $skillprofile->update($requestData);

        return redirect('admin/skillprofiles')->with('flash_message', 'Skillprofile updated!');
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
        Skillprofile::destroy($id);

        return redirect('admin/skillprofiles')->with('flash_message', 'Skillprofile deleted!');
    }
}
