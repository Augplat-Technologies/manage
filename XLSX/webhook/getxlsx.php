<?php
$server='localhost';
$username='mykampai_zentao';
$password='LU8L3v=hU#uO';
$db='mykampai_zentao';
$conn=mysqli_connect($server,$username,$password,$db) ;
$object = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // fetch RAW input
    $json = file_get_contents('php://input');
    file_put_contents('aa.json', print_r($json, true));
    $abb=json_decode($json,true);
    $a = $abb["submission"]["data"]["page6FormatedDate"];
    file_put_contents('mm.txt', print_r($a, true));
    // decode json
    $object = json_decode($json,true);
    // expecting valid json
    if (json_last_error() !== JSON_ERROR_NONE) {
        die(header('HTTP/1.0 415 Unsupported Media Type'));
    }
    /**
     * Do something with object, structure will be like:
     * $object->accountId
     * $object->details->items[0]['contactName']
     */
    // dump to file so you can see
   $json = json_decode($json, true);
    file_put_contents('callback.test.txt', print_r($object, true));
    $modules=array('Campaign Plan Socializing &amp; Approvals','List Management &amp; Segmentation','Campaign Elements Preparation','Building Downloadable Assets','Campaign Launch &amp; Execution','Campaign Analytics &amp; Reviews','Campaign Closure');
	$submod1 = array('Run the campaign idea & plan with your sales to get buy-in','Run the campaign plan & budgets with your finance tem','Get approvals from the Boss / Manager','Finalize Target Audience criteria','Finalize list quantity & details','Define segmentation Criteria','Build Target List');
    $ch=mysqli_query($conn,"select id from zt_project where name= 'Abc'");
	$chr=mysqli_num_rows($ch); 
	if($chr>0)  //checks if data already exist
	 {
		$pid=mysqli_query($conn,"select id from zt_project where name= 'Abc'");
		while($row = mysqli_fetch_assoc($pid))
		{
			$id=$row['id'];  
	  	}
	}
	  else
	  {  
		$pr = "insert ignore into zt_project(name,code) values('Abc','Abc')";
		mysqli_query($conn,$pr);

		$pid=mysqli_query($conn,"select id from zt_project where name= 'Abc'");
		while($row = mysqli_fetch_assoc($pid))
		{
			$id=$row['id'];
		}
	}
	
	for ($x = 0; $x <7; $x++) 
	{

		echo "The number is: $x <br>";
		$ord = ($x+1)*10;
		$check=mysqli_query($conn,"select * from zt_module where name= '".$modules[$x]."' and root=$id");
		$checkrows=mysqli_num_rows($check);
	 	if($checkrows<=0) 
	 	{
			$query = "insert ignore into zt_module(root,name,grade,`order`,type) values($id,'".$modules[$x]."',1,$ord,'task')";
			mysqli_query($conn,$query);
			$mid=mysqli_query($conn,"select id from zt_module where root= $id and name = '".$modules[$x]."' ");
			while($row = mysqli_fetch_assoc($mid))
			{
				$idm=$row['id'];
				print($idm);
				$moduleid[]=$idm;
				echo '<br/>';
			}
			$pat = "update zt_module set path = '".','.$moduleid[$x].','."' where root = $id and name ='".$modules[$x]."' ";
			mysqli_query($conn,$pat);
	   }
	}
	for($x=0;$x<sizeof($modules);$x++)
	{
		$mid=mysqli_query($conn,"select id from zt_module where root= $id and name = '".$modules[$x]."' ");
		while($row = mysqli_fetch_assoc($mid))
		{
			$idm=$row['id'];
			print($idm);
			$moduleid[]=$idm;
		
			echo '<br/>';
		}
	}
    
    	for ($x = 0; $x <3; $x++) 
    	{

		echo "The number is: $x <br>";
		$check=mysqli_query($conn,"select * from zt_task where name= '".$submod1[$x]."' and project=$id");
		$checkrows=mysqli_num_rows($check);
		 if($checkrows>0) 
		 {
		 
		}
		   else
		   {
			$query = "insert ignore into zt_task(project,module,name,type,openedBy,estStarted) values($id,$moduleid[0],'".$submod1[$x]."','step1','pqr','$a')";
			mysqli_query($conn,$query);
		} 
	}
   
}

