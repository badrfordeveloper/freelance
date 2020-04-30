<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Projet;
use App\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
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
       
        $commandes = Commande::All();
      
        return view('admin.commandes.index', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // only freelances
        $users=User::All();
        $projets=Projet::All();
        return view('admin.commandes.create',compact('users','projets'));
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
        
        Commande::create($requestData);

        return redirect('admin/commandes')->with('flash_message', 'Commande added!');
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
        $commande = Commande::findOrFail($id);

        return view('admin.commandes.show', compact('commande'));
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
           // only freelances
        $users=User::All();
        $projets=Projet::All();
        $commande = Commande::findOrFail($id);

        return view('admin.commandes.edit', compact('commande','users','projets'));
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
        
        $commande = Commande::findOrFail($id);
        $commande->update($requestData);

        return redirect('admin/commandes')->with('flash_message', 'Commande updated!');
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
        Commande::destroy($id);

        return redirect('admin/commandes')->with('flash_message', 'Commande deleted!');
    }
}
