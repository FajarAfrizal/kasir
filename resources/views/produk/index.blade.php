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
                    <form action="{{ route('createProduk') }}" method="post" class="form-group">
                        @csrf
                        <label for="namaProduk">Nama Produk</label>
                        <input type="text" name="namaProduk" value="" class="form-control">
                        <label for="harga">harga</label>
                        <input type="text" id="buyNamaProduk" name="harga" class="form-control">
                        <label for="stock">stock</label>
                        <input type="text" name="stock" value="" class="form-control">
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
                <th scope="col">harga</th>
                <th scope="col">stock</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($produk as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $item->namaProduk }}</td>
                    <td>Rp.{{ $item->harga }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a href="{{ route('buy', $item->id)}}" class="btn btn-primary" >
                            Buy
                        </a> 
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
