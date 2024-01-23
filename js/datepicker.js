
									$(function() {
										// Destroy any existing datepickers
								$("#checkin_date, #checkout_date").datepicker("destroy");
							
							// Now you can initialize your new datepicker
							var minDate = new Date();
							
										
										var minDate = new Date();
							
										// Define full month names
										var fullMonthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
							
										$("#checkin_date").datepicker({
											dateFormat: "dd/mm/yy",
											monthNames: fullMonthNames,
											minDate: minDate,
											changeMonth: true,
											changeYear: true,
											yearSuffix: '',
											onClose: function(selectedDate) {
												var checkInDate = $(this).datepicker("getDate");
												checkInDate.setDate(checkInDate.getDate() + 1);
												$("#checkout_date").datepicker("option", "minDate", checkInDate);
												calculateDateDifference();
											}
										});
								
										$("#checkout_date").datepicker({
											dateFormat: "dd/mm/yy",
											minDate: minDate + 1,
											changeMonth: true,
											changeYear: true,
											monthNames: fullMonthNames,
											yearSuffix: '',
											onClose: function() {
												calculateDateDifference();
											}
										});
								
										function calculateDateDifference() {
											var checkIn = $("#checkin_date").datepicker("getDate");
											var checkOut = $("#checkout_date").datepicker("getDate");
											if (checkIn && checkOut) {
												var difference = (checkOut - checkIn) / (1000 * 60 * 60 * 24);
												if(difference < 1) {
													alert("Check-out date should be at least one day after check-in date.");
													$("#checkout_date").val('');
													return;
												}
												$("#checkindifference").val(difference + " Days");
											}
										}
									});
