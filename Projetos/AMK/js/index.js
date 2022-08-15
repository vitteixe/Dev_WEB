class Slide {
    constructor(id){
        this.slide = document.querySelector(`[data-slide='${id}']`);
        this.active = 0;
        console.log(this.slide);
        this.activeSlide(1)
    }

    activeSlide(index){
        this.active = index;
        this.items = this.slide.querySelectorAll('.slide-Items > *')
        this.items[index].classList.add('active');
    }

}

new Slide ('slide')