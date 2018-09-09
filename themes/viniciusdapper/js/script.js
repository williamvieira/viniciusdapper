function aparecePromo() {
    var x = document.getElementById('awards-none');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}

function valueChanged()
{
    if($('.check').is(":checked"))   
        $(".register-responsible").show();
    else
        $(".register-responsible").hide();
}

function mostraResposta(p)
{
document.getElementById("pergunta1").className = "faq-text-invisible";
document.getElementById("pergunta2").className = "faq-text-invisible";
document.getElementById("pergunta3").className = "faq-text-invisible";
document.getElementById("pergunta4").className = "faq-text-invisible";
document.getElementById("pergunta5").className = "faq-text-invisible";
document.getElementById("pergunta6").className = "faq-text-invisible";

document.getElementById(p).className = "faq-text-visible";
}


