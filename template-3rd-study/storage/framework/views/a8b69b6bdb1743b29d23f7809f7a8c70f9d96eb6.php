<style>
  .message{border:doble 4px #ccc; margin:10px; padding:10px;
    background-color:#fafafa;}
  .msg_title{ margin:1-px 20px; color:#999;
    font-size:16pt; font-weight:bold; }
  .msg_content{ margin:10px 20px; color:#aaa;
    font-size:12pt; }
</style>
<div class="message">
  <p class="msg_title"><?php echo e($msg_title); ?></p>
  <p class="msg_title"><?php echo e($msg_content); ?></p>
</div><?php /**PATH /work/backend/resources/views/components/message.blade.php ENDPATH**/ ?>