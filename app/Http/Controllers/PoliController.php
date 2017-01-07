<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poli;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
       
        if ($request->ajax()) {
            # code...
            $polis = Poli::select(['id','nama']);
            return Datatables::of($polis)                
            ->addColumn('action', function($poli){
                    return view('datatable._action', [
                        'model'    => $poli,
                        'form_url' => route('poli.destroy', $poli->id),
                        'edit_url' => route('poli.edit', $poli->id),
                        'confirm_message' => 'Yakin mau mengapus ' . $poli->nama_jabatan . '?'
                        ]);
                })->make(true);
        }
        //

        $html = $htmlBuilder
        ->addColumn(['data'=>'nama', 'name'=>'nama', 'title'=>'Nama'])
        ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'Pilihan', 'orderable'=>false, 'searchable'=>false]);

        return view('poli.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('poli.create');
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
        $this->validate($request,[
            'nama'=>'required|max:225|unique:polis']);
        $poli = Poli::create($request->only('nama'));
        Session::flash("flas_notification",[
                "level"=>"success",
                "message"=>"Poli berhasil ditambahkan"
            ]);
        return redirect()->route('poli.index');
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
        $poli = Poli::find($id);

        return view('poli.edit')->with(compact('poli'));
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
        $this->validate($request,[
            'nama'=>'required|max:225|unique:polis,nama,' . $id]);
        $poli = Poli::find($id);
        $poli->update($request->only('nama'));

                Session::flash("flash_notification", [
                    "level"=>"success",
                    "message"=>"Poli telah diperbaharui"
                ]);
        return redirect()->route('poli.index');

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
        $poli = Poli::find($id);
        $poli->delete();
        
            Session::flash("flash_notification", [
                    "level"=>"danger",
                    "message"=>"Poli berhasil di hapus"
                ]);
            return redirect()->route('poli.index');

    }
}
