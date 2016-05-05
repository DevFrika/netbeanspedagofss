	var showingtime = 10000 ;
	
	$(document).ready(function() {


	
	//  ==================  Add Processing   ===================

				// process the form
	$('#adddisciplineform').submit(function(event) {
		 
		var addclasseurl = $('input[name=addclasse_url]').val(); 
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').empty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').empty();
	  
		$(".ajax_spinner").remove();
		$(".ajax_wait").remove();
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
		$(".ajax_wait").after(label);
	   
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
		url         : addclasseurl,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		
		  
	   
	   
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
			$('#addclasse').modal('hide');
			$('#usermessages').addClass('alert alert-success').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime/5 );
			$('#usermessages').fadeOut( showingtime );			
			
					
		
		  }
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
			document.getElementById('fssdis'+disName).style.display = "none";
			document.getElementById('fssdis'+disName).style.display = "none";
			
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


function updateDiscipline(evt,formName,nomClasse) {
	
	
	var fname = formName;
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	  
	  console.log(fname);
	var updnomcls = $("form[name='"+fname+"']").find('input[name="updnomclasse"]').val();
	var upddepcls = $( "#upddepclsselect"+nomClasse ).val();
	var updfilcls = $( "#updfilclsselect"+nomClasse ).val();
	var updancls = $( "#anclsselect"+nomClasse ).val();
	var oldclsname = $("form[name='"+fname+"']").find('input[name="oldclsname"]').val();
	var updclstag = $("form[name='"+fname+"']").find('input[name="updclstag"]').val();
	var updateclasseurl = $("form[name='"+fname+"']").find('input[name="updateclasse_url"]').val();
		
		
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').empty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'nomcls'              	: updnomcls,
		  'depcls'              	: upddepcls,
		  'filcls'					: updfilcls,
		  'ancls'					: updancls,
		  'oldclsname'				: oldclsname,
		  'tag'						: updclstag
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


function matLoadFiliere(depName,selectId)
{
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Filieres </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getfil_url = $('input[name=getfilmat_url]').val();
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
				var filiere = data.filiere['fil'+i].fil;
				var newoption ='<option value="'+filiere+'" >'+filiere+'</option>' ;
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


function matLoadDiscipline(grpName,selectId)
{
	
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Disciplines </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getdis_url = $('input[name=getdismat_url]').val();
		var nomgrp = grpName; 
		var tag = 'getfildis';
		
	  // get the form data
	  var formData = {
		  'nomgrp'              : nomgrp,
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
			
			var disciplines = "Aucune Discipline Trouvée ";
			var newoption ='<option value="'+disciplines+'" >'+disciplines+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;
			
			
		  } 
		  else 
		  {
				
			// if validation is good add success message
			var i = 0;	
			var dis;
			
			for( dis in data.disciplines )
			{
				var disciplines = data.disciplines['dis'+i].discipline;
				var newoption ='<option value="'+disciplines+'" >'+disciplines+'</option>' ;
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



