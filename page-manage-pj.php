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
						<h1 class="h3 text-purple-600 mb-3"><strong>Data</strong> Penanggung Jawab</h1>
                        <div>
                            <div class="d-flex mb-2">
                                <div class="me-1">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari nama penanggung jawab" aria-label="Search" autocomplete="off" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive pb-4 mb-4" id="table-scroll">

                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
											<th>Nama Lengkap</th>
                                            <th>No Handphone</th>
                                            <th>Alamat Email</th>
                                            <th>Tanggal Bergabung</th>
                                            <th>Tanggal Terkahir Aktif</th>
                                            <th>Total Membuat Arisan</th>
                                            <th>Arisan Selesai</th>
                                            <th>Aktif Arisan</th>
                                            <th>Klien</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
											<td>Helen.S</td>
                                            <td>+62 1234-5678-1234</td>
                                            <td>sigit.suharti@protonmail.saveme</td>
                                            <td>13 Januari 1902</td>
                                            <td>13 Januari 1922</td>
											<td class="text-center">20</td>
											<td class="text-center">2</td>
                                            <td class="text-center">11</td>
                                            <td>
                                                <span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3">Tigaraksa</span>
                                                <span class="badge rounded-pill bg-light text-blue-700 border p-2 px-3">App</span>
                                            </td>
                                            <td class="text-nowrap"><a href="page-manage-pj-edit.php" class="btn btn-primary">Kelola Client</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
											<td>ibu nya Helen.B</td>
                                            <td>+62 1234-5678-1234</td>
                                            <td>si.chandra.nih@protonmail.saveme</td>
                                            <td>13 Januari 1903</td>
                                            <td>13 Januari 1923</td>
											<td class="text-center">50</td>
											<td class="text-center">10</td>
                                            <td class="text-center">19</td>
                                            <td>
                                                <span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3">Tigaraksa</span>
                                                <span class="badge rounded-pill bg-light text-blue-700 border p-2 px-3">App</span>
                                                <span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3">Jafra</span>
                                            </td>
                                            <td class="text-nowrap"><a href="page-manage-pj-edit.php" class="btn btn-primary">Kelola Client</a></td>
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