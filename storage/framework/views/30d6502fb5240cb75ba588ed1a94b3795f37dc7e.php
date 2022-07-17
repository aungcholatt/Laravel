

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-6 offset-3">
        <div class="card m-3">
            <div class="card-header fs-3 text-center bg-dark text-white">
                 Customer Data
            </div>
             <form action="<?php echo e(route('customer#update',$customer->customer_id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php if(Session::has('updateSuccess')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo e(Session::get('updateSuccess')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                <div class="card-body fs-4">
                <div class="my-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e(old('name',$customer->name)); ?>">
                    <?php if($errors->has('name')): ?>
                       <small class="text-danger"><?php echo e($errors->first('name')); ?></small>
                    <?php endif; ?>
                </div>
                <div class="my-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo e(old('email',$customer->email)); ?>">
                    <?php if($errors->has('email')): ?>
                       <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
                    <?php endif; ?>
                </div>
                <div class="my-3">
                    <label>Address</label>
                    <textarea name="address" cols="30" rows="4" class="form-control"><?php echo e(old('address',$customer->address)); ?></textarea>
                    <?php if($errors->has('address')): ?>
                       <small class="text-danger"><?php echo e($errors->first('address')); ?></small>
                    <?php endif; ?>
                </div>
                <div class="my-3">
                    <label>Phone</label>
                    <input type="Number" name="phoneNumber" class="form-control" value="<?php echo e(old('phoneNumber',$customer->phone)); ?>">
                    <?php if($errors->has('phoneNumber')): ?>
                       <small class="text-danger"><?php echo e($errors->first('phoneNumber')); ?></small>
                    <?php endif; ?>
                </div>
                <div class="my-3">
                    <label>Gender</label>
                    <select name="gender" class="form-control" value="<?php echo e(old('gender',$customer->gender)); ?>">
                        <?php if($customer->gender==1): ?>
                        <option value="">Choose Option..</option>
                        <option value="1" selected>Male</option>
                        <option value="2">Female</option>
                        <option value="0">Others</option>
                        <?php elseif($customer->gender==2): ?>
                        <option value="">Choose Option..</option>
                        <option value="1" >Male</option>
                        <option value="2" selected>Female</option>
                        <option value="0">Others</option>
                        <?php elseif($customer->gender==0): ?>
                        <option value="">Choose Option..</option>
                        <option value="1" >Male</option>
                        <option value="2">Female</option>
                        <option value="0" selected>Others</option>
                        <?php else: ?>
                        <option value="" selected>Choose Option..</option>
                        <option value="1" >Male</option>
                        <option value="2">Female</option>
                        <option value="0">Others</option>
                        <?php endif; ?>
                    </select>
                    <?php if($errors->has('gender')): ?>
                       <small class="text-danger"><?php echo e($errors->first('gender')); ?></small>
                    <?php endif; ?>
                </div>
                <div class="my-3">
                    <label>DOB</label>
                    <input type="date" name="dateOfBirth" class="form-control" value="<?php echo e(old('dateOfBirth',$customer->date_of_birth)); ?>">
                    <?php if($errors->has('dateOfBirth')): ?>
                       <small class="text-danger"><?php echo e($errors->first('dateOfBirth')); ?></small>
                    <?php endif; ?>
                </div>
                <div class="my-3 float-end">
                    <input type="submit" value="Update" class="btn bg-danger text-white form-control">
                </div>
            </form>
            </div>
            <div class="card-footer">
                <a href="<?php echo e(route('customer#list')); ?>"><button class="btn btn-sm bg-dark text-white">Back</button></a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\CustomerRegisterForm\resources\views/customer/edit.blade.php ENDPATH**/ ?>