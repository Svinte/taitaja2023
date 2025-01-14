<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Oy | <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.scss'); ?>
    <?php echo $__env->yieldContent('head'); ?>
</head>

<body>
    <header>
        <div class="row">
        <div class="col">
            <img src="/logo/Logo light.png" alt="Weather Oy logo" />
        </div>
        <div class="col">
            <nav>
            <ul>
                

                <li>
                <a class="icon">
                    <i class="fa fa-bars"></i>
                </a>
                </li>
            </ul>
            </nav>
        </div>
        </div>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p><small>&copy; Taitaja 2023 & Kokkoniemi Svante 2025</small></p>
    </footer>
</body>
</html><?php /**PATH C:\Users\kokko\Documents\GitHub\taitaja2023\resources\views/layout/app.blade.php ENDPATH**/ ?>