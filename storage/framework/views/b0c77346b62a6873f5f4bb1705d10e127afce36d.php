

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6 offset-3">
        <div class="my-3 text-end">
            <a href="<?php echo e(route('customer#list')); ?>"><button class="btn btn-secondary">List Page</button></a>
        </div>
        <div class="card">
            <div class="card-header text-center fs-3 bg-dark text-white">Customer Register Form</div>
            <div class="card-body">
            <?php if(Session::has('InsertSuccess')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo e(Session::get('InsertSuccess')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('customer#create')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                <div class="my-2">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
                    <?php if($errors->has('name')): ?>
                    <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                    <?php endif; ?>
                    </div>
                    <div class="my-2">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo e(old('email')); ?>">
                    <?php if($errors->has('email')): ?>
                    <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                    <?php endif; ?>
                     </div>
                <div class="my-2">
                    <label>Address</label>
                    <textarea name="address" cols="30" rows="5" class="form-control"><?php echo e(old('address')); ?></textarea>
                    <?php if($errors->has('address')): ?>
                    <p class="text-danger"><?php echo e($errors->first('address')); ?></p>
                    <?php endif; ?>
                </div>
                  <div class="my-2">
                    <label>Gender</label>
                    <select name="gender" class="form-control" value="<?php echo e(old('gender')); ?>">
                        <option value="">Choose Option..</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="0">Others</option>
                    </select>
                    <?php if($errors->has('gender')): ?>
                    <p class="text-danger"><?php echo e($errors->first('gender')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="my-2">
                    <label>Date of Birth</label>
                   <input type="date" name="dateOfBirth" class="form-control" value="<?php echo e(old('dateOfBirth')); ?>">
                   <?php if($errors->has('dateOfBirth')): ?>
                    <p class="text-danger"><?php echo e($errors->first('dateOfBirth')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="my-2">
                    <label>Phone Number</label>
                   <input type="number" name="phoneNumber" class="form-control" value="<?php echo e(old('phoneNumber')); ?>">
                   <?php if($errors->has('phoneNumber')): ?>
                    <p class="text-danger"><?php echo e($errors->first('phoneNumber')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="my-2 float-end">
                   <input type="submit" value="Register" class="btn btn-dark text-white">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mylayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CustomerRegisterForm\resources\views/customer/register.blade.php ENDPATH**/ ?>