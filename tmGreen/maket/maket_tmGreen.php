<?php session_start();header("Content-Type: text/html; charset=utf-8");
define ( 'BUGIT', true );
/**@package KALINKA @author Родионова Галина Евгеньевна http(s)://unatka.ru * @copyright Copyright © 2013-2018 Родионова Галина Евгеньевна* email gala.anita@mail.ru @ version 1.0.0
* @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3**/	
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="favicon.ico" type="image/x -icon" />       
    <title>Maket New_for_Unatka</title>
<style>
body {
      background-color: #e3f4ff;
      border-left: dotted #12090a 5px;
      color: #12090a;      
      font: 1em Arial, Verdana, sans-serif;
      margin: 0 auto;      
      padding: 0;
      text-align: center;
      width:98%;      
}
@media all and (max-width: 470px) {
     body {  font-size: 0.85em; }
   }
/*Левый базовый блок*/
#baseleftwrapper {
      background-image: linear-gradient(to right,#e3f4ff 50%,#e4eff1);
      border-top: double #12090a 5px; 
      float: left;
      height:auto;   
      margin: 0 auto;
      padding: 1px;
      width: 74%;
 }
@media all and (max-width: 470px) {
     #baseleftwrapper{ width: 98%;height: auto; }
   }

/*Правый базовый блок*/
#baserightwrapper {
      background-color: #c8f2c7;
      background-image: linear-gradient(to left,#e3f4ff 50%,#e4eff1); 
      border-top: double #12090a 5px;
      float: left;
      margin-left: 0;
      width: 24%;
 }
@media all and (max-width: 470px) {
     #baserightwrapper{ display: none; }
   }

a {
     color: blue;
}

a:hover {
     background-color: #19fc4c;

}

a, a:hover, address,article,.clear,header, section, .show,a.openDialog {
     padding: 5px; 
}

/*Обязательный - кнопка, закрывающая модальное окно, использован в javascript.js*/
a.close{
     background-color:#b00012;
     border-radius: 5px;
     color:#e3f4ff;
     cursor:pointer;
     display:block;
     position:absolute;
     right:0.625em;
     top:0;
 }

a.show, a.openDialog {
   text-decoration: underline; 
}

a.openDialog {
     cursor:pointer;
}

/*Обязательный - область отображения контента, использован в javascript.js*/
article {
      border-radius: 0 1em 1em 0;
      /*box-shadow: inset 15px 0 35px #e3f4ff;*/
      float:left;
      font: 1em Times New Roman, serif;
      width: 64%;     
}

/*Боковое меню*/
aside {
     background-image: linear-gradient(to right,#71f99a,#CAF5E9,#e3f4ff);        
     float: right;
     margin-right: -5px;
     margin-top: -16px;
     width: 31%;
 }

/*Обязательный -указатель на корзину- магазин, используется в js*/
#basket{
   display:flex;
   display: -webkit-flex; /* Safari */ 
   height:60px;
   width:120px;
}

/*Обязательный - магазин, используется в js*/
#basket img{
   background-color:#f0622e;
   order: 1;-webkit-order: 1; /* Safari */
   width:60px;
}

/*Обязательный - магазин, используется в js*/
#basket p {
     order: 2;
     -webkit-order: 2; /* Safari */
}

.capitel {
  font-variant: small-caps;
}

p.capitel {
  color: #0bb03d;
}
/*Обязательный - магазин - форма заказа, используется в js*/
#carting{
   background-color:#5af22c;
   display:none;
   font-size: 0.95em;
   height:auto;
   position: absolute;
   left:15%;
   top:0;
   z-index:8;
}

#carting form [type=text] {
   font-size: 0.95em;
}
@media all and (max-width: 470px) {
     #carting{ font-size: .75em; }
   }

#carting form [type=submit] {
     color:#004573;
     display:none;
     font-size: 0.95em;
}

#carting form [type=image] {
    height:5%;
    width:5%;
 }


/*Очистка плавающих элементов*/
.clear{
      clear: both;
}

.commentary{
   background-color:#19fc4c;
   background-image: radial-gradient(#19fc4c,#0bb03d);
   box-shadow: inset 15px 0 35px #5af22c;
}

dialog {
    background: rgba(255, 255, 255, 0.7);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    border-radius: 5px;
    border: groove #12090a 3px;
    /*width: 75%;*/
    margin-top: -32px;
   }

/*Обязательный - магазин, кнопка Купить для долларов*/
#DOLL{
    background-color:#91de90;
    font-size:0.9em;
    font-weight:bold;
    margin-left:1%;
    text-align:center; 
    width:98%;
}

