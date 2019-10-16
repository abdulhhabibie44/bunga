<div class="container-scroller">
    <?php $this->load->view('header') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php $this->load->view('sidebar') ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Transaksi</h4>
                                <p class="card-description">
                                    Detail Pemesan
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Nama Pemesan</th>
                                                <td style="margin-right:50% !important"><?php echo $data[0]['nama_pemesan'] ?> </td>
                                            </tr>
                                            <tr>
                                                <th>Nomor Telpon Pemesan</th>
                                                <td><?php echo $data[0]['jml_produk_1'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tujuan Kiriman</th>
                                                <td><?php echo $data[0]['tujuan'] ?></td>
                                            </tr>
                                            <tr>
                                                                              
<?php

if ($data[0]['status_validasi']=="BELUM") { ?>
        <th><a style="margin-top: 6%;" href="<?php echo base_url('Data_penjualan/validasi/1/'.$idUpdate);  ?>" class="btn btn-success"> VALIDASI</a></th>
        <th><a style="margin-top: 6%;" href="<?php echo base_url('Data_penjualan/validasi/2/'.$idUpdate);  ?>" class="btn btn-danger"> TIDAK VALID</a></th>
<?php }elseif ($data[0]['status_validasi']=="VALID") { ?>
        <th><a style="margin-top: 6%; color: #ffffff;" class="btn btn-success"> VALID</a></th>
<?php }else{ ?>
        <th><a style="margin-top: 6%; color: #ffffff;" class="btn btn-danger"> TIDAK VALID</a></th>    
<?php }


?>
                                            </tr>          
                                            <td>
                                                <!-- <a href="<?php echo base_url('Detail' . $key['id_transkasi']) ?>" class="btn btn-sm btn-primary mdi mdi-eye" title="Detail Transaksi"></a> -->
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Transaksi</h4>
                                <p class="card-description">
                                    Detail Produk
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <?php
                                                foreach ($data as $key) {
                                                    $queryKat = $this->db->query("SELECT * FROM tb_produk");
                                                    $idKat = $key['id_produk_1'];
                                                    $idKat2 = $key['id_produk_2'];
                                                    $idKat3 = $key['id_produk_3'];
                                                    foreach ($queryKat->result() as $keyRevUkm) {
                                                        if ($keyRevUkm->id_produk == $idKat) {
                                                            $kat = $keyRevUkm->nama_produk;
                                                        }
                                                        if ($keyRevUkm->id_produk == $idKat) {
                                                            $kat2 = $keyRevUkm->nama_produk;
                                                        }
                                                        if ($keyRevUkm->id_produk == $idKat) {
                                                            $kat3 = $keyRevUkm->nama_produk;
                                                        }
                                                    } ?>
                                                    <th>Nama Produk 1</th>
                                                    <td><?php echo $kat ?></td>
                                                <?php } ?>
                                            </tr>
                                            <tr>
                                                <th>Jumlah Pesanan Produk 1</th>
                                                <td><?php echo $data[0]['jml_produk_1'] ?></td>
                                            </tr>
                                            <!-- <tr>
                                                <?php
                                                foreach ($data as $key) {
                                                    $queryKat = $this->db->query("SELECT * FROM tb_produk");
                                                    $idKat2 = $key['id_produk_2'];
                                                    foreach ($queryKat->result() as $keyRevUkm) {
                                                        if ($keyRevUkm->id_produk == $idKat2) {
                                                            $kat2 = $keyRevUkm->nama_produk;
                                                        }
                                                    } ?>
                                                    <th>Nama Produk 2</th>
                                                    <td><?php echo $kat2 ?></td>
                                                <?php } ?>
                                            </tr>
                                            <tr>
                                                <th>Jumlah Pesanan Produk 2</th>
                                                <td><?php echo $data[0]['jml_produk_2'] ?></td>
                                            </tr>
                                            <tr>
                                                <?php
                                                foreach ($data as $key) {
                                                    $queryKat = $this->db->query("SELECT * FROM tb_produk");
                                                    $idKat = $key['id_produk_3'];
                                                    foreach ($queryKat->result() as $keyRevUkm) {
                                                        if ($keyRevUkm->id_produk == $idKat) {
                                                            $kat = $keyRevUkm->nama_produk;
                                                        }
                                                    } ?>
                                                    <th>Nama Produk 3</th>
                                                    <td><?php echo $kat ?></td>
                                                <?php } ?>
                                            </tr>
                                            <tr>
                                                <th>Jumlah Pesanan Produk 3</th>
                                                <td><?php echo $data[0]['jml_produk_3'] ?></td>
                                            </tr>
                                            <tr>
                                                <?php
                                                foreach ($data as $key) {
                                                    $queryKat = $this->db->query("SELECT * FROM tb_produk");
                                                    $idKat = $key['id_produk_4'];
                                                    foreach ($queryKat->result() as $keyRevUkm) {
                                                        if ($keyRevUkm->id_produk == $idKat) {
                                                            $kat = $keyRevUkm->nama_produk;
                                                        }
                                                    } ?>
                                                    <th>Nama Produk 4</th>
                                                    <td><?php echo $kat ?></td>
                                                <?php } ?>
                                            </tr>
                                            <tr>
                                                <th>Jumlah Pesanan Produk 4</th>
                                                <td><?php echo $data[0]['jml_produk_4'] ?></td>
                                            </tr>
                                            <tr>
                                                <?php
                                                foreach ($data as $key) {
                                                    $queryKat = $this->db->query("SELECT * FROM tb_produk");
                                                    $idKat = $key['id_produk_5'];
                                                    foreach ($queryKat->result() as $keyRevUkm) {
                                                        if ($keyRevUkm->id_produk == $idKat) {
                                                            $kat = $keyRevUkm->nama_produk;
                                                        }
                                                    } ?>
                                                    <th>Nama Produk 5</th>
                                                    <td><?php echo $kat ?></td>
                                                <?php } ?>
                                            </tr>
                                            <tr>
                                                <th>Jumlah Pesanan Produk 5</th>
                                                <td><?php echo $data[0]['jml_produk_5'] ?></td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018
                            <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php $this->load->view('footer') ?>