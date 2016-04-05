<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../../css/jquery.dataTables.css">
	<script type="text/javascript" language="javascript" src="../../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="../../js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" class="init">


$(document).ready(function() {
	$('#example').dataTable();
} );


	</script>
</head>

<body class="dt-example">
<table id="example" class="display" cellspacing="0" width="100%">
            
				<thead>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</tfoot>

				<tbody>
        <?php
		for($i=1;$i<=5;$i++)
		{ 
		?>        
            
         <tr>
         	<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
         </tr>
      <?php
		}
	  ?>
				</tbody>
			</table>

</body>
</html>