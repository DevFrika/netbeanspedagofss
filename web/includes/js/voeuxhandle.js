var showingtime = 30000 ;
var hideloader = 10000;



	
	$(document).ready(function() {


	var redirecturl = 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie';
	var reloadtime = 1000 ;
	var cookietime = 24*60*60*1000;
	
	var days = 1;
	var usercookie = "iduser";
	
/*
	$('#addvoeux').on('show.bs.modal', function (e) {
	alert("Modal add voeux ouvert");
	 e.preventDefault();
     e.stopImmediatePropagation();
	$('#addvoeux').modal('hide');
})

*/


	$('#addvoeux').on('hidden.bs.modal', function (e) {
		var userid = $('input[name=addveuuserid]').val();
		CloseVeuModal(e,userid);
})





	//  ==================  Add Processing   ===================

				// process the form
	$('#addvoeuxform').submit(function(event) {
		 
		var addvoeux_url = $('input[name=addvoeux_url]').val();
		
		var nomfil = $( "#addveufilselect" ).val();
		var nomdep = $( "#addveudepselect" ).val();
		var nomcls = $( "#addveuclsselect" ).val();
		var nomgrp = $( "#addveugrpselect" ).val();
		var nomdis = $( "#addveudisselect" ).val();
		var nommat = $( "#addveumatselect" ).val();
		var nomens = $( "#addveuensselect" ).val();
		var nomnat = $( "#natselect" ).val();
		var periode = $( "#prdselect" ).val();
		var semestre = $( "#smtselect" ).val();
		var nomlieux = $( "#addveulieuxselect" ).val();
		var nomsal = $( "#addveusalselect" ).val();
		var nomjour = $( "#addveujourselect" ).val();
		var yearval = $( "#yearselect" ).val();
		var hdeb = $( "#addveuhdebselect" ).val();
		var mindeb = $( "#addveumindebselect" ).val();
		var hfin = $( "#addveuhfinselect" ).val();
		var minfin = $( "#addveuminfinselect" ).val();
		var tag = $('input[name=addveutag]').val();
		var userid = $('input[name=addveuuserid]').val();
	  // remove success messages and remove the past errors
	 $('#addvoeuxform .veu-form-group .messages-block').removeClass('alert alert-success').veuty();
	  $('#addvoeuxform .veu-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').veuty();
	  
		
		if(hdeb==hfin && mindeb==minfin)
		{
			alert("L'heure de debut et l'heure de fin sont les memes ");
		}
		else if(hdeb>hfin )
		{
			alert("L'heure de debut est superieure à l'heure de fin ");
		}
		else if( (hfin-hdeb)<1 && (minfin-mindeb)<15)
		{
			alert("La durée est inferieure à 1h15 mn ");
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
					  'semestre'				: semestre,
					  'periode'				: periode,
					  'nomlieux'			: nomlieux,
					  'nomsal'				: nomsal,
					  'nomjour'				: nomjour,
					  'yearval'				: yearval,
					  'hdeb'				: hdeb,
					  'mindeb'				: mindeb,
					  'hfin'				: hfin,
					  'minfin'				: minfin,
					  'tag'	: tag
				  };

				  // process the form
				  $.ajax({
					type        : 'POST',
					url         : addvoeux_url,
					data        : formData,
					dataType    : 'json',
					success     : function(data) {

					 
					
					  
				   
				   
					  // if validation fails
					  // add the error class to show a red input
					  // add the error message to the help block under the input
					  if ( ! data.success) {
						  
						  
						
						$('#addvoeuxform .veu-form-group .messages-block').addClass('alert alert-danger alert-dismissable').html(data.message);
						
						

					  } else {
						
						
						$('#addvoeuxform .veu-form-group .messages-block').addClass('alert alert-success alert-dismissable').html(data.message);
						
						//document.getElementById("addvoeuxform").reset();
						
						// if validation is good add success message
						//$('#addvoeux').modal('hide');
						
					  }
					  
					  
					setTimeout(function()
					{
						$('#addvoeuxform .veu-form-group .messages-block').removeClass('alert alert-success').veuty();
						$('#addvoeuxform .veu-form-group .messages-block').removeClass('alert alert-danger alert-dismissable').veuty();
						
						
					}, 5000);
												
					}
				  });

				  // stop the form from submitting and refreshing
	  
		}
	  event.preventDefault();
	  
	});
	
	
	

});

