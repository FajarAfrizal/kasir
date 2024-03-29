@extends('layouts._main')
@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Create
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('createPelanggan')}}" method="post" class="form-group">
                        @csrf
                        <label for="namaPelanggan">Nama Pelanggan</label>
                        <input type="text" name="namaPelanggan" value="" class="form-control">
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat" value="" class="form-control">
                        <label for="nomorTelepon">nomorTelepon</label>
                        <input type="text" name="nomorTelepon" value="" class="form-control">
                        <button type="submit" class="btn btn-primary">Save changes</button>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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
