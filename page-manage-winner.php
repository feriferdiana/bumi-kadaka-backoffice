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
					<h1 class="h3 text-purple-600 mb-3"><strong>Kelola</strong> Daftar Pemenang</h1>

					<div class="card">
                        <div class="card-body">
                            <div class="table-responsive pb-4 mb-4" id="table-scroll">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Nama Arisan</th>
                                            <th class="text-nowrap">Nama Produk</th>
                                            <th class="text-nowrap">Penangung Jawab</th>
                                            <th class="text-nowrap">Tanggal Mulai</th>
                                            <th class="text-nowrap text-center">Jumlah Peserta</th>
                                            <th class="text-nowrap"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap fw-bold">Arisan RT/RW Ibu Uhuy</td>
                                            <td class="text-nowrap">Little Abid basic Knowledge Seri 1 - 3</td>
                                            <td class="text-nowrap">Mahveen Erlinda Insyira</td>
                                            <td class="text-nowrap">29 Agutus 2045</td>
                                            <td class="text-nowrap text-center">3</td>
                                            <td class="text-nowrap"><a href="page-manage-winner-edit.php" class="btn btn-primary"><span class="material-icons md-14">manage_accounts</span> Kelola Pemenang</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bold">Akhir Tahun Ceria Ibu-Ibu 2023</td>
                                            <td class="text-nowrap">Swiden Knife Set + Sharperner</td>
                                            <td class="text-nowrap">Mahveen Erlinda Insyira</td>
                                            <td class="text-nowrap">29 Agutus 2045</td>
                                            <td class="text-nowrap text-center">5</td>
                                            <td class="text-nowrap"><a href="page-manage-winner-edit.php" class="btn btn-primary"><span class="material-icons md-14">manage_accounts</span> Kelola Pemenang</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bold">Akhir Tahun Ceria Ibu-Ibu 2024</td>
                                            <td class="text-nowrap">Stand Mixer Vienta</td>
                                            <td class="text-nowrap">Mahveen Erlinda Insyira</td>
                                            <td class="text-nowrap">29 Agutus 2045</td>
                                            <td class="text-nowrap text-center">10</td>
                                            <td class="text-nowrap"><a href="page-manage-winner-edit.php" class="btn btn-primary"><span class="material-icons md-14">manage_accounts</span> Kelola Pemenang</a></td>
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