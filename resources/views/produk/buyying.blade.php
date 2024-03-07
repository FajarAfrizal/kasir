@extends('layouts._main')
@section('content')
    <form action="{{ route('buyying')}}" method="post" id="orderForm">
        @csrf
        <label for="produk">Nama Produk</label>
        <input type="hidden" name="produk_id" value="{{ $produk->id }}">
        <input type="text" class="form-control" value="{{ $produk->namaProduk }}" readonly>
        <label for="pelanggan">Pelanggan</label>
        <select name="pelanggan_id" class="form-control">
            <option value="">Pilih Pelanggan</option>
            @foreach ($pelanggan as $p)
                <option value="{{ $p->id }}">{{ $p->namaPelanggan }}</option>
            @endforeach
        </select>
        <label for="jumlah_produk">Harga satuan</label>
        <input type="number" name="harga" id="harga" class="form-control" value="{{$produk->harga}}" readonly>
        <label for="jumlah_produk">Beli Berapa</label>
        <input type="number" name="jumlahProduk" id="jumlah_produk" class="form-control">
        <label for="jumlah_produk">Harga Total</label>
        <input type="text" name="totalHarga" id="total_harga" class="form-control" readonly>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        document.getElementById('jumlah_produk').addEventListener('input', function() {
            var jumlahProduk = parseFloat(document.getElementById('jumlah_produk').value);
            var hargaSatuan = parseFloat(document.getElementById('harga').value);
            var totalHarga = jumlahProduk * hargaSatuan;
            document.getElementById('total_harga').value = isNaN(totalHarga) ? '' : totalHarga.toFixed(2);
        });
    </script>
@endsection
