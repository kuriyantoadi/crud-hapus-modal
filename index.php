﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="https://pencarikode.blogspot.com/" name="description" />
    <meta content="https://pencarikode.blogspot.com/" name="author" />
    <title>PENCARI KODE</title>
     <!-- TABLE STYLES-->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
						<div class="col-md-8 col-md-offset-2">
						</br></br></br></br>
						<a href="https://pencarikode.blogspot.com/" target="_blank" ><h1>https://pencarikode.blogspot.com/</h1></a>
						<div class="panel panel-primary">
						<div class="panel-heading">
                            <div class="alert alert-warning">
								<a href="data_add.php" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
							</div>
                        </div>
						<div class="panel-body">
                            <div class="table">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Angkatan</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
											include 'koneksi.php';
											$no=0;
											$result = mysqli_query($koneksi, "SELECT * FROM m_siswa ORDER BY nama ASC");
											while($row = mysqli_fetch_assoc($result)) {
											$no++
										?>
                                        <tr class="">
                                            <td><?echo $row['id'];?></td>
                                            <td><?echo $row['angkatan'];?></td>
                                            <td><?echo $row['nama'];?></td>
                                            <td><?echo $row['nim'];?></td>
                                            <td><?echo $row['jurusan'];?></td>
                                            <td>
												<a href="data_edit.php?id=<?echo $row['id'];?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-check"></i> Edit</a>
												<a href="javascript:;" data-id="<? echo $row['id'] ?>" data-toggle="modal" data-target="#modal-konfirmasi" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
											</td>
                                        </tr>
										<?}?>
                                    </tbody>
                                </table>
                            </div>
                         </div>  
                        </div>
						</div>
						
		<!-- modal konfirmasi-->
		<div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				 
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Konfirmasi</h4>
				</div>
				<div class="modal-body btn-info">
					Apakah Anda yakin ingin menghapus data ini ?
				</div>
				<div class="modal-footer">
					<a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				</div>
				 
				</div>
			</div>
		</div>
    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
	<script src="js/hapus.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
   
</body>
</html>