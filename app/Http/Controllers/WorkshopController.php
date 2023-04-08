<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class WorkshopController extends Controller
{
    public function index()
    {  
        return view('admin/pages/detailWorkshop',[
            "title" => "Workshop",
            "active" => "workshop",
            "post" => Workshop::all(),
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => ['required', 'min:3', 'max:255'],
            'pekerjaan' => ['required','min:3','max:50'],
            'kota' => ['required','min:3','max:50'],
            'email' => ['required', 'email:dns'],
            'phone' => ['required', 'regex:/^08[0-9]{8,11}$/'],
            'alasan' => ['required','min:3','max:512'] 
        ]);
       
        Workshop::create($validatedData);
        
        return redirect('/dashboard/register/workshop/emck33niceci')->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $workshop = Workshop::findOrFail($id);
        $workshop->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
