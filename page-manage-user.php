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
						<h1 class="h3 text-purple-600 mb-3"><strong>Data</strong> Peserta</h1>
                        <div>
                            <div class="d-flex mb-2">
                                <div class="me-1">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari nama peserta" aria-label="Search" autocomplete="off" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive pb-4 mb-4 text-nowrap" id="table-scroll">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Nama Lengkap</th>
                                            <th>No Handphone</th>
                                            <th>Alamat Email</th>
                                            <th>Alamat Pengiriman</th>
                                            <th>Tanggal Bergabung</th>
                                            <th>Tanggal Perubahan</th>
                                            <th>Total Mengikuti Arisan</th>
                                            <th>Aktif Arisan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
											<td>Sigit Suharti</td>
                                            <td>+62 1234-5678-1234</td>
                                            <td>sigit.suharti@protonmail.saveme</td>
                                            <td>Jl. Perjuangan, Kel. Teluk Pucung, Kec. Bekasi Utara, Kota Bekasi, 12345</td>
                                            <td>13 Januari 1902</td>
											<td>13 Januari 2022</td>
											<td class="text-nowrap text-center">20</td>
											<td class="text-nowrap text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
											<td>ibu Chandra Simangunsong</td>
                                            <td>+62 1234-5678-1234</td>
                                            <td>si.chandra.nih@protonmail.saveme</td>
                                            <td>Jl. Perjuangan, Kel. Teluk Pucung, Kec. Bekasi Utara, Kota Bekasi, 12345</td>
                                            <td>13 Januari 1903</td>
											<td>13 Januari 2022</td>
											<td class="text-nowrap text-center">50</td>
											<td class="text-nowrap text-center">12</td>
                                        </tr>
										

                                        
                                    </tbody>
                                </table>
                            </div>

                            <nav aria-label="Page navigation">
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