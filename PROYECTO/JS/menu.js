const hamburguer = document.querySelector('.hamburger');
const menu = document.querySelector('.menu-navegacion');

const tablaEnf=document.querySelector('.Enf');
const tablaDoc=document.querySelector('.Doc');

/*console.log(menu);
console.log(hamburguer);*/


hamburguer.addEventListener('click',()=>{
  menu.classList.toggle("spread");
});

window.addEventListener('click',e=>{
  if(menu.classList.contains('spread') && e.target !=menu && e.target !=hamburguer ){
    menu.classList.toggle("spread");
  }
});

function formulario(){
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange =function(){
    if (this.readyState==4 && this.status==200) {

      document.getElementById("desplegable").innerHTML=this.responseText;
    }

  };
//accedemos al archivo
xhttp.open("GET","BD/registro.php",true);
xhttp.send();
}

//para el apartado de la tabla de los enfermeros
tablaEnf.addEventListener('click',()=>{
 //console.log(tablaEnf);

    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange =function(){
      if (this.readyState==4 && this.status==200) {

        document.getElementById("Enfermeros").innerHTML=this.responseText;
      }

    };
  //accedemos al archivo
  xhttp.open("GET","BD/doctoresL.php",true);
  xhttp.send();

});

//para el apartado de la tabla de los Doctores
tablaDoc.addEventListener('click',()=>{
 //console.log(tablaEnf);

    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange =function(){
      if (this.readyState==4 && this.status==200) {

        document.getElementById("Doct").innerHTML=this.responseText;
      }

    };
  //accedemos al archivo
  xhttp.open("GET","BD/doctorgrl.php",true);
  xhttp.send();

});
