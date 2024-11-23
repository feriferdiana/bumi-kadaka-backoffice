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
                              <h1 class="h3 text-purple-600 mt-1"><strong>Pengaturan</strong> Client ID</h1>
                         </div>

					<div class="card">
                              <div class="card-body">
                                   <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Peganturan Client ID</label>
                                        <div class="form-check form-switch">
                                             <input class="form-check-input" type="checkbox" id="asdf">
                                             <label class="form-check-label" for="asdf">Email + create order to LODI</label>
                                        </div>
                                   </div>
                                   <div class="mt-3 text-end"><button type="button" class="btn btn-primary">Simpan Pengaturan</button>
                              </div>  
                         </div>
				</div>
			</main>
			<!-- //main -->

<?php
	include('footer.php');
?>			