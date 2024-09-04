<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Welcome to Pesbok')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main Dashboard Container -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
            </div>

            <!-- Create Post Form -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    <?php echo e(__('Create a New Post')); ?>

                </h3>
                <form action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <textarea name="post_content" rows="4" class="w-full border-gray-300 rounded-lg p-3" placeholder="What's on your mind?"></textarea>
                    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg">
                        <?php echo e(__('Post')); ?>

                    </button>
                </form>
            </div>

            <!-- Post Feed -->
            <div class="mt-6 bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    <?php echo e(__('Feed')); ?>

                </h3>
                <!-- Example Post -->
                <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                    <div class="flex items-center mb-2">
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-gray-800">Example User</h4>
                            <p class="text-gray-600 text-sm">2 hours ago</p>
                        </div>
                    </div>
                    <p class="text-gray-800 mb-4">This is an example post content. It could be anything that the user wants to share with their friends.</p>
                    <div class="flex justify-between text-gray-600 text-sm">
                        <button class="hover:text-blue-500"><?php echo e(__('Like')); ?></button>
                        <button class="hover:text-blue-500"><?php echo e(__('Comment')); ?></button>
                        <button class="hover:text-blue-500"><?php echo e(__('Share')); ?></button>
                    </div>
                </div>
                <!-- Add more posts here as needed -->
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\social_media_name_app\resources\views/dashboard.blade.php ENDPATH**/ ?>