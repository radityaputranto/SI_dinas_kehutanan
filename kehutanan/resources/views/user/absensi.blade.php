@extends('layouts.user')

@section('content')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Detail Absensi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">Detail Absensi</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="container">
                    <div class="col-12 card">
                        <marquee>  !! Mengingatkan untuk senam bulan januari akan di laksanakan pada tanggal 21 jnauari jam 6 pagi di lapangan belakang Terima Kasih.</marquee>
                    </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <!-- ribbon lembur-->
                        <!-- <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-success">Lembur</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>60 menit 12/1/2017</li>
                                    <li>120 menit 15/1/2017</li>
                                    
                                </ul>
                            </p>
                        </div> -->

                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-danger">Telat</div>
                            <p class="ribbon-content">
                                <ul>
                                    @foreach($absensi as $data)
                                    <?php if ($data['SCAN_TELAT'] != null): 

                                        
                                        $jam_masuk = strtotime("07:00:00");
                                        $jam_telat = strtotime($data['SCAN_TELAT']);

                                        $telat =  round(abs($jam_masuk - $jam_telat) / 60,2);
                                        
                                    ?>
                                        <li>{{$telat}} menit | {{$data['TGL_ABSEN']}}</li>
                                    <?php endif ?>
                                    @endforeach
                                    
                                </ul>
                            </p>
                        </div>

                        <!-- ribbon pulang Cepat -->
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-warning">Pulang Cepat</div>
                            <p class="ribbon-content">
                                <ul>
                                    @foreach($absensi as $data)
                                    <?php if ($data['SCAN_PUL_CPT'] != null): 

                                        
                                        $jam_pulang = strtotime("15:30:00");
                                        $jam_pul_cpt = strtotime($data['SCAN_PUL_CPT']);

                                        $pulang =  round(abs($jam_pulang - $jam_pul_cpt) / 60,2);
                                        
                                    ?>
                                        <li>{{$pulang}} menit | {{$data['TGL_ABSEN']}}</li>
                                    <?php endif ?>
                                    @endforeach
                                </ul>
                            </p>
                        </div>

                        <!-- ribbon pulang Cepat -->
                        <!-- <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-info">Telat Senam</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>5 menit 21/1/2017</li>
                                   
                                </ul>
                            </p>
                        </div> -->

                         <!-- Tidak Absen -->
                        <!-- <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-primary">Tidak Ikut Senam</div>
                            <p class="ribbon-content">
                                <ul>
                                    <li>10/1/2017</li>
                                    
                                </ul>
                            </p>
                        </div> -->
                        <!-- Tidak Absen -->
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-default">Tidak Absen</div>
                            <p class="ribbon-content">
                                <ul>
                                    
                                    
                                </ul>
                            </p>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Daftar Absensi Pribadi</h4>
                                <h6 class="card-subtitle"></h6>
                               

                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <!-- <th>No</th> -->
                                                
                                                <!-- <th>Nama</th> -->
                                                <th>Tanggal</th>
                                                <th>Scan Masuk</th>
                                                <th>Scan Pulang</th>
                                                <th>Scan Telat</th>
                                                <th>Scan Pul Cpt</th>
                                                <!-- <th>Scan Lembur</th> -->
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($absensi as $data)
                                            <tr>
                                                <td>{{$data['TGL_ABSEN']}}</td>
                                                <td>{{$data['SCAN_MASUK']}}</td>
                                                <td>{{$data['SCAN_KELUAR']}}</td>
                                                <td><span style="background-color: #F2DEDE">{{$data['SCAN_TELAT']}}</span></td>
                                                <td><span style="background-color: #F2DEDE">{{$data['SCAN_PUL_CPT']}}</span></td>
                                                <!-- <td>{{$data['SCAN_LEMBUR']}}</td> -->
                                                
                                            </tr>
                                            @endforeach 
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <!-- <button class="btn btn-outline-success waves-effect waves-light" type="button"><span class="btn-label"><i class="mdi mdi-file-excel"></i></span>Excell</button> -->
                                                </td>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Raditya Putranto
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
@endsection