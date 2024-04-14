let btn = document.getElementById('scroll-btn');
btn.addEventListener('click',()=>{
    document.scrollTop=0;
    document.documentElement.scrollTop=0;
});

// For responsive Code
let IsBar = true;
let bar = document.getElementById('bar');
bar.addEventListener('click',()=>{
    if(IsBar){
        bar.innerHTML = '<i class="fa-solid fa-xmark"></i>';
    document.getElementById('menu').style.display="block";
    IsBar=false;
    }else{
        bar.innerHTML='<i class="fa-solid fa-bars"></i>';
    document.getElementById('menu').style.display="none";
    IsBar=true;
    }
})