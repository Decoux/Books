function flip(element){
    cardFlip = element.childNodes[5];
    
    
    // cardFlip.style.display = "none";
    cardFlip.setAttribute('class', 'absolute opacityimg card__wrapper sizeImgCard');
    secondCardFlip = element.childNodes[3];
    secondCardFlip.style.display="block";
    
}

function reFlip(element){
    cardFlip = element.childNodes[5];
    cardFlip.setAttribute('class', 'sizeImgCard');

    secondCardFlip = element.childNodes[3];
    secondCardFlip.style.display = "none";
}

function flipBook(element) {
    cardFlip = element.childNodes[5];
    console.log(element.childNodes[5]);

    // cardFlip.style.display = "none";
    cardFlip.setAttribute('class', 'absolute-book opacityimg card__wrapper col-md-12 size-div-img');
    secondCardFlip = element.childNodes[3];
    secondCardFlip.style.display = "block";

}

function reFlipBook(element) {
    cardFlip = element.childNodes[5];
    cardFlip.setAttribute('class', 'absolute-book col-md-12 size-div-img');

    secondCardFlip = element.childNodes[3];
    secondCardFlip.style.display = "none";
}
