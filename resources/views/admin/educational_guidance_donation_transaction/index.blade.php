@extends('layouts.stisla.index', ['title' => 'Halaman Transaksi', 'section_header' => 'Data Transaksi'])

@section('content')
<div class="row">
    <div class="col-lg-6">
        @include('layouts.flash-messages')
        <div class="card px-3 py-3">
            <form action="{{ route('admin.transaksi.search') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="student_identification_number">Masukkan NIS</label>
                    <input type="text" class="form-control" name="student_identification_number"
                        id="student_identification_number" placeholder="Masukkan NIS.." @isset($student_information)
                        value="{{ $student_information->student_identification_number }}" @endisset>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    @if(!isset($student_information))
    <div class="col-lg-6 table-responsive">
        <div class="card px-3 py-3">
            <table class="table">
                <label for="" class="font-weight-bold">Informasi Siswa</label>
                <p class="font-weight-bold text-danger text-uppercase">Data tidak ada. Silahkan cari berdasarkan NIS
                    siswa..</p>
            </table>
        </div>
    </div>
    @endif

    @isset($student_information)
    <div class="col-lg-6 table-responsive">
        <div class="card px-3 py-3">
            <table class="table table-bordered">
                <label for="" class="font-weight-bold">Informasi Siswa</label>
                <tr>
                    <td style="width: 145px;">NIS</td>
                    <td style="width: 10px;">:</td>
                    <td class="text-wrap">{{ $student_information->student_identification_number }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td class="text-wrap">{{ $student_information->user->name }}</td>
                </tr>
                <tr>
                    <td>Kelas dan Tahun Ajaran</td>
                    <td>:</td>
                    <td class="text-wrap">{{ $student_information->student_class->name ?? null }} -
                        {{ $student_information->student_class->school_year ?? null }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td class="text-wrap">{{ $student_information->gender }}</td>
                </tr>
                <tr>
                    <td>Jenis SPP</td>
                    <td>:</td>
                    <td class="text-wrap">{{ $student_information->educational_guidance_donation->name ?? null }}</td>
                </tr>
                <tr>
                    <td>Nomor Handphone</td>
                    <td>:</td>
                    <td class="text-wrap">{{ $student_information->phone_number }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td class="text-wrap">{{ $student_information->address }}</td>
                </tr>
            </table>
        </div>
    </div>
    @endisset
</div>

@isset($student_information)
<div class="row">
    <div class="col-lg-12 table-responsive">
        <div class="card px-3 py-3">
            <div class="row">
                <div class="col-lg-12 px-3 py-3 text-right">
                    <button type="button" class="btn btn-primary mr-3" data-toggle="modal"
                        data-target="#educational-guidance-donation-transaction-create-modal">
                        Tambah Transaksi
                    </button>

                    @if(count($student_educational_guidance_donation_transactions))
                    <a href="{{ route('admin.transaksi.print', $student_information->user->id) }}" target="_blank"
                        class="btn btn-primary">
                        Print
                    </a>
                    @endif
                </div>
            </div>
            <table class="table table-hovered table-bordered" id="datatable">
                <thead class="text-center">
                    <tr>
                        <th>NIS</th>
                        <th>Bulan</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah Bayar</th>
                        <th>Tagihan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student_educational_guidance_donation_transactions as $data)
                    <tr>
                        <td><?= $data['nis']; ?></td>
                        <td><?= $data['month']; ?></td>
                        <td><?= $data['paid_date']; ?></td>
                        <td><?= $data['amount_paid']; ?></td>
                        <td><?= $data['bill']; ?></td>
                        <td><?= $data['is_paid']; ?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" data-toggle="modal"
                                    data-id="<?= $data['id']; ?>"
                                    data-target="#educational-guidance-donation-transactions-edit-modal"
                                    class="btn btn-success btn-sm educational-guidance-donation-transactions-edit-button">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <?php $id = $data['id']; ?>
                                <form
                                    action="{{ route('admin.transaksi.destroy', $id) }}"
                                    method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm swal-delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endisset
@endsection

@isset($student_information)
@push('modal')
@include('admin.educational_guidance_donation_transaction.modal.create')
@include('admin.educational_guidance_donation_transaction.modal.edit')
@endpush
@endisset

@push('js')
@include('admin.educational_guidance_donation_transaction._script')
@endpush