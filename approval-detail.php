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
                        <h1 class="h3 text-purple-600 mt-1"><strong>Detail</strong> Persetujuan</h1>

                        <?php if (isset($_SESSION['message_approval'])) : ?>
                            <label class="form-label"><?php echo $_SESSION['message_approval']; ?></label>
                            <?php unset($_SESSION['message_approval']); ?>
                        <?php endif ?>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <?php include 'action/action_approval_detail.php' ?>
                            <form enctype="multipart/form-data" class="row" method="POST" action="action/action_approval.php">
                                <input type="hidden" name="id" value="<?=$detailApproval['id']?>">
                                <input type="hidden" name="category" value="<?=$detailApproval['category']?>">
                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Kategori</label>
                                    <input type="text" class="form-control" id="subsidy-name" value="<?=$detailApproval['category']?>" readonly>
                                </div>


                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="formFile" class="form-label">Gambar Banner</label><br />
                                    <div class="mb-3 col-12 col-sm-12 col-md-12" align="center">
                                        <a href="action/<?=$detailApproval['source_file']?>" target="_blank">
                                            <img src="action/<?=$detailApproval['source_file']?>" width="100" height=
                                            "100">
                                            <br>
                                            <label for="subsidy-name" class="form-label"><?=$detailApproval['nama_file']?></label>
                                        </a>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Priority</label>
                                    <input type="number" class="form-control" id="subsidy-name" value="<?=$detailApproval['priority']?>" readonly>
                                </div>

                                <div class="mb-3 col-12 col-sm-12 col-md-12">
                                    <label for="subsidy-name" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="subsidy-name" value="PENDING" readonly>
                                </div>
                                
                                <div class="w-100"></div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <div class="d-grid">
                                        <button type="submit" name="status_approval" value="REJECT" class="btn btn-danger">Tolak</button>
                                    </div>
                                </div>
                                <div class="mb-3 col-12 col-sm-12 col-md-6">
                                    <div class="d-grid">
                                        <button type="submit" name="status_approval" value="APPROVE" class="btn btn-primary">Setujui</button>
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