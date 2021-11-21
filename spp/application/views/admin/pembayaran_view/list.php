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
                                    <td width="150"><a href="<?php echo site_url('admin/pembayaran/add') ?>"><i class="fas fa-plus"></i> Tambah Data </a></td>
                                    <td> <a href="<?php echo site_url('admin/pembayaran/cetak') ?>"><i  class="fas fa-print"></i> Cetak PDF</a></td>
                                </tr>
                            </table>
                            

                            
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID Pembayaran</th>
                                        <th>ID Petugas</th>
                                        <th>NISN</th>
                                        <th>Tanggal Bayar</th>
                                        <th>ID SPP</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Bulan Dibayar</th>
                                        <th>Tahun Dibayar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pembayaran as $pembayaran): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $pembayaran->id_pembayaran ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->id_petugas ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->nisn ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->tgl_bayar ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->id_spp ?>
                                        </td>
                                        <td>
                                            <?php echo rupiah ($pembayaran->jumlah_bayar) ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->bulan_dibayar ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->tahun_dibayar ?>
                                        </td>
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/pembayaran/edit/'.$pembayaran->id_pembayaran) ?>"
                                             class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/pembayaran/delete/'.$pembayaran->id_pembayaran) ?>')"
                                             href="<?php echo site_url('admin/pembayaran/delete/'.$pembayaran->id_pembayaran) ?>" 
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
