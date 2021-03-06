﻿<div class="col-md-9 col-sm-6 col-xs-12" ng-show="showInfoPressed == 'true'">
	<div class="col-md-7 table-responsive" style=" padding-right: 0; padding-left: 0;">	
		<table class="table table-condensed table-striped"><!-- -->
			<tr> <td><b>Название</b></td> <td>{{placeData[1].name}}</td> </tr>
			<tr> <td><b>Категория</b></td> <td>{{placeData[1].category}}</td> </tr>
			<tr> <td><b>Ценовой индекс</b></td> <td>{{placeData[1].pryce_index}}</td> </tr>
			<tr> <td><b>Время открытия</b></td> <td>{{placeData[1].open_time}}</td> </tr>
			<tr> <td><b>Время закрытия</b></td> <td>{{placeData[1].close_time}}</td> </tr>
			<tr> <td><b>Адрес</b></td> <td>{{placeData[1].adress}}</td> </tr>
			<tr> <td><b>Ближайшее метро</b></td> <td>{{placeData[1].metro}}</td> </tr>
			<tr> <td><b>Номер телефона</b></td> <td>{{placeData[1].phone}}</td> </tr>
			<tr> <td><b>Веб-сайт</b></td> <td>{{placeData[1].site}}</td> </tr>
		</table>
	</div>
	<div class="col-md-5" ng-style="{display: confirmCSSPlace}">
		<div class="row col-md-12">
			<center>
				<h4>
					<?php 
						try{
							include('../../../php_scripts/db_connect.php');
							// делаем запрос на получение данных
							$sql = ' SELECT text FROM posts WHERE page = "../functionality/votes/rating.php" AND id_post = "4"';
							$stmt = $dbh->prepare( $sql );
							// запускаем запрос
							$stmt->execute();
							$compare = $stmt->fetch(PDO::FETCH_LAZY);
							print_r($compare[0]);
						}
						catch(PDOException $e) {  
							echo $e->getMessage();
						}
					?>
				</h4>
			</center>
		</div>
		<div class="row col-md-12">
			<button type="submit" class="btn btn-success col-md-5" style="float: left;" ng-click="ConfirmPlace(placeData[1].name, placeData[1].id, true)">Все верно</button>
			<button type="submit" class="btn btn-danger col-md-5" style="float: right;" ng-click="ConfirmPlace(placeData[1].name, placeData[1].id, false)">Не верно</button>
		</div>
	</div>
	<div class="col-md-5" ng-show="confirmCSSPlace == 'none' " ng-hide="confirmCSSPlace == 'inline'">
		<center><h2>Спасибо за Ваш голос!</h2></center>
	</div>
</div>