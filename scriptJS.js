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
	
	/*
		Change de "partie" de façon fluide
	*/
	function changeBloc(divis)
	{
		var gli=divis.offsetTop-$('#navid').height();
		$('html,body').animate({
			scrollTop: gli
			}, 500
		);
	}
	
	/*
		test les élements 1 à 1 et si il est a l'écran passer au suivent
	*/
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
	
	/*
		test si l'élément est à l'écran
	*/
	function testElemEcran(el) {
		//alert($('#navid').height());
		var elemY = el.offsetTop-($('#navid').height()+5);
		var elemH = el.offsetHeight;
		var windowY = window.pageYOffset;
		var windowH = window.innerHeight;
		return (
			elemH+elemY>windowY && elemY<windowY+windowH
		);
	}
	
	/*
		si on clic sur un bouton de sertie on change
	*/
	function changeSerti(idElem)
	{
		var e=document.getElementById(idElem);
		var j=0;
		var sert=[document.getElementById("divSerti_griffes"), document.getElementById("divSerti_clos"), document.getElementById("divSerti_demi_clos"), 
		document.getElementById("divSerti_masse"), document.getElementById("divSerti_grains"), document.getElementById("divSerti_rail"), document.getElementById("divSerti_descendu")];
		
		for(j=0;j<7;j++)
			sert[j].style.display="none";
		
		e.style.display = "block";
	}
	
	/*
		Cache les serties sauf le 1er
	*/
	function rest()
	{
		var sert=[document.getElementById("divSerti_griffes"), document.getElementById("divSerti_clos"), document.getElementById("divSerti_demi_clos"), 
		document.getElementById("divSerti_masse"), document.getElementById("divSerti_grains"), document.getElementById("divSerti_rail"), document.getElementById("divSerti_descendu")];
		for(j=0;j<7;j++)
		{
			sert[j].style.display = "none";
		}
		sert[0].style.display="block";
	}
	
	/*
		Charge les serties: caché ou non
	*/
	window.addEventListener("load", function(event) {
		changeSerti('divSerti_griffes');
	});
	
	
