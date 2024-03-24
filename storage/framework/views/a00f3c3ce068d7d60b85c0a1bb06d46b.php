<article class="bg-white border-2 relative p-4 rounded-lg border-slate-100 cursor-pointer hover:border-[#4CAE87]" :key="index">
    <div class="w-full mb-4">
        <?php
            $images = json_decode($product['images'], true); // Decode the JSON string
            $firstImage = isset($images[0]['url']) ? $images[0]['url'] : null; // Get the URL of the first image
        ?>
        <?php if($firstImage): ?>
            <img class="h-[180px] w-full object-contain" src="<?php echo e($firstImage); ?>" alt="<?php echo e($firstImage); ?>"> <!-- Display the first image -->
        <?php endif; ?>
    </div>
    <span class="text-xs text-slate-500">Hodo Foods</span>
    <h1 class=""><?php echo e($product['name']); ?></h1>
    <div class="flex gap-1">
        <?php for($i = 0; $i < 4; $i++): ?>
            <img class="text-sm w-4 h-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Gold_Star.svg/1200px-Gold_Star.svg.png" alt="">
        <?php endfor; ?>
    </div>
    <p class="text-xs text-slate-500 mb-3"><?php echo e($product['description']); ?></p>
    <div class="flex items-center justify-between">
        <p class="text-xl font-bold text-[#4CAE87]">$<?php echo e($product['pricing']); ?> <span class="line-through text-xs text-slate-500 font-normal">$<?php echo e($product['pricing']); ?></span></p>
        <!-- <Button /> -->
        <input class="w-12 text-center" type="number">
    </div>
</article>
<?php /**PATH /var/www/html/resources/views/components/product.blade.php ENDPATH**/ ?>