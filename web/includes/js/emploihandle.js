var showingtime = 30000 ;
var hideloader = 10000;
	
	$(document).ready(function() {


	var redirecturl = 'http://localhost/netbeanspedagofss/web/app_dev.php/Pedagogie';
	var reloadtime = 1000 ;
	var cookietime = 24*60*60*1000;
	
	var days = 1;
	var usercookie = "iduser";
	

	

	//  ==================  Add Processing   ===================

				// process the form
	$('#addemploiform').submit(function(event) {
		 
		var addemploi_url = $('input[name=addemploi_url]').val();
		
		var nomfil = $( "#addempfilselect" ).val();
		var nomdep = $( "#addempdepselect" ).val();
		var nomcls = $( "#addempclsselect" ).val();
		var nomgrp = $( "#addempgrpselect" ).val();
		var nomdis = $( "#addempdisselect" ).val();
		var nommat = $( "#addempmatselect" ).val();
		var nomens = $( "#addempensselect" ).val();
		var nomnat = $( "#natselect" ).val();
		var nomlieux = $( "#addemplieuxselect" ).val();
		var nomsal = $( "#addempsalselect" ).val();
		var nomjour = $( "#addempjourselect" ).val();
		var hdeb = $( "#addemphdebselect" ).val();
		var mindeb = $( "#addempmindebselect" ).val();
		var hfin = $( "#addemphfinselect" ).val();
		var minfin = $( "#addempminfinselect" ).val();
		var tag = $('input[name=addemptag]').val();
	  // remove success messages and remove the past errors
	 $('.emp-form-group .messages-block').removeClass('alert alert-success').empty();
	  $('.emp-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
	  
		
		if(hdeb==hfin && mindeb==minfin)
		{
			alert("L'heure de debut et l'heure de fin sont les memes ");
		}
		else if(hdeb>hfin )
		{
			alert("L'heure de debut est superieure à l'heure de fin ");
		}
		else
		{
				  // get the form data
				  var formData = {
					  'nomfil'              : nomfil,
					  'nomdep'              : nomdep,
					  'nomcls'				: nomcls,
					  'nomgrp'				: nomgrp,
					  'nomdis'				: nomdis,
					  'nommat'				: nommat,
					  'nomens'				: nomens,
					  'nomnat'				: nomnat,
					  'nomlieux'			: nomlieux,
					  'nomsal'				: nomsal,
					  'nomjour'				: nomjour,
					  'hdeb'				: hdeb,
					  'mindeb'				: mindeb,
					  'hfin'				: hfin,
					  'minfin'				: minfin,
					  'tag'	: tag
				  };

				  // process the form
				  $.ajax({
					type        : 'POST',
					url         : addemploi_url,
					data        : formData,
					dataType    : 'json',
					success     : function(data) {

					 
					
					  
				   
				   
					  // if validation fails
					  // add the error class to show a red input
					  // add the error message to the help block under the input
					  if ( ! data.success) {
						  
						  
						
						$(".ajax_spinner").remove();
						  $(".ajax_wait").remove();
						$('.emp-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);
						
						

					  } else {
						
						
						$('.emp-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
						document.getElementById("addemploiform").reset();
						
						// if validation is good add success message
						//$('#addemploi').modal('hide');
						
								setTimeout(function()
								{
									$('.emp-form-group .messages-block').removeClass('alert alert-success').empty();
									$('.emp-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').empty();
									
								}, 5000);
												
					  }
					}
				  });

				  // stop the form from submitting and refreshing
	  
		}
	  event.preventDefault();
	  
	});
	
	
	

});


function deleteEmploi(evt, empName,nomModal) {

	var delempurl = $('input[name=delemploi_url]').val();
	var redirecturl = 'http://localhost/netbeanspedagofss/web/app_dev.php/Pedagogie';
	var reloadtime = 1000 ;
	  // get the form data
	  var formData = {
		  'nomemp'              : empName,
		  'tag'					: 'deleteemp'
	  };

	
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : delempurl, 
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
			$('#usermessages').fadeOut( showingtime);
			
			
		  }
		  else 
		  {
			$(nomModal).modal('hide');
			 x = document.getElementsByClassName('fssemp'+empName);
			  for (i = 0; i < x.length; i++) 
			  {
				 x[i].style.display = "none";
			  }
			
			
			// if validation is good add success message
			$('#usermessages').addClass('alert alert-success').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime/5 );
			$('#usermessages').fadeOut( showingtime);
			
			
		
		  }
		}
	  });

	  // stop the form from submitting and refreshing
	  evt.preventDefault();
  
  
}


