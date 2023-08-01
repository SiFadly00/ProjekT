<div class="container mt-5">
    <div class="card-title text-center bg-primary text-light">PRODUK NOKIA</div>
    <hr>
    @foreach ($data as $item)
    <div class="row">
        <div class="col-3">
            <div class="card shadow" style="background-color: rgba(98, 136, 159)">
                <div class="card-body">
                    <img src="{{ asset($item->foto) }}" width="fill" alt="fotonya hilang :v" class="card-img-top">
                    <p class="card-detail">nama produk {{ $item->nama }}</p>
                    <p class="card-detail">harga produk {{ $item->harga }}</p>
                    <a href="" class="btn btn-primary w-100">ingfo barang</a> 
                    {{-- {{ route('detail', $item->id) }}    --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>