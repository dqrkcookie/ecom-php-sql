function switchForms() {
  const login = document.querySelector('#login');
  const register = document.querySelector('#register');
  const toRegister = document.querySelector('#toRegister');
  const toLogin = document.querySelector('#toLogin');

  toRegister.onclick = () => {
    login.classList.add('hidden');
    register.classList.remove('hidden');
    console.log('clicked');
  };

  toLogin.onclick = () => {
    login.classList.remove('hidden');
    register.classList.add('hidden');
  };
}

switchForms();
