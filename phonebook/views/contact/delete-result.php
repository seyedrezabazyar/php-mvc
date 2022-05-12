<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset_url() ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= asset_url() ?>css/all.min.css" />
    <title>result </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col m-5 p-5">
                <?php if ($deleted_count) : ?>
                    <span class="text-warning">Contact deleted successfully!</span>
                <?php else : ?>
                    <span class="text-danger">Contact not exists!</span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col m-5 p-5">
                <div class="spinner-border text-primary" role="status"></div>

                <?php
                //$site_url = site_url();
                //header("refresh:1;url=$site_url"); 
                ?>

                <script>
                    setTimeout(function() {
                        location.href = '<?= site_url() ?>'
                    }, 1000);
                </script>

            </div>
        </div>
    </div>
</body>

</html>