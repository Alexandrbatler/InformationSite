<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="style/bootstrap.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="style/bootstrap-theme.min.css" >
	<link rel="stylesheet" href="style/style.css" >
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<header> 
	<div class="container">
  	 <div class="row">
	    <div class="col-sm-6 col-sm-push-2 Head"><h3> 
	    	Готовые работы для студентов АСУ за 2 курс 
	    </h3>
	    </div>
	    <div class="col-sm-3 col-sm-push-3 Lgin">
	  			<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#autorization">Войти</button>
	  			<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#registration">Зарегистрироваться</button>
			
		</div>
  	 </div>
  </div>
  <div id="autorization" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Вход</h4>
      </div>
      <div class="modal-body">
        <form>
  			<div class="form-group">
   			 	<label for="email">Email адресс:</label>
   			 	<input type="email" class="form-control" id="email">
  			</div>
 			<div class="form-group">
   				 <label for="pwd">Пароль:</label>
   				 <input type="password" class="form-control" id="pwd">
  			</div>
  			<div class="checkbox">
   				  <label><input type="checkbox"> Запомнить</label>
  			</div>
 			 <button type="submit" class="btn btn-default">Ввод</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>

  </div>
  </div>
  	
  <div id="registration" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Регистрация</h4>
      </div>
      <div class="modal-body">
        <form>
  			<div class="form-group">
   			 	<label for="email">Email Адресс:</label>
   			 	<input type="email" class="form-control" id="email">
  			</div>
 			<div class="form-group">
   				 <label for="pwd">Пароль:</label>
   				 <input type="password" class="form-control" id="pwd">
  			</div>
  			<div class="form-group">
   			 	<label for="Name">Имя</label>
   			 	<input type="email" class="form-control" id="email">
  			</div>
  			<div class="form-group">
   			 	<label for="email">Имя на сайте:</label>
   			 	<input type="email" class="form-control" id="email">
  			</div>
 			 <button type="submit" class="btn btn-default">Ввести</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>

  </div>
</div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content--> 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form>
  			<div class="form-group">
   			 	<label for="email">Email address:</label>
   			 	<input type="email" class="form-control" id="email">
  			</div>
 			<div class="form-group">
   				 <label for="pwd">Password:</label>
   				 <input type="password" class="form-control" id="pwd">
  			</div>
  			<div class="checkbox">
   				  <label><input type="checkbox"> Remember me</label>
  			</div>
 			 <button type="submit" class="btn btn-default">Submit</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	<container>
	 <div class="row">
		<div class="col-sm-10 description2">
			

		</div>
	 </div>
	</container>
