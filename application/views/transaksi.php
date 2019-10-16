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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Transaksi</h4>
                                <p class="card-description">
                                    Daftar Pembelian
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pemesan</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah Pesanan</th>
                                                <th>Tujuan Kiriman</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $no = 1;
                                                foreach ($array as $key) {
                                                    $queryKat = $this->db->query("SELECT * FROM tb_produk");
                                                    $idKat = $key['id_produk_1'];
                                                    foreach ($queryKat->result() as $keyRevUkm) {
                                                        if ($keyRevUkm->id_produk == $idKat) {
                                                            $kat = $keyRevUkm->nama_produk;
                                                        }
                                                    } ?>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $key['nama_pemesan'] ?> </td>
                                                    <td><?php echo $kat ?></td>
                                                    <td><?php echo $key['jml_produk_1'] ?></td>
                                                    <td><?php echo $key['tujuan'] ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('Data_penjualan/detail/' . $key['id_transaksi']) ?>" class="btn btn-sm btn-primary mdi mdi-eye" title="Detail Transaksi"></a>
                                                    </td>
                                                <?php } ?>
                                            </tr>

                                        </tbody>
                                    </table>
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