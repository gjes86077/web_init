<!DOCTYPE html>
<html lang="en">

<head>
  <?include_once "template/head.php"?>
  <title>Document</title>
</head>

<body>
<?include_once "template/header.php"?>
  <main id="proxy">
    <div class="container">
      <div class="btn active" id="category">
        <i class="fa fa-plane"></i> 其他代理分類
        <i class="fa fa-sort-desc"></i>
      </div>
      <ul class="cate_list row">
        <!-- 這一個 -->
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6   col-xs-6 col-xs-6">
          <div class="active">統領旅行社統領旅行社統領旅行社</div>
        </li>
        <!-- 用這個 -->
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div>統領旅行社</div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div>統領旅行社</div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div>統領旅行社</div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div>統領旅行社</div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div>統領旅行社</div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div>統領旅行社</div>
        </li>
      </ul>
      <ul class="proxy_list row no-gutters">
        <!-- 從這邊 -->
        <li class=" col-md-3 col-sm-6 col-xs-12">
          <div>
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div>
              <a href="javascript:;">MORE</a>
            </div>
          </div>
        </li>
        <!-- 到這邊 -->
        <li class=" col-md-3 col-sm-6 col-xs-12">
          <div>
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div>
              <a href="javascript:;">MORE</a>
            </div>
          </div>
        </li>
        <li class=" col-md-3 col-sm-6 col-xs-12">
          <div>
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div>
              <a href="javascript:;">MORE</a>
            </div>
          </div>
        </li>
        <li class=" col-md-3 col-sm-6 col-xs-12">
          <div>
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div>
              <a href="javascript:;">MORE</a>
            </div>
          </div>
        </li>
        <li class=" col-md-3 col-sm-6 col-xs-12">
          <div>
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div>
              <a href="javascript:;">MORE</a>
            </div>
          </div>
        </li>
        <li class=" col-md-3 col-sm-6 col-xs-12">
          <div>
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div>
              <a href="javascript:;">MORE</a>
            </div>
          </div>
        </li>
        <li class=" col-md-3 col-sm-6 col-xs-12">
          <div>
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div>
              <a href="javascript:;">MORE</a>
            </div>
          </div>
        </li>
        <li class=" col-md-3 col-sm-6 col-xs-12">
          <div>
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div>
              <a href="javascript:;">MORE</a>
            </div>
          </div>
        </li>
       
      </ul>
      <ul class="page">
        <li>
          <</li>
            <li class="active">1</li>
            <li>2</li>
            <li>></li>
      </ul>
    </div>
  </main>
  <?include_once "template/footer.php"?>
</body>

</html>
<?include_once "template/js.php"?>
<script>
  $(function () {
    $("#category").click(function () {
      $(this).toggleClass("active");
      $(".cate_list").fadeToggle();
    })
  });
</script>