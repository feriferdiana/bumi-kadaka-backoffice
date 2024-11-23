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
                              <h1 class="h3 text-purple-600 mt-1"><strong>Pengaturan</strong> Jumlah Peserta</h1>
                         </div>

					<div class="card">
                        <div class="card-body">
							
							<form class="repeater">
    							<div data-repeater-list="group-a">
									<div data-repeater-item class="my-2 p-2 border rounded d-flex justify-content-between align-items-center">
										<div>
											<div class="d-flex align-items-center">
												<div class="me-3">Jumlah Peserta : </div>
												<div>
													<select class="form-select">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3" selected="selected">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>
										</div>
										<button class="btn btn-link" data-repeater-delete><span class="material-icons">delete_outline</span></button>
									</div>
									<div data-repeater-item class="my-2 p-2 border rounded d-flex justify-content-between align-items-center">
										<div>
											<div class="d-flex align-items-center">
												<div class="me-3">Jumlah Peserta : </div>
												<div>
													<select class="form-select">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5" selected="selected">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>
										</div>
										<button class="btn btn-link" data-repeater-delete><span class="material-icons">delete_outline</span></button>
									</div>
									<div data-repeater-item class="my-2 p-2 border rounded d-flex justify-content-between align-items-center">
										<div>
											<div class="d-flex align-items-center">
												<div class="me-3">Jumlah Peserta : </div>
												<div>
													<select class="form-select">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10" selected="selected">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>
										</div>
										<button class="btn btn-link" data-repeater-delete><span class="material-icons">delete_outline</span></button>
									</div>
								</div>
								<div class="my-3"><button data-repeater-create type="button" class="btn btn-secondary"><span class="material-icons small">add</span> Tambah Jumlah Peserta</button></div>
								<div class="mt-3 text-end"><button type="button" class="btn btn-primary">Simpan Pengaturan</button>
							</form>
                                
                        </div>
                    </div>					

				</div>
			</main>
			<!-- //main -->

<?php
	include('footer.php');
?>			