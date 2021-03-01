function logar(){
    var user = document.getElementById("InputUser");
    var password = document.getElementById("InputPassword");

    if(user.value == "Admin" && password.value == "admin"){
        localStorage.setItem("acesso", true);
        alert("Usuário Autenticado!");
        window.location.href = "index.html";
    }else{
        alert("Por favor faça o login.");
    }
}