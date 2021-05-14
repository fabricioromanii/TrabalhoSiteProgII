function check_register() {
    const name = document.getElementById("name_register");
    const email = document.getElementById("email_register");
    const birthday = document.getElementById("birthDate_register");
    const pass = document.getElementById("password_register");
    const confirm_pass = document.getElementById("confirm-password_register");
    const bairro = document.getElementById("bairro_register");
    const address = document.getElementById("address_register");

    if(name.value == "" || email.value == "" || birthday.value == "" || pass.value == "" || confirm_pass.value == "" || bairro.value == "" || address.value == "" ){
        alert("Por favor, complete todos os campos");
        return;
    }
    if(pass.value != confirm_pass.value){
        alert("As senhas inseridas não conferem");
        return;
    }
}

function check_login() {
    const email = document.getElementById("login");
    const pass = document.getElementById("password");

    if(email.value == "admin" || pass.value == "123"){
        alert("login = admin // senha = 123");
        return false;
    }

}