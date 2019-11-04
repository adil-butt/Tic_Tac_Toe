<?php
$title = "Play";
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
                                    <h1 class="h4 text-gray-900 mb-4"><b>Play<b></h1>
                                </div>
                                <table id="gameTable">
                                    <tr>
                                        <td>a</td>
                                        <td class="vert"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="hori"></td>
                                        <td class="vert hori"></td>
                                        <td class="hori"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="vert"></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <div>
                                    <a href="" class="btn btn-outline-primary">Restart</a>
                                    <a href="<?php echo $protocol . $hostName ?>/Tic_Tac_Toe/views/index.php" class="btn btn-outline-primary">Quit</a>
                                </div>
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