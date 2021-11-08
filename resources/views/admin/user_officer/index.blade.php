@extends('layouts.stisla.index', ['title' => 'Halaman Data Petugas', 'section_header' => 'Data Petugas'])

@section('content')
@include('layouts.flash-messages')
<div class="row">
    <div class="col-lg-12 table-responsive">
        <div class="card px-3 py-3">
            <div class="row">
                <div class="col-lg-12 px-3 py-3 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#user-officer-create-modal">
                        Tambah Petugas
                    </button>
                </div>
            </div>
            <table class="table table-hovered table-bordered" id="datatable">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user_officers as $key => $user_officer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user_officer->name }}</td>
                        <td>{{ $user_officer->email }}</td>
                        <td>{{ $user_officer->role->name }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-id="{{ $user_officer->id }}"
                                    data-target="#user-officer-edit-modal"
                                    class="btn btn-success btn-sm user-officer-edit-button">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ route('admin.petugas.destroy', $user_officer->id) }}" method="POST">
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

@push('modal')
@include('admin.user_officer.modal.create')
@include('admin.user_officer.modal.edit')
@endpush

@push('js')
@include('admin.user_officer._script')
@endpush