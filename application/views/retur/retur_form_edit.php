    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Retur</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a href="<?=site_url('retur')?>" class="btn btn-warning btn-sm">
                <i class="fa fa-undo"></i> Kembali</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                Edit Data Retur
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?=$row->id_retur?>">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal *</label>
                                    <input type="date" name="tanggal" value="<?=date('Y-m-d')?>" class="form-control">
                                </div>
                                <div class="form-group <?=form_error('kurir') ? 'has-error' : null?>">
                                    <label for="kurir">Barang di bawa oleh *</label>
                                    <input type="text" name="kurir" value="<?=$row->kurir?>" class="form-control">
                                    <?=form_error('kurir')?>
                                </div>
                                <div class="form-group <?=form_error('barang') ? 'has-error' : null?>">
                                    <label for="barang">Cari Barang *</label>
                                    <div class="form-group input-group">
                                        <input type="hidden" name="barang" id="id_barang" value="<?=$row->id_barang?>">
                                        <input type="text" name="kode_barang" id="kode_barang" value="<?=$row->kode_barang?>" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-flat btn-info" data-toggle="modal" data-target="#modal-barang">
                                            <i class="fa fa-search"></i> Cari</button>
                                        </span>
                                    </div>
                                        <input type="text" name="nama_barang" id="nama_barang" value="<?=$row->nama_barang?>" class="form-control" readonly>
                                    <?=form_error('barang')?>
                                </div>
                                <div class="form-group <?=form_error('toko') ? 'has-error' : null?>">
                                    <label for="toko">Nama Toko *</label>
                                    <input type="text" name="toko" value="<?=$row->toko?>" class="form-control">
                                    <?=form_error('toko')?>
                                </div>
                                <div class="form-group <?=form_error('qty') ? 'has-error' : null?>">
                                    <label for="qty">Quantity *</label>
                                    <input type="number" name="qty" value="<?=$row->qty?>" class="form-control">
                                    <?=form_error('qty')?>
                                </div>
                                <div class="form-group <?=form_error('kondisi') ? 'has-error' : null?>">
                                    <label for="kondisi">Kondisi Barang *</label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" name="kondisi" value="Good" <?=$row->kondisi == "Good" ? "checked" : null?>> Bagus
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="kondisi" value="Bad" <?=$row->kondisi == "Bad" ? "checked" : null?>> Jelek
                                        </label>
                                    </div>
                                    <?=form_error('kondisi')?>
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
    
    <div class="modal fade" id="modal-barang">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Silahkan Pilih Barang</h4>
                </div>
                <div class="modal-body table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="tabel_barang_modal">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div> 

    