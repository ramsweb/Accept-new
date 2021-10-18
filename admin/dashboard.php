<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body dir="rtl">
	<div class="header">
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<br><a href="<?php echo BASE_URL . 'index.php'; ?>" class="logout-btn">تسجيل خروج</a>
			</div>
		<?php endif ?>
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>أكسبت  <?php echo $_SESSION['user']['username'] ?> </h1>
			</a>
		</div>
		
	</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>43</span> <br>
				<span>المستخدمون</span>
			</a>
			<a href="posts.php">
				<span>43</span> <br>
				<span>إجمالي المشاركات</span>
			</a>
			<a>
				<span>43</span> <br>
				<span>تعليقات</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons" dir="rt">

			<?php if ($_SESSION['user']['role'] == "Admin"): ?>
					<!-- display checkbox according to whether post has been published or not -->
					<a href="users.php">أضف المستخدمين</a>
					<a href="posts.php">أضف الوظائف</a>
					<?php else: ?>
						<a href="posts.php">Add Posts</a>
			<?php endif ?>
				
			
		</div>
	</div>
</body>
</html>