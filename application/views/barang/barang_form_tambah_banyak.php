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
                            <form action="<?=site_url('barang/tambah_banyak_proses')?>" method="post">
                                <input type="text" name="total" value="<?=$this->input->post('jumlah_tambah')?>">
                                <table class="table">
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                    </tr>
                                    <?php
                                    for ($i=1; $i<=$this->input->post('jumlah_tambah') ; $i++) { ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td>
                                                <input type="text" name="kode-<?=$i?>" class="form-control" required>
                                            </td>
                                            <td>
                                                <input type="text" name="nama-<?=$i?>" class="form-control" required>
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