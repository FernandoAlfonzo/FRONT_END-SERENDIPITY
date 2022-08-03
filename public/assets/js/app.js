$(function() {
	"use strict";
	new PerfectScrollbar(".header-message-list"), new PerfectScrollbar(".header-notifications-list"), $(".mobile-search-icon").on("click", function() {
		$(".search-bar").addClass("full-search-bar")
	}), $(".search-close").on("click", function() {
		$(".search-bar").removeClass("full-search-bar")
	}), $(".mobile-toggle-menu").on("click", function() {
		$(".wrapper").addClass("toggled")
	}), $(".toggle-icon").click(function() {
		$(".wrapper").hasClass("toggled") ? ($(".wrapper").removeClass("toggled"), $(".sidebar-wrapper").unbind("hover")) : ($(".wrapper").addClass("toggled"), $(".sidebar-wrapper").hover(function() {
			$(".wrapper").addClass("sidebar-hovered")
		}, function() {
			$(".wrapper").removeClass("sidebar-hovered")
		}))
	}), $(document).ready(function() {
		$(window).on("scroll", function() {
			$(this).scrollTop() > 300 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
		}), $(".back-to-top").on("click", function() {
			return $("html, body").animate({
				scrollTop: 0
			}, 600), !1
		})
	}), $(function() {
		for (var e = window.location, o = $(".metismenu li a").filter(function() {
				return this.href == e
			}).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
	}), $(function() {
		$("#menu").metisMenu()
	}), $(".chat-toggle-btn").on("click", function() {
		$(".chat-wrapper").toggleClass("chat-toggled")
	}), $(".chat-toggle-btn-mobile").on("click", function() {
		$(".chat-wrapper").removeClass("chat-toggled")
	}), $(".email-toggle-btn").on("click", function() {
		$(".email-wrapper").toggleClass("email-toggled")
	}), $(".email-toggle-btn-mobile").on("click", function() {
		$(".email-wrapper").removeClass("email-toggled")
	}), $(".compose-mail-btn").on("click", function() {
		$(".compose-mail-popup").show()
	}), $(".compose-mail-close").on("click", function() {
		$(".compose-mail-popup").hide()
	}), $(".switcher-btn").on("click", function() {
		$(".switcher-wrapper").toggleClass("switcher-toggled")
	}), $(".close-switcher").on("click", function() {
		$(".switcher-wrapper").removeClass("switcher-toggled")
	}), $("#lightmode").on("click", function() {
		$("html").attr("class", "light-theme")
	}), $("#darkmode").on("click", function() {
		$("html").attr("class", "dark-theme")
	}), $("#semidark").on("click", function() {
		$("html").attr("class", "semi-dark")
	}), $("#minimaltheme").on("click", function() {
		$("html").attr("class", "minimal-theme")
	}), $("#headercolor1").on("click", function() {
		$("html").addClass("color-header headercolor1"), $("html").removeClass("headercolor2 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor2").on("click", function() {
		$("html").addClass("color-header headercolor2"), $("html").removeClass("headercolor1 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor3").on("click", function() {
		$("html").addClass("color-header headercolor3"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor4").on("click", function() {
		$("html").addClass("color-header headercolor4"), $("html").removeClass("headercolor1 headercolor2 headercolor3 headercolor5 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor5").on("click", function() {
		$("html").addClass("color-header headercolor5"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor3 headercolor6 headercolor7 headercolor8")
	}), $("#headercolor6").on("click", function() {
		$("html").addClass("color-header headercolor6"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor3 headercolor7 headercolor8")
	}), $("#headercolor7").on("click", function() {
		$("html").addClass("color-header headercolor7"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor3 headercolor8")
	}), $("#headercolor8").on("click", function() {
		$("html").addClass("color-header headercolor8"), $("html").removeClass("headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor3")
	})



   // sidebar colors 


    $('#sidebarcolor1').click(theme1);
    $('#sidebarcolor2').click(theme2);
    $('#sidebarcolor3').click(theme3);
    $('#sidebarcolor4').click(theme4);
    $('#sidebarcolor5').click(theme5);
    $('#sidebarcolor6').click(theme6);
    $('#sidebarcolor7').click(theme7);
    $('#sidebarcolor8').click(theme8);

    function theme1() {
      $('html').attr('class', 'color-sidebar sidebarcolor1');
    }

    function theme2() {
      $('html').attr('class', 'color-sidebar sidebarcolor2');
    }

    function theme3() {
      $('html').attr('class', 'color-sidebar sidebarcolor3');
    }

    function theme4() {
      $('html').attr('class', 'color-sidebar sidebarcolor4');
    }
	
	function theme5() {
      $('html').attr('class', 'color-sidebar sidebarcolor5');
    }
	
	function theme6() {
      $('html').attr('class', 'color-sidebar sidebarcolor6');
    }

    function theme7() {
      $('html').attr('class', 'color-sidebar sidebarcolor7');
    }

    function theme8() {
      $('html').attr('class', 'color-sidebar sidebarcolor8');
    }

	//script para validacion de archivos//

	$(document).on('change','input[type="file"]',function(){
		// this.files[0].size recupera el tamaño del archivo
		// alert(this.files[0].size);
		
		var fileName = this.files[0].name;
		var fileSize = this.files[0].size;
	
		if(fileSize > 3000000){
			alert('El archivo no debe superar los 3MB');
			this.value = '';
			this.files[0].name = '';
		}else{
			// recuperamos la extensión del archivo
			var ext = fileName.split('.').pop();
			
			// Convertimos en minúscula porque 
			// la extensión del archivo puede estar en mayúscula
			ext = ext.toLowerCase();
		
			// console.log(ext);
			switch (ext) {
				case 'jpg':
				case 'jpeg':
				case 'png':break;
				default:
					alert('El archivo no tiene la extensión adecuada');
					this.value = ''; // reset del valor
					this.files[0].name = '';
					
			}
		}
	});


var yesRadio = $('#yes'),
noRadio = $('#no');

yesRadio.click(function () {
  if($('#collapseOne').hasClass('in')) {
    return false;
  }
});

noRadio.click(function () {
  if(!$('#collapseOne').hasClass('in')) {
    return false;
  }
});


// SCRIPT PARA LOS METODOS DE PAGO

$('#pictureTarifa, #tarifaHorarios').collapse('hide'); 
$('input[name="radios"]').change( function() {
    if ($('#paymentTransfer').is(":checked")){
      $('#pictureTarifa').collapse('show');
    } else {
      $('#pictureTarifa').collapse('hide');
    } 
    if ($('#paymentCard').is(":checked")){
      $('#tarifaHorarios').collapse('show');
    } else {
      $('#tarifaHorarios').collapse('hide');
    }
	if ($('#paymentOxxo').is(":checked")){
		$('#oxxoTarifa').collapse('show');
	} else {
		$('#oxxoTarifa').collapse('hide');
	}
	if ($('#rfc').is('hide')){
		$('#datos').collapse('show');
	} else {
		$('#datos').collapse('hide');
	}
    if ($('#radio3').is(":checked")){
      $('#pictureTarifa').collapse('hide');
      $('#tarifaHorarios').collapse('hide');
    }
  });

  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});

// FIN SCRIPT PARA LOS METODOS DE PAGO
$('#picturerfc').collapse('hide');
$('input[name="radios"]').change( function() {
	if($('#rfcpicture').is(":checked")){
		$('#picturerfc').collapse('show');
	} else {
		$('#picturerfc').collapse('hide');
	}
});
// SCRIPT PARA RFC



// FIN SCRIPT PARA RFC

  document.getElementById("file").onchange = function(e) {
	// Creamos el objeto de la clase FileReader
	let reader = new FileReader();
  
	// Leemos el archivo subido y se lo pasamos a nuestro fileReader
	reader.readAsDataURL(e.target.files[0]);
  
	// Le decimos que cuando este listo ejecute el código interno
	reader.onload = function(){
	  let preview = document.getElementById('preview'),
			  image = document.createElement('img');

	document.width = 200;
	document.height = 200;
  
	  image.src = reader.result;
  
	  preview.innerHTML = '';
	  preview.append(image);
	  
	};
  }

  //VALIDACION PARA EL MODAL DE LOS ARCHIVOS

//   $().ready(function() {
//   $('[type="file"]').change(function() {
//     var fileInput = $(this);
//     if (fileInput.length && fileInput[0].files && fileInput[0].files.length) {
//       var url = window.URL || window.webkitURL;
//       var image = new Image();
//       image.onload = function() {
//         alert('Valid Image');
//       };
//       image.onerror = function() {
//         alert('Invalid image');
//       };
//       image.src = url.createObjectURL(fileInput[0].files[0]);
//     }
//   });
// });


// $('.openBtn').on('click',function(){
// 	console.log($("#DataCurp").val());
//     // $('.modal-body').load('',function(){
//     //     $('#exampleModal').modal({show:true});
//     // });
// });



}

);