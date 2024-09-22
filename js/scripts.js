document.addEventListener("DOMContentLoaded", function() {

  const openMenuButton = document.getElementById('open-menu');
  const closeMenuButton = document.getElementById('close-menu');
  const whatsappButton = document.getElementById('whatsapp');
  const btnAbrirPopup = document.querySelectorAll('.contact-btn');
  

  openMenuButton.addEventListener('click', openMenuMobile );
  closeMenuButton.addEventListener('click', closeMenuMobile );
  whatsappButton.addEventListener('click', openWhatsapp );
  btnAbrirPopup.forEach(button => {
    button.addEventListener('click', function() {
      loadFormContact()
    })
  });
  contactFormSelect()

});

const loadFormContact = () => {
  const body = document.body;
  const popup = document.querySelector('#popup');
  const popupContent = document.querySelector('#popupContent');
  const backdropPopup = document.querySelector('#backdropPopup');
  const btnClosePopup = document.querySelector('#btnClosePopup');

  popup.classList.remove('invisible', 'opacity-0');
  popup.classList.add('visible', 'opacity-100');
  popupContent.classList.add('open-modal');
  closeMenuMobile()
  body.classList.add('overflow-hidden');

  body.addEventListener('click', event => {
    if (event.target !== backdropPopup && event.target !== btnClosePopup) return;
    popup.classList.remove('visible', 'opacity-100')
    popup.classList.add('invisible', 'opacity-0')
    popupContent.classList.remove('open-modal')
    body.classList.remove('overflow-hidden')
  });
}

const openWhatsapp = () => {
  const url = `https://wa.me/573014785506?text=Hola,%20estoy%20interesado%20en%20las%20soluciones%20arquitectónicas%20que%20ofrecen.%20¿Podrían%20darme%20más%20información?"`;
  window.open(url, '_blank');
}

const openMenuMobile = () => {
  const body = document.body;
  const mobileMenu = document.getElementById('mobile-menu');
  const overlayMenu = document.getElementById('overlay-menu');
  const closeMenuButton = document.getElementById('close-menu');

  mobileMenu.classList.remove('-left-full');
  mobileMenu.classList.add('left-0');

  closeMenuButton.classList.remove('hidden');
  overlayMenu.classList.remove('hidden');
  body.classList.add('overflow-hidden');
}

const closeMenuMobile = () => {
  const body = document.body;
  const mobileMenu = document.getElementById('mobile-menu');
  const overlayMenu = document.getElementById('overlay-menu');
  const closeMenuButton = document.getElementById('close-menu');

  mobileMenu.classList.remove('left-0');
  mobileMenu.classList.add('-left-full');

  closeMenuButton.classList.add('hidden');
  overlayMenu.classList.add('hidden');
  body.classList.remove('overflow-hidden');
}

const contactFormSelect = () => {
  const selects = document.querySelectorAll('.wpcf7-select');

  selects.forEach(select => {
    const firstOption = select.querySelector('option:first-child');
    if (firstOption && firstOption.value === '') {
      firstOption.disabled = true;
    }
  });
}