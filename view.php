<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
<meta charset="utf-8"/>
<title>super movie system</title>

<script type="text/javascript" src="./網頁捲軸滾動式廣告_files/jquery-latest.min.js"></script>

<style>
html {
  margin: 0;
  padding: 0;
}
body {
  width: 800px;
  margin: 0 auto;
  font-size: 10pt;
}
header, section, article, aside, footer {
  display: block;
}
header {
  width: 900px;
  height: 110px;
  color: #200f08;
  padding-left: 10px;
  padding-right: 10px;
  background: #bfc9dd;
}
h1 {
  font-size: 32pt;
  text-align: left;
  text-transform: uppercase;
  padding-top: 15px;
  padding-left: 15px;
  text-shadow: 1px 1px 2px #fff; 
}
nav {  
  left: 0;  
}
nav ul {  
  margin: 0 auto;  
  list-style: none;  
}  
nav ul li {  
  float: left;  
}  
nav ul li a {  
  display: block;  
  margin-right: 20px;  
  width: 140px;  
  font-size: 14px;
  line-height: 4px;  
  text-align: center;  
  text-decoration: none;  
  color: #777;  
}  
nav ul li a:hover {  
  color: #fff;  
}  
nav ul li.selected a {  
  color: #fff;  
}  
nav ul li.subscribe a {  
  margin-left: 22px;  
  padding-left: 33px;  
}  
section {
  float: left;
  width: 895px;
  min-height: 400px;
  padding-top: 20px;
  padding-left: 20px;
  margin: 0px;
  border-left: 2px dotted #bfc9dd;
  border-right: 2px dotted #bfc9dd;
}

article {
  margin-top: 10px;
  border-bottom: 2px dotted #bfc9dd;
}
footer{
  clear: both;
  width: 900px;
  height: 50px;
  padding: 10px;
  color: #200f08 ;
  background: #bfc9dd;
}
</style>

<style type="text/css">
  #abgne_float_ad {
    display: none;
    position: absolute;
  }
  #abgne_float_ad .abgne_close_ad {
    display: block;
    text-align: right;
    cursor: pointer;
    font-size: 12px;
  }
  #abgne_float_ad a img {
    border: none;
  }
  div.bigDiv {
    height: 3000px;
  }
</style>
<script type="text/javascript">
  // 當網頁載入完
  $(window).load(function(){
    var $win = $(window),
      $ad = $('#abgne_float_ad').css('opacity', 0).show(),  // 讓廣告區塊變透明且顯示出來
      _width = $ad.width(),
      _height = $ad.height(),
      _diffY = 20, _diffX = 20, // 距離右及上方邊距
      _moveSpeed = 800; // 移動的速度
    
    // 先把 #abgne_float_ad 移動到定點
    $ad.css({
      top: _diffY,  // 往上
      left: $win.width() - _width - _diffX,
      opacity: 1
    });
    
    // 幫網頁加上 scroll 及 resize 事件
    $win.bind('scroll resize', function(){
      var $this = $(this);
      
      // 控制 #abgne_float_ad 的移動
      $ad.stop().animate({
        top: $this.scrollTop() + _diffY,  // 往上
        left: $this.scrollLeft() + $this.width() - _width - _diffX
      }, _moveSpeed);
    }).scroll();  // 觸發一次 scroll()
    
    // 關閉廣告
    $('#abgne_float_ad .abgne_close_ad').click(function(){
      $ad.hide();
    });
  });
</script>
<script>window["_GOOG_TRANS_EXT_VER"] = "1";</script>

</head>

<body>

<div id="abgne_float_ad" style="opacity: 1; display: block; top: 20px; left: 1723px;">
    <span class="abgne_close_ad">關閉廣告 [X]</span>
    <a href="/indexview.php">
      <img src="./網頁捲軸滾動式廣告_files/course_javascript.gif" title="超猛電影系統">
    </a>
  </div>