/*$d=explode("\n",file_get_contents('callback.test.txt'));
$date=str_replace("[page6FormatedDate] =>", "",$d[82]);
print($date);*/
?>


<?php
$server='localhost';
$username='mykampai_zentao';
$password='LU8L3v=hU#uO';
$db='mykampai_zentao';
$conn=mysqli_connect($server,$username,$password,$db) ;
?>
<!DOCTYPE html>
<html>
<head>
<title>XLSXReader Sample</title>
	</head>
<body>



<?php

	$modules=array('Campaign Plan Socializing &amp; Approvals','List Management &amp; Segmentation','Campaign Elements Preparation','Building Downloadable Assets','Campaign Launch &amp; Execution','Campaign Analytics &amp; Reviews','Campaign Closure');
	$submod1 = array('Run the campaign idea & plan with your sales to get buy-in','Run the campaign plan & budgets with your finance tem','Get approvals from the Boss / Manager','Finalize Target Audience criteria','Finalize list quantity & details','Define segmentation Criteria','Build Target List');	
	$submod2 = array('Finalize Target Audience criteria','Finalize list quantity & details','Define segmentation Criteria','Build Target List');
	$submod3 = array('Design Campaign Flow','Import Lists in CAMPACT (Campaign Execution Module)','Define Segments','Draft Email Content','Design Emails','Draft Landing Pages & Form Content','Design Landing Pages & Forms','Draft & Configure SMS Message','Draft & Schedule Social Media Messages','Design Banners for Website & Third Party Sites','Design & Configure Online Ads');
	$submod4 = array('Decide Asset Objective','Outline Asset Framework','Draft Content for Asset','Design Asset in the output format');
	$submod5 = array('Publish Campaign in CAMPACT and Trigger Start','Send Email Messages','Send Social Media Messages','Host Banners on Website & Third Party Sites','Publish Online Ads');
	$submod6 = array('Trigger weekly reports','Perform biweekly internal reviews','Course Correct - messages,  flow, channels (approx 4 times during campaign)');
	$submod7 = array('End Campaign Flow in MAP','Un-publish Channels','Prepare Campaign Closure Report');
	//print($date);
	//$Date = "2010-09-17";
	echo date('Y-m-d', strtotime($a. ' + 3 days'));
	//echo '<br>';
	//echo date('Y-m-d', strtotime($Date. ' + 2 days'));
	echo '<br>';
	//Project creation 
	$ch=mysqli_query($conn,"select id from zt_project where name= 'Abc'");
	$chr=mysqli_num_rows($ch); 
	if($chr>0)  //checks if data already exist
	 {
		$pid=mysqli_query($conn,"select id from zt_project where name= 'Abc'");
		while($row = mysqli_fetch_assoc($pid))
		{
			$id=$row['id'];  
	  	}
	}
	  else
	  {  
		$pr = "insert ignore into zt_project(name,code) values('Abc','Abc')";
		mysqli_query($conn,$pr);

		$pid=mysqli_query($conn,"select id from zt_project where name= 'Abc'");
		while($row = mysqli_fetch_assoc($pid))
		{
			$id=$row['id'];
		}
	}
	
	for ($x = 0; $x <7; $x++) 
	{

		echo "The number is: $x <br>";
		$ord = ($x+1)*10;
		$check=mysqli_query($conn,"select * from zt_module where name= '".$modules[$x]."' and root=$id");
		$checkrows=mysqli_num_rows($check);
	 	if($checkrows<=0) 
	 	{
			$query = "insert ignore into zt_module(root,name,grade,`order`,type) values($id,'".$modules[$x]."',1,$ord,'task')";
			mysqli_query($conn,$query);
			$mid=mysqli_query($conn,"select id from zt_module where root= $id and name = '".$modules[$x]."' ");
			while($row = mysqli_fetch_assoc($mid))
			{
				$idm=$row['id'];
				print($idm);
				$moduleid[]=$idm;
				echo '<br/>';
			}
			$pat = "update zt_module set path = '".','.$moduleid[$x].','."' where root = $id and name ='".$modules[$x]."' ";
			mysqli_query($conn,$pat);
	   }
	}
	for($x=0;$x<sizeof($modules);$x++)
	{
		$mid=mysqli_query($conn,"select id from zt_module where root= $id and name = '".$modules[$x]."' ");
		while($row = mysqli_fetch_assoc($mid))
		{
			$idm=$row['id'];
			print($idm);
			$moduleid[]=$idm;
		
			echo '<br/>';
		}
	}
	//step 1
