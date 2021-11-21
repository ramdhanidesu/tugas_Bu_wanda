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
                        <a href="<?php echo site_url('admin/petugas/') ?>"><i class="fas fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url("admin/petugas/edit") ?>" method="post"
                            enctype="multipart/form-data" >

                            <input type="hidden" name="id_petugas" value="<?php echo $petugas->id_petugas?>" />

                            <div class="form-group">
                                <label for="nama_petugas">Nama Petugas</label>
                                <input class="form-control <?php echo form_error('nama_petugas') ? 'is-invalid':'' ?>"
                                 type="text" name="nama_petugas" placeholder="Nama Petugas" value="<?php echo $petugas->nama_petugas ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_petugas') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_login">ID Login</label>
                                <input class="form-control <?php echo form_error('id_login') ? 'is-invalid':'' ?>"
                                 type="number" name="id_login" min="0" placeholder="ID Login" value="<?php echo $petugas->id_login ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_login') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input class="form-control <?php echo form_error('image') ? 'is-invalid':'' ?>"
                                 type="text" name="image" min="0" placeholder="Image" value="<?php echo $petugas->image ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
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
