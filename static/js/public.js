window.onload = function () {
    let nav = document.querySelector(".xiala-nav");
    let navList = document.querySelector(".nav-list")
    let xialak = document.querySelector(".xialakuang")
    let shouy = document.querySelector(".shouy")
    let zdJiantou = document.querySelector(".zhiding")

    window.onscroll = function () {
        let scrollTop = document.documentElement.scrollTop || document.body.scrollTop
        if (scrollTop >= 100) {
            nav.style.top = 0;
        } else {
            nav.style.top = -58 + "px";
        }
        if (scrollTop >= 600) {
            zdJiantou.style.display = "block"
        } else {
            zdJiantou.style.display = "none"
        }
    }


    navList.onclick = function () {
        if(xialak.style.display == "none"){
            xialak.style.display="block"; 
        }else{
            xialak.style.display="none";
        }
        // xialak.style.display = xialak.style.display == "none" ? "block!important" : "none!important";
        // console.log(xialak.style.display)
        shouy.innerHTML = xialak.style.display == "none" ? "首页" : "关闭";
    }

    zdJiantou.onclick = function () {
        let jttop = document.documentElement || document.body;
        jttop.scrollTop = 0;


    }



}