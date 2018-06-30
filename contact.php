<!DOCTYPE html>
<html lang="en">

<head>
<? include_once "template/head.php"?>

  <title>Document</title>
</head>

<body>
<? include_once "template/header.php"?>

  <main id="contact">
    <div class="content">
      <div id="map" class="googlemap" data-lat="25.052278" data-lng=" 121.5354296"></div>
      <div class="row contact-info">
        <!-- 信箱 -->
        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="info">
            <div class="com">
              統領
            </div>
            <div class="mail">
              sales-servise@adminaadmin.com.tw
            </div>
            <div class="com">
              統利
            </div>
            <div class="mail">
              sales-servise@adminaadmin.com.tw
            </div>
          </div>
        </div>
        <!-- 聯絡電話 -->
        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-phone"></i>
          </div>
          <div class="info">
            <div class="com">
              統領
            </div>
            <div class="mail">
              sales-servise@adminaadmin.com.tw
            </div>
            <div class="com">
              統利
            </div>
            <div class="mail">
              sales-servise@adminaadmin.com.tw
            </div>
          </div>
        </div>
        <!-- 地址 -->
        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-warning"></i>
          </div>
          <div class="info">
            104 台北市南京東路二段137號8樓
            <br> 服務時間：週一 ~ 週五 / 09:00~17:30
          </div>
        </div>
      </div>
      <div class="row btm">

        <!-- 聯絡區塊 -->
        <div class="col-md-5">
          <h2>與我們聯絡</h2>
          <div class="desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat sed nostrum pariatur in, soluta molestias adipisci architecto
            neque est ducimus culpa repudiandae recusandae eligendi impedit ullam reiciendis libero, perspiciatis aliquid.
          </div>
          <a href="" class="youtube" target="_blank">
            <i class="fa fa-youtube-play"></i>
          </a>
        </div>
        <!-- 表單區塊 -->
        <div class="col-md-7">
          <div class="row no-gutters">
            <div class="col-sm-4 fgroup">
              <input type="text" id="name" class="form-control" placeholder="姓名">
            </div>
            <div class="col-sm-4 fgroup">
              <input type="text" id="phone" class="form-control" placeholder="電話">
            </div>
            <div class="col-sm-4 fgroup">
              <input type="text" id="email" class="form-control" placeholder="電郵">
            </div>
            <div class="col-sm-12 fgroup">
              <input type="text" id="title" class="form-control" placeholder="主旨 / 需求航空">
            </div>
            <div class="col-sm-12 fgroup">
              <textarea name="" id="message" cols="30" rows="6" class="form-control" placeholder="內容"></textarea>
              <input type="hidden" id="response">
            </div>
          </div>
          <div id="send" class="btn btn-primary">傳送</div>
          <div class='captcha'>
            <div id="my-widget"></div>
          </div>
        </div>
      </div>
    </div>
  </main>
<? include_once "template/footer.php"?>
  
</body>

</html>
<? include_once "template/js.php"?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6R-j6QUGy31AmQSwOMonQo-y7leSviBg&callback=initialize"></script>
<script src="dist/map.js"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=zh-tw&onload=onloadCallback&render=explicit" async defer></script>
<script>
  var onloadCallback = function () {
    grecaptcha.render(
      'my-widget', {
        'sitekey': '6Le1OlIUAAAAAJpoJCdPAeeGYrWvIQJ1UF0614PV',  		// API Key
        'callback': verifyCallback,            // 要呼叫的回調函式
        'theme': 'light'                       // 主題
      }
    );
  };
  var verifyCallback = function (response) {
    // 如果 JavaScript 驗證成功
    if (response)
      $('#response').val(response);
  };
  $("#send").click(function () {
    $.post('quote/php_control.php?action=send', {
      'response': $("#response").val(),
      'name': $("#name").val(),
      'mail': $("#mail").val(),
      'message': $("#message").val(),
      'subject': $("#subject").val()
    }, function (data, status) {
      // 如果 PHP 驗證成功
      console.log(data);
      console.log(data.code);
      console.log(data.status);
      if (data.status) {
        $("#status").html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" ria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="glyphicon glyphicon-ok"></strong>   ' + data.code + '</div>');
      }
      else {
        $("#status").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" ria-label="Close"><span aria-hidden="true">&times;</span></button><strong class="glyphicon glyphicon-remove"></strong>   ' + data.code + '</div>');
      }
    });
  })
</script>