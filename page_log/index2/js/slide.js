slideAnimation();
function slideAnimation(){
    const slideBox = document.querySelector(".imgslide-box");
    const slideTextBox =document.querySelectorAll(".imgslide-list li");
    
    let now = 0; // 첫번째 값
    var imgcount = slideTextBox.length-1; // 마지막 값
    document.querySelector(`.imgslide-list > li:nth-child(${now+1}) > .imgtext-fillbox`).classList.add("imgtext-fill-start");

    slideTextBox.forEach((el,index)=>{
            el.addEventListener("click",function(){  
            clickAnimate(index);
            })  
    })
    function clickAnimate(index, el){
        now = index;
        startAnimate();
    }
    setInterval(() => {
        now = now > 2 ? 0 : now+1;
        startAnimate();
    }, 5000);

    function startAnimate(){
        let nth = now;
        const slideText = document.querySelectorAll(`.imgslide-list > li`);
        
        slideText.forEach(el => 
            el.querySelector(".imgtext-fillbox").classList.remove("imgtext-fill-start")
        );
        document.querySelector(`.imgslide-list > li:nth-child(${nth+1}) > .imgtext-fillbox`).classList.add("imgtext-fill-start");
        slideBox.style.transform=`translateX(-${25*now}%)`;
    }
}