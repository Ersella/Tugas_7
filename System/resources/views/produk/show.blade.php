@extends('template.base')

@section('content')

<div class="container">
            <div class="row">
                <div class="col md-12 mt-5">
                <a href="{{url('admin/produk')}}"><fa class="btn btn-primary">Kembali</a>
                    <div class="card mt-3">
                        <div class="card-header">
                        Detail Data Produk
                        <a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-dark btn-sm float-right"><i class="fa fa-edit"></i> Edit
                    </a>
                    </div>
                    <div class="card-body">
                        <h3>{{$produk->nama}}</h3>
                        <hr>
                        <p>
                            Rp. {{number_format($produk->harga)}} |
                            Stok : {{$produk->stok}} |
                            Berat : {{$produk->berat}} gr |
                            Seller : {{$produk->seller->nama}}
                        </p>
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection