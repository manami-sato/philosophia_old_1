{
  $.ajax({
    url: "https://click.ecc.ac.jp/ecc/msatou/Philosophia/js/products.php",
    method: "GET",
    dataType: "json",
    timeout: 3000,
    cache: false,
  }).done(function (res) {
    //
    // 更新情報
    //
    let lastPhoto = res.length - 1;
    let newsDate = res[lastPhoto].date;
    let newsAlt = res[lastPhoto].alt;
    let newsPhotos = res[lastPhoto].imgs.length;
    let newsTxt = `<p class="newsTxt">${newsAlt}の写真(${newsDate}撮影)をアップしました。</p>`;
    $(".news__wrap").append(newsTxt);
  });

  //
  // headerアニメーション
  //
  const ttl1 = document.querySelector(".index__main--ttl h1");
  const ttl2 = document.querySelector(".index__main--ttl p");
  const ttlImg = document.querySelector(".index__main--img");
  const nav = document.querySelector("nav");
  const ttlNews = document.querySelector(".news__wrap");

  const switchByWidth = () => {
    if (window.matchMedia("(max-width: 480px)").matches) {
      const height = window.innerHeight;
      document.querySelector("body").style.height = height + `px`;
      navShereRmv();
    }
    if (window.matchMedia("(min-width:481px)").matches) {
      shereMove();

      const df = (e) => {
        e.style.opacity = "1";
        e.style.pointerEvents = "auto";
        e.style.transition = "1.5s opacity";
      };
      const dn = (e) => {
        e.style.opacity = "0";
        e.style.pointerEvents = "none";
      };
      const dfSet = (e) => {
        df(ttl1);
        df(ttl2);
        df(ttlImg);
        df(nav);
        df(ttlNews);
      };
      dn(ttl1);
      dn(ttl2);
      dn(ttlImg);
      dn(nav);
      dn(ttlNews);
      setTimeout(dfSet, 3200);
    }
  };
  window.addEventListener("load", () => {
    switchByWidth();
  });

  //
  // ファーストビューのアニメーション
  //
  let imgCount = 0;
  const mainImg = document.querySelectorAll(".index__main--img li");
  const mainImgSlide = () => {
    document.getElementById("setMainImgList").removeAttribute("id");
    imgCount++;
    if (imgCount < mainImg.length) {
      mainImg[imgCount].setAttribute("id", "setMainImgList");
    }
    if (imgCount >= mainImg.length) {
      imgCount = 0;
      mainImg[imgCount].setAttribute("id", "setMainImgList");
    }
    setTimeout(mainImgSlide, 5000);
  };
  setTimeout(mainImgSlide, 8200);
  // $.ajax(
  // 	{
  // 		url:"https://click.ecc.ac.jp/ecc/msatou/Philosophia/js/products_index.php",
  // 		method:"GET",
  // 		dataType:"json",
  // 		timeout:3000,
  // 		cache:false
  // 	}
  // )
  // .done(
  // 	function(res){
  // 		for (let i = 0; i < res.length; i++) {
  // 			let img = `<li><img src="img/${res[i]}" alt="Philosophia"></li>`;
  // 			$(".index__main--img>ul").append(img);
  // 		}
  // 		$(".index__main--img>ul>li:first-child").attr("id","setMainImgList");
  // 		let imgCount = 0;
  // 		const mainImg = $(".index__main--img>ul>li");
  // 		const mainImgSlide = ()=>{
  // 			$("#setMainImgList").removeAttr("id");
  // 			imgCount++;
  // 			if(imgCount<mainImg.length){
  // 				console.log(mainImg[imgCount]);
  // 				mainImg[imgCount].attr("id","setMainImgList");
  // 			}if(imgCount>=mainImg.length){
  // 				imgCount = 0;
  // 				mainImg[imgCount].attr("id","setMainImgList");
  // 			}
  // 			// setTimeout(mainImgSlide,5000);
  // 		};
  // 		setTimeout(mainImgSlide,1000);
  // 	}
  // );
}
