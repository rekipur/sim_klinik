<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JabatanController extends Controller
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
            $jabatans = Jabatan::select(['id','nama_jabatan']);
            return Datatables::of($jabatans)
                ->addColumn('action', function($jabatan){
                    return view('datatable._action', [
                        'model'    => $jabatan,
                        'form_url' => route('jabatans.destroy', $jabatan->id),
                        'edit_url' => route('jabatans.edit', $jabatan->id),
                        'confirm_message' => 'Yakin mau mengapus ' . $jabatan->nama_jabatan . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_jabatan', 'name' => 'nama_jabatan', 'title' => 'Jabatan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('jabatans.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jabatans.create');
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
            'nama_jabatan'=>'required|max:225']);
        $jabatan = Jabatan::create($request->only('nama_jabatan'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Jabatan $jabatan->nama_jabatan"
            ]);
        return redirect()->route('jabatans.index');
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
        $jabatan = Jabatan::find($id);
        return view('jabatans.edit')->with(compact('jabatan'));
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

          $jabatan = Jabatan::find($id);
        if(!$jabatan->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Jabatan $jabatan->nama_jabatan"
            ]);
        return redirect()->route('jabatans.index');
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
        Jabatan::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Jabatan Berhasil Di Hapus"
            ]);
        return redirect()->route('jabatans.index');
    }
}
