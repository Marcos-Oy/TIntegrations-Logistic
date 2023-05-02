document.addEventListener("DOMContentLoaded", CardDisabled, false); //Ejecuta una función de forma automática

function CardDisabled() {
  document.getElementById("nombrealterno").disabled = true;
  document.getElementById("tel1alterno").disabled = true;
  document.getElementById("tel2alterno").disabled = true;
}

function SwitchCheckBox() {
  if (document.getElementById("Hedit").checked == true) {
    document.getElementById("nombrealterno").disabled = false;
  document.getElementById("tel1alterno").disabled = false;
  document.getElementById("tel2alterno").disabled = false;
  } else {
    document.getElementById("nombrealterno").disabled = true;
    document.getElementById("tel1alterno").disabled = true;
    document.getElementById("tel2alterno").disabled = true;;
  }
}
