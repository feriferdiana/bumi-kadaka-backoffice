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

                    <?php 
                        include 'action/action_dashboard_page.php';
                    ?>

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
                                                <h1 class="fw-bold text-green-400 display-5 text-center text-md-start"><?=$dataCountVisit?></h1>
                                                <input type="hidden" id="countVisit" value="<?=$dataCountVisit?>" />
                                            </div>
                                            <div class="mb-3">
                                                <div class=" text-center text-md-start">Total Mengirim Email</div>
                                                <h1 class="fw-bold text-green-400 display-5 text-center text-md-start"><?=$dataCountEmail['total_email']?></h1>
                                                <input type="hidden" id="countEmail" value="<?=$dataCountEmail['total_email']?>" />
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
                                        <h1 class="fw-bold text-green-400 display-2 m-0 text-center text-md-start"><?=$dataCountVisit?></h1>
                                    </div>
                                    <hr />

                                    <?php

                                    $currentMonth = date('F Y');
                                    $oneMonthBefore = date('F Y', strtotime('-1 month'));
                                    $twoMonthBefore = date('F Y', strtotime('-2 month'));
                                    ?>

                                    <div class="d-flex align-items-center flex-sm-row flex-column">
                                        <div class="me-3 text-center text-md-start">
                                            <div><?=$currentMonth?></div>
                                            <h1 class="fw-bold text-green-500 display-4 m-0"><?=$dataCurrentMonth['total_current']?></h1>
                                        </div>
                                        <div class="me-3 text-center text-md-start">
                                            <div><?=$oneMonthBefore?></div>
                                            <h1 class="fw-bold text-blue-200 display-4 m-0"><?=$dataOneBeforeMonth['total_current']?></h1>
                                        </div>
                                        <div class="me-3 text-center text-md-start">
                                            <div><?=$twoMonthBefore?></div>
                                            <h1 class="fw-bold text-green-500 display-4 m-0"><?=$datatwoBeforeMonth['total_current']?></h1>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="fw-bold text-green-600">Daftar Pengunjung</h4>
                                    <div class="table-responsive" id="table-vscroll" style="height: 320px;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">Alamat</th>
                                                    <th class="text-nowrap">Kota</th>
                                                    <th class="text-nowrap">Provinsi</th>
                                                    <th class="text-nowrap">Tanggal Berkunjung</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (isset($pengunjung)) : ?>
                                                    <?php foreach ($pengunjung as $row): ?>
                                                        <tr>
                                                            <td class="text-nowrap"><?=$row['address']?></td>
                                                            <td class="text-nowrap"><?=$row['city']?></td>
                                                            <td class="text-nowrap"><?=$row['state']?></td>
                                                            <td class="text-nowrap"><?=$row['created_date']?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif ?>
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