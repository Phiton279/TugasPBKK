                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            HOMEPAGE <small>Aplikasi POS (Point of Sale).</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                                <h3>
                                
                                <td><?php echo $total_penjualan ?></td>
                                
                                </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                            Barang Terjual

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-apple fa-5x"></i>
                                <h3><td><?php echo $total_produk ?></td></h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Jumlah Produk

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa fa-money fa-5x"></i>
                                <h3><td><?php echo $total_transaksi ?></td></h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                Transaksi

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-black">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3><td><?php echo $total_pembeli ?></td></h3>
                            </div>
                            <div class="panel-footer back-footer-white">
                                Pembeli

                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Kategori</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_kategori ?></td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
