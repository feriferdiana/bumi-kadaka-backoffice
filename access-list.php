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
				<div class="container-fluid p-0">

					<div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
						<h1 class="h3 text-purple-600 mb-3"><strong>Daftar</strong> Akun</h1>
                        <div>
                            <div class="d-flex mb-2">
                                <div class="me-1">
                                    <?php if (isset($_SESSION['message_access'])) : ?>
                                        <div style="border : 1px solid #EFAE93; background-color: #EFAE93; border-radius: 5px;" align="center;">
                                            <label class="form-label" style="padding-top: 10px; padding-right:10px; padding-left:10px; color: white;"><?php echo $_SESSION['message_access']; ?></label>
                                        </div>
                                        <?php unset($_SESSION['message_access']); ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="card">
                        <div class="card-body">
                            <div class="table-responsive pb-4 mb-4" id="table-scroll">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">No</th>
                                            <th class="text-nowrap">Nama</th>
                                            <th class="text-nowrap">Email</th>
                                            <th class="text-nowrap">Jenis Kelamin</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <?php include 'action/action_user_list.php' ?>
                                    <?php if (isset($dataUsers)) : ?>
                                        <?php $no = ($page - 1) * $limit + 1; ?>
                                        <?php foreach ($dataUsers as $row): ?>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"><?=$no?></td>
                                                    <td class="text-nowrap"><?=$row['name']; ?></td>
                                                    <td class="text-nowrap">
                                                        <?=$row['email']; ?>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <?=$row['gender']; ?>
                                                    </td>
                                                    <td class="text-nowrap"><?=$row['status']; ?></td>

                                                    <td class="text-nowrap">
                                                        <a href="access-edit.php?id=<?=$row['id']?>" class="btn btn-primary">Akses</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php $no++;?>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </table>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <?php if ($page > 1): ?>
                                            <a class="page-link" href="?page=<?= $page - 1 ?>" tabindex="-1" aria-disabled="true">
                                                Previous
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                    <div style="width: 125px; overflow: auto;" align="center">
                                        <li class="page-item" style="padding: 7px; text-align: center; display: inline-block; white-space: nowrap;">
                                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                                <a style="margin-right: 10px;" href="?page=<?= $i ?>" class="<?= $i == $page ? 'active' : '' ?>">
                                                    <?= $i ?>
                                                </a>
                                            <?php endfor; ?>
                                        </li>
                                    </div>
                                    <li class="page-item">
                                        <?php if ($page < $totalPages): ?>
                                            <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>

				</div>
			</main>
			<!-- //main -->

<?php
	include('footer.php');
?>			