function updateEmploi(evt,formName) {
	
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	  
	var fname = formName;  
	var updnomfil = $("form[name='"+fname+"']").find('input[name="updnomfiliere"]').val();
	var upddepfiliere = $("form[name='"+fname+"']").find('input[name="upddepfiliere"]').val();
	var oldfilname = $("form[name='"+fname+"']").find('input[name="oldfilname"]').val();
	var updfiltag = $("form[name='"+fname+"']").find('input[name="updfiltag"]').val();
	var updatefilierurl = $("form[name='"+fname+"']").find('input[name="updatefiliere_url"]').val();
		
		
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').empty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').empty();
	  
	   
	   
	  // get the form data
	  var formData = {
		  'nomfil'              	: updnomfil,
		  'depfil'              	: upddepfiliere,
		  'oldfilname'				: oldfilname,
		  'tag'						: updfiltag
	  };
	  
	  $(".ajax_spinner").remove();
		$(".ajax_wait").remove();
		var label = "<span class='ajax_spinner' align=center><img src='includes/images/ispinner.gif'/> Chargement </span>";
		$(".ajax_wait").after(label);

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : updatefilierurl, 
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
			$('#usermessages').fadeOut( showingtime);
			
			

		  } 
		  else 
		  {
			
			// if validation is good add success message
			
			
			$('#usermessages').addClass('alert alert-success alert-dismissable').html('<p>' + data.message + '</p>');
			document.getElementById("usermessages").style.display = "block";
			$('#usermessages').fadeIn( showingtime/5 );
			$('#usermessages').fadeOut( showingtime);
			
		
		  }
		}
	  });

	  
  
}


function empLoadFiliere(depName,selectId)
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
		
			
			empLoadClasse(data.filiere['fil0'].filiereid,'addempclsselect');			
		
		  }
		  
			
	
			
		  
		}
	  });

	
	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}

function empLoadClasse(filName,selectId)
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
		 
		  
		  if ( ! data.success ) 
		  {
			 
			// if validation is bad add error message
			
			document.getElementById("loadertext").innerHTML = "" ;
			document.getElementById("loadermodal").style.display = "none";
	
			var classes = 'Aucune Classe trouvée ';
			var newoption ='<option value="'+0+'" >'+classes+'</option>' ;
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
			
			
			
			empLoadGroupe(data.classes['cls0'].classeid,'addempgrpselect');
		  }
		  
			
	
			
		  
		}
	  });

	  
	
	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
	
}


function empLoadGroupe(clsName,selectId)
{
	
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Groupes </p> " ;
		document.getElementById("loadermodal").style.display = "block";
	
		var getgrp_url = $('input[name=getgrp_url]').val();
		var nomcls = clsName; 
		var tag = 'getclsgrp';
	   
	  // get the form data
	  var formData = {
		  'nomcls'              : nomcls,
		  'tag'					: tag
	  };

		// process the form
		$.ajax({
		type        : 'POST',
		url         : getgrp_url,
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
	
			var groupes = "Aucun Groupe Trouvé ";
			var newoption ='<option value="'+0+'" >'+groupes+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;		
			
			
		  } 
		  else 
		  {
				document.getElementById(selectId).innerHTML = "" ;
				// if validation is good add success message
			
			var i = 0;
			var grp;
			
			for( grp in data.groupes )
			{
				var groupes = data.groupes['grp'+i].groupe;
				var grpid = data.groupes['grp'+i].groupeid;
				var newoption ='<option value="'+grpid+'" >'+groupes+'</option>' ;
				document.getElementById(selectId).innerHTML += newoption;
				i++;
				
			}
			
			
			empLoadDiscipline(data.groupes['grp0'].groupeid,'addempdisselect');
		  }
		  
			
				
			
	
		  
		}
		
	  });

	
	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}


