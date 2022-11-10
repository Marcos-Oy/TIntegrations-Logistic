function validarBultos() {
    var todo_correcto = true;
    if (document.getElementById('alto').value > 0 || 
        document.getElementById('largo').value > 0 || 
        document.getElementById('ancho').value > 0 ||
        document.getElementById('peso').value >0){
        if (document.getElementById('cantidad').value == 0 || document.getElementById('cantidad').value == ''){
            todo_correcto = false;
            alert('No se ingresó una cantidad de bultos')
        }
    }
    if (document.getElementById('cantidad').value > 0) {
        if (document.getElementById('alto').value == '' ||
            document.getElementById('alto').value == 0 ||
            document.getElementById('largo').value == '' ||
            document.getElementById('largo').value == 0 ||
            document.getElementById('ancho').value == '' ||
            document.getElementById('ancho').value == 0 ||
            document.getElementById('peso').value == '' ||
            document.getElementById('peso').value == 0) {
            todo_correcto = false;
            alert('Debe indicar los datos del bulto.');
        }
    } else {
        if (document.getElementById('qsobres').value == '' || document.getElementById('qsobres').value < 1) {
            todo_correcto = false;
            alert('Debe indicar por lo menos 1 sobre o paquete para calcular el valor del flete');
        }
    }
    return todo_correcto;
}