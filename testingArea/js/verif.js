
var infos = {
    pseudo: document.getElementById('pseudo'),
    passwordA : document.getElementById('passwordA'),
    passwordB : document.getElementById('passwordB'),
    email : document.getElementById('mail'),
    lastName : document.getElementById('lastName'),
    firstName : document.getElementById('firstName'),
    streetNumber : document.getElementById('streetNumber'),
    streetName : document.getElementById('streetName'),
    ZIP : document.getElementById('ZIP'),
    phrase : document.getElementById('phrase'),
    send : document.getElementById('sendForm'),
    btnVerifForm : document.getElementById('send')
};
infos['btnVerifForm'].disabled = true;
function verifForm(){
    var result = false;
   for ( item in infos){
        if( infos[item].value !== undefined ){
            if(item == 'pseudo' || item == 'passwordA' || item == 'passwordB' || item == 'email' || item == 'lastName' || item == 'firstName' || item == 'streetName' || item == 'phrase'){
                if(isNaN(infos[item].value)){
                    console.log(item + " est bon")
                    result = true;
                }else{
                    console.log(item + " n'est pas bon")
                    result = false
                    break;
                }
            }
        
            if(result == true){
                infos['send'].disabled = false;
            }else{
                console.log('Noooooon!!')
            }
        }
   }
};
 
  
infos['btnVerifForm'].addEventListener('click', verifForm);



