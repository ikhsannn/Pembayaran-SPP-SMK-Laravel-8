<!-- Modal -->
<div class="modal fade" id="student-class-create-modal" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.kelas.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="class_code">Kode Kelas</label>
                                <input type="text" class="form-control{{ $errors->has('class_code') ? ' is-invalid' : '' }}" name="class_code" id="class_code" placeholder="Masukkan kode kelas.." value="{{ old('class_code') }}" required>

                                @if($errors->has('class_code'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('class_code') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Kelas</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="Masukkan nama kelas.." value="{{ old('name') }}" required>

                                @if($errors->has('name'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="school_year">Tahun Ajaran</label>
                                <input type="number" class="form-control{{ $errors->has('school_year') ? ' is-invalid' : '' }}" name="school_year" id="school_year" placeholder="Masukkan tahun ajaran.." value="{{ old('school_year') }}" required>

                                @if($errors->has('school_year'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('school_year') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="homeroom_teacher">Wali Kelas</label>
                                <input type="text" class="form-control{{ $errors->has('school_year') ? ' is-invalid' : '' }}" name="homeroom_teacher" id="homeroom_teacher" placeholder="Masukkan wali kelas.." value="{{ old('homeroom_teacher') }}" required>

                                @if($errors->has('homeroom_teacher'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('homeroom_teacher') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>