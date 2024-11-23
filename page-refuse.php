<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>NAYA Invitation</title>
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
									
                                             <div id="invitation">
                                                  <div class="mb-4">
                                                       <h3 class="fw-bold text-purple-400">Alasan Tidak Bergabung</h3>
                                                  </div>
                                                  <form>
                                                       <div class="form-group">
                                                            <div class="form-check mb-2">
                                                                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                 <label class="form-check-label" for="flexRadioDefault1">
                                                                      Saya tidak tertarik dengan produknya.
                                                                 </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                 <label class="form-check-label" for="flexRadioDefault2">
                                                                      Saya sudah mengikuti program Arisan lainnya
                                                                 </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                 <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                                 <label class="form-check-label" for="flexRadioDefault3">
                                                                      Lainnya
                                                                 </label>
                                                            </div>
                                                       </div>
                                                       <div class="form-group mt-2">
                                                            <input type="text" class="form-control" id="alamat" placeholder="" required>
                                                       </div>
                                                       <div class="mt-4 d-grid">
                                                            <button type="button" class="btn btn-primary p-3" id="btnGabung">Bergabung Arisan</button>
                                                       </div>
                                                  </form>
                                             </div>

                                             <div class="hidden" id="msgRefuse">
                                                  <h3 class="text-purple-400">Sayang sekali Anda telah menolak undangan arisan.</h3>Semoga dapat bergabung di undangan arisan lainnya!
                                             </div>
                                             
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
                $("#msgRefuse").show("slow");
            });

	    });
    </script>

</body>
</html>