<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<!-- Get all topics from DB -->
<?php $topics = getAllTopics();	?>
	<title>Admin | Manage Topics</title>
</head>
<body dir="rtl">
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
	<div class="container content">
		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/admin/includes/messages.php') ?>
			<?php if (empty($topics)): ?>
				<h1>لا توجد مواضيع في قاعدة البيانات</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>رقم</th>
						<th>اسم الموضوع</th>
						<th colspan="2">عمل</th>
					</thead>
					<tbody>
					<?php foreach ($topics as $key => $topic): ?>
						<tr>
							<td style="text-align:center;"><?php echo $key + 1; ?></td>
							<td style="text-align:right"><?php echo $topic['name']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="topics.php?edit-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete"								
									href="topics.php?delete-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
		<div class="action">
			<h1 class="page-title">إنشاء / تحرير المواضيع</h1>
			<form method="post" action="<?php echo BASE_URL . 'admin/topics.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include(ROOT_PATH . '/admin/includes/errors.php') ?>
				<!-- if editing topic, the id is required to identify that topic -->
				<?php if ($isEditingTopic === true): ?>
					<input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
				<?php endif ?>
				<input type="text" name="topic_name" value="<?php echo $topic_name; ?>" placeholder="عنوان">
				<!-- if editing topic, display the update button instead of create button -->
				<?php if ($isEditingTopic === true): ?> 
					<button type="submit" class="btn" name="update_topic">تحديث</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_topic">حفظ الموضوع</button>
				<?php endif ?>
			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- Middle form - to create and edit -->
		
	</div>
</body>
</html>