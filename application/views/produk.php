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
                                <h4 class="card-title">Kategori Produk</h4>
                                <a href="<?php echo base_url('Produk/tambahdata') ?>" class="btn btn-primary mdi mdi-plus-box" style="margin-bottom: 16px;">Tambah Data</a>
                                <p class="card-description">
                                    List Kategori Produk
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $no = 1;
                                                foreach ($array as $key) {
                                                    $queryKat = $this->db->query("SELECT * FROM tb_kategori_produk");
                                                    $idKat = $key['id_kategori'];
                                                    foreach ($queryKat->result() as $keyRevUkm) {
                                                        if ($keyRevUkm->id_kategori == $idKat) {
                                                            $kat = $keyRevUkm->nama_kategori;
                                                        }
                                                    } ?>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $key['nama_produk'] ?> </td>
                                                    <td><?php echo $kat ?></td>
                                                    <td><?php echo $key['harga_produk'] ?></td>
                                                    <td><?php echo $key['deskripsi_produk'] ?></td>
                                                    <td><img class="img23" src="<?php echo ($key['nama_foto'] != '' ? base_url('./upload/produk/' . $key['nama_foto']) : base_url('./upload/nama_foto/img_defautl.jpg')); ?>" alt="Foto Produk"></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-dark mdi mdi-pencil"></a>
                                                            <a href="#" class="btn btn-sm btn-danger mdi mdi-delete"></a>
                                                        </div>
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