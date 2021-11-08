<!-- Modal -->
<div class="modal fade" id="educational-guidance-donation-edit-modal" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Jenis Pembayaran</h5>
                <button type="button" class="close clear-input-closed" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" id="educational-guidance-donation-edit-form">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="educational_guidance_donation_code">ID Pembayaran</label>
                                <input type="text" class="form-control" name="educational_guidance_donation_code_edit" id="educational_guidance_donation_code_edit" placeholder="Masukkan id spp.." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Jenis Pembayaran</label>
                                <input type="text" class="form-control" name="name_edit" id="name_edit" placeholder="Masukkan jenis spp.." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="bill">Tagihan</label>
                                <input type="number" class="form-control" name="bill_edit" id="bill_edit" placeholder="Masukkan tagihan.." required>
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