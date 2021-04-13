function check_register() {
    const name = document.getElementById("name_register");
    const email = document.getElementById("email_register");
    const birthday = document.getElementById("birthDate_register");
    const pass = document.getElementById("password_register");
    const confirm_pass = document.getElementById("confirm-password_register");
    const bairro = document.getElementById("bairro_register");
    const address = document.getElementById("address_register");

    if(name.value == "" || email.value == "" || birthday.value == "" || pass.value == "" || confirm_pass.value == "" || bairro.value == "" ){
        alert("O campo não pode ser vazio");
        return false;
    }
    if(pass.value != confirm_pass.value){
        alert("As senhas inseridas não conferem");
        return false;
    }
}

function check_login() {
    const email = document.getElementById("email_login");
    const pass = document.getElementById("password_login");

    if(email.value == "" || pass.value == ""){
        alert("Os campos E-mail/Senha não podem ser vazios");
        return false;
    }

}