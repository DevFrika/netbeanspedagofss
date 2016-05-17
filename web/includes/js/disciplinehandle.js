	var showingtime = 10000 ;
	
	$(document).ready(function() {


	
	//  ==================  Add Processing   ===================

				// process the form
	$('#adddisciplineform').submit(function(event) {
		 
		var adddisciplineurl = $('input[name=adddiscipline_url]').val(); 
	
	
	    // remove success messages and remove the past errors
	 $('.dis-form-group .messages-block').removeClass('alert alert-success').empty();
	 $('.dis-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
	 
	  // get the form data
	  var formData = {
		  'nomdis'              : $('input[name=nomdiscipline]').val(),
		  'fildis'              : $( "#fildisselect" ).val(),
		  'depdis'              : $( "#depdisselect" ).val(),
		  'tag'					: $('input[name=adddistag]').val()
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : adddisciplineurl,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		
		  
	   
	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) 
		  {
			 
			$('#adddisciplineform .dis-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);

		  } 
		  else 
		  {
			
			// if validation is good add success message
			
			
			$('#adddisciplineform .dis-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
			document.getElementById("adddisciplineform").reset();
	
		  }
		  
		  setTimeout(function()
			{
				$('#adddisciplineform .dis-form-group .messages-block').removeClass('alert alert-success').empty();
				$('#adddisciplineform .dis-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
				
			}, 5000);
			
		}
	  });

	  // stop the form from submitting and refreshing
	  event.preventDefault();
	});

});





function deleteDiscipline(evt, disName,nomModal) {

	var deldisurl = 'http://localhost/netbeanspedagofss/web/app_dev.php/Pedagogie/Discipline/Delete';
	
	var reloadtime = 1000 ;
	  // get the form data
	  var formData = {
		  'nomdis'              : disName,
		  'tag'	: 'deletedis'
	  };

	  $(".ajax_spinner").remove();
		$(".ajax_wait").remove();
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
		$(".ajax_wait").after(label);
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : deldisurl, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		 
		
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) 
		  {
			 
			
		  }
		  else 
		  {
			// if validation is good add success message
			document.getElementById('fssdis'+disName).style.display = "none";
			document.getElementById('fssdis'+disName).style.display = "none";
			$(nomModal).modal('hide');
		  }
		}
	  });

	  // stop the form from submitting and refreshing
	  evt.preventDefault();
  
  
}


function updateDiscipline(evt,formName,nomDiscipline) {
	
	
	
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	  
	var fname = formName;
	var updnomdis = $("form[name='"+fname+"']").find('input[name="updnomclasse"]').val();
	var upddepdis = $( "#upddepclsselect"+nomClasse ).val();
	var updfildis = $( "#updfilclsselect"+nomClasse ).val();
	var olddisname = $("form[name='"+fname+"']").find('input[name="oldclsname"]').val();
	var upddistag = $("form[name='"+fname+"']").find('input[name="updclstag"]').val();
	var updateclasseurl = $("form[name='"+fname+"']").find('input[name="updateclasse_url"]').val();
		
		
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').empty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'nomdis'              	: updnomdis,
		  'depdis'              	: upddepdis,
		  'fildis'					: updfildis,
		  'olddisname'				: olddisname,
		  'tag'						: upddistag
	  };
	  
	  $(".ajax_spinner").remove();
		$(".ajax_wait").remove();
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
		$(".ajax_wait").after(label);

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : updateclasseurl, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
	   $(".ajax_wait").after(label);
		  
	   
	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			  
			  
			
			
			
			

		  } else {
			
			// if validation is good add success message
			
			
		
		  }
		}
	  });

	  
  
}


function disLoadFiliere(depName,selectId)
{
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Filieres </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getfil_url = $('input[name=getfil_url]').val();
		var nomdep = depName; 
		var tag = 'getdepfil';
		var result ;
	   
	  // get the form data
	  var formData = {
		  'nomdep'              : nomdep,
		  'tag'					: tag
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : getfil_url,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

	   
		
		// if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		
		  
		  if ( ! data.success ) 
		  {
			
			 
			// if validation is bad add error message
			var filiere = "Aucune Filiere trouvée ";
			var newoption ='<option value="'+0+'" >'+filiere+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;		
			
			
		  } 
		  else 
		  {
			  document.getElementById(selectId).innerHTML = "" ;
				
				// if validation is good add success message
			var i = 0;
			var fil;
			
			for( fil in data.filiere )
			{
				var filiere = data.filiere['fil'+i].filiere;
				var filid = data.filiere['fil'+i].filiereid;
				var newoption ='<option value="'+filid+'" >'+filiere+'</option>' ;
				document.getElementById(selectId).innerHTML += newoption;
				i++;
			}
		
		  }
		  
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}




