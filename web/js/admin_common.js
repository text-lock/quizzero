jQuery(document).ready(function($) {

	var json_str = $("#admin_question_variates").val();
	var variants = [];
 	var question_type = $('#admin_question_Type').val();
 	var question_variant = $("#question_variant");
 	var admin_question_variates = $("#admin_question_variates");
 	
	
	check_status(question_type);

	$("#admin_question_Type").change(function(){
		question_type = $(this).val();	
		check_status(question_type);
	});

	$( '[name="admin_question"]' ).submit(function( event ) {
		if (question_type == "textarea" || question_type == "text"){
			variants = [{value: question_variant.val(), isCorrect: true}];
			variants_init(variants);
		}
	   // event.preventDefault();
	});


function check_status(question_type){

	if($("#admin_question_variates").val() == ''){
		variants = [{value:"",isCorrect: true}];
	}else
		variants = JSON.parse(admin_question_variates.val());

	if (question_type == 'radio'){
		for (item in variants) 
			variants[item].isCorrect = false;		
	}

	if (question_type == 'radio' || question_type == 'checkbox'){ 
		$("#ad_question_variant").show();
		$("#variant_block").show();
		$("#admin_question_correct").hide();
		$('[for="admin_question_correct"]').hide();
		$(".variant_block h3").html('Variants');
		if($("#admin_question_variates").val() == '[{"isCorrect":true,"value":""}]'){
			admin_question_variates.val('');
			variants = [];
		}

	}else{
		question_variant.val(variants[0].value);
		$("#ad_question_variant").hide();
		$("#admin_question_correct").show();
		$('[for="admin_question_correct"]').show();
		$(".variant_block h3").html('Correct');
	}

	$("#ad_question_variant").click(function(){
		var temp = {};
		temp.isCorrect = false;
		temp.value = question_variant.val();
		if (temp.value != ""){
			variants.push(temp);
			variants_init(variants);
			question_variant.val('');
		}
	})

	variants_init(variants);

}
function variants_init(variants){
	admin_question_variates.val(JSON.stringify(variants));

	console.log(admin_question_variates.val());
	$('#question_variants').html('');

	if (question_type == 'radio' || question_type == 'checkbox')
		for (var item in variants) {
			var ans_status = '';		
		  	if(variants[item].isCorrect == true)
				ans_status = ':: isCorrect';
				
	  		$('#question_variants').append('<div class="alert alert-info alert-dismissible" role="alert" val="'+item +'" hint="click to set correct">'+
											  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											  		'<span aria-hidden="true" val="'+item+'">&times;</span>'+
											  '</button>'+variants[item].value+'<label>'+ans_status+'</label></div>');
		}

	$('[aria-hidden]').click(function(){
		var getval = $(this).attr('val');
		delete variants[getval];	
		variants = variants.filter(Boolean);
		variants_init(variants);
	});

	$('[role="alert"]').click(function(){		
		var getval = $(this).attr('val');
		var temp = variants[getval].isCorrect;
		if(question_type == 'radio'){
			for (item in variants) 
				variants[item].isCorrect = false;

			variants[getval].isCorrect = true;
		}
		if(question_type == 'checkbox'){ 
			if (variants[getval].isCorrect == true) variants[getval].isCorrect = false;	
				else variants[getval].isCorrect = true;
		}
		variants_init(variants);
	});

}
});