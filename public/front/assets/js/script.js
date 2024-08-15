// let imgsBox = document.querySelector(".main-img");
// let imgs = document.querySelectorAll(".main-img a");
// let buttonSlide = document.querySelectorAll("#slideButton");

// // let isScrolling = false;
// // buttonSlide.forEach((button) => {
// // 	button.addEventListener("click", async () => {
// // 		if (isScrolling) return;
// // 		isScrolling = true;
// // 		const direction = button.className == "left_img_button" ? -1 : 1;
// // 		const scrollImg = direction * imgs[0].clientWidth;
// // 		imgsBox.scrollBy({ left: scrollImg, behavior: "smooth" });
// // 		await new Promise((resolve) => setTimeout(resolve, 1000));
// // 		isScrolling = false;
// // 	});
// // });

// // let imgsBoxB = document.querySelector(".mini_slide-block");
// // let buttonSlideB = document.querySelectorAll("#slideButton-b");
// // buttonSlideB.forEach((button) => {
// // 	button.addEventListener("click", () => {
// // 		const direction = button.className == "left_img_button" ? -1 : 1;
// // 		const scrollImg = direction * (imgs[0].clientWidth - 150);
// // 		imgsBoxB.scrollBy({ left: scrollImg, behavior: "smooth" });
// // 	});
// // });
// // let imgsBoxL = document.querySelector(".mini_slide-live");
// // let buttonSlideL = document.querySelectorAll("#slideButton-l");
// // buttonSlideL.forEach((button) => {
// // 	button.addEventListener("click", () => {
// // 		const direction = button.className == "left_img_button" ? -1 : 1;
// // 		const scrollImg = direction * (imgsBoxL.clientWidth - 150);
// // 		imgsBoxL.scrollBy({ left: scrollImg, behavior: "smooth" });
// // 	});
// // });

// // let imgsBoxS;
// // window.addEventListener("mousedown", (e) => {
// // 	let flag =
// // 		e.target.offsetParent.className === "right_img_button" ||
// // 		e.target.offsetParent.className === "left_img_button";
// // 	imgsBoxS = e.target.offsetParent.className;
// // 	console.log(imgsBoxS);
// // 	if (flag) {
// // 		imgsBoxS = e.target.offsetParent.offsetParent.className;
// // 		console.log(imgsBoxS);
// // 	}
// // 	if (`${imgsBoxS}` == "") {
// // 		console.log("if condition block")
// // 		return;
// // 	}
// // 	let imgsBoxSItom = document.querySelector(`.${imgsBoxS}`);
// // 	let buttonSlideS = document.querySelectorAll(`.${imgsBoxS} #slideButton-s`);
// // 	console.log(imgsBoxSItom);
// // 	buttonSlideS.forEach((button) => {
// // 		button.addEventListener("click", () => {
// // 			const direction = button.className == "left_img_button" ? -1 : 1;
// // 			const scrollImg = direction * (imgs[0].clientWidth - 150);
// // 			imgsBoxSItom.scrollBy({ left: scrollImg, behavior: "smooth" });
// // 		});
// // 	});
// // });


// const sidebar=document.querySelector(".sidebar");
// const cross=document.querySelector(".fa-xmark");
// const black=document.querySelector(".black");
// const sidebtn=document.querySelector(".second-1");

// sidebtn.addEventListener("click",()=>{
//     sidebar.classList.add("active");
//     cross.classList.add("active");
//     black.classList.add("active");
//     document.body.classList.add("stop-scroll");
// })
// cross.addEventListener("click",()=>{
//     sidebar.classList.remove("active");
//     cross.classList.remove("active");
//     black.classList.remove("active");
//     document.body.classList.remove("stop-scroll");
// })


// const sign=document.querySelector(".ac");
// const tri=document.querySelector(".triangle");
// const signin=document.querySelector(".hdn-sign");

// sign.addEventListener("click",()=>{
//     black.classList.toggle("active-1");
//     signin.classList.toggle("active");
//     tri.classList.toggle("active");
//     document.body.classList.toggle("stop-scroll");
// })


