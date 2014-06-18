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
section h2 {
  font-size: 14pt;
  font-weight: lighter;
  text-transform: uppercase;
  color: #493831;
  padding-bottom: 10px;
  margin: 0;
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
     
    <div class="clear">
    </div>
    <div id="container2">
        <div class="bxBg1">
            <div class="pd box_title taiwanHallList bd2">

                <div class="class_search">
                    <div class="twhall">
                        <hr>
                        <h3>
                            台北戲院<a name="a"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                    <td>
                                        信義威秀影城
                                    </td>
                                    <td>
                                        (02)8780-5566
                                    </td>
                                    <td>
                                        台北市信義區松壽路18號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        喜滿客京華影城
                                    </td>
                                    <td>
                                        (02)3762-2001
                                    </td>
                                    <td>
                                        台北市八德路四段138號B1
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.cinemark.com.tw/">http://www.cinemark.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國賓影城微風廣場
                                    </td>
                                    <td>
                                        (02)8772-1234
                                    </td>
                                    <td>
                                        台北市松山區復興南路一段39號10樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ambassador.com.tw/">http://www.ambassador.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        總督戲院
                                    </td>
                                    <td>
                                        (02)274-15991&nbsp;
                                    </td>
                                    <td>
                                        台北市松山區長安東路二段219號3樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.governor.com.tw/">http://www.governor.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        哈拉影城
                                    </td>
                                    <td>
                                        (02)2632-2693
                                    </td>
                                    <td>
                                        台北市內湖區康寧路三段72號6樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.halarlife.com.tw/cinemas/popular.asp">http://www.halarlife.com.tw/cinemas/popular.asp</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        大千電影院
                                    </td>
                                    <td>
                                        (02)8770-6565
                                    </td>
                                    <td>
                                        台北市松山區南京東路三段133號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.westin.com.tw/">http://www.westin.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        梅花數位影院
                                    </td>
                                    <td>
                                        (02)2732-6968&#12288;
                                    </td>
                                    <td>
                                        台北市和平東路3段63號2F
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.movie.com.tw/blossom/">http://www.movie.com.tw/blossom/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        新光影城
                                    </td>
                                    <td>
                                        (02)2314-6668
                                    </td>
                                    <td>
                                        台北市萬華區西寧南路36號4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.skcineplex.com.tw/">http://www.skcineplex.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        豪華大戲院
                                    </td>
                                    <td>
                                        (02)2331-5077<br>
                                    </td>
                                    <td>
                                        台北市萬華區武昌街二段89號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.in89.com.tw/website_module.php?website_module_classify_sn=39">
                                            http://www.in89.com.tw/website_module.php?website_module_classify_sn=39</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國賓大戲院西門
                                    </td>
                                    <td>
                                        (02)2361-1223
                                    </td>
                                    <td>
                                        台北市萬華區成都路88號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ambassador.com.tw/">http://www.ambassador.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        樂聲數位影城
                                    </td>
                                    <td>
                                        (02)2311-8628
                                    </td>
                                    <td>
                                        台北市萬華區武昌街二段85號2樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        日新威秀影城
                                    </td>
                                    <td>
                                        (02)2331-5256
                                    </td>
                                    <td>
                                        台北市萬華區武昌街二段87號2樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        絕色電影城
                                    </td>
                                    <td>
                                        (02)2381-1339
                                    </td>
                                    <td>
                                        台北市萬華區漢中街52號10樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.cinema7.com.tw/c7_2008/index.aspx">http://www.cinema7.com.tw/c7_2008/index.aspx</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        今日秀泰影城
                                    </td>
                                    <td>
                                        (02)2771-1316
                                    </td>
                                    <td>
                                        台北市西門町峨嵋街52號4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://showtimes.pixnet.net/blog">http://showtimes.pixnet.net/blog</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        京站威秀影城
                                    </td>
                                    <td>
                                        (02)2552-5511
                                    </td>
                                    <td>
                                        台北市大同區市民大道一段209號5樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        龍祥百老匯影城
                                    </td>
                                    <td>
                                        (02)8663-6128&nbsp;
                                    </td>
                                    <td>
                                        台北市文山區羅斯福路四段200號 4 樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.broadway-cineplex.com.tw/index.asp">http://www.broadway-cineplex.com.tw/index.asp</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        東南亞電影廣場
                                    </td>
                                    <td>
                                        (02)2367-8999
                                    </td>
                                    <td>
                                        台北市中正區羅斯福路四段 136 巷 3 號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.cineplaza.com.tw/">http://www.cineplaza.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國賓影城長春廣場
                                    </td>
                                    <td>
                                        (02)2515-5757
                                    </td>
                                    <td>
                                        台北市長春路176號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ambassador.com.tw/">http://www.ambassador.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        欣欣秀泰
                                    </td>
                                    <td>
                                        (02)2537-1889
                                    </td>
                                    <td>
                                        台北市中山區林森北路247號4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://showtimes.pixnet.net/blog">http://showtimes.pixnet.net/blog</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        美麗華大直影城
                                    </td>
                                    <td>
                                        (02)8502-2208
                                    </td>
                                    <td>
                                        台北市中山區敬業三路22號6樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.miramarcinemas.com.tw/">http://www.miramarcinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        美麗華天母影城
                                    </td>
                                    <td>
                                        (02)2876-3300
                                    </td>
                                    <td>
                                        台北市士林區忠誠路二段202號4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.miramarcinemas.com.tw/">http://www.miramarcinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        陽明戲院
                                    </td>
                                    <td>
                                        (02)2881-4636
                                    </td>
                                    <td>
                                        台北市士林區文林路113號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        光點
                                    </td>
                                    <td>
                                        (02)2511-7786
                                    </td>
                                    <td>
                                        台北市中山區中山北路2段18號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.spot.org.tw/">http://www.spot.org.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        朝代戲院
                                    </td>
                                    <td>
                                        (02)2557-1300
                                    </td>
                                    <td>
                                        台北市大同區民權西路136號4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.dynasty-theater.com/">http://www.dynasty-theater.com/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        真善美劇院
                                    </td>
                                    <td>
                                        (02)2331-2270
                                    </td>
                                    <td>
                                        北市萬華區漢中街116號7樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.movie.com.tw/wonderful/">http://www.movie.com.tw/wonderful/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        佳佳戲院
                                    </td>
                                    <td>
                                        (02)2933-0333#9
                                    </td>
                                    <td>
                                        台北市文山區羅斯福路6段403號4樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        光明戲院
                                    </td>
                                    <td>
                                        (02)2936-7833&nbsp;
                                    </td>
                                    <td>
                                        台北市文山區木柵路一段260巷1號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        湳山戲院
                                    </td>
                                    <td>
                                        (02)2702-3130&nbsp;
                                    </td>
                                    <td>
                                        台北市大安區通化街24巷1號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        幸福大戲院
                                    </td>
                                    <td>
                                        (02)2286-5540
                                    </td>
                                    <td>
                                        新北市三重區三和路四段163巷12號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://xing-fu.myweb.hinet.net/">http://xing-fu.myweb.hinet.net/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        板橋大遠百威秀
                                    </td>
                                    <td>
                                        (02)7738-6608
                                    </td>
                                    <td>
                                        新北市板橋區新站路28號10樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        鴻金寶麻吉影城
                                    </td>
                                    <td>
                                        (02)2207-0222
                                    </td>
                                    <td>
                                        新北市新莊區民安路188巷5號4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://machicinema.wordpress.com/">http://machicinema.wordpress.com/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        天台戲院
                                    </td>
                                    <td>
                                        (02)2978-7700
                                    </td>
                                    <td>
                                        新北市三重區重新路二段78號4F
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.t-movies.com.tw/">http://www.t-movies.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國賓環球影城
                                    </td>
                                    <td>
                                        (02)2226-8088&nbsp;
                                    </td>
                                    <td>
                                        新北市中和區中山路三段122號4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ambassador.com.tw/">http://www.ambassador.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        新店國賓影城
                                    </td>
                                    <td>
                                        (02)2918-0003
                                    </td>
                                    <td>
                                        新北市新店區光明街86號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ambassador.com.tw/">http://www.ambassador.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        林園電影城
                                    </td>
                                    <td>
                                        (02)2960-5333
                                    </td>
                                    <td>
                                        新北市板橋區館前西路158號1樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        白雪戲院
                                    </td>
                                    <td>
                                        (02)2375-2643
                                    </td>
                                    <td>
                                        台北市漢口街2段54號9F
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            基隆戲院<a name="b"></a></h3>
                       <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                            	    <tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        基隆秀泰電影城
                                    </td>
                                    <td>
                                        (02)2421-2388
                                    </td>
                                    <td>
                                        基隆市中正區信一路177號7-10F
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://showtimes.pixnet.net/blog">http://showtimes.pixnet.net/blog</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        新樂秀泰影城
                                    </td>
                                    <td>
                                        (02)2424-5015
                                    </td>
                                    <td>
                                        基隆市中山區義二路26號
                                    </td>
                                    <td>
                                        <a href="http://showtimes.pixnet.net/blog">http://showtimes.pixnet.net/blog</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            桃園戲院<a name="c"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        臺茂美麗華
                                    </td>
                                    <td>
                                        (03)311-3123
                                    </td>
                                    <td>
                                        桃園縣蘆竹鄉南崁路一段112號7樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.miramarcinemas.com.tw/">http://www.miramarcinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        SBC星橋國際影城
                                    </td>
                                    <td>
                                        (03)468-0100
                                    </td>
                                    <td>
                                        桃園縣中壢市中園路二段509號6樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.sbc-cinemas.com.tw/">http://www.sbc-cinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        中壢威尼斯影城
                                    </td>
                                    <td>
                                        (03)2805-018
                                    </td>
                                    <td>
                                        桃園縣中壢市九和一街48號3樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.venice-cinemas.com.tw/">http://www.venice-cinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        統領戲院
                                    </td>
                                    <td>
                                        (03)3329398&nbsp;
                                    </td>
                                    <td>
                                        桃園縣桃園市中正路56號3、5樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        中源大戲院
                                    </td>
                                    <td>
                                        (03)456-2414&nbsp;
                                    </td>
                                    <td>
                                        桃園縣中壢市日新路97號3樓之1
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        民和戲院
                                    </td>
                                    <td>
                                        (03)377-7437
                                    </td>
                                    <td>
                                        桃園縣八德市廣福路80號3樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            新竹戲院<a name="d"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        新竹大遠百威秀影城
                                    </td>
                                    <td>
                                        (03)524-1166
                                    </td>
                                    <td>
                                        新竹市東區西大路323號8樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國際大戲院
                                    </td>
                                    <td>
                                        (03)5222134&nbsp;
                                    </td>
                                    <td>
                                        新竹市文昌街39號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.starmovie.com.tw/">http://www.starmovie.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國際影城中興館
                                    </td>
                                    <td>
                                        (03)5237077&nbsp;
                                    </td>
                                    <td>
                                        新竹市東區林森路32號7樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.starmovie.com.tw/">http://www.starmovie.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        新復珍戲院
                                    </td>
                                    <td>
                                        (03)524-8285&nbsp;
                                    </td>
                                    <td>
                                        新竹市北門街6號1樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        金寶大戲院
                                    </td>
                                    <td>
                                        (03)555-8004&nbsp;
                                    </td>
                                    <td>
                                        新竹縣竹北市中正東路488號3樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            苗栗戲院<a name="e"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國興戲院
                                    </td>
                                    <td>
                                        (03)732-0363
                                    </td>
                                    <td>
                                        苗栗縣苗栗市勝利里國際一巷3號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        東聲電影院
                                    </td>
                                    <td>
                                        (03)766-4735&nbsp;
                                    </td>
                                    <td>
                                        苗栗縣頭份鎮中華路1091號3樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            台中戲院<a name="f"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        台中大遠百威秀影城
                                    </td>
                                    <td>
                                        (04)2258-8511
                                    </td>
                                    <td>
                                        台中市台中港路二段105號13樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tiger City威秀影城
                                    </td>
                                    <td>
                                        (04)3608-5566
                                    </td>
                                    <td>
                                        台中市西屯區河南路三段120號4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ccmovie.com.tw/">http://www.ccmovie.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tiger City威秀影城Gold Class頂級影廳
                                    </td>
                                    <td>
                                        (04)3608-5566
                                    </td>
                                    <td>
                                        台中市西屯區河南路三段120-1號4-6樓及1號3樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ccmovie.com.tw/">http://www.ccmovie.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        日新大戲院
                                    </td>
                                    <td>
                                        (04)2223-6757
                                    </td>
                                    <td>
                                        台中市中華路一段58號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.srm.com.tw/">http://www.srm.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        親親數位影城
                                    </td>
                                    <td>
                                        (04)2231-9111
                                    </td>
                                    <td>
                                        台中市北區北屯路14號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ccmovie.com.tw/">http://www.ccmovie.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        豐源國際影城
                                    </td>
                                    <td>
                                        (04)2526-0036&nbsp;
                                    </td>
                                    <td>
                                        台中縣豐原市中正路137號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        新光影城
                                    </td>
                                    <td>
                                        (04)2258-9911
                                    </td>
                                    <td>
                                        台中市西屯區中港路二段111號13樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        全球影城
                                    </td>
                                    <td>
                                        (04)2224-2588
                                    </td>
                                    <td>
                                        台中市西區中華路一段1號之1
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ucc-cinema.com.tw/">http://www.ucc-cinema.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        萬代福戲院
                                    </td>
                                    <td>
                                        (04)2221-0356
                                    </td>
                                    <td>
                                        台中市中區公園路38號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.wdful.com.tw/">http://www.wdful.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        富都3D影城
                                    </td>
                                    <td>
                                        (04)2680-4506
                                    </td>
                                    <td>
                                        台中市大甲區光明路67號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        時代戲院
                                    </td>
                                    <td>
                                        (04)2622-2206
                                    </td>
                                    <td>
                                        台中縣清水鎮光復街65號3F
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.chcinema.com.tw/">http://www.chcinema.com.tw/</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            彰化戲院<a name="g"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        彰化大戲院
                                    </td>
                                    <td>
                                        (04)725-5669&nbsp;
                                    </td>
                                    <td>
                                        彰化縣彰化市中正路二段153號5樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.twcinema.com.tw/">http://www.twcinema.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        台灣戲院
                                    </td>
                                    <td>
                                        (04)722-2213&nbsp;
                                    </td>
                                    <td>
                                        彰化縣彰化市中正路二段48號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        員林電影城
                                    </td>
                                    <td>
                                        (04)835-1667&nbsp;
                                    </td>
                                    <td>
                                        彰化縣員林鎮南昌路39號3樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            南投戲院<a name="h"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        南投戲院
                                    </td>
                                    <td>
                                        (04)9223-4788&nbsp;
                                    </td>
                                    <td>
                                        南投縣南投市大同街87號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        埔里山明戲院
                                    </td>
                                    <td>
                                        (04)9299-7878&nbsp;
                                    </td>
                                    <td>
                                        南投縣埔里鎮中山路二段289號之1
                                    </td>
                                    <td>
                                        -&#12288;
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            雲林戲院<a name="i"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        中華電影城
                                    </td>
                                    <td>
                                        (05)535-4828
                                    </td>
                                    <td>
                                        雲林縣斗六市雲林路二段19號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.tnyn.com/PE0097.htm">http://www.tnyn.com/PE0097.htm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        虎尾白宮影城
                                    </td>
                                    <td>
                                        (05)632-2328
                                    </td>
                                    <td>
                                        雲林縣虎尾鎮中正路257號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.whcinemas.com.tw/">http://www.whcinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        雙子星戲院
                                    </td>
                                    <td>
                                        (05)533-2779
                                    </td>
                                    <td>
                                        雲林縣斗六市民生路98號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.wretch.cc/blog/twinstheater/21681511">http://www.wretch.cc/blog/twinstheater/21681511</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            嘉義戲院<a name="j"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        嘉年華影城
                                    </td>
                                    <td>
                                        (05)225-0289
                                    </td>
                                    <td>
                                        嘉義市東區中山路617號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.3d-movies.tw/">http://www.3d-movies.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        新榮戲院
                                    </td>
                                    <td>
                                        (05)225-5366
                                    </td>
                                    <td>
                                        嘉義市新榮路52號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            台南戲院<a name="k"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        南台數位影城
                                    </td>
                                    <td>
                                        (06)223-2426~7
                                    </td>
                                    <td>
                                        台南市友愛街317號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.nt-movie.com.tw/">http://www.nt-movie.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        台南大遠百威秀影城
                                    </td>
                                    <td>
                                        (06)600-5566
                                    </td>
                                    <td>
                                        台南市中西區公園路60號8樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        台南新光影城
                                    </td>
                                    <td>
                                        (06)303-1260
                                    </td>
                                    <td>
                                        台南市中西區西門路一段658號8樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.skcineplex.com.tw/">http://www.skcineplex.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        今日戲院
                                    </td>
                                    <td>
                                        (06)220-5151
                                    </td>
                                    <td>
                                        台南市中西區中正路249號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.cm-movie.com.tw/front/bin/home.phtml">http://www.cm-movie.com.tw/front/bin/home.phtml</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        全美戲院
                                    </td>
                                    <td>
                                        (06)229-5191
                                    </td>
                                    <td>
                                        台南市中西區永福路二段187號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.cm-movie.com.tw/front/bin/home.phtml">http://www.cm-movie.com.tw/front/bin/home.phtml</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        台南國賓影城
                                    </td>
                                    <td>
                                        (06)234-7166&nbsp;
                                    </td>
                                    <td>
                                        台南市東區中華東路一段66號3樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ambassador.com.tw/">http://www.ambassador.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        麻豆戲院
                                    </td>
                                    <td>
                                        (06)572-2159&nbsp;
                                    </td>
                                    <td>
                                        台南縣麻豆鎮興中路106號3樓
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            高雄戲院<a name="l"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        高雄大遠百威秀影城
                                    </td>
                                    <td>
                                        (07)334-5566
                                    </td>
                                    <td>
                                        高雄市苓雅區三多四路21號13樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        高雄大遠百威秀影城Gold Class頂級影廳
                                    </td>
                                    <td>
                                        (07)334-5566
                                    </td>
                                    <td>
                                        高雄市苓雅區三多四路21號15樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.vscinemas.com.tw/">http://www.vscinemas.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        喜滿客美奇萊影城
                                    </td>
                                    <td>
                                        (07)321-0663
                                    </td>
                                    <td>
                                        高雄市三民區十全一路161號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://maichilai.ehosting.com.tw/">http://maichilai.ehosting.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        三多數位3D影城
                                    </td>
                                    <td>
                                        (07)333-9100
                                    </td>
                                    <td>
                                        高雄市苓雅區三多四路123號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        東亞數位3D影城
                                    </td>
                                    <td>
                                        (07)746-2511 &#12288;
                                    </td>
                                    <td>
                                        高雄縣鳳山市立志街160號之1
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.tonya.com.tw/">http://www.tonya.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        奧斯卡3D數位影城
                                    </td>
                                    <td>
                                        (07)241-2128
                                    </td>
                                    <td>
                                        高雄市新興區仁智街287號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.cannes.com.tw/">http://www.cannes.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        岡山統一戲院
                                    </td>
                                    <td>
                                        (07)622-1669&nbsp;
                                    </td>
                                    <td>
                                        高雄縣岡山鎮壽天路103號之10
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        喜滿客夢時代影城
                                    </td>
                                    <td>
                                        (07)970-2001
                                    </td>
                                    <td>
                                        高雄市前鎮區中華5路789號8樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.cinemark.com.tw/">http://www.cinemark.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國賓影城義大世界
                                    </td>
                                    <td>
                                        (07) 656-8368
                                    </td>
                                    <td>
                                        高雄縣大樹鄉學城路一段12號3樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.ambassador.com.tw/">http://www.ambassador.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        高雄環球數位3D影城
                                    </td>
                                    <td>
                                        (07)722-0066
                                    </td>
                                    <td>
                                        高雄市苓雅區大順三路108號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.u-movie.com.tw/">http://www.u-movie.com.tw/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        和春影城
                                    </td>
                                    <td>
                                        (07)384-7686~8
                                    </td>
                                    <td>
                                        高雄市三民區建興路391號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.kopau.com.tw/6iyprpyu10.html">http://www.kopau.com.tw/6iyprpyu10.html</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        十全電影城
                                    </td>
                                    <td>
                                        (07)311-7141&nbsp;
                                    </td>
                                    <td>
                                        高雄市三民區十全二路21號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.shrchiuan.com.tw/">http://www.shrchiuan.com.tw/</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            宜蘭戲院<a name="m"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        友愛影城
                                    </td>
                                    <td>
                                        (03)931-5035
                                    </td>
                                    <td>
                                        宜蘭縣宜蘭市舊城東路50號7樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://movie.iyuyu.com/">http://movie.iyuyu.com/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        日新戲院
                                    </td>
                                    <td>
                                        (03)954-2835
                                    </td>
                                    <td>
                                        宜蘭縣羅東鎮中山西街17號之1
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://movie.iyuyu.com/">http://movie.iyuyu.com/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        東一戲院
                                    </td>
                                    <td>
                                        (03)956-6677~8
                                    </td>
                                    <td>
                                        宜蘭縣羅東鎮倉前路51號3樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://movie.iyuyu.com/">http://movie.iyuyu.com/</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            花蓮戲院<a name="n"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        花蓮秀泰影城
                                    </td>
                                    <td>
                                        (03)833-7118&nbsp;
                                    </td>
                                    <td>
                                        花蓮縣花蓮市國聯五路69號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        豪華戲院
                                    </td>
                                    <td>
                                        (03)832-4380
                                    </td>
                                    <td>
                                        花蓮縣花蓮市明義街41號
                                    </td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            屏東戲院<a name="o"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        中影屏東影城
                                    </td>
                                    <td>
                                        (08)732-2043&#12288;&#12288;
                                    </td>
                                    <td>
                                        屏東市民生路248號3、4樓
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.movie.com.tw/ptcinema/">http://www.movie.com.tw/ptcinema/</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        國寶戲院
                                    </td>
                                    <td>
                                        (08)732-6767
                                    </td>
                                    <td>
                                        屏東縣屏東市民權路5號之3
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.kopau.com.tw/">http://www.kopau.com.tw/</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            澎湖戲院<a name="p"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        澎湖中興電影城
                                    </td>
                                    <td>
                                        (06)926-5681&nbsp;
                                    </td>
                                    <td>
                                        澎湖縣馬公市文康街37號
                                    </td>
                                    <td>
                                        -&#12288;
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                        <hr>
                        <h3>
                            台東戲院<a name="q"></a></h3>
                        <table cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th width="16%">
                                        戲院名稱
                                    </th>
                                    <th width="15%">
                                        連絡電話
                                    </th>
                                    <th width="30%">
                                        地址
                                    </th>
                                    <th>
                                        官網
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                                    <td>
                                        　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　
                                    </td>
                                    <td>
                                        　　　　　　　　　　　　　　　　　　　　　　
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        台東秀泰影城
                                    </td>
                                    <td>
                                        電話:089-320-388&nbsp;傳真:089-324-567
                                    </td>
                                    <td>
                                        台東縣台東市鐵花里5鄰新生路93號
                                    </td>
                                    <td>
                                        <a target="_blank" href="http://www.showtimes.com.tw/showtimeASP/tickets.aspx">http://www.showtimes.com.tw/showtimeASP/tickets.aspx</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="blank12">
                        </div>
                    </div>
                    <!-- twhall:end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container:end -->
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