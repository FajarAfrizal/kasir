@extends('layouts._main')
@section('content')
 
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">no</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomer telepon</th>
                <th scope="col">alamat</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($pelanggan as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->namaPelanggan}}</td>
                <td>{{$item->nomorTelepon}}</td>
                <td>{{$item->alamat}}</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
@endsection
