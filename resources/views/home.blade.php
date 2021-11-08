@extends('layouts.stisla.index', ['title' => 'Dashboard', 'section_header' => 'Dashboard'])

@section('content')
<div class="row">
    <div class="col-lg-6">
        @include('layouts.flash-messages')
        <div class="card px-3 py-3">
            <form action="{{ route('admin.dashboard.search') }}" method="POST">
                @csrf
                <div class="form-group">
                    <h5> Tulis NIS Siswa </h5>
                    <input type="text" class="form-control" name="query" id="query" value="{{ $search_string ?? null }}" @if(auth()->user()->role_id === 4) placeholder="Cari NIS.." @endif>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    @if(auth()->user()->role_id === 4)
    <div class="col-lg-6 table-responsive">
        <div class="card px-3 py-3">
            <table class="table table-bordered">
                <label for="" class="font-weight-bold">Informasi Siswa</label>
                <tr>
                    <td style="width: 145px;">NIS</td>
                    <td style="width: 10px;">:</td>
                    <td class="text-wrap">{{ auth()->user()->student_information->student_identification_number ?? '' }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td class="text-wrap">{{ auth()->user()->name ?? '' }}</td>
                </tr>
                <tr>
                    <td>Kelas dan Tahun Ajaran</td>
                    <td>:</td>
                    <td class="text-wrap">{{ auth()->user()->student_information->student_class->name ?? '' }} - {{ auth()->user()->student_information->school_year ?? '' }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td class="text-wrap">{{ auth()->user()->student_information->gender ?? '' }}</td>
                </tr>
                <tr>
                    <td>Jenis Pembayaran</td>
                    <td>:</td>
                    <td class="text-wrap">{{ auth()->user()->student_information->educational_guidance_donation->name ?? '' }}</td>
                </tr>
                <tr>
                    <td>Nomor Handphone</td>
                    <td>:</td>
                    <td class="text-wrap">{{ auth()->user()->student_information->phone_number ?? '' }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td class="text-wrap">{{ auth()->user()->student_information->address ?? '' }}</td>
                </tr>
            </table>
        </div>
    </div>
    @endif
</div>

@if(isset($educational_guidance_donation_transactions))
<div class="row">
    <div class="col-lg-12 table-responsive">
        <div class="card px-3 py-3">
            <div class="row">
                <div class="col-lg-12 px-3 py-3 text-right">
                    @if(auth()->user()->role_id != 4)
                        @if($educational_guidance_donation_transactions)
                        <a href="{{ route('admin.dashboard.print', $search_string) }}" target="_blank" class="btn btn-primary">
                            Print
                        </a>
                        @endif
                    @endif
                </div>
            </div>
            <table class="table table-hovered table-bordered" id="datatable">
                <thead class="text-center">
                    <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas dan Tahun Ajaran</th>
                        <th>Bulan</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah Bayar</th>
                        <th>Tagihan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educational_guidance_donation_transactions as $data)
                    <tr>
                        <td style="text-align:center;">{{ $data['nis'] }}</td>
                        <td>{{ $data['nama_siswa'] }}</td>
                        <td style="text-align:center;">{{ $data['nama_kelas'] }} - {{ $data['school_year'] }}</td>
                        <td style="text-align:center;">{{ $data['name'] }} </td>
                        <td style="text-align:center;">{{ $data['paid_date'] }}</td>
                        <td style="text-align:right;">{{ $data['amount_paid'] }}</td>
                        <td style="text-align:right;">{{ $data['bill'] }}</td>
                        <td style="text-align:center;">{{ $data['statuss'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
@endsection