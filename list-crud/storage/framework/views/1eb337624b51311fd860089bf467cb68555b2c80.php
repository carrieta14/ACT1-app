
<?php $__env->startSection('content'); ?>
<div class="container py-5 text-center">
    <h2>Listado de Cursos</h2>

    <a href="<?php echo e(route('course.create')); ?>" class="btn btn-primary">Create Class</a>
    <table class="table">
        <tr>
            <th>Curso</th>
            <th>Nivel</th>
            <th>Horas Academicas</th>
            <th>Profesor Asignado</th>

        </tr>
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($course->name); ?></td>
            <td><?php echo e($course->level); ?></td>
            <td><?php echo e($course->hours); ?></td>
            <td><?php echo e($course->teachers->fullName); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end"">
        <a href=" <?php echo e(route('attend.create')); ?>" class="btn btn-primary btn-sm">Create Class</a>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list-crud\resources\views/course/index.blade.php ENDPATH**/ ?>