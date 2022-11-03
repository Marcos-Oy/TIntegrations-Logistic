
document.addEventListener('DOMContentLoaded', MenuActive, false); //Ejecuta función de forma automática

function MenuActive() {

    /**
     * @Author Marcos Oyarzo
     * Para que el aside o menú lateral sea adaptable con cualquier servidor 
     * Este extrae la url actual y las divide en partes, su función principal
     * es extraer el protocolo (HTTP ó HTTPS) y el nombre del dominio,
     * esto para poder controlar las opciones del menú que se encuentran activas.
     * 
     * Recuerda que si navegaste dentro de la misma opción del menú y la url cambió
     * el menú activ se va a perder, por lo cual recuerda poner agregar las rutas 
     * con los operadores lógicos.
     */

    var URLactual = window.location; //Extraemos la url actual
    var URLanalizada = /^(\w+):\/\/([^\/]+)([^]+)$/.exec(URLactual); //La analizamos para poder extraer sus partes
    var [Url,protocolo,servidor,path] = URLanalizada; // El análisis de la url la integramos en un array

    //Verificamos en consola que se hayan extraído correctamente
    console.log('Url: ' + Url);
    console.log('Protocolo: ' + protocolo);
    console.log('Servidor: ' + servidor);
    console.log('Path: ' + path);

    $('.nav-link').removeClass("active"); //Formatear opciones activas
    $('.nav-item').removeClass("menu-closed"); //Formatear despliegues de menú
   
    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/dashboard/dashboard.php") 
    {
        document.getElementById("dashboard").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/users/show.php"
    || URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/users/edit.php"
    || URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/users/create.php") 
    {
        document.getElementById("MenuAdministrar").className = "nav-item menu-open"; //Se despliega el menú
        document.getElementById("administrar").className = "nav-link active"; //Activamos el menú
        document.getElementById("users").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/nominar/show.php") 
    {
        document.getElementById("MenuAdministrar").className = "nav-item menu-open"; //Se despliega el menú
        document.getElementById("administrar").className = "nav-link active"; //Activamos el menú
        document.getElementById("Nominar").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/asignar/show.php") 
    {
        document.getElementById("MenuOrdenes").className = "nav-item menu-open"; //Se despliega el menú
        document.getElementById("ordenes").className = "nav-link active"; //Activamos el menú
        document.getElementById("asignar").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/recibir/show.php") 
    {
        document.getElementById("MenuOrdenes").className = "nav-item menu-open"; //Se despliega el menú
        document.getElementById("ordenes").className = "nav-link active"; //Activamos el menú
        document.getElementById("recibir").className = "nav-link active"; //Activamos la opción
    }
    
    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/CargarODTexterna/show.php") 
    {
        document.getElementById("MenuOrdenes").className = "nav-item menu-open"; //Se despliega el menú
        document.getElementById("ordenes").className = "nav-link active"; //Activamos el menú
        document.getElementById("ODT").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/AsignarCodigo/show.php") 
    {
        document.getElementById("MenuOrdenes").className = "nav-item menu-open"; //Se despliega el menú
        document.getElementById("ordenes").className = "nav-link active"; //Activamos el menú
        document.getElementById("codigo").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/devolver/show.php") 
    {
        document.getElementById("MenuOrdenes").className = "nav-item menu-open"; //Se despliega el menú
        document.getElementById("ordenes").className = "nav-link active"; //Activamos el menú
        document.getElementById("devolver").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/entregar/show.php") 
    {
        document.getElementById("MenuOrdenes").className = "nav-item menu-open"; //Se despliega el menú
        document.getElementById("ordenes").className = "nav-link active"; //Activamos el menú
        document.getElementById("entregar").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/NuevaOrden/show.php") 
    {
        document.getElementById("NuevaOrden").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/Cotizador/show.php") 
    {
        document.getElementById("cotizador").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/MisDatos/show.php") 
    {
        document.getElementById("MisDatos").className = "nav-link active"; //Activamos la opción
    }

    if (URLactual == protocolo+"://"+servidor+"/TIntegrations-Logistic/resources/views/RevisarOrden/show.php") 
    {
        document.getElementById("RevisarOrden").className = "nav-link active"; //Activamos la opción
    }
}
