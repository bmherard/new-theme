<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    <meta name="description" content="<?= $Wcms->page('description') ?>">
    <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
    <?= $Wcms->css() ?>
</head>

<body class="d-flex flex-column h-100">

    <?= $Wcms->settings() ?>
    <?= $Wcms->alerts() ?>
    
    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?= $Wcms->url() ?>"><?= $Wcms->get('config', 'siteTitle') ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="topNav">
                    <ul class="navbar-nav mr-auto">
                        <?= $Wcms->menu() ?>
                    </ul>
                </div>
            </div>    
        </nav>
    </header>

    <!-- CONTENT -->
    <div  role="main" class="flex-shrink-0">
        <section class="container">
            <div class="row mt-4 mb-4">
                <article class="col-md-8">
                    <?= $Wcms->page('content') ?>
                    <?php echo contact_form(); ?>
                </article>
                <aside class="col-md-4 border rounded-sm bg-light p-3">
                    <?= $Wcms->block('subside') ?>
                </aside>
        </section>
    </div>

    <!-- FOOTER -->
    <footer id="sticky-footer" class="mt-auto py-3 bg-light">
        <div class="container">
            <span class="small text-muted"><?= $Wcms->footer() ?></span>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?= $Wcms->js() ?>

</body>
</html>
