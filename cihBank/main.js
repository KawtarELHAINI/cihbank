function validateForm() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (!emailRegex.test(email)) {
        alert('Veuillez entrer une adresse email valide.');
        
        return false;
    }

    if (!passwordRegex.test(password)) {
        alert('Le mot de passe doit répondre à certaines exigences.');

        return false;
    }

    return true;
}