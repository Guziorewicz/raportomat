<?php $__env->startSection('content'); ?>

<!-- Portfolio Section-->
<section class="masthead page-section portfolio" id="portfolio">
<div class="container">
<?php if(session()->has('message')): ?>
<div class="alert alert-warning alert-dismissible fade show">
<?php echo e(session()->get('message')); ?>

<button type="button" class="close" data-dimiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?> 
<!-- Portfolio Section Heading-->
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Raportów</h2>
  <!-- Icon Divider-->
  <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
  </div>
  <table style="margin:auto; justify-content:center;" class="table table-hover table-dark tabelka">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Zakres</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody> 
<?php $__currentLoopData = $lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <th scope="row"><?php echo e($list->id); ?></th>
  <th scope="row"><?php echo e($list->nazwa); ?></th>
  <th scope="row"><?php echo e($list->zakres); ?></th>
  <td><form method="get" action="<?php echo e(route('raporty.show', ['id' => $list->id])); ?>"> <!-- po raporty.show ...  -->
    <button type="submit" class="btn btn-primary">Wyświetl</td>
  </form>
</tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<div>
<br>
<br>
</div>
  <!-- Portfolio Section Heading-->
  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Raporty</h2>
  <!-- Icon Divider-->
  <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
  </div>
  <table style="margin:auto; justify-content:center;" class="table table-hover table-dark tabelka">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Report_ID</th>
      <th scope="col">Call_time</th>
      <th scope="col">Caller_ID</th>
      <th scope="col">Destination</th>
      <th scope="col">Status</th>
      <th scope="col">Ringing</th>
      <th scope="col">Talking</th>
      <th scope="col">Totals</th>
      <th scope="col">Cost</th>
      <th scope="col">Reason</th>
      <th scope="col">Play</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $raport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $raporty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<th scope="row"><?php echo e($raporty->id); ?></th>
<td><?php echo e($raporty->report_id); ?></td>
<td><?php echo e($raporty->call_time); ?></td>
<td><?php echo e($raporty->caller_id); ?></td>
<td><?php echo e($raporty->destination); ?></td>
<td><?php echo e($raporty->status); ?></td>
<td><?php echo e($raporty->ringing); ?></td>
<td><?php echo e($raporty->talking); ?></td>
<td><?php echo e($raporty->totals); ?></td>
<td><?php echo e($raporty->cost); ?></td>
<td><?php echo e($raporty->reason); ?></td>
<td><?php echo e($raporty->play); ?></td>
<td><?php echo e($raporty->active); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</section>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/projekt/raportomat/resources/views/Raporty/index.blade.php ENDPATH**/ ?>