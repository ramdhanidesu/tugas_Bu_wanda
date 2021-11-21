<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view("admin/_partials/navbar.php") ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card mb-3">
                        <div class="card-header">
                             <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        </div>
                   
                        <div class="card mb-3">
                        <div class="card-header">
                        <a href="<?php echo site_url('admin/siswa/') ?>"><i class="fas fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url("admin/siswa/edit") ?>" method="post"
                            enctype="multipart/form-data" >

                            <input type="hidden" name="nisn" value="<?php echo $siswa->nisn?>" />

                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
                                 type="number" name="nis" min="0" placeholder="NIS" value="<?php echo $siswa->nis ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nis') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Siswa</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                 type="text" name="nama" placeholder="Nama Siswa" value="<?php echo $siswa->nama ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_kelas">ID Kelas</label>
                                <input class="form-control <?php echo form_error('id_kelas') ? 'is-invalid':'' ?>"
                                 type="number" name="id_kelas" placeholder="ID Kelas" value="<?php echo $siswa->id_kelas ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_kelas') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                 type="text" name="alamat" placeholder="Alamat" value="<?php echo $siswa->alamat ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_telp">No Telepon</label>
                                <input class="form-control <?php echo form_error('no_telp') ? 'is-invalid':'' ?>"
                                 type="number" name="no_telp" placeholder="No Telepon" value="<?php echo $siswa->no_telp ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_login">ID Login</label>
                                <input class="form-control <?php echo form_error('id_login') ? 'is-invalid':'' ?>"
                                 type="number" name="id_login" placeholder="ID Login" value="<?php echo $siswa->id_login ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_login') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_spp">ID SPP</label>
                                <input class="form-control <?php echo form_error('id_spp') ? 'is-invalid':'' ?>"
                                 type="number" name="id_spp" placeholder="ID SPP" value="<?php echo $siswa->id_spp ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_spp') ?>
                                </div>
                            </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                            </form>
                        </div>
                        <div class="card-footer small text-muted">
                            * required fields
                        </div>
                    </div>
                    <?php $this->load->view("admin/_partials/footer.php") ?>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <?php $this->load->view("admin/_partials/js.php") ?>
    <!-- <?php //$this->load->view("admin/_partials/scrolltop.php") ?>
     --><?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
<!-- end document-->
