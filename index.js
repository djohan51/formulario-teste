const form = document.getElementById('cadastro-form');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    console.log(formData);
    // Aqui você pode enviar os dados para um servidor ou fazer outra ação
});