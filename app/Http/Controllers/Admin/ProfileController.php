<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Plofile;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Plofile::$rules);
        
        $plofiel = new Plofile;
        $form = $request->all();
        
        unset($form['_token']);
        
        $plofiel->fill($form);
        $plofiel->save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        $plofiel = Plofile::find($request->id);
        if (empty($plofiel)) {
            abort(404);
        }
        return view('admin.profile.edit', ['plofile_form' => $plofiel]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Plofile::$rules);
        $plofiel = Plofile::find($request->id);
        $plofiel_form = $request->all();
        unset($plofiel_form['_token']);
        
        $plofiel->fill($plofiel_form)->save();
        
        return redirect('admin/profile/edit');
    }
}
