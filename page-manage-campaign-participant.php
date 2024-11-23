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
                    <div class="mb-3 d-flex">
                        <div class="me-2">
                            <a href="javascript: history.back(-1);" class="btn btn-link p-0 m-0 border"><i class="material-icons mt-1 ms-2">arrow_back_ios</i></a>
                        </div>
                        <h1 class="h3 text-purple-600 mt-1"><strong>Laporan</strong> Akhir Tahun Ceria Ibu-Ibu 2023</h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link small active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">Siklus 1</button>
                                    <button class="nav-link small" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">Siklus 2</button>
                                    <button class="nav-link small" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">Siklus 3 <span class="ms-2 text-red-700"><span class="material-icons md-18">error</span> </button>
                                    <button class="nav-link small" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">Siklus 4</button>
                                    <button class="nav-link small" id="nav-5-tab" data-bs-toggle="tab" data-bs-target="#nav-5" type="button" role="tab" aria-controls="nav-con5tact" aria-selected="false">Siklus 5</button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                                    <div class="table-responsive">
                                        <table class="table mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">No.</th>
                                                    <th class="text-nowrap w-100">Nama Peserta</th>
                                                    <th class="text-nowrap">Tanggal Pembayaran</th>
                                                    <th class="text-nowrap text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Trina Arisanti Ratih</td>
                                                    <td class="text-nowrap">14 Agutus 2045 10:14</td>
                                                    <td><span class="badge rounded-pill bg-green-100 text-green-700 border p-2 px-3 d-block">Pemenang</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Primaningtyas Puspita Rahayu</td>
                                                    <td class="text-nowrap">14 Agutus 2045 12:46</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Mawla Kamakshi Rayadinata</td>
                                                    <td class="text-nowrap">14 Agutus 2045 14:21</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Kirana Ailani Damayanti</td>
                                                    <td>14 Agutus 2045 17:11</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Primaningtyas Puspita Rahayu</td>
                                                    <td class="text-nowrap">15 Agutus 2045 09:21</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                                    <div class="table-responsive">
                                        <table class="table mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">No.</th>
                                                    <th class="text-nowrap w-100">Nama Peserta</th>
                                                    <th class="text-nowrap">Tanggal Pembayaran</th>
                                                    <th class="text-nowrap text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Trina Arisanti Ratih</td>
                                                    <td class="text-nowrap">14 Agutus 2045 10:14</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Primaningtyas Puspita Rahayu</td>
                                                    <td class="text-nowrap">14 Agutus 2045 12:46</td>
                                                    <td><span class="badge rounded-pill bg-green-100 text-green-700 border p-2 px-3 d-block">Pemenang</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Mawla Kamakshi Rayadinata</td>
                                                    <td class="text-nowrap">14 Agutus 2045 14:21</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Kirana Ailani Damayanti</td>
                                                    <td>14 Agutus 2045 17:11</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Primaningtyas Puspita Rahayu</td>
                                                    <td class="text-nowrap">15 Agutus 2045 09:21</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                                    <div class="table-responsive">
                                        <table class="table mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap">No.</th>
                                                    <th class="text-nowrap w-100">Nama Peserta</th>
                                                    <th class="text-nowrap">Tanggal Pembayaran</th>
                                                    <th class="text-nowrap text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Trina Arisanti Ratih</td>
                                                    <td class="text-nowrap">14 Agutus 2045 10:14</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Primaningtyas Puspita Rahayu</td>
                                                    <td class="text-nowrap">14 Agutus 2045 12:46</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Mawla Kamakshi Rayadinata</td>
                                                    <td class="text-nowrap">14 Agutus 2045 14:21</td>
                                                    <td><span class="badge rounded-pill bg-red-100 text-red-700 border p-2 px-3 d-block">Menunggu Pembayaran</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Kirana Ailani Damayanti</td>
                                                    <td>14 Agutus 2045 17:11</td>
                                                    <td><span class="badge rounded-pill bg-red-100 text-red-700 border p-2 px-3 d-block">Menunggu Pembayaran</span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Primaningtyas Puspita Rahayu</td>
                                                    <td class="text-nowrap">15 Agutus 2045 09:21</td>
                                                    <td><span class="badge rounded-pill bg-blue-100 text-blue-700 border p-2 px-3 d-block">Lunas</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
                                    <div class="text-center mt-5">
                                        <div class="mb-2">
                                            <span class="material-icons md-48 text-purple-400">alarm_on</span>
                                        </div>
                                        Siklus belum dimulai.
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab">
                                    <div class="text-center mt-5">
                                        <div class="mb-2">
                                            <span class="material-icons md-48 text-purple-400">alarm_on</span>
                                        </div>
                                        Siklus belum dimulai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="javascript: void(0);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalBatal">Batalkan Arisan</a>
                    </div>

				</div>
			</main>
			<!-- //main -->

            <!-- modal -->
            <div class="modal fade" id="modalBatal" tabindex="-1" aria-labelledby="modalBatal" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="#" method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembatalan Arisan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h4>Apakah Anda yakin untuk membatalkan Arisan ini?</h4>
                            <div class="my-3">
                                <label for="ex-pembatalan" class="form-label">Alasan</label>
                                <textarea class="form-control" id="ex-pembatalan" rows="3" required></textarea>
                                <div id="ex-pembatalanHelp" class="form-text d-none">Mohon lengkapi alasan pembatalan.</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger">Batalkan Arisan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- //modal -->

<?php
	include('footer.php');
?>			