	var showingtime = 5000 ;
	
	$(document).ready(function() 
	{


		
		

		
		//  ==================  Add Processing   ===================

					// process the form
		$('.addsalleform').submit(function(event) {
			 
			var addsalleurl = $('input[name=addsalle_url]').val(); 
			
		  // remove success messages and remove the past errors
		 $('#addsalle .salle-form-group .messages-block').removeClass('alert alert-success').empty();
		 $('#addsalle .salle-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
		  
			
		   
		  // get the form data
		  var formData = {
			  'nomsalle'              : $('input[name=nomsalle]').val(),
			  'capsalle'              : $('input[name=capsalle]').val(),
			  'codelieux'             : $('#sallelieuxselect').val(),
			  'audiosalle'            : $('input[name="audiosalle"]:checked').val(),
			  'retrosalle'            : $('input[name="retrosalle"]:checked').val(),
			  'tag'	: $('input[name=addsalletag]').val()
		  };

		  // process the form
		  $.ajax({
			type        : 'POST',
			url         : addsalleurl,
			data        : formData,
			dataType    : 'json',
			success     : function(data) {

			 
			
			  
		   
		   
			  // if validation fails
			  // add the error class to show a red input
			  // add the error message to the help block under the input
			  if ( ! data.success) {
				  
				  
				$('#addsalle .salle-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);
				
				

			  } else {
				
				// if validation is good add success message
				// if validation is good add success message
				//$('#addsalle').modal('hide');
				$('#addsalle .salle-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
				
				
					
			
			  }
			}
		  });

		  
		  event.preventDefault();
		  
		   setTimeout(function()
		{
			  // remove success messages and remove the past errors
			$('#addsalle .salle-form-group .messages-block').removeClass('alert alert-success').empty();
		  $('#addsalle .salle-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
			
		}, 10000);
			// stop the form from submitting and refreshing
		  event.preventDefault();
		  
		});
	
	});







function deleteSalle(evt, salleName,nomModal) {

	var delsalleurl = 'http://localhost/netbeanspedagofss/web/app_dev.php/Pedagogie/Salle/Delete';
	
	var reloadtime = 1000 ;
	  // get the form data
	  var formData = {
		  'nomsalle'              : salleName,
		  'tag'	: 'deletesalle'
	  };

	 
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : delsalleurl, 
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
			 x = document.getElementsByClassName('fsssalle'+salleName);
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


function updateSalle(evt,formName) {
	
	
	var fname = formName;
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	  
	  console.log(fname);
	var updnomsalle = $("form[name='"+fname+"']").find('input[name="updnomsalle"]').val();
	var updcodesalle = $("form[name='"+fname+"']").find('input[name="updcodesalle"]').val();
	var oldsallename = $("form[name='"+fname+"']").find('input[name="oldsallename"]').val();
	var updsalletag = $("form[name='"+fname+"']").find('input[name="updsalletag"]').val();
	var updatesalleurl = $("form[name='"+fname+"']").find('input[name="updatesalle_url"]').val();
		
		
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').empty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'updnomsalle'              	: updnomsalle,
		  'updcodesalle'              	: updcodesalle,
		  'oldsallename'			: oldsallename,
		  'tag'						: updsalletag
	  };
	  
	 

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : updatesalleurl, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		
	   
	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			  
			  
			
			$('#'+fname+' .salle-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);
			
			

		  } else {
			
			$('#'+fname+' .salle-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
			setTimeout(function()
			{
					$('#'+fname+' .salle-form-group .messages-block').removeClass('alert alert-success').empty();
					$('#'+fname+' .salle-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
					
					
			}, 5000);
		
		  }
		}
	  });

	  
  
}


