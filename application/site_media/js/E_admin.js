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
function adminemp(x)
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
function emodifica()
{
	alert("entro u modifica"+x);
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
		//alert(x);
		//document.location.href="EmpleadoCtrl.php?emp="+x+"&pagina=modifica&";
		//alert(x);
		var y="EmpleadoCtrl.php?emp="+x+"&pagina=modifica&"
		 $.ajax({
	url:y,
	type:'get',
	success: function (data){
		$("#body_admin").html(data);
	}
	});
	}
}
//car,nom,pet,mat,fen,gen,tef,cel,dir,zon,ciu,fot,fei,obs,est
function carga(emp,car,nom,pat,mat,fen,gen,tef,cel,dir,zon,ciu,fot,fei,obs,est)
{
//	alert('entaaa');
	alert('ENTROCARGA'+emp+','+gen+','+ciu+','+fot);
	
	$("#txtEMCarnet").val(car);
	$("#txtEMNombre").val(nom);
	$("#txtEMPaterno").val(pat);
	$("#txtEMMaterno").val(mat);
	$("#txtEMFechaN").val(fen);
	$("#txtEMTelefonoF").val(tef);
	$("#txtEMCelular").val(cel);
	$("#txtEMDireccion").val(dir);
	$("#txtEMFoto").val(fot);
	$("#txtEMZona").val(zon);
	$("#txtEMFechaI").val(fei);
	$("#txtEMObservacion").val(obs);
	
	$("#sltEMEmpleo option[value="+emp+"]").attr("selected",true);
	$("#sltEMGenero option[value="+gen+"]").attr("selected",true);
    //$("#sltUEPerfil option[value="+ per +"]").attr("selected",true);
	$("#sltEMCiudad option[value="+ciu+"]").attr("selected",true);
	$("#sltEMEstado option[value="+est+"]").attr("selected",true);
	
}


function e_elimina()
{
	//alert("porfaaa"+x);
	//alert($('input:radio[name=eestado]:checked').val());
	var x=$('input:radio[name=eestado]:checked').val();
	if(x==null)
	{
		alert('debe seleccionar un dato');
		$.ajax({
		url:'../../site_media/html/empleados/e_table.php',
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
			document.location.href="EmpleadoCtrl.php?emp="+x+"&pagina=elimina&";
		}
		else 
		{
			document.location.href="EmpleadoCtrl.php?emp="+x+"&pagina=principal&";
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

function eadiciona()
{
	alert('entro adiciona'+i);
	car=$("#txtEACarnet").val();
	emp=$("#sltEAEmpleo").val();
	nom=$("#txtEANombre").val();
	pat=$("#txtEAPaterno").val();
	mat=$("#txtEAMaterno").val();
	fen=$("#txtEAFechaN").val();
	gen=$("#sltEAGenero").val();
	tef=$("#txtEATelefonoF").val();
	cel=$("#txtEACelular").val();
	dir=$("#txtEADireccion").val();
	zon=$("#txtEAZona").val();
	ciu=$("#sltEACiudad").val();
	fot=$("#txtEAFoto").val();
	fei=$("#txtEAFechaI").val();
	obs=$("#txtEAObservacion").val();
	
		alert("porfavorrr"+car+","+emp+","+nom+","+pat+","+mat+","+fen+","+gen+","+tef+","+cel+","+dir+","+zon+","+ciu+","+fot+","+fei+","+obs);
		adiestudio="";
		
		//obs=$("#txtEAEstudio2").val();
		
		//alert(obs);
	for(j=1; j<=i;j++)
	{	
	e="#txtEAEstudio"+j;
	l="#txtEAELugar"+j;
	f="#txtEAEFecha"+j;
	
	est=$(e).val();
	lug=$(l).val();
	fec=$(f).val();
	//alert(est);
	//alert(lug);
	//alert(fec);
	//alert(j+'estudio'+est+'lugar'+lug+'fec'+fec);
	adiestudio=adiestudio+"&est"+j+"="+est+"&lug"+j+"="+lug+"&fec"+j+"="+fec;	
	//alert(adiestudio);
	}
	
	//alert(adiestudio);
	document.location.href="EmpleadoCtrl.php?car="+car+"&emp="+emp+"&nom="+nom+"&pat="+pat+"&mat="+mat+"&fen="+fen+"&gen="+gen+"&tef="+tef+"&cel="+cel+"&dir="+dir+"&zon="+zon+"&ciu="+ciu+"&fot="+fot+"&fei="+fei+"&obs="+obs+adiestudio+"&pagina=adiciona&num="+i+"&";
//	alert($("#sltUANivel").());
}
function umodifica2(nes)
{
		alert('entro modifica'+nes);
	car=$("#txtEMCarnet").val();
	emp=$("#sltEMEmpleo").val();
	nom=$("#txtEMNombre").val();
	pat=$("#txtEMPaterno").val();
	mat=$("#txtEMMaterno").val();
	fen=$("#txtEMFechaN").val();
	gen=$("#sltEMGenero").val();
	tef=$("#txtEMTelefonoF").val();
	cel=$("#txtEMCelular").val();
	dir=$("#txtEMDireccion").val();
	zon=$("#txtEMZona").val();
	ciu=$("#sltEMCiudad").val();
	fot=$("#txtEMFoto").val();
	fei=$("#txtEMFechaI").val();
	obs=$("#txtEMObservacion").val();
	est=$("#sltEMEstado").val();

	
		adiestudiom="";
		alert("ayuda"+nes);
		for(k=0;k<nes;k++)
	{	
	id="#txtEAidm"+k;
	e="#txtEAEstudiom"+k;
	l="#txtEAELugarm"+k;
	f="#txtEAEFecham"+k;
	
	id=$(id).val();
	estm=$(e).val();
	lugm=$(l).val();
	fecm=$(f).val();
		alert('esto esid'+id);
	alert('esto es'+estm);
	alert('esto es'+lugm);
	alert('esto es'+fecm);
	adiestudiom=adiestudiom+"&id"+k+"="+id+"&estm"+k+"="+estm+"&lugm"+k+"="+lugm+"&fecm"+k+"="+fecm;
	alert(adiestudiom);
	}
	alert(adiestudiom);
	adiestudio="";

	for(j=2; j<=i;j++)
	{	
		alert('es'+j);
	e="#txtEAEstudio"+j;
	l="#txtEAELugar"+j;
	f="#txtEAEFecha"+j;
	
	est=$(e).val();
	lug=$(l).val();
	fec=$(f).val();
	
	alert(est);
	alert(lug);
	alert(fec);
	alert(j+'estudio'+est+'lugar'+lug+'fec'+fec);
	adiestudio=adiestudio+"&est"+j+"="+est+"&lug"+j+"="+lug+"&fec"+j+"="+fec;
	}
alert(adiestudio);

document.location.href="EmpleadoCtrl.php?car="+car+"&emp="+emp+"&nom="+nom+"&pat="+pat+"&mat="+mat+"&fen="+fen+"&gen="+gen+"&tef="+tef+"&cel="+cel+"&dir="+dir+"&zon="+zon+"&ciu="+ciu+"&fot="+fot+"&fei="+fei+"&obs="+obs+"&est="+est+adiestudiom+adiestudio+"&pagina=modifica2&num="+i+"&num2="+nes+"&";
//	alert($("#sltUANivel").());
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