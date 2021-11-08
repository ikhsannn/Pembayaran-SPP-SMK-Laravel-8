<!-- Modal -->
<div class="modal fade" id="student-class-edit-modal" data-backdrop="static" data-keyboard="false"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kelas</h5>
                <button type="button" class="close clear-input-closed" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="student-class-edit-form">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="class_code_edit">Kode Kelas</label>
                                <input type="text" class="form-control" name="class_code_edit" id="class_code_edit"
                                    placeholder="Masukkan kode kelas.." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name_edit">Kelas</label>
                                <input type="text" class="form-control" name="name_edit" id="name_edit"
                                    placeholder="Masukkan nama kelas.." required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="school_year_edit">Tahun Ajaran</label>
                                <input type="number" class="form-control" name="school_year_edit" id="school_year_edit"
                                    placeholder="Masukkan tahun ajaran.." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="homeroom_teacher_edit">Wali Kelas</label>
                                <input type="text" class="form-control" name="homeroom_teacher_edit"
                                    id="homeroom_teacher_edit" placeholder="Masukkan wali kelas.." required>
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