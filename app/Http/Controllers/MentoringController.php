<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentoring;

class MentoringController extends Controller
{
    public function index()
    {  
        return view('admin/pages/detailMentoring',[
            "title" => "Mentoring 1 on 1",
            "active" => "mentoring",
            "post" => Mentoring::all(),
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
       
        Mentoring::create($validatedData);
        
        
        return redirect('/dashboard/register/mentoring/ncj34nu3hcu')->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $mentor = Mentoring::findOrFail($id);
        $mentor->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
