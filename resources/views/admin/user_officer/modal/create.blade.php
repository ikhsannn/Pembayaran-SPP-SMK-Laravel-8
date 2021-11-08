<!-- Modal -->
<div class="modal fade" id="user-officer-create-modal" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.petugas.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama.." value="{{ old('name') }}" required>

                                @if($errors->has('name'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email.." value="{{ old('email') }}" required>

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
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="role_id">Level</label>
                                <select class="form-control select2-select" name="role_id" id="role_id">
                                    <option value="" selected>Pilih Level..</option>
                                    @foreach($roles as $key => $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('role_id'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('role_id') }}
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