@extends('layouts.admin')

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
                        <h3 class="text-themecolor m-b-0 m-t-0">List Telat</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sistem Absensi dan tunjangan </a></li>
                            <li class="breadcrumb-item active">List Telat</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- table data pegawai -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Daftar Seluruh Pegawai</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Golongan</th>
                                                <th>Eselon</th>
                                                <th>Departemen</th>
                                                <th>Tanggal</th>
                                                <th>Absen Masuk</th>
                                                <th>Denda</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>21031510353</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>II</td>
                                                <td>II B</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>20/1/2018</td>
                                                <td>07.00</td>
                                                <td>Rp. 30,000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>21031510353</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" width="40" class="img-circle" /> Arijit Singh</a>
                                                </td>
                                                <td>II</td>
                                                <td>II B</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>21/1/2018</td>
                                                <td>06.40</td>
                                                <td>Rp. 10,000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>21031510353</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" width="40" class="img-circle" /> Govinda jalan</a>
                                                </td>
                                                <td>II</td>
                                                <td>II B</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>22/1/2018</td>
                                                <td>08.30</td>
                                                <td>Rp. 120,000</td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button class="btn btn-outline-info waves-effect waves-light" type="button"><span class="btn-label"><i class="mdi mdi-file-pdf"></i></span>Pdf</button>
                                                    <button class="btn btn-outline-success waves-effect waves-light" type="button"><span class="btn-label"><i class="mdi mdi-file-excel"></i></span>Excell</button>
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