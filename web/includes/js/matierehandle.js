	var showingtime = 10000 ;
	
	$(document).ready(function() {


	
	//  ==================  Add Processing   ===================

				// process the form
	$('#addmatiereform').submit(function(event) {
		 
		var addmatiereurl = $('input[name=addmatiere_url]').val(); 
	
	    // remove success messages and remove the past errors
	 $('.mat-form-group .messages-block').removeClass('alert alert-success').empty();
	 $('.mat-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
		
	   
	  // get the form data
	  var formData = {
		  'nommat'              : $('input[name=nommatiere]').val(),
		  'matfil'              : $( "#addmatfilselect" ).val(),
		  'matdep'              : $( "#addmatdepselect" ).val(),
		  'matdis'              : $( "#addmatdisselect" ).val(),
		  'matunt'              : $( "#addmatuntselect" ).val(),
		  'tag'					: $('input[name=addmattag]').val()
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : addmatiereurl,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		
		  
	   
	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			  
			  
			$('#addmatiereform .mat-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);

		  }
		  else 
		  {
			
			// if validation is good add success message
			
			$('#addmatiereform .mat-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
			document.getElementById("addmatiereform").reset();
	
		  }
		  
		  setTimeout(function()
			{
				$('#addmatiereform .mat-form-group .messages-block').removeClass('alert alert-success').empty();
				$('#addmatiereform .mat-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
				//document.getElementById("addmatiereform").reset();
				//<h3></h3>$('#addmatiere').modal('hide');
			}, 10000);
		}
	  });

	  // stop the form from submitting and refreshing
	  event.preventDefault();
	});

});





function deleteMatiere(evt, disName,nomModal) {

	  // remove success messages and remove the past errors
	 $('.mat-form-group .messages-block').removeClass('alert alert-success').empty();
	 $('.mat-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
	 
	var delmaturl = 'http://localhost/netbeanspedagofss/web/app_dev.php/Pedagogie/Matiere/Delete';
	
	var reloadtime = 1000 ;
	  // get the form data
	  var formData = {
		  'nommat'              : matName,
		  'tag'	: 'deletemat'
	  };

	
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : delmaturl, 
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		 
		
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) {
			 
			$('.mat-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);
		
		  }
		  else 
		  {
			  
			
			document.getElementById('fssmat'+matName).style.display = "none";
			document.getElementById('fssmat'+matName).style.display = "none";
			
			$('.mat-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
						
			// if validation is good add success message
			
			setTimeout(function()
			{
				$('.mat-form-group .messages-block').removeClass('alert alert-success').empty();
				$('.mat-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
				$(nomModal).modal('hide');
			}, 5000);
			
		  }
		}
	  });

	  // stop the form from submitting and refreshing
	  evt.preventDefault();
  
  
}


function updateMatiere(evt,formName,nomMatiere) {
	
	
	var fname = formName;
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	  
	  console.log(fname);
	var updnomcls = $("form[name='"+fname+"']").find('input[name="updnommatiere"]').val();
	var upddepcls = $( "#upddepmatiere"+nomMatiere).val();
	var updfilcls = $( "#updfilclsselect"+nomMatiere ).val();
	var oldmatname = $("form[name='"+fname+"']").find('input[name="oldmatname"]').val();
	var updmattag = $("form[name='"+fname+"']").find('input[name="updmattag"]').val();
	var updatematiereurl= $("form[name='"+fname+"']").find('input[name="updatematiere_url"]').val();
		
		
	  // remove success messages and remove the past errors
	 $('.mat-form-group .messages-block').removeClass('alert alert-success').empty();
	 $('.mat-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'nommat'              	: updnomcls,
		  'depmat'              	: upddepcls,
		  'filmat'					: updfilcls,
		  'oldmatname'				: oldclsname,
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
			
			

		  } 
		  else 
		  {
			$('.mat-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
			
			// if validation is good add success message
			
			setTimeout(function()
			{
				$('.mat-form-group .messages-block').removeClass('alert alert-success').empty();
				$('.mat-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
						
			}, 5000);
			
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
		
			
			matLoadDiscipline(data.filiere['fil0'].filiereid,'addmatdisselect');			
		
		  }
		  
		  
		  
		
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
	
	
}


function matLoadDiscipline(filName,selectId)
{
	
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Disciplines </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getdis_url = $('input[name=getmatfildisurl]').val();
		var nomfil = filName; 
		var tag = 'getfildis';
		
	  // get the form data
	  var formData = {
		  'nomfil'              : nomfil,
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
		
			
			
		  } 
		  else 
		  {
				document.getElementById(selectId).innerHTML = "";
			// if validation is good add success message
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
				
		
			
			
		  }
		  
	
			
	
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
	
}



