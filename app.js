$(function(){

	//VARIABLES
	var imagen;
	var Value;
	var input;
	var ImgX, ImgY;
	var DataImg;
	var TipoTexto;
	var TamOriginal, TamActual, TamActualNum, NuevaFuente;
	var Color;

	//SELECCIONAR IMAGEN
	$("#imagen-select a").on("click", function(){

		imagen = $(this).children("img").attr("id");
		$(".imagenInput").attr("src", "fondo/"+imagen+'');


		//COLOR PICKER
		$("#colorpicker4").spectrum({
			preferredFormat: "hex",
    		showInput: true,
			hide: function(c){ 
				Color = c.toRgbString();
				$('#imagen p').css('color', Color);
			}	
		});

		//TEXTO EN IMAGEN
		$("input#texto").keyup(function(){
		    Value = $(this).val();
		    $("p.textoInput").text(Value);
		    $(".tipoTexto li a").text(Value);
		}).keyup();

		//SELECCIONAR TIPO DE LETRA
		$(".tipoTexto li a").on("click", function(){
			TipoTexto = $(this).attr("id");
			$("#imagen p").removeClass().addClass("textoInput ui-draggable ui-draggable-handle "+TipoTexto);
		});


		//MOVER TEXTO EN IMAGEN
		input = $('p.textoInput').draggable({
			drag: function(){
	            var offset = $(this).offset();
	        }
		});


		//INPUT PARA TAMAÑO DE TEXTO
		// Reiniciar el tamaño de la fuente
		TamOriginal = $('#imagen p').css('font-size');
		$(".reiFuente").click(function(){
			$('#imagen p').css('font-size', TamOriginal);
		});

		// Incrementar el tamaño de la fuente
		$(".aumFuente").click(function(){
			TamActual = $('#imagen p').css('font-size');
			TamActualNum = parseFloat(TamActual, 10);
			NuevaFuente = TamActualNum+1;
			$('#imagen p').css('font-size', NuevaFuente);
			return false;
		});

		// Disminuir el tamaño de la fuente
		$(".disFuente").click(function(){
			TamActual = $('#imagen p').css('font-size');
			TamActualNum = parseFloat(TamActual, 10);
			NuevaFuente = TamActualNum-1;
			$('#imagen p').css('font-size', NuevaFuente);
			return false;
		});

		//ENVIAR DATOS PARA IMAGEN
	    $("#enviarimagen").on("click", function(){
	    	ImgX = input.draggable().offset().left;
	    	ImgY = input.draggable().offset().top;

	    	if(Color==undefined){
	    		Color="rgb(0, 0, 0)";
	    	}

	    	DataImg = {"imagen":imagen, "texto":Value, "textoTam":NuevaFuente, "fuente":TipoTexto, "color":Color, "imgX":ImgX, "imgY":ImgY};

	    	console.log(DataImg);	    	
	    	
	    	$.ajax({
	    		type: "POST",
	            url: "img.php",
	            data: DataImg,
	            success:function(response){
	                
	                var data = $.parseJSON(response)

	                console.log(data.texto);

	            }
	    	});
			
	    });

	});

});