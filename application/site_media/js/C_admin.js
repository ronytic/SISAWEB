var x;
x=$(document);
x.ready(inicializarEventos);
i=1;
function inicializarEventos()
{
   var y;
  y=$("#btnBorrarA");
  y.click(presionBoton2)
  i=1;
}


//uno
function admincarre(x)
{
	alert("porfaaa"+x);

	 $.ajax({
	url:x,
	type:'get',
	success: function (data){
		$("#body_admin").html(data);
	}
	});
}
function cmodifica()
{
	alert("entro u modifica"+x);
	//alert($('input:radio[name=eestado]:checked').val());
	var x=$('input:radio[name=cestado]:checked').val();
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/carreras/c_table.php',
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
		//document.location.href="EmpleadoCtrl.php?emp="+x+"&pagina=modifica&";
		//alert(x);
		var y="CarrerasCtrl.php?id="+x+"&pagina=modifica&"
		 $.ajax({
	url:y,
	type:'get',
	success: function (data){
		$("#body_admin").html(data);
	}
	});
	}
}
//carga(i,c,f,o,e);
function carga(id,ca,fe,ob,es)
{
	alert('entaRA PORFAVORaa');
	alert('ENTROCARGA'+id+','+ca+','+fe+','+ob);
	
	$("#txtCMId").val(id);
	$("#txtCMCarrera").val(ca);
	$("#txtCMFechaC").val(fe);
	$("#txtCMObservacion").val(ob);

	
	$("#sltCMEstado option[value="+es+"]").attr("selected",true);
	
	
}


function c_elimina()
{
	//alert("porfaaa"+x);
	//alert($('input:radio[name=eestado]:checked').val());
	var x=$('input:radio[name=cestado]:checked').val();
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/carreras/c_table.php',
		type:'get',
		success: function (data){
		$("#body_admin").html(data);
		}
		});
	}
	else
	{
		if (confirm("esta seguro de eliminar emp"+x)) 
		{
			document.location.href="CarrerasCtrl.php?carr="+x+"&pagina=elimina&";
		}
		else 
		{
			document.location.href="CarrerasCtrl.php?carr="+x+"&pagina=principal&";
		}
		
	}
}
//dos
function adiestudioe()
{
	i=i+1;
	//alert('adiciona mas estudios');
	es="txtEAEstudio"+i;
	lu="txtEAELugar"+i;
	fe="txtEAEFecha"+i;
	$("#adiA").append('<table id="tblDatosA"><tr><td><div class="tbllabel">Estudio'+i+':</div><div class="tblinput_form"><input type="text" id='+es+' name='+es+'/></div></td><td><div class="tbllabel">Lugar de estudio'+i+':</div><div class="tblinput_form"><input type="text" id='+lu+' name='+lu+'/></div></td><td><div class="tbllabel">Fecha de egreso'+i+':</div><div class="tblinput_form"><input type="text" id='+fe+' name='+fe+'/></div></td></tr></table>');
}

function modiestudioe()
{
	i=i+1;
	//alert('adiciona mas estudios');
	es="txtEMEstudio"+i;
	lu="txtEMELugar"+i;
	fe="txtEMEFecha"+i;
	$("#adiA").append('<table id="tblDatosA"><tr><td><div class="tbllabel">Estudio'+i+':</div><div class="tblinput_form"><input type="text" id='+es+' name='+es+'/></div></td><td><div class="tbllabel">Lugar de estudio'+i+':</div><div class="tblinput_form"><input type="text" id='+lu+' name='+lu+'/></div></td><td><div class="tbllabel">Fecha de egreso'+i+':</div><div class="tblinput_form"><input type="text" id='+fe+' name='+fe+'/></div></td></tr></table>');
}
function adiempleda()
{
	alert('entro adiciona estudio');
	est1=$("#txtEAEstudio1").val();
	lug1=$("#txtEAELugar1").val();
	fec1=$("#txtEAEFecha1").val();
	
}

function cadiciona()
{
	alert('entro adiciona'+i);
	
	id=$("#txtCAId").val();
	car=$("#txtCACarrera").val();
	fec=$("#txtCAFechaC").val();
	obs=$("#txtCAObservacion").val();
	
	
		alert("porfavorrr"+id+","+car+","+fec+","+obs);
		
	
	
	//alert(adiestudio);
	document.location.href="CarrerasCtrl.php?car="+car+"&id="+id+"&fec="+fec+"&obs="+obs+"&pagina=adiciona&";
//	alert($("#sltUANivel").());
}
function cmodifica2()
{
	alert('entro modifica');
	id=$("#txtCMId").val();
	ca=$("#txtCMCarrera").val();
	fe=$("#txtCMFechaC").val();
	ob=$("#txtCMObservacion").val();
	es=$("#sltCMEstado").val();
	
	alert('esto es'+id);
	alert('esto es'+ca);
	alert('esto es'+fe);
	alert('esto es'+ob);
	alert('esto es'+es);
	
	document.location.href="CarrerasCtrl.php?id="+id+"&ca="+ca+"&fe="+fe+"&ob="+ob+"&es="+es+"&pagina=modifica2&";
}


//hacademico

function adminhaemp(y)
{

	alert("entro adihaca"+y);
	//alert($('input:radio[name=eestado]:checked').val());
	var x=$('input:radio[name=eestado]:checked').val();
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/empleados/e_table.php',
		type:'get',
		success: function (data)
		{
			$("#body_admin").html(data);
		}
		});
	}
	else
	{
		 s=y+"?emp="+x;
		 	 alert(s),
 $.ajax({
	
	url:s,
	type:'get',
	success: function (data){
		$("#body_admin").html(data);
	}
	});
	}
	
}

//dos
function haeadiciona()
{
	alert('entro adiciona');
	car=$("#txtHAEACarnet").val();
	est=$("#txtHAEAEstudio").val();
	lug=$("#txtHAEALugare").val();
	fec=$("#txtHAEAFechae").val();
	
	alert("porfavorrr"+car+","+est+","+lug+","+fec);
	
	document.location.href="HAcademicoECtrl.php?car="+car+"&est="+est+"&lug="+lug+"&fec="+fec+"&pagina=adiciona&";
//	alert($("#sltUANivel").());
}

function hae_modifica()
{
	
	//alert($('input:radio[name=eestado]:checked').val());
	var x=$('input:radio[name=eestado]:checked').val();
	alert("entro uE modifica"+x);
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/empleados/e_table.php',
		type:'get',
		success: function (data)
		{
			$("#body_admin").html(data);
		}
		});
	}
	else
	{
		alert('ya selecciono'+x);
		$.ajax({
		url:'../../site_media/html/empleados/e_editarEst.php?emp='+x+'&',
		type:'get',
		success: function (data)
		{
			$("#body_admin").html(data);
		}
		});
	}
}


function cargaha(emp,car,nom,pat,mat)
{
	alert('entaaa');
	alert('ENTROCARGA'+emp+','+car+','+nom+','+pat);
	
	$("#txtHACarnet").val(car);
	$("#txtHANombre").val(nom);
	$("#txtHAPaterno").val(pat);
	$("#txtHAMaterno").val(mat);
	
	
	
}