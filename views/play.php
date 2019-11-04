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
                                        <td id="td0"></td>
                                        <td id="td1" class="vert"></td>
                                        <td id="td2"></td>
                                    </tr>
                                    <tr>
                                        <td id="td3" class="hori"></td>
                                        <td id="td4" class="vert hori"></td>
                                        <td id="td5" class="hori"></td>
                                    </tr>
                                    <tr>
                                        <td id="td6"></td>
                                        <td id="td7" class="vert"></td>
                                        <td id="td8"></td>
                                    </tr>
                                </table>
                                <div style="text-align: center; margin-top: 50px">
                                    <a id="restart" href="#" class="btn btn-outline-primary">Restart</a>
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