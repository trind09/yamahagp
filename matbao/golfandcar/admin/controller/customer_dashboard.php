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
                        <h2 class="mb-0">Danh sách khách hàng</h2>
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
							//pre script to update amount record and from date dropdown from client
                            $pre_script_variables = "";
                            if(isset($_POST['form3'])) {
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
                                $sql = "SELECT c.fullname, c. birthday, c.phone, c.email, c.address, c.position_level, c.create_date FROM customer c ORDER BY create_date DESC LIMIT " . $amount_of_record;
                                if ($from_date != ""){
                                    $sql = "SELECT c.fullname, c. birthday, c.phone, c.email, c.address, c.position_level, c.create_date FROM customer c where create_date >= '" . $from_date . "' ORDER BY create_date DESC LIMIT " . $amount_of_record;
                                }
                                
                                $statement = $pdo->prepare($sql);
                                $statement->execute();
                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);	
                                
                                $allRecordTable = "";
                                
                                if (count($result) > 0) {
                                    $allRecordTable .= "<table id='auction' class='table table-striped table-bordered second dataTable'>";
                                    $allRecordTable .= "<thead>"
                                                            . "<tr>"
                                                                . "<th>#</th>"
                                                                . "<th>Họ và Tên</th>"
                                                                . "<th>Số Điện Thoại</th>"
                                                                . "<th>Email</th>"
                                                                . "<th>Ngày Đăng Ký</th>";
                                    $allRecordTable .= "</tr>"
                                                        . "</thead>"
                                                        . "<tbody>";
                                    $counter = 1;
                                    
                                    foreach ($result as $row) {
                                        $fullname = $row["fullname"];
                                        $phone = $row["phone"];
                                        $email = $row["email"];
                                        $create_date = date_create($row["create_date"]);

                                        $allRecordTable .= "<tr>"
                                                                . "<td>" . $counter . "</td>"
                                                                . "<td><div class='scrollable'>" . $fullname . "</div></td>"
                                                                . "<td><div class='scrollable'>" . $phone . "</div></td>"
                                                                . "<td><div class='scrollable'>" . $email . "</div></td>"
                                                                . "<td><div class='scrollable'>" . date_format($create_date,"d-m-Y H:i:s") . "</div></td>";
                                        $allRecordTable .= "</tr>";
                                        
                                        $counter++;
                                    }
                                    
                                    $allRecordTable .= "</tbody>";
                                    $allRecordTable .= "<tfoot>"
                                                        . "<tr>"
                                                            . "<th>#</th>"
                                                            . "<th>Họ và Tên</th>"
                                                            . "<th>Số Điện Thoại</th>"
                                                            . "<th>Email</th>"
                                                            . "<th>Ngày Đăng Ký</th>";
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