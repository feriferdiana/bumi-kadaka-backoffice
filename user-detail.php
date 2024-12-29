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
                        <h1 class="h3 text-purple-600 mt-1"><strong>Detail</strong> Akun</h1>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <?php include 'action/action_user_detail.php' ?>
                            <form enctype="multipart/form-data" class="row">
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Nama</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsers['name']?>
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Tempat, Tanggal Lahir</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsers['birth_place']?>, <?=$detailUsers['birth_date']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Jenis Kelamin</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsers['gender']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Email</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsers['email']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Status</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsers['status']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Tanggal Dibuat</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsers['created_date']?>
                                        </label>
                                    </div>
                                </div>


                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="formFile" class="form-label"><b>Foto</b></label><br />
                                    <div class="mb-3 col-12 col-sm-12 col-md-12" align="center">
                                        <?php if ($detailUsers['foto'] != null || $detailUsers['foto'] != '') : ?>
                                            <a href="action/<?=$detailUsers['foto']?>" target="_blank">
                                                <img src="action/<?=$detailUsers['foto']?>" width="100" height="100">
                                            </a>
                                        <?php else : ?>
                                            -
                                        <?php endif; ?>
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