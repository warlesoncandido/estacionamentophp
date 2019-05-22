function cadastrar(){
    event.preventDefault();
    var form = document.createElement('form');
    form.action="controller.php?cadastro=1";
    form.method="POST";
    form.id="formCad";

    var titulo = document.createElement('h2');
    titulo.value="Cadastro";
    titulo.innerHTML="Cadastro";
    titulo.style.textAlign="center";
    titulo.style.color="green";
    
    // criando div form-group

    var div = document.createElement('div');
    div.className="form-group";

    var div1 = document.createElement('div');
    div1.className="form-group";

    var div2 = document.createElement('div');
    div1.className="form-group";

    // Criando input Name

    var name = document.createElement('input');
    name.name="nome";
    name.type="text";
    name.className="form-control";
    name.placeholder="Usuario";

    // Criando input email

    var email = document.createElement('input');
    email.name="email";
    email.type='email';
    email.className="form-control";
    email.placeholder="E-mail";

    // Criando input password

    var pass = document.createElement('input');
    pass.name="senha";
    pass.type='password';
    pass.className="form-control";
    pass.placeholder="******";

    // Criando button 

    var button = document.createElement('input');
    button.type= "submit";
    button.className = "btn btn-block btn-success btn-large";
    button.value="Cadastrar";
    button.style.marginTop = "10px";

    form.appendChild(titulo);

    form.appendChild(div);
    div.appendChild(name);

    form.appendChild(div1);
    div1.appendChild(email);

    form.appendChild(div2);
    div2.appendChild(pass)

    form.appendChild(button);

    var tarefa =document.getElementById('areaCad');
    tarefa.innerHTML="";
    tarefa.insertBefore(form,tarefa[0]);
    

}

document.getElementById('cadastrar').addEventListener("click",cadastrar);

function esqueciSenha(){
    event.preventDefault();
    var form = document.createElement('form');
    form.method= 'POST';
    form.action = "controller.php?cadastro=2";

    var titulo = document.createElement('h2');
    titulo.value="Esqueceu a Senha!!";
    titulo.innerHTML="Esqueceu a Senha!!";
    titulo.style.textAlign="center";
    titulo.style.marginTop="10px";
    titulo.style.color="red";


    var usuario = document.createElement('input');
    usuario.name = 'login';
    usuario.className='form-control';
    usuario.placeholder="login";
    usuario.id='user';
    usuario.type='text'

    var div = document.createElement('div');
    div.className='form-group';

    var div1 = document.createElement('div');
    div.className='form-group';

    var email = document.createElement('input');
    email.name = '';
    email.className='form-control';
    email.placeholder="email";
    email.id='user';
    email.type='email';

    var button= document.createElement('input');
    button.type='submit';
    button.value="Enviar";
    button.className='btn btn-block btn-danger';
    button.style.marginTop='10px';

    form.appendChild(titulo);
    form.appendChild(div);
    div.appendChild(usuario);

    form.appendChild(div1);
    div1.appendChild(email);

    form.appendChild(button);

    var tarefa =document.getElementById('areaCad');
    tarefa.innerHTML="";
    tarefa.insertBefore(form,tarefa[0]);
    
}

document.getElementById('esqueci').addEventListener("click",esqueciSenha);
