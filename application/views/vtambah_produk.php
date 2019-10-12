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
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Produk</h4>
                                <p class="card-description">
                                    Form Tambah Produk
                                </p>
                                <form class="forms-sample" action="<?php echo base_url('Produk/tambahdata') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama Produk</label>
                                        <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Kategori Produk</label>
                                        <select name="kategori_produk" class="form-control">
                                            <option value="zero">--== Pilih Kategori ==--</option>
                                            <?php
                                            $kat = $this->db->query("SELECT * FROM tb_kategori_produk");
                                            foreach ($kat->result() as $row_kat) { ?>
                                                <option value="<?php echo $row_kat->id_kategori ?>"><?php echo $row_kat->nama_kategori; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Harga</label>
                                        <input type="text" class="form-control" name="harga" placeholder="Harga Produk" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Deskripsi</label>
                                        <textarea class="form-control" rows="4" name="deskripsi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Gambar</label>
                                        <div class="input-group input-file" name="Fichier1">
                                            <input type="text" class="form-control" placeholder='Pilih Foto...' />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-choose" type="button">Cari</button>
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                                    <button class="btn btn-light">Batal</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
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