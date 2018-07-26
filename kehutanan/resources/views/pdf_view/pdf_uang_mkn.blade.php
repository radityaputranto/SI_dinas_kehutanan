<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">


.container {
  width: 21cm;
  min-height: 29.7cm;
}

.invoice {
  background: #fff;
  width: 100%;
  padding-top:  5px;
  padding-left:  50px;
  padding-right:  50px;
}

.logo {
  width: 3.7cm;
}

.document-type {
  text-align: right;
  color: #444;
}

.conditions {
  font-size: 0.7em;
  color: #666;
}

.bottom-page {
  font-size: 0.7em;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
	</style>
</head>
<body>
	
  <div class="invoice">
    <div class="row">
      <div class="col-5">
        <img src="https://image.ibb.co/c7BgYo/logo_pdf.png" class="logo">
      </div>

      <div class="col-7" style="">
        <h1 class="document-type display-4">Tunjagan Daerah</h1>
        
      </div>
    </div>


    <div class="row">
      <div class="col-7" style="float: left;">
        <p>
          <strong> Dinas Kehutanan Jawa Timur</strong><br>
          Jalan Raya Juanda No. 5,<br>
          Sedati Agung,Kabupaten Sidoarjo <br>
          Jawa Timur - 61253
        </p>
      </div>
      <div class="col-5" style="text-align: right;">
        <br><br><br>
        <p>
          <strong>{{auth()->user()->NAMA_EMP}}</strong><br>
          {{auth()->user()->NIP_EMP}} <br>
          Golongan : {{auth()->user()->GOLONGAN_EMP}} <em> | Eselon : {{auth()->user()->ESELON_EMP}}</em><br>
          {{auth()->user()->NOTELP_EMP}}<br>
          {{auth()->user()->ALAMAT_EMP}}<br>
        </p>
      </div>
    </div>
    <br>
    <br>
    <h4>Detail Uang Makan yang di terima </h4>
    <h6>Uang Makan Maksimal 22 Hari</h6>
    <br>
    @foreach($tun_emp as $data)
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Deskripsi</th>
          <th>Kuantitas</th>
          <th>Nominal Satuan</th>
          <th>Total</th>
          
        </tr>
      </thead>
      
        <tr>
          <td>Tunjagnan Daerah</td>
          <td>{{$data['UANG_MKN']/$uang_mkn}} Hari</td>
          <td>Rp. {{$uang_mkn}}</td>
          <td>Rp. {{$data['UANG_MKN']}}</td>
        </tr>

        
      
    </table>
    <br><br>

    <div class="row" style="margin-left: 50%">
      <div class="col-8">
      </div>
      <div class="col-4">
        <table class="table table-sm text-right">
          <tr >
            
            <td>Sub Total</td>
            <td class="text-right" style="padding-left: 90px">Rp. {{$data['UANG_MKN']}}</td>
          </tr>

          

          <tr style="background-color: #E2EDD7">
            
            <td><strong>Total </strong></td>
            <td class="text-right" style="padding-left: 90px"><strong>Rp. {{$data['UANG_MKN']}}</strong></td>
          </tr>
        </table>
      </div>
    </div>
    @endforeach 
    <p class="conditions">
      Tunjangan dapat di ambil di bidang Keuangan 
      <br>
      Dinas Kehutanan Jawa Timur
      <br><br>
      Prosedur pencairan tunjangan melalui BPKAD
      dan di transfer melalu bank Jatim
      <br>
      <br><br>
      Untuk Info detail atau konfirmasi dapat menghubungi (031) 8666549
    </p>
    
    
  </div>

</body>
</html>