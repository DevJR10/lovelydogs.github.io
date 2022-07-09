

//Rolagem suave
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



//Modal
// const botaoAbrir = document.querySelector('[data-modal="abrir"]');
//   const botaoFechar = document.querySelector('[data-modal="fechar"]');
//   const containerModal = document.querySelector('[data-modal="container"]');
  
//   if(botaoAbrir && botaoFechar && containerModal) {
    
//     function toggleModal(event) {
//       event.preventDefault();
//       containerModal.classList.toggle('ativo');
//     }
//     function cliqueForaModal(event) {
//       if(event.target === this) {
//         toggleModal(event);
//       }
//     }
  
//     botaoAbrir.addEventListener('click', toggleModal);
//     botaoFechar.addEventListener('click', toggleModal);
//     containerModal.addEventListener('click', cliqueForaModal);
//   }


//   const botao = document.querySelector('.active-mobile')
//    const lista = document.querySelector('#lista-menu')

//    function abrirMenu(){
//       lista.classList.toggle('ativo')
//    }

//    botao.addEventListener('click', abrirMenu)



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