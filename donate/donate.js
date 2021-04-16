var backdrop = document.querySelector(".backdrop");
var nobutton = document.querySelector(".modal_action--negative");
var togglebutton = document.querySelector(".toggle-button");
var modal = document.querySelector(".modal");

for(var i = 0 ; i < button.length ; i++){
button[i].addEventListener("click" , function() {
    backdrop.style.display = "block";
    setTimeout(function(){
        backdrop.classList.add("open");
        modal.classList.add("modaltransform");
    },10)
})
}

if(nobutton){
    nobutton.addEventListener("click" , closemodal );
}

backdrop.addEventListener("click" , function() {
    /*mobilenav.style.display = "none";*/
    closemodal ();
})

 function closemodal(){
    backdrop.classList.remove("open");
    modal.classList.remove("modaltransform");
        setTimeout(function(){
            backdrop.style.display = "none";
         },200)
 }

 togglebutton.addEventListener("click", function() {
    /*mobilenav.style.display = "block";*/
    mobilenav.classList.add("mobileopen");
    mobilebackdrop.classList.add("mobileopen");
    toggleanimation.style.animation = "none";
})