function empLoadDiscipline(grpName,selectId)
{
	
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Disciplines </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getdis_url = $('input[name=getdis_url]').val();
		var nomgrp = grpName; 
		var tag = 'getgrpdis';
		
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
			
			/*var disciplines = "Aucune Discipline Trouvée ";
			var newoption ='<option value="'+0+'" >'+disciplines+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;*/
			
			
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
				
		
			
			empLoadMatiere(data.disciplines['dis0'].disciplineid,'addempmatselect');
		  }
		  
	
			
	
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}

function empLoadMatiere(disName,selectId)
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
		  document.getElementById(selectId).innerHTML = "" ;
		  
		  if ( ! data.success ) 
		  {
			 
			// if validation is bad add error message
			document.getElementById("loadertext").innerHTML = "" ;
			document.getElementById("loadermodal").style.display = "none";
		
			/*var matieres = "Aucune Matiére Trouvée ";
			var newoption ='<option value="'+0+'" >'+matieres+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;*/
			
		  } 
		  else 
		  {
				document.getElementById(selectId).innerHTML = "";
				// if validation is good add success message
			
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
			
			
			empLoadEnseignant(data.matieres['mat0'].matiereid,'addempensselect');
		  
		  }
		  
		  
		
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
	
}

function empLoadEnseignant(matName,selectId)
{
	
	
		//empLoadNature(matName,'addempnatselect');
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Enseignants </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getens_url = $('input[name=getens_url]').val();
		var dep_ens = $('#depselect').val();
		var nommat = matName; 
		var tag = 'getmatens';
	   
	  // get the form data
	  var formData = {
		  'nommat'              : nommat,
		  'depens'				: dep_ens,
		  'tag'					: tag
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : getens_url,
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
			
			var enseignants = "Aucun Enseignant Trouvé ";
			var newoption ='<option value="'+0+'" >'+enseignants+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;
		
		  } 
		  else 
		  {
				 document.getElementById(selectId).innerHTML = "" ;
				// if validation is good add success message
			
			var i = 0;	
			var ens;
			
			for( ens in data.enseignants )
			{
				var enseignants = data.enseignants['ens'+i].enseignant;
				var ensid = data.enseignants['ens'+i].enseignantid;
				var newoption ='<option value="'+ensid+'" >'+enseignants+'</option>' ;
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

function empLoadNature(matName,selectId)
{
		
		var getmat_url = $('input[name=getnat_url]').val();
		var nommat = matName; 
		var tag = 'getmatnat';
		
	  // get the form data
	  var formData = {
		  'nommat'              : nommat,
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
		
			var natures = "Aucune Nature Trouvée ";
			var newoption ='<option value="'+0+'" >'+natures+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;
			
		  } 
		  else 
		  {
				
			// if validation is good add success message
			document.getElementById(selectId).innerHTML = "" ;
			
			var i = 0;	
			var nat;
			
			for( nat in data.natures )
			{
				var natures = data.natures['nat'+i].nature;
				var natid = data.natures['nat'+i].natureid;
				var newoption ='<option value="'+natid+'" >'+natures+'</option>' ;
				document.getElementById(selectId).innerHTML += newoption;
				i++;
				
			}
			
		
		  
		  }
		  
			
	
		}
	  });

}

	function empLoadSalle(lixName,selectId)
{
	
		document.getElementById("loadertext").innerHTML = " <p> Chargement des Salles </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getdis_url = $('input[name=getsal_url]').val();
		var nomlix = lixName; 
		var tag = 'getlixsal';
		
	  // get the form data
	  var formData = {
		  'nomlieux'              : nomlix,
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
			
			var disciplines = "Aucune Salles Trouvée ";
			var newoption ='<option value="'+disciplines+'" >'+disciplines+'</option>' ;
			document.getElementById(selectId).innerHTML += newoption;
			
			
		  } 
		  else 
		  {
				document.getElementById(selectId).innerHTML = "";
			// if validation is good add success message
			var i = 0;	
			var dis;
			
			for( sal in data.salles )
			{
				
				var salle = data.salles['sal'+i].salle;
				var salleid = data.salles['sal'+i].salleid;
				var newoption ='<option value="'+salleid+'" >'+salle+'</option>' ;
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
	



