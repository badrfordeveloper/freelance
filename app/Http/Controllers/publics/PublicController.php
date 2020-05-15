<?php

namespace App\Http\Controllers\publics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Profil;
use App\Skill;
use App\Projet;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('public.index');

    }

    public function findJob()
    {
       $projets = Projet::orderBy('id', 'desc')->paginate(10);
       return view('public.find_job', compact('projets'));
    }

    public function showJob($id){
        $projet = Projet::findOrFail($id);
        $projets = Projet::where('categorie_id',$projet->categorie_id)->where('id','<>',$projet->id)->orderBy('id', 'desc')->take(5)->get();
      
        return view('public.show_job', compact('projet','projets'));

    }



    public function findProfil()
    {
        $freelancers = User::where("role","freelance")->paginate(10);
        $skills = Skill::all();
        return view('public.find_profil',compact('freelancers','skills'));

    }

    public function detailProfil(User $user)
    {

        if ($user->role !="freelance") 
        {
           return redirect('find-profil');
        }
        $skills = Skill::all();

        return view('public.detail_freelancer',compact('user','skills'));

    }

    public function postJob()
    {
     return view('public.post_job');

    }

    public function contact()
    {
     return view('public.contact');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
