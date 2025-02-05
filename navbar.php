            <!-- navbar -->
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle"><i class="hamburger align-self-center"></i></a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown"><a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown"><i class="align-middle" data-feather="settings"></i></a>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">

								<?php include 'action/action_navbar.php' ?>
								<?php if ($detailUsersNavbar['foto'] != null || $detailUsersNavbar['foto'] != '') : ?>
									<img src="action/<?=$detailUsersNavbar['foto']?>" class="avatar img-fluid rounded me-1" alt="Nama User"/>
                                <?php else : ?>
                                    <img src="assets/img/avatars/user-pp.png" class="avatar img-fluid rounded me-1" alt="User"/> 
                                <?php endif; ?>
								
								<span class="text-dark">
									<?php
										if(isset($_COOKIE['name_user'])) {
											echo $_COOKIE['name_user'];
										}
									?>
								</span> &nbsp; 
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="dropdown-divider d-none"></div>
								<a class="dropdown-item" href="profile.php">Profile</a>
								<a class="dropdown-item" href="change-password.php">Ubah Password</a>
								<a class="dropdown-item" href="action/action_logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- //navbar -->