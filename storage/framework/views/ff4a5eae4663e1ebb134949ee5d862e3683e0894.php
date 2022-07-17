

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-6 offset-3">
        <div class="card m-3">
            <div class="card-header fs-3 text-center">
                 Customer Data
            </div>
            <div class="card-body fs-4 ms-5 ps-5">
                <div class="my-3">
                    <label>ID</label>:<lable><?php echo e($customer[0]['customer_id']); ?></lable>
                </div>
                <div class="my-3">
                    <label>Name</lable>:<lable><?php echo e($customer[0]['name']); ?></lable>
                </div>
                <div class="my-3">
                    <label>Email</label>:<lable><?php echo e($customer[0]['email']); ?></lable>
                </div>
                <div class="my-3">
                    <label>Address</label>:<lable><?php echo e($customer[0]['address']); ?></lable>
                </div>
                <div class="my-3">
                    <label>Phone</label>:<lable><?php echo e($customer[0]['phone']); ?></lable>
                </div>
                <div class="my-3">
                    <label>Gender</label>:
                    <label>
                        <?php if($customer[0]['gender']==1): ?>
                        Male
                        <?php elseif($customer[0]['gender']==2): ?>
                        Female
                        <?php elseif($customer[0]['gender']==0): ?>
                        Others
                        <?php endif; ?>
                    </label>
                </div>
                <div class="my-3">
                    <label>DOB</label>:<lable><?php echo e($customer[0]['date_of_birth']); ?></lable>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo e(route('customer#list')); ?>"><button class="btn btn-sm bg-dark text-white">Back</button></a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\CustomerRegisterForm\resources\views/customer/seeMore.blade.php ENDPATH**/ ?>