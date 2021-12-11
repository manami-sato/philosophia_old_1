{
  const switchByWidth = () => {
    if (window.matchMedia("(max-width: 480px)").matches) {
      navShereRmv();
    }
    if (window.matchMedia("(min-width:481px)").matches) {
      footShereRmv();
      shereMove();
    }
  };

  window.onload = switchByWidth;
  window.onresize = switchByWidth;

  window.addEventListener("load", () => {
    $(".about__wrap").attr("id", "mainAdd");
  });
}
