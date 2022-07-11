//Scroll suave
const linksInternos = document.querySelectorAll('.menu nav a[href^="#"]')

function scrollSobre(event){
    event.preventDefault()
    const href = event.currentTarget.getAttribute('href')
    const section = document.querySelector(href)
    section.scrollIntoView({
        behavior: 'smooth',
        block: 'center',
      });
}

linksInternos.forEach((link) => {
    link.addEventListener('click', scrollSobre);
});

//Animação ao scroll = Quem Somos
const sectionQuemSomos = document.querySelectorAll('.somos-scroll')
const windowMetade = window.innerHeight * 0.85

function scroll(){
    sectionQuemSomos.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowMetade) <= 0
        if (somaSectionSomos){
            item.classList.add('ativo-scroll')
        }
    })
}
window.addEventListener('scroll', scroll)

//Animação ao scroll = Por que fazemos isso
const sectionPqFazemos = document.querySelectorAll('.porque-scroll')
const windowFazemos = window.innerHeight * 0.9

function scrollPorque(){
   sectionPqFazemos.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowFazemos) <= 0
        if (somaSectionSomos){
            item.classList.add('ativo-porque')
        } 
    })
}
window.addEventListener('scroll', scrollPorque)


//Animação ao scroll = Adotar
const sectionAdotar = document.querySelectorAll('.adotar-scroll')
const windowAdotar = window.innerHeight * 0.9

function scrollAdotar(){
   sectionAdotar.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowAdotar) <= 0
        if (somaSectionSomos){
            item.classList.add('ativo-adotar')
        }
    })
}
window.addEventListener('scroll', scrollAdotar)