<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="/css/dashboard.css" rel="stylesheet">
    <title>Telkom | E-Rapot</title>
    <style>
        ::-webkit-scrollbar {
            display: none;
        }   
    </style>
</head>

<body style="background-color: #EEEDF3">
    <?php echo $__env->make('layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid" >
        <div class="row">
            <?php echo $__env->make('layouts.dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php echo $__env->yieldContent('main'); ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/layouts/dashboard/main.blade.php ENDPATH**/ ?>