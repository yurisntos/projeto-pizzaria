<?php
    require '../funcoes.php';
    verificaLogin();
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php include "../template/head.php" ?>

<body>
    <?php include "../template/navbar.php" ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "../template/sidebar.php" ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <br>
                <div class="row">
                    <div class="col">
                        <h1>Painel Principal</h1>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php include "../template/footer.php" ?>
</body>

</html>