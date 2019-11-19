
	        jQuery(function($) {

	            // adds padding to aux when xs/sm
	            function auxPad(){
	                var aux = $('.simcon .simcon-aux');
	                var main = $('.simcon-main');

	                if (isXs() || isSm()) {
	                    aux.css('padding-top',(main.outerHeight()) + 15 );
	                } else {
	                    aux.css('padding-top','');
	                }
	            }
	            // run on resize
	            $(window).on('resize', auxPad);
	            // initialize on document ready
	            auxPad();

	            //simcon 

	                //Scroll To

	                $('.node-type-configurator header ul.nav li a').on('click',function (e) {
	                    e.preventDefault();
	                    var target = this.hash;
	                    $target = $(target);

	                    if (isXs() || isSm()) {
	                        var displayImgH = $('.simcon-main').outerHeight();

	                        $('html, body').stop().animate({
	                            scrollTop: $target.offset().top - displayImgH - 10

	                        }, 600, 'swing', function () {
	                            //window.location.hash = target;
	                        });
	                    } else {
	                        $('html, body').stop().animate({
	                           scrollTop: $target.offset().top - 129
	                        }, 600, 'swing', function () {
	                            //window.location.hash = target;
	                        });
	                    }
	                });


	                //review links
	                $('.rl a').click(function() {
	                    var tID = $(this).attr('href');
	                    var pColl = $(tID).closest('.collapse');

	                    //open accordion
	                    if (!pColl.hasClass('in')) {
	                        pColl.collapse('show');
	                    }

	                    //scroll
	                    var target = this.hash;
	                    $target = $(target);

	                    if (isXs() || isSm()) {
	                        var displayImgH = $('.simcon-main').outerHeight();

	                        $('html, body').stop().animate({
	                            scrollTop: $target.offset().top - displayImgH - 48

	                        }, 600, 'swing', function () {
	                            //window.location.hash = target;
	                        });
	                    } else {
	                        $('html, body').stop().animate({
	                           scrollTop: $target.offset().top - 100
	                        }, 600, 'swing', function () {
	                            //window.location.hash = target;
	                        });
	                    }

	                });

	                //scroll changes display / indicators
	                $(window).on('scroll', function () {
	                    var indicators = $('header ul li a'); // nav at top
	                    var displayInners = $('.simcon-display-inner'); // main image on left
	                    var markers = $('[data-section-marker]'); // anchors being watched

	                    markers.each(function() {
	                        var marker = $(this);
	                        var position = marker.position().top - $(window).scrollTop();

	                        if (isXs() || isSm()) {
	                            if (position <= 550) {
	                                markers.removeClass('active');
	                                marker.addClass('active');
	                            } else {
	                                marker.removeClass('active');
	                            }
	                        } else {
	                            if (position <= 250) {
	                                markers.removeClass('active');
	                                marker.addClass('active');
	                            } else {
	                                marker.removeClass('active');
	                            }
	                        }
	                    });

	                    displayInners.add(indicators).removeClass('active');

	                    var markerID = markers.filter('.active').attr('id');

	                    indicators.filter($('[href="#' + markerID+ '"]')).addClass('active');
	                    displayInners.filter($('.simcon-display-inner--' + markerID)).addClass('active').attr('data-active', markerID);

	                    // if ($(window).scrollTop() + $(window).height() > $(document).height() - 129) {
	                    //     indicators.removeClass('active');
	                    //     indicators.filter($('[href="#share"]')).addClass('active');
	                    // }
	                });

	                //Actions for All Thumb Radios
	                var $allRadios = function () {
	                    var radio = $('.simcon .thumbs .radio');
	                    var radioInput = radio.find($('label > input'));
	                    var radioFirstLabel = radio.find($(':first-child > label'));

	                    //Add Indicators
	                    radioInput.after('<i class="fa fa-fw fa-circle-o"></i>');

	                    //Add Class to Radio Label Parent
	                    radioInput.each(function() {
	                        $(this).parent('label').addClass($(this).attr('value'));
	                    });

	                    //Check first radio
	                    radioFirstLabel.addClass('checked');
	                    radioFirstLabel.find('input').prop('checked',true);
	                }
	                $allRadios();


	                //Checkbox Replace
	                var $simconCheckboxReplace = function () {
	                    //input info
	                    if ($(this).is('input')){
	                        var input = $(this);
	                    } else {
	                        var input = $(this).find($('input'));
	                    }
	                    //info from Checkbox
	                    var val = input.attr('value');
	                    var nameStr = input.attr('name');
	                    var inputLabel = input.parent('label');
	                    var text = inputLabel.contents().not(inputLabel.children()).text().trim();

	                    //make name more useful
	                    var startPos = nameStr.indexOf('[') + 1;
	                    var endPos = nameStr.indexOf(']');
	                    var fieldKey = nameStr.substring(startPos,endPos);
	                    var fieldKeyHyphen = fieldKey.replace(/_/g, "-");

	                    var selected = $('input[name*="' + fieldKey + ']"]:checked');

	                    var $allSelected = selected.map(function() {
	                        var selectedVal = $(this).attr('value');
	                        var selectedLabel = $(this).parent('label');
	                        var selectedText = selectedLabel.contents().not(selectedLabel.children()).text().trim();
	                        return selectedText;
	                    }).get().join(', ');

	                    $('.simcon .qa--' + fieldKeyHyphen + ' ul li').html($allSelected);

	                    if ($('.simcon .qa--' + fieldKeyHyphen + ' ul li').text() == '') {
	                        $('.simcon .qa--' + fieldKeyHyphen + ' ul li').text('None Selected');
	                    }

	                }
	                $('.simcon .checkbox label input').focus($simconCheckboxReplace);
	                $('.simcon .checkbox label').click($simconCheckboxReplace).mouseover($simconCheckboxReplace);
	                $('.simcon .checkbox:first-child > label').mouseover();

	                //Radio Replace
	                var $simconRadioReplace = function () {

	                    //input info
	                    if ($(this).is('input')){
	                        var input = $(this);
	                    } else {
	                        var input = $(this).find($('input'));
	                    }

	                    //info from Radio
	                    var val = input.attr('value');
	                    var nameStr = input.attr('name');
	                    var inputLabel = input.parent('label');
	                    var text = inputLabel.contents().not(inputLabel.children()).text().trim();

	                    //make name more useful
	                    var startPos = nameStr.lastIndexOf('[') + 1;
	                    var endPos = nameStr.lastIndexOf(']');
	                    var fieldKey = nameStr.substring(startPos,endPos);
	                    var fieldKeyHyphen = fieldKey.replace(/_/g, "-");

	                    //selected input
	                    var selected = $('input[name="submitted[' + fieldKey + ']"]:checked');
	                    var selectedVal = selected.attr('value');
	                    var selectedLabel = selected.parent('label');
	                    var selectedText = selectedLabel.contents().not(selectedLabel.children()).text().trim();

	                    //update parent label to show selected
	                    function $selectedLabel(){
	                        input.closest($('.form-radios')).find($('label')).removeClass('checked');
	                        selectedLabel.addClass('checked');
	                    }

	                    //show either just selected or currently hovered over
	                    function $replaceSummary(){
	                        if ($('.simcon .var-summaries.var-summaries--' + fieldKeyHyphen).hasClass('var-summaries--extended')) {
	                            $('.simcon .var-summary.var-summary--' + fieldKeyHyphen).hide().filter('.var-summary--' + fieldKeyHyphen + '--' + val).show();
	                        } else {
	                            $('.simcon .var-summaries.var-summaries--' + fieldKeyHyphen).html('<div class="body">' + text + '<\/div>');
	                        }
	                    }

	                    function $replaceReview(){
	                        $('.simcon .qa--' + fieldKeyHyphen + ' ul li').html(selectedText);
	                    }

	                    //run
	                    $selectedLabel();
	                    $replaceSummary();
	                    $replaceReview();

	                    //run again on mouseleave, now only selected should be active
	                    $(this).mouseleave(function () {
	                        val = selectedVal;
	                        text = selectedText;
	                        $selectedLabel();
	                        $replaceSummary();
	                        $replaceReview();
	                    });

	                    //Display Replace
	                    if ($(this).closest('.section-mx_planned_use, .section-environment, .section-components, .section-add-ons').length > 0) {
	                       //img info

	                        var img = $('.simcon .simcon-display-inner img');

	                        if ($(this).closest('.section-environment').length > 0) {
	                            var imgTarget = img.filter('.var-image--environment'); //display image
	                            var imgTSrc = imgTarget.attr('src'); //src of that display image
	                            var n = imgTSrc.lastIndexOf('/');
	                            var afterSlash = imgTSrc.substring(n + 1); //text after slash in src of display image

	                            var collapseID = $(this).closest('.panel-collapse').attr('id');
	                            var num = collapseID.indexOf('-');
	                            var afterDash = collapseID.substring(num + 1);

	                            imgTSrc = imgTSrc.replace(afterSlash, (afterDash + '.png'));
	                            imgTarget.attr('src',imgTSrc);
	                        }
	                        if ($(this).closest('.section-components .webform-component-radios:not(.webform-component--software), .section-environment .webform-component--space-use, .section-environment .webform-component--wall-construction, .section-environment .webform-component--floor-type, .section-environment .webform-component--ceiling-type, .section-add-ons').length > 0) {
	                            var imgTarget = img.filter('.var-image--' + fieldKeyHyphen); //display image to change
	                            var imgTSrc = imgTarget.attr('src'); //src of that display image
	                            var n = imgTSrc.lastIndexOf('/');
	                            var afterSlash = imgTSrc.substring(n + 1); //text after slash in src of display image

	                            $(this).click(function() {
	                                imgTarget.addClass('on');
	                            });
	                            img.each(function() {
	                                $(this).removeClass('on');
	                            });
	                            
	                            imgTSrc = imgTSrc.replace(afterSlash, selectedVal + '.png');
	                            imgTarget.attr('src',imgTSrc + '?v=2');
	                        }
	                    }
	                }
	                $('.simcon .radio label input').focus($simconRadioReplace);
	                $('.simcon .radio label').click($simconRadioReplace).mouseover($simconRadioReplace);
	                $('.simcon .radio:first-child > label').mouseover(); //activate first radio of each radio group
	                $('.simcon .webform-component--status .radio:first-child > label').mouseover(); //activate first radio in first radio group

	                // Hitting Screen > Net Return selection auto selects Projector radio
	                // Hide Projector > Not App as using net
	                $('.simcon .radio [value="notapp_net"]').closest('.radio').css('display','none');
	                // when Hitting screen radio clicked
	                $('.simcon .webform-component--screen .radio label').on('click', function(){
	                   // if Net Return clicked
	                   if ($(this).hasClass('net_return')) {
	                       // hide all Projector radios, then activate Projector > Not Applicable as using a net return
	                       $('.simcon .radio [value="notapp_net"]').closest('.radio').siblings().css('display','none');
	                       $('.simcon .radio [value="notapp_net"]').closest('.radio').css('display','inline-block').find('input').prop('checked', true).closest('label').mouseover();
	                       $(this).mouseover();
	                       $('.simcon img.var-image--screen-based').each(function() {
	                           var hittingScreenSrc = $(this).attr('src').replace('display/standard/','display/hitting-screen/');
	                           $(this).attr('src',hittingScreenSrc);
	                       });
	                   } else {
	                       $('.simcon .radio [value="notapp_net"]').closest('.radio').siblings().css('display','block').filter(':first-child').find('input').prop('checked', true).closest('label').mouseover();
	                       $('.simcon .webform-component--projector .radio [value="notapp_net"]').closest('.radio').siblings().css('display','inline-block');
	                       $('.simcon .radio [value="notapp_net"]').closest('.radio').css('display','none');

	                       $(this).mouseover();
	                       $('.simcon img.var-image--screen-based').each(function() {
	                           var hittingScreenSrc = $(this).attr('src').replace('display/hitting-screen/','display/standard/');
	                           $(this).attr('src',hittingScreenSrc);
	                       });
	                   }
	                });

	            $('#webform-client-form-1211').submit(function() {
	              $('button[type="submit"]').addClass('throbber disabled').prop('disabled',true);
	            });

	            // 
	            $( 'a.d-block' ).on( 'click', function( e ) {

	            	e.preventDefault();

	            	$( this ).toggleClass( 'collapsed' );

	            	var _href = $( this ).attr( 'href' );

	            	$( _href ).slideToggle();

	            } );

	            // 
	            $( '.mx-normal-radio-button-check' ).find( 'input' ).on( 'click', function() {

	            	var _value = $( this ).val();

	            	var _name = $( this ).attr( 'name' );

	            	$( '#' + _name + '-show' ).text( _value );

	            	// console.log( _name );

	            } );

	            // 
	            var no_selected_input = true;
	            $( '.mx-normal-radio-button-checkbox' ).find( 'input' ).on( 'click', function() {

	            	$( '#mx-question11-checkbox-area' ).empty();

	            	no_selected_input = true;

	            	$( '.mx-normal-radio-button-checkbox' ).find( 'input' ).each( function() {    		

	            		if( $( this ).is(':checked') ) {

	            			var _value = $( this ).val();

	            			$( '#mx-question11-checkbox-area' ).append( '<li>' + _value + '</li>' );

	            			no_selected_input = false;

	            		}

	            	} );

	            	if( no_selected_input ) {

	            		$( '#mx-question11-checkbox-area' ).append( '<li>None Selected</li>' );

	            	}

	            } )

	        });
