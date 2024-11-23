<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>NAYA</title>
	<meta name="description" content="Naya">
	<meta name="keywords" content="naya, ">
	<meta name="author" content="NAYA Indonesia">
	<link rel="shortcut icon" href="assets/img/favicon/favicon.ico" />
	<link rel="canonical" href="https://naya.ai/" />
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column my-2">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-9 col-lg-7 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

                        <div class="mb-2 ext-logo"><img src="assets/img/logo/naya-horizontal-primary.png"></div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									
                                    <!-- SLIDE 1-->
                                    <div id="invitation">
                                        <div class="mb-4">
                                            <h3 class="fw-bold text-purple-400">Undangan Arisan</h3>
                                        </div>
                                        <div class="row g-2 mb-4">
                                            <div class="col-md-2 col-12 mb-2">
                                                <img src="assets/img/products/produk-sample-1.jpg" class="img-fluid rounded border" />
                                            </div>
                                            <div class="col-md-10 col-12 mb-2">
                                                Halo [nama peserta],<br />
                                                Anda mendapatkan undangan untuk bergabung di arisan <span class="fw-bold">[nama arisan]</span> yang dibuat oleh <span class="fw-bold">[nama PJ]</span> sebagai Penangguna Jawab arisan.
                                            </div>
                                        </div>

                                        <div class="mb-3">Silakan lihat detail arisan dibawah ini:</div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-12 mb-3">
                                                <div class="text-uppercase text-muted small">Nama Arisan</div>
                                                <div>Arisan untuk Little Abid basic Knowledge 10 bulan saja!</div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3">
                                                <div class="text-uppercase text-muted small">Siklus Arisan</div>
                                                <div>3 Bulan</div>
                                            </div>
                                            <div class="col-md-8 col-12 mb-3">
                                                <div class="text-uppercase text-muted small">Rencana mulai arisan (tanggal pengundian pertama)</div>
                                                <div>31 Februari 1902</div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3">
                                                <div class="text-uppercase text-muted small">Jumlah peserta arisan</div>
                                                <div>3 orang</div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-12 mb-3">
                                                <div class="text-uppercase text-muted small">Nama Produk</div>
                                                <div>Little Abid basic Knowledge Seri 1</div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3">
                                                <div class="text-uppercase text-muted small">Harga</div>
                                                <div>Rp 2.400.000</div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-12 mb-2">
                                                <div class="text-uppercase text-muted small">Alamat Pengiriman</div>
                                                <div>Gedung Soemitro Djojohadikusumo Jalan Lapangan Banteng Timur 2-4 Jakarta 10710</div>
                                                <div class="mt-2">[ <a href="#" data-bs-toggle="modal" data-bs-target="#modalGanti"> <i class="fas fa-pen"></i> Ganti alamat</a> ]</div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-4 col-6 mb-2">
                                                <div class="text-uppercase text-muted small">Ongkos Kirim</div>
                                                <div>Rp 12.000</div>
                                            </div>
                                            <div class="col-md-4 col-6 mb-2">
                                                <div class="text-uppercase text-muted small">Iuran Bulanan</div>
                                                <div>Rp 500.000</div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            Jika Anda setuju untuk mengikuti arisan ini, silakan klik “Bergabung Arisan” dan ikuti proses selanjutnya untuk pembuatan akun dan unduh aplikasi Android-nya.
                                        </div>

                                        <div class="">
                                            <div class="form-check">
                                                <label class="form-check-label"><input type="checkbox" class="form-check-input" id="checkboXID"> Saya menyetujui syarat dan ketentuan yang berlaku.
                                                    <i class="input-helper"></i><a href="page-tnc.php">Baca syarat dan ketentuan</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-grid">
                                            <button type="button" class="btn btn-primary" id="btnGabung" disabled>Bergabung Arisan</button>
                                        </div>
                                        <div class="mt-2 d-grid">
                                            <button type="button" class="btn btn-secondary" id="btnTolak" data-bs-toggle="modal" data-bs-target="#modalTolak">Tidak Tertarik</button>
                                        </div>
                                    </div>
                                    <!-- //SLIDE 1-->

                                    <!-- SLIDE 2-->
                                    <div id="joined" class="hidden">

                                        <div id="msgConfirmation" class="mb-5">
                                            <h3 class="fw-bold text-purple-400">Konfirmasi Kepesertaan</h3>
                                            <div class="mb-2">Bukti konfirmasi kepersertaan akan kami kirim melauli email atau whatsapp Anda.</div>
                                        </div>

                                        <div id="msgJoined" class="mb-5 hidden">
                                            <h3 class="fw-bold text-purple-400">Terima kasih telah bergabung!</h3>
                                            <div class="mb-2">Silahkan log in akun Anda di aplikasi NAYA untuk melihat detail arisan Anda</div>
                                        </div>

                                        <div id="boxes">
                                            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="new" aria-selected="true">Peserta baru</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="exist-tab" data-bs-toggle="tab" data-bs-target="#exist" type="button" role="tab" aria-controls="exist" aria-selected="false">Member NAYA</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">

                                                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                                    <div class="mb-2 p-4">Anda dapat melihat status kepersertaan dan pembayaran dengan membuat kata sandi untuk aplikasi NAYA.</div>
                                                    <div class="mb-3 ">
                                                        <input type="number" class="form-control" id="" placeholder="Nomor handphone/alamat email" required>
                                                        <div role="alert" class="form-text alert alert-danger p-2 hidden">Error placement.</div>
                                                    </div>
                                                    <div class="mb-3 password-group">
                                                        <input type="password" class="form-control password-box" id="password" placeholder="Kata Sandi" required>
                                                        <a href="#!" toggle="#password" class="password-visibility text-muted toggle-password"><span class="material-icons md-18">visibility_off</span></a>
                                                        <div role="alert" class="form-text alert alert-danger p-2 hidden">Error placement.</div>
                                                    </div>
                                                    <div class="password-group">
                                                        <input type="password" class="form-control password-box" id="confirm-password" placeholder="Konfirmasi Kata Sandi" required>
                                                        <a href="#!" toggle="#confirm-password" class="password-visibility text-muted toggle-password"><span class="material-icons md-18">visibility_off</span></a>
                                                        <div role="alert" class="form-text alert alert-danger p-2 hidden">Error placement.</div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="exist" role="tabpanel" aria-labelledby="exist-tab">
                                                    <div class="mb-2 p-4">Silahkan login ke akun NAYA Anda untuk konfirmasi menjadi peserta.</div>
                                                    <div class="mb-3 ">
                                                        <input type="number" class="form-control" id="" placeholder="Nomor handphone/alamat email" required>
                                                        <div role="alert" class="form-text alert alert-danger p-2 hidden">Error placement.</div>
                                                    </div>
                                                    <div class="mb-3 password-group">
                                                        <input type="password" class="form-control password-box" id="login-password" placeholder="Kata Sandi" required>
                                                        <a href="#!" toggle="#login-password" class="password-visibility text-muted toggle-password"><span class="material-icons md-18">visibility_off</span></a>
                                                        <div role="alert" class="form-text alert alert-danger p-2 hidden">Error placement.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 d-grid">
                                                <button type="button" class="btn btn-primary" id="btnKirim">Kirim</button>
                                                <div role="alert" class="form-text alert alert-success p-2 d-none">Terima kasih. Silahkan download aplikasi NAYA dan login dengan akun Anda.</div>
                                            </div>
                                        </div>
                                        <div class="mt-1 text-center">
                                            <img src="assets/img/logo/Google_Play-Badge-Logo.wine.svg" style="width: 160px;">
                                        </div>
                                    </div>
                                    <!-- //SLIDE 2-->

								</div>
							</div>
						</div>
						<div class="text-center"><a class="text-muted" href="#" target="_blank"><strong>NAYA Indonesia</strong></a> - &copy; <?=date('Y');?></div>
					</div>
				</div>
			</div>
		</div>
	</main>

    <!--================================================================================================ 
    MODALS
    ====================================================================================================
    -->
    <!-- Modal -->
    <div class="modal fade" id="modalGanti" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGanti" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ganti Alamat Pengiriman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    <form>
                        <div class="form-group mb-3">
                            <label for="email" class="col-sm-2 control-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="col-sm-2 control-label">Kecamatan</label><br />
                            <select class="basic-single" name="state" style="width: 100%;">
                                <option value="AL">Sawangan</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="col-sm-2 control-label">Kota</label>
                            <select class="basic-single" name="state" style="width: 100%;">
                                <option value="AL">Depok</option>
                                <option value="WY">California</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="col-sm-2 control-label">Kode Pos</label>
                            <select class="basic-single" name="state" style="width: 100%;">
                                <option value="AL">14123</option>
                                <option value="WY">14124</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-between px-3">
                    <button type="button" class="col btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="col btn btn-primary">Ganti Alamat</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTolak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTolak" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Alasan Tidak Bergabung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    <form id="blockReason">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Saya tidak tertarik dengan produknya.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Saya sudah mengikuti program Arisan lainnya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Lainnya
                                </label>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <input type="text" class="form-control" id="alamat" placeholder="" required>
                        </div>
                    </form>

                </div>
                <div class="modal-footer border-0 justify-content-between px-3">
                    <button type="button" class="col btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="col btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalThanks">Kirim Alasan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalThanks" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalThanks" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Alasan Tidak Bergabung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    
                    Sayang sekali Anda telah menolak undangan arisan. Semoga dapat bergabung di undangan arisan lainnya!

                </div>
                <div class="modal-footer border-0 justify-content-between px-3">
                    <button type="button" class="col btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="assets/js/app.js"></script>
    <script>
        $(document).ready( function() {
            //
            $('.basic-single').select2({
                dropdownParent: $('#modalGanti')
            });

            //
            $("#btnGabung").click(function() {
                $("#invitation").hide("slow");
                $("#joined").show("slow");
            });

            $("#btnKirim").click(function() {
                $("#boxes").hide("slow");
                $("#msgConfirmation").hide("slow");
                $("#msgJoined").show("slow");
            });
            
            //
            var clicked = 0;
            $(".toggle-password").click(function (e) {
                e.preventDefault();

                $(this).toggleClass("toggle-password");
                if (clicked == 0) {
                $(this).html('<span class="material-icons md-18">visibility_off</span >');
                    clicked = 1;
                } else {
                    $(this).html('<span class="material-icons md-18">visibility</span >');
                    clicked = 0;
                }

                var input = $($(this).attr("toggle"));
                console.log(input);
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });

            $("#checkboXID").click(function() {
                var checked_status = this.checked;
                if (checked_status == true) {
                    $("#btnGabung").removeAttr("disabled");
                } else {
                    $("#btnGabung").attr("disabled", "disabled");
                }
            });

	    });
    </script>

</body>
</html>