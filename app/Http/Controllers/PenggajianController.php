<?php

namespace App\Http\Controllers;

use Request;
use Validator;
use Input;
use App\Penggajian;
use App\Tunjangan_pegawai;
use App\Pegawai;
use App\Tunjangan;
use App\Lembur_pegawai;
use App\Kategori_lembur;
use App\Golongan;
use App\Jabatan;
use auth;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('BagianKeuangan');
    }
    public function index()
    {
       /* $penggajian=Penggajian::all();
        $pegawai=Pegawai::all();
        $lemburp=Lembur_pegawai::all();
        $tunjangan=Tunjangan_pegawai::all();
        return view('penggajian.index',compact('penggajian','pegawai','lemburp','tunjangan'));*/

        $penggajian=Penggajian::paginate(3);
        return view('penggajian.index',compact('penggajian'));
    }

     public function search(Request $request)
    {
        $query = Request::get('q');
        $pegawai = Pegawai::where('id', 'LIKE', '%' . $query . '%')->paginate(10);
        $pegawaii = Pegawai::all();
        $penggajian=Penggajian::all();
         $lemburp=Lembur_pegawai::all();
        $tunjangan=Tunjangan_pegawai::all();
        return view('penggajian.result', compact('penggajian','pegawai','pegawaii','lemburp','tunjangan', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('penggajian.create');

        $tunjangan=Tunjangan_pegawai::paginate(10);
        return view('penggajian.create',compact('tunjangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $penggajian=Request::all();
        Penggajian::create($penggajian);
        return redirect('penggajian');*/

        $penggajian=Input::all();
         // dd($penggajian);
        $where=Tunjangan_pegawai::where('id',$penggajian['tunjangan_pegawai_id'])->first();
        // dd($where);
        $wherepenggajian=Penggajian::where('tunjangan_pegawai_id',$where->id)->first();
        // dd($wherepenggajian);
        $wheretunjangan=Tunjangan::where('id',$where->kode_tunjangan_id)->first();
        // dd($wheretunjangan);
        $wherepegawai=Pegawai::where('id',$where->pegawai_id)->first();
        // dd($wherepegawai);
        $wherekategorilembur=Kategori_lembur::where('jabatan_id',$wherepegawai->jabatan_id)->where('golongan_id',$wherepegawai->golongan_id)->first();
         // dd($wherekategori_lembur);
        $wherelemburpegawai=Lembur_pegawai::where('pegawai_id',$wherepegawai->id)->first();
        // dd($wherelemburpegawai);
        $wherejabatan=Jabatan::where('id',$wherepegawai->jabatan_id)->first();
        // dd($wherejabatan);
        $wheregolongan=Golongan::where('id',$wherepegawai->golongan_id)->first();
        // dd($wheregolongan);

        $penggajian=new Penggajian ;
        if (isset($wherepenggajian)) {
            $error=true ;
            $tunjangan=Tunjangan_pegawai::paginate(10);
            return view('penggajian.create',compact('tunjangan','error'));
        }
        elseif (!isset($wherelemburpegawai)) {
            $nol=0 ;
            $penggajian->jumlah_jam_lembur=$nol;

            $penggajian->jumlah_uang_lembur=$nol ;
            $penggajian->gaji_pokok=$wherejabatan->besar_uang+$wheregolongan->besar_uang;
            $penggajian->total_gaji=($wheretunjangan->besar_uang)+($wherejabatan->besar_uang+$wheregolongan->besar_uang);
                $penggajian->status_pengambilan=0 ;
            $penggajian->tanggal_pengambilan =date('d-m-y');
        $penggajian->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
        $penggajian->petugas_penerima=auth::User()->name ;
        $penggajian->save();
        }
        elseif (!isset($wherekategorilembur)||!isset($wherekategorilembur)) {
            $nol=0 ;
            $penggajian->jumlah_jam_lembur=$nol;
            
            $penggajian->jumlah_uang_lembur=$nol ;
            $penggajian->gaji_pokok=$wherejabatan->besar_uang+$wheregolongan->besar_uang;
            $penggajian->total_gaji=($wheretunjangan->besar_uang)+($wherejabatan->besar_uang+$wheregolongan->besar_uang);
            $penggajian->status_pengambilan=0 ;
            $penggajian->tanggal_pengambilan =date('d-m-y');
        $penggajian->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
        $penggajian->petugas_penerima=auth::user()->name ;
        $penggajian->save();
        }
        else{

            $penggajian->jumlah_jam_lembur=$wherelemburpegawai->Jumlah_jam;
            $penggajian->jumlah_uang_lembur=$wherelemburpegawai->Jumlah_jam*$wherekategorilembur->besar_uang ;
            $penggajian->gaji_pokok=$wherejabatan->besar_uang+$wheregolongan->besar_uang;
            $penggajian->total_gaji=($wherelemburpegawai->Jumlah_jam*$wherekategorilembur->besar_uang)+($wheretunjangan->besar_uang)+($wherejabatan->besar_uang+$wheregolongan->besar_uang);
            $penggajian->tanggal_pengambilan =date('d-m-y');
            $penggajian->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
            $penggajian->status_pengambilan=0 ;
            $penggajian->petugas_penerima=auth::user()->name ;
            $penggajian->save();
            }
            return redirect('penggajian');
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
        $penggajian=Penggajian::find($id);
        return view('penggajian.read',compact('penggajian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gaji=Penggajian::find($id);

        $penggajian=new Penggajian ;

        $penggajian=array('status_pengambilan'=>1,'tanggal_pengambilan'=>date('y-m-d'));

        Penggajian::where('id',$id)->update($penggajian);

        return redirect('penggajian');
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
        Penggajian::find($id)->delete();
        return redirect('penggajian');
    }
}
