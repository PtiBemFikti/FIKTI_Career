<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webinar;

class WebinarController extends Controller
{
    public function index()
    {  
        return view('admin/pages/detailWebinar',[
            "title" => "Webinar",
            "active" => "webinar",
            "post" => Webinar::all(),
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
       
        Webinar::create($validatedData);
        
        return redirect('/dashboard/register/webinar/kcmekuc21dedc')->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $webinar = Webinar::findOrFail($id);
        $webinar->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
   
}
