<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Pesanan;
use App\Product;
// Auth diluar livewire
use App\PesananDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\SEOMeta;

class ProductDetail extends Component
{
    public $product, $nama, $slug, $nama_ucapan, $jumlah_pesanan, $nomor_pemesan, $tanggal_kirim;

    public function mount($slug)
    {
        // $productDetail = Product::find($slug);
        $productDetail = Product::where('slug', $slug)->first();

        if($productDetail) {
            $this->product = $productDetail;
        }
        
    }

    public function masukkanKeranjang()
    {

        $this->validate([
            'jumlah_pesanan' => 'required',
            'nama_ucapan' => 'required',
            'nomor_pemesan' => 'required',
            'tanggal_kirim' => 'required'
        ]);

        //Validasi Jika Belum Login
        if(!Auth::user()) {
            return redirect()->route('login');
        }

        //Menghitung Total Harga = jumlah pesanan di x dengan product harga
        $total_harga = $this->jumlah_pesanan*$this->product->harga;


        // $total_harga = $this->jumlah_pesanan*$this->product->harga;

        //Ngecek Apakah user punya data pesanan utama yg status nya 0
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',1)->first();

        //Menyimpan / Update Data Pesanan Utama (database tabel pesanans)
        if(empty($pesanan))
        {
            Pesanan::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 1,
                'kode_unik' => mt_rand(100, 999),
            ]);
            // ! ambil pesanan_id dari sini
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',1)->first();
            // !
            $pesanan->kode_pemesanan = 'BF-'.$pesanan->id;
            $pesanan->update();

        }else {
            // ! total_harga ambil dari Pesanan::where status 0
            $pesanan->total_harga = $pesanan->total_harga+$total_harga;
            $pesanan->update();
        }

        //Meyimpanan Pesanan Detail
        // ! product_id didapatkan dari  public $product (paling atas)
        PesananDetail::create([
            'product_id' => $this->product->id,
            'pesanan_id' => $pesanan->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'nama_ucapan' => $this->nama_ucapan,
            'nomor_pemesan' => $this->nomor_pemesan,
            'tanggal_kirim' => $this->tanggal_kirim,
            'total_harga'=> $total_harga
        ]);

        $this->emit('masukkanKeranjang');

        session()->flash('message', 'Sukses Masuk Keranjang');
        return redirect()->back();

    }

    // public function masukkanWa()
    // {

    
    //     $this->emit('masukkanWa');

    // }

    public function render()
    {
        SEOMeta::setTitle($this->product->nama);
        SEOMeta::setDescription('Parcel Lebaran');
        SEOMeta::addKeyword(['bunda florist', 'toko bunga', 'toko bunga online', 'toko bunga terpercaya', 'bunga tangan', 'toko parcel', 'parcel lebaran', 'parcel lebaran murah']);

        return view('livewire.product-detail');
    }
}
