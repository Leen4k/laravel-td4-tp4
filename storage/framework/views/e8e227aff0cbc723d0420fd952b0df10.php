<article class="`h-[170px] w-[130px] <?php echo e($category['backgroundcolor']); ?> rounded-md shadow-md overflow-hidden cursor-pointer border-2 hover:border-slate-100 border-transparent`">
    <img class="h-[120px] w-full" src="<?php echo e($category['image']); ?>" :alt="$category['image']" />
    <h3 class="text-center font-semibold"><?php echo e($category['name']); ?></h3>
    <p class="text-center text-xs text-[#B6B6B6]"><?php echo e($category['quantity']); ?> items</p>
</article>
<?php /**PATH /var/www/html/resources/views/components/category.blade.php ENDPATH**/ ?>