<?php
@$c_i = $_SESSION['c_id'];
if($c_i != null)
{
  ?>
<header>
  <h1>super movie system</h1>
  <nav>
    <ul>
      <li><a  href="/indexview.php">回首頁</a></li>
      <li><a  href="/view.php">排行榜</a></li>
      <li><a  href="/ticket.php">我要訂票</a></li>
      <li><a  href="/movie.php">戲院總覽</a></li>
      <li><a  href="/logout.php">登出</a> </li>

    </ul>
  </nav>
</header>
<section>
  <article>
    <h2>歡迎超猛電影系統</h2>

 </div>

 <table>
 <col class="c1" />
<col class="c2" /> <col class="c3" />
 <col class="c4" />
 <col class="c5" />
<col class="c6" />
 <thead>
 <tr>
 <th class="c1">
本週 </th>
<th class="c2">
上週</th> <th class="c3">片名</th>
 <th class="c4">
上映週數 </th>
 <th class="c5">預告片</th>
 <th class="c6">網友滿意度</th>
 </tr>
 </thead>
 <tfoot>
 <tr>
<td colspan="6">統計時間：2014-06-14 ~ 06-15</td>
 </tr>
 </tfoot>
 <tbody>
 <tr class="first">  <td class="c1">
 <span class="same">1</span> </td>
<td class="c2">
1</td> <td class="c3">
 <div class="item clearfix">
 <div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5068"><img src="https://s.yimg.com/fp/mpost2/50/68/5068.jpg" title="明日邊界"></a> </div>
 <div class="text">
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5068" class="title">明日邊界</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5068">EDGE OF TOMORROW</a>
 </div>
 </div>
 </td>
 <td class="c4" style="font-size: 12px">
3 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5068>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_45.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="same">2</span> </td>
<td class="c2">
2</td> <td class="c3">
 <div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5019"><img src="https://s.yimg.com/fp/mpost2/50/19/5019.jpg" title="黑魔女：沉睡魔咒"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5019">黑魔女：沉睡魔咒</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5019">MALEFICENT</a>
 </td>
 <td class="c4" style="font-size: 12px">
3 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5019>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_45.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="same">3</span> </td>
<td class="c2">
3</td> <td class="c3">
 <div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=4983"><img src="https://s.yimg.com/fp/mpost2/49/83/4983.jpg" title="X戰警：未來昔日"/></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=4983">X戰警：未來昔日</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=4983">X-MEN: DAYS OF FUTURE PAST</a>
 </td>
 <td class="c4" style="font-size: 12px">
4 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=4983>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_45.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="same">4</span> </td>
<td class="c2">
4</td> <td class="c3">
 <div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5130"><img src="https://s.yimg.com/fp/mpost2/51/30/5130.jpg" title="百萬種硬的方式"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5130">百萬種硬的方式</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5130">A Million Ways to Die in the West</a>
 </td>
 <td class="c4" style="font-size: 12px">
2 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5130>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_35.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="new">5</span> </td>
<td class="c2">
</td> <td class="c3">
 <div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5073"><img src="https://s.yimg.com/fp/mpost2/50/73/5073.jpg" title="當我們混在一起"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5073">當我們混在一起</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5073">Blended</a>
 </td>
 <td class="c4" style="font-size: 12px">
1 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5073>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_45.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="new">6</span> </td>
<td class="c2">
</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5197"><img src="https://s.yimg.com/fp/mpost2/51/97/5197.jpg" title="去看小洋蔥媽媽"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5197">去看小洋蔥媽媽</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5197">Pecoross’ Mother And Her Days</a>
 </td>
 <td class="c4" style="font-size: 12px">
1 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5197>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="new">7</span> </td>
<td class="c2">
</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5215"><img src="https://s.yimg.com/fp/mpost2/52/15/5215.jpg" title="愛在墾丁─痞子遇到愛"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5215">愛在墾丁─痞子遇到愛</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5215">PEACE IN LOVE</a>
 </td>
 <td class="c4" style="font-size: 12px">
1 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5215>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_45.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="new">8</span> </td>
<td class="c2">
</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5214"><img src="https://s.yimg.com/fp/mpost2/52/14/5214.jpg" title="心靈勇者"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5214">心靈勇者</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5214">The Railway Man</a>
 </td>
 <td class="c4" style="font-size: 12px">
1 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5214>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="down">9</span> </td>
<td class="c2">
5</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5067"><img src="https://s.yimg.com/fp/mpost2/50/67/5067.jpg" title="哥吉拉"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5067">哥吉拉</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5067">GODZILLA 3D</a>
 </td>
 <td class="c4" style="font-size: 12px">
5 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5067>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="down">10</span> </td>
<td class="c2">
6</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5171"><img src="https://s.yimg.com/fp/mpost2/51/71/5171.jpg" title="為愛璀璨：永遠的葛麗絲"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5171">為愛璀璨：永遠的葛麗絲</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5171">Grace Of Monaco</a>
 </td>
 <td class="c4" style="font-size: 12px">
2 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5171>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="new">11</span> </td>
<td class="c2">
</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5188"><img src="https://s.yimg.com/fp/mpost2/51/88/5188.jpg" title="詭影訪客"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5188">詭影訪客</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5188">Alien Abduction</a>
 </td>
 <td class="c4" style="font-size: 12px">
1 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5188>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_3.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="new">12</span> </td>
<td class="c2">
</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5246"><img src="https://s.yimg.com/fp/mpost2/52/46/5246.jpg" title="輝耀姬物語"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5246">輝耀姬物語</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5246">The Tale of the Princess Kaguya</a>
 </td>
 <td class="c4" style="font-size: 12px">
1 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5246>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="new">13</span> </td>
<td class="c2">
</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5260"><img src="https://s.yimg.com/fp/mpost2/52/60/5260.jpg" title="竊聽風雲3：土豪爭霸"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5260">竊聽風雲3：土豪爭霸</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5260">Overheard 3</a>
 </td>
 <td class="c4" style="font-size: 12px">
1 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5260>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="down">14</span> </td>
<td class="c2">
8</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5114"><img src="https://s.yimg.com/fp/mpost2/51/14/5114.jpg" title="全面突襲2：拳力進擊"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5114">全面突襲2：拳力進擊</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5114">The Raid 2: Berandal</a>
 </td>
 <td class="c4" style="font-size: 12px">
2 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5114>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="new">15</span> </td>
<td class="c2">
</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5166"><img src="https://s.yimg.com/fp/mpost2/51/66/5166.jpg" title="東京小屋的回憶"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5166">東京小屋的回憶</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5166">The Little House</a>
 </td>
 <td class="c4" style="font-size: 12px">
1 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5166>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_35.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="down">16</span> </td>
<td class="c2">
15</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5190"><img src="https://s.yimg.com/fp/mpost2/51/90/5190.jpg" title="到不了的地方"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5190">到不了的地方</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5190">Anywhere,Somewhere,Nowhere</a>
 </td>
 <td class="c4" style="font-size: 12px">
4 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5190>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="down">17</span> </td>
<td class="c2">
13</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5222"><img src="https://s.yimg.com/fp/mpost2/52/22/5222.jpg" title="夢饗米其林"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5222">夢饗米其林</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5222">SPINNING PLATES</a>
 </td>
 <td class="c4" style="font-size: 12px">
2 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5222>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_35.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="down">18</span> </td>
<td class="c2">
11</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5212"><img src="https://s.yimg.com/fp/mpost2/52/12/5212.jpg" title="撞鬼那件小事"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5212">撞鬼那件小事</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5212">Omg</a>
 </td>
 <td class="c4" style="font-size: 12px">
3 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5212>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr>  <td class="c1">
 <span class="down">19</span> </td>
<td class="c2">
11</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5212"><img src="https://s.yimg.com/fp/mpost2/52/12/5212.jpg" title="撞鬼那件小事"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5212">撞鬼那件小事</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5212">Omg</a>
 </td>
 <td class="c4" style="font-size: 12px">
3 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5212>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_4.gif" /></td>
 </tr>
  <tr class="alt">  <td class="c1">
 <span class="down">20</span> </td>
<td class="c2">
7</td> <td class="c3">
<div class="img">
 <a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5108"><img src="https://s.yimg.com/fp/mpost2/51/08/5108.jpg" title="急凍行者（上卷）"></a> </div>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5108">急凍行者（上卷）</a>
<a href="https://tw.rd.yahoo.com/referurl/movie/moviechart/movieinfo/*https://tw.movies.yahoo.com/movieinfo_main.html/id=5108">Iceman</a>
 </td>
 <td class="c4" style="font-size: 12px">
2 </td>
<td class="c5"><span class="trailer"><a  href=https://tw.rd.yahoo.com/referurl/movie/moviechart/trailer/*https://tw.movies.yahoo.com/movieinfo_trailer.html/id=5108>預告片</a></span>
</td>
<td class="c6"><img src="https://s.yimg.com/f/i/tw/movie/i6/rating_star_35.gif" /></td>
 </tr>
  </tbody>
 </table>
 </div>
 </div>
 <div class="ft">
 <div><!--footer--></div>
 </div>
</div>
 
  </article>
</section>

<footer>
  <small></small>
</footer>
<?php } 
else
{
//        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        echo "<script>alert('您無權限觀看此頁面!');location='index.html';</script>";
}
?>
</body>
</html>
