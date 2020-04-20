$("#print").find('.print_label').on('click', function() {
	//Print ele2 with default options
	$("#print_label").print({
		// globalStyles :false, 
		mediaPrint : true,
	})
});

$("#print").find('.print_all').on('click', function() {
	//Print ele2 with default options
	$.print("#print_all");
});

$("#print_mark").find('.print_label').on('click', function() {
	//Print ele2 with default options
	$.print("#print_label");
});