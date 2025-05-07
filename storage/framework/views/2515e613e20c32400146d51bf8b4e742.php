<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB - <?php echo $__env->yieldContent('title'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .min-h-80 {
            min-height: 80vh;
        }
    </style>
</head>
<body class="bg-gray-100">
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="container mx-auto py-4 min-h-80">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\UTS_PWEB_232410103089\resources\views/layouts/app.blade.php ENDPATH**/ ?>