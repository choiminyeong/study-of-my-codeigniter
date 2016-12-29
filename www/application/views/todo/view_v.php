<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="apple-mobile-wweb-app-capable" content="yes">
	<meta name="viewport" content="width=devie-width, initiak-scale=1, user-scalable=no" />
	<!-- [if It Ie 9]>
	<script tyep="text/javascript" scr="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<! [endif] -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<title>CodeIgniter</title>
</head>
<body>
	<div id="main">
		<header id="header" data-role="header" data-position="fixed">
			<!-- Header Start -->
			<blockquote>
				<p>만들면서 배우는 CodeIgniter</p>
				<small>실행예제</small>
			</blockquote>
		</header>
		<!-- Header End -->
		<nav id="gnb">
			<!-- gnb Start -->
			<ul>
				<li><a href="/todo/index.php/main/list/" rel="external">todo애플리케이션 프로그램</a></li>
			</ul>
		</nav>
		<!-- gnb End -->
		<article id="board_area">
			<header>
				<h1>Todo 조회</h1>
			</header>
			<table cellspacing="0" cellpadding="0" class="table" table-striped="">
				<thead>
					<tr>
						<th scope="col"><?php echo $views->id; ?> 번 할일</th>
						<th scope="col">시작일 : <?php echo $views->created_on; ?></th>
						<th scope="col">종료일 : <?php echo $views->due_date; ?></th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<th colspan="3">
						<?php echo $views->content; ?>
					</th>
				</tr>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="4">
							<a href="/todo/index.php/main/lists/" class="btn btn-primary">목록</a>
							<a href="/todo/index.php/main/delete/<?php echo $this->uri->segment(3); ?>" class="btn btn-danger">삭제</a>
							<a href="/todo/index.php/main/write" class="btn btn-success">쓰기</a>						
						</th>
					</tr>
				</tfoot>				
			</table>
		</article>

		<footer id="footer">
			<blockquote>
				<p><a href="http://www.cikorea.net" class="azubu" target="blank">CodeIgniter 한국 사용자 포럼</a></p>
				<small>Copyright by<em class="black"></em><a href="mailto:advisor@cikorea.net">웅파</a></small>
			</blockquote>
		</footer>
	</div>
</body>
</html>