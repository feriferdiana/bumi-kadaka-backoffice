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
                        <h1 class="h3 text-purple-600 mt-1"><strong>Kelola</strong> Daftar Pemenang</h1>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <div>
                                <div class="small">Nama Arisan</div>
                                <h3 class="mb-2 fw-bold text-purple-400">Little Abid basic Knowledge Seri 1 - 3 bulan</h3>

                                <div class="d-flex align-items-start flex-sm-row flex-column mb-3">
                                    <div class="me-4">
                                        <div class="small">Penanggung Jawab</div>
                                        <div class="mb-2">Mahveen Erlinda Insyira</div>
                                    </div>
                                    <div class="me-4">
                                        <div class="small">Tanggal Mulai</div>
                                        <div class="mb-2">29 Agutus 2045</div>
                                    </div>
                                    <div class="me-4">
                                        <div class="small">Jumlah Peserta</div>
                                        <div class="mb-2">3 peserta</div>
                                    </div>
                                </div>

                                <!-- card -->
                                <div class="card shadow-none border mb-2">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="d-flex align-items-center flex-sm-row flex-column">
                                                <div class="me-4">
                                                    <div class="small">Nama Peserta</div>
                                                    <div class="mb-2">Trina Arisanti Ratih</div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Nomor Telefon</div>
                                                    <div class="mb-2">+62 1234 5678 90</div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Pemenang Siklus</div>
                                                    <div class="mb-2"><span class="badge bg-blue-100 text-blue-700 border p-2 px-2">Siklus 1</span></div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Status</div>
                                                    <div class="mb-2"><span class="badge bg-green-500 p-2 px-2">Sudah Terkirim</span></div>
                                                </div>
                                            </div>
                                            <div class="me-4">
                                                <div class="small">Pengiriman</div>
                                                <div class="mb-2">
                                                    <select class="form-select">
														<option value="1" selected>Siklus 1</option>
														<option value="2" disabled>Siklus 2</option>
														<option value="3" disabled>Siklus 3</option>
													</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small">Alamat</div>
                                        <div>Jl. Sultan Babullah No.17-19, Ambon 0911 - 352807</div>
                                    </div>
                                </div>
                                <!-- //card-->

                                <!-- card -->
                                <div class="card shadow-none border mb-2">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="d-flex align-items-center flex-sm-row flex-column">
                                                <div class="me-4">
                                                    <div class="small">Nama Peserta</div>
                                                    <div class="mb-2">Trina Arisanti Ratih</div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Nomor Telefon</div>
                                                    <div class="mb-2">+62 1234 5678 90</div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Pemenang Siklus</div>
                                                    <div class="mb-2">-</div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Status</div>
                                                    <div class="mb-2">-</div>
                                                </div>
                                            </div>
                                            <div class="me-4">
                                                <div class="small">Pengiriman</div>
                                                <div class="mb-2">
                                                    <select class="form-select">
                                                        <option selected>Pilih</option>
														<option value="1" disabled>Siklus 1</option>
														<option value="2">Siklus 2</option>
														<option value="3">Siklus 3</option>
													</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small">Alamat</div>
                                        <div>Jl. Sultan Babullah No.17-19, Ambon 0911 - 352807</div>
                                    </div>
                                </div>
                                <!-- //card-->

                                <!-- card -->
                                <div class="card shadow-none border mb-2">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="d-flex align-items-center flex-sm-row flex-column">
                                                <div class="me-4">
                                                    <div class="small">Nama Peserta</div>
                                                    <div class="mb-2">Trina Arisanti Ratih</div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Nomor Telefon</div>
                                                    <div class="mb-2">+62 1234 5678 90</div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Pemenang Siklus</div>
                                                    <div class="mb-2">-</div>
                                                </div>
                                                <div class="me-4">
                                                    <div class="small">Status</div>
                                                    <div class="mb-2">-</div>
                                                </div>
                                            </div>
                                            <div class="me-4">
                                                <div class="small">Pengiriman</div>
                                                <div class="mb-2">
                                                    <select class="form-select">
                                                        <option selected>Pilih</option>
														<option value="1" disabled>Siklus 1</option>
														<option value="2">Siklus 2</option>
														<option value="3">Siklus 3</option>
													</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small">Alamat</div>
                                        <div>Jl. Sultan Babullah No.17-19, Ambon 0911 - 352807</div>
                                    </div>
                                </div>
                                <!-- //card-->
                                

                            </div>
                        </div>
                    </div>

				</div>
			</main>
			<!-- //main -->

<?php
	include('footer.php');
?>			