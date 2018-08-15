/*
console.log("Hola desde JS");

//DOM
let tabla = document.querySelector(".table");//colocamos el selector CSS, let es una palabra reservada
//querySelector unicamente devuelve un elemento
console.log(tabla);

//seleccionar varios elementos y recorrerlos, es una lista
//se obtiene una lista de nodos
let links = document.querySelectorAll("a");//Recorre todo el arbol buscando todos los elementos que cumplan con lo requerido
console.log(links);
//este arreglo se puede recorrer, forma for each
links.forEach(function(link){//recibe el elemento link,el metodo forEach permite recorrer la lista
  console.log(link);
})
*/
/*
let celdas = document.querySelectorAll("td");
celdas.forEach(function(td){
  //este metodo lo tienen todos los nodos que obtenemos usando JS (addEventListener), recibe 2 argumentos, el Evento y una función
  td.addEventListener('click', function(){
    console.log(this);
  })
})
*/

//Cuando el usuario de click al boton close de una pag de restaurant

//Obteniendo elementos de la clase close
let links = document.querySelectorAll(".close")

//recorrerlos
links.forEach(function(link){

  //agregar un evento click a cada uno de ellos
  link.addEventListener('click', function(ev){//ev es de Event/Evento, trabajara como un objeto que se le pasa como argumento a la funcion
    //prevendremos la ejecucion del comportamiento por defecto, este objeto conitene toda la info del evento
    ev.preventDefault();//el método preventDefault, evita que el comportamiento del evento original se ejecute, Forma 1

    //para poder alterar las clases de un elemento primero debo obtenerlo
    let content = document.querySelector(".content");

    //Quitarle las clases de animacion al content
    content.classList.remove("zoomInUp");
    content.classList.remove("animated");//le quitamos y ponemos animated, para que vuelva a hacer la animación
    //agregar clases para animar su salida
    content.classList.add("zoomOutUp");
    content.classList.add("animated");

    //debido a que realiza la ccion muy rapido tenemos 2 funciones para poder manipular el tiempo de ejecución
    //setTimeout, despues de cierto tiempo 1 sola vez
    //setInterval, despues de cierto tiepo constantemente

    setTimeout(function(){
        location.href = "/boletines"; //Objeto con un atributo href y se le asigna un valor, si dejamos solamente '/' nos llevara asta la raíz
    },1000);//que la ejecute despues de 1000milisegundos = 1seg

    return false; //2da forma
  })
})

/*
//Alteraremos los iconos
let icons = document.querySelectorAll("i");
icons.forEach(function(icon){
  //propiedad classList, que tiene un metodo Remove, que permite quitar clases, tenemos remove, add, etc
  icon.classList.remove("fas");
  icon.classList.add("far");
})
*/
