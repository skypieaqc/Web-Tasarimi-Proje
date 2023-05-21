
function Validation(){
    var Email = document.getElementById('input').value;
    var text = document.getElementById('e-mailtext');
    var Kontrol=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if(Email.match(Kontrol)){
        text.innerHTML='E-Mail Adresiniz Gecerli';
        text.style.color="yellow";
    }
    else{
        text.innerHTML='E-Mail Adresiniz Gecersiz';
        text.style.color='red';
    }
}

function validateForm()
{
    var Email = document.getElementById('input').value;
    var text = document.getElementById('e-mailtext');
    var Kontrol=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    var x =document.forms["formum"]["fname"].value;

    var y = document.forms["formum"]["fname2"].value;


    if(Email.match(Kontrol)){
        
    }
    else{
        if(y==null || y=="" || x== null || x == ""){
            alert("Bilgilerinizi Eksik Girmeyin");
            return false;
        }
        else{
            alert("Bilgilerinizi Yanlis Girmeyin");
            return false;
        }
    }
}

function gizli(){

    var mail =document.forms["formum"]["fname"].value;

    var index = mail.indexOf("@");

    var kullanici = mail.substring(0, index);

    document.getElementById("gizli").innerHTML= kullanici;
}