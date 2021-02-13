
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url('_assets/images/bee.png')?>">
    <title>Aplikasi Retur Barang</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?=base_url()?>_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>_assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>_assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="<?=base_url()?>_assets/css/sb-admin.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>">Aplikasi <b>Retur Barang</b></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages" style="width: 160px">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php 
                                $pp = base_url('_uploads/photos/'.$this->fungsi->user_login()->photo);
                                $dp = base_url('_assets/images/picture.jpg');
                                $null = base_url('_uploads/photos/');
                            ?>
                            <img src="<?=$pp == $null ? $dp : $pp?>" class="user-image" alt="User Image" style="width: 120px">
                            <p><?=$this->fungsi->user_login()->nama?><br>
                                <small><?=$this->fungsi->user_login()->alamat?></small>
                            </p>
                        </a>
                        </li>
                        <?php if($this->session->userdata('level') == 1) { ?>
                        <li><a href="<?=site_url('user')?>"><i class="fa fa-gear fa-fw"></i> Atur User</a>
                        </li>
                        <?php } ?>
                        <li class="divider"></li>
                        <li><a href="<?=site_url('auth/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li <?=$this->uri->segment(1) == 'barang' || $this->uri->segment(1) == 'good' ? 'class="active"' : ''?>>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li <?=$this->uri->segment(1) == 'barang' && $this->uri->segment(2) == 'all' ? 'style="background-color: #DCDCDC"' : ''?>>
                                    <a href="<?=base_url('barang')?>">Data Barang</a>
                                </li>
                                <li <?=$this->uri->segment(1) == 'barang' && $this->uri->segment(2) == 'good' ? 'style="background-color: #DCDCDC"' : ''?>>
                                    <a href="<?=base_url('barang/good')?>">Good Product</a>
                                </li>
                                <li <?=$this->uri->segment(1) == 'barang' && $this->uri->segment(2) == 'bad' ? 'style="background-color: #DCDCDC"' : ''?>>
                                    <a href="<?=base_url('barang/bad')?>">Bad Product</a>
                                </li>
                            </ul>
                        </li>
                        <li <?=$this->uri->segment(1) == 'retur' || $this->uri->segment(1) == 'laporan' ? 'class="active"' : ''?>>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Opsi 1<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li <?=$this->uri->segment(1) == 'retur' ? 'style="background-color: #DCDCDC"' : ''?>>
                                    <a href="<?=site_url('retur')?>">Data Retur</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Opsi 2<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="">Form Cppk</a>
                                </li>
                                <li>
                                    <a href="#">Laporan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php echo $contents ?>
        </div>
    </div>
    <!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="<?=base_url()?>_assets/js/jquery-1.10.2.js"></script>