function OpenVeuModal(evt,userid)
{
	document.getElementById("loadertext").innerHTML = " <p> Chargement du Concepteur  </p> " ;
	document.getElementById("loadermodal").style.display = "block";
		
	var getmuturl= 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie/Mutex/Get';
	var addmuturl= 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie/Mutex/Add';

	  // get the form data
	  var formData = {
		  'typemutex'              : 'voeux',
		  'tag'					: 'getmutex'
	  };

	
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : getmuturl,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		 
		
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) 
		  {
			 
			alert("Le module voeux est entrain d'etre utilisé par "+data.username);
			document.getElementById("loadermodal").style.display = "none";
		  }
		  else 
		  {
				
				
				  // get the form data
				  var formData = {
					  'iduser'              : userid,
					  'typemutex'             : 'voeux',
					  'tag'					: 'addmutex'
				  };

				  // process the form  
				  $.ajax({
					type        : 'POST',
					url         : addmuturl, 
					data        : formData,
					dataType    : 'json',
					success     : function(data) 
					{

					  // if validation fails
					  if ( ! data.success) 
					  {
						alert("Le mutex n'as pas pu etre defini ");
						$('#addvoeux').modal('hide');
					  }
					  else
					  {
						document.getElementById("loadermodal").style.display = "none";
						$('#addvoeux').modal('show');
					  }
					  
					}
				  });
				  
		  }
		}
	  });

	  
	  evt.preventDefault();
	setTimeout(function()
	{
		document.getElementById("loadermodal").style.display = "none";
	}, 10000);

}

function CloseVeuModal(evt,userid)
{
	$('#addvoeux').modal('hide');
	
	
	var delmuturl= 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie/Mutex/Delete';

	  // get the form data
	  var formData = {
					  'iduser'              : userid,
					  'typemutex'           : 'voeux',
					  'tag'					: 'deletemutex'
				  };

	
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : delmuturl,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

		 
		 
		
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  if ( ! data.success) 
		  {
			  var redirection = 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie';
			setTimeout(function()
			{
				window.location=redirection;
			}, 1000);
					
		  }
		  else 
		  {
			
		  }
		}
	  });

	  
	  evt.preventDefault();
  
	
}

function deleteVoeux(evt, veuName,nomModal) {

	var delveuurl = $('input[name=delvoeux_url]').val();
	var redirecturl = 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie';
	var reloadtime = 1000 ;
	  // get the form data
	  var formData = {
		  'nomveu'              : veuName,
		  'tag'					: 'deleteveu'
	  };

	
		
	  // process the form  
	  $.ajax({
		type        : 'POST',
		url         : delveuurl, 
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
			 x = document.getElementsByClassName('fssveu'+veuName);
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


function updateVoeux(evt,formName) {
	
	// stop the form from submitting and refreshing
	  evt.preventDefault();
	  
	var fname = formName;  
	var updnomfil = $("form[name='"+fname+"']").find('input[name="updnomfiliere"]').val();
	var upddepfiliere = $("form[name='"+fname+"']").find('input[name="upddepfiliere"]').val();
	var oldfilname = $("form[name='"+fname+"']").find('input[name="oldfilname"]').val();
	var updfiltag = $("form[name='"+fname+"']").find('input[name="updfiltag"]').val();
	var updatefilierurl = $("form[name='"+fname+"']").find('input[name="updatefiliere_url"]').val();
		
		
	  // remove success messages and remove the past errors
	  $('#usermessages').removeClass('alert alert-success').veuty();
	  $('#usermessages').removeClass('alert alert-danger alert-dismissable').veuty();
	  
	   
	   
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


function veuLoadFiliere(depName,selectId)
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
		
			
			veuLoadClasse(data.filiere['fil0'].filiereid,'addveuclsselect');			
		
		  }
		  
			
	
			
		  
		}
	  });

	
	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}

function veuLoadClasse(filName,selectId)
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
			
			
			
			veuLoadGroupe(data.classes['cls0'].classeid,'addveugrpselect');
		  }
		  
			
	
			
		  
		}
	  });

	  
	
	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
	
}


function veuLoadGroupe(clsName,selectId)
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
			
			
			veuLoadDiscipline(data.groupes['grp0'].groupeid,'addveudisselect');
		  }
		  
			
				
			
	
		  
		}
		
	  });

	
	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}


function veuLoadDiscipline(grpName,selectId)
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
				
		
			
			veuLoadMatiere(data.disciplines['dis0'].disciplineid,'addveumatselect');
		  }
		  
	
			
	
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
}

function veuLoadMatiere(disName,selectId)
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
			
			
			veuLoadEnseignant(data.matieres['mat0'].matiereid,'addveuensselect');
		  
		  }
		  
		  
		
		}
	  });

	setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, hideloader);
	
	
}

