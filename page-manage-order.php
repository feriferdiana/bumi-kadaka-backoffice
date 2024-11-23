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
						<div class="mb-3"><h1 class="h3 text-purple-600"><strong>Kelola</strong> Pesanan</h1><div class="small">Tanggal update: 29 Agutus 2045 12:15</div></div>
                        <div>
                            <div class="d-flex mb-2">
                                <div class="">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari SKU, nama produk" aria-label="Search" autocomplete="off" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive pb-4 mb-4 " id="table-scroll">

                                <table class="table table-hover fixed">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">SKU</th>
                                            <th class="text-nowrap">Nama Produk</th>
                                            <th class="text-nowrap">Tanggal Pengiriman</th>
                                            <th class="text-nowrap">Nama Penerima</th>
                                            <th class="text-nowrap">Nomor Handphone</th>
                                            <th class="text-nowrap">Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="text-nowrap">SKU-1234</th>
                                            <td class="text-nowrap">Little Abid basic Knowledge Seri 1 - 3</td>
                                            <td class="text-nowrap">29 Agutus 2045 12:14</td>
                                            <td class="text-nowrap">Sigit Suharti</td>
                                            <td class="text-nowrap">+62 1234 5678 9012</td>
                                            <td class="text-nowrap">Jl. Perjuangan, Kel. Teluk Pucung, Kec. Bekasi Utara, Kota Bekasi, 12345</td>
                                        </tr>
                                        <tr>
                                            <th class="text-nowrap">SKU-1234</th>
                                            <td class="text-nowrap">Stand Mixer Vienta</td>
                                            <td class="text-nowrap">29 Agutus 2045 12:14</td>
                                            <td class="text-nowrap">Sigit Suhart0</td>
                                            <td class="text-nowrap">+62 1234 5678 9012</td>
                                            <td class="text-nowrap">Jl. Perjuangan, Kel. Teluk Pucung, Kec. Bekasi Utara, Kota Bekasi, 12345</td>
                                        </tr>
                                        <tr>
                                            <th class="text-nowrap">SKU-1234</th>
                                            <td class="text-nowrap">Swiden Knife Set + Sharperner</td>
                                            <td class="text-nowrap">29 Agutus 2045 12:14</td>
                                            <td class="text-nowrap">Sigit Suhart3</td>
                                            <td class="text-nowrap">+62 1234 5678 9012</td>
                                            <td class="text-nowrap">Jl. Perjuangan, Kel. Teluk Pucung, Kec. Bekasi Utara, Kota Bekasi, 12345</td>
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