<!-- Modal -->
<div class="modal fade" id="educational-guidance-donation-transactions-edit-modal" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Transaksi</h5>
                <button type="button" class="close clear-input-closed" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="educational-guidance-donation-transactions-edit-form" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="student_identification_number_edit">NIS</label>
                                <input type="text" class="form-control" name="student_identification_number_edit" id="student_identification_number_edit" placeholder="Masukkan NIS.." value="{{ $student_information->student_identification_number }}" readonly>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="month">Bulan</label>
                                <select class="form-control select2-select" name="month_edit" id="month_edit" required>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group flatpickr-date">
                                <label for="paid_date">Tanggal Bayar</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="paid_date_edit" id="paid_date_edit" placeholder="Pilih tanggal.." data-input required>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <a class="input-button" title="Pilih tanggal.." data-toggle>
                                                <i class="fas fa-calendar-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="paid_date">Tanggal Bayar</label>
                                <input type="date" class="form-control" name="paid_date_edit" id="paid_date_edit" required>
                            </div> -->
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="amount_paid">Jumlah Bayar</label>
                                <input type="number" class="form-control" name="amount_paid_edit" id="amount_paid_edit" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="bill">Tagihan</label>
                                <input type="number" class="form-control" name="bill_edit" id="bill_edit" value="{{ $student_information->educational_guidance_donation->bill ?? null }}" readonly>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="is_paid">Status</label>
                                <select class="form-control select2-select" name="is_paid_edit" id="is_paid_edit" required>

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