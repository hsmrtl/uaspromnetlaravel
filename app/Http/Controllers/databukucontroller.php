<?php

namespace App\Http\Controllers;

use App\Models\databuku;
use Illuminate\Http\Request;

class databukucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = databuku::orderBy('id','desc')->paginate();
        return view('databuku.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('databuku.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = [
            'id'=>$request->id,
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun'=>$request->tahun,
            'isbn'=>$request->isbn
        ];
        databuku::create($data);
        return redirect()->to('databuku')->with('success','Berhasil Menambahkan Data');
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
        $data = databuku::where('id',$id)->first();
        return view('databuku.edit')->with('data',$data);
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
        $request->validate([
            'judul'=>'required',
            'penulis'=>'required',
            'tahun'=>'required|numeric',
            'isbn'=>'required',
        ],[
            'judul.required'=>'Judul Harus Diisi',
            'penulis.required'=>'PenulisHarus Diisi',
            'tahun.required'=>'Tahun Harus Diisi',
            'isbn.required'=>'ISBN Harus Diisi',
        ]);
        $data = [
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun'=>$request->tahun,
            'isbn'=>$request->isbn
        ];
        databuku::where('id',$id)->update($data);
        return redirect()->to('databuku')->with('success','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        databuku::where('id',$id)->delete();
        return redirect()->to('databuku')->with('success','Data Berhasil Di Hapus');
    }
}
