<!doctype html>
<html>
  	<head>
  		<meta charset="utf-8">
  		<title>Резюме Манжос Антон</title>
  		<script src="js/jquery-2.1.4.min.js"></script> 
  		<link rel="stylesheet" href="css/bootstrap.css" />
  		<script src="js/bootstrap.min.js"></script>
  		<style>
  			body {
  				padding: 15px;
  			}
  		</style>
  	</head>
  	<body>
  		<?php include_once('config.php'); ?>
  		<h1 align="center"> <?php echo $information['lastName'] . ' ' . $information['firstName'] . ' ' . $information['fatherName']?> </h1>
  		
		    <h2> Цель: </h2> 
		    	<p>Получение работы в должности 
		    		<?php
		    		require_once('dolzhnost.php');
		    		$name = 'Anton';
		    		$DateBirth = '26';
		    		$MonthBirth = '8';
		    		
		    		echo getDolzhnost($name, $DateBirth, $MonthBirth);
		    		?>
		    	</p>
		    	
		    <h2> Профессиональные навыки:</h2> 
		    	<p>Проведение маркетинговых исследований, анализ статистических данных, исследование и анализ рынка, составление SWOT – анализа предприятия, проведение анкетирования, мониторинг цен, знание основ и принципов мерчендайзинга, навык активных продаж, проведение переговоров и презентаций.</p>
		    	
		    <h2 align="center"> Персональная информация </h2>
		    		
		    	<h3> Дата и место рождения: </h3>
		    		<p> <?php echo $information['dateOfBirth']; ?>, г. Харьков </p>
		    		
		    	<h3> Образование: </h3>
		    		<p> НТУ «ХПИ»  Факультет «Информатики и Управления». Получен диплом о высшем образовании. Специальность - «Маркетинг и управление предприятием». Присвоена квалификация – экономист. </p>
		    	
		        <h2 align="center"> Опыт работы: </h2>
		        <div role="tabpanel">
			    	<ul class="nav nav-tabs" role="tablist"  id="myTab">
						<li role="presentation" class="active"><a href="#sandora" aria-controls="home" role="tab" data-toggle="tab">«САНДОРА»</a></li>
						<li role="presentation"><a href="#topaz" aria-controls="profile" role="tab" data-toggle="tab">НПВФ «Топаз ЛТД»</a></li>
						<li role="presentation"><a href="#service" aria-controls="messages" role="tab" data-toggle="tab">ООО «Схид – Сервис»</a></li>

					</ul>
			  		<div class="tab-content">
			    		<div role="tabpanel" class="tab-pane active" id="sandora">	
					  		<h3 align="left"> Март 2009 – Март 2015 <br> ООО «САНДОРА»</h3>
					  		<h4> Должность: торговый представитель </h4>
					  		<h5> <strong>Должностные обязанности:</strong></h5>
					  		<ul>
					  			<li>обслуживание существующей базы клиентов;</li>
								<li>поиск новых торговых точек;</li>
								<li>увеличение и расширение ассортимента в торговых точках;</li>
								<li>подготовка и проведение презентации;</li>
								<li>выполнение плана продаж;</li>
								<li>анализ продаж и заказов;</li>
								<li>ведение переговоров;</li>
								<li>выполнение обязанностей по мерчендайзингу (ротация продукции, а также выкладка по стандартам компании);</li>
								<li>заключение и перезаключение договоров с клиентами;</li>
								<li>контроль дебиторской задолженности;</li>
								<li>ведение отчетности.</li>
							</ul>
							<p> За время работы мною был приобретены ключевые навыки продаж, изучены основные «шаги» торгового представителя, а также методы удачного проведения презентаций в торговых точках. Научился четко и правильно планировать свое время, а также изучил всю специфику проведения переговоров с клиентами (общение, борьба с возражениями и убеждение клиента). </p>  
						</div>
						
						<div role="tabpanel" class="tab-pane" id="topaz">
							<h3 align="left"> Апрель 2008 – Март 2009 <br>НПВФ «Топаз ЛТД»</h3>
							<h4> Должность: экономист</h4>
							<h5> <strong>Должностные обязанности:</strong> </h5>
							<ul>		
								<li>исследование  и анализ рынка металлургии;</li>
								<li>подготовка, изучение и анализ полученной информации;</li>
								<li>формирование аналитических отчетов;</li>
								<li>работа с экономической частью для рабочих проектов;</li>
								<li>настройка и наблюдение за компьютерной техникой предприятия, а также локальной сетью. </li>
							</ul>
							<p> За время работы разработал и внедрил принципиально новую модель учета и контроля финансовых потоков предприятия. </p>
						</div>
						<div role="tabpanel" class="tab-pane" id="service">
							<h3 align="left"> Июнь 2005 – Май 2007 <br> ООО «Схид – Сервис». </h3>
							<h4> Должность: менеджер-инженер </h4>
							<h5> <strong>Должностные обязанности:</strong> </h5>
							<ul>		
								<li>сборка и ремонт компьютеров;</li>
								<li>консультирование клиентов;</li>
								<li>настройка программного обеспечения;</li>
								<li>работа с поставщиками компьютерных комплектующих;</li>
								<li>изучение рынка компьютерной техники г. Харькова.</li>
							</ul>
						</div>
					</div>
				</div>
		  	<h2 align="center"> Дополнительная  информация: </h2>
		  		<p> Принимал участие в тренингах: «Пути повышения эффективности торговой деятельности», «Психологические основы работы с клиентами»,                «8 шагов торгового визита», «Эффективная презентация».<br>Являюсь опытным пользователем ПК: офисные приложения, интернет. <br>Имею опыт сборки, настройки и мелкого ремонта ПК, а также тестирования программных продуктов.<br>Иностранный язык – английский (базовый). </p>

    	</body>
    	<script type="text/javascript">
    		$('#myTab a').click(function (e) {
			    e.preventDefault();
  				$(this).tab('show');
			});
    	</script>
</html>