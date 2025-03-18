<nav class="side-bar">
			<div class="user-p">
				<img src="img/profile.png">
				<h4>@<?=$_SESSION['username']?></h4>
			</div>
			<?php

				if($_SESSION['role'] == "employee") { 
			?>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						<span>My Tasks</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>Notifications</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
			<?php } else { ?>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-users" aria-hidden="true"></i>
						<span>Regulate users</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-plus" aria-hidden="true"></i>
						<span>Create Task</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						<span>All tasks</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>Notifications</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
			<?php } ?>
		</nav>