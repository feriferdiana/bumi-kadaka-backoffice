<?php
    session_start();
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
                        <h1 class="h3 text-purple-600 mt-1">
                            <strong>Tambah</strong> Akun
                        </h1>

                        <div style="margin-left: 100px; margin-top: 10px;">
                            <?php if (isset($_SESSION['message_users'])) : ?>
                                <label class="form-label"><?php echo $_SESSION['message_users']; ?></label>
                                <?php unset($_SESSION['message_users']); ?>
                            <?php endif ?>
                        </div>                            
                    </div>

					<div class="card">
                        <div class="card-body">
                            <form action="action/action_user_insert.php" method="post" enctype="multipart/form-data" class="row">
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="subsidy-name" required>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="birth_place" class="form-control" id="subsidy-name" required>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="birth_date" class="form-control" id="subsidy-name" required>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Jenis Kelamin</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="men" name="gender" value="LAKI-LAKI" name="gender" required checked />
                                        <label for="men">Laki-Laki</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" required type="radio" id="women" name="gender" value="PEREMPUAN" name="gender" />
                                        <label for="women">Perempuan</label>
                                    </div>
                                </div>
                                

                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="formFile" class="form-label">Unggah Foto</label><br />
                                    <button type="button" name="upload" class="btn btn-primary fileup-btn w-100">
                                    <span class="material-icons md-14">file_upload</span> Pilih Foto
                                        <input type="file" name="file" id="file" class="file" multiple accept="image/*" required>
                                    </button>
                                     <label for="formFile" class="form-label">
                                        Format : .jpg, .jpeg, .png
                                    </label>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="subsidy-name" required>
                                </div>

                                <div class="w-100"></div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" name="upload" class="btn btn-primary">Simpan</button>
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