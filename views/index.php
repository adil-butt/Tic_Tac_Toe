<?php
		$title = "Home";
		include("../include/header.php");
?>
<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Welcome To <b>Tic Tac Toe<b></h1>
								</div>
                                <a href="<?php echo $protocol . $hostName ?>/Tic_Tac_Toe/views/play.php" class="btn btn-primary btn-block">
                                    Play Game
                                </a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>
<?php
include("../include/footer.php");
?>
