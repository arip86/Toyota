<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class PegawaiController extends Controller
{
    public function index(Request $request){

        if ($request->has('cari')){
            $data_pegawai = \App\Pegawai::where('nama','LIKE','%'.$request->cari. '%')->get();
        } else {
    	$data_pegawai = \App\Pegawai::all();
    }
    return view('pegawai.index', ['data_pegawai' => $data_pegawai]);
    
    }

    public function create(Request $request){
    	\App\Pegawai::create($request->all());
    	return redirect('/pegawai');
    }

    public function edit($id){
    	$pegawai = \App\Pegawai::find($id);
    	return view ('pegawai.edit', ['pegawai' => $pegawai]);
    }
    public function update(Request $request, $id){

        $pegawai = \App\Pegawai::find($id);
        $pegawai->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $pegawai->avatar = $request->file('avatar')->getClientOriginalName();
            $pegawai->save();
        }

        return redirect('/pegawai');

    }

    public function delete($id){
        $pegawai = \App\Pegawai::find($id);
        $pegawai->delete($pegawai);
        return redirect('/pegawai');
    }
    public function exportexcel(){
        return Excel::download(new PegawaiExport, 'pegawai.xlsx');
    }

    public function exportpdf(){
        $pegawai = \App\Pegawai::all();
        
        $pdf = PDF::loadView('export.pegawaipdf', ['pegawai' => $pegawai]);
        return $pdf->download('pegawai.pdf');
    }

    public function profile($id){
        $pegawai = \App\Pegawai::find($id);
        return view('pegawai.profile', ['pegawai'=> $pegawai]);
    }
}
