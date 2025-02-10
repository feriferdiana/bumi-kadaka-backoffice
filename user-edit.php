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
                        <h1 class="h3 text-purple-600 mt-1">
                            <strong>Ubah</strong> Akun
                        </h1>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <?php include 'action/action_user_edit.php' ?>
                            <form enctype="multipart/form-data" method="POST" action="action/action_user_update.php" class="row">
                                <input type="hidden" name="id" value="<?=$editUsers['id']?>">
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="subsidy-name" value="<?=$editUsers['name']?>" required>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="birth_date" id="subsidy-name" value="<?=$editUsers['birth_date']?>" required>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="birth_place" id="subsidy-name" value="<?=$editUsers['birth_place']?>" required>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Jenis Kelamin</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="men" name="gender" value="LAKI-LAKI" <?=($editUsers['gender'] == 'LAKI-LAKI' ? 'checked' : '')?>/>
                                        <label for="men">Laki-Laki</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="women" name="gender" value="PEREMPUAN" <?=($editUsers['gender'] == 'PEREMPUAN' ? 'checked' : '')?>/>
                                        <label for="women">Perempuan</label>
                                    </div>
                                </div>
                                
                                <div class="mb-3 col-12 col-sm-12 col-md-6" align="center">
                                    <?php if($editUsers['foto'] != null): ?>
                                        <a href="action/<?=$editUsers['foto']?>" target="_blank">
                                            <img src="action/<?=$editUsers['foto']?>" width="100" height=
                                            "100">
                                            <br>
                                            <label for="subsidy-name" class="form-label"><?=$editUsers['foto']?></label>
                                        </a>
                                    <?php else : ?>
                                        -
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="formFile" class="form-label">Ganti Foto</label><br />
                                    <button type="button" name="upload" class="btn btn-primary fileup-btn w-100">
                                    <span class="material-icons md-14">file_upload</span> Pilih Foto
                                        <input type="file" name="file" id="file" class="file" multiple accept="image/*">
                                    </button>
                                     <label for="formFile" class="form-label">
                                        Format : .jpg, .jpeg, .png
                                    </label>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="subsidy-name" value="<?=$editUsers['email']?>" required>
                                </div>

                                <div class="w-100"></div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" name="upload" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12" align="center">
                                    <div class="d-grid">
                                        <?php if (isset($_SESSION['message_users'])) : ?>
                                            <div style="border : 1px solid #EFAE93; background-color: #EFAE93;" align="center">
                                                <label class="form-label" style="padding-top: 10px;color: white;"><?php echo $_SESSION['message_users']; ?></label>
                                            </div>
                                            <?php unset($_SESSION['message_users']); ?>
                                        <?php endif ?>
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