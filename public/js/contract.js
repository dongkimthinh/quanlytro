
// $(document).ready(function(){
// 	$(window).scroll(function () {
// 			if ($(this).scrollTop() > 50) {
// 				$('#back-to-top').fadeIn();
// 			} else {
// 				$('#back-to-top').fadeOut();
// 			}
// 		});
// 		// scroll body to 0px on click
// 		$('#back-to-top').click(function () {
// 			$('body,html').animate({
// 				scrollTop: 0
// 			}, 400);
// 			return false;
// 		});
// });
// $(".custom-file-input").on("change", function() {
//     var fileName = $(this).val().split("\\").pop();
//     $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
//   });
//   (function() {
//     'use strict';
//     window.addEventListener('load', function() {
//       // Fetch all the forms we want to apply custom Bootstrap validation styles to
//       var forms = document.getElementsByClassName('needs-validation');
//       // Loop over them and prevent submission
//       var validation = Array.prototype.filter.call(forms, function(form) {
//         form.addEventListener('submit', function(event) {
//           if (form.checkValidity() === false) {
//             event.preventDefault();
//             event.stopPropagation();
//           }
//           form.classList.add('was-validated');
//         }, false);
//       });
//     }, false);
//   })();

$('.nav-tabs a').click(function(){
    $(this).tab('show');
  })

  // Select tab by name
  $('.nav-tabs a[href="#home"]').tab('show')

  // Select first tab
  $('.nav-tabs a:first').tab('show')

  // Select last tab
  $('.nav-tabs a:last').tab('show')

  // Select fourth tab (zero-based)
  $('.nav-tabs li:eq(3) a').tab('show')

            $(document).ready(function(){
            $(".mul-select").select2({
                    placeholder: "Chọn trang thiết bị", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "]
                });
            })
            $(document).ready(function() {
                $('.category').select2();
            });

            $('body').on('click','.store-data',function (e) {
                e.preventDefault();

                //Get Value
                // var selected = $('.category').select2("val");
                var selected = $('.category').val();
                console.log(selected);
            });
            // $(document).ready(function() {
            //     $('#load-du-lieu').click(function(e) {
            //         e.preventDefault();
            //         $.ajax({
            //             url: 'http://localhost:8080/quanlytro/type-roomss/1',
            //             type: 'POST',
            //             dataType: 'html',
            //             // data: {
            //             //     a: "content abc",
            //             //     b: "content bcd"
            //             // }
            //         }).done(function(ketqua) {
            //             $('#ajax').html(ketqua);
            //         });

            //     });
            // });
            $(document).ready( function() {
                $("canvas.flare").let_it_snow({
                windPower: 0,
                speed: 0,
                color: "#392F52",
                size:120,
                opacity: 0.00000001,
                count: 40,
                interaction: false
                });

                $("canvas.snow").let_it_snow({
                windPower: 4,
                speed: 1,
                count: 250,
                size: 0
                });

                $(".snowWindPower").on("change", function () {
                $("canvas.snow").trigger("letItSnow", ["windPower", parseInt($(this).val())]);
                });   }
                );
                (function(){

                    $("#cart").on("click", function() {
                      $(".shopping-cart").fadeToggle( "fast");
                    });

                  })();
