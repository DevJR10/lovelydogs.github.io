export default menuMobile();{
   const botao = document.querySelector('.active-mobile')
   const lista = document.querySelector('#lista-menu')

   function abrirMenu(){
      lista.classList.toggle('ativo')
   }

   botao.addEventListener('click', abrirMenu)
}