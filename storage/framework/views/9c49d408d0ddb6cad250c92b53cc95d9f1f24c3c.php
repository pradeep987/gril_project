<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu page-sidebar-menu-closed" data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
    	<li class="heading">
            <h3>GENERAL</h3>
        </li>
		<?php 
			$dashboarSideBar = Session::get('dashboarSideBar'); 
			$lastSeg = request()->segment(count(request()->segments()));
			$var = false;
		?>
		<?php $__currentLoopData = $dashboarSideBar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value['child'] && $value['comm_seller_user_id'] > 0): ?>
			
				<?php $__currentLoopData = $value['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $var = ($v[1] == $lastSeg) ? true : false;break; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<li class="nav-item <?= $var ? "open" : ""  ?>">
		            <a href="javascript:;">
		                <i class="<?php echo e($value['icon']); ?>"></i>
		                <span class="title"><?php echo e($value['title']); ?></span>
		                <span class="arrow "></span>
		            </a>
		            <ul class="sub-menu" style="display: <?= $var ? "block" : "none" ?>">
		            	<?php $__currentLoopData = $value['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li class="start nav-item  <?= $lastSeg==$v[1] ? "active" : "" ?>">
		                    <a href="<?php echo e($v[1]); ?>"><i class="<?php echo e($v[2]); ?>"></i> <?php echo e($v[0]); ?> </a>
		                </li>
		                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		            </ul>
		        </li>
		    <?php elseif($value['comm_seller_user_id'] == -1): ?>
				<li class="nav-item <?= $var ? "open" : ""  ?> bg-blue-oleo bg-font-blue-oleo" data-toggle="modal" data-name="<?php echo e($value['title']); ?>" data-id="<?php echo e($value['id']); ?>" data-target="#myModal">
		            <a href="javascript:void(0)">
		                <i class="<?php echo e($value['icon']); ?>"></i>
		                <span class="title"><?php echo e($value['title']); ?></span>
		            </a>
		        </li>
        	<?php else: ?>
				<li class="start nav-item  <?= $lastSeg==$value['url'] ? "active" : "" ?>">
		            <a href="<?php echo e($value['url']); ?>">
		                <i class="<?php echo e($value['icon']); ?>"></i>
		                <span class="title"><?php echo e($value['title']); ?></span>
		            </a>
		        </li>
		    <?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	
	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Active Menu</h4>
	        </div>
	        <div class="modal-body">
	          <p>Are you sure wnat to active '<apn id="menuTitle"></apn>' menu?.</p>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-success" onclick="activeDashboardMenu()">Ok</button>
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      
	    </div>
	</div>
</div>
