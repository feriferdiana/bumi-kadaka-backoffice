<?php
    include('action/users/action_check_session.php');
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

					<h1 class="h3 text-green-600 mb-3"><strong>Dasbor</strong> Analitik</h1>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="fw-bold text-green-600">Pengunjung Webiste</h4>
                                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                                        <div>
                                            <div class="mb-3">
                                                <div class=" text-center text-md-start">Total Pengunjung</div>
                                                <h1 class="fw-bold text-green-400 display-5 text-center text-md-start">176.000</h1>
                                            </div>
                                            <div class="mb-3">
                                                <div class=" text-center text-md-start">Total Mengirim Email</div>
                                                <h1 class="fw-bold text-green-400 display-5 text-center text-md-start">2400</h1>
                                            </div>
                                        </div>
                                        <div>
                                            <canvas id="partisipan" width="300vh" height="80vh"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="fw-bold text-green-600">Rekap Pengunjung</h4>

                                    <div class="mb-2">
                                        <h1 class="fw-bold text-green-400 display-2 m-0 text-center text-md-start">620</h1>
                                        <div class="mb-0 text-center text-md-start">
                                            <span class="text-danger"> <span class="material-icons small">arrow_downward</span> -3.65% </span>
                                            <span class="text-muted">Sejak minggu lalu</span>
										</div>
                                    </div>
                                    <hr />
                                    <div class="d-flex align-items-center flex-sm-row flex-column">
                                        <div class="me-3 text-center text-md-start">
                                            <div>November 2024</div>
                                            <h1 class="fw-bold text-green-500 display-4 m-0">220</h1>
                                        </div>
                                        <div class="me-3 text-center text-md-start">
                                            <div>Oktober 2024</div>
                                            <h1 class="fw-bold text-blue-200 display-4 m-0">400</h1>
                                        </div>
                                        <div class="me-3 text-center text-md-start">
                                            <div>September 2024</div>
                                            <h1 class="fw-bold text-green-500 display-4 m-0">25</h1>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="fw-bold text-green-600">Daftar Nama Pengunjung</h4>
                                    <div class="table-responsive" id="table-vscroll" style="height: 320px;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Nama</th>
                                                    <th class="text-nowrap">Email</th>
                                                    <th class="text-nowrap">Tanggal Berkunjung</th>
                                                    <th class="text-nowrap">Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap">Amanda</td>
                                                    <td class="text-nowrap">amanda@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Jakarta</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Nina</td>
                                                    <td class="text-nowrap">nina@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Bogor</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Intan</td>
                                                    <td class="text-nowrap">bayu@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Surabaya</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Stevi</td>
                                                    <td class="text-nowrap">stevi@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Malang</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Clara</td>
                                                    <td class="text-nowrap">clara@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Padang</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Risma</td>
                                                    <td class="text-nowrap">risma@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Yogyakarta</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Anggun</td>
                                                    <td class="text-nowrap">bayu@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Banyuwangi</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Syerna</td>
                                                    <td class="text-nowrap">syerna@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Bekasi</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Bayu</td>
                                                    <td class="text-nowrap">bayu@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Banten</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap">Ayu</td>
                                                    <td class="text-nowrap">ayu@mail.com</td>
                                                    <td class="text-nowrap">21 November 2024</td>
                                                    <td class="text-nowrap">Bandung</td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

				</div>
			</main>
			<!-- //main -->



    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="assets/js/dashboard.js"></script>

<?php
	include('footer.php');
?>			