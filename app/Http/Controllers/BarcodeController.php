<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Barcode;
use RealRashid\SweetAlert\Facades\Alert;



class BarcodeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barcodes = barcode::all();
        return view('barcode.index', compact('barcodes'));


    }

    /**
     * Show the form for creating a new resource.
     *hmn
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barcode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'nama'=>'required',
            'kontak'=>'required',
            'status'=>''
        ]);


        $barcode = new Barcode([
            'id' => Str::random(6),
            'nama' => $request->get('nama'),
            'status' => $request->get('status'),
            'kontak' => $request->get('kontak')
        ]);

        $barcode->save();
        alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
        return redirect('barcode/create')->with('success', 'Request saved!');
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
    public function editStatus()
    {

        return view('barcode.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status'=>'required',
        ]);
        $id = $request->get('id');
        $barcode = Barcode::find($id);
        $barcode->status = $request->get('status');
        $barcode->save();
        return view('barcode.edit');
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
