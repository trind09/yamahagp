<!-- ============================================================== -->
   <!-- end main wrapper  -->
   <!-- ============================================================== -->
   <!-- Optional JavaScript -->
   <!-- jquery 3.3.1 -->
   <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
   <!-- bootstap bundle js -->
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
   <!-- slimscroll js -->
   <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
   <!-- main js -->
   <script src="assets/libs/js/main-js.js"></script>
   <!-- chart chartist js -->
   <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
   <!-- sparkline js -->
   <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
   <!-- morris js -->
   <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
   <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
   <!-- chart c3 js -->
   <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
   <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
   <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
   <!-- datatable js -->
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
   <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
   <script src="assets/vendor/datatables/js/data-table.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
   <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
   <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
   <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
   <script src="assets/js/summernote.js"></script>
   <script>
		$(document).ready(function() {
	        $('#editor1').summernote({
	        	height: 300,
				callbacks: {
					onImageUpload: function(files) {
						var editor = $(this);
						sendFile(files, editor);
					}
				}
	        });
	        $('#editor2').summernote({
	        	height: 300,
				callbacks: {
					onImageUpload: function(files) {
						var editor = $(this);
						sendFile(files, editor);
					}
				}
	        });
	        $('#editor3').summernote({
	        	height: 300,
				callbacks: {
					onImageUpload: function(files) {
						var editor = $(this);
						sendFile(files, editor);
					}
				}
	        });
	        $('#editor4').summernote({
	        	height: 300,
				callbacks: {
					onImageUpload: function(files) {
						var editor = $(this);
						sendFile(files, editor);
					}
				}
	        });
	        $('#editor5').summernote({
	        	height: 300,
				callbacks: {
					onImageUpload: function(files) {
						var editor = $(this);
						sendFile(files, editor);
					}
				}
	        });

			function sendFile(files, editor) {
				var $files = $(files);
                $files.each(function () {
                    var file = this;
                    var data = new FormData();
                    data.append("file", file);
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: "upload.php",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (response) {
							if (validURL(response)){
								editor.summernote('insertImage', response, '');
							} else {
								alert(response);
							}
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            if (xhr.responseText) {
                                toastr.error(xhr.responseText, 'Inconceivable!')
                            } else {
                                console.error("<div>Http status: " + xhr.status + " " + xhr.statusText + "</div>" + "<div>ajaxOptions: " + ajaxOptions + "</div>"
                                    + "<div>thrownError: " + thrownError + "</div>");
                            }
                        }
                    });
                });
			}

			function validURL(str) {
				var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
				'((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
				'((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
				'(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
				'(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
				'(\\#[-a-z\\d_]*)?$','i'); // fragment locator
				return !!pattern.test(str);
			}
	    });
	</script>