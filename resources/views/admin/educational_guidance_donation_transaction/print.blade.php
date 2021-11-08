<div style="border: 2px solid black; width: 70%;">
  <div style="width: 100%; display: flex; padding: 5px; align-items: center;box-sizing: border-box">
    <div style="margin-right: 20px">
    <img src="{{asset('img/logoo.png')}}" style="width: 10em; height: 8em; background-size: cover; margin-left: 20px">
    </div>
    <div>
      <h3>SMK SAHIDA LEMAHABANG</h3>
      <div style="line-height: 1.5rem">
        <p>Jl. KH. Wahid Hasyim No.84A Desa Cipeujeuh Wetan Kec. Lemahabang Kab. Cirebon Jawa Barat </p>
        <p>45183 fax : 02318639399 Email : smksahidalemahabang84@gmail.com</p>
      </div>
    </div>
  </div>
  <div style="width: 100%; padding: 5px; border-top: 2px solid black; box-sizing: border-box">
    <h4 style="text-align: center">BUKTI PEMBAYARAN SUMBANGAN PEMBINAAN PENDIDIKAN (SPP)</h4>
    <table border="0" cellpadding="10" align="center" style="margin-bottom: 30px">
      <tr>
        <td>NIS</td>
        <td>:</td>
        <td>{{ $student_information->student_information->student_identification_number }}</td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $student_information->name }}</td>
      </tr>
      <tr>
        <td>Kelas dan Tahun Ajaran</td>
        <td>:</td>
        <td>{{ $student_information->student_information->student_class->name ?? null }} - {{ $student_information->student_information->school_year ?? null }}</td>
      </tr>
    </table>
    <div style="display: block; width: 100%; overflow-x: hidden;">
      <table border="1" cellpadding="10" cellspacing="0" align="center" style="font-size: 0.8em">
        <tr>
          <td>NIM</td>
          <td>NAMA SISWA</td>
          <td>KELAS DAN TAHUN AJARAN</td>
          <td>BULAN</td>
          <td>TANGGAL BAYAR</td>
          <td>JUMLAH BAYAR</td>
          <td>TAGIHAN</td>
          <td>STATUS</td>
        </tr>
        @foreach($educational_guidance_donation_transactions as $key => $educational_guidance_donation_transaction)
        <tr>
          <td>{{ $student_information->student_information->student_identification_number }}</td>
          <td>{{ $student_information->name }}</td>
          <td>{{ $student_information->student_information->student_class->name ?? null }} - {{ $student_information->student_information->school_year ?? null }}</td>
          <td>{{ $educational_guidance_donation_transaction->month }}</td>
          <td>{{ indonesian_date_format($educational_guidance_donation_transaction->paid_date) }}</td>
          <td>{{ $educational_guidance_donation_transaction->amount_paid }}</td>
          <td>{{ $educational_guidance_donation_transaction->bill }}</td>
          <td>{{ get_educational_guidance_donation_transaction_status_paid($educational_guidance_donation_transaction->is_paid) }}</td>
        </tr>
        @endforeach
      </table>
    </div>
    <div style="width: 100%; display: flex; justify-content: space-between; padding: 20px 60px; box-sizing: border-box">
      <div>
        <p>Mengetahui, </br>Kepala Sekolah</p>
        <br>
        <br>
        <br>
        <p>
          AHMAD HANIEF,SE.,M.Pd <br>
          NIP :
        </p>
      </div>
      <div>
        <p>Bendahara Sekolah</p>
        <br>
        <br>
        <br>
        <p>
          SITI FATHONAH <br>
          NIP :
        </p>
      </div>
    </div>
  </div>
</div>

<!-- <script>
  window.print();
</script> -->