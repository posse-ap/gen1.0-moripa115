<html>

<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <style>
    h1 {
      font-size: 50pt;
      text-align: center;
      color: #ccc;
    }

    .content {
      margin: 10px;
    }

    body {
      font-size: 30pt;
      text-align: center;
    }

    .footer {
      text-align: right;
      font-size: 100pt;
      margin: 10px;
      border-bottom: solid 10px #ccc;
      color: #ccc
    }
  </style>
</head>

<body>
  <h1><?php echo $__env->yieldContent('title'); ?></h1>

  <div class="content">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <div class="footer">
    <?php echo $__env->yieldContent('footer'); ?>
  </div>
</body>

</html><?php /**PATH /work/backend/resources/views/layouts/helloapp.blade.php ENDPATH**/ ?>