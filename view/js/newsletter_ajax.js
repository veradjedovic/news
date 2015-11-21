$("form.ajax").on("submit", function() {
	var that = $(this),
		url = that.attr('action');
		type = that.attr('method');
		data = {};
		
	that.find('[name]').each(function(index, value) {
		var that = $(this),
			name = that.attr('name'),
			value = that.val();
		
		data[name] = value;
	});
	if($("[name='subscriber_name']").val() === '' || $("[name='subscriber_email']").val() === ''){
		alert('Please enter all fields!!')
	}else{
	 $.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response){
			$("[name=subscriber_name]").val('');
			$("[name=subscriber_email]").val('');
			console.log(response);
			alert('You have successfully subrcribe to our newsletter!!!');
		}
	 });
	}
	return false;
});