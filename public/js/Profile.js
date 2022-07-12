// Casella di input
const insert = document.createElement('input');
insert.setAttribute("type", "text");

// Bottone di conferma 
const confirm = document.createElement('input');
confirm.setAttribute("class", "confirm_button");
confirm.setAttribute("type", "submit");
confirm.setAttribute("value", "Conferma");

function onResponse(response){
    return response.json();
}

function onMod(json){

    if(json.esito == true){
        console.log(json);
        document.querySelector('span').textContent = '';
        window.location.reload();
    }

    if(json.esito == false && json.value==1)
    {
            document.querySelector("span[id='eusername']").textContent = 'Max 16 Caratteri';
    }
    else if(json.esito == false && json.value==2)
    {
        document.querySelector("span[id='eemail']").textContent = 'Email Errata';
    }
    else if(json.esito == false && json.value==3)
    {
        document.querySelector("span[id='epassword']").textContent = 'Min 8 Caratteri';
    }
}
  

function onClickNome() 
{
    const formNome = document.querySelector("#name");

    insert.setAttribute("name", "new_name");

    // Aggiungo quello che ho creato al div apposito
    formNome.appendChild(insert);
    formNome.appendChild(confirm);
    confirm.addEventListener("click", ModificaNome);
}


function ModificaNome(event){
    event.preventDefault();

    const button = event.currentTarget;
    const token = document.querySelector("input[name='_token']");
    
    const form = document.querySelector("form[id='name']");
    const formData = new FormData(form);

    fetch(BASE_URL + "/Modifica", {method: 'post', headers: {'X-CSRF-TOKEN': token.value}, body: formData}).then(onResponse).then(onMod);
}


function onClickCognome() 
{
    const formCognome = document.querySelector("#surname");

    insert.setAttribute("name", "new_surname");
    
    formCognome.appendChild(insert);
    formCognome.appendChild(confirm);
    confirm.addEventListener("click", ModificaCognome);
}


function ModificaCognome(event){
    event.preventDefault();

    const button = event.currentTarget;
    const token = document.querySelector("input[name='_token']");
    
    const form = document.querySelector("form[id='surname']");
    const formData = new FormData(form);

    fetch(BASE_URL + "/Modifica", {method: 'post', headers: {'X-CSRF-TOKEN': token.value}, body: formData}).then(onResponse).then(onMod);
}



function onClickUsername() 
{
    const formUsername = document.querySelector("#username");

    insert.setAttribute("name", "new_username");
    
    formUsername.appendChild(insert);
    formUsername.appendChild(confirm);
    confirm.addEventListener("click", ModificaUsername);
}


function ModificaUsername(event){
    event.preventDefault();

    const button = event.currentTarget;
    const token = document.querySelector("input[name='_token']");
    
    const form = document.querySelector("form[id='username']");
    const formData = new FormData(form);

    fetch(BASE_URL + "/Modifica", {method: 'post', headers: {'X-CSRF-TOKEN': token.value}, body: formData}).then(onResponse).then(onMod);
}


function onClickEmail() 
{
    const formEmail = document.querySelector("#email");

    insert.setAttribute("name", "new_email");
    
    formEmail.appendChild(insert);
    formEmail.appendChild(confirm);
    confirm.addEventListener("click", ModificaEmail);
}


function ModificaEmail(event){
    event.preventDefault();

    const button = event.currentTarget;
    const token = document.querySelector("input[name='_token']");

    const form = document.querySelector("form[id='email']");
    const formData = new FormData(form);

    fetch(BASE_URL + "/Modifica", {method: 'post', headers: {'X-CSRF-TOKEN': token.value}, body: formData}).then(onResponse).then(onMod);
}


function onClickPassword() 
{
    const formPassword = document.querySelector("#password");
    
    insert.setAttribute("name", "new_password");

    formPassword.appendChild(insert);
    formPassword.appendChild(confirm);
    confirm.addEventListener("click", ModificaPassword);
}


function ModificaPassword(event){
    event.preventDefault();

    const button = event.currentTarget;
    const token = document.querySelector("input[name='_token']");

    const form = document.querySelector("form[id='password']");
    const formData = new FormData(form);

    fetch(BASE_URL + "/Modifica", {method: 'post', headers: {'X-CSRF-TOKEN': token.value}, body: formData}).then(onResponse).then(onMod);
}


const button_nome = document.querySelector("#B_name");
button_nome.addEventListener("click", onClickNome);

const button_cognome = document.querySelector("#B_surname");
button_cognome.addEventListener("click", onClickCognome);

const button_username = document.querySelector("#B_username");
button_username.addEventListener("click", onClickUsername);

const button_email = document.querySelector("#B_email");
button_email.addEventListener("click", onClickEmail);

const button_password = document.querySelector("#B_password");
button_password.addEventListener("click", onClickPassword);