<script src="<?=base_url()?>_assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>_assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<!-- Page-Level Plugin Scripts - Tables -->
<script src="<?=base_url()?>_assets/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?=base_url()?>_assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="<?=base_url()?>_assets/js/sb-admin.js"></script>
<script>
$(document).ready(function() {
    
    $('#tabel_barang').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        "processing": true,
        "serverSide": true,
        "ajax": "<?=base_url('barang/data_json')?>",
        // menambahkan nomor urut
        "fnCreatedRow": function (row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                        },
        order: [1, "asc"],
        columnDefs : [
                    {
                        "searchable" : false,
                        "orderable" : false,
                        "targets" : 4,
                        "width" : "140px",
                        "render" : function(data, type, row){
                            var btn = "<center><a href=\"barang/edit/"+data+"\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i> Edit</a> <a href=\"barang/hapus/"+data+"\" onclick=\"return confirm('Yakin akan menghapus data ini?')\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i> Hapus</a></center>"
                            return btn
                        }
                    },
                    {
                        "searchable" : false,
                        "orderable" : false,
                        "targets" : 0,
                        "width" : "30px",
                    }
                ],
        language : 
                {
                    "decimal":        "",
                    "emptyTable":     "Data tidak ditemukan",
                    "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ jumlah data",
                    "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Tampilkan _MENU_ data",
                    "loadingRecords": "Memuat...",
                    "processing":     "Sedang memproses...",
                    "search":         "Cari: ",
                    "zeroRecords":    "Tidak ada data yang cocok dengan pencarian",
                    "paginate": {
                        "first":      "Awal",
                        "last":       "Akhir",
                        "next":       "Sesudahnya",
                        "previous":   "Sebelumnya"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
    });

    $('#tabel_barang_modal').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        "processing": true,
        "serverSide": true,
        "ajax": "<?=base_url('barang/data_json_modal')?>",
        // menambahkan nomor urut
        "fnCreatedRow": function (row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                        },
        order: [1, "asc"],
        columnDefs : [
                    {
                        "data" : null,
                        "searchable" : false,
                        "orderable" : false,
                        "targets" : 3,
                        "width" : "70px",
                        "render" : function(data, type, row){
                            var btn = "<center><button class=\"btn btn-info btn-xs\" id=\"pilih\" data-id=\""+data[3]+"\" data-kode=\""+data[1]+"\" data-nama=\""+data[2]+"\"><i class=\"fa fa-check\"></i>Pilih</button></center>"
                            return btn
                        }
                    },
                    {
                        "searchable" : false,
                        "orderable" : false,
                        "targets" : 0,
                        "width" : "30px",
                    }
                ],
        language : 
                {
                    "decimal":        "",
                    "emptyTable":     "Data tidak ditemukan",
                    "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ jumlah data",
                    "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Tampilkan _MENU_ data",
                    "loadingRecords": "Memuat...",
                    "processing":     "Sedang memproses...",
                    "search":         "Cari: ",
                    "zeroRecords":    "Tidak ada data yang cocok dengan pencarian",
                    "paginate": {
                        "first":      "Awal",
                        "last":       "Akhir",
                        "next":       "Sesudahnya",
                        "previous":   "Sebelumnya"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
    });

    $('#tabel_retur').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        "processing": true,
        "serverSide": true,
        "ajax": "<?=base_url('retur/data_json')?>",
        // menambahkan nomor urut
        "fnCreatedRow": function (row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                        },
        order: [1, "asc"],
        columnDefs : [
                    {
                        "searchable" : false,
                        "orderable" : false,
                        "targets" : 8,
                        "width" : "140px",
                        "render" : function(data, type, row){
                            var btn = "<center><a href=\"retur/edit/"+data+"\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i> Edit</a> <a href=\"retur/hapus/"+data+"\" onclick=\"return confirm('Yakin akan menghapus data ini?')\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i> Hapus</a></center>"
                            return btn
                        }
                    },
                    {
                        "searchable" : false,
                        "orderable" : false,
                        "targets" : 0,
                        "width" : "30px",
                    }
                ],
        language : 
                {
                    "decimal":        "",
                    "emptyTable":     "Data tidak ditemukan",
                    "info":           "Menampilkan _START_ sampai _END_ dari _TOTAL_ jumlah data",
                    "infoEmpty":      "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Tampilkan _MENU_ data",
                    "loadingRecords": "Memuat...",
                    "processing":     "Sedang memproses...",
                    "search":         "Cari: ",
                    "zeroRecords":    "Tidak ada data yang cocok dengan pencarian",
                    "paginate": {
                        "first":      "Awal",
                        "last":       "Akhir",
                        "next":       "Sesudahnya",
                        "previous":   "Sebelumnya"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
    });

    $(document).on('click', '#pilih', function(){
        

        $('#id_barang').val($(this).data('id'))
        $('#nama_barang').val($(this).data('nama'))
        $('#kode_barang').val($(this).data('kode'))
        $('#modal-barang').modal('hide')
        
    })

});
</script>
</body>

</html>
