// Event for toggle menu in mobile
const menuToggle = document.querySelector('#mobile-menu');
const navList = document.querySelector('.nav-list');

menuToggle.addEventListener('click', () => {
    navList.classList.toggle('active');
});
 
// Events for form
document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let name = document.getElementById('name').value.trim();
    let last_name = document.getElementById('last-name').value.trim();
    let email = document.getElementById('email').value.trim();
    let message = document.getElementById('message').value.trim();
    
    // Validation form
    if (name === '' || last_name === '' || email === '' || message === '') {
        let msg_txt = document.querySelector('.msg-txt');
        msg_txt.style.fontSize = '25px';
        msg_txt.innerHTML = '<div class="alert alert-danger">Revise correctamente sus campos</div>';
        setTimeout(() => {
         msg_txt.style.display = "none"; 
        }, 1800);
        msg_txt.style.display = 'block';
        return;
    }

    // Validation email
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        alert('Por favor, introduce un correo electrónico válido');
        return;
    }

    // Send Form using Ajax
    let formData = new FormData(this);
    fetch('./connection/form.php', {
        method: 'POST',
        body: formData
    })
    .then(response =>  response.json())
    .then(data => { 
        let success_txt = document.querySelector('.success-msg');
        success_txt.style.fontSize = '25px';  
        if (data.success) {
            success_txt.innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
        } else {
            let errors = data.errors.join('<br>');
            success_txt.innerHTML = '<div class="alert alert-danger">' + errors + '</div>';
        }
        setTimeout(() => {
            success_txt.style.display = "none"; 
            location.reload();
        }, 3500); 
        success_txt.style.display = 'block';
    })
    .catch(error => {
        console.error('Error:', error);
        let success_txt = document.querySelector('.success-msg');
        success_txt.innerHTML = '<div class="alert alert-danger">Ocurrió un error al enviar el formulario</div>';
    });
    
});