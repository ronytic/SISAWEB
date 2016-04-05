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
function admincur(x)
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
function cumodifica()
{
	//alert("entro u modifica"+x);
	//alert($('input:radio[name=uestado]:checked').val());
	var x=$('input:radio[name=idcur]:checked').val();
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/cursos/cu_table.php',
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
		var y="CursoCtrl.php?cur="+x+"&pagina=modifica&"
		 $.ajax({
	url:y,
	type:'get',
	success: function (data){
		$("#body_admin").html(data);
	}
	});
	}
}
//carga(ca,no,ni,ob,es);
function carga(cu,ca,no,co,ni,ob,es)
{
	alert('porfavor carga2222'+ca+','+no+','+ni+','+ob+','+es);
	$("#txtCUId").val(cu);
	$("#txtCUMNombre").val(no);
	$("#txtCUMCodigo").val(co);
	$("#txtCUMNivel").val(ni);
	$("#sltCUMCarrera option[value="+ ca +"]").attr("selected",true);
	$("#txtCUMObservacion").val(ob);
	$("#sltCUMEstado option[value="+ es +"]").attr("selected",true);
}


function cuelimina()
{
	//alert("porfaaa"+x);
	//alert($('input:radio[name=uestado]:checked').val());
	var x=$('input:radio[name=idcur]:checked').val();
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/cursos/cu_table.php',
		type:'get',
		success: function (data){
		$("#body_admin").html(data);
		}
		});
	}
	else
	{
		if (confirm("esta seguro de eliminar cur"+x)) 
		{
			document.location.href="CursoCtrl.php?cur="+x+"&pagina=elimina&";
		}
		else 
		{
			document.location.href="CursoCtrl.php?cur="+x+"&pagina=principal&";
		}
		
	}
}
//dos
function cuadiciona()
{
	alert('entro adiciona');
	nom=$("#txtCUANombre").val();
	cod=$("#txtCUACodigo").val();
	niv=$("#txtCUANivel").val();
	obs=$("#txtCUAObservacion").val();
	est= $("#sltCUAEstado").val();
	car=$("#sltCUACarrera").val();
	
	alert("porfavorrr"+car+","+nom+","+cod+","+niv+","+obs+","+est);
	document.location.href="CursoCtrl.php?car="+car+"&nom="+nom+"&cod="+cod+"&niv="+niv+"&obs="+obs+"&est="+est+"&pagina=adiciona&";
//	alert($("#sltUANivel").());
}
function cumodifica2()
{
	alert('entro modifica2');
	id=$("#txtCUId").val();
	nom=$("#txtCUMNombre").val();
	cod=$("#txtCUMCodigo").val();
	niv=$("#txtCUMNivel").val();
	obs=$("#txtCUMObservacion").val();
	est= $("#sltCUMEstado").val();
	car=$("#sltCUMCarrera").val();
	
	document.location.href="CursoCtrl.php?car="+car+"&id="+id+"&nom="+nom+"&cod="+cod+"&niv="+niv+"&obs="+obs+"&est="+est+"&pagina=modifica2&";
//	alert($("#sltUANivel").());
}