img {
    width:80%;
}
/*Модули встраиваемые*/
figure {
      border-top: solid #b00012 1px;       
      height: auto;
}
@media all and (max-width: 639px) {
     figure{font-size: 0.8em; }
   }


/*Подвал*/
footer {
      background-image: linear-gradient(to right,#e3f4ff 50%,#e4eff1);
      height: auto;
      width: 100%;       
}


/*Заголовки статей*/
h1 {
      color: #b00012;
}

/**Наименование домена*/
header{
      background-image: linear-gradient(to right,#e3f4ff 50%,#e4eff1);
      height: 2.1em;
      margin-left: 5.5%
      text-align: left;  
      width: 92%;      
}

header h4 {
      /*color: #0bb03d;*/
      float:left;      
      margin-top: 0;     
 }



/*Область логотипа, исходный размер логотипа 30*38*/
#logotype{
  float:left;
  height: 2.1em;
  padding: 4px;
  width: 5%;
 }



/*Обязательный - затемняющая экран маска для модального окна, использован в javascript.js */
#mask{
    background:#000; 
    display:none; 
    height:100%; 
    left:0; 
    opacity:.9;
    position:fixed; 
    top:0; 
    width:100%; 
    z-index:10;
 }
menu {
     background-color: #19fc4c;
     background-image: linear-gradient(to left,#e3f4ff,#19fc4c,#0bb03d);
      margin-left: 0;
      margin-top: -1px;
      text-align: left;     
      width: 88%;
}
@media all and (max-width: 470px) {
     #menu{      background-image: linear-gradient(to left,#e3f4ff,#0bb03d); }
   }
menu li {

      display: inline-block;
      list-style: none;
      padding-left: 1em;
      padding-right: 1em;
      z-index: 2;
}
menu a {
     
      /*border: 2px solid #0bb03d;*/
      border-radius: 10px;

      /*color: #b00012;*/
      line-height: 3.5;
      padding: 0.25em 0.5em;
      text-decoration: none; 
      z-index: 2;     
}

menu a:hover {
      background-color: #0bb03d;  
      color: #e3f4ff;
      line-height: 3.5;
      padding: 0.25em 0.5em;
}
@media all and (max-width: 630px) {
     menu a{ font-size: 0.9em; }
   }

/*Элементы бокового меню*/
nav{

    font-size: 0.85em;

}


nav li {
      list-style: none;
      padding: 1em;
      
}

nav li:first-child{
       font-weight:bold;
}
nav a:hover {
      background-color: #0bb03d; 
      border-radius: 10px;
      color: #e3f4ff;
}

/*обязательный - одна из кнопок ВВерх-Вниз, использован в javascript.js*/
.navup {
     bottom:0.75em;
     cursor:pointer;
     display:none;
     font-size:2.5em;
     left:0.125em;
     position:fixed;
     text-align:center;
     width:0.75em;
 }/*modNavUPDON*/

/*обязательный - одна из кнопок ВВерх-Вниз, использован в javascript.js*/
.navdown {
     cursor:pointer;
     display:none;
     font-size:2.5em;
     left:0;
     padding:0.125em;
     position:fixed;
     text-align:center;
     top:0.5em;
     width:0.5em;
}

#openDialog {
     cursor:pointer;
     text-decoration: underline; 
}

#right {
     margin-left: 0;
     float: left;
     width: 62%;    
}
/*Обязательный - в меню боковом????*/
.rightsecondlin,details span{
             height:auto;
             /*border:solid 1px blue;*/
 }

/*Обязательный - рублевая кнопка Покупаю в магазине*/
#RUB{
   background-color:#91b9de;
   font-size:0.9em;
   font-weight:bold;
   margin-left:0;
   text-align:center;
   width:98%;
}

section,#right {      
      height: auto;
} 

