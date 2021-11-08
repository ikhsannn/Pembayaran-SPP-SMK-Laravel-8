@extends('layouts.stisla.index', ['title' => 'Halaman Data Siswa', 'section_header' => 'Data Siswa'])

@section('content')
@include('layouts.flash-messages')
<div class="row">
    <div class="col-lg-12 table-responsive">
        <div class="card px-3 py-3">
            <div class="row">
                <div class="col-lg-12 px-3 py-3 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user-create-modal">
                        Tambah Siswa
                    </button>
                </div>
            </div>
            <table class="table table-hovered table-bordered" id="datatable">
                <thead class="text-center">
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Jenis SPP</th>
                        <th>Alamat</th>
                        <th>No TLP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $key => $student)
                    <tr>
                        <td>{{ $student->student_information->student_identification_number }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->student_information->student_class->name ?? null }}</td>
                        <td>{{ $student->student_information->gender }}</td>
                        <td>{{ $student->student_information->educational_guidance_donation->name ?? null }}</td>
                        <td>{{ $student->student_information->address }}</td>
                        <td>{{ $student->student_information->phone_number }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.siswa.edit', $student->id) }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.siswa.destroy', $student->id) }}" method="POST">
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
@include('admin.users.modal.create')
@endpush