$(document).ready(function(){
    $(".skill").hide();
    $(".myIMG").hide();
    $(".myCard").hide();
    $(window).scroll(function(){
        if ($(document).scrollTop() > 200) {
            console.log("worked");
            $(".myIMG").fadeIn(1500);
            $(".skill").show(3000);    

        }
        if ($(document).scrollTop() > 1000) {
            console.log("kto");
            $(".myCard").fadeIn(2500);
             
        }
    
    
    
    });





  });











