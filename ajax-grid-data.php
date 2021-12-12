

<?php

 include "conexion.php";


$requestData= $_REQUEST;



$columns = array( 

	0 => 'id',
    1 => 'nombres', 
	2 => 'telefono',
	3 => 'email',
    4 => 'direccion',
	5 => 'registrado', 
	6 => 'categoria',
	7 => 'estado',
	8 => 'liberado',
	9 => 'peso',
	10 => 'medida',
	11 => 'detencion',

	12=>'procedencia' ,

);



$sql = "SELECT id, nombres, telefono, email, direccion, registrado, categoria, estado,liberado, peso, medida, detencion, procedencia";
$sql.=" FROM clientes";
$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get InventoryItems");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  


if( !empty($requestData['search']['value']) ) {
	
	$sql = "SELECT id, nombres, telefono, email, direccion, registrado, categoria, estado, liberado, peso, medida, detencion,procedencia  ";
	$sql.=" FROM clientes";
	$sql.=" WHERE nombres LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR telefono LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR email LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR direccion LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR registrado LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR categoria LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR estado LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR liberado LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR peso LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR medida LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR detencion LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR procedencia LIKE '".$requestData['search']['value']."%' ";
	
	

	$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get PO");
	$totalFiltered = mysqli_num_rows($query); 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; 
	$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get PO"); 
	
} else {	

	$sql = "SELECT id, nombres, telefono, email, direccion, registrado, categoria, estado, liberado, peso, medida, detencion,procedencia";
	$sql.=" FROM clientes";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get PO");
	
}


$data = array();

while( $row=mysqli_fetch_array($query) ) {  // Arreglo
	$nestedData=array(); 

	$nestedData[] = $row["id"];
	
    $nestedData[] = $row["nombres"];
	$nestedData[] = $row["telefono"];
	$nestedData[] = $row["email"];
    $nestedData[] = $row["direccion"];
	$nestedData[] = date("d/m/Y", strtotime($row["registrado"]));
	$nestedData[] = $row["categoria"] ;
	$nestedData[] = $row["estado"];
	$nestedData[] = $row["liberado"];
	$nestedData[] = $row["peso"];
	$nestedData[] = $row["medida"];
	$nestedData[] = $row["detencion"];
	
	$nestedData[] = $row["procedencia"];
	
	
	
    $nestedData[] = '<td><center>
                     <a href="editar.php?id='.$row['id'].'"  data-toggle="tooltip" title="Editar datos" class="btn btn-info">Editar <i class="menu-icon icon-pencil"></i> </a>
                     <a href="template.php?action=delete&id='.$row['id'].'"  data-toggle="tooltip" title="Eliminar dato" class="btn btn-danger"> Eliminar<i></i> </a>
					 <a href="liberar.php?id='.$row['id'].'"  data-toggle="tooltip" title="Liberar preso" class="btn btn-primary">Liberar <i class="menu-icon icon-ok"></i> </a>
					 <thead bgcolor="#EBC9DB" >
					 </center></td>';		
					 
					 
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),  
			"recordsTotal"    => intval( $totalData ), 
			"recordsFiltered" => intval( $totalFiltered ), 
			"data"            => $data   // total de datos en el arreglo
			);

echo json_encode($json_data);  


?>


