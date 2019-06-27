    var num=4;
    var arriba=7;
    function pulsar(e) {    
      switch (e.keyCode) {     
        case 37: // izquierda
             console.log(e.keyCode);
            if (num!=0){
                num-=4;
                $(".personaje").css("margin-left",num+"%");
            }
          break;
        case 39: // derecha
             console.log(e.keyCode);
            $(".personaje").css("margin-left",num+"%");
            num+=4;
          break;
         default:
            console.log(e.keyCode);
         break;
      }
    }