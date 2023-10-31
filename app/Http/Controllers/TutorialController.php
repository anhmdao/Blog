<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;

class TutorialController extends Controller
{
    public function index(){
        $tutorials = Tutorial::all();
        return view('admin.pages.quanlydanhmuc.listTutorials',[
            'tutorials' => $tutorials
        ]);
    }

    public function show($id){
        $tutorial = Tutorial::find($id);
        return view('admin.pages.quanlydanhmuc.showTutorials')->with('tutorial', $tutorial);
    }

    public function create(){
        return view('admin.pages.quanlydanhmuc.addTutorials');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $tutorial = Tutorial::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        $tutorial->save();
        return redirect('/admin/qldanhmuc');
    }

    public function edit($id){
        $tutorial = Tutorial::find($id);
        return view('admin.pages.quanlydanhmuc.editTutorials')->with('tutorial', $tutorial);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
        ]);
        $tutorial = Tutorial::Where('id', $id)
                    ->update([
                        'name' => $request->input('name'),
                        'description' => $request->input('description')
                    ]);
        return redirect('/admin/qldanhmuc');
    }

    public function destroy($id){
        $tutorial = Tutorial::find($id); 
        $tutorial->delete();
        return redirect('/admin/qldanhmuc');
    }
}