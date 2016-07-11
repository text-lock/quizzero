var variants = {};  //A variants
var correct = {};	//Correct answer list
var question_type ='';

jQuery(document).ready(function($) {

	$('#question_Type').change(function(){ //when Question type was changed
		
		question_type = $(this).val();
		
		$('#question_correct').val('');

		if( (question_type == "textarea") || (question_type == "text")){
			variants = {};
			correct = {};
			$('.variant_block').hide();
			$('#question_correct').parent().show();
			$('#question_variant').val('');
			$('#question_variants').html('');
			
		
		}else{
			
			$('.variant_block').show();
			$('#question_correct').parent().hide();
		}
		variants = {};
		correct = {};
		init_variants(variants,question_type);
	})

	$('#ad_question_variant').ready(function(){
		question_type = $('#question_Type').val();

		if( (question_type == "textarea") || (question_type == "text")){
			
			$('.variant_block').hide();
			$('#question_correct').parent().show();
			$('#question_variant').val('');
			$('#question_variants').html('');

			$('#question_variates').val(Object.keys(variants).join(';'));
			$('#question_correct').val(Object.keys(correct).join(';'));
		}else{
			
			$('.variant_block').show();
			$('#question_correct').parent().hide();

			$('#question_correct').val(Object.keys(correct).join(';'));
			
		}

		variants = {};
		correct = {};

		var var_string = $('#question_variates').val().split(';');
		var corr_string = $('#question_correct').val().split(';');

		if (typeof var_string == 'undefined')	var_string = '';
		if (typeof corr_string == 'undefined')	corr_string = '';

		variants = new variant(var_string);
		correct = new variant(corr_string);
		
		init_variants(variants,question_type);
	});


	$('#ad_question_variant').click(function(){
		var newvar = $('#question_variant').val();
		variants[newvar] = newvar;
		init_variants(variants,question_type);
		$('#question_variant').val('');
	})

});

function init_variants(variants,question_type){
	$('#question_variants').html('');

	$.each(variants, function(index, value) {	
		var ans_status ='';
		if(value == correct[value]){
			ans_status = ':: isCorrect';
		}
		$('#question_variants').append('<div class="alert alert-info alert-dismissible" role="alert" val="'+value+'" hint="click to set correct">'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										  		'<span aria-hidden="true" val="'+value+'">&times;</span>'+
										  '</button>'+value+'<label>'+ans_status+'</label></div>');
	});


	$('[aria-hidden]').click(function(){
		var getval = $(this).attr('val');
		delete variants[getval];
		delete correct[getval];
	});

	$('[role="alert"]').click(function(){
		if (question_type == 'radio'){
			correct ={}
			$("#question_correct").val($(this).attr('val'));
			$('[role="alert"]').find('label').html('');
			$(this).find('label').html(':: isCorrect');

			correct[$(this).attr('val')] = $(this).attr('val');

			

		}else if(question_type == 'checkbox'){

			if($(this).find('label').html() ==':: isCorrect'){
				$(this).find('label').html('');
				delete correct[$(this).attr('val')];
			}
			else{
				$(this).find('label').html(':: isCorrect');
				correct[$(this).attr('val')] = $(this).attr('val');
			}
		}

		$('#question_variates').val(Object.keys(variants).join(';'));
		$('#question_correct').val(Object.keys(correct).join(';'));
		
	})
	

}

function variant(arr) {
		
		for (var i = 0; i < arr.length; ++i)
    		this[arr[i]] = arr[i];		
	}

