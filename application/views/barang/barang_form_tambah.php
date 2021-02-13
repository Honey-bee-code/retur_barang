    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Barang</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a href="<?=site_url('barang')?>" class="btn btn-warning btn-sm">
                <i class="fa fa-undo"></i> Kembali</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                Tambah Data Barang
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <form action="proses.php" method="post">
                                <input type="hidden" name="total" value="<?=$_POST['jumlah_tambah']?>">
                                <table class="table">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Poliknik</th>
                                        <th>Gedung</th>
                                    </tr>
                                    <?php
                                    for ($i=1; $i<=$_POST['jumlah_tambah'] ; $i++) { ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td>
                                                <input type="text" name="nama-<?=$i?>" class="form-control" required>
                                            </td>
                                            <td>
                                                <input type="text" name="gedung-<?=$i?>" class="form-control" required>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                                <div class="form-group pull-right">
                                    <input type="submit" name="tambah" value="Simpan Semua" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>