
$(document).ready(function(){

	$('#current_pwd').keyup(function(){
		var current_pwd = $('#current_pwd').val();
		$.ajax({
			url: '/admin/checkpwd', 
			type: 'get',
			data: {current_pwd:current_pwd},
		})
		.done(function(resp) {
			if(resp == "false")
			{
				$("#pwdChk").html("<font color='#b94a4'>Current Password is Incorrect</font>")
			}else
			{
				$("#pwdChk").html("<font color='green'>Current Password is Correct</font>")
			}
		})
		.fail(function() {
			alert('123');
		})
	});

	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	//Add Category Validations
    $("#add_category").validate({
		rules:{
			category_name:{
				required:true
			},
			category_name_en:{
				required:true,
			},
			description:{
				required:true,
			},
			description_en:{
				required:true,
			},
			url:{
				required:true,
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	//Update Category Validations

	//Add Category Validations
    $("#update_category").validate({
		rules:{
			category_name:{
				required:true
			},
			category_name_en:{
				required:true,
			},
			description:{
				required:true,
			},
			description_en:{
				required:true,
			},
			url:{
				required:true,
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	//Add Product Validations
    $("#add_product").validate({
		rules:{
			product_id:{
				required:true,
				number:true,
			},
			category_id:{
				required:true,
			},
			product_name:{
				required:true,
			},
			product_name_en:{
				required:true,
			},
			product_code:{
				required:true,
			},

			description:{
				required:true,
			},
			description_en:{
				required:true,
			},
			price:{
				required:true,
				number:true,
			},
			image:{
				required:true,
			},
			thumbnail:{
				required:true,
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


	//Update Product
	$("#update_product").validate({
		rules:{
			category_id:{
				required:true
			},
			product_name:{
				required:true,
			},
			product_name_en:{
				required:true,
			},
			product_code:{
				required:true,
			},

			description:{
				required:true,
			},
			description_en:{
				required:true,
			},
			price:{
				required:true,
				number:true,
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	//Add Attritubes Validations
    $("#add_attritubes").validate({
		rules:{
			attributes_name:{
				required:true
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


	//Update Product
	$("#update_attributes").validate({
		rules:{
			attributes_name:{
				required:true
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});



	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


	// $("#delCat").click(function(){
	// 	if(confirm('Are you sure to delete this Category')){
	// 		return true;
	// 	}
	// 	return false;
	// });

	// $("#delPro").click(function(){
	// 	if(confirm('Are you sure to delete this Category')){
	// 		return true;
	// 	}
	// 	return false;
	// });
	$(".deleteProduct").click(function(){
		var id = $(this).attr('rel');
		var deleteFunction = $(this).attr('rel1');
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
		    Swal.fire(

		      'Deleted!',
		      'Your file has been deleted.',
		      'success',
		      window.location.href="/admin/product/"+deleteFunction+"/"+id
		    )
		  }
		});
	});


	$(".deleteCategory").click(function(){
		var id = $(this).attr('rel');
		var deleteFunction = $(this).attr('rel1');
		Swal.fire({
		  title: 'Are you sure???',
		  text: "You won't be able to revert this!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
		    Swal.fire(

		      'Deleted!',
		      'Your file has been deleted.',
		      'success',
		      window.location.href="/admin/category/"+deleteFunction+"/"+id
		    )
		  }
		});
	});


	$(".deleteProject").click(function(){
		var id = $(this).attr('rel');
		var deleteFunction = $(this).attr('rel1');
		Swal.fire({
		  title: 'Are you sure???',
		  text: "You won't be able to revert this!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
		    Swal.fire(

		      'Deleted!',
		      'Your file has been deleted.',
		      'success',
		      window.location.href="/admin/project/"+deleteFunction+"/"+id
		    )
		  }
		});
	});

	$(".deleteNewsCategory").click(function(){
		var id = $(this).attr('rel');
		var deleteFunction = $(this).attr('rel1');
		Swal.fire({
		  title: 'Are you sure???',
		  text: "You won't be able to revert this!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
		    Swal.fire(

		      'Deleted!',
		      'Your file has been deleted.',
		      'success',
		      window.location.href="/admin/newscategory/"+deleteFunction+"/"+id
		    )
		  }
		});
	});

	$(".deleteNews").click(function(){
		var id = $(this).attr('rel');
		var deleteFunction = $(this).attr('rel1');
		Swal.fire({
		  title: 'Are you sure???',
		  text: "You won't be able to revert this!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
		    Swal.fire(

		      'Deleted!',
		      'Your file has been deleted.',
		      'success',
		      window.location.href="/admin/news/"+deleteFunction+"/"+id
		    )
		  }
		});
	});

	// $(".deleteAttritubes").click(function(){
	// 	var id = $(this).attr('rel');
	// 	var deleteFunction = $(this).attr('rel1');
	// 	Swal.fire({
	// 	  title: 'Are you sure?',
	// 	  text: "You won't be able to revert this!",
	// 	  type: 'warning',
	// 	  showCancelButton: true,
	// 	  confirmButtonColor: '#3085d6',
	// 	  cancelButtonColor: '#d33',
	// 	  confirmButtonText: 'Yes, delete it!'
	// 	}).then((result) => {
	// 	  if (result.value) {
	// 	    Swal.fire(

	// 	      'Deleted!',
	// 	      'Your file has been deleted.',
	// 	      'success',
	// 	      window.location.href="/admin/"+deleteFunction+"/"+id
	// 	    )
	// 	  }
	// 	});
	// });
		

});



	
	
	

    

    


	


