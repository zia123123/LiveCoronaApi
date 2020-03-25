@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <td>id</td>
                              <td>Nama</td>
                              <td>Email</td>
                              <td>Barcode</td>
                              <td>Status</td>
                              <td colspan = 2>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barcodes as $barcode)
                            <tr>
                                <td>{{$barcode->id}}</td>
                                <td>{{$barcode->nama}}</td>
                                <td>{{$barcode->kontak}}</td>
                                <td>{!! DNS1D::getBarcodeHTML($barcode->id, "C93") !!}</td>
                                <td>{{$barcode->status}}</td>
                                <td>
                                    <a href="{{ route('barcode.edit',$barcode->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('barcode.destroy', $barcode->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
