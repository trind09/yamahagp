<?php
$is_admin = isset( $_SESSION['username'] );
$amount_of_record = 1000;
$from_date = "";
$pre_script_variables = "";
if(isset($_POST['form2'])) {
	if (isset($_POST['amount_of_record'])) {
		$amount_of_record = strip_tags($_POST['amount_of_record']);
		if ($amount_of_record == ""){
			$amount_of_record = 1000;
		}
		if ($amount_of_record > 0){
			$pre_script_variables .= " var amount_of_record = " . $amount_of_record . "; ";
		}
	}
	$from_date = strip_tags($_POST['from_date']);
	if ($from_date != ""){
		$time = strtotime($from_date);
		$from_date = date('Y-m-d',$time);
		
		$pre_script_variables .= " var from_date = '" . strip_tags($_POST['from_date']) . "'; ";
	}
}

if($is_admin) {
	$sql = "SELECT * FROM caulacbo ORDER BY create_date DESC LIMIT " . $amount_of_record;
	if ($from_date != ""){
		$sql = "SELECT * FROM caulacbo where create_date >= '" . $from_date . "' ORDER BY create_date DESC LIMIT " . $amount_of_record;
	}
	
	$statement = $pdo->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);	
	
	$allRecordTable = "";
	
	if (count($result) > 0) {
		$allRecordTable .= "<table id='caulacbo' class='table table-striped table-bordered second dataTable'>";
		$allRecordTable .= "<thead>"
								. "<tr>"
									. "<th>#</th>"
									. "<th>Tên Câu Lạc Bộ</th>"
									. "<th>Mô Tả</th>"
									. "<th>Link Ngoài</th>"
									. "<th>Hình Ảnh</th>"
									. "<th>Ngày Nhởi Tạo</th>";
		$allRecordTable .= "</tr>"
							. "</thead>"
							. "<tbody>";
		$counter = 1;
		
		foreach ($result as $row) {
			$image_names = GetImageLinks("image_name", $row["image_name"], $domain);
			$title = $row["title"];
            $description = $row["description"];
            $hyperlink = $row["hyperlink"];
			$create_date = date_create($row["create_date"]);

			$allRecordTable .= "<tr>"
									. "<td>" . $counter . "</td>"
									. "<td><div class='scrollable'>" . $title . "</div></td>"
									. "<td><div class='scrollable'>" . $description . "</div></td>"
									. "<td><div class='scrollable'>" . $hyperlink . "</div></td>"
                                    . "<td><div class='scrollable'>" . $image_names . "</div></td>"
									. "<td><div class='scrollable'>" . date_format($create_date,"d-m-Y H:i:s") . "</div></td>";
			$allRecordTable .= "</tr>";
			
			$counter++;
		}
		
		$allRecordTable .= "</tbody>";
		$allRecordTable .= "<tfoot>"
							. "<tr>"
									. "<th>#</th>"
									. "<th>Tên Câu Lạc Bộ</th>"
									. "<th>Mô Tả</th>"
									. "<th>Link Ngoài</th>"
									. "<th>Hình Ảnh</th>"
									. "<th>Ngày Nhởi Tạo</th>";
		$allRecordTable .= "</tr>"
						. "</tfoot>";
		$allRecordTable .= "</table>";
		
		if ($allRecordTable != "")
		{
			echo($allRecordTable);
		}
		else
		{
			echo("No record");
		}
	} else {
		echo("No record");
	}
} else {
	if (headers_sent()) {
		echo("<script>window.location.href = 'login.php';</script>");
	}
	else{
		exit(header("Location: login.php"));
	}
}