<?php $__env->startSection('content'); ?>
<section> 
    <br></br>
    <br></br>
<div id="wrap">
       
            <div class="row">
                <form  action="<?php echo e(route('raporty.store')); ?>" method="POST" name="upload_excel" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>     
                <fieldset>
                        <!-- Nazwa Formularza -->
                        <legend>Adding CSV</legend>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Open File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <!-- Przycisk -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php
  //  get_all_records();
            ?>
        
    </div>
</section>
    <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/projekt/raportomat/resources/views/Raporty/create.blade.php ENDPATH**/ ?>