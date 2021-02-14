<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Good Product</b></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Barang Kondisi Bagus
                </div>
                <div class="panel-body">
                    <div>
                        <table class="table table-bordered table-striped table-hover" id="tabel_good">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Tanggal</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Qty</th>
                                    <th>Nama Toko</th>
                                    <th>Kurir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($row->result() as $key => $data) { ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$data->tanggal?></td>
                                    <td><?=$data->kode_barang?></td>
                                    <td><?=$data->nama_barang?></td>
                                    <td><?=$data->qty?></td>
                                    <td><?=$data->toko?></td>
                                    <td><?=$data->kurir?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
    </div>