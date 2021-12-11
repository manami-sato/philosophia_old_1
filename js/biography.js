{
  const switchByWidth = () => {
    if (window.matchMedia("(max-width: 480px)").matches) {
      $(".bio__wrap").attr("id", "mainAdd");
      let imgSize = 170;
      let imgMargin = 3;
      let img2 = (imgSize + imgMargin) * 2;
      // let img2 = imgSize*2;
      let imgContents = $(".bio__wrap>*");
      imgContents.each(function (index, element) {
        imgContents.css("width", img2);
      });
      navShereRmv();
    }
    if (window.matchMedia("(min-width:481px)").matches) {
      footShereRmv();
      shereMove();

      let imgSize = 200;
      let imgMargin = 3;
      let img5 = (imgSize + imgMargin) * 5;
      let img4 = (imgSize + imgMargin) * 4;
      let img3 = (imgSize + imgMargin) * 3;
      let img2 = (imgSize + imgMargin) * 2;
      let imgContents = $(".bio__wrap>*");
      const contentsWidth = (width) => {
        imgContents.each(function (index, element) {
          imgContents.css("width", width);
        });
      };
      const contentsResize = () => {
        let mainWidth = $(".bio__wrap").width();
        if (mainWidth > img5) {
          contentsWidth(img5);
        }
        if (mainWidth < img5) {
          contentsWidth(img4);
        }
        if (mainWidth < img4) {
          contentsWidth(img3);
        }
        if (mainWidth < img3) {
          contentsWidth(img2);
        }
      };
      $(".bio__wrap").attr("id", "mainAdd");
      contentsResize();
      // });
      window.addEventListener("resize", () => {
        contentsResize();
      });
    }
  };

  window.onload = switchByWidth;
  window.onresize = switchByWidth;

  let thumbnailBox = $(".bio__thumbnail");
  let info = $(".imgInfo");
  let imgList = $(".imgList");
  let back = document.querySelector(".bio__modal--back");
  let circleBox = $(".circle");

  $.ajax({
    url: "https://click.ecc.ac.jp/ecc/msatou/Philosophia/js/products.php",
    method: "GET",
    dataType: "json",
    timeout: 3000,
    cache: false,
  }).done(function (res) {
    res.forEach(function (products) {
      // サムネイル情報
      const thumbnail = products.thumbnail;
      const alt = products.alt;
      const year = products.year;
      let imgThumbnail = `<li><img src="img/${thumbnail}" alt="${alt}${year}"></li>`;
      thumbnailBox.append(imgThumbnail);
    });
    const thumbnailList = document.querySelectorAll(".bio__thumbnail>li"); //サムネ1枚ずつ
    //
    // ソート
    //
    const orderIcon = document.querySelector(".bio__sub--order");
    const orderTxt = document.querySelector(".bio__sub--order p");
    let orderCount = 0;
    orderIcon.addEventListener("click", () => {
      orderCount++;
      if (orderCount % 2 !== 0) {
        orderIcon.setAttribute("id", "setOrderIcon");
        orderTxt.setAttribute("id", "setOrderTxt");
        orderTxt.innerHTML = "Newest";
        for (let i = 0; i < thumbnailList.length; i++) {
          let num = thumbnailList.length - i;
          thumbnailList[i].style.order = `${num}`;
        }
      }
      if (orderCount % 2 === 0) {
        orderIcon.removeAttribute("id");
        orderTxt.removeAttribute("id");
        orderTxt.innerHTML = "Oldest";
        for (let i = 0; i < thumbnailList.length; i++) {
          thumbnailList[i].style.order = "";
        }
      }
    });
    //
    // 更新情報
    //
    let lastPhoto = res.length - 1;
    let newsDate = res[lastPhoto].date;
    let newsAlt = res[lastPhoto].alt;
    let newsPhotos = res[lastPhoto].imgs.length;
    let newsTxt = `<p class="newsTxt">${newsAlt}の写真(${newsDate}撮影分・${newsPhotos}枚)をアップしました。</p>`;
    $(".news__wrap").append(newsTxt);
    for (let i = 0; i < res.length; i++) {
      //
      // モーダルウィンドウ
      //
      thumbnailList[i].addEventListener("click", (e) => {
        // モーダル表示
        const modal = $(".bio__modal");
        modal.attr("id", "displayModal");
        let scrollY = window.pageYOffset; //モーダルの表示位置をトップに固定
        $(".bio__modal").css("top", `${scrollY}px`);
        // スクロール禁止
        document.addEventListener("touchmove", disableScroll, {
          passive: false,
        });
        document.addEventListener("mousewheel", disableScroll, {
          passive: false,
        });
        const imgLength = res[i].imgs; //選択したサムネの画像の配列
        // 撮影日
        const year = res[i].year; //class名用 年取得
        const date = res[i].date; //日付取得
        let dateView = `<div class="img${year} year">${date}</div>`;
        info.append(dateView); //追加
        // 撮影場所
        const place = res[i].place; //場所取得
        let placeView = `<div class="place">${place}</div>`;
        info.append(placeView); //追加
        // 撮影場所(alt)
        const alt = res[i].alt; //場所(alt)取得
        // 表示する画像
        for (let i = 0; i < imgLength.length; i++) {
          let imgView = `<li><img src="${imgLength[i]}" alt="${alt}"></li>`;
          imgList.append(imgView);
          // 画像枚数の円
          const circle = "<div></div>"; //枚数分の円
          circleBox.append(circle); //追加
        }
        let count = 0; //今どの画像を表示しているか
        // 画像表示
        let imgGet = document.querySelectorAll(".imgList li");
        let circleGet = document.querySelectorAll(".circle div");
        const imgAdd = () => {
          //画像表示
          imgGet[count].setAttribute("id", "setImgList");
          // 円の色変更
          circleGet[count].setAttribute("id", "setCircle");
        };
        imgAdd();
        //
        // prev,next
        //
        const imgRemove = () => {
          //画像削除
          const gettingImg = document.getElementById("setImgList");
          gettingImg.removeAttribute("id");
          // 円の色削除
          const gettingCircle = document.getElementById("setCircle");
          gettingCircle.removeAttribute("id");
        };
        const prev = document.querySelector(".prev");
        const next = document.querySelector(".next");
        next.onclick = () => {
          imgRemove();
          count++;
          if (count < imgGet.length) {
            imgAdd();
          }
          if (count === imgGet.length) {
            count = 0;
            imgAdd();
          }
        };
        prev.onclick = () => {
          imgRemove();
          count--;
          if (count >= 0) {
            imgAdd();
          } else {
            count = imgGet.length - 1;
            imgAdd();
          }
        };
        //
        // モーダル削除
        //
        back.addEventListener("click", (e) => {
          // スクロール再開
          document.removeEventListener("touchmove", disableScroll, {
            passive: false,
          });
          document.removeEventListener("mousewheel", disableScroll, {
            passive: false,
          });
          //モーダル削除
          $(".bio__modal").removeAttr("id");
          $(".year").remove(); //class名用 年削除
          $(".place").remove(); //日付削除
          $(".circle div").remove(); //円削除
          $(".imgList li").remove(); //画像削除
          // imgRemove();
          $("#gettingImg").removeAttr("id");
          $("#gettingCircle").removeAttr("id");
        });
      });
    }
  });

  //
  // scrollTop
  //
  window.addEventListener("scroll", () => {
    let scrollY = window.pageYOffset;
    if (scrollY > 300) {
      $(".scrollTop").removeAttr("id");
      $(".scrollTop").attr("id", "scrollTopAdd");
    } else {
      $(".scrollTop").removeAttr("id");
      $(".scrollTop").attr("id", "scrollTopRmv");
    }
  });
}
