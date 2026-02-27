let icoEye = document.querySelector(".password-toggle");

icoEye.addEventListener("click", () => {
    let inputPassword = document.querySelector("#password");
    let type = inputPassword.type;
    if (type == "password") {
        inputPassword.type = "text";
    } else {
        inputPassword.type = "password";
    }
    // inputPassword.type =
    //     inputPassword.type === "password" ? "text" : "password";
});
