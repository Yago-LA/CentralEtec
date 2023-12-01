const menu = document.querySelector('#nave');

function activeScroll(){
    menu.classList.toggle('ativo', scrollY > 300)
}
window.addEventListener('scroll', activeScroll);