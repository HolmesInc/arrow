<nav role="navigation" class="navbar navbar-default">	
	<div class="navbar-header">
		<div class="navbar-brand"><a href="../../index.php"> < ARROW</a></div>
	</div>
	
	<div class="navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="../../index.php">Хочу в</a></li>
			<li><a href="#" onclick="Link()">Голосую</a></li>
			<li><a href="../../functionality/propose/propose.php">Предлагаю</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="../../php_scripts/unlogining_user.php">Выйти</a></li>
		</ul>
	</div>
</nav>
&#65279;
<script type="text/javascript">
	var Link = function() {
		window.location.replace("http://arrow.ru/functionality/votes/rating.php");
	}
</script>