const button = document.querySelector('.btn');
const fields = document.querySelectorAll('form input');

const checkInputFields = async () => {
    if (fields[0].value !== '' && fields[1].value !== '')
        button.disabled = false;
    else button.disabled = true;
}

window.addEventListener('keydown', checkInputFields);