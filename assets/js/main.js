//Animation for books display
function flip(element){
    cardFlip = element.childNodes[5];
    
    
    // cardFlip.style.display = "none";
    cardFlip.setAttribute('class', 'absolute opacityimg card__wrapper sizeImgCard');
    console.log(cardFlip);
    
    secondCardFlip = element.childNodes[3];
    secondCardFlip.setAttribute('class', 'resume opacityInherit px-2 back card__side--back is-switched card__wrapper text-wrap text-truncate');
    secondCardFlip.style.display="block";
    
}

function reFlip(element){
    cardFlip = element.childNodes[5];
    cardFlip.setAttribute('class', 'sizeImgCard');

    secondCardFlip = element.childNodes[3];
    secondCardFlip.style.display = "none";
}

//Animation for details book

$(document).ready(function () {
    $(".accordion p").hide();
    $(".accordion h4").click(function () {
        $(this).next("p").slideToggle("slow")
            .siblings("p:visible").slideUp("slow");
        $(this).toggleClass("active");
        $(this).siblings("h4").removeClass("active");
    });
});
