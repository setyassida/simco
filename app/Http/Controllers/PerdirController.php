<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\ModelPerdir;
use App\ModelArea;
use App\ModelPerdirRelationMaster;
use App\ModelPerdirJenis;
use App\ModelPerdirDetail;

class PerdirController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $datas = ModelPerdir::orderBy('tanggal_terbit')->get();
    return view('perdir.index', ['datas' => $datas]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $areas = DB::table('areas')->get();
    $perdir_relation_masters = DB::table('perdir_relation_masters')->get();
    $perdirs = DB::table('perdirs')->get();
    $perdir_jenis = DB::table('perdir_jenis')->get();

    return view('perdir.create', ['areas' => $areas, 'perdir_relation_masters' => $perdir_relation_masters, 'perdirs' => $perdirs, 'perdir_jenis' => $perdir_jenis]);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    // dd($request->file('file_pdf'));
    $file_pdf = $request->file('file_pdf');
    $file_doc = $request->file('file_doc');
    $file_ppt = $request->file('file_ppt');

    $destination_pdf = 'uploads/perdir/pdf';
	  $file_pdf->move($destination_pdf, $file_pdf->getClientOriginalName());

    $destination_doc = 'uploads/perdir/doc';
    $file_doc->move($destination_doc, $file_doc->getClientOriginalName());

    $destination_ppt = 'uploads/perdir/ppt';
    $file_ppt->move($destination_ppt, $file_ppt->getClientOriginalName());

    $data_perdir_detail = new ModelPerdirDetail();
    $data_perdir_detail->perihal = $request->perihal;
    $data_perdir_detail->file_doc = $file_doc->getClientOriginalName();
    $data_perdir_detail->file_ppt = $file_ppt->getClientOriginalName();
    $data_perdir_detail->file_pdf = $file_pdf->getClientOriginalName();
    $data_perdir_detail->save();

    $data_perdir = new ModelPerdir();
    $data_perdir->nomor = $request->nomor;
    $data_perdir->nama = $request->nama;
    $data_perdir->tanggal_terbit = $request->tanggal_terbit;
    $data_perdir->is_active = $request->is_active;
    $data_perdir->id_areas = $request->area;
    $data_perdir->id_perdir_jenis = $request->jenis;
    $data_perdir->id_perdir_details = $data_perdir_detail->id;
    $data_perdir->induk_id =  $request->perdir;

    $data_perdir->save();

    return redirect('perdir')->with('flash_message', 'Data Peraturan Direksi berhasil ditambahkan');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $perdir = ModelPerdir::findOrFail($id);
    // dd($perdir);
    return view('perdir.perdir_show', compact('perdir'));
    // return View::make('perdir/perdir_show')->with('perdir', $perdir);
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
