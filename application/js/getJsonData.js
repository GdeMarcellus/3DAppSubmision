// JavaScript Document
$(document).ready(function(){

	 //AJAX service request to get the main text data from the json data store
	 $.getJSON('../application/model/data.json', function(jsonObj) {
		console.log(jsonObj);
		//Get the home page main text data
		$('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
		$('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
		$('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');
		
         //Get the home page 1 column text data
		$('#title_1').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
		$('#subTitle_1').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
		$('#description_1').html('<p>' + jsonObj.pageTextData[1].description + '</p>');
		$('#url_1').html('<a href="' + jsonObj.pageTextData[1].url + '" class="btn btn-primary btn-responsive">Find out more ...</a>');	
		
		//Get the home page 2 column text data
		$('#title_2').html('<h2>' + jsonObj.pageTextData[2].title + '<h2>');
		$('#subTitle_2').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
		$('#description_2').html('<p>' + jsonObj.pageTextData[2].description + '</p>');
		$('#url_2').html('<a href="' + jsonObj.pageTextData[2].url + '" class="btn btn-primary btn-responsive">Find out more ...</a>');		
		
		//Get the home page 4 column text data
		$('#title_3').html('<h2>' + jsonObj.pageTextData[3].title + '<h2>');
		$('#subTitle_3').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>');
		$('#description_3').html('<p>' + jsonObj.pageTextData[3].description + '</p>');
		$('#url_3').html('<a href="' + jsonObj.pageTextData[3].url + '" class="btn btn-primary btn-responsive">Find out more ...</a>');		
	  
		//Get the coke main text data
		
		//Get the gallery contents data
		$('.title_gallery').html('<h2>' + jsonObj.pageTextData[4].galleryTitle + '<h2>');
		$('.description_gallery').html('<p>' + jsonObj.pageTextData[4].galleryDescription + '</p>');

	 });
});








