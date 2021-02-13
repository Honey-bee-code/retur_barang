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
        <div class="col-lg-4 col-lg-offset-4">
            <form action="<?=site_url('barang/tambah_banyak')?>" method="post">
                <div class="form-group">
                    <label for="jumlah_tambah">Jumlah Record yang Akan Ditambahkan</label>
                    <input type="text" name="jumlah_tambah" id="jumlah_tambah" maxlength="2" pattern="[0-9]+" class="form-control" required>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="generate" value="Generate" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>