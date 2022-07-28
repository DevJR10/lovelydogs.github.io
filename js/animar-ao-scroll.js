const sectionQuemSomos = document.querySelectorAll('.somos-scroll')
const windowMetade = window.innerHeight * 0.8

function scroll(){
    sectionQuemSomos.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowMetade) <= 0
        if (somaSectionSomos){
            item.classList.add('ativo')
        } else{
            item.classList.remove('ativo')
        }
    })
}
window.addEventListener('scroll', scroll)