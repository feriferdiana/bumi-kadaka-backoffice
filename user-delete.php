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
                <div class="container-fluid p-0">

                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="h3 text-purple-600 mb-3"><strong>Daftar</strong> Hapus Akun</h1>
                        <div>
                            <div class="d-flex mb-2">
                                <div class="me-1">
                                    <form class="d-flex search" onsubmit="return false">
                                        <input class="form-control form-control-custom me-2" type="search" placeholder="Cari nama kategori" aria-label="Search" autocomplete="off" />
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
                                            <th class="text-nowrap">Nama</th>
                                            <th class="text-nowrap">Tempat Tanggal Lahir</th>
                                            <th class="text-nowrap">Jenis Kelamin</th>
                                            <th class="text-nowrap">Email</th>
                                            <th class="text-nowrap">Foto</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">1</td>
                                            <td class="text-nowrap">Admin</td>
                                            <td class="text-nowrap">Bandung, 08 Agustus 1990</td>
                                            <td class="text-nowrap">Laki-Laki</td>
                                            <td class="text-nowrap">admin@mail.com</td>
                                            <td class="text-nowrap">img</td>
                                            <td class="text-nowrap">
                                                <a href="approval-detail.php" class="btn btn-primary">Hapus Akun</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">2</td>
                                            <td class="text-nowrap">Admin 2</td>
                                            <td class="text-nowrap">Bandung, 08 Agustus 1990</td>
                                            <td class="text-nowrap">Perempuan</td>
                                            <td class="text-nowrap">admindua@mail.com</td>
                                            <td class="text-nowrap">img</td>
                                            <td class="text-nowrap">
                                                <a href="approval-detail.php" class="btn btn-primary">Hapus Akun</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
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