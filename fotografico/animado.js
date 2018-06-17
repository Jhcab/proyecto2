			var actual = 0;
			
			function mostrar(n){
				var imagenes = document.getElementsByClassName("imagen");
				for(i = 0; i< imagenes.length; i++){
					if(imagenes[i].className.includes("actual")){
						imagenes[i].className = imagenes[i].className.replace("actual", "");
						break;
					}
				}
				actual = n;
				imagenes[n].className += " actual";
				puntos(n);
			}
			
			function siguiente(){
				actual++;
				if(actual > 3){
					actual = 0;
				}
				mostrar(actual);
			}
			function anterior(){
				actual--;
				if(actual < 0){
					actual = 3;
				}
				mostrar(actual);
			}
			
			var velocidad = 5000;
			var play = setInterval("siguiente()", velocidad);
			
			function playpause(){
				var boton = document.getElementById("btn");
				if(play == null){
					boton.src = "imagenes/pause.png";
					play = setInterval("siguiente()", velocidad);
				} else {
					clearInterval(play);
					play = null;
					boton.src = "imagenes/play.png";
				}
			}