.show {
   background-color: #006599;
   border: 2px groove #ffffff;  
   border-radius: 0.625em;
   box-shadow:0 2px 0 #ffffff; 
   color: #ffffff; 
   cursor:pointer;  
}
/**кнопки - обязательный .subt*/
.subt,.subtmag{
      background-image: linear-gradient(#cbf2c7, #009fab 50%, #007077 20%, #bffbfe);
      background-image: -moz-linear-gradient(#cbf2c7, #009fab 50%, #007077 20%, #bffbfe);
      background-image: -webkit-linear-gradient(#cbf2c7, #009fab 50%, #007077 20%, #bffbfe);
      background-image: -o-linear-gradient(#cbf2c7, #009fab 50%, #007077 20%, #bffbfe);
      background-color:blue;
      border:2px solid #006599;
      border-radius: 0.625em;
      box-shadow:0 5px 0 #006599;
      color:#fff;
      font-weight:bold;
      padding:0.25em 0.5em;
      transition: all .1s linear;
}

.subt:active,.subtmag:active{
     box-shadow:0 2px 0 #006599;
     transform: translateY(3px;);
}

.subt{ 
      width:86%;
 }

.subtmag{
      width:40%;
}

/*Обязательный - окно, отображаемое на маске, использован в javascript.js*/
.wind {
     left:5%;
     position:fixed;  
     top:1%; 
     z-index:20;
 }

/*Обязательный - изображение, выводимое в окне, использован в javascript.js*/
.wind img {
     border:solid 0.25em #f00; 
     border-radius:1em;
     height:100%; 
     width:100%; 
 }

</style>
  </head>
  <body>
<body> 
<!--Левый базовый блок -->
   <div id="baseleftwrapper"><!--baseleftwrapper -->
  <!--Общее меню узлов  При необходимости можно закомментировать-->
<?php echo "<a href='$_SERVER[HTTP_REFERER]'>Вернуться</a>";?>
     <menu>
         <li> <a href="mysitemap.html">Карта сайта</a></li>
            <li><a href="">Menu</a></li> 
           <li><a href="">Menu</a></li> 
           <li><a href="">Menu</a></li> 
     </menu>

       <aside><!--menu-->

       <!--Главное меню сайта -->
       <nav>       
          <li> <a href="mysitemap.html">Карта сайта</a></li>
            <li><a href="">Menu</a></li> 
 <!-- end menu-->
       </nav>
      </aside><!--end menu-->
  <div id="right">
  <!--Логотип -->
    <div id="logotype"><!-- logotype-->
       <img src="../../../images/logotype.png" alt="LOGOTYPE"/>
    </div><!--end logotype-->

  <!--Домен -->
    <header><!--header-->
        <h4>Unatka</h4>
    </header><!--end header-->

<!--Очистка плавающих элементов -->
    <div class="clear"></div> <!--clear-->
</div><!-- right-->
   <!--Наименование текущей категории или ничего -->

      <p class="capitel">
 Category
      </p>

 
      <!--Статья -->    
      <article><!--content-->
        <h1>content</h1>
       <img src="images/strawber.png" alt="Цветовая схема"/>
      </article><!--end content-->
 
      <!--Блок бокового меню -->
 

<!--Очистка плавающих элементов
    <div class="clear"></div> clear-->

 
   </div><!--end baseleftwrapper --> 

   
   <!--Правый базовый блок --> 
   <div id="baserightwrapper"><!--baserightwrapper -->

    <section><!--modul Форма входа, Позиция 6-->
        <p>modul Форма входа, Позиция 6</p>
      </section><!--end modul1--><br>

    <!--Встраиваемый модуль--> 
     <br> <section><!--modul 1, Позиция 2-->
        <p>modul 1, Позиция 2</p>
      </section><!--end modul1-->  
    
     <!--Встраиваемый модуль --> 
     <figure><!--modul 2, Позиция 1, 3-->
       <p>modul 2, Позиция 1, 3</p>
    </figure><!--end modul 2-->

     <br>

    <!--Встраиваемый модуль --> 
      <figure><!--modul 3, Позиция 4--> 
         <p>modul 3, Позиция 4</p>
      </figure><!--end modul3-->
      
      <br>

    <!--Встраиваемый модуль --> 
      <figure><!--modul 4, Позиция 5--> 
         <p>modul 4, Позиция 5</p>  
      </figure><!--end modul4-->
     

   </div><!--end baserightwrapper --> 

<!--Очистка плавающих элементов -->
   <div class="clear"></div> <!--clear-->

   <!--Подвал -->
   <footer>
     <address>Автор CMS KALINKA  Copyright © 2013 - 2018 Родионова Галина Евгеньевна. Все права защищены.
    </address>
<a href=''>Обратная связь</a>
<a href="" rel="nofollow">Документы</a>

   </footer>Кнопка Вверх-вниз

  </body>
</html>
