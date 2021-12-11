const navShereRmv = () => {
  const shereNav = document.querySelector("body>.shereIcon");
  const main = document.querySelector("body");
  main.removeChild(shereNav);
};
const footShereRmv = () => {
  const shereFoot = document.querySelector("footer .shereIcon");
  const foot = document.querySelector("footer");
  foot.removeChild(shereFoot);
};
const shereMove = () => {
  const shere = document.querySelector(".nav__link--icon:last-child");
  const shereIcon = document.querySelectorAll(".shereIcon li");
  let shereCount = 0;
  shere.addEventListener("click", (e) => {
    shereCount++;
    if (shereCount % 2 !== 0) {
      shereIcon[0].setAttribute("id", "setShere1");
      shereIcon[1].setAttribute("id", "setShere2");
    }
    if (shereCount % 2 === 0) {
      for (let i = 0; i < shereIcon.length; i++) {
        shereIcon[i].removeAttribute("id");
      }
    }
  });
};

{
  //
  // スクロール禁止
  //
  function disableScroll(event) {
    event.preventDefault();
  }

  //
  // マウスカーソル
  //
  // const cursor =()=>{
  // 	const mouseCursor = document.createElement("div");
  // 	const body = document.querySelector("body");
  // 	mouseCursor.classList.add("mouseCursor");
  // 	body.appendChild(mouseCursor);
  // 	document.addEventListener("mousemove",(el)=>{
  // 		let clientX = el.clientX;
  // 		let clientY = el.clientY;
  // 		mouseCursor.style.transform = "translate(" + clientX + "px," + clientY + "px)";
  // 	});
  // 	const hover = document.querySelectorAll(".hover");
  // 	for (let i = 0; i < hover.length; i++) {
  // 		// menuのhover時
  // 		hover[i].addEventListener("mouseover",()=>{
  // 			mouseCursor.setAttribute("id","linkHover");
  // 		});
  // 		hover[i].addEventListener("mouseout",()=>{
  // 			mouseCursor.removeAttribute("id");
  // 		});
  // 	}
  // };
  // cursor();
}
