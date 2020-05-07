<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UplodedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\User;



class EmployeursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $users = User::where("role","employeur")->get();
        $role="employeur";

        return view('admin.users.index', compact('users','role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $role="employeur";
        return view('admin.users.create',compact('role'));
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
                    'nom' => 'required|min:3',
                    'prenom' => 'required|min:3',
                    'username' => 'required|min:3',
                    'email' => 'required|email',
                     'password' => 'required|min:3',
                    'tel' => 'required',
                    'dateNaissance' => 'required|date',
                    'tel' => 'required',
                    'adresse' => 'required|min:10',
                ]);


        $directoryPhoto = 'photos';
        $directoryCover = 'covers';
        Storage::makeDirectory($directoryPhoto);
        Storage::makeDirectory($directoryCover);

        $requestData = $request->all();
        $requestData['role']="employeur";

        if($request->hasFile('photo')) $requestData['photo']= $request->file('photo')->store($directoryPhoto);
        if($request->hasFile('cover')) $requestData['cover']= $request->file('cover')->store($directoryCover);
        $requestData['password']=Hash::make( $requestData['password']);
        
        User::create($requestData);

        return redirect('admin/employeurs')->with('flash_message', 'User added!');
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
        $user = User::findOrFail($id);
        $role="employeur";

        return view('admin.users.show', compact('user','role'));
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
        $user = User::findOrFail($id);
        $role="employeur";

        return view('admin.users.edit', compact('user','role'));
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
                    'nom' => 'required|min:3',
                    'prenom' => 'required|min:3',
                    'username' => 'required|min:3',
                    'email' => 'required|email',
                    'tel' => 'required',
                    'dateNaissance' => 'required|date',
                    'tel' => 'required',
                    'adresse' => 'required|min:10',
                ]);


        $user = User::findOrFail($id);
        $oldPhoto =$user->photo;
        $oldCover = $user->cover;

        $directoryPhoto = 'photos';
        $directoryCover = 'covers';
        Storage::makeDirectory($directoryPhoto);
        Storage::makeDirectory($directoryCover);
        
        $requestData = $request->all();

        if($request->hasFile('photo')) $requestData['photo']= $request->file('photo')->store($directoryPhoto);
        if($request->hasFile('cover')) $requestData['cover']= $request->file('cover')->store($directoryCover);

        if( !empty($requestData['photo']) ) Storage::delete($oldPhoto);
        if( !empty($requestData['cover']) ) Storage::delete($oldCover);
        
        $user->update($requestData);

        return redirect('admin/employeurs')->with('flash_message', 'User updated!');
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
        User::destroy($id);

        return redirect('admin/employeurs')->with('flash_message', 'User deleted!');
    }
}
