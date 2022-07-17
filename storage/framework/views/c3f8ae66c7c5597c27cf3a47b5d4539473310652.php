

<?php $__env->startSection('content'); ?>
 <div class="row m-5">
    <div class="col-md-10 offset-1">
    <?php if(Session::has('deleteSuccess')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo e(Session::get('deleteSuccess')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                <?php if(Session::has('updateSuccess')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo e(Session::get('updateSuccess')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
        <table class="table table-hover text-center">
                <thead class="bg-dark text-white">
                     <th>ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th></th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->customer_id); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->phone); ?></td>
                        <td>
                            <a href="<?php echo e(route('customer#edit',$item->customer_id)); ?>"><button class="btn btn-sm bg-dark text-white">Edit</button></a>
                            <a href="<?php echo e(route('customer#delete',$item->customer_id)); ?>"><button class="btn btn-sm bg-danger text-white">Delete</button></a>
                            <a href="<?php echo e(route('customer#seeMore',$item->customer_id)); ?>"><button class="btn btn-sm bg-secondary text-white">SeeMore..</button></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
           </table>
           <div class="">
            <?php echo e($customer->links()); ?>

           </div>
           <a href="<?php echo e(route('customer#register')); ?>"><button class="btn btn-primary btn-sm float-end">Back</button></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mylayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\CustomerRegisterForm\resources\views/customer/list.blade.php ENDPATH**/ ?>