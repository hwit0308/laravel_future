<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">City <?php echo e($city->id); ?></div>
                    <div class="panel-body">

                        <a href="<?php echo e(url('admin/city/' . $city->id . '/edit')); ?>" class="btn btn-primary btn-xs" title="Edit City"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/city', $city->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete City',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($city->id); ?></td>
                                    </tr>
                                    <tr><th> City Id </th><td> <?php echo e($city->city_id); ?> </td></tr><tr><th> City </th><td> <?php echo e($city->city); ?> </td></tr><tr><th> Country Id </th><td> <?php echo e($city->country_id); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>