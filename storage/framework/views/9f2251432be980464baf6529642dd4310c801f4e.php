<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">City</div>
                    <div class="panel-body">

                        <a href="<?php echo e(url('/admin/city/create')); ?>" class="btn btn-primary btn-xs" title="Add New City"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> City Id </th><th> City </th><th> Country Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->city_id); ?></td><td><?php echo e($item->city); ?></td><td><?php echo e($item->country_id); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/admin/city/' . $item->id)); ?>" class="btn btn-success btn-xs" title="View City"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="<?php echo e(url('/admin/city/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs" title="Edit City"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            <?php echo Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/city', $item->id],
                                                'style' => 'display:inline'
                                            ]); ?>

                                                <?php echo Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete City" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete City',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $city->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>