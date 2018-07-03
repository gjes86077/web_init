<!DOCTYPE html>
<html lang="en">

<head>
<? include "template/head.php"?>
</head>

<body>
<? include "template/header.php"?>
  <main id="detail">
    <div class="content">
      <h2>VUELING</h2>
      <time>May 05,2018</time>
      <article>
        <!-- html區塊要拆掉 -->
        <img src="images/temp.png" alt="">
        <p>
          要後目了半主不，科本起了的選陽早支大則金必他紅。帶代會，花格聞感白你法快心日受頭廣式人教業未。取利小上夫石。一投該人會水標時水全級話操需更我生前驚人成，東水等花書時日算樂別大來溫來黨、大曾家面的上家花的放的，前以倒票本引這笑而維投大；或特保喜讓女注者教一身！況任至片明馬。除入色實書不量！道四家吸場來往球不後客舉馬是記們親心為族在成黨標天。車飛備國次以上年生陸毛合但，為可來中區局事辦：戰經是麗。
        </p>
        <p>
          水美險開其得完利我解講，進時坐投自一稱後車麼中學活意畫很功天足得母片雙……康口平至……最同且時樂其不……主是出她發地必死易：一行引圖……開歷發何出致或這親無晚字讀目思家老飛是到手？ 交人排？林的評大叫法？領子進！行的此康最。有產作是是過一我有部至方不總題出拉常！只節告不子同和標麼希們非單到樂自子型大家一樓從生研論色舞地運接是過力院最遠兒確紙過必的十和銀，些克前便走報。活越須面懷另還、何分況；西步性不德題再送題！
        </p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates expedita, ratione quasi corporis tenetur architecto
          accusantium quas perferendis distinctio facere explicabo deserunt numquam eligendi excepturi autem sapiente doloribus
          nobis unde!</p>
        <!-- html區塊要拆掉 -->
      </article>
    </div>
    <a href="javascript:history.go(-1)" class="back">Back</a>
  </main>
  <? include "template/footer.php"?>
</body>

</html>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script>
  $(function () {
    $("#category").click(function () {
      $(this).toggleClass("active");
      $(".cate_list").fadeToggle();
    })
  });
</script>