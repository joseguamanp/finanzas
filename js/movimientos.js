  $("#miModal").modal("show");
	var num=4;
	var arriba=7;
	function pulsar(e) {	
	  switch (e.keyCode) {
	  	case 38: //arriba  		
	  		$(".imagen").css("margin-top","-"+arriba+"%");
	  		arriba+=arriba;
	  	break;
	  	case 40: //abajo 
	  		if (num!=0){
		  		arriba=7-(arriba); 		
		  		$(".imagen").css("margin-top",arriba+"%");
	  		}
	  	break;	  	
	    case 37: // izquierda
	    	if (num!=0){
				num-=4;
	    		$(".imagen").css("margin-left",num+"%");
			}
	      break;
	    case 39: // derecha
	    	$(".imagen").css("margin-left",num+"%");
	    	num+=4;
	      break;
	     default:
	     	console.log(e.keyCode);
	     break;
	  }
	}