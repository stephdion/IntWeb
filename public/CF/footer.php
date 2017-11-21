

	<script src="/cnesst/js/jquery.min.js"></script>
	<script src="/cnesst/js/dp/bootstrap-datepicker.min.js"></script>
	<script src="/cnesst/js/dp/bootstrap-datepicker.fr.min.js"></script>
	<script src="/cnesst/js/jquery.qtip.min.js"></script>

	<script>
		$(document).ready(function() {

			$('body').on('focus',".datepicker", function(){

			    if( $(this).hasClass('hasDatepicker') === false )  {
			        $(this).addClass('hasDatepicker').datepicker({
						format: "yyyy-mm-dd",
		    			language: 'fr'
					});
			    }

			});

			$('body').on('change', '[type="file"]', function() {

		        var filename = $(this).val();
		        var $file = $(this).parents('.file');

		        if (filename.length == 0){
		        	$file.removeClass('active');
		        }else{
		        	$file.addClass('active');
		        }
		        $file.find('.detail span').html(filename);

		    }).on('click', function(event) {
		    	event.stopPropagation();
		    });;


			$('body').on('click', '.file .file-btn', function(event) {
				event.preventDefault();
		        var $file = $(this).parents('.file');

				$file.find('[type="file"]').trigger('click');

			});

			$('body').on('click', '.file .btn-remove', function(event) {
				event.preventDefault();

				$(this).parents('.file').removeClass('active').find('[type="file"]').val(''); 

			});


			$('.multiblocks').on('click', '.sub-block a.btn-delete', function(event) {
				event.preventDefault();
				var $multiblocks = $(this).parents('.multiblocks').eq(0);

				$(this).parents('.sub-block').eq(0).remove();

				$multiblocks.find('> .sub-block').each(function(index, el) {
					$(this).find('> .header span.number').text(index+1);
				});
			});

			var cont = 10;

			$('body').on('click', 'a.btn-add', function(event) {
				event.preventDefault();


				var $block = $(this).data('block');

				if  ( typeof $block === "undefined" || $block == null ){
					$block = $('.block-example');
				}else{
					$block = $($block);
				}

				var html = $block.html();

				console.log(html);

				html_r = html.split('_N_').join(cont++);

				$(this).parent().prev('.multiblocks').append(html_r).find('> .sub-block').each(function(index, el) {
					$(this).find('> .header span.number').text(index+1);
				});
			});


		    $("body").on('keydown', '.amount', function (e) {
		        // Allow: backspace, delete, tab, escape, enter and .
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		             // Allow: Ctrl/cmd+A
		            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
		             // Allow: Ctrl/cmd+C
		            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
		             // Allow: Ctrl/cmd+X
		            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
		             // Allow: home, end, left, right
		            (e.keyCode >= 35 && e.keyCode <= 39)) {
		                 // let it happen, don't do anything
		                 return;
		        }
		        // Ensure that it is a number and stop the keypress
		        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		            e.preventDefault();
		        }
		    });


		    $('[title!=""]').qtip({
		    	content: {
		    		button: true
		    	},
			    show: {
			        event: 'click',

			    },
			    hide: {
			        event: 'click'
			    }
		    });

			$('.hasTooltip').each(function() { // Notice the .each() loop, discussed below
			    $(this).qtip({
			    	content: {
			    		button: true,
			            text: $(this).next('div').html() // Use the "div" element next to this for the content
			    	},
				    show: {
				        event: 'click',

				    },
				    hide: {
				        event: 'click'
				    }
			    });
			});	


		    $('body').on('click', '[data-hide]', function(event) {
		    	event.stopPropagation();

		    	$($(this).data('hide')).addClass('hide');

		    	// $($(this).data('hide')).find('input[type="radio"]').prop('checked', false);
		    	$($(this).data('hide')).each(function(index, el) {
		    		// $(el).find('input[type="radio"]').eq(0).trigger('click');
		    		$(el).find('input[type="radio"]').prop('checked', false);
		    		$(el).find('input[type="checkbox"]').prop('checked', false);
		    	});
		    });

		    $('body').on('click', '[data-show]', function(event) {
		    	event.stopPropagation();

		    	if ( typeof $(this).prop('checked') === 'undefined' || $(this).prop('checked') )
		    		$($(this).data('show')).removeClass('hide');
		    });

		    $('[data-characters!=""]').keyup(function(){
		        var text = $(this).val();
		        var maxlength = $(this).data('characters');

		        if(maxlength > 0) {
		                $(this).val(text.substr(0, maxlength)); 
		        }
			});

		});
	</script>

</body>
</html>