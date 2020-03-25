<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Barcode;
use \GuzzleHttp\Client;

use \GuzzleHttp\Exception\RequestException;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //     $this->middleware('auth');
        $this->client = new Client(['base_uri' => 'https://covid19.yayasanvitka.id/api/global/']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home', compact('barcodes'));

    }

     public function editStatus()
    {

        return view('edit');

    }
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status'=>'required',
        ]);
        $id = $request->get('id');
        $barcode = Barcode::find($id);
        $barcode->status = $request->get('status');

        Alert::success('Selamat Data Anda Berhasil di Rekap', 'Succes');
        $barcode->save();
        return view('edit');

    }

    public function getApiCorona(){
       $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://covid19.yayasanvitka.id/api/global');
 $response->getStatusCode(); // 200
 $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
    $array = json_decode($response->getBody()->getContents(), true);
     $array;

     $jumlahKasus = "";
    $kasusHariIni = "";
     $mati = "";
     $sembuh = "";
      $active = "";
       $critis = "";
        $last_update = "";

     foreach($array as $negara){
            if ($negara['country'] == 'Indonesia'){
               $jumlahKasus = $negara['cases'];
                $kasusHariIni = $negara['todayCases'];
                 $mati = $negara['deaths'];
                $sembuh = $negara['recovered'];
                 $active = $negara['active'];
                $critis = $negara['critical'];
                $last_update = $negara['last_update'];
                    }
            }

     return view('corona', compact('array','jumlahKasus', 'kasusHariIni','mati','sembuh','active','critis','last_update'));
    }

}










