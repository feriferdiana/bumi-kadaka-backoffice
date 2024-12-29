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
						<h1 class="h3 text-purple-600 mb-3"><strong>Daftar</strong> Perstujuan Banner</h1>

                        <?php if (isset($_SESSION['message_banner'])) : ?>
                            <label class="form-label"><?php echo $_SESSION['message_banner']; ?></label>
                            <?php unset($_SESSION['message_banner']); ?>
                        <?php endif ?>

                        <div>
                            <div class="d-flex mb-2">
                                <div class="me-1">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari nama banner" aria-label="Search" autocomplete="off" />
                                    </form>
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
                                            <th class="text-nowrap">Image</th>
                                            <th class="text-nowrap">Priority</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Tanggal Dibuat</th>
                                            <th class="text-nowrap">Approval</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <?php include 'action/action_banner_approval_list.php' ?>
                                    <?php if (isset($dataBanner)) : ?>
                                        <?php $no = ($page - 1) * $limit + 1; ?>
                                        <?php foreach ($dataBanner as $row): ?>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"><?=$no?></td>
                                                    <td class="text-nowrap">
                                                        <a href="action/<?=$row['source_file']?>" target="_blank">
                                                            <img src="action/<?=$row['source_file']?>" width="100" height="100">
                                                        </a>
                                                    </td>
                                                    <td class="text-nowrap"><?=$row['priority']; ?></td>
                                                    <td class="text-nowrap"><?=$row['status']; ?></td>

                                                    <?php $created = strtotime($row['created_date']); ?>
                                                    <td class="text-nowrap"><?=date("d M Y, H:i:s", $created)?></td>

                                                    <td class="text-nowrap">
                                                        <?php if ($row['approved'] == 0) : ?>
                                                            Pending
                                                        <?php elseif ($row['approved'] == 1) : ?>
                                                            Disetujui
                                                        <?php elseif ($row['approved'] == 2) : ?>
                                                            Ditolak
                                                        <?php else : ?>
                                                            Reject
                                                        <?php endif?>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <a href="approval-detail.php?id=<?=$row['id']?>" class="btn btn-primary">Detail</a>
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