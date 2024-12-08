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
                        <h1 class="h3 text-purple-600 mt-1"><strong>Ubah</strong> Berita</h1>

                        <?php if (isset($_SESSION['message_news'])) : ?>
                            <label class="form-label"><?php echo $_SESSION['message_news']; ?></label>
                            <?php unset($_SESSION['message_news']); ?>
                        <?php endif ?>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <?php include 'action/action_news_edit.php' ?>
                            <form enctype="multipart/form-data" class="row" method="POST" action="action/action_news_update.php">
                                <input type="hidden" name="id" value="<?=$editNews['id']?>">
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="subsidy-name" name="description"><?=$editNews['description']?></textarea>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-6" align="center">
                                     <a href="action/<?=$editNews['source_file']?>" target="_blank">
                                        <img src="action/<?=$editNews['source_file']?>" width="100" height=
                                        "100">
                                        <br>
                                        <label for="subsidy-name" class="form-label"><?=$editNews['nama_file']?></label>
                                    </a>
                                </div>


                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="formFile" class="form-label">Unggah Gambar Banner</label><br />
                                    <button type="button" name="upload" class="btn btn-primary fileup-btn w-100">
                                    <span class="material-icons md-14">file_upload</span> Pilih Gambar
                                        <input type="file" name="file" id="file" class="file" multiple accept="image/*">
                                    </button>
                                     <label for="formFile" class="form-label">
                                        Format : .jpg, .jpeg, .png
                                    </label>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Priority</label>
                                    <input type="number" class="form-control" id="subsidy-name" name="priority" value="<?=$editNews['priority']?>">
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Status</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="DEACTIVE" <?=($editNews['status'] == 'DEACTIVE' ? 'checked' : '')?>>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                           De-Active
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="ACTIVE" <?=($editNews['status'] == 'ACTIVE' ? 'checked' : '')?>>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                           Active
                                        </label>
                                    </div>
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