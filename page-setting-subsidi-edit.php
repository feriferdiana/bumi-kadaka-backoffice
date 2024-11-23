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
					    <h1 class="h3 text-purple-600 mb-3"><strong>Pengaturan</strong> Subsidi Pengiriman</h1>
                        <div>
                            <div class="d-flex mb-2  flex-sm-row flex-column">
                                <div class="me-1 mb-2">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari nama subsidi" aria-label="Search" autocomplete="off" />
                                    </form>
                                </div>
                                <div class="text-center">
                                    <a href="" class="btn btn-primary"><span class="material-icons small">add</span> Tambah Jumlah Peserta</a>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="card">
                        <div class="card-body">
                           
                            <div class="mt-4">
                                <form>

                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="status">Pilih Metode</label>
                                        <div class="form-check">
                                            <input class="form-check-input options" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="box-product">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Pemilihan produk
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input options" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="box-date">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Berdasarkan waktu
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 col-12 col-md-6 box hidden" id="show-box-product">
                                        <label for="status">Pilih Produk</label>
                                        <div class="mt-1">
                                            <select class="select-single" id="status" style="width: 100%;">
                                                <option selected value="0">Pilih </option>
                                                <option>Little Abid basic Knowledge Seri 1 - 3</option>
                                                <option>Swiden Knife Set + Sharperner</option>
                                                <option>Swiden Knife Set + Sharperner</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-12 col-md-6 box hidden" id="show-box-date">
                                        <label for="status" class="form-label">Pilih Periode</label>
                                        <input type="text" class="form-control form-control-custom dateFilter" />
                                    </div>
                                    
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="subsidy-name" class="form-label">Nama Subsidi</label>
                                        <input type="text" class="form-control" id="subsidy-name">
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="subsidy-value" class="form-label">Nilai Subsidi</label>
                                        <input type="number" class="form-control" id="subsidy-value">
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label for="subsidy-quota" class="form-label">Kuota</label>
                                        <input type="number" class="form-control" id="subsidy-quota">
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <div class="">
                                            <label for="status">Status</label>
                                            <div class="mt-1">
                                                <select class="nice wide" id="status">
                                                    <option selected value="0">Pilih status </option>
                                                    <option>Aktif</option>
                                                    <option>Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-100"></div>
                                    <div class="mb-3 col-12 col-sm-12 col-md-6">
                                        <div class="d-grid mt-5">
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>                
                            </div>

                        </div>
                    </div>

				</div>
			</main>
			<!-- //main -->

<?php
	include('footer.php');
?>			