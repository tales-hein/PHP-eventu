window.onload = function () {
    showEntrar();
};

function showEntrar() {
    document.getElementById('chk').checked = true;
}

function logar() {
    let dadosLogin = {
        email: document.getElementById('email-login'),
        senha: document.getElementById('senha-login'),
    };

    let request = new XMLHttpRequest();

    request.open('POST', '../../controller/LoginController.php');
    request.setRequestHeader('Content-Type', 'application/json');
    request.send(JSON.stringify(dadosLogin));
}