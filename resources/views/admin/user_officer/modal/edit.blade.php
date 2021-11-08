<!-- Modal -->
<div class="modal fade" id="user-officer-edit-modal" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Petugas</h5>
                <button type="button" class="close clear-input-closed" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="user-officer-edit-form">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name_edit">Nama</label>
                                <input type="text" class="form-control" name="name_edit" id="name_edit" placeholder="Masukkan nama.." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email_edit">Email</label>
                                <input type="email" class="form-control" name="email_edit" id="email_edit" placeholder="Masukkan email.." required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password_edit">Password</label>
                                <input type="password" class="form-control" name="password_edit" id="password_edit" placeholder="Masukkan password.." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="role_id_edit">Level</label>
                                <select class="form-control select2-select" name="role_id_edit" id="role_id_edit" required>

                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary clear-input-closed" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>