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
					<div class="mb-3 d-flex">
                              <h1 class="h3 text-purple-600 mt-1"><strong>Kelola</strong> Client ID</h1>
                         </div>
                         <div>
                            <div class="d-flex mb-2">
                                <div class="">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari Client ID" aria-label="Search" autocomplete="off" />
                                    </form>
                                </div>
                                <div>
                                    <a href="page-manage-clientid-edit.php" class="btn btn-primary"><span class="material-icons small">add</span> Buat Client ID</a>
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
                                            <th class="text-nowrap">Client ID</th>
                                            <th class="text-nowrap">Client Name</th>
                                            <th class="text-nowrap">Produk Terhubung</th>
                                            <th class="text-nowrap">Alamat Pengiriman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">TIGARAKSA</td>
                                            <td class="text-nowrap">PT Tigaraksa Satria</td>
                                            <td class="text-nowrap">219</td>
                                            <td class="text-nowrap">Menara Duta Lantai 4, Jalan H.R. Rasuna Said Kav. B-9, Setiabudi, Jakarta 12910</td>
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