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
  <h1>超猛電影系統</h1>
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
     <div class="schbar_mv clearfix"> <a href="https://tw.rd.yahoo.com/referurl/movie/hp/theaterlist/*https://tw.movies.yahoo.com/theater_list.html" class="overview" hpp="nav-theater-list">戲院總覽</a> <form method="get" action="/moviesearch_result.html" hpp="nav-movie-search">


 </div>
  </article>
  <article>
    <h2>服務說明</h2>
    <p>程式設計之家提供專業的公司或個人架站服務，
       包含公司網站、銷售平台、部落格、臉書等，
       提供全方位網站資源架設和網路行銷。</p>
    <p>程式設計之家也提供相關技術的顧問服務，
       不論是客戶端或伺服端網頁設計技術、資料庫
       或行動平台的網站或應用程式開發，
       都提供全方位的技術服務。</p>
    <p><a href="/Services/">更多服務</a></p>
  </article>
</section>
<aside>
  <h2>相關資源網站</h2>
  <ul>
   <li><a href="">HTML 5教學網站</a></li>
   <li><a href="">JavaScript教學網站</a></li>
   <li><a href="">CSS教學網站</a></li>
  </ul>
  <p><a  href="/Resources/">更多資源</a></p>
</aside>
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