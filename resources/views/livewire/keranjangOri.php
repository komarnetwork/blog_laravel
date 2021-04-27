@section('css')
{{-- Css Tambahan --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endsection

<div class="container">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Nama Ucapan</td>
                            <td>Tanggal Kirim</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($pesanan_details as $pesanan_detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ url('assets/jersey') }}/{{ $pesanan_detail->product->gambar }}"
                                    class="img-fluid rounded " width="200">
                            </td>
                            <td>
                                {{ $pesanan_detail->product->nama }}
                            </td>
                            <td>
                                {{ $pesanan_detail->nama_ucapan }}
                            </td>
                            <td>
                                {{ $pesanan_detail->tanggal_kirim }}
                            </td>
                            <td>{{ $pesanan_detail->jumlah_pesanan }}</td>
                            <td>Rp. {{ number_format($pesanan_detail->product->harga) }}</td>
                            <td><strong>Rp. {{ number_format($pesanan_detail->total_harga) }}</strong></td>
                            <td>
                                <button class="btn btn-danger" type="button"
                                    wire:click="destroy({{ $pesanan_detail->id }})"><i
                                        class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data Kosong</td>
                        </tr>
                        @endforelse

                        @if(!empty($pesanan))
                        <tr>
                            <td colspan="7" align="right"><strong>Total Harga : </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="7" align="right"><strong>Kode Unik : </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($pesanan->kode_unik) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="7" align="right"><strong>Total Yang Harus dibayarkan : </strong></td>
                            <td align="right"><strong>Rp.
                                    {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="7"></td>
                            <td colspan="2">
                                <a href="{{ route('checkout') }}" class="btn btn-success btn-blok">
                                    <i class="fas fa-arrow-right"></i> Check Out
                                </a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@push('javascript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@endpush
