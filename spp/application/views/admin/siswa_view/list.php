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
                            <table>
                                <tr>
                                    <td width="150"><a href="<?php echo site_url('admin/siswa/add') ?>"><i class="fas fa-plus"></i> Tambah Data </a></td>
                                    <td> <a href="<?php echo site_url('admin/siswa/cetak') ?>"><i  class="fas fa-print"></i> Cetak PDF</a></td>
                                </tr>
                            </table>
                            

                            
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>ID Kelas</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>ID Login</th>
                                        <th>ID SPP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($siswa as $siswa): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $siswa->nisn ?>
                                        </td>
                                        <td>
                                            <?php echo $siswa->nis ?>
                                        </td>
                                        <td>
                                            <?php echo $siswa->nama ?>
                                        </td>
                                        <td>
                                            <?php echo $siswa->id_kelas ?>
                                        </td>
                                        <td>
                                            <?php echo $siswa->alamat ?>
                                        </td>
                                        <td>
                                            <?php echo $siswa->no_telp ?>
                                        </td>
                                        <td>
                                            <?php echo $siswa->id_login ?>
                                        </td>
                                        <td>
                                            <?php echo $siswa->id_spp ?>
                                        </td>
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/siswa/edit/'.$siswa->nisn) ?>"
                                             class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/siswa/delete/'.$siswa->nisn) ?>')"
                                             href="<?php echo site_url('admin/siswa/delete/'.$siswa->nisn) ?>" 
                                             class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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

    <script>
    function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
    </script>

</body>

</html>
<!-- end document-->
