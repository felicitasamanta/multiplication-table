<?php if (isset($_POST['generate'])) {
    if (!empty($_POST['numberSet'] && !empty($_POST['difficulty']))) {
        echo '  ' . $_POST['radio'];
    } else {
        echo 'Please select the values.';
    }
}
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
<section class="">
    <h1 class="container mt-3 text-center flex-wrap">Multiplication Table Worksheets</h1>
    <h2 class="text-center"> choose your homework</h2>
    <div class="d-flex justify-content-center mt-3 flex-wrap"
    >
        <div class="div_img"><img class="img" src="assets/images/img.png"></div>
        <div class="px-3">
            <form action="worksheet.php" method="post">
                <h3> Choose number set</h3>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="numberSet" value="5">
                    <label class="form-check-label" for="numberSet">
                        1 to 5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="numberSet" value="10">
                    <label class="form-check-label" for="numberSet">
                        1 to 10
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="numberSet" value="12">
                    <label class="form-check-label" for="numberSet">
                        1 to 12
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="numberSet" value="15">
                    <label class="form-check-label" for="numberSet">
                        1 to 15
                    </label>
                </div>
                <div>
                    <h3> Choose difficulty</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="difficulty" value="90"
                        >
                        <label class="form-check-label" for="difficulty">
                            Easy
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="difficulty" value="70"
                        >
                        <label class="form-check-label" for="difficulty">
                            Medium
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="difficulty" value="50"
                        >
                        <label class="form-check-label" for="difficulty">
                            Hard
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="difficulty" value="10"
                        >
                        <label class="form-check-label" for="difficulty">
                            Wow
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary <?= (!isset($_POST['numberSet']) || !isset($_POST['difficulty'])) ? 'disabled' : '' ?>">
                    GENERATE
                </button>
                <button class="btn btn-danger" type="reset">RESET</button>
            </form>
        </div>

</section>
<?php include "footer.php" ?>
