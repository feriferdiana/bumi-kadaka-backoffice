<?php
	include('header.php');
?>

		<!-- main wrapper -->
		<div class="main">

			<?php
				include('navbar.php');
			?>

			<!-- main -->
			<main class="content">
				<div class="container-fluid p-0">

                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
					    <h1 class="h3 text-purple-600 mb-3"><strong>Pengaturan</strong> Subsidi Pengiriman</h1>
                        <div>
                            <div class="d-flex mb-2">
                                <div class="me-1">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari nama subsidi" aria-label="Search" autocomplete="off" />
                                    </form>
                                </div>
                                <div>
                                    <a href="page-setting-subsidi-edit.php" class="btn btn-primary"><span class="material-icons small">add</span> Tambah Jumlah Peserta</a>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <div class="table-responsive pb-4" id="table-scroll">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Nama Supsidi</th>
											<th class="text-nowrap">Tanggal Ditambah</th>
                                            <th class="text-nowrap">Tanggal Perubahan</th>
                                            <th class="text-nowrap">Nilai</th>
                                            <th class="text-nowrap">Kuota</th>
                                            <th class="text-nowrap">Kuota Tersisa</th>
                                            <th class="text-nowrap">Metode</th>
                                            <th class="text-nowrap"></th>
											<th class="text-nowrap text-center">Status</th>
											<th class="text-nowrap">Tersedia di Arisan</th>
                                            <th class="text-nowrap"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
											<td class="text-nowrap fw-bold">Hari Kemerdekaan 2022</td>
                                            <td class="text-nowrap">22 Maret 2022 12:32</td>
                                            <td class="text-nowrap">29 Agutus 2045 11:13</td>
                                            <td class="text-nowrap text-end">Rp 15.000</td>
                                            <td class="text-nowrap text-center">44</td>
											<td class="text-nowrap text-center">13</td>
                                            <td class="text-nowrap">Produk</td>
                                            <td class="text-nowrap">Swiden Knife Set + Sharperner</td>
											<td class="text-nowrap text-center"><span class="badge rounded-pill bg-green-200 text-green-600 p-2 px-3 d-block">Aktif</span></td>
											<td class="text-nowrap text-center">9</td>
                                            <td class="text-nowrap"><a href="page-setting-subsidi-edit.php" class="btn btn-primary"><span class="material-icons md-14">edit</span> Ubah</a></td>
                                        </tr>
                                        <tr>
											<td class="text-nowrap fw-bold">Tahun Baru</td>
                                            <td class="text-nowrap">22 Maret 2022 12:32</td>
                                            <td class="text-nowrap">29 Agutus 2045 11:13</td>
                                            <td class="text-nowrap text-end">Rp 10.000</td>
                                            <td class="text-nowrap text-center">44</td>
											<td class="text-nowrap text-center">12</td>
                                            <td class="text-nowrap">Waktu</td>
                                            <td class="text-nowrap">08/08/2022 - 09/06/2022</td>
											<td class="text-nowrap text-center"><span class="badge rounded-pill bg-red-100 text-red-600 p-2 px-3 d-block">Aktif</span></td>
											<td class="text-nowrap text-center">43</td>
                                            <td class="text-nowrap"><a href="page-setting-subsidi-edit.php" class="btn btn-primary"><span class="material-icons md-14">edit</span> Ubah</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>

				</div>
			</main>
			<!-- //main -->

<?php
	include('footer.php');
?>			