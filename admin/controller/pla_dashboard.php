<div class="dashboard-wrapper" id="plan_pannel">
    <div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="ecommerce-widget">
            <!-- Table of all records  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic table  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <form id="form2" action="" method="post" >
                        <div class="card-header">
                            <h2 class="mb-0">Danh sách kế hoạch & điều lệ</h2>
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
                            <button type="submit" class="btn btn-space btn-primary" name="form2">Show</button>
                            <button type="submit" class="btn btn-space btn-secondary" name="form2" onclick="return ClearBeforeSubmit();">Clear</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
							</div>
                        </div>
                    </form>
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