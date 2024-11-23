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
						<h1 class="h3 text-purple-600 mb-3"><strong>Kelola</strong> Produk</h1>
                        <div>
                            <div class="d-flex mb-2">
                                <div class="me-1">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari nama produk" aria-label="Search" autocomplete="off" />
                                    </form>
                                </div>
                                <div>
                                    <a href="page-manage-product-edit.php" class="btn btn-primary"><span class="material-icons small">add</span> Buat Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <div class="table-responsive pb-4 mb-4" id="table-scroll">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">IMG</th>
                                            <th class="text-nowrap">Cient ID</th>
											<th class="text-nowrap">SKU</th>
                                            <th class="text-nowrap">Merek</th>
                                            <th class="text-nowrap">Nama Produk</th>
                                            <th class="text-nowrap">Deskripsi</th>
                                            <th class="text-nowrap">Kategori</th>
                                            <th class="text-nowrap">Tanggal Ditambah</th>
                                            <th class="text-nowrap">Tanggal Perubahan</th>
                                            <th class="text-nowrap">Terpakai Diarisan</th>
											<th class="text-nowrap">Total Peserta</th>
											<th class="text-nowrap">Estimasi Produk Yang Dibutuhkan </th>
											<th class="text-nowrap">Sudah Terpakai</th>
                                            <th class="text-nowrap"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"><img src="assets/img/products/produk-sample-2.jpg" class="border rounded"></td>
											<td class="text-nowrap">Tigaraksa</td>
                                            <td class="text-nowrap">SKU - 123456789</td>
                                            <td class="text-nowrap">Teflon</td>
                                            <td class="text-nowrap">Little Abid basic Knowledge Seri 1 - 3</td>
                                            <td class="text-nowrap">
                                                <div class="box box--fixed one-line">Little Abid basic Knowledge Seri 1 - 3Little Abid basic Knowledge Seri 1 - 3</div>
                                            </td>
                                            <td>
                                                <span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3">Elektronik</span>
                                            </td>
                                            <td class="text-nowrap">29 Agutus 2045 11:13</td>
                                            <td class="text-nowrap">29 Agutus 2045 12:14</td>
                                            <td class="text-nowrap">3 Arisan</td>
											<td class="text-nowrap">9 peserta</td>
											<td class="text-nowrap text-center">18</td>
											<td class="text-nowrap">2 pemenang</td>
                                            <td class="text-nowrap"><a href="page-manage-product-edit.php" class="btn btn-primary">Ubah Produk</a></td>
                                        </tr>
										<tr>
                                            <td class="text-nowrap"><img src="assets/img/products/produk-sample-1.jpg" class="border rounded"></td>
                                            <td class="text-nowrap">Tigaraksa</td>
											<td class="text-nowrap">SKU - 123456789</td>
                                            <td class="text-nowrap">siTajam</td>
                                            <td class="text-nowrap">Swiden Knife Set + Sharperner</td>
                                            <td class="text-nowrap">
                                                <div class="box box--fixed one-line"> adahj d abdjabd abdjbadj bajdb ajbd jabd jhabhjda b jbdajhsd bahjsbd jab djahb djahbshdbahb ajhb dhjab dab dhjba</div>
                                            </td>
                                            <td>
                                                <span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3">Alat Masak</span>
                                            </td>
                                            <td class="text-nowrap">29 April 2045 11:13</td>
                                            <td class="text-nowrap">29 April 2045 12:14</td>
                                            <td class="text-nowrap">5 Arisan</td>
											<td class="text-nowrap">15 peserta</td>
											<td class="text-nowrap text-center">15</td>
											<td class="text-nowrap">15 pemenang</td>
                                            <td class="text-nowrap"><a href="page-manage-product-edit.php" class="btn btn-primary">Ubah Produk</a></td>
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