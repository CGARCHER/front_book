<?php $__env->startSection('title', 'Listado'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Libros</h1>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="<?php echo e(route('books')); ?>"><i class="fa fa-plus"></i> Crear Libro</a>
    </div>

    <?php if(isset($libros)): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ISBN</th>
                    <th>Usado</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Precio</th>
                    <th>Publicado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($libro['id']); ?></td>
                        <td><?php echo e($libro['isbn']); ?></td>
                        <td><?php echo e($libro['used'] ? 'Sí' : 'No'); ?></td>
                        <td><?php echo e($libro['type']); ?></td>
                        <td><?php echo e($libro['status']); ?></td>
                        <td><?php echo e($libro['price']); ?></td>
                        <td><?php echo e($libro['published']); ?></td>
                        <td>
                            <a href="<?php echo e(route('books', ['id' => $libro['id']])); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</a>
                            <a href="<?php echo e(route('books', ['id' => $libro['id']])); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\frontBook-main\resources\views/book.blade.php ENDPATH**/ ?>