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


<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<script type="text/javascript" src="./交錯式百葉窗切換效果 - 上下進場_files/jquery-latest.min.js"></script>
<title>交錯式百葉窗切換效果 - 上下進場</title>
<style type="text/css">
  #abgne-block-20120527 {
    width: 357px; /* 圖片的寬 */
    height: 512px; /* 圖片的高 */
    overflow: hidden;
  }
  #abgne-block-20120527 a {
    position: absolute;
    top: 0; 
    left: 0;
  }
  #abgne-block-20120527 a img {
    border: none;
  }

  /* 以下是針對選單按鈕設定 */
  #abgne-block-20120527 .abgne-controls {
    list-style: none; 
    position: absolute;
    margin: 0;
    padding: 0;
    left: 30px;
    bottom: 40px;
    height: 20px;
  }
  #abgne-block-20120527 .abgne-controls li {
    float: left;
    width: 35px;
    height: 35px;
    line-height: 35px;
    font-size: 20px;
    font-weight: 900;
    text-align: center;
    cursor: pointer;
    margin-right: 2px;
    color: #0cf;
    background-color: #fff;
  }
  #abgne-block-20120527 .abgne-controls li.current { 
    color: #fff;
    background-color: #0cf;
  }
</style>
<script type="text/javascript">
  $(function(){
    // 先取得 #abgne-block-20120527 及其相關區塊及元素
    // 並依計算出每等份的寬度
    var _slices = 9,  // 切成幾等份
      _index = 0,   // 預設顯示第幾個
      _zIndex = 999, 
      $block = $('#abgne-block-20120527').css('position', 'relative'), 
      $slides = $block.find('a').css('z-index', _zIndex).hide(), 
      _width = $block.width(), 
      _height = $block.height(), 
      _sliceWidth = _width / _slices, // 每等份的寬度
      _lastSliceWidth = _sliceWidth + (_width - _sliceWidth * _slices), // 剩於的寬度
      _img = $slides.eq(_index).show().find('img').attr('src'), 
      timer, 
      speed = 2000, // 輪播速度
      _animateSpeed = 600,  // 動畫速度
      _isHover = false, // 滑鼠是否移到 $block 上
      _isComplete = true; // 動畫是否已全部執行完

    // 依 _slices 數量來產生相對應的 div 區塊
    var _sliceDiv = '', _control = '';
    for(var i=0;i<_slices;i++){
      var _w = i == _slices - 1 ? _lastSliceWidth : _sliceWidth, _l = i * _sliceWidth;
      _sliceDiv += '<div class="abgne-slice slide-' + i + '" style="left:' + _l + 'px;top:0;width:' + _w + 'px;height:100%;background-image:url(' + _img + ');background-position:-' + _l + 'px 0;position:absolute;background-repeat:no-repeat;"></div>';
    }
    
    // 依 $slides 數量來產生按鈕
    for(var i=0;i<$slides.length;i++){
      _control += '<li class="abgne-control control-' + (i + 1) + '">' + (i + 1) + '</li>';
    }
    
    // 分別把 div 區塊及按鈕加入到 $block 中
    var $abgneSlides = $block.append(_sliceDiv, '<ul class="abgne-controls">' + _control + '</ul>').find('.abgne-slice'), 
      $abgneControls = $block.find('.abgne-controls').css('z-index', _zIndex + 2).find('li').eq(_index).addClass('current').end();
    
    // 當點擊到 .abgne-controls li 時
    $abgneControls.click(function(){
      // 若動畫未完成前不接受其它新的事件
      if(!_isComplete) return;
      
      var $this = $(this), 
        $slide = $slides.eq($this.index()), 
        _completeTotal = 0;
      
      // 若現在顯示的跟點擊到的是同一個時, 就不處理
      if($this.hasClass('current')) return;

      // 幫點擊到的 li 加上 .current, 並移除上一個 .current 
      $this.addClass('current').siblings('.current').removeClass('current');
      _isComplete = false;
      _index = $this.index();
      
      // 取得相對應的圖片的路徑
      _img = $slide.find('img').attr('src');
      // 先讓每一個區塊的背景圖片為剛剛取得的圖片
      // 並進行動畫
      $abgneSlides.each(function(i){
        var $ele = $(this);
        $ele.css({
          top: i % 2 == 0 ? _height : -_height,
          opacity: 0, 
          zIndex: _zIndex + 1, 
          backgroundImage: 'url(' + _img + ')'
        }).stop().animate({
          top: 0, 
          opacity: 1
        }, _animateSpeed, function(){
          $ele.css('zIndex', _zIndex - 1);
          if(i == _slices - 1){
            $block.css('background-image', 'url(' + _img + ')');
            $slide.show().siblings('a:visible').hide();
            _isComplete = true;
            // 當動畫完成且滑鼠沒有移到 $block 上時, 再啟動計時器
            if(!_isHover)timer = setTimeout(auto, speed);
          }
        });
      });
    });
    
    $block.hover(function(){
      // 當滑鼠移入 $block 時停止計時器
      _isHover = true;
      clearTimeout(timer);
    }, function(){
      // 當滑鼠移出 $block 時啟動計時器
      _isHover = false;
      timer = setTimeout(auto, speed);
    });
    
    // 自動輪播使用
    function auto(){
      _index = (_index + 1) % $slides.length;
      $abgneControls.eq(_index).click();
    }
    
    // 啟動計時器
    timer = setTimeout(auto, speed);
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
  </article>
  <article>
    <div id="abgne-block-20120527" style="position: relative;">
    <a href="https://tw.movies.yahoo.com/movieinfo_main.html/id=5068" style="z-index: 999; display: block;"><img src="./交錯式百葉窗切換效果 - 上下進場_files/DSC_0668.JPG"></a>
    <a href="https://tw.movies.yahoo.com/movieinfo_main.html/id=5019" style="z-index: 999; display: none;"><img src="./交錯式百葉窗切換效果 - 上下進場_files/DSC_0952.JPG"></a>
    <a href="https://tw.movies.yahoo.com/movieinfo_main.html/id=4983" style="z-index: 999; display: none;"><img src="./交錯式百葉窗切換效果 - 上下進場_files/DSC_1147.JPG"></a>
    <a href="https://tw.movies.yahoo.com/movieinfo_main.html/id=5130" style="z-index: 999; display: none;"><img src="./交錯式百葉窗切換效果 - 上下進場_files/DSC_1838.JPG"></a>
    <a href="https://tw.movies.yahoo.com/movieinfo_main.html/id=5073" style="z-index: 999; display: none;"><img src="./交錯式百葉窗切換效果 - 上下進場_files/DSC_1882.JPG"></a>
  <div class="abgne-slice slide-0" style="left:0px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-0px 0;position:absolute;background-repeat:no-repeat;"></div><div class="abgne-slice slide-1" style="left:80px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-80px 0;position:absolute;background-repeat:no-repeat;"></div><div class="abgne-slice slide-2" style="left:160px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-160px 0;position:absolute;background-repeat:no-repeat;"></div><div class="abgne-slice slide-3" style="left:240px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-240px 0;position:absolute;background-repeat:no-repeat;"></div><div class="abgne-slice slide-4" style="left:320px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-320px 0;position:absolute;background-repeat:no-repeat;"></div><div class="abgne-slice slide-5" style="left:400px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-400px 0;position:absolute;background-repeat:no-repeat;"></div><div class="abgne-slice slide-6" style="left:480px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-480px 0;position:absolute;background-repeat:no-repeat;"></div><div class="abgne-slice slide-7" style="left:560px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-560px 0;position:absolute;background-repeat:no-repeat;"></div><div class="abgne-slice slide-8" style="left:640px;top:0;width:80px;height:100%;background-image:url(images/DSC_0668.JPG);background-position:-640px 0;position:absolute;background-repeat:no-repeat;"></div><ul class="abgne-controls" style="z-index: 1001;"><li class="abgne-control control-1 current">1</li><li class="abgne-control control-2">2</li><li class="abgne-control control-3">3</li><li class="abgne-control control-4">4</li><li class="abgne-control control-5">5</li></ul></div>
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