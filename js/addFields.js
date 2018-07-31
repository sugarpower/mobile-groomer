function addFields(){
	var i = Number($("#count").val())+1;
	$("#duplicate_data").append("<hr><div class='form-group'><label for='dog_name'>Dog's Name:</label><input type='text' class='form-control' id='dog_name'"+i+"name='dog_name"+i+"'></div><div class='form-group'><label for='dog_breed'>Dog's Breed:</label><input type='text' class='form-control' id='dog_breed"+i+"' name='dog_breed"+i+"'></div><div class='form-group'><label for='dog_dob'>Dog's DOB:</label><input type='text' class='form-control' id='dog_dob"+i+"' name='dog_dob"+i+"'></div>");
	$("#count").val(i);
}



