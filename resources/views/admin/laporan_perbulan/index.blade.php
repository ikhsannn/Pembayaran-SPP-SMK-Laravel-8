@extends('layouts.stisla.index', ['title' => 'Laporan Perbulan', 'section_header' => 'Laporan Perbulan'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card px-3 py-3">
            <div class="col-lg-12">
                <form class="form-inline">
                    <h5 class="mr-sm-2"> Bulan : </h5>
                    <select class="form-control mb-2 mr-sm-2" id="bulan">
                        <option value="">Pilih Bulan.. </option>
                        @foreach($bulan as $data)
                        <option value="{{ $data['id'] }}">{{ $data['name'] }}</option>
                        @endforeach
                    </select>
                    <div class="input-group mb-2 mr-sm-2">
                        <a href="Javascript:void(0)" onclick="getData()" class="btn btn-primary" style="height:40px;font-size:14px;">FILTER</a>
                    </div>
                    <div class="input-group mb-2 mr-sm-2">
                        <a href="Javascript:void(0)" onclick="print()" class="btn btn-danger" style="height:40px;font-size:14px;">PRINT</a>
                    </div>
                </form>
            </div>
            <div class="col-lg-12" id="list-data">
            
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getData(){
        bulan = $("#bulan").val();
        $("#list-data").html("<center><img height='80px' width='200px' src='https://storage.mydatabase.id/loading_12.gif'></center>");
        $.ajax({
            url: "{{ url('data-laporan-perbulan') }}/"+bulan,
            type: "GET",
            dataType:'text',
            success: function (ajaxData){
                $("#list-data").html(ajaxData);
            }
        });
    }

    function print() {
        bulan = $("#bulan").val();
        window.open("{{ url('pdf-laporan-perbulan') }}/"+bulan, "_blank");
    }
</script>