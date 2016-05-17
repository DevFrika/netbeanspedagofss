	var showingtime = 10000;
	
	$(document).ready(function() {



				//  ==================  Inscription Processing   ===================

				// process the form
	$('#addenseignantform').submit(function(event) {
		 
		 var ensregister_url = $('input[name=ensregister_url]').val();
		 
		$(".ajax_spinner").remove();
		$(".ajax_wait").remove();

	   
	   
	  // remove the past errors
	  $('#reg_username-group').removeClass('has-error');
	  $('#reg_email-group .help-block').empty();
	  $('#reg_username-group').removeClass('has-error');
	  $('#reg_email-group .help-block').empty();
	  $('#reg_password-group').removeClass('has-error');
	  $('#reg_password-group .help-block').empty();

	  // remove success messages
	  $('#reg_messages').removeClass('alert alert-success').empty();
	  $('#reg_messages').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'username'            : $('input[name=ens_username]').val(), 
		  'famname'             : $('input[name=ens_famname]').val(),
		  'surname'             : $('input[name=ens_surname]').val(),
		  'email'               : $('input[name=ens_email]').val(),
		  'telens'               : $('input[name=ens_telephone]').val(),
		  'codeens'               : $('input[name=ens_code]').val(),
		  'depens'              : $( "#ensdepselect" ).val(),
		  'sitens'              : $( "#enssitselect" ).val(),
		  'grdens'              : $( "#ensgrdselect" ).val(),
		  'disens'              : $( "#ensdisselect" ).val(),
		  'matens'              : $( "#ensmatselect" ).val(),
		  'tag'	: $('input[name=addenstag]').val()
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : ensregister_url, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		var label = "<span class='ajax_spinner' align=center><img src='includes/script/files/ispinner.gif'/> Chargement </span>";
	   $(".ajax_wait").after(label);
		  
	   
	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			  
			  $(".ajax_spinner").remove();
			  $(".ajax_wait").remove();
			 
			
			
			
			$('#reg_messages').addClass('alert alert-danger alert-dismissable').append('<p>' + data.message + '</p>');
			
		

		  } else {
			
			// if validation is good add success message
			$('#reg_messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
			
			
			$('#addenseignant').modal('hide');
		
		  }
		}
	  });

	  // stop the form from submitting and refreshing
	  event.preventDefault();
	});

});


function deleteEnseignant(evt, ensName,nomModal) {

	var delclsurl = 'http://localhost/netbeanspedagofss/web/app_dev.php/Pedagogie/Enseignant/Delete';
	
	var reloadtime = 1000 ;
	  // get the form data
	  var formData = {
		  'idens'              : ensName,
		  'tag'	: 'deleteens'
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
			$('#usermessages').fadeIn( showingtime/5 );
			$('#usermessages').fadeOut( showingtime );
			
			
		  }
		  else 
		  {
			$(nomModal).modal('hide');
			document.getElementById('fssens'+ensName).style.display = "none";
			document.getElementById('fssens'+ensName).style.display = "none";
			
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


function updateEnseignant(evt,formName,nomEnseignant) {
	
	
	
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	
	var fname = formName;
	var updensfamname = $("form[name='"+fname+"']").find('input[name="updens_famname"]').val(); 
	var updenssurname = $("form[name='"+fname+"']").find('input[name="updens_surname"]').val();  
	var updensusername = $("form[name='"+fname+"']").find('input[name="updens_username"]').val();
	var updensemail = $("form[name='"+fname+"']").find('input[name="updens_email"]').val();	
	var oldensname = $("form[name='"+fname+"']").find('input[name="oldensname"]').val(); 
	var upddepens = $( "#updensdepselect"+nomEnseignant ).val();
	var updsitens = $( "#updenssitselect"+nomEnseignant ).val();
	var updgrdens = $( "#updensgrdselect"+nomEnseignant ).val();
	
	var updenstag = $("form[name='"+fname+"']").find('input[name="updenstag"]').val();
	var updateenseignanturl = $("form[name='"+fname+"']").find('input[name="updateenseignant_url"]').val();
		
		
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').empty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'famname'              	: updensfamname,
		  'surname'              	: updenssurname,
		  'username'				: updensusername,
		  'email'					: updensemail,
		  'depens'					: upddepens,
		  'sitens'					: updsitens,
		  'grdens'					: updgrdens,
		  'oldensname'				: oldensname,
		  'tag'						: updenstag
	  };
	  
	  $(".ajax_spinner").remove();
		$(".ajax_wait").remove();
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
		$(".ajax_wait").after(label);

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : updateenseignanturl, 
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
			$('#usermessages').fadeIn( showingtime/5 );
			$('#usermessages').fadeOut( showingtime );
			
			

		  } else {
			
			// if validation is good add success message
			$('#usermessages').addClass('alert alert-success alert-dismissable').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime/5 );
			$('#usermessages').fadeOut( showingtime );
			
		
		  }
		}
	  });

	  
  
}

