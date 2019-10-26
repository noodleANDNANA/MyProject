
//  给 div设置单击事件  pull-down-strip
//	1.获取 div中的元素 最大盒子
	let pull_down_strip = document.querySelector(".pull-down-strip");
//	获取 需要显示的下拉条 元素 selection-box
	let selection_box = document.querySelector(".selection-box");
	//获取  下拉条中的 每一个li  selection-li
	let selection_li = document.querySelectorAll(".selection-li");
	//获取  span-left  原文字标题
	let spanLeft = document.querySelector(".pull-a-box");
	let wwidth = window.innerWidth;
	console.log(wwidth);
	// console.log(spanLeft);
	//获取返回 元素sapn-return
	let spanReturn = document.querySelector(".sapn-return");
	// console.log(selection_li);
	//该标识位 表示了单击事件是否以及发生过
	let iden = false;
	let timer = null;
//	2.给最大盒子一个单击事件  用于激活菜单
	pull_down_strip.onclick = function(){
	//点击该div元素时，下拉条display为显示状态
		if(iden == false){
			selection_box.style.display = "block";
			spanLeft.style.display = "none";
			spanReturn.style.display = "block";
			iden = true;
		}
		else if(iden == true){
			spanLeft.style.display = "block";
			spanReturn.style.display = "none";
			selection_box.style.display = "none";
			iden = false;
		}
		else{
			alert("该模块发生了一个错误");
		}
		
	}
//	单机事件结束
//	每一个 li 都需要一个鼠标移入事件
	for(let i = 0;i<selection_li.length;i++){
		selection_li[i].onmouseover = function(){
			if(iden == true){
			document.onclick = null;
			}
			// alert("a ");
			selection_li[i].classList.add("public-selection");
			selection_li[i].style.backgroundColor = "black";
		}
		selection_li[i].onmouseout = function () {
			selection_li[i].classList.remove("public-selection");
			selection_li[i].style.backgroundColor = "#f0443a";
		}
	}
	
//轮播图片开始
//	1.获取 ul 图片的最大盒子
	let ImgBox = document.querySelector(".img-box");
     // console.log(ImgBox);
// 2. 获取所有的儿子节点
	 let imageList = ImgBox.children;
//	 获取轮播点儿
	let wheels = document.querySelectorAll(".wheel-planting");
//	 拷贝一个头节点 到尾部插入
ImgBox.appendChild(imageList[0].cloneNode((true)));
//	 3.设定图片的下标 index
	let index = 0;
//  4.设立动画函数
	 timer =  setInterval(move,3000);
	 
	 let rotaryImg = document.querySelector(".rotary-img");
	 let leftButton = document.querySelector(".button-left");
	 let rightButton = document.querySelector(".button-right");
	function move (){
		//获取当前图片的实际大小
		
		let ImgWidth = imageList[index].offsetWidth;
		
		//	判断 图片轮播  轮播点设置属性样式准备
		if(index == imageList.length -1){
			ImgBox.style.left = 0;
			index = 0;
		}
		index++;
		
		anmite(ImgBox,-index * ImgWidth);
		if(index == imageList.length - 1){
			wheels[0].classList.add("selection");
			wheels[wheels.length-1].classList.remove("selection");
		}
		else{
			for(let i=0;i<wheels.length;i++){
				wheels[i].classList.remove("selection");
			}
			wheels[index].classList.add("selection");
		}
	}
//
	function moveleft (){
		//获取当前图片的实际大小
		
		let ImgWidth = imageList[index].offsetWidth;
		
		//	判断 图片轮播  轮播点设置属性样式准备
		if(index == 0){
			index = imageList.length - 1;
			ImgBox.style.left= -index * ImgWidth+"px";
			// index = 0;
		}
		index--;
		
		anmite(ImgBox,-index * ImgWidth);
		if(index < 0){
			wheels[wheels.length - 1].classList.add("selection");
			wheels[0].classList.remove("selection");
		}
		else{
			for(let i=0;i<wheels.length;i++){
				wheels[i].classList.remove("selection");
			}
			wheels[index].classList.add("selection");
		}
	}
//	anmite 动画实现
	function anmite (moveBox,target){
		// clearInterval(timer);
		 let timer  = setInterval(
			function(){
			let current = moveBox.offsetLeft;
			let speed = 10;
			//三元表达式  为了在到达一个目标距离是通过判断不让它超过当前的图片下标
			speed = current > target? -speed : speed;
			current += speed;
			//判断当前是偶移动到了目标距离
				if(Math.abs(target - current) > Math.abs(speed)){
					moveBox.style.left = current + "px";
				}
				else{
					clearInterval(timer);
					moveBox.style.left = target + "px";
				}
			
			},10);
	}

	// 监视 浏览器的宽度

			// alert("大于");
			 //	添加鼠标移入事件
			rotaryImg.onmouseover = function(){
			
				clearInterval(timer);
			}
			//	添加鼠标移出事件
			rotaryImg.onmouseout = function(){
			
				timer =  setInterval(move,3000);
			}
	
	
		
	//  if(h<=860){
	// 	 rotaryImg.removeEventListener("onmouseover",rotaryImg,false);
	// 	rotaryImg.removeEventListener("mouseout",rotaryImg,false);
	// 	leftButton.style.display = "block";
	// 	rightButton.style.display = "block";
		
	//  }

//  左右按钮单击事件
	leftButton.onclick = function(){
		moveleft();
	}
	rightButton.onclick = function() {
		move();
	}
	
