<?php $numberSet = $_POST['numberSet'];
$difficulty = $_POST['difficulty'];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
<?php include "header.php" ?>
<section class="container mt-3 text-center d-flex flex-column align-items-center">
    <h1>
        Multiplication Table
    </h1>
    <h2>Difficulty: <?= $difficulty ?></h2>


    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Your task
            </div>
            <div class="card-body">
                <table class="table table1">
                    <?php for ($i = 1; $i <= $numberSet; $i++) { ?>
                        <tr>
                            <?php for ($j = 1; $j <= $numberSet; $j++) { ?>
                                <td class="<?= ($i == 1 || $j == 1) ? 'header' : '' ?>">


                                    <?= (rand(0, 100) < $difficulty) ? $i * $j : "" ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</section>

<?php include "footer.php" ?>
