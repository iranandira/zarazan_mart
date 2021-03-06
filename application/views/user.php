<link rel="stylesheet" type="text/css" href="<?= base_url();  ?>assets/css/cart.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataT">
<div class="wrapper">
	<div class="core mt-3">
		<div class="product">
			<div class="total shadow">
				<h2 class="title badge badge-info">Menu</h2>
				<hr>
				<table class="table table-bordered">
					<tr>
						<th>
                            <a href="<?= base_url('Home/profile') ?>">
                                <i class="fa fa-user"></i> Profil
                            </a>
                        </th>
					</tr>
					<tr>
						<th>
                            <a href="<?= base_url('Home/cart') ?>">    
                                <i class="fa fa-shopping-cart"></i> Keranjang
                            <a>    
                        </th>
					</tr>
					<tr>
						<th>
                            <a href="<?= base_url('Home/user') ?>">     
                                <i class="fa fa-money"></i> Transaksi
                            </a>
                        </th>
					</tr>
					<tr>
						<th>
                            <a href="<?= base_url('Home/ganti_password') ?>">     
                                <i class="fa fa-key"></i> Ubah Password
                            </a>
                        </th>
					</tr>
				</table>
				<br>
				</form>
			</div>
		</div>
		<div class="product col-md-9">
			<div class=" shadow">
                <div class="card-body">
                    <h3>Data Transaksi</h3>
					<div class="table-responsive">
						<div class="item form-group">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Transaksi</th>
										<th>Status Transaksi</th>
										<th>Detail Pembelian</th>
										<th>Total Bayar</th>
										<th>Status Bayar</th>
									</tr>
								</thead>
								<tbody>
									<?php 
                                    $no=1;
                                    foreach($transaksi as $trs):?>
									<tr>
										<td><?=$no ?></td>
										<td><?=$trs->kode_transaksi ?></td>
										<td><?=$trs->transaction_status ?></td>
										<td>
										  <span class="badge badge-primary"><a href="<?= base_url('Home/detail_trs/'.$trs->id) ?>" class="text-light"> Lihat</a></span>
										</td>
										<td><?="Rp.".number_format($trs->gross_amount) ?></td>
										<td><?php 
                                            if($trs->status_code == 201){
                                                echo "<span class='badge badge-warning'>Pending</span>";
                                            }else if($trs->status_code == 200){
                                                echo "<span class='badge badge-success'>Success</span>";
                                            }
                                        ?></td>
									</tr>
									<?php
                                    $no++;
                                    endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
		</div>
	</div>
</div>

<hr>

<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>