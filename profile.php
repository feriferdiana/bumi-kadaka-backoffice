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
                        <h1 class="h3 text-purple-600 mt-1"><strong>Profile</strong></h1>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <form enctype="multipart/form-data" class="row">
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Nama</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsersNavbar['name']?>
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Tempat, Tanggal Lahir</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsersNavbar['birth_place']?>, <?=$detailUsersNavbar['birth_date']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Jenis Kelamin</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsersNavbar['gender']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Email</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsersNavbar['email']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Status</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsersNavbar['status']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 col-12 col-sm-12 col-md-6">
                                    <label for="subsidy-name" class="form-label"><b>Tanggal Dibuat</b></label>
                                    <div>
                                        <label for="subsidy-name" class="form-label">
                                            <?=$detailUsersNavbar['created_date']?>
                                        </label>
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