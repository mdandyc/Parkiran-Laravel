<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Parkir</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php if(Session::has('message')): ?>
					    <div class="alert alert-success">
				           <?php echo e(Session::get('message')); ?>

				        </div>
					<?php endif; ?>
					<a href="/parkiran/create" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th>Plat Nomor</th>
							<th>Jam Masuk</th>
							<th>Jam Keluar</th>
							<th>Action</th>
						</tr>
					<?php $__currentLoopData = $kendaraans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kendaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
						<td><?php echo e($kendaraan -> plat_nomer); ?></td></a>
						<td><?php echo e($kendaraan -> jam_masuk); ?></td>
						<td><?php echo e($kendaraan -> jam_keluar); ?></td>
							<td>
							<form method="POST" action="/parkiran/<?php echo e($kendaraan->id); ?>" accept-charset="UTF-8">
									<input type="hidden" name="_method" value="delete">
		                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		                            <a href="/parkiran/<?php echo e($kendaraan->id); ?>/edit" class="btn btn-primary">Edit</a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form>
							</td>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>