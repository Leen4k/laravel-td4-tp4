<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>
<body>
    <!-- Include the Category component for each category -->

    <section class="flex flex-col gap-12 items-center justify-center min-h-screen mx-8 mt-8">
    <a class="bg-pink-200 p-2 rounded-md px-4" href="<?php echo e(route('products.create')); ?>">Create Product</a>
    <div class="flex flex-row gap-4">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal8daf9a954c8f412042664b6b343f77c0 = $component; } ?>
<?php $component = App\View\Components\Category::resolve(['category' => $category] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Category::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8daf9a954c8f412042664b6b343f77c0)): ?>
<?php $component = $__componentOriginal8daf9a954c8f412042664b6b343f77c0; ?>
<?php unset($__componentOriginal8daf9a954c8f412042664b6b343f77c0); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="flex w-full gap-4">
        <?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal498324b8ca3695df18e5d3c04193a19f = $component; } ?>
<?php $component = App\View\Components\Promotion::resolve(['promotion' => $promotion] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('promotion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Promotion::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal498324b8ca3695df18e5d3c04193a19f)): ?>
<?php $component = $__componentOriginal498324b8ca3695df18e5d3c04193a19f; ?>
<?php unset($__componentOriginal498324b8ca3695df18e5d3c04193a19f); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="grid grid-cols-5 justify-center gap-4 mb-16">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal4912e54b47cc540c8c40bfbaaa4ad898 = $component; } ?>
<?php $component = App\View\Components\Product::resolve(['product' => $product] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Product::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4912e54b47cc540c8c40bfbaaa4ad898)): ?>
<?php $component = $__componentOriginal4912e54b47cc540c8c40bfbaaa4ad898; ?>
<?php unset($__componentOriginal4912e54b47cc540c8c40bfbaaa4ad898); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
  </section>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>