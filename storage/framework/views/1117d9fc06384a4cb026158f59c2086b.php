<?php $__env->startSection('title', 'Kerajang'); ?>

<?php $__env->startSection('body'); ?>
<div class=" w-full flex flex-col items-center gap-1 pb-10 relative">
    <div class=" w-full text-left text-[#b3b3b3] font-bold py-5">
        <h1 class="text-3xl">
            Dashboard Peminjaman
        </h1>
    </div>
    <div class=" w-full">
        <?php echo $__env->make('components.bookcart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/whoami/Joki/BookSwap/project/resources/views/pages/keranjang.blade.php ENDPATH**/ ?>