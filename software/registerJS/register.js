document.addEventListener("DOMContentLoaded", createPage);

function send(event) {
    console.log("event - ", event);
    event.preventDefault();
    fetch("register.php", {method: "POST", body: new FormData(document.forms[0])})
    //     .then(response => response.text()).then(outputResult => {
    //     //document.querySelector(".output").innerHTML = outputResult;
    // })
}

function createPage() {
    let elementContainer = document.createElement("div");
    elementContainer.classList.add("container");
    document.body.append(elementContainer);

    let elementHeader = document.createElement("div");
    elementHeader.classList.add("header");
    elementHeader.innerText = "SUPER NOTEBOOK";
    elementContainer.append(elementHeader);

    let elementContent = document.createElement("div");
    elementContent.classList.add("content");
    elementContainer.append(elementContent);

    let form = document.createElement("form");
    form.id = "form";
    elementContent.append(form);

    let elementInputUsername = document.createElement("input");
    elementInputUsername.placeholder = "Username";
    elementInputUsername.classList.add("inputForm");
    elementInputUsername.name = "inputUsername";
    elementInputUsername.type = "text";
    form.append(elementInputUsername);

    let elementInputPassword = document.createElement("input");
    elementInputPassword.placeholder = "Password";
    elementInputPassword.classList.add("inputForm");
    elementInputPassword.name = "inputPassword";
    elementInputPassword.type = "password";
    form.append(elementInputPassword);

    let elementInputConfirmPassword = document.createElement("input");
    elementInputConfirmPassword.placeholder = "Confirm password";
    elementInputConfirmPassword.classList.add("inputForm");
    elementInputConfirmPassword.type = "password";
    form.append(elementInputConfirmPassword);

    let elementInputEMail = document.createElement("input");
    elementInputEMail.placeholder = "EMail";
    elementInputEMail.classList.add("inputForm");
    elementInputEMail.name = "inputEMail";
    elementInputEMail.type = "text";
    form.append(elementInputEMail);

    let button = document.createElement("input");
    button.classList.add("buttonReg");
    button.type = "submit";
    button.name = "button";
    button.onclick = send(event);
    button.innerText = "Register";
    form.append(button);

    let elementOutputResult = document.createElement("div");
    elementOutputResult.classList.add("output");
    form.append(elementOutputResult);

    let elementFooter = document.createElement("div");
    elementFooter.classList.add("header");
    elementFooter.classList.add("footer");
    elementFooter.innerText = "Copyright by ..., 2016";
    elementContainer.append(elementFooter);
}
