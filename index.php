<!DOCTYPE html>
<html>
	<head>
		<title>Space Craft</title>
		<link rel=stylesheet type="text/css" href="style.css"></link>
		<link rel="SHORTCUT ICON" href="img/favicon.png" type="image/png">
		<link rel="apple-touch-icon" href="img/ifavicon.png">
		<meta name='keywords' content=''>
		<meta name='description' content=' '>
		<!--Monitorig-->
		<link rel="stylesheet" href="serverbar.css" type="text/css"/>
		<script type='text/javascript' src='serverbar.js'></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			$(".next").on("click","a", function (event) {
				event.preventDefault();
					var id  = $(this).attr('href'),
						top = $(id).offset().top;
					$('body,html').animate({scrollTop: top}, 1500);
				});
			});
		</script>
		<script type='text/javascript' src='/js/scrollup.js'></script>
	</head>
	<body>
		<div id="container">
			<div id="headContainer">
				<div id="headcont">
					<div id="headImg">
					<a name="top"></a>
						<img src="img/logo.png"></img>
					</div>	
					<div id="headMenu">
						<script src="menu.js"></script> 
					</div>
				</div>
			</div>
			<div id="main">
				<div id="infocont">
					<div id="info">
						<br /><br /><br /><h2><span>Информация</span></h3><p><a name="info"></a></p><br /><br />
						<br /><center><h3 color="red">ЗАКРЫТЫЙ БЕТА ТЕСТ СЕРВЕРА</h3></center>
						<br />
					<div id="table">
						<div id="one">
							<center><h3>О нас</h3></center>
							<br /><br />
							Уникальный проект серверов Space Craft!
							<br />Адекватная администрация, самодельные спавны, оптимизированные сервера, выживание и мини игры! Все это ждет тебя на нашем проекте!
							<br />Приходи! Зови друзей! Играйте вместе!
						</div>
						<div id="two">
							<center><h3>Как купить?</h3></center>
							<br /><br />
							<table width="100%" cellspacing="0" cellpadding="0">							   
							   <tr> 
								<td class="two" width="30"><img src="img/1.png" width="25" height="25"></img></td>
								<td valign="middle">
									Указать понравившуюся привилегию и свой ник-нейм в разделе "Купить".<br />
								</td>
							   </tr>
							   <tr> 
								<td class="two" width="30" ><img src="img/2.png" width="25" height="25"></img></td>
								<td valign="middle">
									Проверить правильность введенных данных и нажать на кнопку "Продолжить".<br />
								</td>
							   </tr>
							   <tr> 
								<td class="two" width="30"><img src="img/3.png" width="25" height="25"></img></td>
								<td valign="middle">
									Оплатить наиболее удобным способом.<br />
								</td>
							   </tr>
							   <tr> 
								<td class="two" width="30"><img src="img/4.png" width="25" height="25"></img></td>
								<td valign="middle">
									Наслаждаться купленным товаром!<br />
								</td>
							   </tr>
							  </table>
							<br /><br />Приятной игры!
						</div>
						<div id="three">
							<center><h3>Сервер</h3></center>
							<br /><br />
							IP - mc.sharkyt.ru
							<br />Version: 1.9.4
							<br /><br />
							Режимы:
							<br />&nbsp;Выживание
							<br />&nbsp;Sky Block(в разработке)
							<br /><br />
							<script type="text/javascript">
								/* Запускаем анимацию изображения */
								window.onload = function () { ProgressBarManager('progressbar_meter',true).Live() }
							</script>
							<?php include_once('info.php'); ?>
							<?php echo ShowServer("play.mothquiet.ru",25565,300); ?>
						</div>
					</div>
					</div>
					<div class="next"><center><a href="#rules"><img src="img/next.png"></img></a></center></div>
				</div>	
				<div id="rulescont">
					<div id="rules">
						<br /><br /><br /><h2><span>Правила сервера</span></h3><p><a name="rules"></a></p><br /><br />
						<span style="font-size:23px;"><b>Запомни! Незнание правил не освобождает от ответственности!</b></span><br />
						<br /><br /><center><span  class="head"><img src="img/pred.png" height="35px" width="35px"><b>&nbsp;1. Общие правила:&nbsp;</b><img src="img/pred.png" height="35px" width="35px"></span></center>
						<br /><p>1.1. Игрок обязан соблюдать данные правила! </p>
						<br /><p>1.2. Администрация не обязана предупреждать игроков об изменении правил.</p>
						<br /><p>1.3. Взлом аккаунта не является оправданием. </p>
						<br /><p>1.4. Администраторы вправе наказать нарушителя по своему усмотрению, не указав причину. </p>
						<br /><p>1.5 Администратор может отказать в помощи игроку, если второй некорректно объяснил причину. </p>
						<br /><br /><center><span  class="head"><img src="img/no.png" height="35px" width="35px"><b>&nbsp;2. Запрещено:&nbsp;</b><img src="img/no.png" height="35px" width="35px"></span></center>
						<br /><h3><b>Имущество:<b></h3>
						<br /><p>2.1 Игроку запрещено портить чужое имущество, изменять его без согласия владельца. Если постройка не запривачена, то данное правило не действует.<span class="red"> Наказание: бан 20 дн </span></p>
						<br /><p>2.2 Игроку запрещено создавать регион, содержащий в названии нецензурную лексику. <span class="red"> Наказание: удаление привата и бан 3 дн </span></p>
						<br /><p>2.3 Игроку запрещено разливать жидкости без надобности, беспорядочно ставить блоки и выкапывать ямы. <span class="red"> Наказание: бан 1 дн </span></p>
						<br /><h3><b>Чит-программы:<b></h3>
						<br /><p>2.4 Игроку запрещено использовать различные модификации(читы и т.д.), дающие приемущество над другими игроками.<span class="red"> Наказание: бан 30 дн </span></p>
						<br /><p>2.5 Запрещено использовать баги игры или сервера.<span class="red"> Наказание: бан 10 дн </span></p>
						<br /><p>2.6 Игроку запрещено обсуждать и распространять баги и чит-программы в чате игры. Если вам известно о них, то вы можете написать о них на нам почту.<span class="red"> Наказание: бан 30 дн </span></p>
						<br /><h3><b>Чат:<b></h3>
						<br /><p>2.7 Игроку запрещено общаться в чате на другом языке или транслите.<span class="red"> Наказание: мут 30 мин </span></p>
						<br /><p>2.8 Игроку запрещено флудить, спамить.<span class="red"> Наказание: мут 1 час </span></p>
						<br /><p>2.9 Игроку запрещено оскорблять игроков / администрацию / проект <span class="red"> Наказание: бан 3 дн или более </span></p>
						<br /><p>2.10 Игроку запрещено нецензурно выражаться в чате.<span class="red"> Наказание: мут 3 часа</span></p>
						<br /><p>2.11 Игроку запрещено отвлекать администрацию.<span class="red"> Наказание: мут 3 часа </span></p>
						<br /><p>2.12 Игроку запрещено обсуждать администрацию и их решения.<span class="red"> Наказание: мут 2 часа </span></p>
						<br /><p>2.13 Игроку запрещено разжигание межрасовой, межнациональной, межрелигиозной розни, запрещена дискриминация по половым, религиозным, сексуальным, физиологическим и другим признакам.<span class="red"> Наказание: бан 1 дн или более </span></p>
						<br /><p>2.14 Игроку запрещено рекламировать сторонние ресурсы без согласия администрации. <span class="red"> Наказание: бан 4 дн или более </span></p>
						<br />
						<br />
						<br />
						
						
						<!--<div id="donatetable">
							<div class="donateblock">
							3
							</div>
							<div class="donateblock">
							3
							</div>
							<div class="donateblock">
							3
							</div>
							<div class="donateblock">
							3
							</div>
							
							<div class="donateblock">
							3
							</div>
							<div class="donateblock">
							3
							</div>
							<div class="donateblock">
							3
							</div>
							<div class="donateblock">
							3
							</div>
						</div> -->
					</div> 
					<div class="next"><center><a href="#buy"><img src="img/next.png"></img></a></center></div>
				</div>	
				<div id="buycont">
					<div id="buy">
						<br /><br /><br /><h2><span>Купить</span></h2><p><a name="buy"></a></p><br /><br />
						Если у вас возникли вопросы, то в разделе "Информация" все подробно расписано.
						<br /><!--Подробное описание привилегий вы можете найти на сервере (/menu -> Донат)-->
						<br />
						<div id="mcdApiContainer"></div><script type="text/javascript" src="http://mcdonate.ru/api/mcd_script.js?server_id=85751&container_id=mcdApiContainer&beauty"></script>
						
					</div>
					<div class="next"><center><a href="#service"><img src="img/next.png"></img></a></center></div>
				</div>	
				<div id="servicecont">
					<div id="service">
						<br /><br /><br /><h2><span>Связь</span></h2><p><a name="service"></a></p><br /><br />
						Связаться с разработчиком вы можете здесь, пожалуйста, укажите точно вашу проблему. 
						<br />Если по каким-то причинам вам не удалось отправить сообщение в форме, то вы можете сделать это через E-mail.
						<div id="tabletwo">
							<div id="one1">
							<?php 
							function show_form() 
							{ 
							?> 
							<form  method=post id="frm"> 
								<div id="forma"> 
									 <br /><strong>Имя</strong><br /> 
									<input type="text" name="name" size="40" class="txt"> 
									<br /><strong>Контактный email</strong><br /> 
									 <input type="text" name="email" size="40" class="txt">
											 
									 <br /><strong>Сообщение</strong><br /> 
									<textarea rows="5" name="mess" cols="5" class="txt2" height="40px" width="400px"></textarea> 
									<br /><input type="submit" value="Отправить" name="submit" class="button"> 
								</div> 
							</form> 
							<? 
							} 
							 
							if (!empty($_POST['submit'])) complete_mail(); 
							else show_form(); 
							 
							function complete_mail() { 
									$_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30); 
									$_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50);	
									$_POST['var2'] =  substr(htmlspecialchars(trim($_POST['var2'])), 0, 10000); 
									 $_POST['mess'] =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 10000); 
									// если не заполнено поле "Имя" - показываем ошибку 0 
									if (empty($_POST['name'])) 
										 output_err(0); 
									// если неправильно заполнено поле email - показываем ошибку 1 
									if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['email'])) 
										 output_err(1); 
									// если не заполнено поле "Сообщение" - показываем ошибку 2 
									if(empty($_POST['mess'])) 
										 output_err(2); 
									// создаем наше сообщение 
									$mess = ' 
									Имя отправителя:'.$_POST['name'].' 
									Контактный email:'.$_POST['email'].' 
									Услуга:'.$_POST['var2'].'
									'.$_POST['mess']; 
									// $to - кому отправляем 
									$to = 'info@sharkyt.ru '; 
									// $from - от кого 
									$from=$_POST['name'].'SpaceCraft[Заявка]'; 
									mail($to, $_POST['title'], $mess, "From:".$from); 
									echo '<br /><br /><strong>Заказ отправлен! Ожидайте ответа на e-mail</strong> ';
							} 
							 
							function output_err($num) 
							{ 
								$err[0] = 'ОШИБКА! Введите ваше имя.'; 
								$err[1] = 'ОШИБКА! Неверно введен e-mail.';  
								$err[2] = 'ОШИБКА! Введите сообщение.'; 
								echo '<script type="text/javascript"> window.alert("'.$err[$num].'");</script>'; 
								show_form(); 
								exit(); 
							} 
							 

							?>
							</div>
							<div id="two2">
								<br /><center><img src="icn/mail.png" height="96" width="96" ></img></center>
								<br /><center><a href="mailto:info@sharkyt.ru"><p>info@sharkyt.ru</p></a></center>
							</div>
						</div>
					</div>
				</div>	
				<div id="footercont">
					<div id="footer">
						<br /><br /><br /><a href="http://space.sharkyt.ru"> SPACE.shakyt.ru </a>  | © 2016 | Developed by <a href="https://vk.com/shark_man_channel">  _SharkMan_ </a>
						<br /><center> © Все права защищены. </center>
						<a href='https://vk.com/spaceproj'><img src="icn/vk.png" class='icn' id="vkgroup"></a>
						<a href='https://vk.com/shark_man_channel'><img src="icn/vk.png" class='icn' id="vkman"></a>
						<a href='https://twitter.com/muhtar671'><img src="icn/twitter.png" class='icn' id="twitter"></a>
						<a href='https://www.youtube.com/user/MuhtarArt'><img src="icn/youtube.png" class='icn' id="yt"></a>
						<div id="scrollup"><img alt="Прокрутить вверх" title="Прокрутить вверх" src="/img/up.png" height="35px" width="35px"></div>
					</div>
				</div>	
			</div>
		</div>
	</body>
</html>