{
	const switchByWidth_height = () => {
		if (window.matchMedia("(max-width: 480px)").matches) {
			const height = window.innerHeight;
			document.querySelector("body").style.height = height + `px`;
			navShereRmv();
		}
	};
	window.addEventListener("load", () => {
		switchByWidth_height();
	});
}