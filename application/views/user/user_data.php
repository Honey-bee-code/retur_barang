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
                        <a href="<?=site_url('user/tambah')?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="box-header">
                        <h3 class="box-title">Data Pengguna</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped" id="tabel">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Username</th>
                                    <!-- <th>Password</th> -->
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Level</th>
                                    <th>Photo</th>
                                    <th class="text-center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($row->result() as $key => $data) { ?>
                                <tr>
                                    <td class="text-center" width="5%"><?=$no++?></td>
                                    <td><?=$data->username?></td>
                                    <!-- <td><?=$data->password?></td> -->
                                    <td><?=$data->nama?></td>
                                    <td><?=$data->alamat?></td>
                                    <td><?=$data->level == 1 ? "Admin" : "Kasir"?></td>
                                    <td>
                                        <?php if($data->photo != null){ ?>
                                        <img src="<?=base_url('_uploads/photos/'.$data->photo)?>" style="width: 100px">
                                        <?php } ?>
                                    </td>
                                    <td class="text-center" width="140px">
                                        <form action="<?=site_url('user/hapus')?>" method="post">
                                            <input type="hidden" name="userid" value="<?=$data->id_user?>">
                                            <a href="<?=site_url('user/edit/' .$data->id_user)?>" class="btn btn-success btn-xs">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>
                                            <?php if($this->fungsi->user_login()->username != $data->username){ ?>
                                            <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs" >
                                                <i class="fa fa-trash-o"></i> Hapus
                                            </button>
                                            <?php } ?>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>