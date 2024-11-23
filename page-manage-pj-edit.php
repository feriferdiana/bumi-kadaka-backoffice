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
                        <h1 class="h3 text-purple-600 mt-1"><strong>Kelola</strong> Penanggung Jawab</h1>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <form enctype="multipart/form-data" class="row">

                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control text-uppercase" id="subsidy-name" value="ibu nya Helen.B" disabled>
                                </div>
                                <div class="w-100"></div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                   <label for="subsidy-name" class="form-label">Pilih Client</label>
                                    <div class="row">
                                        <div class="col-6">
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="cl01">
                                                  <label class="form-check-label" for="cl01">
                                                       App
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="cl02" checked>
                                                  <label class="form-check-label" for="cl02">
                                                       Tigaraksa
                                                  </label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="cl03">
                                                  <label class="form-check-label" for="cl03">
                                                       Jafra
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="cl04">
                                                  <label class="form-check-label" for="cl04">
                                                       Others
                                                  </label>
                                             </div>
                                        </div>
                                    </div>
                                </div>                        
                                <div class="w-100"><br /></div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <div class="d-grid m-o p-0">
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