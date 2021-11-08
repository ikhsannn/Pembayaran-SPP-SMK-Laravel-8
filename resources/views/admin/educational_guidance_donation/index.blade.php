@extends('layouts.stisla.index', ['title' => 'Halaman Data Jenis SPP', 'section_header' => 'Jenis SPP'])

@section('content')
@include('layouts.flash-messages')
<div class="row">
    <div class="col-lg-12 table-responsive">
        <div class="card px-3 py-3">
            <div class="row">
                <div class="col-lg-12 px-3 py-3 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#educational-guidance-donation-create-modal">
                        Tambah Jenis SPP
                    </button>
                </div>
            </div>
            <table class="table table-hovered table-bordered" id="datatable">
                <thead class="text-center">
                    <tr>
                        <th>ID SPP</th>
                        <th>Jenis SPP</th>
                        <th>Tagihan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educational_guidance_donations as $key => $educational_guidance_donation)
                    <tr>
                        <td>{{ $educational_guidance_donation->educational_guidance_donation_code }}</td>
                        <td>{{ $educational_guidance_donation->name }}</td>
                        <td>{{ $educational_guidance_donation->bill }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" data-toggle="modal"
                                    data-id="{{ $educational_guidance_donation->id }}"
                                    data-target="#educational-guidance-donation-edit-modal"
                                    class="btn btn-success btn-sm educational-guidance-donation-edit-button">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ route('admin.spp.destroy', $educational_guidance_donation->id) }}"
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
@endsection

@push('js')
@include('admin.educational_guidance_donation._script')
@endpush

@push('modal')
@include('admin.educational_guidance_donation.modal.create')
@include('admin.educational_guidance_donation.modal.edit')
@endpush