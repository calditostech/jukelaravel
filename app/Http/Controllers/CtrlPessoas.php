<?php

namespace App\Http\Controllers;

use App\Models\Models\Pessoas;
use Illuminate\Http\Request;

class CtrlPessoas extends Controller
{
    
    protected $pessoas;
 
    public function __construct(Pessoas $pessoas) {
    
    $this->pessoas = $pessoas;

    }

    public function index()
    {
        
        $pessoas = Pessoas::all();
 
        return view('welcome', ['pessoas' => $pessoas]);

    }

    public function create()
    {
    
    return view('welcome.create');
    
    }

    
    public function store(Request $request)
    {

        $request->validate([
         'nome' => 'required',
         'sobrenome' => 'required',
         'email' => 'required',
         'telefone' => 'required',
         'tipodoc' => 'required',
         'numdoc' => 'required'
        ]);

        Pessoas::create($request->all());
        return redirect()->back()->with('success','Criado com Sucesso!');
        //
    }

   
    public function show($id)
    {
        $data =  Pesssoas::find($id);
       return view('welcome.show',compact(['pessoas']));
    }

    
    public function edit($id)
    {
        $data = Pessoas::find($id);
       return view('welcome.edit',compact(['pessoas']));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
         'nome' => 'required',
         'sobrenome' => 'required',
         'email' => 'required',
         'telefone' => 'required',
         'tipodoc' => 'required',
         'numdoc' => 'required'
        ]);

        Pessoas::where('id',$id)->update($request->all());
        return redirect()->back()->with('success','Atualizado com Sucesso!');
        
    }

    public function destroy($id)
    {
        Pessoas::where('id',$id)->delete();
        return redirect()->back()->with('success','Delete com Sucesso!');
    }
}
