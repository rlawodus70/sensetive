// Top 스크를 기능
const windowTop = document.querySelector("#scroll-top");

windowTop.addEventListener("click",function(){
    window.scrollTo(0,0);
})

// // 메뉴바 스크롤 fixed
// const header = document.querySelector("header");
// var menuHeight = header.offsetHeight+1;

// window.addEventListener('scroll',function(){
//     // let windowHeight = window.innerHeight;  // 스크롤 바 높이
//     // let fullHeight = document.body.scrollHeight;    // 전체 스크롤 높이
    
//     if(menuHeight < window.scrollY ){
//         header.style.position='fixed';
//     } else {
//         header.style.position='relative';
//     }
//     // let position = window; // 현재 스크롤 높이
//     // console.log(fullHeight);
// })     