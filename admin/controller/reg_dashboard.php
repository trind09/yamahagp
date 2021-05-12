<div class="dashboard-wrapper">
   <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
         <div class="ecommerce-widget" id="maudon">
            <!-- Table of all records  -->
            <!-- ============================================================== -->
            <div class="row">
               <!-- ============================================================== -->
               <!-- basic table  -->
               <!-- ============================================================== -->
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                     <div class="card-header">
                        <h2 class="mb-0" id="page-title">Danh sách đăng ký</h2>
                        <div class="form-group">
                           <label for="amount_of_record">Số dòng dữ liệu: </label>
                           <select name="amount_of_record" id="amount_of_record" class="form-control">
                              <option value="100">100</option>
                              <option value="500">500</option>
                              <option value="1000" selected>1000</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="from_date">Từ ngày: </label>
                           <input type="date" class="form-control" name="from_date" id="from_date" />
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-space btn-primary" name="form1">Show</button>
                           <button type="submit" class="btn btn-space btn-secondary" name="form1" onclick="return ClearBeforeSubmit();">Clear</button>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
							<?php
								$is_admin = isset( $_SESSION['username'] );
								$amount_of_record = 1000;
								$from_date = "";
								$pre_script_variables = "";
								if(isset($_POST['form1'])) {
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
									$sql = "SELECT * FROM registers ORDER BY create_date DESC LIMIT " . $amount_of_record;
									if ($from_date != ""){
										$sql = "SELECT * FROM registers where create_date >= '" . $from_date . "' ORDER BY create_date DESC LIMIT " . $amount_of_record;
									}
	
									$statement = $pdo->prepare($sql);
									$statement->execute();
									$result = $statement->fetchAll(PDO::FETCH_ASSOC);	
	
									$allRecordTable = "";
	
									if (count($result) > 0) {
										$allRecordTable .= "<table id='example' class='table table-striped table-bordered second dataTable'>";
										$allRecordTable .= "<thead>"
																. "<tr>"
																	. "<th>#</th>"
																	. "<th>Họ và tên</th>"
																	. "<th>Ngày tháng năm sinh</th>"
																	. "<th>Số điện thoại</th>"
																	. "<th>Email</th>"
																	. "<th>Giải và hệ đăng ký</th>"
																	. "<th>Tên Câu lạc bộ</th>"
																	. "<th>Nơi ở hiện nay</th>"
																	. "<th>Zalo hoặc link Facebook</th>"
																	. "<th>Số đua đăng ký</th>"
																	. "<th>Họ và tên người bảo hộ</th>"
																	. "<th>Số điện thoại người bảo hộ</th>"
																	. "<th title='Hãy chia sẻ với chúng tôi về những kinh nghiệm đua xe của bạn: Bạn từng tham gia giải đua nào tại Đại Nam? Các giải đua khác bạn từng tham gia, thành tích đạt được?.... Cảm ơn bạn đã chia sẻ!'>Comment 1</th>"
																	. "<th title='Giới thiệu chi tiết về kinh nghiệm và kỹ năng lái xe, đua xe của bản thân để được vào vòng loại.'>Comment 2</th>"
																	. "<th>Ngày đăng ký</th>"
																	. "<th title='Hình ảnh bằng lái A2 còn hiệu lực'>License file 1</th>"
																	. "<th title='Hình ảnh bằng lái B trở lên còn hiệu lực'>License file 2</th>"
																	. "<th title='Hình ảnh bằng đua xe VMA'>License file 3</th>"
																	. "<th title='Hình ảnh bằng lái A1 còn hiệu lực'>License file 4</th>"
																	. "<th title='Hình ảnh xác nhận chuyển khoản thành công'>Banktransfer file 1</th>";
										$allRecordTable .= "</tr>"
															. "</thead>"
															. "<tbody>";
										$counter = 1;
		
										foreach ($result as $row) {
											$birthday = date_create($row["birthday"]);
											$create_date = date_create($row["create_date"]);
											$license_file1 = GetLicenseFile("license_file1", $row["license_files"], $domain);
											$license_file2 = GetLicenseFile("license_file2", $row["license_files"], $domain);
											$license_file3 = GetLicenseFile("license_file3", $row["license_files"], $domain);
											$license_file4 = GetLicenseFile("license_file4", $row["license_files"], $domain);
											$banktransfer_file1 = GetBantransferFile("banktransfer_file1", $row["banktransfer_files"], $domain);
											$allRecordTable .= "<tr>"
																	. "<td>" . $counter . "</td>"
																	. "<td><div class='scrollable'>" . $row["fullname"] . "</div></td>"
																	. "<td><div class='scrollable'>" . date_format($birthday,"d-m-Y") . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["phone"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["email"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["form_name"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["club_name"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["address"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["social_link"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["number"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["sponsor_fullname"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["sponsor_phone"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["comment1"] . "</div></td>"
																	. "<td><div class='scrollable'>" . $row["comment2"] . "</div></td>"
																	. "<td><div class='scrollable'>" . date_format($create_date,"d-m-Y H:i:s") . "</div></td>"
																	. "<td><a target='_blank' href='" . $license_file1 . "'>" . $license_file1 . "</a></td>"
																	. "<td><a target='_blank' href='" . $license_file2 . "'>" . $license_file2 . "</a></td>"
																	. "<td><a target='_blank' href='" . $license_file3 . "'>" . $license_file3 . "</a></td>"
																	. "<td><a target='_blank' href='" . $license_file4 . "'>" . $license_file4 . "</a></td>"
																	. "<td><a target='_blank' href='" . $banktransfer_file1 . "'>" . $banktransfer_file1 . "</a></td>";
											$allRecordTable .= "</tr>";
			
											$counter++;
										}
		
										$allRecordTable .= "</tbody>";
										$allRecordTable .= "<tfoot>"
															. "<tr>"
																. "<th>#</th>"
																. "<th>Họ và tên</th>"
																. "<th>Ngày tháng năm sinh</th>"
																. "<th>Số điện thoại</th>"
																. "<th>Email</th>"
																. "<th>Giải và hệ đăng ký</th>"
																. "<th>Tên Câu lạc bộ</th>"
																. "<th>Nơi ở hiện nay</th>"
																. "<th>Zalo hoặc link Facebook</th>"
																. "<th>Số đua đăng ký</th>"
																. "<th>Họ và tên người bảo hộ</th>"
																. "<th>Số điện thoại người bảo hộ</th>"
																. "<th title='Hãy chia sẻ với chúng tôi về những kinh nghiệm đua xe của bạn: Bạn từng tham gia giải đua nào tại Đại Nam? Các giải đua khác bạn từng tham gia, thành tích đạt được?.... Cảm ơn bạn đã chia sẻ!'>Comment 1</th>"
																. "<th title='Giới thiệu chi tiết về kinh nghiệm và kỹ năng lái xe, đua xe của bản thân để được vào vòng loại.'>Comment 2</th>"
																. "<th>Ngày đăng ký</th>"
																. "<th title='Hình ảnh bằng lái A2 còn hiệu lực'>License file 1</th>"
																. "<th title='Hình ảnh bằng lái B trở lên còn hiệu lực'>License file 2</th>"
																. "<th title='Hình ảnh bằng đua xe VMA'>License file 3</th>"
																. "<th title='Hình ảnh bằng lái A1 còn hiệu lực'>License file 4</th>"
																. "<th title='Hình ảnh xác nhận chuyển khoản thành công'>Banktransfer file 1</th>";
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

								if ($pre_script_variables != ""){
									echo("<script>" . $pre_script_variables . "</script>");
								}
							?>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ============================================================== -->
               <!-- end basic table  -->
               <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end table of all record -->
         </div>
      </div>
   </div>
   <!-- ============================================================== -->
   <!-- end footer -->
   <!-- ============================================================== -->
</div>