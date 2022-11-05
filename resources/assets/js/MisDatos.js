
document.addEventListener('DOMContentLoaded', CardDisabled, false); //Ejecuta función de forma automática

function CardDisabled(){
    document.getElementById('nombre').disabled=true
    document.getElementById('tel1').disabled=true
    document.getElementById('tel2').disabled=true
    document.getElementById('mail').disabled=true
    document.getElementById('ofi').disabled=true
    document.getElementById('btn1').hidden=true
}

function SwitchCheckBox()
{
    if(document.getElementById('Hedit').checked == true){
        document.getElementById('nombre').disabled=false
        document.getElementById('tel1').disabled=false
        document.getElementById('tel2').disabled=false
        document.getElementById('mail').disabled=false
        document.getElementById('ofi').disabled=false
        document.getElementById('btn1').hidden=false

    }else{
        document.getElementById('nombre').disabled=true
        document.getElementById('tel1').disabled=true
        document.getElementById('tel2').disabled=true
        document.getElementById('mail').disabled=true
        document.getElementById('ofi').disabled=true
        document.getElementById('btn1').hidden=true
    }    
}