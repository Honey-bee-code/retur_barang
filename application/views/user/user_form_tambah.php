<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Users</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tambah Data User
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="<?=site_url('user')?>" class="btn btn-warning btn-sm">
                        <i class="fa fa-undo"></i> Kembali</a> 
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form action="" enctype="multipart/form-data" method="post">
                                <!-- <?=validation_errors()?> -->
                                <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                                    <label for="nama">Nama *</label>
                                    <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control" autofocus>
                                    <?=form_error('nama')?>
                                </div>
                                <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                                    <label for="username">Username *</label>
                                    <input type="text" name="username" value="<?=set_value('username')?>" class="form-control" >
                                    <?=form_error('username')?>
                                </div>
                                <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                                    <label for="password">Password *</label>
                                    <input type="password" name="password" value="<?=set_value('password')?>" class="form-control">
                                    <?=form_error('password')?>
                                </div>
                                <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                                    <label for="passconf">Konfirmasi Password *</label>
                                    <input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control">
                                    <?=form_error('passconf')?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" class="form-control"><?=set_value('alamat')?></textarea>
                                </div>
                                <div class="form-group <?=form_error('level') ? 'has-error' : null?>">
                                    <label for="level">Level *</label>
                                    <select name="level" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <option value="1" <?=set_value('level') == 1 ? "selected" : null?>>Admin</option>
                                        <option value="2" <?=set_value('level') == 2 ? "selected" : null?>>Kasir</option>
                                    </select>
                                    <?=form_error('level')?>
                                </div>

                                <div class="form-group">
                                    <label>Photo</label>
                                    <small>(Biarkan kosong jika tidak ada gambar)</small>
                                    <input name="photo" type="file" accept="image/*" class="form-control">
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
   