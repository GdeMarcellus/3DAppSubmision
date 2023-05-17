function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#fantaDescription').hide(); 
	$('#poweradeDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#fantaDescription').hide(); 
		$('#poweradeDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#fantaDescription').hide(); 
		$('#poweradeDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').show();
		$('#fantaDescription').hide(); 
		$('#poweradeDescription').hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_powerade").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_powerade").hide(); 
	});
}


function cokeDescription() {
		$("#cokeDescription").show();
        $("#fantaDescription").hide();
		$("#poweradeDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_powerade").hide();

		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_powerade").hide();
		
}

function fantaDescription() {

        $("#cokeDescription").hide();
        $("#fantaDescription").show();
		$("#poweradeDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_fanta").show();
		$("#x3dModelTitle_powerade").hide();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_fanta").show();
		$("#x3dCreationMethod_powerade").hide();
}

function poweradeDescription() {
        $("#cokeDescription").hide();
        $("#fantaDescription").hide();
		$("#poweradeDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_powerade").show();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_powerade").show();
}

function openNav() {
	document.getElementById("mySidenav").style.width = "400px";
  }
  
  /* Set the width of the side navigation to 0 */
  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
  } 

