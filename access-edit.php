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
                            <strong>Ubah</strong> Akses Akun
                        </h1>

                        <?php if (isset($_SESSION['message_access'])) : ?>
                            <label class="form-label"><?php echo $_SESSION['message_access']; ?></label>
                            <?php unset($_SESSION['message_access']); ?>
                        <?php endif ?>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <?php include 'action/action_access_edit.php' ?>
                            <form enctype="multipart/form-data" method="POST" action="action/action_access_update.php" class="row">
                                <input type="hidden" name="id_user" value="<?=$editAccess['id_user']?>">
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Nama</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$editAccess['name']?>
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Email</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$editAccess['email']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                   <label for="subsidy-name" class="form-label">Pilih Akses</label>
                                    <div class="row">
                                        <div class="col-6">
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_list_news" value="1" id="cl01" <?=($editAccess['is_list_news'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl01">
                                                       Daftar Berita
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_add_news" value="1" id="cl02" <?=($editAccess['is_add_news'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Tambah Berita
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_edit_news" value="1" id="cl02" <?=($editAccess['is_edit_news'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Ubah Berita
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_delete_news" value="1" id="cl02" <?=($editAccess['is_delete_news'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Hapus Berita
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_approval_news" value="1" id="cl02" <?=($editAccess['is_approval_news'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Persetujuan Berita
                                                  </label>
                                             </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_list_banner" value="1" id="cl01" <?=($editAccess['is_list_banner'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl01">
                                                       Daftar Banner
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_add_banner" value="1" id="cl02" <?=($editAccess['is_add_banner'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Tambah Banner
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_edit_banner" value="1" id="cl02" <?=($editAccess['is_edit_banner'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Ubah Banner
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_delete_banner" value="1" id="cl02" <?=($editAccess['is_delete_banner'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Hapus Banner
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_approval_banner" value="1" id="cl02" <?=($editAccess['is_approval_banner'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Persetujuan Banner
                                                  </label>
                                             </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label">&nbsp;</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_list_users" value="1" id="cl01" <?=($editAccess['is_list_users'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl01">
                                                       Daftar User
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_add_users" value="1" id="cl02" <?=($editAccess['is_add_users'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Tambah User
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_edit_users" value="1" id="cl02" <?=($editAccess['is_edit_users'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Ubah User
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_delete_users" value="1" id="cl02" <?=($editAccess['is_delete_users'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Hapus User
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_approval_users" value="1" id="cl02" <?=($editAccess['is_approval_users'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl02">
                                                       Persetujuan User
                                                  </label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="is_management_access" value="1" id="cl03" <?=($editAccess['is_management_access'] == 1 ? 'checked' : '-')?>>
                                                  <label class="form-check-label" for="cl03">
                                                       Kelola Akses
                                                  </label>
                                             </div>
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="w-100"></div>
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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