<?

$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4)));

if( !$mobile ){
	header("Location: /");
}

?>

<!DOCTYPE html>
<html>  
<head>
	<title>Продажа свежевыжатого 100% сока алоэ в Москве</title>
	<meta name="keywords" content=''>
	<meta name="description" content='Производим 100-ный, чистый сок алоэ, не имеющий аналогов на рынке'>

	<!-- <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1"> -->
	<meta name="viewport" content="width=375">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="Aloe"/>
	<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="favicon/mstile-70x70.png" />

	<meta property="og:url" content="">
    <meta property="og:title" content="Продажа свежевыжатого 100 сока алоэ в Москве">
    <meta property="og:description" content="Производим 100-ный, чистый сок алоэ, не имеющий аналогов на рынке">
    <meta property="og:image" content="http://lp.sok-aloe.ru/i/logo-vk.jpg">
    <meta property="twitter:image" content="http://lp.sok-aloe.ru/i/logo-vk.jpg">
    <link rel="image_src" href="http://lp.sok-aloe.ru/i/logo-vk.jpg">
    
</head>
<body>
	
	<div class="b b-1">
		<div class="b-block">
			<div class="b-header clearfix">
				<div class="b-header-left">
					<ul class="b-header-social">
						<li class="b-soc-call">
							<span class="icon-call"></span>
						</li>
						<li class="b-soc-whatsapp">
							<span class="icon-whatsapp"></span>
						</li>
						<li class="b-soc-telegram">
							<span class="icon-telegram"></span>
						</li>
					</ul>
					<p>Звоните:</p>
				</div>
				<div class="b-header-center">
					<a href="/m/" class="b-header-logo"></a>
				</div>
				<div class="b-header-right">
					<div class="b-header-phone-cont">
						<a href="tel:+74959204120" class="b-header-phone">+ 7 495 920 41 20</a>
					</div>
				</div>
			</div>
			<div class="b-1-content">
				<div class="b-1-front">
					<h1>Продажа свежевыжатого <br><b><span class="percent">100</span> сока алоэ</b> <br>в Москве</h1>
					<div class="b-1-back"></div>
					<div class="b-advantages">
						<div class="b-advantage-item b-1-advantages-1 anim fadeLeft" data-cont=".b-advantages">
							<img src="i/icons/icon-plant-green.svg">
							<p>Наш сок выжат из<br><b>экологически чистых листьев</b><br>(их возраст более 3-х лет)</p>
						</div>
						<div class="b-advantage-item b-1-advantages-2 anim fadeLeft delay200" data-cont=".b-advantages">
							<img src="i/icons/icon-vial-green.svg">
							<p><b>Без консервантов, химии</b><br>и любых иных добавок</p>
						</div>
						<div class="b-advantage-item b-1-advantages-3 anim fadeLeft delay400" data-cont=".b-advantages">
							<img src="i/icons/icon-water-green.svg">
							<p><b>Отжимаем сок в день вашего<br>обращения</b> и сразу доставляем<br>его вам</p>
						</div>
					</div>
					<a href="#b-popup-preroll" class="fancy b-btn b-btn-green">Заказать свежевыжатый<br> сок алоэ</a>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-2">
		<div class="b-block-wide">
			<div class="b-block">
				<div class="b-title">
					<h2>Производим<br> <b><span class="percent">100</span> -ный, чистый сок алоэ, </b>не имеющий аналогов на рынке</h2>
					<h4>Ежедневно выжимаем свежий <br> сок алоэ из зрелых листьев </h4>
				</div>
				<div class="b-2-list">
					<div class="b-blur-init b-2-item b-2-item-1 anim fadeLeft" data-cont=".b-2-list">
						<div class="b-2-item-blur"></div>
						<div class="b-2-item-content">
							<p class="b-2-item-right">Листья алоэ выращиваются возле <br>Черного моря и срезаются на пике зрелости в возрасте 3-х лет</p>
						</div>
					</div>
					<div class="b-blur-init b-2-item b-2-item-2 anim fadeLeft delay200" data-cont=".b-2-list">
						<div class="b-2-item-blur"></div>
						<div class="b-2-item-content">
							<p class="b-2-item-right">Великолепный климат и уход позволяет листьям выработать в себе максимум полезных витаминов</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-3">
		<div class="b-block">
			<div class="b-title">
				<h2>Усиливаем до 3-х раз <b>эффективность<br>сока алоэ</b> <br><h2 class="b-subtitle">благодаря 2-недельному хранению листьев при низких температурах</h2></h2>
			</div>
			<div class="b-3-content  clearfix">
				<div class="b-3-list clearfix">
					<div class="b-3-item b-3-item-1 left">
						<div class="anim fadeLeft" data-cont=".b-3-content">
							<img src="i/3/aloe.jpg" class="b-3-img">
							<div class="b-3-item-content">
								<h2><b>Перед отжимом</b></h2>
								<p>листья помещаются в неблагоприятную<br>для них среду: в тёмное и прохладное<br>место</p>
							</div>
						</div>
					</div>
					<div class="b-3-item b-3-item-2 right">
						<div class="b-3-line line-height">
						</div>
						<div class="anim fadeLeft delay300" data-cont=".b-3-content">
							<img src="i/3/cell.jpg" class="b-3-img">
							<div class="b-3-item-content">
								<h2><b>В такой стрес-<br>совой обстановке</b></h2>
								<p>алоэ начинает вырабатывать вещества,<br>которые поддерживают угасающую<br>жизнедеятельность клеток растения</p>
							</div>
						</div>
					</div>
					<div class="b-3-item b-3-item-3 left">
						<div class="anim fadeLeft delay600" data-cont=".b-3-content">
							<img src="i/3/vitamins.jpg" class="b-3-img">
							<div class="b-3-item-content">
								<h2><b>За 14 дней<br>в тканях листа</b></h2>
								<p>накапливается достаточное количество<br>биогенных стимуляторов, которые:</p>
								<ul class="b-list">
									<li>оказывают мощное лечебное <br>действие на организм человека</li>
									<li>усиливают действие всех полезных<br>микроэлементов алоэ до 3-х раз</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-4">
		<div class="b-block-wide">
			<div class="b-block">
				<div class="b-title">
					<h2 class="white"><b>Бережно <br>отжимаем листья</b><br>при помощи пресса, сохраняя максимум полезных веществ</h2>
					<h4 class="white">На больших производствах <br>листья измельчаются в «труху»,<br>20% витаминов сока разрушаются при этом мгновенно</h4>
				</div>
				<div class="b-2-list">
					<div class="b-blur-init b-2-item b-2-item-1 anim fadeLeft">			
						<div class="b-square-image"></div>
						<p class="b-2-item-right white"><b>Благодаря прессу</b> наш сок<br>сохраняет максимум<br>микроэлементов и витаминов</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-5">
		<div class="b-block">
			<div class="b-title">
				<h2>Наш сок <b><br>не пастеризован</b>,<br> в нем также отсутствуют любые добавки <br>и консерванты</h2>
				<h4>Он точно такой, как если бы Вы сами выжали сок из листа алоэ</h4>
			</div>
			<div class="b-5-content">
				<img src="i/5/right.jpg" class="b-5-img-right anim fadeRight delay300" data-cont=".b-5-content">
				<img src="i/5/line.svg" class="b-5-line anim fadeLeft" data-cont=".b-5-content">
				<div class="b-5-text anim fadeLeft" data-cont=".b-5-content">
					<img class="anim fadeRight" data-cont=".b-5-content" src="i/5/co.svg">
					<p>А для длительного хранения<br>его можно заморозить.<br></p>
					<p>Упаковка специально <br>адаптирована для хранения <br>в морозильной камере</p>
				</div>
			</div>
		</div>
	</div>

	<div class="b-block-wide b-block-gray">
		<? /* ?>
		<!-- <div class="b b-6">
			<div class="b-block">
				<div class="b-title b-center">
					<h2 class="white"><b>Уделите всего 3 минуты</b> и вы убедитесь,<br>что мы — единственная в России компания,</h2>
					<h4 class="white">которая производит 100%-ный <br>сок алоэ без примесей!</h4>
				</div>
				<div class="b-6-video b-video-block" style="background-image: url('i/10/back.jpg');">
					<a href="#" class="b-btn b-btn-yellow b-btn-play">Смотреть видео</a>
					<iframe src="https://www.youtube.com/embed/GmbyKuzOnLw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div> -->
		<? */ ?>
	

		<div class="b b-7">
			<div class="b-block">
				<div class="b-title">
					<h2 class="b-center"><nobr>Закажите <b>свежевыжатый</nobr><br>сок алоэ</b> с доставкой <br>в день отжима!</h2>
				</div>
				<div class="b-7-content clearfix">
					<form class="b-form-order" method="post" action="kitsend.php">
						<div class="b-form-left b-form-left-back left">
							<h3><b>Выберите</b> количество<br>упаковок свежевыжатого<br>сока алоэ:</h3>
							<div class="b-counter">
								<a href="#" class="icon-minus b-btn-count" onclick="return false;"></a>
								<a href="#" class="icon-plus b-btn-count" onclick="return false;"></a>
								<div class="b-count">
									<input type="text" name="count" class="b-count-current" value="2" maxlength="2" oninput="this.value = this.value.replace(/\D/g, '')">
									<p>упаковки</p>
								</div>
							</div>
							<div class="b-price">
								<p>Цена за 1 упаковку:</p>
								<span class="new-price">
									<span class="price-value">
										<span class="more-1">490</span><span class="less-1 hide">600</span>
									</span><span class="price-rub">руб</span>
								</span>
								<span class="old-price">
									<span class="rice-value">600</span><span class="price-rub">руб</span>
									<img src="i/7/red-line.svg">
								</span>
							</div>
							<div class="b-bonus">
								<span>Бонусы:&nbsp;&nbsp;</span>
								<div class="b-bonus-item b-bonus-free">Бесплатная доставка</div><br>
								<div class="b-bonus-item b-bonus-gift"><span class="free-1">1</span><span class="free-2 hide">2</span><span class="free-4 hide">4</span> <span class="word-format">упаковка</span> сока в подарок</div>
							</div>
						</div>
						<div class="b-form right">
							<div class="b-center b-form-title">
								<h3><b>Заказать</b> <span class="order-count">2</span>&nbsp;<span class="word-format">упаковки</span><br><nobr>сока алоэ по спец. цене</nobr></h3>
								<p>Менеджер позвонит вам в течение<br> 15 минут для уточнения адреса<br> и времени доставки</p>
							</div>
							<input type="text" name="name" class="b-input b-name-input" placeholder="Имя" required>
							<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
							<input type="hidden" name="subject" value="Заказать свежевыжатый сок алоэ (block-7)">
							<a href="#" class="b-btn-submit b-btn b-btn-green">Заказать свежевыжатый<br> сок алоэ</a>
							<a href="thanks.html" class="b-thanks-link" style="display:none;"></a>
							<div class="b-checkbox b-center">
								<input id="b-7-accept" type="checkbox" name="accept" required checked>
								<label for="b-7-accept">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-8">
		<div class="b-block">
			<div class="b-title">
				<h2 class="b-center">100%-ную натуральность<br> сока подтверждают <br><b>3 неоспоримых факта:</b></h2>
			</div>
			<div class="b-facts">
				<div class="b-fact-item b-fact-1">
					<div class="b-fact-left">
						<h2 class="anim fadeLeft"><b>Факт 1</b></h2>
					</div>
					<div class="b-fact-right">
						<div class="b-fact-header">
							<h3>Срок годности нашего сока <em>при комнатной</em></h3>
							<h4>температуре — 36 часов</h4>
							<h4>в холодильнике — 5 суток,</h4>
							<h4><nobr>а в морозильнике — 365 дней</nobr></h4>
						</div>
						<h4><b class="orange"><nobr>Промышленный сок</b> подвергается:</nobr></h4>
						<div class="b-fact-advantages">
							<div class="b-facts-advantages-item b-facts-advantages-1">
								<img src="i/icons/icon-temperature.svg">
								<p>пастеризации, при которой<br> сок нагревается до 70 С<sup>о</sup></p>
								<small><nobr>(меняются органолептические свойства сока)</nobr></small>
							</div>
							<div class="b-facts-advantages-item b-facts-advantages-2">
								<img src="i/icons/icon-dnk.svg">
								<p><nobr>гомогенизации и нормализации</nobr></p>
							</div>
							<div class="b-facts-advantages-item b-facts-advantages-3">
								<img src="i/icons/icon-vial.svg">
								<p>добавлению консервантов, сорбатов и парабенов </p>
							</div>
						</div>
						<div class="b-tip-cont">
							<div class="b-tip">
								<a href="#" class="icon-close b-tip-close"></a>
								<h3>Эти процессы убивают в соке<br>до 80% полезных витаминов<br>и минералов</h3>
								<p>Промышленные гиганты таким образом<br>увеличивают срок годности сока алоэ<br>для обеспечения возможности продавать<br>сок по всему миру, в том числе и в России</p>
								<div class="b-thanks-juice">
									<img src="i/popup/juice.jpg">
									<small>Такой сок можно можно сравнить<br>с фруктовым соком известных марок<br>От свежевыжатого сока в них остается<br>разве что аромат и вкус, но почти ничего<br>полезного для здоровья.</small>
								</div>
							</div>
						</div>
						<div class="b-text">
							<h4><b><nobr>Мы отжимаем</b> каждую порцию</nobr> сока под заказ и доставляем покупателю в день обращения.</h4>
							<p><nobr>В результате вы в любой момент можете</nobr> заказать чистейший свежевыжатый сок, <nobr>который еще накануне был в нежной мякоти</nobr> нетронутого, спелого листа алоэ.</p>
						</div>
					</div>
				</div>
				<div class="b-fact-item b-fact-2">
					<div class="b-fact-left">
						<h2 class="anim fadeLeft"><b>Факт 2</b></h2>
					</div>
					<div class="b-fact-right">
						<div class="b-fact-header">
							<h3>Наш сок имеет <br>горький вкус</h3>
						</div>
						<div class="b-text">
							<h4><b class="orange"><nobr>На больших производствах</b></h4><p>с помощью химических процессов из сока<br></nobr> <nobr>удаляют горечь, чтобы он стал приятным</nobr> на вкус и не отпугивал потребителей.</p>
							<img src="i/icons/icon-candy.svg" class="img-flow">
							<h4><b>Мы не удаляем горечь,</b></h4> <p>а также не применяем подсластители, ароматизаторы, усилители вкуса и т. п.
							Чтобы компенсировать горький вкус, <nobr>перед приемом внутрь сок алоэ следует</nobr> смешивать со сладкой водой,<br> либо с фруктовым соком.</p>
						</div>
					</div>
				</div>
				<div class="b-fact-item b-fact-3">
					<div class="b-fact-left">
						<h2 class="anim fadeLeft"><b>Факт 3</b></h2>
					</div>
					<div class="b-fact-right">
						<div class="b-fact-header">
							<h3>Наш сок алоэ обладает<br>сильным травяным запахом</h3>
						</div>
						<div class="b-text">
							<h4><b class="orange"><nobr>Современные промышленные</nobr>  <nobr>технологии</b><em> нацелены на длительный</nobr></em></h4><p> срок хранения продукции.
							Но весь комплекс манипуляций с соком приводит к искажению или утрате естественного, свежего травяного запаха сока алоэ.</p>
							<img src="i/icons/icon-plant.svg" class="img-flow">
							<h4><nobr><b>Сильный травяной запах,</b><em> который</em></nobr></h4> <p>сохраняется у нашего продукта даже <br><nobr>в замороженном виде — доказательство</nobr> его абсолютной натуральности.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="b-block-wide b-block-gray">
		<div class="b b-9">
			<div class="b-block">
				<div class="b-title">
					<h2>Получите<br> <b><nobr>бесплатное руководство</nobr><br>по оздоровлению<br></b></h2><h4> C помощью сока алоэ<br>при различных проблемах:</h4>
					<ul class="b-list">
						<li>насморк</li>
						<li>угри и прыщи</li>
						<li><nobr>проблемы желудочно-кишечного</nobr><br> тракта</li>
						<li>проблемы с кожей и уход за лицом</li>
						<li>уход и питание волос</li>
						<li>ухудшение потенции</li>
						<li>простуда и грипп</li>
						<li>проблемы гинекологического<br>характера</li>
					</ul>
				<a href="#b-popup-recipes" class="fancy b-btn b-btn-green">Получить бесплатное<br> руководство</a>
				</div>
				<? /* ?>
				<!-- <div class="b-9-content b-forms clearfix">
					<div class="b-discover">
							<div class="b-tip-cont">
								<div class="b-tip">
									<a href="#" class="icon-close b-tip-close"></a>
									<h4>Руководство содержит:</h4>
									<p><b>Рецепты</b> для конкретной проблемы<br>или заболевания.</p><br>
									<p><b>Правила применения сока:</b><br>«Как получить максимальный эффект<br>и не навредить организму».</p><br>
									<p><b>5 простых рецептов «на каждый день»<br></b> для поддержания и укрепления здоровья:<br>ребенка, взрослого и пенсионера.</p>
								</div>
							</div>
							<div class="b-discover-text">
								<p>Руководство</p><br><p>содержит</p>
							</div>
							<svg class="discover"
							 xmlns="http://www.w3.org/2000/svg"
							 xmlns:xlink="http://www.w3.org/1999/xlink"
							 width="194.65px" height="193.65px">
							<path class="outer" fill-rule="evenodd"  fill="rgb(243, 243, 243)"
							 d="M158.682,167.674 C147.826,168.718 139.637,173.949 134.116,183.369 C128.595,192.791 120.987,194.995 111.292,189.999 C101.597,184.992 91.884,184.956 82.155,189.896 C72.425,194.829 64.833,192.569 59.377,183.111 C53.922,173.653 45.769,168.365 34.920,167.252 C24.070,166.131 18.904,160.117 19.420,149.207 C19.936,138.294 15.932,129.431 7.408,122.619 C-1.117,115.804 -2.217,107.946 4.107,99.052 C10.431,90.149 11.847,80.527 8.354,70.181 C4.860,59.830 8.176,52.626 18.300,48.566 C28.424,44.502 34.809,37.172 37.457,26.576 C40.104,15.978 46.782,11.716 57.493,13.773 C68.202,15.844 77.531,13.132 85.478,5.654 C93.425,-1.827 101.346,-1.801 109.241,5.734 C117.136,13.269 126.446,16.042 137.170,14.051 C147.894,12.060 154.543,16.374 157.117,26.989 C159.690,37.607 166.025,44.979 176.121,49.114 C186.217,53.245 189.483,60.472 185.918,70.796 C182.354,81.121 183.702,90.748 189.965,99.694 C196.228,108.636 195.073,116.488 186.502,123.242 C177.930,129.993 173.865,138.832 174.306,149.741 C174.747,160.656 169.539,166.635 158.682,167.674 Z"/>
							<path class="inner" fill-rule="evenodd"  stroke="rgb(194, 193, 194)" stroke-width="1.3px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.251" fill="none"
							 d="M152.731,162.666 C142.856,163.617 135.408,168.393 130.387,177.000 C125.366,185.604 118.446,187.618 109.628,183.056 C100.810,178.485 91.976,178.451 83.127,182.961 C74.277,187.470 67.371,185.403 62.410,176.763 C57.447,168.123 50.032,163.295 40.165,162.274 C30.297,161.252 25.597,155.760 26.067,145.793 C26.536,135.824 22.895,127.728 15.141,121.506 C7.388,115.279 6.387,108.104 12.139,99.975 C17.891,91.844 19.179,83.052 16.002,73.605 C12.824,64.149 15.840,57.564 25.048,53.857 C34.257,50.142 40.064,43.449 42.472,33.774 C44.880,24.090 50.954,20.192 60.695,22.078 C70.436,23.963 78.921,21.490 86.149,14.655 C93.377,7.822 100.581,7.848 107.763,14.732 C114.943,21.613 123.411,24.150 133.164,22.330 C142.918,20.509 148.966,24.449 151.307,34.147 C153.648,43.846 159.409,50.580 168.592,54.355 C177.775,58.129 180.745,64.735 177.503,74.162 C174.261,83.594 175.488,92.393 181.184,100.564 C186.880,108.733 185.830,115.901 178.034,122.075 C170.238,128.243 166.540,136.314 166.942,146.282 C167.342,156.252 162.606,161.711 152.731,162.666 Z"/>
							</svg>
					</div>
					<div class="b-form-left left">
						<img src="i/9/left.jpg">
					</div>
					<div class="b-form right">
						<div class="b-center b-form-title">
							<h3><b>Заполните короткую<br>форму</b> и в ту же минуту<br>получите бесплатное<br>руководство!</h3>
						</div>
						<form class="b-form-order" method="post" action="kitsend.php">
							<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
							<input type="text" name="email" class="b-input b-email-input" placeholder="E-mail" required>
							<input type="hidden" name="subject" value="Получить бесплатное руководство (block-9)">
							<a href="#" class="b-btn-submit b-btn b-btn-green">Получить бесплатное руководство</a>
							<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
							<div class="b-checkbox b-center">
								<input id="b-9-accept" type="checkbox" name="accept" required checked>
								<label for="b-9-accept">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
							</div>
						</form>
					</div>
				</div> -->
				<? */ ?>
			</div>
		</div>

		<div class="b b-10">
			<div class="b-block">
				<div class="b-title b-center white">
					<h2><b>Чистейший свежевыжатый сок</b><br>мы фасуем в пищевые стаканчики</h2>
					<h4>Стаканчики изготовлены из безопасного пластика, который <br>используется, в том числе,<br> и для фасовки детского питания</h4>
				</div>
				<div class="b-10-list">		
					<img src="i/m/10/aloe.jpg">	
					<p>Каждая упаковка максимально удобна — она содержит <b>8 порционных баночек</b><br> с соком алоэ</p>
					<p>Каждой <b>упаковки хватит</b> больше,<br>чем на недельный курс приёма сока алоэ</p>
					<p>1 порция соответствует <b>дневной<br>норме</b> сока алоэ для взрослого человека</p>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-11">
		<div class="b-block">
			<div class="b-title b-center">
				<h2><b>Наша продукция</b> задекларирована, прошла все необходимые <nobr>испытания и исследования</nobr></h2>
				<h4>Она на 100% подходит для оздоровительного или косметического применения</h4>
			</div>
			<div class="b-11-content">
				<div class="b-slider-left left">
					<div class="b-slider-doc" data-id="0">
						<img src="i/m/11/doc-1.jpg">
						<div class="b-protocol">Протокол испытаний ч.1</div>
					</div>
					<div class="b-slider-doc" data-id="1">
						<img src="i/m/11/doc-2.jpg">
						<div class="b-protocol">Протокол испытаний ч.2</div>
					</div>
					<div class="b-slider-doc" data-id="2">
						<img src="i/m/11/doc-3.jpg">
						<div class="b-protocol">Протокол испытаний ч.3</div>
					</div>
					<div class="b-slider-doc" data-id="3">
						<img src="i/m/11/doc-4.jpg">
						<div class="b-protocol">Декларация о соответствии</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-12">
		<div class="b-block-wide">
			<div class="b-12-header">
				<div class="b-block-wide">
					<div class="b-block">
						<div class="b-title b-center">
							<h2>Сок алоэ <b>полезен</b><br> для всей семьи</h2>
							<h4>Как регулярный прием сока <br>алоэ повлияет на ваше здоровье и здоровье ваших близких?</h4>
						</div>
						<div class="b-nav">
							<h3><a href="#"><span>1</span>Здоровье детей</a></h3>
							<div class="b-nav-detail">
								<h4><b>Здоровье детей</b> в ваших руках:</h4>
								<ul class="b-list">
									<li>превосходно лечит от насморка</li>
									<li>повышает иммунитет при эпидемиях</li>
									<li>заживляет любые ранки, ушибы <br>и порезы</li>
									<li>нормализует пищеварение</li>
									<li>улучшает состояние десен и зубов</li>
									<li>оказывает общеукрепляющий<br> эффект на организм</li>
								</ul>
							</div>
							<a href="#"><span>2</span>Здоровье женщин</a>
							<div class="b-nav-detail">
								<h4><b>Общеукрепляющий эффект</b> для организма:</h4>
								<ul class="b-list">
									<li>укрепляет иммунитет</li>
									<li>нормализует пищеварение</li>
									<li>улучшает состояние десен и зубов</li>
									<li>укрепляет нервную систему</li>
									<li>помогает при гинекологических проблемах</li>
									<li>выводит шлаки и токсины из организма</li>
								</ul>
								<h4><b>Улучшает</b> состояние кожи <br>лица и тела:</h4>
								<ul class="b-list">
									<li>избавляет от возрастных морщин, омолаживает кожу</li>
									<li><nobr>избавляет от прыщей, угрей и черных точек</nobr></li>
									<li>смягчает и тонизирует кожу, подтягивает овал лица</li>
									<li>суживает поры и подсушивает <br>жирную кожу</li>
								</ul>
								<h4><b>Ухаживает</b> за волосами:</h4>
								<ul class="b-list">
									<li>укрепляет корни</li>
									<li>способствует более активному росту</li>
								</ul>
								<ul class="b-list">
									<li>снижает ломкость</li>
								</ul>
							</div>
							<a href="#"><span>3</span>Здоровье мужчин</a>
							<div class="b-nav-detail">
								<h4><b>Позитивно влияет на организм:</b></h4>
								<ul class="b-list">
									<li>избавляет от астении, невроза и головных болей</li>
									<li>улучшает потенцию, содействует выработке большего количества активных сперматозоидов</li>
									<li>помогает при гастрите и язве желудка</li>
									<li>тонизирует и повышает выносливость нервной системы</li>
									<li>улучшает состояние десен и зубов</li>
									<li>помогает при ожогах и многих кожных заболеванях</li>
									<li>укрепляет иммунную систему организма</li>
								</ul>
							</div>
							<a href="#"><span>4</span>Здоровье пожилых людей</a>
							<div class="b-nav-detail">
								<h4><b>Позитивно влияет на организм</b><br>при таких болезнях, как:</h4>
								<ul class="b-list">
									<li>простуда и насморк</li>
									<li>гайморит и фарингит</li>
									<li>кашель и астма</li>
								</ul>
								<ul class="b-list">
									<li>изжога и колит</li>
									<li>сердечные боли и невроз</li>
									<li>зубная боль и мозоли</li>
								</ul>
								<h4><b>А так же:</b></h4>
								<ul class="b-list">
									<li>выводит шлаки и токсины из организма</li>
									<li>питает кожу рук и заживляет ранки</li>
									<li>способствует улучшению зрения</li>
									<li>благоприятствует нормализации пищеварения</li>
									<li>способствует избавлению от астении, невроза, головных болей</li>
									<li>восстанавливает кожный покров после ожога, при кожных раздражениях и болезнях</li>
								</ul>
							</div>
						</div>
						<a href="#b-popup-preroll" class="fancy b-btn b-btn-green">Заказать свежевыжатый<br> сок алоэ</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<? /* ?>
	<!-- <div class="b b-13">
		<div class="b-block-wide b-block-gray">
			<div class="b-block">
				<div class="b-center b-title">
					<h2>Получите <b>15 самых эффективных<br>рецептов</b> с добавлением сока алоэ,</h2>
					<h4>которые идеально подойдут для всей семьи!</h4>
				</div>
				<div class="b-13-content b-forms clearfix">
					<div class="b-discover">
						<div class="b-tip-cont">
							<div class="b-tip">
								<a href="#" class="icon-close b-tip-close"></a>
								<h4>Руководство содержит:</h4>
								<p><b>Рецепты</b> для конкретной проблемы<br>или заболевания.</p><br>
								<p><b>Правила применения сока:</b><br>«Как получить максимальный эффект<br>и не навредить организму».</p><br>
								<p><b>5 простых рецептов «на каждый день»</b> для поддержания и укрепления здоровья: ребенка, взрослого и пенсионера.</p>
							</div>
						</div>
						<div class="b-discover-text two-string">
							<p>Список</p><br><p>рекомендаций</p><br>
							<small>по употреблению<br>сока алоэ</small>
						</div>
					</div>
					<div class="b-form-left left">
						<img src="i/13/left.jpg">
					</div>
					<div class="b-form right">
						<div class="b-center b-form-title">
							<h3><b>Заполните короткую<br>форму</b> и в ту же минуту<br>получите бесплатное<br>руководство!</h3>
						</div>
						<form class="b-form-order" method="post" action="kitsend.php">
							<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
							<input type="text" name="email" class="b-input b-email-input" placeholder="E-mail" required>
							<input type="hidden" name="subject" value="Получить бесплатное руководство (block-13)">
							<a href="#" class="b-btn-submit b-btn b-btn-green">Получить бесплатное руководство</a>
							<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
							<div class="b-checkbox b-center">
								<input id="b-13-accept" type="checkbox" name="accept" required checked>
								<label for="b-13-accept">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- <div class="b b-14">
		<div class="b-block">
			<div class="b-title">
				<h2><b>Посмотрите<br> на отзывы</b> тех, <nobr>кто уже начал регулярно</nobr> принимать наш свежевыжатый сок алоэ</h2>
			</div>
		</div>
		<div class="b-reviews">
			<div class="b-review">
				<div class="b-block">
					<div class="b-reviews-img" style="background-image: url('i/14/review-1.jpg');"></div>
					<div class="b-review-name">
						<h4><b>Алёна Цветаева</b></h4>
						<small>Менеджер, 28 лет</small>
					</div>
					<div class="b-quotes b-quotes-open"></div>
					<div class="b-review-text">
						<p>Проблемы с кожей у меня начались в 13 лет и так и не прошли после переходного возраста...</p>
						<a href="#">ОТКРЫТЬ ОТЗЫВ ЦЕЛИКОМ</a>
					</div>
						<h4>Чтобы посмотреть<br> видеоотзыв, нажмите ниже</h4>
				
					<div class="b-reviews-video b-video-block" style="background-color: #000000;">
						<a href="#" class="b-btn b-btn-yellow b-btn-play" tabindex="0"></a>
						<iframe src="https://www.youtube.com/embed/GmbyKuzOnLw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			<div class="b-review">
				<div class="b-block">
					<div class="b-reviews-img" style="background-image: url('i/14/review-2.jpg');"></div>
					<div class="b-review-name">
						<h4><b>Алёна Цветаева</b></h4>
						<small>Менеджер, 28 лет</small>
					</div>
					<div class="b-quotes b-quotes-open"></div>
					<div class="b-review-text">
						<p>Проблемы с кожей у меня начались в 13 лет и так и не прошли после переходного возраста...</p>
						<a href="#">ОТКРЫТЬ ОТЗЫВ ЦЕЛИКОМ</a>
					</div>
						<h4>Чтобы посмотреть<br> видеоотзыв, нажмите ниже</h4>
				
					<div class="b-reviews-video b-video-block" style="background-color: #000000;">
						<a href="#" class="b-btn b-btn-yellow b-btn-play" tabindex="0"></a>
						<iframe src="https://www.youtube.com/embed/GmbyKuzOnLw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			<div class="b-review">
				<div class="b-block">
					<div class="b-reviews-img" style="background-image: url('i/14/review-3.jpg');"></div>
					<div class="b-review-name">
						<h4><b>Алёна Цветаева</b></h4>
						<small>Менеджер, 28 лет</small>
					</div>
					<div class="b-quotes b-quotes-open"></div>
					<div class="b-review-text">
						<p>Проблемы с кожей у меня начались в 13 лет и так и не прошли после переходного возраста...</p>
						<a href="#">ОТКРЫТЬ ОТЗЫВ ЦЕЛИКОМ</a>
					</div>
						<h4>Чтобы посмотреть<br> видеоотзыв, нажмите ниже</h4>
				
					<div class="b-reviews-video b-video-block" style="background-color: #000000;">
						<a href="#" class="b-btn b-btn-yellow b-btn-play" tabindex="0"></a>
						<iframe src="https://www.youtube.com/embed/GmbyKuzOnLw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			<div class="b-review">
				<div class="b-block">
					<div class="b-reviews-img" style="background-image: url('i/14/review-4.jpg');"></div>
					<div class="b-review-name">
						<h4><b>Алёна Цветаева</b></h4>
						<small>Менеджер, 28 лет</small>
					</div>
					<div class="b-quotes b-quotes-open"></div>
					<div class="b-review-text">
						<p>Проблемы с кожей у меня начались в 13 лет и так и не прошли после переходного возраста...</p>
						<a href="#">ОТКРЫТЬ ОТЗЫВ ЦЕЛИКОМ</a>
					</div>
						<h4>Чтобы посмотреть<br> видеоотзыв, нажмите ниже</h4>
				
					<div class="b-reviews-video b-video-block" style="background-color: #000000;">
						<a href="#" class="b-btn b-btn-yellow b-btn-play" tabindex="0"></a>
						<iframe src="https://www.youtube.com/embed/GmbyKuzOnLw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			<div class="b-review">
				<div class="b-block">
					<div class="b-reviews-img" style="background-image: url('i/14/review-5.jpg');"></div>
					<div class="b-review-name">
						<h4><b>Алёна Цветаева</b></h4>
						<small>Менеджер, 28 лет</small>
					</div>
					<div class="b-quotes b-quotes-open"></div>
					<div class="b-review-text">
						<p>Проблемы с кожей у меня начались в 13 лет и так и не прошли после переходного возраста...</p>
						<a href="#">ОТКРЫТЬ ОТЗЫВ ЦЕЛИКОМ</a>
					</div>
						<h4>Чтобы посмотреть<br> видеоотзыв, нажмите ниже</h4>
				
					<div class="b-reviews-video b-video-block" style="background-color: #000000;">
						<a href="#" class="b-btn b-btn-yellow b-btn-play" tabindex="0"></a>
						<iframe src="https://www.youtube.com/embed/GmbyKuzOnLw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		
		</div>
	</div> -->
	<? */ ?>
	<div class="b b-16">
		<div class="b-block">
			<div class="b-16-content">
				<div class="b-title">
					<h2>Сок алоэ вы можете<br>запросто <b>хранить дома</b><br>в обычном морозильнике</h2>
					<h4>Заморозка — это идеальный способ<br> <nobr>хранения, при котором обеспечивается</nobr> сохранность 100% витаминов<br> и полезных свойств сока</h4>
				</div>
				<img class="b-square-image" src="i/m/16/aloe.jpg">
				<div class="b-16-advantages">
					<div class="b-16-advantage-item b-16-advantages-1 anim fadeLeft" data-cont=".b-16-advantages">
						<img src="i/icons/icon-temperature.svg">
						<p>Хранить в замороженном виде сок можно до 1 года и подвергать разморозке не более 3-х раз</p>
					</div>
					<div class="b-16-advantage-item b-16-advantages-2 anim fadeLeft delay200" data-cont=".b-16-advantages">
						<img src="i/icons/icon-time.svg">
						<p>Для употребления замороженного сока возьмите  1 баночку<br> и дождитесь её оттаивания. <br>Это займет 10 минут</p>
						<p class="b-16-advantage-note">Не подвергайте сок принудительному нагреванию</p>
					</div>
					<div class="b-16-advantage-item b-16-advantages-3 anim fadeLeft delay400" data-cont=".b-16-advantages">
						<img src="i/icons/icon-ok.svg">
						<p>Перед вскрытием взболтайте баночку: содержимое в силу натуральности может содержать небольшой осадок</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-15">
		<div class="b-block-wide b-block-gray">
			<div class="b-block">
				<div class="b-title">
					<h2 class="b-center"><nobr>Закажите <b>свежевыжатый</nobr> сок алоэ</b> с доставкой<br> в день отжима!</h2>
				</div>
				<div class="b-7-content clearfix">
					<form class="b-form-order" method="post" action="kitsend.php">
						<div class="b-form-left b-form-left-back left">
							<h3><b>Выберите</b> количество<br>упаковок свежевыжатого<br>сока алоэ:</h3>
							<div class="b-counter">
								<a href="#" class="icon-minus b-btn-count" onclick="return false;"></a>
								<a href="#" class="icon-plus b-btn-count" onclick="return false;"></a>
								<div class="b-count">
									<input type="text" name="count" class="b-count-current" value="2" maxlength="2" oninput="this.value = this.value.replace(/\D/g, '')">
									<p>упаковки</p>
								</div>
							</div>
							<div class="b-price">
								<p>Цена за 1 упаковку:</p>
								<span class="new-price">
									<span class="price-value">
										<span class="more-1">490</span><span class="less-1 hide">600</span>
									</span><span class="price-rub">руб</span>
								</span>
								<span class="old-price">
									<span class="rice-value">600</span><span class="price-rub">руб</span>
									<img src="i/7/red-line.svg">
								</span>
							</div>
							<div class="b-bonus">
								<span>Бонусы:&nbsp;&nbsp;</span>
								<div class="b-bonus-item b-bonus-free">Бесплатная доставка</div><br>
								<div class="b-bonus-item b-bonus-gift"><span class="free-1">1</span><span class="free-2 hide">2</span><span class="free-4 hide">4</span> <span class="word-format">упаковка</span> сока в подарок</div>
							</div>
						</div>
						<div class="b-form right">
							<div class="b-center b-form-title">
								<h3><b>Заказать</b> <span class="order-count">2</span>&nbsp;<span class="word-format">упаковки</span><br>сока алоэ по спец. цене</h3>
								<p>Менеджер позвонит вам в течение<br> 15 минут для уточнения адреса<br> и времени доставки</p>
							</div>
							<input type="text" name="name" class="b-input b-name-input" placeholder="Имя" required>
							<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
							<input type="hidden" name="subject" value="Заказать свежевыжатый сок алоэ (block-15)">
							<a href="#" class="b-btn-submit b-btn b-btn-green">Заказать свежевыжатый<br> сок алоэ</a>
							<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
							<div class="b-checkbox b-center">
								<input id="b-15-accept" type="checkbox" name="accept" required checked>
								<label for="b-15-accept">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<? /* ?>
	<!-- <div class="b b-17">
		<div class="b-block">
			<img src="i/parallax/p-1.png" class="b-enllax b-17-enllax-1" alt="" data-enllax-ratio="0.8" data-enllax-type="foreground" data-enllax-direction="vertical">
			<img src="i/parallax/p-2.png" class="b-enllax b-17-enllax-2" alt="" data-enllax-ratio="0.3" data-enllax-type="foreground" data-enllax-direction="vertical">
			<img src="i/parallax/p-3.png" class="b-enllax b-17-enllax-3" alt="" data-enllax-ratio="-0.1" data-enllax-type="foreground" data-enllax-direction="vertical">
			<img src="i/parallax/p-4.png" class="b-enllax b-17-enllax-4" alt="" data-enllax-ratio="-0.1" data-enllax-type="foreground" data-enllax-direction="vertical">
			<img src="i/parallax/p-5.png" class="b-enllax b-17-enllax-5" alt="" data-enllax-ratio="0.1" data-enllax-type="foreground" data-enllax-direction="vertical">
			<img src="i/parallax/p-6.png" class="b-enllax b-17-enllax-6" alt="" data-enllax-ratio="0.3" data-enllax-type="foreground" data-enllax-direction="vertical">
			<img src="i/parallax/p-7.png" class="b-enllax b-17-enllax-7" alt="" data-enllax-ratio="0.8" data-enllax-type="foreground" data-enllax-direction="vertical">
			<div class="b-17-header clearfix">
				<img class="b-17-back" src="i/17/fateev.jpg">
				<div class="b-17-content right">
					<div class="b-title">
						<h2>Делаю каждую порцию сока,<br><b>как для своей семьи</b></h2>
					</div>
					<div class="b-17-text">
						<div class="b-quotes b-quotes-open"></div>
						<p>Думаю, что не один я в курсе того, что сок алоэ является<br>прекрасным лечебным средством, с очень широким<br>спектром применения.</p><br>
						<p>И мне захотелось купить чистый сок для себя и своей<br>семьи, но я просто физически не смог этого сделать!</p><br>
						<p>Его просто нигде не было!</p>
						<div class="show-more-text show-more-hide">
							<br><p>А то, что под видом сока алоэ продается в аптеках и на большинстве сайтов, по-сути, им не является, т.к. это мертвый, <b>бесполезный продукт, прошедший все стадии</b> промышленной обработки, да еще и сдобренный консервантами.</p><br>
							<p>Именно после этого я вдохновился идеей сделать компанию, которая даст возможность абсолютно <b>любому жителю Москвы купить на 100% чистый и полезный сок алоэ,</b> который можно использовать в лечебных, косметических или оздоровительных целях.</p><br><p>Мы производим “парное молоко” среди всех прочих соков алоэ, имеющихся на рынке. Только представьте: ночью сок был еще в мякоти листа, а <b>утром он уже выжат, порционно расфасован и доставлен</b> к вам домой!</p>
						</div>
						<a href="#" class="show-more"><span class="open">Читать полностью</span><span class="close hide">Свернуть</span></a>
						<div class="b-17-sign">
							<p><b>Алексей Фатеев</b></p>
							<img src="i/17/sign.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- div class="b b-18">
		<div class="b-block-wide b-block-gray">
			<div class="b-block">
				<div class="b-center b-title">
					<h2><b>В честь 7-и летия компании</b><br>дарим дополнительные упаковки<br>сока за большой заказ</h2>
				</div>
				<div class="b-advantages">
					<div class="b-advantage-item b-18-advantages-1 anim fadeLeft">
						<img src="i/icons/icon-bottle-green.svg">
						<p>Хотите сделать<br><b>настойку</b> на основе<br>сока алоэ?</p>
					</div>
					<div class="b-advantage-item b-18-advantages-2 anim fadeLeft delay200">
						<img src="i/icons/icon-snake-green.svg">
						<p>Хотите <b>пропить сок курсом</b><br>и основательно поправить<br>здоровье?</p>
					</div>
					<div class="b-advantage-item b-18-advantages-3 anim fadeLeft delay400">
						<img src="i/icons/icon-man-green.svg">
						<p>Будете использовать<br>не только вы,<br>но и <b>ваши близкие</b>?</p>
					</div>
				</div>
				<div class="b-18-content clearfix">
					<div class="b-form-left b-gifts left" data-offset="350">
						<div class="b-gift-item b-gift-1">
							<div class="b-gift-item-left anim fadeLeft" data-cont=".b-gifts">
								<p class="b-gift-count">5</p>
								<img src="i/18/gift-1.jpg">
								<p class="b-gift-bottom">При заказе 5-и упаковок</p>
								<p class="b-gift-plus">+</p>
							</div>
							<div class="b-gift-item-right anim fadeLeft delay100" data-cont=".b-gifts">
								<p class="b-gift-count">1</p>
								<img src="i/18/gift-2.jpg">
								<p class="b-gift-bottom">+1 в подарок</p>
							</div>
						</div>
						<div class="b-gift-item b-gift-2">
							<div class="b-gift-item-left anim fadeLeft delay200" data-cont=".b-gifts">
								<p class="b-gift-count">8</p>
								<img src="i/18/gift-1.jpg">
								<p class="b-gift-bottom">При заказе 8-и упаковок</p>
								<p class="b-gift-plus">+</p>
							</div>
							<div class="b-gift-item-right anim fadeLeft delay300" data-cont=".b-gifts">
								<p class="b-gift-count">2</p>
								<img src="i/18/gift-2.jpg">
								<p class="b-gift-bottom">+2 в подарок</p>
							</div>
						</div>
						<div class="b-gift-item b-gift-3">
							<div class="b-gift-item-left anim fadeLeft delay400" data-cont=".b-gifts">
								<p class="b-gift-count">10</p>
								<img src="i/18/gift-1.jpg">
								<p class="b-gift-bottom">При заказе 10-и упаковок</p>
								<p class="b-gift-plus">+</p>
							</div>
							<div class="b-gift-item-right anim fadeLeft delay500" data-cont=".b-gifts">
								<p class="b-gift-count">4</p>
								<img src="i/18/gift-2.jpg">
								<p class="b-gift-bottom">+4 в подарок</p>
							</div>
						</div>
					</div>
					<div class="b-form right">
						<div class="b-center b-form-title">
							<h3>Сделайте большой заказ<br><b>с экономией до 4 000 рублей</b></h3>
							<p>и получите <b>1, 2 или 4 упаковки сока в подарок!</b></p><br>
							<p>Менеджер позвонит вам в течение<br>15 минут для уточнения: объема заказа,<br>адреса, времени доставки</p>
						</div>
						<form class="b-form-order" method="post" action="kitsend.php">
							<input type="text" name="name" class="b-input b-name-input" placeholder="Имя" required>
							<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
							<input type="hidden" name="subject" value="Сделать большой заказ по выгодной цене(block-18)">
							<a href="#" class="b-btn-submit b-btn b-btn-green two-string">Сделать большой заказ<br>по выгодной цене</a>
							<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
							<div class="b-checkbox b-center">
								<input id="b-18-accept" type="checkbox" name="accept" required checked>
								<label for="b-18-accept">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<? */ ?>
	<div class="b b-19">
		<div class="b-block clearfix">
			<div class="b-title b-center">
				<h2 class="white"><b>Условия</b><br> доставки и оплаты</h2>
				<h4 class="white">Чтобы сохранить 100% полезных <nobr>свойств сока алоэ, мы осуществляем</nobr><br> доставку только в пределах Москвы</h4>
			</div>
			<div class="b-19-list">
				<div class="b-19-item b-19-item-1">
					<div class="img-cont anim fadeUp delay100" data-cont=".b-19-item-1">
						<img src="i/m/19/1.png">
					</div>
					<p class="anim fadeDown delay200" data-cont=".b-19-item-1"><b>Минимальный заказ</b> —<br>2 упаковки </p>
				</div>
				<div class="b-19-item b-19-item-2">
					<div class="img-cont anim fadeUp delay100" data-cont=".b-19-item-2">
						<img src="i/19/item-2.png">
					</div>
					<p class="anim fadeDown delay200" data-cont=".b-19-item-2"><b>Бесплатно доставим</b><br> до двери при заказе 3-х<br> и более упаковок!</p>
				</div>
				<div class="b-19-item b-19-item-3">
					<div class="img-cont anim fadeUp delay100" data-cont=".b-19-item-3">
						<img src="i/19/item-3.png">
					</div>
					<p class="anim fadeDown delay200" data-cont=".b-19-item-3"><b>Оплатить заказ</b> вы можете<br>курьеру наличными</p>
				</div>
			</div>
			<small>После получения заказа вам нужно будет только<br>поместить сок в морозилку вашего холодильника, <br>где он может храниться без потери своих <br>свойств течение 1 года</small>
		</div>
		<? /* ?>
		<!-- <div class="b-19-address">
			<h3>адреса</h3>
			<p>Кутузовский проспект, 88 ТЦ Квадро,<br>магазин «Мастерская вкуса» (1 этаж)</p>
			<p>ул. Новокосинская 32/1,<br>Торговый центр ПриАлит (2 этаж) </p>
			<p>Кутузовский проспект, 43,<br>магазин «Мастерская вкуса»</p>
		</div> -->
		<? */ ?>
	</div>

	<div class="b b-20">
		<div class="b-block">
			<div class="b-title b-center">
				<h2><b>Не нашли нужный рецепт</b> на основе сока<br> алоэ на нашем сайте<br> или в интернете?</h2>
				<h4>Напишите вашу проблему в форме ниже и мы постараемся подготовить рецепт специально для вас!</h4>
			</div>
			<div class="b-20-content clearfix">
				<!-- <div class="b-20-back">
					<img src="i/20/left.jpg">
				</div> -->
				<div class="b-20-right right">
					<form class="b-form-problem" action="kitsend.php" method="POST">
						<div class="b-problem-start show">
							<h3 class="b-20-title-1">Опишите в этом поле<br><nobr>вашу проблему, которую хотите</nobr> решить с помощью сока алоэ!</h3>
							<textarea class="b-textarea" name="problem" placeholder="В чем заключается ваша проблема?" required></textarea>
							<input type="hidden" name="subject" value="Опишите в этом поле вашу проблему (block-20)">
							<h3 class="b-20-title-2">После того, как опишите<br>проблему, нажмите сюда<img class="b-20-line" src="i/20/line.svg"></h3>
							<a href="#" class="b-btn b-btn-green b-problem-next">Готово</a>
						</div>
						<div class="b-form b-problem-finish">
							<? /* ?>
							<!-- <div class="b-popup-call-header">
								<div class="b-popup-line-container">
									<div class="b-popup-line">
										<p>Почти готово</p>
									</div>
								</div>
							</div> -->
							<? */ ?>
							<div class="b-center b-form-title">
								<h3><b>Введите ваши данные</b></h3>
								<p>куда мы отправим вам рецепты</p>
							</div>
							<div class="b-form-order">
								<input  id="first-input" type="text" name="email" class="b-input b-email-input" placeholder="E-mail" autofocus required>
								<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
								<a href="#" class="b-btn-submit b-btn b-btn-green">Получить рецепты</a>
								<div class="b-checkbox b-center">
									<input id="b-popup-call-accept" type="checkbox" name="accept" required checked>
									<label for="b-popup-call-accept">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
								</div>
							</div>
							<a href="#b-popup-success" class="b-thanks-link" style="display:none;"></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="b-footer">
		<div class="b-block-wide">
			<div class="b-block">
				<div class="b-footer-top">
					<a href="/m/" class="b-footer-logo"></a>
					<div class="b-footer-contacts">
						<ul class="b-header-social">
							<li class="b-soc-call">
								<span class="icon-call"></span>
							</li>
							<li class="b-soc-whatsapp">
								<span class="icon-whatsapp"></span>
							</li>
							<li class="b-soc-telegram">
								<span class="icon-telegram"></span>
							</li>
						</ul>
						<div class="b-header-phone-cont">
							<a href="tel:+74959204120" class="b-header-phone">+ 7 495 920 41 20</a>
						</div>
					</div>
					<div class="b-footer-politics">
						<a href="policy.pdf" target="_blank">Политика конфендиальности</a>
					</div>
				</div>
				<div class="b-footer-bottom clearfix">
					<p class="left">ИНН 753616684562</p>
					<p class="right">ОРГНИП 31478471360048</p>
				</div>
			</div>
		</div>
	</div>

	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup" id="b-popup-1">
			<h3>Оставьте заявку</h3>
			<h4>и наши специалисты<br>свяжутся с Вами в ближайшее время</h4>
			<form action="kitsend.php" data-goal="CALLBACK" method="POST" id="b-form-1">
				<div class="b-popup-form">
					<label for="name">Введите Ваше имя</label>
					<input type="text" id="name" name="name" required/>
					<label for="tel">Введите Ваш номер телефона</label>
					<input type="text" id="tel" name="phone" required/>
					<label for="tel">Введите Ваш E-mail</label>
					<input type="text" id="tel" name="email" required/>
					<input type="hidden" name="subject" value="Заказ"/>
					<input type="submit" style="display:none;">
					<a href="#" class="b-btn b-blue-btn ajax">Заказать</a>
					<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
				</div>
			</form>
		</div>

		<div class="b-popup b-popup-call" id="b-popup-call">
			<form class="b-form" action="kitsend.php" method="POST" id="b-form-call">
				<div class="b-popup-call-header">
					<div class="b-popup-line-container">
						<div class="b-popup-line">
							<p>Почти готово</p>
						</div>
					</div>
				</div>
				<div class="b-center b-form-title">
					<h3><b>Перезвоните мне</b></h3>
					<p>Наш менеджер свяжется с вами<br>в течение 7 минут</p>
				</div>
				<div class="b-form-order">
					<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
					<input type="text" name="email" class="b-input b-email-input" placeholder="E-mail" required>
					<input type="hidden" name="subject" value="Перезвоните мне (block-popup)">
					<a href="#" class="ajax b-btn b-btn-green">Перезвоните мне</a>
					<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
					<div class="b-checkbox b-center">
						<input id="b-popup-call-accept" type="checkbox" name="accept" required checked>
						<label for="b-popup-call-accept">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
						<div class="b-tip-small">
							<p>Для продолжения нужно согласие с условиями</p>
						</div>
					</div>
				</div>
				<a href="#b-popup-success" class="b-thanks-link" style="display:none;"></a>
			</form>
		</div>

		<div class="b-popup b-popup-preroll" id="b-popup-preroll">
			<div class="b-title white">
				<h2 class="b-center">Закажите <b><nobr>свежевыжатый сок алоэ</nobr></b><br>с доставкой в день отжима!</h2>
			</div>
			<div class="b-7-content clearfix">
				<form class="b-form-order" method="post" action="kitsend.php">
					<div class="b-form-left b-form-left-back left">
						<h3><b>Выберите</b> количество<br>упаковок свежевыжатого<br>сока алоэ:</h3>
						<div class="b-counter">
							<a href="#" class="icon-minus b-btn-count" onclick="return false;"></a>
							<a href="#" class="icon-plus b-btn-count" onclick="return false;"></a>
							<div class="b-count">
								<input type="text" name="count" class="b-count-current" value="2" maxlength="2" oninput="this.value = this.value.replace(/\D/g, '')">
								<p>упаковки</p>
							</div>
						</div>
						<div class="b-price">
							<p>Цена за 1 упаковку:</p>
							<span class="new-price">
								<span class="price-value">
									<span class="more-1">490</span><span class="less-1 hide">600</span>
								</span><span class="price-rub">руб</span>
							</span>
							<span class="old-price">
								<span class="rice-value">600</span><span class="price-rub">руб</span>
								<img src="i/7/red-line.svg">
							</span>
						</div>
						<div class="b-bonus">
							<span>Бонусы:&nbsp;&nbsp;</span>
							<div class="b-bonus-item b-bonus-free">Бесплатная доставка</div><br>
							<div class="b-bonus-item b-bonus-gift"><span class="free-1">1</span><span class="free-2 hide">2</span><span class="free-4 hide">4</span> <span class="word-format">упаковка</span> сока в подарок</div>
						</div>
					</div>
					<div class="b-form right">
						<div class="b-center b-form-title">
							<h3><b>Заказать</b> <span class="order-count">2</span>&nbsp;<span class="word-format">упаковки</span><br>сока алоэ по спец. цене</h3>
							<p>Менеджер позвонит вам <br>в течение 15 минут для уточнения<br> адреса и времени доставки</p>
						</div>
						<input type="text" name="name" class="b-input b-name-input" placeholder="Имя" required>
						<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
						<input type="hidden" name="subject" value="Заказать свежевыжатый сок алоэ (block-preroll)">
						<a href="#" class="b-btn-submit b-btn b-btn-green">Заказать свежевыжатый <br> сок алоэ</a>
						<a href="thanks.html" class="b-thanks-link" style="display:none;"></a>
						<div class="b-checkbox b-center">
							<input id="b-preroll-accept" type="checkbox" name="accept" required checked>
							<label for="b-preroll-accept">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="b-popup b-popup-review" id="b-popup-review">
			<div class="b-center b-form-title">
				<h2><b>Отзывы</b> о применении<br>свежевыжатого сока алоэ</h2>
				<h4>Всего лишь за месяц использования пропала излишняя<br>жирность кожи и подтянулся овал лица</h4>
			</div>
			<div class="b-popup-review-body">
				<div class="b-reviews-content">
					<div class="b-reviews-text-cont">
						<div class="b-reviews-text">
							<div class="b-quotes b-quotes-open"></div>
							<p>Проблемы с кожей у меня начались в 13 лет и так и не<br>прошли после переходного возраста. Я покупала<br>разные крема, тоники, гели - многое, но не могу<br>сказать, что они привели кожу в порядок. Я не жалуюсь, <br>но все же ни один крем и любое другое средство не<br>излечили мою кожу полностью, только слегка<br>улучшили.<br>
							Соком алоэ заинтересовалась после того, как...</p>
							<div class="b-quotes b-quotes-close"></div>
						</div>
						<div class="b-reviews-person">
							<div class="b-reviews-img" style="background-image: url('i/14/review-1.jpg');"></div>
							<div class="b-reviews-name">
								<h4>Алёна Цветаева</h4>
								<small>Менеджер, 28 лет</small>
							</div>
						</div>
					</div>
					<div class="b-reviews-video b-video-block" style="background-image: url('i/10/back.jpg');">
						<a href="#" class="b-btn b-btn-yellow b-btn-play" tabindex="0">Смотреть видео</a>
						<iframe src="https://www.youtube.com/embed/GmbyKuzOnLw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					</div>
				</div>

				<h3><b>Будьте внимательны</b> при покупке сока алоэ!</h3>
				<h4>Эффективен исключительно <b>свежевыжатый сок алоэ</b>,<br>т.к. сок промышленного производства, в том числе<br>аптечный, не содержит в себе нужных полезных веществ!</h4>

				<div class="b-thanks-styles">
					<div class="b-fact-advantages clearfix">
						<h4><b class="orange">В промышленном и аптечном соке</b> присутствует:</h4>
						<div class="b-facts-advantages-item b-facts-advantages-1">
							<img src="i/icons/icon-temperature.svg">
							<p>пастеризации, при которой<br>сок нагревается до 70 С<sup>о</sup></p>
						</div>
						<div class="b-facts-advantages-item b-facts-advantages-2">
							<img src="i/icons/icon-dnk.svg">
							<p>гомогенизации<br>и нормализации</p>
						</div>
						<div class="b-facts-advantages-item b-facts-advantages-3">
							<img src="i/icons/icon-vial.svg">
							<p>добавлению консервантов,<br>сорбатов и парабенов </p>
						</div>
						<div class="b-facts-advantages-item b-facts-advantages-4">
							<small>В ряде случаев промышленные добавки даже могут привести к проблемам со здоровьем</small>
						</div>
					</div>
					<h4><b>Эти процессы убивают в соке</b> до 80% полезных<br>витаминов и минералов. Производственные гиганты<br>таким образом увеличивают срок годности сока алоэ<br>для роста собственных продаж.</h4>
					<div class="b-thanks-juice">
						<img src="i/popup/juice.jpg">
						<p>Это можно сравнить с фруктовым соком известных марок<br>От свежевыжатого сока в них остается разве что аромат <br>и абсолютно ничего полезного для здоровья...</p>
					</div>
					<h2 class="b-center">У вас есть возможность<br><b>заказать свежевыжатый<br>100%-й сок алоэ</b> в Москве</h2>
					<h4 class="b-center">Узнайте о свежевыжатой соке алоэ больше,<br>нажав по кнопке ниже</h4>
					<div class="b-center">
						<a href="#" class="b-btn b-btn-green two-string">Узнать о свежевыжатом<br>соке алоэ больше!</a>
					</div>
				</div>

			</div>
		</div>
		
		<div class="b-popup b-popup-recipes" id="b-popup-recipes">
			<div class="b-18 b-18-content b-forms clearfix">
				<div class="b-form right">
					<div class="b-center b-form-title">
						<h3><b>Введите данные</b><br>в форме ниже</h3>
						<p>и мы моментально отправим вам<br>15 самых эффективных рецептов</p><br>
						<!-- <p><b>+ список</b> рекомендаций<br> от врача-терапевта</p> -->
					</div>
					<form class="b-form-order" method="post" action="kitsend.php">
						<input type="tel" name="phone" class="b-input b-phone-input" placeholder="Номер телефона" required>
						<input type="text" name="email" class="b-input b-email-input" placeholder="E-mail" required>
						<input type="hidden" name="subject" value="Получить 5 рецептов + рекомендации (block-popup)">
						<a href="#" class="b-btn-submit b-btn b-btn-green">Получить бесплатное руководство</a>
						<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
						<div class="b-checkbox b-center">
							<input id="b-popup-accept-1" type="checkbox" name="accept" required checked>
							<label for="b-popup-accept-1">Я принимаю <a href="policy.pdf" target="_blank">условия передачи информации</a></label>
							<input type="hidden" name="pdf" value="send">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="b-popup b-thanks" id="b-popup-success">
			<div class="b-thanks-envelope">
				<img src="i/popup/envelope.png">
				<h4 class="white"><b>Рецепты с применением сока алоэ</b><br>успешно отправлены на вашу почту</h4>
			</div>
			<div class="b-thanks-body b-thanks-styles">
				<h2 class="b-center"><b>Будьте внимательны</b><br>при покупке сока алоэ!</h2>
				<h4>Эффективен исключительно свежевыжатый сок алоэ,<br>т.к. сок промышленного производства, в том числе<br>аптечный, не содержит в себе нужных полезных веществ!</h4>
				<div class="b-fact-advantages clearfix">
					<h4><b class="orange">В промышленном и аптечном соке</b> присутствует:</h4>
					<div class="b-facts-advantages-item b-facts-advantages-1">
						<img src="i/icons/icon-temperature.svg">
						<p>пастеризации, при которой<br>сок нагревается до 70 С<sup>о</sup></p>
					</div>
					<div class="b-facts-advantages-item b-facts-advantages-2">
						<img src="i/icons/icon-dnk.svg">
						<p>гомогенизации<br>и нормализации</p>
					</div>
					<div class="b-facts-advantages-item b-facts-advantages-3">
						<img src="i/icons/icon-vial.svg">
						<p>добавлению консервантов,<br>сорбатов и парабенов </p>
					</div>
					<div class="b-facts-advantages-item b-facts-advantages-4">
						<small>В ряде случаев промышленные добавки даже могут привести к проблемам со здоровьем</small>
					</div>
				</div>
				<h4><b>Эти процессы убивают в соке</b> до 80% полезных<br>витаминов и минералов. Производственные гиганты<br>таким образом увеличивают срок годности сока алоэ<br>для роста собственных продаж.</h4>
				<div class="b-thanks-juice">
					<img src="i/popup/juice.jpg">
					<p>Это можно сравнить с фруктовым соком известных марок<br>От свежевыжатого сока в них остается разве что аромат <br>и абсолютно ничего полезного для здоровья...</p>
				</div>
				<h2 class="b-center">У вас есть возможность<br><b>заказать свежевыжатый<br>100%-й сок алоэ</b> в Москве</h2>
				<h4 class="b-center">Узнайте о свежевыжатой соке алоэ больше,<br>нажав по кнопке ниже</h4>
				<div class="b-center">
					<a href="#" class="b-btn b-btn-green two-string">Узнать о свежевыжатом<br>соке алоэ больше!</a>
				</div>
			</div>
		</div>
		
		<div class="b-popup b-error" id="b-popup-error">
			<h2><b>Ошибка отправки!</b></h2>
			<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			<a href="#" class="b-btn b-btn-green" onclick="$.fancybox.close(); return false;">Закрыть</a>
		</div>

	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/jquery.enllax.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/fastclick.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>