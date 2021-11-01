<html>



<head>
    <?php $__env->startSection('title'); ?>
        <title><?php echo e($questions->name); ?></title>
    </head>

    <body>

    <?php $__env->startSection('content'); ?>

        <div class="quiz">
            <?php for($questions->choices as $choice): ?>
                <h1><?php echo e($choice ->id); ?>. この地名はなんて読む？</h1>
                <img src="./public/img/<?php echo e($questions->id); ?>.png">
                <ul>
                    <?php $__currentLoopData = $questions->choices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li id="answerlist_1_1" name="answerlist_1" class="answerlist" onclick="check(1, 1, 2)">
                            <?php echo e($choice->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- <li id="answerlist_1_2" name="answerlist_1" class="answerlist" onclick="check(1, 2, 2)"><?php echo e($choice->name); ?></li>
                    <li id="answerlist_1_3" name="answerlist_1" class="answerlist" onclick="check(1, 3, 2)"><?php echo e($choice->name); ?></li> -->
                    <li id="answerbox_1" class="answerbox">
                        <span id="answertext_1"></span><br>
                        <span>正解は「<?php echo e($choice->name); ?>」です！</span>
                    </li>
            <?php endfor; ?>
            </ul>
        </div>


    </body>

    </html>

<?php echo $__env->make('layouts.kuizyapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/kuizy.blade.php ENDPATH**/ ?>