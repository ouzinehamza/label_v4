<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login - Midone - Tailwind Admin Dashboard Template</title>
        <!-- BEGIN: CSS Assets-->
        <!-- END: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css">
    </head>
    <body class="font-sans text-gray-900 antialiased">
    
        <div>
            <?php echo e($slot); ?>

            
        </div>

        <script src="dist/js/vendors/dom.js"></script>
        <script src="dist/js/vendors/tailwind-merge.js"></script>
        <script src="dist/js/vendors/lucide.js"></script>
        <script src="dist/js/vendors/modal.js"></script>
        <script src="dist/js/components/base/theme-color.js"></script>
        <script src="dist/js/components/base/lucide.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\label\resources\views/layouts/guest.blade.php ENDPATH**/ ?>