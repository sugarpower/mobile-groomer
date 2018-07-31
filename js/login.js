$(document).ready(function(){
	$("#mobile_number").mask("99-999-9999");
	$("#home_number").mask("99-999-9999");
	$("#work_number").mask("99-999-9999");
	$("#dog_dob").mask("9999-99-99");

	$("#form-login").submit(function (e) {
	
		e.preventDefault();
		
		$.ajax({
			type: "POST",
			url: root+"login-submit.php",
			data:  new FormData(this),
			contentType: false,       
			cache: false,             
			processData:false,   
			success: function(result){
				var obj = jQuery.parseJSON(result);
				if(obj.success=="1"){
					location.href=root+"dashboard/";
				}
				else{
					alert("Error! "+obj.error);				
				}
			}
		});
	
	return false;
	});


	$("#form-register").submit(function (e) {
		e.preventDefault();
		
		$.ajax({
			type: "POST",
			url: root+"register-submit.php",
			data:  new FormData(this),
			contentType: false,       
			cache: false,             
			processData:false,   
			success: function(result){
				var obj = jQuery.parseJSON(result);
				if(obj.success=="1"){
					location.href=root+"dashboard/";
				}
				else{
					alert("Error! "+obj.error);				
				}
			}
		});
	
	return false;
	});	
	

	$("#form-appointment").submit(function (e) {
		e.preventDefault();
		
		$.ajax({
			type: "POST",
			url: root+"appointment-submit.php",
			data:  new FormData(this),
			contentType: false,       
			cache: false,             
			processData:false,   
			success: function(result){
				alert(result);
				var obj = jQuery.parseJSON(result);
				if(obj.success=="1"){
					alert(obj.msg);
				}
				else{
					alert("Error! "+obj.error);				
				}
			}
		});
	
	return false;
	});	

$("#form-appointment-edit").submit(function (e) {
		e.preventDefault();
		
		$.ajax({
			type: "POST",
			url: root+"edit-submit.php",
			data:  new FormData(this),
			contentType: false,       
			cache: false,             
			processData:false,   
			success: function(result){
				alert(result);
				var obj = jQuery.parseJSON(result);
				if(obj.success=="1"){
					alert(obj.msg);
					location.href="../dashboard/";
				}
				else{
					alert("Error! "+obj.error);				
				}
			}
		});
	
	return false;
	});

	});






	
	
	function cancelAppointment(id){
		$.post("../cancel-appointment.php",
	    {
	        id: id
	    },
	    function(result){
	        var obj = jQuery.parseJSON(result);
				if(obj.success=="1"){
					alert(obj.msg);
					location.reload();
				}
				else{
					alert("Error! "+obj.error);				
				}
	    });

	}
	
	
	
		