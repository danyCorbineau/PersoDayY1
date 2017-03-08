// Scrollspy fluide nav bar
      $(function () {
        $('header a').on('click', function(e) {
          e.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(this.hash).offset().top
          }, 1000, function(){
            window.location.hash = hash;
          });
        });
      });
	  
	 
	  
	  function changeBloc(divis)
	  {
		$('html, body').animate({
					scrollTop: divis.offsetTop
					}, 500
				);
	  }
	  
	  function nextButton()
	  {
		  if(testElemEcran(document.getElementById("carousel")))
			changeBloc(document.getElementById("accueil"));
		  else if(testElemEcran(document.getElementById("accueil")))
				changeBloc(document.getElementById("les_types_de_bijoux"));
		  else if(testElemEcran(document.getElementById("les_types_de_bijoux")))
				changeBloc(document.getElementById("les_métaux"));
		  else if(testElemEcran(document.getElementById("les_métaux")))
				changeBloc(document.getElementById("les_pierres"));
		  else if(testElemEcran(document.getElementById("les_pierres")))
				changeBloc(document.getElementById("les_serties"));
		  else if(testElemEcran(document.getElementById("les_serties")))
				changeBloc(document.getElementById("contact"));
	  }
	  
	  function testElemEcran(el) {
		  var elemY = el.offsetTop;
		  var elemH = el.offsetHeight;
		  var windowY = window.pageYOffset;
		  var windowH = window.innerHeight;
		  /*while(el.offsetParent) {
			el = el.offsetParent;
			top += el.offsetTop;
			left += el.offsetLeft;
		  }*/
		  return (
			elemH+elemY>windowY && elemY<windowY+windowH
		  );
		}
		
	function changeSerti(idElem)
	{
		var e=document.getElementById(idElem);
		
		var sert=[document.getElementById("divSerti_griffes"), document.getElementById("divSerti_clos"), document.getElementById("divSerti_demi_clos"), 
		document.getElementById("divSerti_masse"), document.getElementById("divSerti_grains"), document.getElementById("divSerti_rail"), document.getElementById("divSerti_descendu")];
		
		
		
		var j=0;
		for(j=0;j<7;j++)
		{
			sert[j].style.display="none";
		}
		e.style.display = "block";
	}
	
	function rest()
	{
		var sert=[document.getElementById("divSerti_griffes"), document.getElementById("divSerti_clos"), document.getElementById("divSerti_demi_clos"), 
		document.getElementById("divSerti_masse"), document.getElementById("divSerti_grains"), document.getElementById("divSerti_rail"), document.getElementById("divSerti_descendu")];
		for(j=0;j<7;j++)
		{
			sert[j].style.display = "none";
		}
		sert[j].style.display="block";
	}
	
	window.addEventListener("load", function(event) {
		changeSerti('divSerti_griffes');
	});
	
	
