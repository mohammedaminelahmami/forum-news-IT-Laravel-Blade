let leftArrow = ()=>{
    alert('leftArrow Clicked !!')
}

let rightArrow = ()=>{
    alert('rightArrow Clicked !!')
}

// Nav Menu Mobile

let my_nav = document.getElementById('my_nav');
let menuBtn = document.getElementById('menuBtn');

menuBtn.addEventListener('click', ()=>{
	my_nav.classList.toggle("show_menu");
})