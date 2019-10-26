window.onload = function() {
    // 滚动导航栏
    let mid = document.querySelector(".middle");

    // 导航栏下拉列表和下拉框、首页
    let dpb = document.querySelector(".dropdown-box");
    let xialak = document.querySelector(".xialakuang");
    let xk = document.querySelector(".x");

    // 置顶箭头
    let zhiding = document.querySelector(".zdJiantou");

    // let tip = document.querySelectorAll(".xialakuang>a>li");
    // for (let i = 0; i <= tip.length - 1; i++) {
    //     console.log(i);
    //     tip[i].onclick = function() {
    //         xk.innerHTML = tip[i].innerHTML;
    //     }
    // }



    window.onscroll = function() {
        let scrollTop = document.documentElement.scrollTop || document.body.scrollTop
        if (scrollTop >= 100) {
            mid.style.heifht = 0;
            mid.style.opacity = 1;
            mid.style.transition = "all 1s linear";
        } else {
            mid.style.height = 58 + "px";
            mid.style.opacity = 0;
            mid.style.transition = "all 1s linear";

        }
        if (scrollTop >= 600) {
            zhiding.style.display = "block";
        } else {
            zhiding.style.display = "none";
        }
    }

    dpb.onclick = function() {
        xialak.style.display = xialak.style.display == "none" ? "block" : "none";
        xk.innerHTML = xialak.style.dispaly == "none" ? "首页" : "关闭";
    }


    zhiding.onclick = function() {
        let jttop = document.documentElement || document.body;
        jttop.scrollTop = 0;
    }

    var yanzhengma = document.querySelector('.ma-active');
    var index = 0;
    var zimuarry = ['5 y 6 p b', 'a 3 5 4 p', 's 4 d 7 8', 'w a r f 4', 'g i d f s', 'f s d 9 5', 'f d s a f', 'h g d f d', 'h 8 g 9 d', 'r s g d d']
    yanzhengma.addEventListener('click', () => {
        index = Math.floor(Math.random() * 10);
        yanzhengma.innerHTML = zimuarry[index];
        yanzhengma.classList.add('active');
    }, false)
}




