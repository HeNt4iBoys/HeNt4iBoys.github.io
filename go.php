<?php
// Настройка скрипта
$title = "so sad"; // Название Вашего сайта в именительном падеже
$titler = "so sad"; // Название Вашего сайта в родительном падеже
$site = "http://hent4iboys.tk/"; // Полный адрес Вашего сайта
// Конец настроек
// Для того, что бы сделать переход по ссылке на Вашем сайте через эту страницу,
// необходимо указать ссылку в виде http://you-site.ru/go.php?url=http://link.ru
// При этом данный скрипт должен находится в корне Вашего сайта.

// Получаем ссылку для редиректа
$url = isset($_REQUEST['url']) ? $_REQUEST['url'] : '';
if(preg_match('#(http?|ftp)://\S+[^\s.,>)\];\'\"!?]#i',$url)){
    sleep(0);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Переход по внешней ссылке</title>
    </head>
    <body style="padding:20px 180px; font-size:12px; font-family:Tahoma; line-height:200%">
        <h2>Переход по внешней ссылке</h2>
        <p>
            Вы покидаете сайт <a href="<?php echo $site; ?>"><?php echo $title; ?></a>
            по внешней ссылке <b><?php echo $url; ?></b>.
        </p>
        <p>
            Мы не несем ответственности за содержимое сайта <?php echo $url; ?><b></b>
            и настоятельно рекомендует <b>не указывать</b>
            никаких своих личных данных на сторонних сайтах. 
        </p>
        <p>
            Кроме того, сайт <b><?php echo $url; ?></b>
            может содержать вирусы, трояны и другие вредоносные программы, опасные для Вашего компьютера. 
        </p>
        <p>
            Если у Вас нет серьезных оснований доверять этому сайту, лучше всего на него не переходить, даже если Вы якобы получили эту ссылку от одного из Ваших друзей. 
        </p>
        <p>
            Если Вы еще не передумали, нажмите на <a href="<?php echo $url; ?>" id="page"><?php echo $url; ?></a>. 
        </p>
        <p>
            Если Вы не хотите рисковать безопасностью компьютера, нажмите <a href="javascript:window.history.back()">отмена</a>, 
			иначе вы будете перемещены через <b><span id="timer">10</span><script type="text/javascript">
						window.onload = function () {
							var timer = document.getElementById("timer");
							var delay = 10;
							var location = "<?php echo $url; ?>";
							var interval = setInterval(function () {
								if(delay)
								{
									delay--;
								}

								timer.innerHTML = delay;
								if(delay <= 0)
								{
									clearInterval(interval);
									window.location.href=location;
								}
							}, 1000);
						};
					</script> секунд</b>
        </p>
        <h3><?php echo $title; ?> всегда заботится о вашей безопасности.</h3>
    </body>
</html>s