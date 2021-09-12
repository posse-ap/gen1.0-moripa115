<html>
  <head>
    <title>Hello/Index</title>
    <style>
      body{font-size:16pt; color:#999;}
      h1{font-size:50pt; text-align:right; color:#f6f6f6;
         margin:-20px 0px -30px 0px; letter-spacing:-4pt; } 
    </style>
  </head>
  <body>
    <h1>Blade/Index</h1>
    <p>whileディレクティブの例</p>
    
    <?php $__env->startSection('title','Index'); ?>
    <?php $__env->startSection('menubar'); ?>
        ##parent-placeholder-b87313ea43ef51d84641be104c943962e1df3977##
        インデックスページ
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <p>ここが本文のコンテンツです。</p>
        <p>必要なだけ記述できます。</p>

    <?php $__env->startComponent('components.message'); ?>
        <?php $__env->slot('msg_title'); ?>
        CAUTION!
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('msg_content'); ?>
        これはメッセージの表示です。
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('footer'); ?>
    copyright 2020 tunayo.
    <?php $__env->stopSection(); ?>
  </body>
</html>
<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/hello/index.blade.php ENDPATH**/ ?>