// for sidebar
function openNav() {
    document.getElementById("mySidenav").style.animation = "expand 0.3s forwards";
    //closeBtn
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("closeBtn").style.animation = "show 0.3s";
    //Overlay
    document.getElementById("overlay").style.display = "block";
    document.getElementById("overlay").style.animation = "show 0.3s";

}

function closeNav() {
    document.getElementById("mySidenav").style.animation = "collapse 0.3s forwards";
    //closeBtn
    document.getElementById("closeBtn").style.animation = "hide 0.3s";
    //Overlay
    document.getElementById("overlay").style.animation = "hide 0.3s";

    setTimeout(() => {
        document.getElementById("closeBtn").style.display = "none";
        document.getElementById("overlay").style.display = "none";
        //Reset Menus
        document.getElementById("main-container").style.animation = "";
        document.getElementById("main-container").style.transform = "translateX(0px)";
        document.getElementById("sub-container").style.animation = "";
        document.getElementById("sub-container").style.transform = "translateX(380px)";
    }, 300)
}

let firstDropdownOpen = false;

function firstDropDown() {
    firstDropdownOpen = !firstDropdownOpen;
    if(firstDropdownOpen) {
        document.querySelector("#firstDropDown i").setAttribute("class", "fas fa-chevron-up");
        document.querySelector("#firstDropDown div").innerHTML = "See Less";
        //Handle Container
        document.getElementById("firstContainer").style.display = "block";
        document.getElementById("firstContainer").style.animation = "expandDropDown 0.3s forwards";
        document.getElementById("firstContainer").style.transition = "height 0.3s";
        document.getElementById("firstContainer").style.height = "410px";
    }else{
        document.querySelector("#firstDropDown i").setAttribute("class", "fas fa-chevron-down");
        document.querySelector("#firstDropDown div").innerHTML = "See More";
        //Handle Container
        document.getElementById("firstContainer").style.animation = "collapseDropDown 0.2s forwards";
        document.getElementById("firstContainer").style.transition = "height 0.2s";
        document.getElementById("firstContainer").style.height = "0px";
        setTimeout(() => {
            document.getElementById("firstContainer").style.display = "none";
        }, 200)
        
    }
}

let secondDropDownOpen = false;

function secondDropDown() {
    secondDropDownOpen = !secondDropDownOpen;

    if(secondDropDownOpen) {
        document.querySelector("#secondDropDown i").setAttribute("class", "fas fa-chevron-up");
        document.querySelector("#secondDropDown div").innerHTML = "See Less";
        //Handle Container
        document.getElementById("secondContainer").style.display = "block";
        document.getElementById("secondContainer").style.animation = "expandDropDown 0.3s forwards";
        document.getElementById("secondContainer").style.transition = "height 0.3s";
        document.getElementById("secondContainer").style.height = "260px";
    }else{
        document.querySelector("#secondDropDown i").setAttribute("class", "fas fa-chevron-down");
        document.querySelector("#secondDropDown div").innerHTML = "See More";
        //Handle Container
        document.getElementById("secondContainer").style.animation = "collapseDropDown 0.2s forwards";
        document.getElementById("secondContainer").style.transition = "height 0.2s";
        document.getElementById("secondContainer").style.height = "0px";
        setTimeout(() => {
            document.getElementById("secondContainer").style.display = "none";
        }, 200)
        
    }
}

document.querySelectorAll(".sidenavRow").forEach(row => {
    row.addEventListener("click", () => {
        document.getElementById("main-container").style.animation = "mainAway 0.3s forwards";
        document.getElementById("sub-container").style.animation = "subBack 0.3s forwards";
    });
});

document.getElementById("mainMenu").addEventListener("click", () => {
    document.getElementById("main-container").style.animation = "mainBack 0.3s forwards";
    document.getElementById("sub-container").style.animation = "subPush 0.3s forwards";
})

//subNavContent

function openPrimeVideo() {
    document.getElementById("sub-container-content").innerHTML = `<div class="sidenavContentHeader">Prime Video</div>
    <a href="#"><div class="sidenavContent">All Videos</div></a>`;
}

function openAmazonMusic() {
    document.getElementById("sub-container-content").innerHTML = `<div class="sidenavContentHeader">Amazon Music</div>
    <a href="#"><div class="sidenavContent">All Music</div></a>`;
}