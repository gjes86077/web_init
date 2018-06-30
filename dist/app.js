$(function () {
  // Header
  $(window).scroll(function () {
    const scrollVal = $(this).scrollTop();
    const SearchBar = $("header>div:first-child").height();
    const navbarHeight = $(".navbar").height();
    if (scrollVal > SearchBar) {
      $(".navbar").addClass("fixed-top");
      $(".banner").css("margin-top", navbarHeight);
    }
    else {
      $(".navbar").removeClass("fixed-top");
      $(".banner").css("margin-top", "0");
    }
  }
  );
  //Header END
  //Social 
  $(".share").click(function () {
    $(".social-list").slideToggle();
    $("#social").toggleClass("animated");
  });
  $(".social-list li").click(function () {
    var html_url = "", social_web = "";
    html_url = window.location.toString();
    type = $(this).data("type");
    switch (type) {
      case 'google': social_web = 'https://plus.google.com/share?url=';
        break;
      case 'facebook': social_web = 'http://www.facebook.com/sharer/sharer.php?u=';
        break;
      case 'line': social_web = 'https://timeline.line.me/social-plugin/share?url=';
        break;
      case 'twitter': social_web = 'https://twitter.com/intent/tweet?url=';
        break;
      default: alert("目前暫時無法分享至該平台");
        break;
    }
    if (social_web) window.open(social_web + html_url, 'Share', config = 'height=500,width=700');
  });
  //Social END
});  