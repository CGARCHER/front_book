<?php $__env->startSection('title', 'Crear Libro'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Crear Libro</h1>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning btn-sm" href="<?php echo e(route('books')); ?>"><i class="fa fa-plus"></i>Volver al inicio</a>
    </div>

    <form method="POST" action="<?php echo e(route('proccessCreateBook')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" required>
                </div>
                <div class="form-group">
                    <label for="gen">Genero</label>
                    <select name="gen" class="form-control" id="gen" required>
                        <option value="" selected disabled>Selecciona una opcion...</option>
                        <option value="DRAMA">Drama</option>
                        <option value="SCIFI">Ciencia ficcion</option>
                        <option value="MANGA">Manga</option>
                        <option value="SPORTS">Deportes</option>
                        <option value="COOKING">Cocina</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">Estado</label>
                    <select name="state" class="form-control" id="state" required>
                        <option value="" selected disabled>Selecciona una opcion...</option>
                        <option value="ONSALE">A la venta</option>
                        <option value="PREORDER">Preventa</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="published">Publicado</label>
                    <input type="date" class="form-control" id="published" name="published" required>
                </div>
                <button type="submit" class="btn btn-success">Crear Libro</button>
            </form>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\frontBook-main\resources\views/createBook.blade.php ENDPATH**/ ?>