let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".sliders");
let formSection = document.querySelector(".form-section");

  login.addEventListener("click", () => {
    slider.classList.remove("movesliders");
    formSection.classList.remove("form-section-move");
});
signup.addEventListener("click", () => {
    slider.classList.add("movesliders");
    formSection.classList.add("form-section-move");
});
  

$(".signup").click(function(){
    $(".sliders").addClass("movesliders");
  });

  $(".login").click(function(){
    $(".sliders").addClass("movesliders");
    $(".sliders").removeClass("movesliders");
  });



  $("#logins").on("click",function(){

    $(".modall").css("display","block")
    

});

$(".close").on("click",function(){

    $(".modall").css("display","none")
    

});





