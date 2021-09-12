<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link
        href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
    <link rel="stylesheet" href="./quizy1.css">
</head>

<body>
    <div class="main">
      <?php echo $__env->yieldContent('content'); ?>

      <footer>
        <?php echo $__env->yieldContent('footer'); ?>
      </footer>
        
</body>

</html><?php /**PATH /work/backend/resources/views/layouts/kuizyapp.blade.php ENDPATH**/ ?>