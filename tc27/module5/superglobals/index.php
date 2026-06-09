<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Super Global Variables</title>
</head>

<body>
    <div class="container p-5">
        <div class="row mx-auto">
            <div class="col col-md-6">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
                    <div class="mb-3">
                        <label for="inputget" class="form-label">Enter Anything</label>
                        <input type="text" name="inputget" id="inputget" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="submitget" class="btn btn-primary btn-lg">Submit Using GET</button>
                    </div>
                </form>
            </div>
            <div class="col col-md-6">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label for="inputpost" class="form-label">Enter Anything</label>
                        <input type="text" name="inputpost" id="inputpost" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="submitpost" class="btn btn-primary btn-lg">Submit Using POST</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-6">
                FROM GET:
                <pre>
                    <?php var_dump($_GET) ?>
                </pre>
                FROM POST:
                <pre>
                    <?php var_dump($_POST) ?>
                </pre>
                FROM REQUEST:
                <pre>
                    <?php var_dump($_REQUEST) ?>
                </pre>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>