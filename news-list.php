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
						<h1 class="h3 text-purple-600 mb-3"><strong>Daftar</strong> Berita</h1>

                        <div>
                            <div class="d-flex mb-2">
                                <div class="me-1">
                                    <!-- <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari nama berita" aria-label="Search" autocomplete="off" />
                                    </form> -->

                                    <?php if (isset($_SESSION['message_news'])) : ?>
                                        <label class="form-label"><?php echo $_SESSION['message_news']; ?></label>
                                        <?php unset($_SESSION['message_news']); ?>
                                    <?php endif ?>
                                </div>
                                <!-- <div>
                                    <a href="news-add.php" class="btn btn-primary">
                                        <span class="material-icons small">add</span> Tambah
                                    </a>
                                </div> -->
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
                                            <th class="text-nowrap">Judul</th>
                                            <th class="text-nowrap">Image</th>
                                            <th class="text-nowrap">Priority</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Tanggal Dibuat</th>
                                            <th class="text-nowrap">Approval</th>
                                            <th class="text-nowrap" style="display : <?=$displayDeleteBerita?>">Action</th>
                                        </tr>
                                    </thead>
                                    <?php include 'action/action_news_list.php' ?>
                                    <?php if (isset($dataBanner)) : ?>
                                        <?php $no = ($page - 1) * $limit + 1; ?>
                                        <?php foreach ($dataBanner as $row): ?>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap"><?=$no?></td>
                                                    <td class="text-nowrap"><?=$row['title']; ?></td>
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

                                                    <!-- <td class="text-nowrap">
                                                        <a href="news-edit.php?id=<?=$row['id']?>" class="btn btn-primary">Ubah Banner</a>
                                                    </td> -->

                                                    <?php if ($dataPermission['is_delete_news'] == true) : ?>
                                                        <td class="text-nowrap">
                                                            <?php if ($row['status'] != 'DELETED') : ?>
                                                                <a href="action/action_news_delete.php?id=<?=$row['id']?>" class="btn btn-primary">Hapus</a>
                                                            <?php endif;?>
                                                        </td>
                                                    <?php endif;?>
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