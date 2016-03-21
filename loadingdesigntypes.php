<?php
include('db_connect.php');
if(isset($_POST['des']))
{
	$id=(int)$_POST['des'];
	$query=		"SELECT pr.product_id,pr.design_id,itp.type_id, itp.type_name
				FROM product_info AS pr
				INNER JOIN itemtypes AS itp ON pr.type_id = itp.type_id
				WHERE pr.design_id = $id

				AND pr.category_id =  'engcse1'
				LIMIT 0 , 30";

	$result=mysql_query($query);
	$designArray=array();
	$i=0;
	while($row=mysql_fetch_array($result))
	{	
		if(($row['type_name'])!==NULL)
			{$designArray[$i]['type_name'] =$row['type_name'];
			}
		else
			break;
		if(($row['product_id'])!==NULL)
			{$designArray[$i]['product_id'] =$row['product_id'];
			}
		else
			break;
		if(($row['design_id'])!==NULL)
			{$designArray[$i]['design'] =$row['design_id'];
			}
		else
			break;
		if(($row['type_id'])!==NULL)
			{$designArray[$i]['type']=$row['type_id'];
			}
		else
			break;

		$i++;
	}
	$designArray['count']=$i-1;
	echo json_encode($designArray);


/*
http://localhost/cazpro/loadingdesigntypes.php?des=201;*/























	}
else
{

header('location:error.html');


}

?>