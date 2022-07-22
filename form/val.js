var id_mov = document.getElementsByName("id_mov");
var id_pro = document.getElementsByName("id_producto");

function validacion(){

	let opc = [id_mov,id_pro]

	for(var o=0;i<opc.length; 0++){

		for(var i=0; i<opc[o].length; i++) {
		  if(opciones[i].checked) {
		    seleccionado = true;
		    break;
		  }
		}

	}

	if(!seleccionado) {
	  return false;
	}
}