<div class="page-sidebar-wrapper">
	<!-- BEGIN SIDEBAR -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu   " data-keep-expanded="false"
			data-auto-scroll="true" data-slide-speed="200">
			<?php
			$sideBar = Session::get('sideBar');
			$lastSeg = request()->segment(count(request()->segments()))
			?>
			<?php $__currentLoopData = $sideBar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li
				class="nav-item <?= array_has($value, $lastSeg) ? "start open" : "" ?>">
				<a href="javascript:;" class="nav-link nav-toggle"> <i
					class="icon-home"></i> <span class="title"><?php echo e($key); ?>
				</span> <span
					class="arrow <?= array_has($value, $lastSeg) ? "open" : "" ?>"></span>
			</a>
				<ul class="sub-menu" style="display: <?= array_has($value, $lastSeg) ? "block" : "none" ?>">
				<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="nav-item start <?= ($k == $lastSeg) ? "active" : "" ?>">
						<a href="<?php echo e(url($v[1])); ?>" class="nav-link "> <i
							class="<?php echo e($v[2]); ?>"></i> <span class="title"><?php echo e($v[0]); ?>
						</span> <span class="selected"></span> </a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<!-- <li>
				<h3 class="uppercase">Features</h3>
			</li>
			<li class="nav-item  ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="icon-diamond"></i>
					<span class="title">UI Features</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="ui_colors.html" class="nav-link ">
							<span class="title">Color Library</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="ui_metronic_grid.html" class="nav-link ">
							<span class="title">Metronic Grid System</span>
						</a>
					</li>
				</ul>
			</li> -->
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
