

const btnLogin = document.querySelector('.buttons__login');
const btnAbout = document.querySelector('.buttons__about');
const spaceLogin = document.querySelector('.space');
const spaceAbout = document.querySelector('.space-about');

btnLogin.addEventListener('click', () => {
    btnLogin.classList.add('active');
    btnAbout.classList.remove('active');

    spaceAbout.classList.add('disable');
    spaceLogin.classList.remove('disable');
});

btnAbout.addEventListener('click', () => {
    btnAbout.classList.add('active');
    btnLogin.classList.remove('active');

    spaceLogin.classList.add('disable');
    spaceAbout.classList.remove('disable');
});


