<div class="container">
    {{-- Be like water. --}}
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History Pesanan</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{ route('keranjang') }}" class="btn btn-sm btn-success"><i class="fas fa-arrow-left"></i>
                Kembali</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pesan</td>
                            <td>Kode Pemesanan</td>
                            <td>Pesanan</td>
                            <td>Nama Ucapan</td>
                            <td>Tanggal Kirim</td>
                            <td>Status</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($pesanans as $pesanan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pesanan->created_at }}</td>
                            <td>{{ $pesanan->kode_pemesanan }}</td>
                            <td>
                                <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                @foreach ($pesanan_details as $pesanan_detail)
                                <img src="{{ url('assets/jersey') }}/{{ $pesanan_detail->product->gambar }}"
                                    class="img-fluid mb-2" width="50">
                                {{ $pesanan_detail->product->nama }}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                {{ $pesanan_detail->nama_ucapan }}
                            </td>
                            <td>
                                @if ($pesanan_detail->tanggal_kirim)
                                {{ $pesanan_detail->tanggal_kirim }}
                                @else
                                -
                                @endif
                            </td>
                            <td>
                                @if($pesanan->status == 1)
                                <h5><span class="badge badge-danger">Belum Lunas</span></h5>
                                @else
                                <h5><span class="badge badge-success">Lunas</span></h5>
                                @endif
                            </td>
                            <td><strong>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</strong></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data Kosong</td>
                        </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mt-4 mb-5">
        <div class="col">
            <div class="card border-primary shadow">
                <div class="card-body">
                    <p>Untuk pembayaran silahkan di transfer ke rekening dibawah ini : <br>
                        *Wajib konfirmasi dan kirim bukti transfer ke nomor WhatsApp kami untuk di proses</p>
                    <div class="media mb-4">
                        <img class="mr-3" src="{{ url('assets/bca.png') }}" alt="Bank BCA" width="60">
                        <div class="media-body">
                            <h5 class="mt-0"> <strong>BANK BCA</strong> </h5>
                            No. Rekening <strong> 740-1383-879 </strong> A/N <strong> Hidayat Maulana </strong>
                        </div>
                    </div>

                    <div class="media">
                        <img class="mr-3" src="{{ url('assets/mandiri.png') }}" alt="Bank Mandiri" width="60">
                        <div class="media-body">
                            <h5 class="mt-0"><strong>BANK MANDIRI</strong> </h5>
                            No. Rekening <strong> 00-600-1011-9067 </strong> A/N <strong> Hidayat Maulana
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
