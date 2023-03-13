<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::paginate(10);
        return view('admin/home', compact('cruds'));
    }

    public function indexdua()
    {
        $cruds = Crud::paginate(10);
        return view('index', compact('cruds'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/cruds', [
            "title" => "Cruds"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $crud_validasi = $request->validate([
            'judul'=>'required',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'gambar'=>'required|max:2048',
        ]);

        $gambar = $request->gambar;
        $nama_file = time().rand(100,999).'.'.$gambar->getClientOriginalName();
        if($request->file('gambar')){
            $crud_validasi['gambar'] = $nama_file;
            $request->file('gambar')->move('admin/images/buku/',$nama_file);
        }
        Crud::create($crud_validasi);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$cruds = Crud::where('judul','like',"%".$cari."%")
		->paginate(10);
 
    		// mengirim data pegawai ke view index
		return view('admin/show',['cruds' => $cruds]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$cruds = Crud::where('judul','like',"%".$cari."%")
		->paginate(10);
 
    		// mengirim data pegawai ke view index
		return view('cari',['cruds' => $cruds]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = Crud::findOrFail($id); 
        return view('admin/edit', compact('crud'));
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
        $crud = Crud::findOrFail($id);
        $crud_validasi = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'gambar'=>'required|max:2048',
        ]);
  
        $gambar = $request->gambar;
        $nama_file = time().rand(100,999).'.'.$gambar->getClientOriginalName();
        if($request->file('gambar')){
            $crud_validasi['gambar'] = $nama_file;
            $request->file('gambar')->move('admin/images/buku/',$nama_file);
        }else{
            unset($crud_validasi['gambar']);
        }
        
        $crud->update($crud_validasi);
        $crud->save();

        return redirect()->route('cruds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete();

        return redirect()->route('cruds.index');
    }
}
