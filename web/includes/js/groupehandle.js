	var showingtime = 30000 ;
	
	$(document).ready(function() {


	
	//  ==================  Add Processing   ===================

				// process the form
	$('.addgroupeform').submit(function(event) {
		 
		 
		var addclasseurl = $('input[name=addgroupe_url]').val(); 
		
	  // remove success messages and remove the past errors
	$('.cls-form-group .messages-block').removeClass('alert alert-success').empty();
	  $('.cls-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
	  
		$(".ajax_spinner").remove();
		$(".ajax_wait").remove();
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
		$(".ajax_wait").after(label);
	   
	  // get the form data
	  var formData = {
		  'nomgrp'              : $('input[name=addnomgroupe]').val(),
		  'clsgrp'              : $( "#addgrpclsselect" ).val(),
		  'filgrp'              : $( "#addgrpfilselect" ).val(),
		  'depgrp'              : $( "#addgrpdepselect" ).val(),
		  'tag'	: $('input[name=addgrptag]').val()
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : addclasseurl,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		
		  
	   
	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			  
			  
			
			
			$('.cls-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);
			

		  } else {
			
			// if validation is good add success message
			$('.cls-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
			//$('#addgroupe').modal('hide');
					
			
				 setTimeout(function()
	{
		  // remove success messages and remove the past errors
	 	$('.cls-form-group .messages-block').removeClass('alert alert-success').empty();
	  $('.cls-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
		
	}, 5000);	
		
		  }
		}
	  });

	  
	
	  // stop the form from submitting and refreshing
	  event.preventDefault();
	});

});





function deleteGroupe(evt, grpName,nomModal) {

	var delclsurl = 'http://localhost/netbeanspedagofss/web/app_dev.php/Pedagogie/Groupe/Delete';
	
	var reloadtime = 1000 ;
	  // get the form data
	  var formData = {
		  'nomgrp'              : grpName,
		  'tag'	: 'deletegrp'
	  };

	  $(".ajax_spinner").remove();
		$(".ajax_wait").remove();
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
		$(".ajax_wait").after(label);
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : delclsurl, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		 
		
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			 
			  $(".ajax_spinner").remove();
			  $(".ajax_wait").remove();
			  
			  
			if (data.errors.nomfil || data.errors.tag ) {
			  $('#email-group').addClass('has-error');
			  $('#email-group .help-block').html(data.errors.email);
			}

			
			
			$('#usermessages').addClass('alert alert-danger alert-dismissable').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime );
			$('#usermessages').fadeOut( showingtime/5 );
			
			
		  }
		  else 
		  {
			$(nomModal).modal('hide');
			document.getElementById('fss'+grpName).style.display = "none";
			document.getElementById('fss'+grpName).style.display = "none";
			
			// if validation is good add success message
			$('#usermessages').addClass('alert alert-success').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime/5 );
			$('#usermessages').fadeOut( showingtime );
			
			
		
		  }
		}
	  });

	  // stop the form from submitting and refreshing
	  evt.preventDefault();
  
  
}


function updateGroupe(evt,formName,nomGroupe) {
	
	
	var fname = formName;
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	  
	  console.log(fname);
	var updnomgrp = $("form[name='"+fname+"']").find('input[name="updnomgroupe"]').val();
	var upddepgrp = $( "#updgrpdepselect"+nomGroupe ).val();
	var updfilgrp = $( "#updgrpfilselect"+nomGroupe ).val();
	var updclsgrp = $( "#updgrpclsselect"+nomGroupe ).val();
	var oldgrpname = $("form[name='"+fname+"']").find('input[name="oldgrpname"]').val();
	var updgrptag = $("form[name='"+fname+"']").find('input[name="updgrptag"]').val();
	var updategroupeurl = $("form[name='"+fname+"']").find('input[name="updategroupe_url"]').val();
		
		
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').empty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'nomgrp'              	: updnomgrp,
		  'depgrp'              	: upddepgrp,
		  'filgrp'					: updfilgrp,
		  'clsgrp'					: updclsgrp,
		  'oldgrpname'				: oldgrpname,
		  'tag'						: updgrptag
	  };
	  
	  $(".ajax_spinner").remove();
		$(".ajax_wait").remove();
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
		$(".ajax_wait").after(label);

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : updategroupeurl, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
	   $(".ajax_wait").after(label);
		  
	   
	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			  
			  
			
			$(".ajax_spinner").remove();
			$(".ajax_wait").remove();
			
			
			$('#usermessages').addClass('alert alert-danger alert-dismissable').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime );
			$('#usermessages').fadeOut( showingtime/5 );
			
			

		  } else {
			
			// if validation is good add success message
			$('#usermessages').addClass('alert alert-success alert-dismissable').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime );
			$('#usermessages').fadeOut( showingtime/5 );
			
		
		  }
		}
	  });

	  
  
}


function grpLoadFiliere(depName,selectId)
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
			var newoption ='<option value="'+filiere+'" >'+filiere+'</option>' ;
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
		
		
			
			grpLoadClasse(data.filiere['fil0'].fil,'clsgrpselect');			
		
		  }
		  
			
	
			
		  
		}
	  });

	
	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}

function grpLoadClasse(filName,selectId)
{
	
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Classes </p> " ;
		document.getElementById("loadermodal").style.display = "block";
			
		var getcls_url = $('input[name=getcls_url]').val();
		var nomfil = filName; 
		var tag = 'getfilcls';
	   
	  // get the form data
	  var formData = {
		  'nomfil'              : nomfil,
		  'tag'					: tag
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : getcls_url,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  document.getElementById(selectId).innerHTML = "" ;
		  
		  if ( ! data.success ) 
		  {
			 
			// if validation is bad add error message
			
			document.getElementById("loadertext").innerHTML = "" ;
			document.getElementById("loadermodal").style.display = "none";
	
			var classes = 'Aucune Classe trouvée ';
			var newoption ='<option value="'+classes+'" >'+classes+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;		
			
			
		  } 
		  else 
		  {
			document.getElementById(selectId).innerHTML = "" ;
				// if validation is good add success message
			
			var i = 0;	
			var cls;
			
			for( cls in data.classes )
			{
				var classes = data.classes['cls'+i].classe;
				var clsid = data.classes['cls'+i].classeid;
				var newoption ='<option value="'+clsid+'" >'+classes+'</option>' ;
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



