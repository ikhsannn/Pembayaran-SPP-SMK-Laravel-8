<!-- Modal -->
<div class="modal fade" id="educational-guidance-donation-create-modal" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jenis SPP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.spp.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="educational_guidance_donation_code">ID SPP</label>
                                <input type="text" class="form-control{{ $errors->has('educational_guidance_donation_code') ? ' is-invalid' : '' }}" name="educational_guidance_donation_code" id="educational_guidance_donation_code" placeholder="Masukkan id spp.." value="{{ old('educational_guidance_donation_code') }}" required>

                                @if($errors->has('educational_guidance_donation_code'))
                                <div class="invalid-feedback d-block">
                                    {{ $errors->first('educational_guidance_donation_code') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Jenis SPP</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="Masukkan jenis spp.." value="{{ old('name') }}" required>

                                @if($errors->has('name'))
                                <div class="invalid-feedback d-block">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="bill">Tagihan</label>
                                <input type="number" class="form-control{{ $errors->has('bill') ? ' is-invalid' : '' }}" name="bill" id="bill" value="{{ old('bill') }}" placeholder="Masukkan tagihan.." required>

                                @if($errors->has('bill'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('bill') }}
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