/*	for ($x = 0; $x <3; $x++) 
	{

		echo "The number is: $x <br>";
		$check=mysqli_query($conn,"select * from zt_task where name= '".$submod1[$x]."' and project=$id");
		$checkrows=mysqli_num_rows($check);
		 if($checkrows>0) 
		 {
		 
		}
		   else
		   {
			$query = "insert ignore into zt_task(project,module,name,type,openedBy) values($id,$moduleid[0],'".$submod1[$x]."','step1','pqr')";
			mysqli_query($conn,$query);
		} 
	}*/
	//step 2
	for ($x = 0; $x <4; $x++) 
	{

		echo "The number is: $x <br>";
		$check=mysqli_query($conn,"select * from zt_task where name= '".$submod2[$x]."' and project=$id");
		$checkrows=mysqli_num_rows($check);
		 if($checkrows>0) 
		 {
		 
		}
		   else
		   {
			$query = "insert ignore into zt_task(project,module,name,type,openedBy) values($id,$moduleid[1],'".$submod2[$x]."','step2','pqr')";
			mysqli_query($conn,$query);
		} 
	}
	//step 3
	for ($x = 0; $x <11; $x++) 
	{

		echo "The number is: $x <br>";
		$check=mysqli_query($conn,"select * from zt_task where name= '".$submod3[$x]."' and project=$id");
		$checkrows=mysqli_num_rows($check);
		 if($checkrows>0) 
		 {
		 
		}
		   else
		   {
			$query = "insert ignore into zt_task(project,module,name,type,openedBy) values($id,$moduleid[2],'".$submod3[$x]."','step3','pqr')";
			mysqli_query($conn,$query);
		} 
	}
	//step 4
	for ($x = 0; $x <4; $x++) 
	{

		echo "The number is: $x <br>";
		$check=mysqli_query($conn,"select * from zt_task where name= '".$submod4[$x]."' and project=$id");
		$checkrows=mysqli_num_rows($check);
		 if($checkrows>0) 
		 {
		 
		}
		   else
		   {
			$query = "insert into zt_task(project,module,name,type,openedBy) values($id,$moduleid[3],'".$submod4[$x]."','step4','pqr')";
			mysqli_query($conn,$query);
		} 
	}
	//step 5
	for ($x = 0; $x <5; $x++) 
	{

		echo "The number is: $x <br>";
		$check=mysqli_query($conn,"select * from zt_task where name= '".$submod5[$x]."' and project=$id");
		$checkrows=mysqli_num_rows($check);
		 if($checkrows>0) 
		 {
		 
		}
		   else
		   {
			$query = "insert into zt_task(project,module,name,type,openedBy) values($id,$moduleid[4],'".$submod5[$x]."','step5','pqr')";
			mysqli_query($conn,$query);
		} 
	}
//step 6
for ($x = 0; $x <3; $x++) 
{

	echo "The number is: $x <br>";
	$check=mysqli_query($conn,"select * from zt_task where name= '".$submod6[$x]."' and project=$id");
	$checkrows=mysqli_num_rows($check);
	 if($checkrows>0) 
	 {
	 
	}
	   else
	   {
		$query = "insert ignore into zt_task(project,module,name,type,openedBy) values($id,$moduleid[5],'".$submod6[$x]."','step6','pqr')";
		mysqli_query($conn,$query);
	} 
}
//step 7
for ($x = 0; $x <3; $x++) 
{

	echo "The number is: $x <br>";
	$check=mysqli_query($conn,"select * from zt_task where name= '".$submod7[$x]."' and project=$id");
	$checkrows=mysqli_num_rows($check);
	 if($checkrows>0) 
	 {
	 
	}
	   else
	   {
		$query = "insert ignore into zt_task(project,module,name,type,openedBy) values($id,$moduleid[6],'".$submod7[$x]."','step7','pqr')";
		mysqli_query($conn,$query);
	} 
}

?>