function ensLoadDiscipline(depName,selectId)
{
	
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Disciplines </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getdis_url = $('input[name=getdepdis_url]').val();
		var nomdep = depName; 
		var tag = 'getdepdis';
		
	  // get the form data
	  var formData = {
		  'nomdep'              : nomdep,
		  'tag'					: tag
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : getdis_url,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  
		  
		  if ( ! data.success ) 
		  {
			 
			// if validation is bad add error message
			
			document.getElementById("loadertext").innerHTML = "" ;
			document.getElementById("loadermodal").style.display = "none";
			
			/*var disciplines = "Aucune Discipline Trouvée ";
			var newoption ='<option value="'+disciplines+'" >'+disciplines+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;*/
			
			
		  } 
		  else 
		  {
				
			// if validation is good add success message
			document.getElementById(selectId).innerHTML = "";
			var i = 0;	
			var dis;
			
			for( dis in data.disciplines )
			{
				
				var disciplines = data.disciplines['dis'+i].discipline;
				var disid = data.disciplines['dis'+i].disciplineid;
				var newoption ='<option value="'+disid+'" >'+disciplines+'</option>' ;
				document.getElementById(selectId).innerHTML += newoption;
				i++;
				
				
			}
				
		
			
			ensLoadMatiere(data.disciplines['dis0'].disciplineid,'ensmatselect');
		  }
		  
			document.getElementById("loadertext").innerHTML = "" ;
			document.getElementById("loadermodal").style.display = "none";
	
			
	
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}

function ensLoadMatiere(disName,selectId)
{
	
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Matiéres </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getmat_url = $('input[name=getmat_url]').val();
		var nomdis = disName; 
		var tag = 'getdismat';
		
	  // get the form data
	  var formData = {
		  'nomdis'              : nomdis,
		  'tag'					: tag
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : getmat_url,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  
		  
		  if ( ! data.success ) 
		  {
			 
			// if validation is bad add error message
			document.getElementById("loadertext").innerHTML = "" ;
			document.getElementById("loadermodal").style.display = "none";
		
			/*var matieres = "Aucune Matiére Trouvée ";
			var newoption ='<option value="'+matieres+'" >'+matieres+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;*/
			
		  } 
		  else 
		  {
				
				// if validation is good add success message
			document.getElementById(selectId).innerHTML = "";
			var i = 0;	
			var mat;
			
			for( mat in data.matieres )
			{
				
				var matieres = data.matieres['mat'+i].matiere;
				var idmat = data.matieres['mat'+i].matiereid;
				var newoption ='<option value="'+idmat+'" >'+matieres+'</option>' ;
				document.getElementById(selectId).innerHTML += newoption;
				i++;
				
			}
			
			
		  
		  }
		  
		  
			document.getElementById("loadertext").innerHTML = "" ;
			document.getElementById("loadermodal").style.display = "none";
			
			
			
	
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
	
}



