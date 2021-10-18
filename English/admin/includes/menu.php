<div class="menu">
	<div class="card">
		<div class="card-header">
			<h2>Actions</h2>
		</div>
		<div class="card-content">

			<?php if ($_SESSION['user']['role'] == "Admin"): ?>
					<!-- display checkbox according to whether post has been published or not -->
					<a href="<?php echo BASE_URL . 'admin/create_post.php' ?>">Create Posts</a>
					<a href="<?php echo BASE_URL . 'admin/posts.php' ?>">Manage Posts</a>
					<a href="<?php echo BASE_URL . 'admin/users.php' ?>">Manage Users</a>
					<a href="<?php echo BASE_URL . 'admin/topics.php' ?>">Manage Topics</a>
					<?php else: ?>
						<a href="<?php echo BASE_URL . 'admin/create_post.php' ?>">Create Posts</a>
			<?php endif ?>
			
		</div>
	</div>
</div>