function veuLoadEnseignant(matName,selectId)
{
	
	
		//veuLoadNature(matName,'addveunatselect');
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
			document.getElementById(selectId).innerHTML = "" ;
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

function veuLoadNature(matName,selectId)
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

	function veuLoadSalle(lixName,selectId)
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

	function LoadVeulFil(filId)
{
	document.getElementById("loadertext").innerHTML = " <p> Récuperation du voeux </p> " ;
	document.getElementById("loadermodal").style.display = "block";
		
		var getfilveu_url = 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie/Voeux/Filiere/Get';
		var nomfil = filId; 
		var tag = 'getfilveu';
		
	  // get the form data
	  var formData = {
		  'nomfil'              : nomfil,
		  'tag'					: tag
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : getfilveu_url,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  
		  
		  if ( ! data.success ) 
		  {
			 
				// if validation is bad add error message
				$('#loadermodal ').addClass('alert alert-danger alert-dismissable');
				
				document.getElementById("loadertext").innerHTML = "" ;
				document.getElementById("loadermodal").style.display = "none";
				
				alert('Aucun voeux du tveus trouvé ');
			
			
		  } 
		  else 
		  {
				document.getElementById("loadertext").innerHTML = "" ;
				document.getElementById("loadermodal").style.display = "none";
				$('#veutveulate .modal-body').html(data.contenu);
				$('#veutveulate').modal('show');	
		
		  }
		  
	
			
	
		}
	  });

	  setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, 10000);
}


function LoadVeuGrp(grpId)
{
	document.getElementById("loadertext").innerHTML = " <p> Récuperation du voeux </p> " ;
	document.getElementById("loadermodal").style.display = "block";
		
		var getgrpveu_url = 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie/Voeux/Groupe/Get';
		var nomgrp = grpId; 
		var tag = 'getgrpveu';
		
	  // get the form data
	  var formData = {
		  'nomgrp'              : nomgrp,
		  'tag'					: tag
	  };

	  // process the form
	  $.ajax({
		type        : 'POST',
		url         : getgrpveu_url,
		data        : formData,
		dataType    : 'json',
		success     : function(data) {

	   
		  // if validation fails
		  // add the error class to show a red input
		  // add the error message to the help block under the input
		  
		  
		  if ( ! data.success ) 
		  {
			 
				// if validation is bad add error message
				$('#loadermodal ').addClass('alert alert-danger alert-dismissable');
				
				document.getElementById("loadertext").innerHTML = "" ;
				document.getElementById("loadermodal").style.display = "none";
				
				alert('Aucun voeux du tveus trouvé ');
			
			
		  } 
		  else 
		  {
				document.getElementById("loadertext").innerHTML = "" ;
				document.getElementById("loadermodal").style.display = "none";
				$('#veutveulate .modal-body').html(data.contenu);
				$('#veutveulate').modal('show');	
		
		  }
		  
	
			
	
		}
	  });

	  setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, 10000);
}


function LoadVeuSal(salId)
{
	document.getElementById("loadertext").innerHTML = " <p> Récuperation du voeux </p> " ;
	document.getElementById("loadermodal").style.display = "block";
		
		var getdis_url = 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie/Voeux/Salle/Get';
		var nomsal = salId; 
		var tag = 'getsalveu';
		
	  // get the form data
	  var formData = {
		  'nomsal'              : nomsal,
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
				$('#loadermodal ').addClass('alert alert-danger alert-dismissable');
				
				document.getElementById("loadertext").innerHTML = "" ;
				document.getElementById("loadermodal").style.display = "none";
				
				alert('Aucun voeux du tveus trouvé ');
			
			
		  } 
		  else 
		  {
				document.getElementById("loadertext").innerHTML = "" ;
				document.getElementById("loadermodal").style.display = "none";
				$('#veutveulate .modal-body').html(data.contenu);
				$('#veutveulate').modal('show');	
		
		  }
		  
	
			
	
		}
	  });

	  setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, 10000);
}

function LoadVeuEns(ensId)
{
		document.getElementById("loadertext").innerHTML = " <p> Récuperation du voeux </p> " ;
		document.getElementById("loadermodal").style.display = "block";
		
		var getdis_url = 'http://localhost/netbeanspedagofss/web/app_veu.php/Pedagogie/Voeux/Enseignant/Get';
		var nomens = ensId; 
		var tag = 'getensveu';
		
	  // get the form data
	  var formData = {
		  'nomens'              : nomens,
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
				$('#loadermodal ').addClass('alert alert-danger alert-dismissable');
				
				document.getElementById("loadertext").innerHTML = "" ;
				document.getElementById("loadermodal").style.display = "none";
				
				alert('Aucun voeux du tveus trouvé ');
			
			
		  } 
		  else 
		  {
				document.getElementById("loadertext").innerHTML = "" ;
				document.getElementById("loadermodal").style.display = "none";
				$('#veutveulate .modal-body').html(data.contenu);
				$('#veutveulate').modal('show');	
		
		  }
		  
	
			
	
		}
	  });

	  setTimeout(function()
	{
		document.getElementById("loadertext").innerHTML = "" ;
		document.getElementById("loadermodal").style.display = "none";
		
	}, 10000);
}


