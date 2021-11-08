@extends('layouts.stisla.index', ['title' => 'Halaman Data Kelas', 'section_header' => 'Data Kelas'])

@section('content')
@include('layouts.flash-messages')
<div class="row">
    <div class="col-lg-12 table-responsive">
        <div class="card px-3 py-3">
            <div class="row">
                <div class="col-lg-12 px-3 py-3 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#student-class-create-modal">
                        Tambah Kelas
                    </button>
                </div>
            </div>
            <table class="table table-hovered table-bordered" id="datatable">
                <thead class="text-center">
                    <tr>
                        <th>Kode Kelas</th>
                        <th>Kelas dan Tahun Ajaran</th>
                        <th>Wali Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student_classes as $key => $student_class)
                    <tr>
                        <td>{{ $student_class->class_code }}</td>
                        <td>{{ $student_class->name }}-{{ $student_class->school_year }}</td>
                        <td>{{ $student_class->homeroom_teacher }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-id="{{ $student_class->id }}"
                                    data-target="#student-class-edit-modal"
                                    class="btn btn-success btn-sm student-class-edit-button">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ route('admin.kelas.destroy', $student_class->id) }}" method="POST">
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
@include('admin.student_class.modal.create')
@include('admin.student_class.modal.edit')
@endpush

@push('js')
@include('admin.student_class._script')
@endpush