</header>
	<div class="section"> \* Дмитрий П. *\
		<div class="container work">
		<br>
		<h3><p class="text-center work">Выберите предмет<br> и получите список<br> готовых работ</p></h3>
		<br>
		 <div class="row ">
			<div class="col-sm-10 col-sm-offset-1">
		 		<ul class="nav nav-pills nav-justified">
	   				 <li class="active line"><a data-toggle="pill" href="#inf2">Информатика 2</a></li>
	   		 		<li class= "line"><a data-toggle="pill" href="#programm">Программирование</a></li>
	  	 			 <li class= "line"><a data-toggle="pill" href="#evm">ЭВМ и ПУ</a></li>
	  	 			 <li class= "line"><a data-toggle="pill" href="#physicalCulture">Физкультура</a></li> 
	  	 			 	<div style="line-height:0%;">
	    							<br>
						</div>
	    			<li class= "line"><a data-toggle="pill" href="#Eng">Деловой иностранный язык</a></li>
	    			<li class= "line"><a data-toggle="pill" href="#Soc">Социология</a></li>
	    			<li class= "line"><a data-toggle="pill" href="#ML">МЛ и ТА</a></li>
	    			<li class= "line"><a data-toggle="pill" href="#elect">Электротехника</a></li>
	    				<div style="line-height:0%;">
	  					  <br>
						</div>
	    			<li class= "line"><a data-toggle="pill" href="#econom">Экономика</a></li>
	    			<li class= "line"><a data-toggle="pill" href="#schem">Элект. и схем.</a></li>
	    			<li class= "line"><a data-toggle="pill" href="#OS">ОС</a></li>
	    			<li class= "line"><a data-toggle="pill" href="#TV">ТВ, МС, СП</a></li>
	    				<div style="line-height:0%;">
	    					<br>
						</div>
	    			<li><a data-toggle="pill" href="#Timetable">Расписание занятий</a></li>
	 			 </ul>
	  
	 		 <div class="tab-content">
	   			 <div id="inf2" class="tab-pane in active">
	      			<h3>Информатика 2</h3>
	      			<p><a href="">Курсовая работа(пример)</a><br>
	      			<a href="">Лаб.Работа №1</a><br>
	      			<a href="">Лаб.Работа №2</a><br>
	      			<a href="">Лаб.Работа №3</a><br>
	      			</p>
	   			 </div>
	   			 <div id="programm" class="tab-pane">
	     			<h3>Программирование</h3>
	     			<a href="">Лаб.Работа №1</a><br>
	      			<a href="">Лаб.Работа №2</a><br>
	      			<a href="">Лаб.Работа №3</a><br>
	      			<a href="">Лаб.Работа №4</a><br>
	      			<a href="">Лаб.Работа №5</a><br>
	      			</p></p>
	   			 </div>
	   			 <div id="evm" class="tab-pane">
	     			<h3>ЭВМ и ПУ</h3>
	     			 <p><a href="">Лаб.Работа №1</a><br>
	      			<a href="">Лаб.Работа №2</a><br>
	      			<a href="">Лаб.Работа №3</a><br>
	      			<a href="">Лаб.Работа №4</a><br>
	      			<a href="">Лаб.Работа №5</a><br></p>
	    		 </div>
	   			 <div id="physicalCulture" class="tab-pane">
	     			 <h3>Физкультура</h3>
	      			<p><a href="">Реферат</a><br>
	      			</p>
	   			 </div>
	   			  <div id="Eng" class="tab-pane">
	     			 <h3>Иностранный язык</h3>
	      			<p><a href="">Учебник 1</a><br>
	      			<a href="">Учебник 2</a><br>
	      			</p>
	   			 </div>
	   			  <div id="Soc" class="tab-pane">
	     			 <h3>Menu 3</h3>
	      			<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   			 </div>
	   			  <div id="ML" class="tab-pane">
	     			 <h3>Menu 3</h3>
	      			<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   			 </div>
	   			  <div id="elect" class="tab-pane">
	     			 <h3>Menu 3</h3>
	      			<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   			 </div>
	   			 <div id="econom" class="tab-pane">
	     			 <h3>Menu 3</h3>
	      			<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   			 </div>
	   			 <div id="schem" class="tab-pane">
	     			 <h3>Menu 3</h3>
	      			<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   			 </div>
	   			 <div id="OS" class="tab-pane">
	     			 <h3>Menu 3</h3>
	      			<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   			 </div>
	   			 <div id="TV" class="tab-pane">
	     			 <h3>Menu 3</h3>
	      			<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	   			 </div>
	   			 <div id="Timetable" class="tab-pane">
				<p>
					<?php
						include_once('simplehtmldom_1_5/simple_html_dom.php');
						$html = file_get_html('http://pstu.ru/student/new_timetable/');
						$news = $html->find('div.content');
						echo $news[0];
						$html->clear();
						unset($html);
					?>
				</p>
	   			 </div>
	  		 </div>
			</div>
		 </div>
		</div>
	</div>
	<div class="section"> \* Александр Я. *\ Сдал 1 лабу 29.05.2017
		<div class="container">
			<div class="row">
				<div class="col-sm-6-center">
					<h3>Поддержать проект:</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<p>
						
						Яндекс.Кошелек: 41001858185519<br>
						MasterCard: 5999999999999999<br>
						Qiwi: +79999999999</p>
				</div>
			</div>
		</div>
	</div>
	<footer id="foot">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-sm-push-1 logo">
							
						</div>
						<div class="col-sm-4 col-sm-push-1 Ahref">
						<a href="">Реклама на сайте</a><br>
						<a href="">сообщить о неисправности</a>
						</div>
						<div class="col-sm-4 col-sm-push-1">
						<p><img src="images/Vk.png" width="30" height="30"><a href="https://vk.com/id30583143"> Вконтакте </a></p>
						<p><img src="images/instagram_button.png" width="30" height="30"><a href="https://www.instagram.com/alexandrbatler/">Инстаграм</a></p>
							
						</div>
					</div>
				</div>
	</footer>	

</body>
</html>
