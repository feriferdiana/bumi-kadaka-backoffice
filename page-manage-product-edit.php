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
				<div class="container p-0">

                    <div class="mb-3 d-flex">
                        <div class="me-2">
                            <a href="javascript: history.back(-1);" class="btn btn-link p-0 m-0 border"><i class="material-icons mt-1 ms-2">arrow_back_ios</i></a>
                        </div>
                        <h1 class="h3 text-purple-600 mt-1"><strong>Kelola</strong> Produk</h1>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <form enctype="multipart/form-data" class="row">

                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="formFile" class="form-label">Unggah Gambar Produk</label><br />
                                    <button type="button" class="btn btn-primary fileup-btn w-100">
                                    <span class="material-icons md-14">file_upload</span> Pilih Gambar
                                        <input id="file-uploads" type="file" class="file" multiple accept="image/*">
                                    </button>
                                </div>

                                <!-- img container -->
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <div class="mb-3" id="file-uploads-queue"></div>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <div class="">
                                        <label for="status">Client ID</label>
                                        <div class="mt-1">
                                            <select class="nice wide" id="status">
                                                <option selected value="0">Pilih Client ID </option>
                                                <option>Tigaraksa</option>
                                                <option>App</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label">Merek</label>
                                    <input type="text" class="form-control autocomplete" id="subsidy-brand">
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="subsidy-name">
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label">SKU</label>
                                    <input type="text" class="form-control" id="subsidy-name">
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-value" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="subsidy-value">
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="desc" class="form-label">Description</label>
                                    <textarea class="form-control" id="desc" rows="3"></textarea>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="desc" class="form-label">Kategori</label>
                                    <div class="mt-1">
                                        <select class="select-single wide w-100" id="category">
                                            <option selected value="0">Pilih </option>
                                            <option>Makanan</option>
                                            <option>Alat Masak</option>
                                            <option>Elektronik</option>
                                            <option>Alat Kesehatan</option>
                                            <option>Pakaian</option>
                                            <option>Sepatu</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
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
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>               
                        </div>
                    </div>

				</div>
			</main>
			<!-- //main -->

<?php
	include('footer.php');
?>			