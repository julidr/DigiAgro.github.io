$(function(){
	$("#bing").on("click", function(){
		$("#inS").validate ({
			rules:{
				email:{minlength:5,maxlength:45,email:true},
				pwd:{required:true,minlength:5,maxlength:45},

			},
			messages:{
				email:{minlength:"Minimo 5",maxlength:"Maximo 45",email:"Formato no Valido"},
				pwd:{required:"Campo Obligatorio",minlength:"Minimo 5",maxlength:"Maximo 45"},
			}
		});
	});
});