<!-- form.blade.php -->



<?php $__env->startSection('content'); ?>
    <h1>Create Product</h1>

    <!-- <?php echo Form::open(['route' => 'products.store', 'method' => 'post']); ?> -->
    <?php echo Form::open(['route' => 'products.store', 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>

    
    <section class="m-auto flex flex-col space-y-4 bg-pink-200 items-center justify-center w-[500px]">
    <div class="form-group gap-2 flex-1 w-full m-auto flex items-center justify-center">
        <?php echo Form::label('name', 'Name'); ?>

        <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
    <?php echo Form::label('category_id', 'Category'); ?>

    <?php echo Form::select('category_id', $categories->pluck('name', 'id'), null, ['class' => 'form-control']); ?>

</div>

    <div class="form-group">
        <?php echo Form::label('pricing', 'Pricing'); ?>

        <?php echo Form::text('pricing', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('description', 'Description'); ?>

        <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('images', 'Images'); ?>

        <?php echo Form::file('images[]', ['class' => 'form-control', 'multiple' => true]); ?>

    </div>

    <div class="form-group">
        <?php echo Form::submit('Create Product', ['class' => 'btn btn-primary']); ?>

    </div>
    </section>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/products/form.blade.php ENDPATH**/ ?>