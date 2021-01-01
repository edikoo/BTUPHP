
$(function(e) {
	$('#example').DataTable({order:[[0,"DESC"]]});
	$('#example2').DataTable({
		dom: 'Bfrtip',
		order:[[1,"DESC"]],
		buttons: [
			{ extend: 'excel', className: 'btn btn-success mb-1' },
			{ extend: 'print', className: 'btn btn-primary mb-1' },
        ],
		order:[[1,"DESC"]],
		iDisplayLength: 100,
		"oLanguage": {
		   "sProcessing": "იტვირთება...",
		   "sLoadingRecords": "იტვირთება...",
		   "sSearch": "ძებნა:",
		   "sZeroRecords": "ჩანაწერი არ მოიძებნა",
		   "sEmptyTable": "ჩანაწერი არ მოიძებნა",
		   "sInfoEmpty": "ჩანაწერი არ მოიძებნა",
		   "sInfo": "სულ ნაჩვენებია _TOTAL_ ჩანაწერი (_START_ -დან _END_)",
		   "sLengthMenu": "აჩვენე _MENU_ ჩანაწერი",
		   "oPaginate": {
			  "sFirst": "პირველი გვერდი", // This is the link to the first page
			  "sLast": "ბოლო გვერდი", // This is the link to the last page
			  "sPrevious": "წინა გვერდი", // This is the link to the previous page
			  "sNext": "შემდეგი გვერდი", // This is the link to the next page
		   }
		},

	 });
	 $('#example3').DataTable({
		dom: 'Bfrtip',
		buttons: [
			{ extend: 'excel', className: 'btn btn-success mb-1' },
			{ extend: 'print', className: 'btn btn-primary mb-1' },
        ],
		"oLanguage": {
		   "sProcessing": "იტვირთება...",
		   "sLoadingRecords": "იტვირთება...",
		   "sSearch": "ძებნა:",
		   "sZeroRecords": "ჩანაწერი არ მოიძებნა",
		   "sEmptyTable": "ჩანაწერი არ მოიძებნა",
		   "sInfoEmpty": "ჩანაწერი არ მოიძებნა",
		   "sInfo": "სულ ნაჩვენებია _TOTAL_ ჩანაწერი (_START_ -დან _END_)",
		   "sLengthMenu": "აჩვენე _MENU_ ჩანაწერი",
		   "oPaginate": {
			  "sFirst": "პირველი გვერდი", // This is the link to the first page
			  "sLast": "ბოლო გვერდი", // This is the link to the last page
			  "sPrevious": "წინა გვერდი", // This is the link to the previous page
			  "sNext": "შემდეგი გვერდი", // This is the link to the next page
		   }
		},

	 });

	 $('#example4').DataTable({
		dom: 'Bfrtip',
		buttons: [
			{ extend: 'excel', className: 'btn btn-success mb-1' },
			{ extend: 'print', className: 'btn btn-primary mb-1' },
        ],
		"oLanguage": {
		   "sProcessing": "იტვირთება...",
		   "sLoadingRecords": "იტვირთება...",
		   "sSearch": "ძებნა:",
		   "sZeroRecords": "ჩანაწერი არ მოიძებნა",
		   "sEmptyTable": "ჩანაწერი არ მოიძებნა",
		   "sInfoEmpty": "ჩანაწერი არ მოიძებნა",
		   "sInfo": "სულ ნაჩვენებია _TOTAL_ ჩანაწერი (_START_ -დან _END_)",
		   "sLengthMenu": "აჩვენე _MENU_ ჩანაწერი",
		   "oPaginate": {
			  "sFirst": "პირველი გვერდი", // This is the link to the first page
			  "sLast": "ბოლო გვერდი", // This is the link to the last page
			  "sPrevious": "წინა გვერდი", // This is the link to the previous page
			  "sNext": "შემდეგი გვერდი", // This is the link to the next page
		   }
		},
		"paging": false,

	 });

} );
