            <!-- footer -->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0"><a class="text-muted" href="#" target="_blank"><strong>PT Bumi Kadaka</strong></a> - &copy; <?=date('Y');?></p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item"><a class="text-muted" href="#" target="_blank">Support</a></li>
								<li class="list-inline-item"><a class="text-muted" href="#" target="_blank">Help Center</a></li>
								<li class="list-inline-item"><a class="text-muted" href="#" target="_blank">Privacy</a></li>
								<li class="list-inline-item"><a class="text-muted" href="#" target="_blank">Terms</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- footer -->

		</div>
	</div>


	<!-- SCRIPTS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="assets/js/app.js"></script>
	<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="assets/vendors/jquery-repeater/jquery.repeater.min.js"></script>
	<script src="assets/vendors/file-input/fileup.min.js"></script>
	<script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="assets/vendors/daterangepicker/daterangepicker.js"></script>
	<script src="assets/vendors/elipsis/jquery.ellipsis.js"></script>
	<script src="assets/vendors/jquery-autocomplete/jquery.autocomplete.min.js"></script>
	<script>
		$(document).ready(function () {
			//
			$('.repeater').repeater({})

			//nice Select
            $('select.nice').niceSelect();      
                $(".nice ul li").each(function(){
                var value = $(this).attr("data-value");
                if(value == "Menu Category" || value == "Status"){
                    $(this).css({"color":"gray",'font-weight':'bold','margin-bottom':'0px','padding-bottom':'0'});
                }
            });

            //upload
            $.fileup({
                url: 'upload.php',
                inputID: 'file-uploads',
                queueID: 'file-uploads-queue',
                autostart: true,
                onSelect: function(file) {
                $('#types .control-button').show();
                },
                onRemove: function(file, total) {
                    if (file === '*' || total === 1) {
                        $('#types .control-button').hide();
                    }
                },
                onSuccess: function(response, file_number, file) {
                    //$.growl.notice({ title: "Upload success!", message: file.name });
                },
                onError: function(event, file, file_number) {
                    //$.growl.error({ message: "Upload error!" });
                }
            });

			//select 2
			$('.select-single').select2();

			//Date range
			var start = moment().subtract(29, 'days');
			var end = moment();
			function cb(start, end) {
				$('#dateRange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			}
			$('.dateFilter').daterangepicker({
				"opens": "center",
				startDate: start,
				endDate: end,
				ranges: {
					'Today': [moment(), moment()],
					'Next 7 Days': [moment().startOf('isoWeek'), moment().endOf('month')],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
				}
				}, cb);
			cb(start, end);

			//select metode
			$('.options').click(function(){
				var demovalue = $(this).val();
				$(".box").hide();
				$("#show-"+demovalue).show();
				console.log(demovalue);
			});

			//demo for auto compete
			var brand = [
				{ value: 'Nike', data: 'nike' },
				{ value: 'Adedis', data: 'adedis' }
			];
			$('.autocomplete').autocomplete({
			lookup: brand,
			onSelect: function (suggestion) {
				console.log('You selected: ' + suggestion.value + ', ' + suggestion.data);
			}
			});

		});

		/** Perfect Scrollbar */
		'use strict';
		document.addEventListener('DOMContentLoaded', function () {
			(function () {
				const  horizontalExample = document.getElementById('table-scroll');
				if (horizontalExample) {
				new PerfectScrollbar(horizontalExample, {
					wheelPropagation: false,
					suppressScrollY: true
				});
				}
			})();
		});

			document.addEventListener('DOMContentLoaded', function () {
			(function () {
				const  verticalExample = document.getElementById('table-vscroll');
				if (verticalExample) {
				new PerfectScrollbar(verticalExample, {
					wheelPropagation: false,
					suppressScrollX: true
				});
				}
			})();
		});
    </script>
</body>
</html>