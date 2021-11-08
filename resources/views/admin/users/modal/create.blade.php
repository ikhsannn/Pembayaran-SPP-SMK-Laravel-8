<!-- Modal -->
<div class="modal fade" id="user-create-modal" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.siswa.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="student_identification_number">NIS</label>
                                <input type="text" class="form-control{{ $errors->has('student_identification_number') ? ' is-invalid' : '' }}" name="student_identification_number" id="student_identification_number" value="{{ old('student_identification_number') }}" placeholder="Masukkan NIS.." required>

                                @if($errors->has('student_identification_number'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('student_identification_number') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" placeholder="Masukkan nama.." required>

                                @if($errors->has('name'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control select2-select" name="gender" id="gender" required>
                                    <option selected>Pilih Jenis Kelamin..</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                @if($errors->has('gender'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('gender') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}" placeholder="Masukkan email.." required>

                                @if($errors->has('email'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Masukkan password.." required>
                                    <div class="input-group-prepend show-password">
                                        <span class="input-group-text">
                                            <a class="input-button" title="Lihat password" data-toggle>
                                                <i class="fas fa-eye" id="eye"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>

                                @if($errors->has('password'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('password') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="student_class_id">Kelas</label>
                            <select class="form-control select2-select" name="student_class_id" id="student_class_id" required>
                                <option selected>Pilih Kelas..</option>
                                @foreach($student_classes as $key => $student_class)
                                <option value="{{ $student_class->id }}">{{ $student_class->name }}</option>
                                @endforeach
                            </select>

                            @if($errors->has('student_class_id'))
                            <div class="invalid-feedback font-weight-bold d-block">
                                {{ $errors->first('student_class_id') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="educational_guidance_donation_id">Jenis SPP</label>
                                <select class="form-control select2-select" name="educational_guidance_donation_id" id="educational_guidance_donation_id" required>
                                    <option selected>Pilih Jenis SPP..</option>
                                    @foreach($educational_guidance_donations as $key => $educational_guidance_donation)
                                    <option value="{{ $educational_guidance_donation->id }}">{{ $educational_guidance_donation->name }}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('educational_guidance_donation_id'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('educational_guidance_donation_id') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="school_year">Tahun Ajaran</label>
                                <input type="number" class="form-control{{ $errors->has('school_year') ? ' is-invalid' : '' }}" name="school_year" id="school_year" value="{{ old('school_year') }}" placeholder="Masukkan tahun ajaran.." required>

                                @if($errors->has('school_year'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('school_year') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone_number">Nomor Handphone</label>
                                <input type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" placeholder="Masukkan nomor handphone.." required>

                                @if($errors->has('phone_number'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('phone_number') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address" rows="3" placeholder="Masukkan alamat.." required>{{ old('address') }}</textarea>

                                @if($errors->has('address'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('address') }}
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