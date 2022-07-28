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
const windowMetade = window.innerHeight * 0.95

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
const windowFazemos = window.innerHeight * 0.95

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
const windowAdotar = window.innerHeight * 0.95

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

//Animação ao scroll = Motivos grid
const sectionMotivos = document.querySelectorAll('.scroll-motivos')
const windowMotivos = window.innerHeight * 0.8

function scrollMotivos(){
   sectionMotivos.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowMotivos) <= 0
        if (somaSectionSomos){
            item.classList.add('motivos-grid-js')
        }
    })
}
window.addEventListener('scroll', scrollMotivos)

//Animação ao scroll = Razões para adotar
const sectionRazoes = document.querySelectorAll('.motivos-razoes')
const windowRazoes = window.innerHeight * 0.95

function scrollRazoes(){
   sectionRazoes.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowRazoes) <= 0
        if (somaSectionSomos){
            item.classList.add('razoes-scroll')
        }
    })
}
window.addEventListener('scroll', scrollRazoes)

const sectionGanhamos = document.querySelectorAll('.scroll-ganhamos')
const windowganhamos = window.innerHeight * 0.9

function scrollGanhamos(){
   sectionGanhamos.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowganhamos) <= 0
        if (somaSectionSomos){
            item.classList.add('ganhamos-js')
        }
    })
}
window.addEventListener('scroll', scrollGanhamos)

//Scroll time texto
const sectionTimeTexto = document.querySelectorAll('.time-grid')
const windowTimeTexto = window.innerHeight * 0.8

function scrollTimeTexto(){
   sectionTimeTexto.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowganhamos) <= 0
        if (somaSectionSomos){
            item.classList.add('time-grid-js')
        }
    })
}
window.addEventListener('scroll', scrollTimeTexto)

//scroll footer
const sectionContato = document.querySelectorAll('.contato-grid')
const windowContato = window.innerHeight * 0.9

function scrollContato(){
   sectionContato.forEach((item) => {
        const alturaSectionSomos = item.getBoundingClientRect().top
        const somaSectionSomos = (alturaSectionSomos - windowContato) <= 0
        if (somaSectionSomos){
            item.classList.add('contato-grid-js')
        }
    })
}
window.addEventListener('scroll', scrollContato)

//voltar topo
const voltarTopo = document.querySelectorAll('.voltar-topo')

function voltar(event){
    event.preventDefault()
    const href = event.currentTarget.getAttribute('href')
    const section = document.querySelector(href)
    section.scrollIntoView({
        behavior: 'smooth',
        block: 'center',
      });
}

voltarTopo.forEach((link) => {
   link.addEventListener('click', voltar);
});