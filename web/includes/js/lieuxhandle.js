	var showingtime = 5000 ;
	
	$(document).ready(function() 
	{


		
		

		
		//  ==================  Add Processing   ===================

					// process the form
		$('.addlieuxform').submit(function(event) {
			 
			var addlieuxurl = $('input[name=addlieux_url]').val(); 
			
		  // remove success messages and remove the past errors
		 $('#addlieux .lieux-form-group .messages-block').removeClass('alert alert-success').empty();
		 $('#addlieux .lieux-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
		  
			
		   
		  // get the form data
		  var formData = {
			  'nomlieux'              : $('input[name=nomlieux]').val(),
			  'codelieux'              : $('input[name=codelieux]').val(),
			  'tag'	: $('input[name=addlieuxtag]').val()
		  };

		  // process the form
		  $.ajax({
			type        : 'POST',
			url         : addlieuxurl,
			data        : formData,
			dataType    : 'json',
			success     : function(data) {

			 
			
			  
		   
		   
			  // if validation fails
			  // add the error class to show a red input
			  // add the error message to the help block under the input
			  if ( ! data.success) {
				  
				  
				$('#addlieux .lieux-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);
				
				

			  } else {
				
				// if validation is good add success message
				// if validation is good add success message
				//$('#addlieux').modal('hide');
				$('#addlieux .lieux-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
				
				
					
			
			  }
			}
		  });

		  
		  event.preventDefault();
		  
		   setTimeout(function()
		{
			  // remove success messages and remove the past errors
			$('#addlieux .lieux-form-group .messages-block').removeClass('alert alert-success').empty();
		  $('#addlieux .lieux-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
			
		}, 10000);
			// stop the form from submitting and refreshing
		  event.preventDefault();
		  
		});
	
	});







function deleteLieux(evt, lieuxName,nomModal) {

	var dellieuxurl = 'http://localhost/netbeanspedagofss/web/app_dev.php/Pedagogie/Lieux/Delete';
	
	var reloadtime = 1000 ;
	  // get the form data
	  var formData = {
		  'nomlieux'              : lieuxName,
		  'tag'	: 'deletelieux'
	  };

	 
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : dellieuxurl, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		 
		
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			 
			 
			$(nomModal).modal('hide');
			$('#usermessages').addClass('alert alert-danger alert-dismissable').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime );
			$('#usermessages').fadeOut( showingtime*2 );
			
			
		  }
		  else 
		  {
			$(nomModal).modal('hide');
			 x = document.getElementsByClassName('fsslieux'+lieuxName);
			  for (i = 0; i < x.length; i++) 
			  {
				 x[i].style.display = "none";
			  }
			
			
			// if validation is good add success message
			$('#usermessages').addClass('alert alert-success').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime );
			$('#usermessages').fadeOut( showingtime*2 );
			
			
		
		  }
		}
	  });

	  // stop the form from submitting and refreshing
	  evt.preventDefault();
  
  
}


function updateLieux(evt,formName) {
	
	
	var fname = formName;
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	  
	  console.log(fname);
	var updnomlieux = $("form[name='"+fname+"']").find('input[name="updnomlieux"]').val();
	var updcodelieux = $("form[name='"+fname+"']").find('input[name="updcodelieux"]').val();
	var oldlieuxname = $("form[name='"+fname+"']").find('input[name="oldlieuxname"]').val();
	var updlieuxtag = $("form[name='"+fname+"']").find('input[name="updlieuxtag"]').val();
	var updatelieuxurl = $("form[name='"+fname+"']").find('input[name="updatelieux_url"]').val();
		
		
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').empty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'updnomlieux'              	: updnomlieux,
		  'updcodelieux'              	: updcodelieux,
		  'oldlieuxname'			: oldlieuxname,
		  'tag'						: updlieuxtag
	  };
	  
	 

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : updatelieuxurl, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		
	   
	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			  
			  
			
			$('#'+fname+' .lieux-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);
			
			

		  } else {
			
			$('#'+fname+' .lieux-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
			setTimeout(function()
			{
					$('#'+fname+' .lieux-form-group .messages-block').removeClass('alert alert-success').empty();
					$('#'+fname+' .lieux-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
					
					
			}, 5000);
		
		  }
		}
	  });

	  
  
}


