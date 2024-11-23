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
                        <h1 class="h3 text-purple-600 mt-1"><strong>Kelola</strong> Client ID</h1>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <form enctype="multipart/form-data" class="row">

                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label">Client ID</label>
                                    <input type="text" class="form-control text-uppercase" id="subsidy-name">
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label">Nama Klien</label>
                                    <input type="text" class="form-control" id="subsidy-name">
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="desc" class="form-label">Alamat Pengiriman</label>
                                    <textarea class="form-control" id="desc" rows="3"></textarea>
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