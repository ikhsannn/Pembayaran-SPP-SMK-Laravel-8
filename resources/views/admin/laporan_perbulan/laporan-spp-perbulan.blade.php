<table border="0" id="datatable" width="100%" style="margin-top:-20px;">
    <tr>
        <td width="28%" align="left">
            <img src="{{ public_path('img/logoo.jpg') }}" style="width: 10em; height: 8em; background-size: cover; margin-left: 20px">
        </td>
        <td width="" align="left">
            <!-- <h3>SMK SAHIDA LEMAHABANG</h3> -->
            <div style="line-height: 1.1rem">
                <p style="font-size:19px;font-weight:bold;">SMK SAHIDA LEMAHABANG</p>
                <p>Jl. KH. Wahid Hasyim No.84A Desa Cipeujeuh Wetan Kec. Lemahabang Kab. Cirebon Jawa Barat </p>
                <p>45183 fax : 02318639399 Email : smksahidalemahabang84@gmail.com</p>
            </div>
        </td>
    </tr>
</table>

<hr style="margin-top:10px;margin-bottom:20px;">

<table width="100%" style="text-align:left;" border="0">
      <tr>
          <td style="text-align:center;font-size:17px;font-weight:bold;" width="70%">LAPORAN TRANSAKSI PEMBAYARAN SPP</td>
      </tr>
      <tr>
        <td style="font-size:17px;text-align:center;">Bulan : <?= $bulan; ?></td>
      </tr>
      <tr>
        <td style="font-size:17px;text-align:center;">Tahun : <?= $tahun; ?></td>
      </tr>
</table>
<hr style="margin-top:20px;margin-bottom:20px;">
<table border="1" id="datatable" style="font-size:14px;" width="100%">
    <thead class="text-center">
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Bulan</th>
            <th>Tanggal Bayar</th>
            <th>Bayar</th>
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
<table width="100%" border="0" style="font-size:16px;margin-top:50px;margin-bottom:50px;">
    <tr>
        <td width="60%" align="left" style="line-height:0.8;">Mengetahui,</td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;">Kepala Sekolah</td>
        <td width="" align="left" style="padding-left:16px;line-height:0.8;">Bendahara Sekolah</td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;"></td>
        <td width="" align="left"></td>
    </tr>
    <tr>
        <td width="" align="left" style="line-height:0.8;">AHMAD HANIEF,SE.,M.Pd <br>
          NIP :</td>
        <td width="" align="left" style="padding-left:16px;line-height:0.8;">SITI FATHONAH <br>
          NIP :</td>
    </tr>
</table>