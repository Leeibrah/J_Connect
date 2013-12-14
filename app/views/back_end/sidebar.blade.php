<!--sidebar start-->
<aside>
	<div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu" id="nav-accordion">
			<li>
				<a {{$dashboard_active}} href='<?=url('admin/dashboard')?>'> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
			</li>
			<li>
				<a {{$search_active}} href='<?=url('admin/search')?>'> <i class="fa fa-search"></i> <span>Search</span> </a>
			</li>
			<li>
				<a {{$marked_active}} href='<?=url('admin/marked')?>'> <i class="fa fa-bookmark-o"></i> <span>Marked Jobs</span> </a>
			</li>
			<li>
				<a {{$messages_active}}  href='<?=url('admin/messages')?>'> <i class="fa fa-envelope"></i> <span>Messages</span> </a>
			</li>
			<li>
				<a {{$notifications_active}}  href='<?=url('admin/notifications')?>'> <i class="fa fa-bell"></i> <span>Notifications</span> </a>
			</li>
			<li>
				<a {{$tasks_active}}  href='<?=url('admin/tasks')?>'> <i class="fa fa-tasks"></i> <span>Tasks</span> </a>
			</li>
			<li>
				<a {{$calendar_active}} href='<?=url('admin/calendar') ?>'> <i class="fa fa-calendar-o"></i> <span>Calendar</span> </a>
			</li>

		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
<!--sidebar end-->