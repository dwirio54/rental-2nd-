@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.Faktur</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Penyewa</th>
                                <th>Tgl Pinjam</th>
                                <th>Tgl Kembali</th>
                                <th>Durasi</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactions as $tr)
                            <tr>
                                <td>{{$tr->no_faktur}}</td>
                                <td>{{$tr->item->kode_barang}}</td>
                                <td>{{$tr->item->nama_barang}}</td>
                                <td>{{$tr->nama_peminjam}}</td>
                                <td>{{$tr->tanggal_pinjam}}</td>
                                <td>{{$tr->tanggal_kembali}}</td>

                                <td>
                                    <?php
                                        date_default_timezone_set("Asia/Jakarta");
                                        $datetime2 = strtotime($tr->tanggal_kembali) ;
                                        $datenow = strtotime($tr->tanggal_pinjam);
                                        $durasi = ($datenow - $datetime2) / 86400 ;
                                        $durasi2 = ($durasi);
                                    ?>
                                    @if ($tr->durasi == NULL )
                                    Sudah dikembalikan
                                    @elseif($datenow == $datetime2)
                                    <span class="text-danger">Waktunya mengembalikan</span>
                                    @elseif($datenow > $datetime2)
                                    Sudah lewat {{$durasi}} Hari
                                    @else
                                    <?php $durasi1 = abs($durasi) ?> {{ $durasi1 }} Hari Lagi
                                    @endif
                                </td>

                                <td>
                                    @if ($tr->jumlah == 0)

                                    <span class="row justify-content-center"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="20" height="20" fill="currentColor" class="bi bi-check-circle"
                                            viewBox="0 0 16 16" style="color: green">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                        </svg></span>
                                    @else
                                    <form action="{{route('sms', $tr->id)}}" method="post">
                                        @csrf
                                        <input type="hidden" name="phone" class="form-control" value="{{$tr->phone}}">
                                        <button type="submit" class="btn btn-outline-primary btn-sm mb-2"
                                            style="width: 130px; height:25px">Kirim notifikasi</button>
                                    </form>

                                    <form action="{{route('pengembalian.store', $tr->id)}}" method="post">
                                        @csrf
                                        <input type="hidden" name="kodebarang_id" class="form-control"
                                            value="{{$tr->item->id}}">
                                        <input type="hidden" name="nofaktur_id" class="form-control"
                                            value="{{$tr->id}}">
                                        <input type="hidden" name="namapeminjam_id" class="form-control"
                                            value="{{$tr->id}}">
                                        <input type="hidden" name="tglpinjam_id" id="" class="form-control"
                                            value="{{$tr->id}}">
                                        <input type="hidden" name="tglkembali_id" id="" class="form-control"
                                            value="{{$tr->id}}">

                                        <button type="submit" class="btn btn-outline-primary btn-sm"
                                            style="width: 130px; height:25px;">Buat pengembalian</button>
                                    </form>
                                    @endif
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td>
                                <td colspan="8" class="text-center text-danger">Maaf data peminjaman belum tersedia</td>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
