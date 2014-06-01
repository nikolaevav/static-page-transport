<?
session_start();
?>

<div style="position: absolute; left: 330px; top: 0px; width: 480px; height: 47px; font-size: 14px; color: #ffffff;">
<a href="O-kompanii.php"><div id="men1" style="position: relative; float: left; width: 120px; height: 27px; padding-top: 20px; text-align: center;<?if ($_SESSION['menu']==1) {?>background: url(images/menu1-bg.png);<?};?>">О Компании</div></a>
<a href="postavka.php"><div id="men2" style="position: relative; float: left; width: 93px; height: 27px; padding-top: 20px; text-align: center;<?if ($_SESSION['menu']==2) {?>background: url(images/menu2-bg.png);<?};?>">Поставка</div></a>
<a href="transport-v-evrope.php"><div id="men3" style="position: relative; float: left; width: 164px; height: 27px; padding-top: 20px; text-align: center;<?if ($_SESSION['menu']==3) {?>background: url(images/menu3-bg.png);<?};?>">Транспорт в Европе</div></a>
<a href="kontakti.php"><div id="men4" style="position: relative; float: left; width: 99px; height: 27px; padding-top: 20px; text-align: center;<?if ($_SESSION['menu']==4) {?>background: url(images/menu4-bg.png);<?};?>">Доставка</div></a>
</div>
<a href="http://postavka-transporta.ru"><img src="images/logo.png" style="position: absolute; top: 10px; left: 0px;" /></a>
<img src="images/ico-1.png" style="position: absolute; top: 53px; right: 136px;" />
<img src="images/ico-2.png" style="position: absolute; top: 52px; left: 415px;" />
<img src="images/ico-3.png" style="position: absolute; top: 52px; left: 615px;" />

<div style="position: absolute; right: 0px; top: 16px; font-size: 14px; color: #ffffff;">+7499 <span style="font-family: Fra2; font-size: 18px; color: #ffb600;">506 7590</span></div>


<a href="kontakti.php"><div style="position: absolute; left: 445px; top: 55px; font-size: 12px; color: #ffffff; text-decoration: underline; cursor: pointer;">Адрес компании</div></a>

<div onclick="letter21()" style="position: absolute; left: 640px; top: 55px; font-size: 12px; color: #ffffff; text-decoration: underline; cursor: pointer;">Заказать звонок</div>

<div onclick="letter11()" style="position: absolute; right: 0px; top: 55px; font-size: 12px; color: #ffffff; text-decoration: underline; cursor: pointer;">Отправить сообщение</div>
<!--<img src="images/telefon.png" style="position: absolute; top: 10px; right: 0px;" />-->


<script type="text/javascript">
function letter11() {
$("#div2").load("1/letter1-1.php",function(){
$("#div2").fadeIn(300);
});
};
</script>

<script type="text/javascript">
function letter21() {
$("#div2").load("1/letter2-1.php",function(){
$("#div2").fadeIn(300);
});
};
</script>

<script type="text/javascript">
function letter12() {
pismo="";
if (
document.getElementById("poll11").value!="" &&
document.getElementById("poll12").value!="" &&
document.getElementById("poll13").value!="" 
) {
pochta=document.getElementById("poll12").value;
pismo=pismo+
"<html><head><title>Письмо от пользователя.</title></head><body>"+
"<b>Имя</b> -- "+document.getElementById("poll11").value+"<br />"+
"<b>Почта</b> -- "+document.getElementById("poll12").value+"<br />"+
"<b>Сообщение</b> -- "+document.getElementById("poll13").value+
"</body></html>";
$("#div1").load("1/letter1-2.php",
{pismo:pismo,pochta:pochta});
document.getElementById("poll11").value="";
document.getElementById("poll12").value="";
document.getElementById("poll13").value="";
$('#messl1').css('display','none'); $('#messl1').text('Ваше письмо отправлено на электронную почту. Подождите немного и с вами свяжется наш сотрудник.'); $('#messl1').fadeIn(300);
} else {
$('#messl1').css('display','none'); $('#messl1').text('Заполните все поля!'); $('#messl1').fadeIn(300);
};
};
</script>

<script type="text/javascript">
function letter22() {
pismo="";
if (
document.getElementById("poll21").value!="" &&
document.getElementById("poll22").value!=""
) {
pismo=pismo+
"<html><head><title>Письмо от пользователя.</title></head><body>"+
"<b>Имя</b> -- "+document.getElementById("poll21").value+"<br />"+
"<b>Телефон пользователя</b> -- "+document.getElementById("poll22").value+"<br />"+
"</body></html>";
$("#div1").load("1/letter2-2.php",{pismo:pismo});
document.getElementById("poll21").value="";
document.getElementById("poll22").value="";
$('#messl2').css('display','none'); $('#messl2').text('Ваше письмо отправлено на электронную почту. Подождите немного и с вами свяжется наш сотрудник.'); $('#messl2').fadeIn(300);
} else {
$('#messl2').css('display','none'); $('#messl2').text('Заполните все поля!'); $('#messl2').fadeIn(300);
};
};
</script>