<!DOCTYPE html>
<html lang="en">

<head>
<? include_once "template/head.php"?>

  <title>Document</title>
</head>

<body>
<? include_once "template/header.php"?>
  <main id="news">
    <div class="container">
      <div class="btn active" id="category">
        <i class="fa fa-plane"></i> 其他代理分類
        <i class="fa fa-sort-desc"></i>
      </div>
      <ul class="cate_list row">
        <!-- 這一個 -->
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <div class="active">統領旅行社統領旅行社統領旅行社</div>
        </li>
        <!-- 用這個 -->
        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
          <div class="active">統領旅行社</div>
        </li>
      </ul>
      <ul class="news_list"> 
        <!-- 從這邊 -->
        <li class="row">
          <div class=" col-sm-3 ">
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
          </div>
          <div class="col-sm-9">
            <time>May 05, 2018</time>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div class="desc">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, velit. Culpa, saepe? Beatae cupiditate, cum voluptatem
              non totam modi provident quo itaque minima reiciendis quibusdam voluptas sint voluptatum doloribus esse.
            </div>
            <div>
              <a href="javascript:;" class="btn  btn-sm">More</a>
            </div>
          </div>
        </li>
        <!-- 到這邊 -->
        <li class="row">
          <div class=" col-sm-3 ">
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
          </div>
          <div class="col-9">
            <time>May 05, 2018</time>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div class="desc">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, velit. Culpa, saepe? Beatae cupiditate, cum voluptatem
              non totam modi provident quo itaque minima reiciendis quibusdam voluptas sint voluptatum doloribus esse.
            </div>
            <div>
              <a href="javascript:;" class="btn  btn-sm">More</a>
            </div>
          </div>
        </li>
        <li class="row">
          <div class=" col-sm-3 ">
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
          </div>
          <div class="col-9">
            <time>May 05, 2018</time>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div class="desc">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, velit. Culpa, saepe? Beatae cupiditate, cum voluptatem
              non totam modi provident quo itaque minima reiciendis quibusdam voluptas sint voluptatum doloribus esse.
            </div>
            <div>
              <a href="javascript:;" class="btn  btn-sm">More</a>
            </div>
          </div>
        </li>
        <li class="row">
          <div class=" col-sm-3 ">
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
          </div>
          <div class="col-9">
            <time>May 05, 2018</time>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div class="desc">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, velit. Culpa, saepe? Beatae cupiditate, cum voluptatem
              non totam modi provident quo itaque minima reiciendis quibusdam voluptas sint voluptatum doloribus esse.
            </div>
            <div>
              <a href="javascript:;" class="btn  btn-sm">More</a>
            </div>
          </div>
        </li>
        <li class="row">
          <div class=" col-sm-3 ">
            <a href="detail.php">
              <img src="images/proxy_temp.jpg" alt="">
            </a>
          </div>
          <div class="col-9">
            <time>May 05, 2018</time>
            <h4>統領旅行社－藍景航空 Blue Panorama Airlines</h4>
            <div class="desc">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, velit. Culpa, saepe? Beatae cupiditate, cum voluptatem
              non totam modi provident quo itaque minima reiciendis quibusdam voluptas sint voluptatum doloribus esse.
            </div>
            <div>
              <a href="javascript:;" class="btn  btn-sm">More</a>
            </div>
          </div>
        </li>
      </ul>
      <!-- 頁碼區 -->
      <ul class="page">
        <li>«</li>
        <li class="active">1</li>
        <li>2</li>
        <li>3</li>
        <li>»</li>
      </ul>
    </div>
  </main>
<? include_once "template/footer.php"?>

</body>

</html>
<? include_once "template/js.php"?>

<script>
  $(function () {
    $("#category").click(function () {
      $(this).toggleClass("active");
      $(".cate_list").fadeToggle();
    })
  });
</script>