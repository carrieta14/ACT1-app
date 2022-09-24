
<?php $__env->startSection('content'); ?>
    <div class="container py-5 text-center">
        <?php if(isset($course)): ?>
          <h1>Editar Clase</h1>
        <?php else: ?>
          <h1>Crear Clase</h1>
        <?php endif; ?>

        <?php if(isset($course)): ?>
        <form action="<?php echo e(route('course.update', $course)); ?>" method="POST">
            <?php echo method_field('PUT'); ?>
        <?php else: ?>
        <form action="<?php echo e(route('course.store')); ?>" method="POST">
        <?php endif; ?>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="mb-3">
            <label for="name" class="form-lable">Nombre del Curso</label>
            <input type="text" name="name" class="form-control" placeholder="Nombre del Curso" value="<?php echo e(old('name') ??@$course->name); ?>">
            <p class="form-text">Escriba el nombre del Curso</p>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-text text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="hours" class="form-lable">Horas Academicas</label>
            <input type="number" name="hours" class="form-control" placeholder="Horas Academicas" value="<?php echo e(old('hours') ??@$course->hours); ?>">
            <p class="form-text">Escriba las Horas Academicas</p>
            <?php $__errorArgs = ['hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-text text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="level" class="form-lable">Nivel</label>
            <input type="number" name="level" class="form-control" placeholder="Nivel" value="<?php echo e(old('level') ??@$course->level); ?>">
            <p class="form-text">Escriba el nivel de curso</p>
            <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-text text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="teacher_id" class="form-lable">Profesor</label>
            <select name="teacher_id" id="inputTeacher" placeholder="-->Elegir Profesor <--">
                <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher['fullName']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
            <p class="form-text">Asigne el profesor del curso</p>
            <?php $__errorArgs = ['teacher_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-text text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <?php if(isset($course)): ?>
        <button type="submit" class="btn btn-primary">Edit Class</button>
        <?php else: ?>
        <button type="submit" class="btn btn-primary">Save Class</button>
        <?php endif; ?>
        
    </form>
    </div
<?php $__env->stopSection(); ?>      
<?php echo $__env->make('theme.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list-crud\resources\views/course/form.blade.php ENDPATH**/ ?>