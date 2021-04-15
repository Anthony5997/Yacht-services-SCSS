const items = document.querySelectorAll('.slid');
const nbSlide = items.length;
const next = document.querySelector('.right');
const previews = document.querySelector('.left');
let count = 0;

function nextSlide(){
    items[count].classList.remove('active');
    if(count < nbSlide -1){
        count++;
    }else{
        count = 0;
    }

    items[count].classList.add('active');
}

next.addEventListener('click', nextSlide);

function previewsSlide(){
    items[count].classList.remove('active');
    if(count > 0){
        count--;
    }else{
        count = nbSlide -1;
    }

    items[count].classList.add('active');
}

previews.addEventListener('click', previewsSlide);

function keyPressed(e){
    if(e.keyCode === 37){
        previewsSlide();
    }else if(e.keyCode === 39){
        nextSlide();
    }
}

document.addEventListener('keydown', keyPressed);