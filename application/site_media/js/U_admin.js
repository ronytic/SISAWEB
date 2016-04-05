var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
   var y;
  y=$("#btnBorrarA");
  y.click(presionBoton2)
}


//uno
function adminusu(x)
{
	//alert("porfaaa"+x);

	 $.ajax({
	url:x,
	type:'get',
	success: function (data){
		$("#body_admin").html(data);
	}
	});
}
function umodifica()
{
	//alert("entro u modifica"+x);
	//alert($('input:radio[name=uestado]:checked').val());
	var x=$('input:radio[name=uestado]:checked').val();
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/usuarios/u_table.php',
		type:'get',
		success: function (data)
		{
			$("#body_admin").html(data);
		}
		});
	}
	else
	{
		//alert(x);
		var y="UsuarioCtrl.php?usu="+x+"&pagina=modifica&"
		 $.ajax({
	url:y,
	type:'get',
	success: function (data){
		$("#body_admin").html(data);
	}
	});
	}
}

function carga(lo,car,per,pas,es)
{
	//alert('porfavor ayudame2222'+car+','+per+','+pas+','+es);
	$("#txtUELoginO").val(lo);
	$("#txtUELogin").val(lo);
	$("#txtUECarnet").val(car);
	$("#sltUEPerfil option[value="+ per +"]").attr("selected",true);
	$("#txtUEPassword").val(pas);
	$("#sltUEEstado option[value="+ es +"]").attr("selected",true);
}


function uelimina()
{
	//alert("porfaaa"+x);
	//alert($('input:radio[name=uestado]:checked').val());
	var x=$('input:radio[name=uestado]:checked').val();
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/usuarios/u_table.php',
		type:'get',
		success: function (data){
		$("#body_admin").html(data);
		}
		});
	}
	else
	{
		if (confirm("esta seguro de eliminar usu"+x)) 
		{
			document.location.href="UsuarioCtrl.php?usu="+x+"&pagina=elimina&";
		}
		else 
		{
			document.location.href="UsuarioCtrl.php?usu="+x+"&pagina=principal&";
		}
		
	}
}
//dos
function uadiciona()
{
	//alert('entro adiciona');
	car=$("#txtUACarnet").val();
	per=$("#sltUAPerfil").val();
	logi=$("#txtUALogin").val();
	pas=$("#txtUAPassword").val();
	obs= $("#sltUAPerfil option:selected").html();
	est=$("#sltUAEstado").val();
	
	//alert("porfavorrr"+car+","+per+","+logi+","+pas+","+obs+","+est);
	document.location.href="UsuarioCtrl.php?car="+car+"&per="+per+"&logi="+logi+"&pas="+pas+"&obs="+obs+"&est="+est+"&pagina=adiciona&";
//	alert($("#sltUANivel").());
}
function umodifica2()
{
	//alert('entro modifica2');
	car=$("#txtUECarnet").val();
	per=$("#sltUEPerfil").val();
	logi=$("#txtUELogin").val();
	pas=$("#txtUEPassword").val();
	obs= $("#sltUEPerfil option:selected").html();
	est=$("#sltUEEstado").val();
	document.location.href="UsuarioCtrl.php?car="+car+"&per="+per+"&logi="+logi+"&pas="+pas+"&obs="+obs+"&est="+est+"&pagina=modifica2&";
//	alert($("#sltUANivel").());
}