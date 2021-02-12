<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Retur</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                Tambah Data Retur
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="<?=site_url('retur')?>" class="btn btn-warning btn-sm">
                        <i class="fa fa-undo"></i> Kembali</a>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal *</label>
                                    <input type="date" name="tanggal" value="<?=date('Y-m-d')?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="kurir">Barang di bawa oleh *</label>
                                    <input type="text" name="kurir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="barang">Cari Barang *</label>
                                    <input type="text" name="barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="toko">Nama Toko *</label>
                                    <input type="text" name="toko" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="qty">Quantity *</label>
                                    <input type="number" name="qty" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="kondisi">Kondisi Barang *</label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" name="kondisi" value="Bagus" required> Bagus
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="kondisi" value="Jelek"> Jelek
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                                    <button type="reset" class="btn btn-sm"><i class="fa fa-refresh"></i> Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>