<!-- Modal -->
<div class="modal fade" id="educational-guidance-donation-transaction-create-modal" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.transaksi.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="student_identification_number">NIS</label>
                                <input type="text" class="form-control" name="student_identification_number" id="student_identification_number" placeholder="Masukkan NIS.." value="{{ $student_information->student_identification_number }}" readonly>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="month">Bulan</label>
                                <select class="form-control select2-select" name="month" id="month" required>
                                    <option value="" selected>Pilih Bulan..</option>
                                    @foreach($bulan as $data)
                                    <option value="{{ $data['id'] }}">{{ $data['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group flatpickr-date">
                                <label for="paid_date">Tanggal Bayar</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="paid_date" id="paid_date" placeholder="Pilih tanggal.." data-input required>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <a class="input-button" title="Pilih tanggal.." data-toggle>
                                                <i class="fas fa-calendar-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="amount_paid">Jumlah Bayar</label>
                                <input type="number" class="form-control" name="amount_paid" id="amount_paid" placeholder="{{ $student_information->educational_guidance_donation->bill ?? null }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="bill">Tagihan</label>
                                <input type="number" class="form-control" name="bill" id="bill" value="{{ $student_information->educational_guidance_donation->bill ?? null }}" readonly>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="is_paid">Status</label>
                                <select class="form-control select2-select" name="is_paid" id="is_paid" required>
                                    <option value="" selected>Pilih Status..</option>
                                    <option value="0">Belum Lunas</option>
                                    <option value="1">Lunas</option>
                                </select>
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