<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="col-lg-12 table-responsive" style="padding:0px;">
    <table class="table table-hovered table-bordered" id="datatable" style="font-size:13px;">
        <thead class="text-center">
            <tr>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Bulan</th>
                <th>Tanggal Bayar</th>
                <th>Jumlah Bayar</th>
                <th>Tagihan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td style="text-align:center;">{{ $data['nis'] }}</td>
                <td>{{ $data['nama_siswa'] }}</td>
                <td style="text-align:center;">{{ $data['nama_kelas'] }}</td>
                <td style="text-align:center;">{{ $data['name'] }} {{ $data['school_year'] }}</td>
                <td style="text-align:center;">{{ $data['paid_date'] }}</td>
                <td style="text-align:right;">{{ $data['amount_paid'] }}</td>
                <td style="text-align:right;">{{ $data['bill'] }}</td>
                <td style="text-align:center;">{{ $data['statuss'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
$('#datatable').DataTable({
    "scrollY":        "201px",
    "scrollCollapse": true,
    "paging":         false,
    "info": false
});
</script>