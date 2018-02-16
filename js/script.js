$(document).ready(function(){

	/*
	var x = 1;
	x = 4;

	var num = 4;

	var leyenda = 'El resultado es: ';

	leyenda = 'Cambie la leyenda';

	var resultado = x * num;

	alert(leyenda + resultado);

	alert(x + num);

	console.log(x + num);
	*/

	/*
	$(selector).evento(function(){

	});
	*/

	$('a.btnsuma').click(function(){
		var n = 10;
		var m = 50;
		var suma = n + m;  
		console.log('La suma es: '+suma);

		$('#txtresultado').html("<span class='alert alert-info'>La suma es: </span>"+suma).css('color', 'red');

		//$('#txtresultado').css('color', 'red');

	});

	$('button.btnresta').hover(function(){
		console.log('Es el evento hover del boton resta');
	});

	$('#numero').keyup(function() {
		/*SI(CONDICION)
			HAGO ALGO POR EL VERDADERO
		SINO
			HAGO ALGO POR EL FALSO
		CIERRA
		*/
		var num = $(this).val();

		if ( num > 10 ) {
			$('#txtresultado').html('Es mayor a 10').css('color','blue').fadeIn('fast');
		}
		else
		{
			$('#txtresultado').html('Es menor a 10').css('color','red').fadeOut();
			$(this).css('border','1px solid red');
		}


	});
	
	var bandera = 1;
	$('button.btnresta').click(function(){
		var well = $('.well'); 
		well.html('<p>Un click</p>');
		//== para comparar
		//!= distinto
		//>= mayor igual
		//<= menor igual
		if (bandera==1){
			well.animate({ 
				width: '500px',
				fontSize: '20px',
				"left": "+=50px" 
			});
			bandera = 2;			
		}
		else
		{
			console.log('Pasa por el false')
			well.animate({ 
				width: '100px',
				fontSize: '12px'

			});	
			bandera = 1;		
		}

		well.after('<p>Un segundo parrafo</p>');
		well.before('<p>Un tercer parrafo</p>');

	});

	$('#opciones').change(function() {
		$('#valor').html($(this).val());
		$('#ventamodal').modal('show');
	});

});
