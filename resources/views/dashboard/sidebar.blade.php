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
		@foreach ($dashboarSideBar as  $key => $value)
			@if($value['child'] && $value['comm_seller_user_id'] > 0)
			
				@foreach ($value['child'] as  $k => $v)
					<?php $var = ($v[1] == $lastSeg) ? true : false;break; ?>
				@endforeach
				<li class="nav-item <?= $var ? "open" : ""  ?>">
		            <a href="javascript:;">
		                <i class="{{$value['icon']}}"></i>
		                <span class="title">{{$value['title']}}</span>
		                <span class="arrow "></span>
		            </a>
		            <ul class="sub-menu" style="display: <?= $var ? "block" : "none" ?>">
		            	@foreach ($value['child'] as  $k => $v)
		                <li class="start nav-item  <?= $lastSeg==$v[1] ? "active" : "" ?>">
		                    <a href="{{$v[1]}}"><i class="{{$v[2]}}"></i> {{$v[0]}} </a>
		                </li>
		                @endforeach
		            </ul>
		        </li>
		    @elseif($value['comm_seller_user_id'] == -1)
				<li class="nav-item <?= $var ? "open" : ""  ?> bg-blue-oleo bg-font-blue-oleo" data-toggle="modal" data-name="{{$value['title']}}" data-id="{{$value['id']}}" data-target="#myModal">
		            <a href="javascript:void(0)">
		                <i class="{{$value['icon']}}"></i>
		                <span class="title">{{$value['title']}}</span>
		            </a>
		        </li>
        	@else
				<li class="start nav-item  <?= $lastSeg==$value['url'] ? "active" : "" ?>">
		            <a href="{{$value['url']}}">
		                <i class="{{$value['icon']}}"></i>
		                <span class="title">{{$value['title']}}</span>
		            </a>
		        </li>
		    @endif
		@endforeach
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
