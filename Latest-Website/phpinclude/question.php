<?php
session_start();
include 'database.php';
$question=new database;
$topic=$_POST['topic'];
$question->question($topic);
$_SESSION['topic']=$topic;
?>

<html>
	<head>
		<title>Webtech 2018</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/question.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../index.html">Webtech <span>2018</span></a></div>
			</header>
		
		<!--Body -->
			<form action="answer.php" method="post">
			<div class ="ques-table">
			<?php 
			$i=1;
			foreach($question->question as $qust) {
			?>
			<table class="question-table">
				<thead>
					<tr class="warning">
						<th><?php echo $i; ?>)  <?php echo $qust['question']; ?></th>
					</tr>
				</thead>
				<tbody>
				<?php if(isset($qust['ans1'])){ ?>
					<tr>
						<td><input type="radio" value="0" name="<?php echo $qust['question_id']; ?>" /> &nbsp;<?php echo $qust['ans1']; ?></td>
					</tr>
				<?php } ?>
				<?php if(isset($qust['ans2'])){ ?>
					<tr>
						<td><input type="radio" value="1" name="<?php echo $qust['question_id']; ?>" />&nbsp; <?php echo $qust['ans2']; ?></td>
					</tr>
				<?php } ?>
				<?php if(isset($qust['ans3'])){ ?>
					<tr>
						<td><input type="radio" value="2" name="<?php echo $qust['question_id']; ?>" /> &nbsp;<?php echo $qust['ans3']; ?></td>
					</tr>
				<?php } ?>
				<?php if(isset($qust['ans4'])){ ?>
					<tr>
						<td><input type="radio" value="3" name="<?php echo $qust['question_id']; ?>" /> &nbsp;<?php echo $qust['ans4']; ?></td>
					</tr>
				<?php } ?>
					<tr>
						<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['question_id']; ?>" /></td>
					</tr>
				</tbody>
			</table>
			<?php $i++;} ?>
			<center><input type="submit" value="Submit Quiz" class="submit"/></center>		
			</div>
		</form>
</html>