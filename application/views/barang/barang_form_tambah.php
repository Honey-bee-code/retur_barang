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
                        <div class="col-md-4 col-md-offset-4">
                            <form action="" method="post">
                                <div class="form-group <?=form_error('kode') ? 'has-error' : null?>">
                                    <label for="kode">Kode Barang *</label>
                                    <input type="text" name="kode" value="<?=set_value('kode')?>" class="form-control" autofocus>
                                    <?=form_error('kode')?>
                                </div>
                                <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                                    <label for="nama">Nama Barang *</label>
                                    <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control">
                                    <?=form_error('nama')?>
                                </div>
                                <div class="form-group <?=form_error('toko') ? 'has-error' : null?>">
                                    <label for="toko">Nama Toko *</label>
                                    <input type="text" name="toko" value="<?=set_value('toko')?>" class="form-control">
                                    <?=form_error('toko')?>
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