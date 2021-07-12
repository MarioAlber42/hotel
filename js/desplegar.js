  var i=O;
        function read(){
            if(!i) {
                document.getElementById("mostrar").style.
                display="inline";
                 document.getElementById("dots").style.
                display="none";
                  document.getElementById("read").innerHTML="Ocultar";
                i=1;
            }
            
            else {
                   document.getElementById("mostrar").style.
                display="none";
                 document.getElementById("dots").style.
                display="inline";
                  document.getElementById("read").innerHTML="Leer mas";
                i=0;
            }
        }
    