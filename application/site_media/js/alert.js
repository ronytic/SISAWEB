    	function reset () {
			$("#toggleCSS").attr("href", "../site_media/css/alertify.default.css");
			alertify.set({
				labels : {
					ok     : "OK",
					cancel : "Cancel"
				},
				delay : 5000,
				buttonReverse : false,
				buttonFocus   : "ok"
			});
		}

		// ==============================
		// Standard Dialogs
		function alerta1( ){
			alert("entrooo");
			reset();
			alertify.alert("Usuario incorrecto");
			document.location.href="application/controller/autenticacionCtrl.php";
			return false;
		};