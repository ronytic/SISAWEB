var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  var y;
  x=$("#btnGuardarA");
  x.click(presionBoton)
  y=$("#btnBorrarA");
  y.click(presionBoton2)
}

function presionBoton()
{
  //alert("Se presionó el botón Guardar");
  x=$("#txtAUsuario");
  y=x.attr("value");
  
  z=$("#txtAPassword");
  z=z.attr("value");
  document.location.href="application/controller/autenticacionCtrl.php?usu="+y+"&pas="+z+"&pagina=autenticar&";
}


function presionBoton2()
{
  //alert("Se presionó el botón limpiar");
  var z;
  z=$("#txtAUsuario").attr("value","");
  var y;
  y=$("#txtAPassword").attr("value","");
  
}

function errorAuten()
{
	alert('error en autenticacion');
	//document.location.href="application/controller/autenticacionCtrl.php";
}

function menu()
{
	//alert('holaaa');
	$.ajax({
	url:"menu/menu.php",
	type:'get',
	success: function (data){
		$("#Pmenu").html(data);
	}
	});
}

