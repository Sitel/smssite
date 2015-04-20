	function stripCharacter(words,character) {
	//documentation for this script at http://www.shawnolson.net/a/499/
	  var spaces = words.length;
	  for(var x = 1; x<spaces; ++x){
	   words = words.replace(character, "");   
	 }
	 return words;
    }
	
	function changecss(theClass,element,value) {
	//documentation for this script at http://www.shawnolson.net/a/503/
	 var cssRules;
	 if (document.all) {
	  cssRules = 'rules';
	 }
	 else if (document.getElementById) {
	  cssRules = 'cssRules';
	 }
	 for (var S = 0; S < document.styleSheets.length; S++){
	  for (var R = 0; R < document.styleSheets[S][cssRules].length; R++) {
	   if (document.styleSheets[S][cssRules][R].selectorText == theClass) {
	    document.styleSheets[S][cssRules][R].style[element] = value;
	   }
	  }
	 }	
	}
	
	function checkUncheckAll(theElement) {
     var theForm = theElement.form, z = 0;
	 for(z=0; z<theForm.length;z++){
      if(theForm[z].type == 'checkbox' && theForm[z].name != 'checkall'){
	  theForm[z].checked = theElement.checked;
	  }
     }
    }

	
	function changeImgSize(objectId,newWidth,newHeight) {
	  imgString = 'theImg = document.getElementById("'+objectId+'")';
	  eval(imgString);
	  oldWidth = theImg.width;
	  oldHeight = theImg.height;
	  if(newWidth>0){
	   theImg.width = newWidth;
	  } 
	  if(newHeight>0){
	   theImg.height = newHeight;
	  } 
	
	}
	
	function changeColor(theObj,newColor){
	  eval('var theObject = document.getElementById("'+theObj+'")');
	  if(theObject.style.backgroundColor==null){theBG='white';}else{theBG=theObject.style.backgroundColor;}
	  if(theObject.style.color==null){theColor='black';}else{theColor=theObject.style.color;}
	  //alert(theObject.style.color+' '+theObject.style.backgroundColor);
      switch(theColor){
	    case newColor:
		  switch(theBG){
			case 'white':
		      theObject.style.color = 'black';
		    break;
			case 'black':
			  theObject.style.color = 'white';
			  break;
			default:
			  theObject.style.color = 'black';
			  break;
		  }
		  break;
	    default:
		  theObject.style.color = newColor;
		  break;
	  }
	}