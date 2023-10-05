function menuShow(){
    let menuMobile = document.querySelector('.line-bottom');
    if(menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open');
    } else {
        menuMobile.classList.add('open');
    }
}