<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
class MXVFOS_Shortcode
{
	/*
	* MXPCTYW_Shortcode
	*/
	public function __construct()
	{
	}
	/*
	* Create shortcode
	*/
	public static function create_shortcode()
	{

		add_shortcode( 'mxvfos_visual_form_of_submission', function() {

			ob_start(); ?>

			<link rel="stylesheet" href="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/font-awesome-4.6.3/css/font-awesome.min.css" />

			<link rel="stylesheet" href="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/css/style.css?v=<?php echo time(); ?>" />

<!-- success -->
<div class="main-container mx-main-container-success" style="display: none;">

	<link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
   
	<section class=" container">
                            
            <h1 class="page-header">We're on the job.</h1>
                                    
                                <div class="alert alert-block alert-dismissible alert-success messages status">
  <a class="close" data-dismiss="alert" href="/visual-form/">×</a>
<div class="text-center">
<h3 class="d-inline-block text-center m0 thanks-simcon">Success! <span>The form was submitted successfully.</span></h3>
</div>
</div>
                                                                                                      <div class="region region-content">
    <section id="block-system-main" class="block block-system clearfix">

      
  <article id="node-1216" class="node node-page clearfix" about="/visual-form/" typeof="foaf:Document">
    <header>
            <span property="dc:title" content="We're on the job." class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>      </header>
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><p class="lead mb24">Thank you for sharing your dream simulator with us. Our team will be reviewing your project details as soon as possible, and a representative will be in contact to discuss next steps and ensure we do everything possible to meet your unique needs, budget, and time&nbsp;frame.</p>

<p class="mb8">Should you need anything in the meantime, please feel free to contact us via email at <a href="mailto:sales@foresightsports.com">sales@foresightsports.com</a> or by phone at <a href="tel:8588800179">858-880-0179</a>.</p>

<p>If you would like to return to the form, please follow the link&nbsp;below.</p>

<div><a class="btn btn-primary btn-sm" href="/visual-form/">Back to Form</a></div>
</div></div></div>    </article>

</section>
  </div>
            </section>

        </div>
<!-- success -->


	<div class="node-type-configurator">

		<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
		</div>
		<div id="marker-xs"></div>
		<div id="marker-sm"></div>
		<div id="marker-md"></div>
		<div id="marker-lg"></div>
		<header>
		    <div class="container-fluid">
		        <div class="header-inner">
		            <ul class="list-inline nav">
		                <li><a href="#mx_planned_use" class="active"><span class="small">1.</span> Planned Use</a></li>
		                <li><a href="#environment"><span class="small">2.</span> Environment</a></li>
		                <li><a href="#components"><span class="small">3.</span> Components</a></li>
		                <li><a href="#add-ons"><span class="small">4.</span> Options</a></li>
						<li><a href="#add-technologies"><span class="small">5.</span> Additional Technology</a></li>
		                <li><a href="#review"><span class="small">6.</span> Review</a></li>
		                <li><a href="#share"><span class="small">7.</span> Share</a></li>
		            </ul>
		            <div class="logo">
		                <a href="/">
		                    <img src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/logo-gen2.png" alt="Foresight Sports">
		                </a>
		            </div>
		        </div>
		    </div>
		</header>

		<!--  -->
		<div class="simcon">
	      <div class="region region-content">
	    <section id="block-system-main" class="block block-system clearfix">

	      
	  <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><div><section id="block-webform-client-block-1211" class="block block-webform clearfix">

	      
	  <form class="webform-client-form webform-client-form-1211 webform-conditional-processed" action="" method="post" id="mx_simulation_configurator_request"><div>


	<div class="container-fluid simcon-body">
	    <div class="row">
	        <div class="col-md-8 simcon-main">
	            <h1 class="h2">Simulation Configurator</h1>
	            <div class="simcon-display">

	            	<div class="simcon-display-inner simcon-display-inner--environment simcon-display-inner--mx_planned_use active" data-active="environment">
	                    <div class="var-image-wrap">
	                        <img class="var-image var-image--environment" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/getting-started.png" alt="Setting Up Your Environment">
	                    </div>
	                </div>

	                <div class="simcon-display-inner simcon-display-inner--components simcon-display-inner--add-technologies simcon-display-inner--review simcon-display-inner--share simcon-display-inner--add-ons" data-active="share">
	                    <div class="var-image-wrap">

	                        <img class="base-image base-image--base" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/blank.png" alt="Simulation Configurator Base">

	                        <img class="var-image var-image--screen-based var-image--floor-type" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/carpet_padding.png" alt="Floor Type">
	                        <img class="var-image var-image--screen-based var-image--ceiling-type" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/drywall.png" alt="Ceiling Type"> 
	                        <img class="var-image var-image--screen-based var-image--wall-construction" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/stud_drywall.png" alt="Wall Construction">

	                        <img class="var-image var-image--screen" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/flat.png" alt="Screen">

	                        <img class="var-image var-image--projector" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/standard.png" alt="Projector">

	                        <img class="base-image base-image--hitting-mat" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/hitting-mat.png" alt="Hitting Mat">

	                        <img class="var-image var-image--computer" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/desktop.png" alt="Computer">
	                        <img class="var-image var-image--space-use" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/sim_only.png" alt="Space Use">
	                        <img class="var-image var-image--launch-monitor" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/gcquad.png" alt="Launch Monitor">
	                        
	                        <img class="base-image var-image--screen-based base-image--add-on" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/base.png">

	                        <img class="var-image var-image--add-on var-image--sidewall-finish" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/none.png" alt="Sidewall Finish">
	                        <img class="var-image var-image--add-on var-image--ceiling-finish" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/none.png" alt="Ceiling Finish">
	                        <img class="var-image var-image--add-on var-image--hitting-mat" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/none.png" alt="Hitting Mat">
	                        <img class="var-image var-image--add-on var-image--computer-cabinet" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/none.png" alt="Computer Cabinet">

	                    </div>
	                </div>
	                <!-- <div class="simcon-display-inner simcon-display-inner--add-ons">
	                    <div class="var-image-wrap">
	                        <img src="https://foresightsports.com/sites/default/files/images/simcon/display/add-ons/add-ons.png" alt="Add-on Options for your Simulator">
	                    </div>
	                </div> -->
	            </div>
	            <br>
	            <div class="simcon-main-footer">This is a depiction of a standard setup with the specifics and add-ons you've selected. Like what you see? Our professionals will render your exact simulator once you've discussed your specific needs with a sales representative.</div>
	        </div>
	        <div class="col-md-4 col-md-offset-8 simcon-aux">
	            <div class="simcon-select">
	                
                    <!-- planned use ... -->
                    <section class="section-mx_planned_use mx-normal-radio-button-check">
                        <a id="mx_planned_use" data-section-marker="" class="active"></a>

                        <p style="font-size: 17px;">Our Performance Simulation solutions are designed with your personal specifications in mind. With our easy online app, you’ll learn the basic space requirements and components needed to start designing your own Performance Simulation solution. Along the way, we’ll help you build your personal wish list of components to make the process of realising your dream golf simulator even faster and easier.</p>
                        <h2 class="section-title"><span class="small">1.</span> Planned Use</h2>
                        <div class="section-summary">
                        </div>
                        <div class="panel-group accordion--b" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div id="collapse-getting-started" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                        <a id="mx-edit-question1"></a>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Before we get into the specifics of your simulator, can you tell us a little about how you plan to use the technology? <br>
											Please select from the options below that best describe your planned use of the simulator.
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="edit-submitted-status" class="mx-normal-radio-button">

													<div>
														<label for="edit-submitted-status-1">
															
															<input  type="radio" id="edit-submitted-status-1" name="edit-submitted-status" value="I&apos;m looking for a simulator for personal use, and with family and friends" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															I&apos;m looking for a simulator for personal use, and with family and friends
														</label>
													</div>

													<div>
														<label for="edit-submitted-status-2">
															
															<input  type="radio" id="edit-submitted-status-2" name="edit-submitted-status" value="I’m looking for a simulator for use within a business environment" />
															<i class="fa fa-fw fa-circle-o"></i>
															I’m looking for a simulator for use within a business environment
														</label>
													</div>

												</div>

											</div>
										</div>

                                        <a id="mx-edit-question2"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Please select from below the option that best describes how the simulator will be used once installed.
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question2" class="mx-normal-radio-button">

													<div>
														<label for="mx-question2_1">
															
															<input  type="radio" id="mx-question2_1" name="mx-question2" value="Private Home Entertainment" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															Private Home Entertainment
														</label>
													</div>

													<div>
														<label for="mx-question2_2">
															
															<input  type="radio" id="mx-question2_2" name="mx-question2" value="Golf Club" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Golf Club
														</label>
													</div>

													<div>
														<label for="mx-question2_3">
															
															<input  type="radio" id="mx-question2_3" name="mx-question2" value="Teaching Academy" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Teaching Academy
														</label>
													</div>

													<div>
														<label for="mx-question2_4">
															
															<input  type="radio" id="mx-question2_4" name="mx-question2" value="Club Fitting" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Club Fitting
														</label>
													</div>

													<div>
														<label for="mx-question2_5">
															
															<input  type="radio" id="mx-question2_5" name="mx-question2" value="Indoor Golf Centre" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Indoor Golf Centre
														</label>
													</div>

													<div>
														<label for="mx-question2_6">
															
															<input  type="radio" id="mx-question2_6" name="mx-question2" value="Corporate/Office Space" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Corporate/Office Space
														</label>
													</div>

													<div>
														<label for="mx-question2_7">
															
															<input  type="radio" id="mx-question2_7" name="mx-question2" value="Gym/Health Club/Other Sports" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Gym/Health Club/Other Sports 
														</label>
													</div>

													<p>
														Why is this important? Understanding how you plan to use the space helps us determine the best components (such as wall construction or flooring) for ensuring safety, function, and aesthetics.
													</p>

												</div>

											</div>
										</div>

										<a id="mx-edit-question3"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Do you currently have a golf simulator?
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question3" class="mx-normal-radio-button">

													<div>
														<label for="mx-question3_1">
															
															<input  type="radio" id="mx-question3_1" name="mx-question3" value="No" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															No
														</label>
													</div>

													<div>
														<label for="mx-question3_2">
															
															<input  type="radio" id="mx-question3_2" name="mx-question3" value="Yes, but I want to completely replace it" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															Yes, but I want to completely replace it
														</label>
													</div>

													<div>
														<label for="mx-question3_3">
															
															<input  type="radio" id="mx-question3_3" name="mx-question3" value="Yes, but I want to upgrade the technology" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															Yes, but I want to upgrade the technology
														</label>
													</div>

												</div>

											</div>
										</div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- ... planned use -->

                    <!-- environment ... -->
                    <section class="section-environment">
                        <a id="environment" data-section-marker="" class=""></a>
                        <h2 class="section-title"><span class="small">2.</span> Environment</h2>
                        <div class="section-summary">
                        </div>
                        <div class="panel-group accordion--b" role="tablist" aria-multiselectable="true">
                            
							<!--  -->
                            <div class="panel mx-normal-radio-button-check">
                                <div class="panel-heading" role="tab" id="heading-getting-started2">
                                    <h4 class="panel-title">
                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-componentsx" href="#collapse-getting-started2" aria-expanded="true" aria-controls="collapse-getting-started">
                                            Getting Started
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-getting-started2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                        <a id="q-status"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Please select from below the option that best describes the environment into which you're planning to locate your simulator.
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question4" class="mx-normal-radio-button">

													<div>
														<label for="mx-question4_1">
															
															<input  type="radio" id="mx-question4_1" name="mx-question4" value="I&apos;m planning to use a room/area in an existing building" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															I&apos;m planning to use a room/area in an existing building
														</label>
													</div>

													<div>
														<label for="mx-question4_2">
															
															<input  type="radio" id="mx-question4_2" name="mx-question4" value="I’m designing a room/area in a building now being constructed" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															I’m designing a room/area in a building now being constructed
														</label>
													</div>

													<div>
														<label for="mx-question4_3">
															
															<input  type="radio" id="mx-question4_3" name="mx-question4" value="I’m planning to construct a new building and am still in the design phase" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															I’m planning to construct a new building and am still in the design phase
														</label>
													</div>

												</div>

											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->

                            <!--  -->
                            <div class="panel mx-normal-radio-button-check">
                                <div class="panel-heading" role="tab" id="heading-getting-started3">
                                    <h4 class="panel-title">
                                        <a class="d-block" role="button" href="#collapse-getting-started3" aria-expanded="true" aria-controls="collapse-getting-started">
                                            Space
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-getting-started3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                    	<p>
                                    		Let’s make sure there’s enough space for your Performance Simulator. For safety, you need to be able to safely swing a golf club in the room or area you intend to house the simulator. Here’s our recommended safety dimensions:
                                    	</p>
                                    	<p>
                                    		<ul>
                                    			<li>Safe swing zone = 4 metre diameter with the player in the centre </li>
                                    			<li>Ceiling height = 3.05 metres</li>
												<li>Player’s distance from the hitting screen = 3.6 metres</li>
												<li>If you’re not sure you have the recommended dimensions, don’t worry, as we have a host of solutions for smaller or awkward spaces. Please continue to complete the Simulator Configurator and we will be able to provide advice and solutions tailored to your exact space.</li>
                                    		</ul>
                                    	</p>
                                    	<p>
                                    		Tip: To be extra sure your chosen area is big enough, take a driver (your longest club) and mimic your swing in slow motion. Have someone watch as you swing to see if the club head comes within striking distance of any fixed obstacle, such as a wall or the ceiling.
                                    	</p>

                                        <a id="q-enough-space"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Please select from below the option that best describes your available space.
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question5" class="mx-normal-radio-button">

													<div>
														<label for="mx-question5_1">
															
															<input  type="radio" id="mx-question5_1" name="mx-question5" value="I have enough space for a Performance Simulator!" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															I have enough space for a Performance Simulator!
														</label>
													</div>

													<div>
														<label for="mx-question5_2">
															
															<input  type="radio" id="mx-question5_2" name="mx-question5" value="I may not have enough but want to discuss what we can do within my space" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															I may not have enough but want to discuss what we can do within my space
														</label>
													</div>

													<div>
														<label for="mx-question5_3">
															
															<input  type="radio" id="mx-question5_3" name="mx-question5" value="I do not have enough space but would like to learn more about alternatives such as net solutions" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															I do not have enough space but would like to learn more about alternatives such as net solutions
														</label>
													</div>

												</div>

											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->

                            <!--  -->
                            <div class="panel mx-normal-radio-button-check">
                                <div class="panel-heading" role="tab" id="heading-getting-started4">
                                    <h4 class="panel-title">
                                        <a class="d-block" role="button" href="#collapse-getting-started4" aria-expanded="true">
                                            Structural Details
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-getting-started4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                    	<p>
                                    		Please tell us a little about the location and construction of the room/area you’re planning to use for your Performance Simulator.
                                    	</p>
                                
                                        <a id="q-location"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Location:
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question6" class="mx-normal-radio-button">

													<div>
														<label for="mx-question6_1">
															
															<input  type="radio" id="mx-question6_1" name="mx-question6" value="Basement" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Basement
														</label>
													</div>

													<div>
														<label for="mx-question6_2">
															
															<input  type="radio" id="mx-question6_2" name="mx-question6" value="Ground floor room" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Ground floor room
														</label>
													</div>

													<div>
														<label for="mx-question6_3">
															
															<input  type="radio" id="mx-question6_3" name="mx-question6" value="Upper floor room" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Upper floor room
														</label>
													</div>

													<div>
														<label for="mx-question6_4">
															
															<input  type="radio" id="mx-question6_4" name="mx-question6" value="Garage" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Garage
														</label>
													</div>

													<div>
														<label for="mx-question6_5">
															
															<input  type="radio" id="mx-question6_5" name="mx-question6" value="Outbuilding/Shed" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Outbuilding/Shed
														</label>
													</div>

													<div>
														<label for="mx-question6_6">
															
															<input  type="radio" id="mx-question6_6" name="mx-question6" value="Other" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Other
														</label>
													</div>

												</div>
											</div>
										</div>

										<a id="q-wall-construction"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Wall construction:
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question7" class="mx-normal-radio-button">

													<div>
														<label for="mx-question7_1">
															
															<input  type="radio" id="mx-question7_1" name="mx-question7" value="Brick" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Brick
														</label>
													</div>

													<div>
														<label for="mx-question7_2">
															
															<input  type="radio" id="mx-question7_2" name="mx-question7" value="Concrete" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Concrete
														</label>
													</div>

													<div>
														<label for="mx-question7_3">
															
															<input  type="radio" id="mx-question7_3" name="mx-question7" value="Stud with plaster" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Stud with plaster
														</label>
													</div>

													<div>
														<label for="mx-question7_4">
															
															<input  type="radio" id="mx-question7_4" name="mx-question7" value="Other" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Other
														</label>
													</div>

												</div>
											</div>
										</div>

										<a id="q-floor-type"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Floor type:
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question8" class="mx-normal-radio-button">

													<div>
														<label for="mx-question8_1">
															
															<input  type="radio" id="mx-question8_1" name="mx-question8" value="Carpet" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Carpet
														</label>
													</div>

													<div>
														<label for="mx-question8_2">
															
															<input  type="radio" id="mx-question8_2" name="mx-question8" value="Wood" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Wood
														</label>
													</div>

													<div>
														<label for="mx-question8_3">
															
															<input  type="radio" id="mx-question8_3" name="mx-question8" value="Vinyl" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Vinyl
														</label>
													</div>

													<div>
														<label for="mx-question8_4">
															
															<input  type="radio" id="mx-question8_4" name="mx-question8" value="Concrete" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Concrete
														</label>
													</div>

													<div>
														<label for="mx-question8_5">
															
															<input  type="radio" id="mx-question8_5" name="mx-question8" value="Other" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Other
														</label>
													</div>

												</div>
											</div>
										</div>

										<a id="q-ceiling-type"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Ceiling type:
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question9" class="mx-normal-radio-button">

													<div>
														<label for="mx-question9_1">
															
															<input  type="radio" id="mx-question9_1" name="mx-question9" value="Plasterboard over joists" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Plasterboard over joists
														</label>
													</div>

													<div>
														<label for="mx-question9_2">
															
															<input  type="radio" id="mx-question9_2" name="mx-question9" value="Void/Exposed joists" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Void/Exposed joists
														</label>
													</div>

													<div>
														<label for="mx-question9_3">
															
															<input  type="radio" id="mx-question9_3" name="mx-question9" value="Panel" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Panel
														</label>
													</div>

													<div>
														<label for="mx-question9_4">
															
															<input  type="radio" id="mx-question9_4" name="mx-question9" value="Wood" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Wood
														</label>
													</div>

													<div>
														<label for="mx-question9_5">
															
															<input  type="radio" id="mx-question9_5" name="mx-question9" value="Other" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Other
														</label>
													</div>

												</div>
											</div>
										</div>

                                    </div>
                                </div>
                            </div>
                            <!--  -->

                            <!--  -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="heading-getting-started5">
                                    <h4 class="panel-title">
                                        <a class="d-block" role="button" href="#collapse-getting-started5" aria-expanded="true">
                                            Architectural Details
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-getting-started5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                    	<p>
                                    		Please tell us a little about the features of the room/area you’re planning to use for your simulator.
                                    	</p>
                                
										<a id="q-ceilings"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Ceilings:
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question10" class="mx-normal-radio-button">

													<div>
														<label for="mx-question10_1">
															
															<input  type="radio" id="mx-question10_1" name="mx-question10" value="Flat" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Flat
														</label>
													</div>

													<div>
														<label for="mx-question10_2">
															
															<input  type="radio" id="mx-question10_2" name="mx-question10" value="Beamed" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Beamed
														</label>
													</div>

													<div>
														<label for="mx-question10_3">
															
															<input  type="radio" id="mx-question10_3" name="mx-question10" value="Pitched" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Pitched
														</label>
													</div>

													<div>
														<label for="mx-question10_4">
															
															<input  type="radio" id="mx-question10_4" name="mx-question10" value="Other" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Other
														</label>
													</div>

												</div>
											</div>
										</div>

										<a id="q-obstructions"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-checkbox">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Select any of the following that are near or within the room/area where you would like your simulator installed: 
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question11" class="mx-normal-radio-button">

													<div>
														<label for="mx-question11_1">
															
															<input  type="checkbox" id="mx-question11_1" name="mx-question11_1" value="Door(s)" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															Door(s)
														</label>
													</div>

													<div>
														<label for="mx-question11_2">
															
															<input  type="checkbox" id="mx-question11_2" name="mx-question11_2" value="Window(s)" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															Window(s)
														</label>
													</div>

													<div>
														<label for="mx-question11_3">
															
															<input  type="checkbox" id="mx-question11_3" name="mx-question11_3" value="Mounted heater or air conditioner" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															Mounted heater or air conditioner
														</label>
													</div>

													<div>
														<label for="mx-question11_4">
															
															<input  type="checkbox" id="mx-question11_4" name="mx-question11_4" value="Ceiling Fan(s)" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															Ceiling Fan(s)
														</label>
													</div>

													<div>
														<label for="mx-question11_5">
															
															<input  type="checkbox" id="mx-question11_5" name="mx-question11_5" value="Lighting Fixture(s)" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															Lighting Fixture(s)
														</label>
													</div>

													<div>
														<label for="mx-question11_6">
															
															<input  type="checkbox" id="mx-question11_6" name="mx-question11_6" value="Mounted Cabinets" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															Mounted Cabinets
														</label>
													</div>

													<div>
														<label for="mx-question11_7">
															
															<input  type="checkbox" id="mx-question11_7" name="mx-question11_7" value="Other" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															Other
														</label>
													</div>

												</div>
											</div>
										</div>

                                    </div>
                                </div>
                            </div>
                            <!--  -->

                        </div>
                    </section>
                    <!-- ... environment -->





	                    <section class="section-components">
	                        <a id="components" data-section-marker="" class=""></a>
	                        <h2 class="section-title"><span class="small">3.</span> Components</h2>
	                        <div class="section-summary">
	                            <p>Now for the fun part! All of our Performance Simulation solutions come with these core components: Launch Monitor, Computer, Hitting Screen, Projector and Simulation Software. Let's review them and see which options are the best for you.</p>
	                        </div>
	                        <div class="panel-group accordion--b" role="tablist" aria-multiselectable="true">

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-launch-monitor">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-componentsx" href="#collapse-launch-monitor" aria-expanded="true" aria-controls="collapse-launch-monitor">
	                                            Launch Monitor
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-launch-monitor" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-launch-monitor">
	                                    <div class="panel-body">
	                                        <a id="q-launch-monitor"></a>
	                                        <div class="sub-section-summary">
	                                            <p>Every one of our Performance Simulators is powered by our core GC launch monitor technology. Which means, unlike other golf simulators, you aren’t limited by exact room dimensions and large costs.</p>
	                                        </div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--launch-monitor form-group form-item form-item-submitted-launch-monitor form-type-radios form-group"> <label class="control-label" for="edit-submitted-launch-monitor">Please review the launch monitor options available and select the one that best fits your needs. <span class="form-required" title="This field is required.">*</span></label>
	<div id="edit-submitted-launch-monitor" class="form-radios"><div class="form-item form-item-submitted-launch-monitor form-type-radio radio"> <label class="control-label gcquad checked" for="edit-submitted-launch-monitor-1"><input  type="radio" id="edit-submitted-launch-monitor-1" name="submitted[launch_monitor]" value="gcquad" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>GCQuad</label>
	</div><div class="form-item form-item-submitted-launch-monitor form-type-radio radio"> <label class="control-label gchawk" for="edit-submitted-launch-monitor-2"><input  type="radio" id="edit-submitted-launch-monitor-2" name="submitted[launch_monitor]" value="gchawk" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>GCHawk</label>
	</div><div class="form-item form-item-submitted-launch-monitor form-type-radio radio"> <label class="control-label gc2" for="edit-submitted-launch-monitor-3"><input  type="radio" id="edit-submitted-launch-monitor-3" name="submitted[launch_monitor]" value="gc2" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>GC2</label>
	</div><div class="form-item form-item-submitted-launch-monitor form-type-radio radio"> <label class="control-label gchmt" for="edit-submitted-launch-monitor-4"><input  type="radio" id="edit-submitted-launch-monitor-4" name="submitted[launch_monitor]" value="gchmt" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>GC+HMT</label>
	</div></div></div>                                        </div>
	                                        <div class="var-summaries var-summaries--launch-monitor var-summaries--extended">
	                                            <div class="var-summary var-summary--launch-monitor var-summary--launch-monitor--gcquad" style="display: block;">
	                                                <h5 class="title">GCQuad</h5>
	                                                <div>Our most advanced mobile launch monitor, the GCQuad delivers complete ball and club performance data with unprecedented accuracy and reliability. Perfect for your Performance Simulator or a day at the golf range.</div>
	                                            </div>
	                                            <div class="var-summary var-summary--launch-monitor var-summary--launch-monitor--gchawk" style="display: none;">
	                                                <h5 class="title">GCHawk</h5>
	                                                <div>Our latest innovation, the GCHawk is a ceiling-mounted solution that delivers the same level of simulation precision and reliability you expect from our GC line of launch monitors. Not only that, but the Hawk now also provides dynamic football tracking and analysis for complete family fun.</div>
	                                            </div>
	                                            <div class="var-summary var-summary--launch-monitor var-summary--launch-monitor--gc2" style="display: none;">
	                                                <h5 class="title">GC2</h5>
	                                                <div>Our original Game Changer, and the best-selling professional-grade launch monitor of all time, the GC2 is the perfect choice when looking for a budget-conscious simulation solution that doesn’t compromise on accuracy.</div>
	                                            </div>
	                                            <div class="var-summary var-summary--launch-monitor var-summary--launch-monitor--gchmt" style="display: none;">
	                                                <h5 class="title">GC+HMT</h5>
	                                                <div>Combining the legendary GC2 with our attachable HMT (Head Measurement Technology), this power duo delivers ball and club data with incredible accuracy and reliability.</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-computer">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-components" href="#collapse-computer" aria-expanded="true" aria-controls="collapse-computer">
	                                            Computer
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-computer" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-computer">
	                                    <div class="panel-body">
	                                        <a id="q-computer"></a>
	                                        <div class="sub-section-summary">
	                                            <p>All our computers are optimised for maximum performance with our FSX gaming software, and are pre-built to ensure no unnecessary software or bloatware. All our computers come with a 3-year warranty.</p>
	                                        </div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--computer form-group form-item form-item-submitted-computer form-type-radios form-group"> <label class="control-label" for="edit-submitted-computer">Please review the computer options available and select the one that best fits your needs. <span class="form-required" title="This field is required.">*</span></label>
	<div id="edit-submitted-computer" class="form-radios"><div class="form-item form-item-submitted-computer form-type-radio radio"> <label class="control-label desktop checked" for="edit-submitted-computer-1"><input  type="radio" id="edit-submitted-computer-1" name="submitted[computer]" value="desktop" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Desktop</label>
	</div><div class="form-item form-item-submitted-computer form-type-radio radio"> <label class="control-label laptop" for="edit-submitted-computer-2"><input  type="radio" id="edit-submitted-computer-2" name="submitted[computer]" value="laptop" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Laptop</label>
	</div><div class="form-item form-item-submitted-computer form-type-radio radio"> <label class="control-label notapp" for="edit-submitted-computer-3"><input  type="radio" id="edit-submitted-computer-3" name="submitted[computer]" value="notapp" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>I already own a compatible computer and will use it.</label>
	</div></div></div>                                        </div>


	                                        <div class="var-summaries var-summaries--computer var-summaries--extended">
	                                            <div class="var-summary var-summary--computer var-summary--computer--desktop" style="display: block;">
	                                                <h5 class="title">Desktop</h5>
	                                                <div class="body">Recommended for projection-based simulation, our powerful desktop solution has been custom configured to handle the demands of high-resolution or multi-projection display&nbsp;output.</div>
	                                            </div>
	                                            <div class="var-summary var-summary--computer var-summary--computer--laptop" style="display: none;">
	                                                <h5 class="title">Laptop</h5>
	                                                <div class="body">Recommended for monitor-based (non-projection) simulation, our laptop solution delivers the speed and power to run our FSX software whether indoors or&nbsp;outdoors.</div>
	                                            </div>
	                                            <div class="var-summary var-summary--computer var-summary--computer--notapp" style="display: none;">
	                                                <div class="body">I already own a compatible computer and will use&nbsp;it.</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-screen">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-components" href="#collapse-screen" aria-expanded="true" aria-controls="collapse-screen">
	                                            Hitting Screen
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-screen" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-screen">
	                                    <div class="panel-body">
	                                        <a id="q-screen"></a>
	                                        <div class="sub-section-summary">
	                                            <p>Our hitting screens are bespoke designed and handmade to deliver the maximum image brightness and long-term durability for years of practice and gaming fun.</p>
	                                        </div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--screen form-group form-item form-item-submitted-screen form-type-radios form-group"> <label class="control-label" for="edit-submitted-screen">Please review the hitting screen options available and select the one that best fits your needs. <span class="form-required" title="This field is required.">*</span></label>
	<div id="edit-submitted-screen" class="form-radios"><div class="form-item form-item-submitted-screen form-type-radio radio"> <label class="control-label flat checked" for="edit-submitted-screen-1"><input  type="radio" id="edit-submitted-screen-1" name="submitted[screen]" value="flat" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Tensioned Screen System</label>
	</div><div class="form-item form-item-submitted-screen form-type-radio radio"> <label class="control-label curved" for="edit-submitted-screen-2"><input  type="radio" id="edit-submitted-screen-2" name="submitted[screen]" value="curved" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Hung Screen</label>
	</div><div class="form-item form-item-submitted-screen form-type-radio radio"> <label class="control-label net_return" for="edit-submitted-screen-3"><input  type="radio" id="edit-submitted-screen-3" name="submitted[screen]" value="net_return" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Net Solution</label>
	</div></div></div>                                        </div>

	                                        <div class="var-summaries var-summaries--screen var-summaries--extended">
	                                            <div class="var-summary var-summary--screen var-summary--screen--flat" style="display: block;">
	                                                <h5 class="title">Tensioned Screen System</h5>
	                                                <div class="body">Our bespoke built tensioned screens are custom fabricated from a series of lightweight materials for optimal image clarity, brightness, and ball-impact durability, all without a wrinkle in sight.</div>
	                                            </div>
	                                            <div class="var-summary var-summary--screen var-summary--screen--curved" style="display: none;">
	                                                <h5 class="title">Hung Screen</h5>
	                                                <div class="body">For those looking for big screen projection but with budgets in mind, our non-tensioned mid-level screens can be eyelet mounted and corner suspended to provide a safe, big screen experience.</div>
	                                            </div>
	                                            <div class="var-summary var-summary--screen var-summary--screen--net_return" style="display: none;">
	                                                <h5 class="title">Net Solution</h5>
	                                                <div class="body">Need to save space but still want the industry's leading technology? Our net solutions are a compact, budget-friendly option for even the smallest of spaces. </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-projector">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-components" href="#collapse-projector" aria-expanded="true" aria-controls="collapse-projector">
	                                            Projector
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-projector" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-projector">
	                                    <div class="panel-body">
	                                        <a id="q-projector"></a>
	                                        <div class="sub-section-summary">
	                                            <p>We’ve selected only the industry’s most advanced, durable, and image-rich projectors for our Performance Simulator solutions.</p>
	                                        </div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--projector form-group form-item form-item-submitted-projector form-type-radios form-group"> <label class="control-label" for="edit-submitted-projector">Please review the projector options available and select the one that best fits your needs.  <span class="form-required" title="This field is required.">*</span></label>
	<div id="edit-submitted-projector" class="form-radios"><div class="form-item form-item-submitted-projector form-type-radio radio"> <label class="control-label standard checked" for="edit-submitted-projector-1"><input  type="radio" id="edit-submitted-projector-1" name="submitted[projector]" value="standard" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Standard Projector</label>
	</div><div class="form-item form-item-submitted-projector form-type-radio radio"> <label class="control-label premium" for="edit-submitted-projector-2"><input  type="radio" id="edit-submitted-projector-2" name="submitted[projector]" value="premium" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Premium Projector</label>
	</div><div class="form-item form-item-submitted-projector form-type-radio radio"> <label class="control-label notapp" for="edit-submitted-projector-3"><input  type="radio" id="edit-submitted-projector-3" name="submitted[projector]" value="notapp" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>I already own a compatible projector and will use it</label>
	</div><div class="form-item form-item-submitted-projector form-type-radio radio"> <label class="control-label notapp_net" for="edit-submitted-projector-4"><input  type="radio" id="edit-submitted-projector-4" name="submitted[projector]" value="notapp_net" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Not applicable as I will be using a net return</label>
	</div></div></div>                                        </div>

	                                        <div class="var-summaries var-summaries--projector var-summaries--extended">
	                                            <div class="var-summary var-summary--projector var-summary--projector--standard" style="display: block;">
	                                                <div class="body">Standard Projector with non-interchangeable lens</div>
	                                            </div>
	                                            <div class="var-summary var-summary--projector var-summary--projector--premium" style="display: none;">
	                                                <div class="body">Premium Projector with interchangeable and short-throw lens options</div>
	                                            </div>
	                                            <div class="var-summary var-summary--projector var-summary--projector--notapp" style="display: none;">
	                                                <div class="body">I already own a compatible projector and will be using it</div>
	                                            </div>
	                                            <div class="var-summary var-summary--projector var-summary--projector--notapp_net" style="display: none;">
	                                                <div class="body">I don’t need a projector as I will be using a net return</div>
	                                                <!-- (N.B. This automatically selects if you choose a net return above)
 -->
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="panel">
	                            	<a id="q-software"></a>
	                                <div class="panel-heading" role="tab" id="heading-software">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-components" href="#collapse-software" aria-expanded="true" aria-controls="collapse-software">
	                                            Software
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-software" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-software">
	                                    <div class="panel-body">	                                        
	                                        <div class="sub-section-summary"></div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--software form-group form-item form-item-submitted-software form-type-radios form-group"><div id="edit-submitted-software" class="form-radios"><div class="form-item form-item-submitted-software form-type-radio radio"> <label class="control-label fsx_2018 checked" for="edit-submitted-software-1"><input  type="radio" id="edit-submitted-software-1" name="submitted[software]" value="fsx_2018" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>FSX 2018</label>
	</div></div>
	<!-- <label class="control-label element-invisible" for="edit-submitted-software">FSX 2018 is... <span class="form-required" title="This field is required.">*</span></label> -->

	</div>                                        </div>

	                                        <div class="var-summaries var-summaries--software var-summaries--extended">
	                                            <div class="var-summary var-summary--software var-summary--software--fsx_2018" style="display: block;">
	                                                <h5 class="title">FSX 2018</h5>
	                                                <div class="body">Experience the most realistic golf simulation ever with FSX 2018. Play the world’s best and most exclusive courses, practice your skills on the range, or even compete in skill-building competitions with players around the world — all in beautiful 4K resolution.</div>
	                                            </div>
	                                        </div>

	                                        <!--  -->
	                                        <!-- <a id="q-status"></a> -->
                                        	<br>
	                                        <div class="form-item-wrapper thumbs">
												<div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Golf Courses</label>

												</div>

												<p>
													Take your experience further by adding to your library of world-famous courses. From iconic Open venues to lesser known gems, our ever-growing range of venues ensure you’ll always be wanting to play more! 
												</p>
											</div>

											<a id="mx-edit-question4"></a>
	                                        <br>
	                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
	                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Please review the course options below to give a sense of how many you might wish to kick off with
												 <span class="form-required" title="This field is required.">*</span></label>

													<div id="mx-question12" class="mx-normal-radio-button">

														<div>
															<label for="mx-question12_1">
																
																<input  type="radio" id="mx-question12_1" name="mx-question12" checked="checked" value="I’m happy to start with the standard 5 courses that come with FSX" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																I’m happy to start with the standard 5 courses that come with FSX
															</label>
														</div>

														<div>
															<label for="mx-question12_2">
																
																<input  type="radio" id="mx-question12_2" name="mx-question12" value="I’d like to start with another 5 to 10 courses" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																I’d like to start with another 5 to 10 courses
															</label>
														</div>

														<div>
															<label for="mx-question12_3">
																
																<input  type="radio" id="mx-question12_3" name="mx-question12" value="I’d like to start with another 15 to 25 courses" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																I’d like to start with another 15 to 25 courses
															</label>
														</div>

														<div>
															<label for="mx-question12_4">
																
																<input  type="radio" id="mx-question12_4" name="mx-question12" value="I’d like to start with more than 30 courses" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																I’d like to start with more than 30 courses
															</label>
														</div>

														<div>
															<label for="mx-question12_5">
																
																<input  type="radio" id="mx-question12_5" name="mx-question12" value="I’d like to start with every course available (Fully Loaded)" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																I’d like to start with every course available (Fully Loaded)
															</label>
														</div>

													</div>
												</div>
											</div>

											<a id="mx-edit-question5"></a>
	                                        <br>
	                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
	                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Football Skills
												</label>

												<p>
													Want to play and practice football in your Performance Simulator as well as golf? As long as you’ve chosen the GCHawk you can now add Football Skills software to your simulator, allowing you to work on your free-kicks, corners, and penalties.
												</p>

													<!-- not required -->
													<div id="mx-question14" class="mx-normal-radio-button">

														<div>
															<label for="mx-question14_1">
																
																<input  type="radio" id="mx-question14_1" name="mx-question14" checked="checked" value="No thank you, I’m only looking for golf at the moment" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																No thank you, I’m only looking for golf at the moment
															</label>
														</div>

														<div>
															<label for="mx-question14_2">
																
																<input  type="radio" id="mx-question14_2" name="mx-question14" value="Football as well as golf sounds good to me." class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																Football as well as golf sounds good to me.
															</label>
														</div>

													</div>
												</div>
											</div>


	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </section>
	                    <section class="section-add-ons">
	                        <a id="add-ons" data-section-marker="" class=""></a>
	                        <h2 class="section-title"><span class="small">3.</span> Simulator Structures and Options</h2>
	                        <div class="section-summary">
	                            <p>Our Performance Simulators include an endless number of custom options to ensure you get the exact function, safety and finished look you desire. Our installation team will walk you through each option and outline the advantages and cost of each. In the meantime, here are some you can&nbsp;consider:</p>
	                        </div>
	                        <div class="panel-group accordion--b" id="accordion-add-ons" role="tablist" aria-multiselectable="true">
	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-sidewall-finish">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-add-onsx" href="#collapse-sidewall-finish" aria-expanded="true" aria-controls="collapse-sidewall-finish">
	                                            Simulator Structure
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-sidewall-finish" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-sidewall-finish">
	                                    <div class="panel-body">
	                                        <a id="q-sidewall-finish"></a>
	                                        <div class="form-item-wrapper mx-normal-radio-button">
	                                            <div class="form-item webform-component webform-component-radios webform-component--sidewall-finish form-group form-item form-item-submitted-sidewall-finish form-type-radios form-group"><div id="edit-submitted-sidewall-finish" class="form-radios"><div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label checked" for="edit-submitted-sidewall-finish-1"><input type="radio" id="edit-submitted-sidewall-finish-1" name="submitted[sidewall_finish]" value="none" checked="checked" class="form-radio">
	                                            <i class="fa fa-fw fa-circle-o"></i>
	                                            Full size hard-sided structure with side/ceiling protection baffles and carpeting </label>
	</div><div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label" for="edit-submitted-sidewall-finish-2"><input type="radio" id="edit-submitted-sidewall-finish-2" name="submitted[sidewall_finish]" value="carpet_tiles" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Half-length hard-sided structure with side/ceiling protection baffles and carpeting</label>
	</div><div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label" for="edit-submitted-sidewall-finish-3"><input type="radio" id="edit-submitted-sidewall-finish-3" name="submitted[sidewall_finish]" value="acoustic_tiles" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Minimum-length rear screen section only with retractable side curtains</label>
	</div>

	<div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label" for="edit-submitted-sidewall-finish-4"><input type="radio" id="edit-submitted-sidewall-finish-4" name="submitted[sidewall_finish]" value="curtains" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Inside/outside retractable hitting screen with side curtains</label>
	</div>

	<div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label" for="edit-submitted-sidewall-finish-4_1"><input type="radio" id="edit-submitted-sidewall-finish-4_1" name="submitted[sidewall_finish]" value="canval_value" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Canvas and pole structure</label>
	</div>

	<div class="form-item form-item-submitted-sidewall-finish form-type-radio radio" style="display: none;"> <label class="control-label" for="edit-submitted-sidewall-finish-5"><input type="radio" id="edit-submitted-sidewall-finish-5" name="submitted[sidewall_finish]" value="notapp_net" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Not applicable as I will be using a net return</label>
	</div></div>
	<!-- <label class="control-label element-invisible" for="edit-submitted-sidewall-finish">Sidewall finish:</label> -->

	</div>                                        </div>
	                                    </div>
	                                </div>
	                            </div>	                            

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-hitting-mat">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-add-onsx" href="#collapse-hitting-mat" aria-expanded="true" aria-controls="collapse-hitting-mat">
	                                            Hitting Mat
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-hitting-mat" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-hitting-mat">
	                                    <div class="panel-body">
	                                        <a id="q-hitting-mat"></a>
	                                        <div class="form-item-wrapper mx-normal-radio-button">
	                                            <div class="form-item webform-component webform-component-radios webform-component--hitting-mat form-group form-item form-item-submitted-hitting-mat form-type-radios form-group"><div id="edit-submitted-hitting-mat" class="form-radios"><div class="form-item form-item-submitted-hitting-mat form-type-radio radio"> <label class="control-label checked" for="edit-submitted-hitting-mat-1"><input type="radio" id="edit-submitted-hitting-mat-1" name="submitted[hitting_mat]" value="none" checked="checked" class="form-radio">
	                                            <i class="fa fa-fw fa-circle-o"></i>
	                                            None</label>
	</div><div class="form-item form-item-submitted-hitting-mat form-type-radio radio"> <label class="control-label" for="edit-submitted-hitting-mat-2"><input type="radio" id="edit-submitted-hitting-mat-2" name="submitted[hitting_mat]" value="standard_mat" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Standard Hitting Mat (Green)</label>
	</div><div class="form-item form-item-submitted-hitting-mat form-type-radio radio"> <label class="control-label" for="edit-submitted-hitting-mat-3"><input type="radio" id="edit-submitted-hitting-mat-3" name="submitted[hitting_mat]" value="double_strike_mat" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Bespoke Hitting Mat (Black/Other Colour)</label>
	</div></div> 
	<!-- <label class="control-label element-invisible" for="edit-submitted-hitting-mat">Hitting mat:</label> -->
	</div>                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-computer-cabinet">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-add-onsx" href="#collapse-computer-cabinet" aria-expanded="true" aria-controls="collapse-computer-cabinet">
	                                            Computer Cabinet
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-computer-cabinet" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-computer-cabinet">
	                                    <div class="panel-body mx-normal-radio-button">
	                                        <a id="q-computer-cabinet"></a>
	                                        <div class="form-item-wrapper">
	                                            <div class="form-item webform-component webform-component-radios webform-component--computer-cabinet form-group form-item form-item-submitted-computer-cabinet form-type-radios form-group"><div id="edit-submitted-computer-cabinet" class="form-radios"><div class="form-item form-item-submitted-computer-cabinet form-type-radio radio"> <label class="control-label checked" for="edit-submitted-computer-cabinet-1"><input type="radio" id="edit-submitted-computer-cabinet-1" name="submitted[computer_cabinet]" value="none" checked="checked" class="form-radio">
	                                            <i class="fa fa-fw fa-circle-o"></i>
	                                            None</label>
	</div><div class="form-item form-item-submitted-computer-cabinet form-type-radio radio"> <label class="control-label" for="edit-submitted-computer-cabinet-2"><input type="radio" id="edit-submitted-computer-cabinet-2" name="submitted[computer_cabinet]" value="low_profile_cabinet_cooling_fan" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Black low-profile cabinet with cooling fan</label>
	</div></div>
	<!-- <label class="control-label element-invisible" for="edit-submitted-computer-cabinet">Computer cabinet:</label> -->
	</div>                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                        </div>
	                    </section>




					<!-- add technologies ... -->
                    <section class="section-add-technologies">
                        <a id="add-technologies" data-section-marker="" class=""></a>
                        <h2 class="section-title"><span class="small">5.</span> Additional Technology</h2>
                        <div class="section-summary">
                        </div>
                        <div class="panel-group accordion--b" role="tablist" aria-multiselectable="true">
                        	<p>
                        		Looking to go even further with your Performance Simulator? Private and business users often enhance their technology with a number of hardware and software add-ons. By ticking the boxes below you’re not committing to anything, but it will allow us to be able to discuss your plans (short- or long-term) when we next talk:
                        	</p>

                            <div class="panel">

                                <div id="collapse-getting-started" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                        <a id="mx-edit-question6"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Audio-Visual/Cinema
											</label>

											<p>
												Why not add home cinema to your simulator for big screen sports or latest blockbusters. We offer a range of solutions to take your big screen to the next level:
											</p>

												<!-- not required -->
												<div id="mx-question15" class="mx-normal-radio-button">

													<div>
														<label for="mx-question15_1">
															
															<input  type="radio" id="mx-question15_1" name="mx-question15" checked="checked" value="Not for me, thank you" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Not for me, thank you
														</label>
													</div>

													<div>
														<label for="mx-question15_2">
															
															<input  type="radio" id="mx-question15_2" name="mx-question15" value="Entry-level Audio-Visual Package" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Entry-level Audio-Visual Package
														</label>
													</div>

													<div>
														<label for="mx-question15_3">
															
															<input  type="radio" id="mx-question15_3" name="mx-question15" value="Mid-Range Cinema Audio-Visual Package" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Mid-Range Cinema Audio-Visual Package
														</label>
													</div>

													<div>
														<label for="mx-question15_4">
															
															<input  type="radio" id="mx-question15_4" name="mx-question15" value="Bespoke high-end Audio-Visual and Home Automation " class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Bespoke high-end Audio-Visual and Home Automation 
														</label>
													</div>


												</div>
											</div>
										</div>

										<a id="mx-edit-question7"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label">Video Analysis and Pressure Mapping
											</label>

											<p>
												Want more insight into your, or your visitors’ golf games? Why not add in a dedicated video analysis system and even pressure mapping and analysis. Our video and pressure systems seamlessly integrate with our Performance Simulator.
											</p>

												<!-- not required -->
												<div id="mx-question16" class="mx-normal-radio-button">

													<div>
														<label for="mx-question16_1">
															
															<input  type="radio" id="mx-question16_1" name="mx-question16" checked="checked" value="No thank you" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															No thank you
														</label>
													</div>

													<div>
														<label for="mx-question16_2">
															
															<input  type="radio" id="mx-question16_2" name="mx-question16" value="Video Analysis only" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Video Analysis only
														</label>
													</div>

													<div>
														<label for="mx-question16_3">
															
															<input  type="radio" id="mx-question16_3" name="mx-question16" value="Video and Pressure Mapping" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Video and Pressure Mapping
														</label>
													</div>

													<div>
														<label for="mx-question16_4">
															
															<input  type="radio" id="mx-question16_4" name="mx-question16" value="Pressure Mapping only" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															Pressure Mapping only
														</label>
													</div>
													
												</div>
											</div>
										</div>
                                       
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- ... add technologies -->						



	                    <section class="section-review">
	                        <a id="review" data-section-marker="" class=""></a>
	                        <h2 class="section-title"><span class="small">6.</span> Review</h2>
	                        <div class="section-summary">
	                            <p>Congratulations - you’ve taken the first steps toward designing your own Performance Simulator! Below is a summary of the simulation components you’ve selected, along with the details of the space you’re considering. Please take a moment to review. To change a selection, simply click the ‘edit’ link next to that component.</p>
	                        </div>
	                            <ul class="rl">

	                            	<li class="rl-section">
	                                    <div class="rl-section-title">Planned Use</div>
	                                    <ul>
	                                        <li class="rl-category rl-category--getting-started">
	                                            <ul>
	                                                <li class="qa qa--status">
	                                                    <div class="question">Before we get into the specifics of your simulator, can you tell us a little about how you plan to use the technology? Please select from the options below that best describe your planned use of the simulator.</div>
	                                                    <ul>
	                                                        <li id="edit-submitted-status-show">I&apos;m looking for a simulator for personal use, and with family and friends</li>
	                                                    </ul>
	                                                    <a class="edit" href="#mx-edit-question1">edit</a>
	                                                </li>

	                                                <li class="qa qa--status">
	                                                    <div class="question">Please select from below the option that best describes how the simulator will be used once installed.</div>
	                                                    <ul>
	                                                        <li id="mx-question2-show">Private Home Entertainment</li>
	                                                    </ul>
	                                                    <a class="edit" href="#mx-edit-question2">edit</a>
	                                                </li>

	                                                <li class="qa qa--status">
	                                                    <div class="question">Do you currently have a golf simulator?</div>
	                                                    <ul>
	                                                        <li id="mx-question3-show">No</li>
	                                                    </ul>
	                                                    <a class="edit" href="#mx-edit-question3">edit</a>
	                                                </li>

	                                            </ul>
	                                        </li>
                                 	                                 
	                                    </ul>
	                                </li>

	                                <li class="rl-section">
	                                    <div class="rl-section-title">Environment</div>
	                                    <ul>
	                                        <li class="rl-category rl-category--getting-started">
	                                            <div class="rl-category-title">Getting Started</div>
	                                            <ul>
	                                                <li class="qa qa--status">
	                                                    <div class="question">Please select from below the option that best describes the environment into which you're planning to locate your simulator.</div>
	                                                    <ul>
	                                                        <li id="mx-question4-show">I&apos;m planning to use a room/area in an existing building</li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-status">edit</a>
	                                                </li>
	                                            </ul>
	                                        </li>

	                                        <li class="rl-category rl-category--space">
	                                            <div class="rl-category-title">Space</div>
	                                            <ul>
	                                                <li class="qa qa--enough-space">
	                                                    <div class="question">Please select from below the option that best describes your available space.</div>
	                                                    <ul>
	                                                        <li id="mx-question5-show">I have enough space for a Performance Simulator!</li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-enough-space">edit</a>
	                                                </li>
	                                            </ul>
	                                        </li>


	                                        <li class="rl-category rl-category--structural-details">
	                                            <div class="rl-category-title">Structural Details</div>
	                                            <ul>
	                                                <li class="qa qa--location">
	                                                    <div class="question">Location:</div>
	                                                    <ul>
	                                                        <li id="mx-question6-show">Basement</li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-location">edit</a>
	                                                </li>
	                                                <li class="qa qa--wall-construction">
	                                                    <div class="question">Wall Construction:</div>
	                                                    <ul>
	                                                        <li id="mx-question7-show">Brick</li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-wall-construction">edit</a>
	                                                </li>
	                                                <li class="qa qa--floor-type">
	                                                    <div class="question">Floor type:</div>
	                                                    <ul>
	                                                        <li id="mx-question8-show">Carpet</li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-floor-type">edit</a>
	                                                </li>
	                                                <li class="qa qa--ceiling-type">
	                                                    <div class="question">Ceiling type:</div>
	                                                    <ul>
	                                                        <li id="mx-question9-show">Plasterboard over joists</li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-ceiling-type">edit</a>
	                                                </li>
	                                            </ul>
	                                        </li>
	                                        <li class="rl-category rl-category--architectural-details">
	                                            <div class="rl-category-title">Architectural Details</div>
	                                            <ul>
	                                                <li class="qa qa--ceilings">
	                                                    <div class="question">Ceilings:</div>
	                                                    <ul>
	                                                        <li id="mx-question10-show">Flat</li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-ceilings">edit</a>
	                                                </li>
	                                                <li class="qa qa--obstructions">
	                                                    <div class="question">Select any of the following that are near or within the room/area where you would like your simulator installed:</div>
	                                                    <ul id="mx-question11-checkbox-area">
	                                                        <li>None Selected</li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-obstructions">edit</a>
	                                                </li>
	                                            </ul>
	                                        </li>
	                                    </ul>
	                                </li>
	                                <li class="rl-section">
	                                    <div class="rl-section-title">Components</div>
	                                    <ul>
	                                        <li class="qa qa--launch-monitor">
	                                            <div class="question">Launch Monitor:</div>
	                                            <ul>
	                                                <li id="mx-question_1">GCQuad</li>
	                                            </ul>
	                                            <a class="edit" href="#q-launch-monitor">edit</a>
	                                        </li>
	                                        <li class="qa qa--computer">
	                                            <div class="question">Computer:</div>
	                                            <ul>
	                                                <li id="mx-question_2">Desktop</li>
	                                            </ul>
	                                            <a class="edit" href="#q-computer">edit</a>
	                                        </li>
	                                        <li class="qa qa--screen">
	                                            <div class="question">Hitting Screen:</div>
	                                            <ul>
	                                                <li id="mx-question_3">Flat</li>
	                                            </ul>
	                                            <a class="edit" href="#q-screen">edit</a>
	                                        </li>
	                                        <li class="qa qa--projector">
	                                            <div class="question">Projector:</div>
	                                            <ul>
	                                                <li id="mx-question_4">Standard Projector</li>
	                                            </ul>
	                                            <a class="edit" href="#q-projector">edit</a>
	                                        </li>
	                                        <li class="qa qa--software">
	                                            <div class="question">Software:</div>
	                                            <ul>
	                                                <li id="mx-question_5">FSX 2018</li>
	                                            </ul>
	                                            <a class="edit" href="#q-software">edit</a>
	                                        </li>

	                                        <li class="qa qa--course_options">
	                                            <div class="question">Please review the course options below to give a sense of how many you might wish to kick off with</div>
	                                            <ul>
	                                                <li id="mx-question12-show"> I’m happy to start with the standard 5 courses that come with FSX</li>
	                                            </ul>
	                                            <a class="edit" href="#mx-edit-question4">edit</a>
	                                        </li>	
	                                        <li class="qa qa--futball_skills">
	                                            <div class="question">Football Skills:</div>
	                                            <ul>
	                                                <li id="mx-question14-show">No thank you, I’m only looking for golf at the moment</li>
	                                            </ul>
	                                            <a class="edit" href="#mx-edit-question5">edit</a>
	                                        </li>
	                                                                               

	                                    </ul>
	                                </li>
	                                <li class="rl-section">
	                                    <div class="rl-section-title">Simulator Structures and Options</div>
	                                    <ul>
	                                        <li class="qa qa--sidewall-finish">
	                                            <div class="question">Simulator Structure:</div>
	                                            <ul>
	                                                <li id="mx-question_6">Full size hard-sided structure with side/ceiling protection baffles and carpeting</li>
	                                            </ul>
	                                            <a class="edit" href="#q-sidewall-finish">edit</a>
	                                        </li>
	                                        <li class="qa qa--hitting-mat">
	                                            <div class="question">Hitting Mat:</div>
	                                            <ul>
	                                                <li id="mx-question_7">None</li>
	                                            </ul>
	                                            <a class="edit" href="#q-hitting-mat">edit</a>
	                                        </li>
	                                        <li class="qa qa--computer-cabinet">
	                                            <div class="question">Computer Cabinet:</div>
	                                            <ul>
	                                                <li id="mx-question_8">None</li>
	                                            </ul>
	                                            <a class="edit" href="#q-computer-cabinet">edit</a>
	                                        </li>
	                                    </ul>
	                                </li>

	                                <li class="rl-section">
	                                    <div class="rl-section-title">Additional Technology</div>
	                                    <ul>
	                                        <li class="qa qa--sidewall-finish-">
	                                            <div class="question">Audio-Visual/Cinema:</div>
	                                            <ul>
	                                                <li id="mx-question15-show">Not for me, thank you</li>
	                                            </ul>
	                                            <a class="edit" href="#mx-edit-question6">edit</a>
	                                        </li>
	                                        <li class="qa qa--sidewall-finish--">
	                                            <div class="question">Video Analysis and Pressure Mapping:</div>
	                                            <ul>
	                                                <li id="mx-question16-show">No thank you</li>
	                                            </ul>
	                                            <a class="edit" href="#mx-edit-question7">edit</a>
	                                        </li>
	                                        
	                                    </ul>
	                                </li>
	                            </ul>
	                    </section>
	                    <section class="section-share">
	                        <a id="share" data-section-marker="" class=""></a>
	                        <h2 class="section-title"><span class="small">7.</span> Share</h2>
	                        <div class="section-summary">
	                            Sharing your ideas with our design team is simple - just fill out your name and preferred contact information below and hit the submit button.
	                        </div>
	                        <div class="container-fluid">

	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-select webform-component--market form-group form-item form-item-submitted-market form-type-select form-group"> <label class="control-label" for="edit-submitted-market">Select Your Region: <span class="form-required" title="This field is required.">*</span></label>
	<select required="required" class="form-control form-select required" id="edit-submitted-market" name="submitted[market]"><option value="USA" selected="selected">USA</option><option value="aunzsales@foresightsports.com">Australia / New Zealand</option><option value="euuksales@foresightsports.com">Europe / UK</option><option value="jpsales@foresightsports.com">Japan</option><option value="kosales@foresightsports.com">Korea</option><option value="cnsales@foresightsports.com">China</option><option value="casales@foresightsports.com">Canada</option><option value="Latin America">Latin America</option><option value="seasales@foresightsports.com">Southeast Asia</option><option value="zamesales@foresightsports.com">Africa / Middle East</option><option value="insales@foresightsports.com">India</option></select></div>                            </div>
	                            <div class="form-item-wrapper">
	                                                            </div>

	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textfield webform-component--first-name form-group form-item form-item-submitted-first-name form-type-textfield form-group"> <label class="control-label" for="edit-submitted-first-name">First Name: <span class="form-required" title="This field is required.">*</span></label>
	<input required="required" class="form-control form-text required" type="text" id="edit-submitted-first-name" name="submitted[first_name]" value="" size="60" maxlength="128"></div>                            </div>
	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textfield webform-component--last-name form-group form-item form-item-submitted-last-name form-type-textfield form-group"> <label class="control-label" for="edit-submitted-last-name">Last Name: <span class="form-required" title="This field is required.">*</span></label>
	<input required="required" class="form-control form-text required" type="text" id="edit-submitted-last-name" name="submitted[last_name]" value="" size="60" maxlength="128"></div>                            </div>
	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textfield webform-component--email form-group form-item form-item-submitted-email form-type-textfield form-group"> <label class="control-label" for="edit-submitted-email">Email: <span class="form-required" title="This field is required.">*</span></label>
	<input required="required" class="form-control form-text required" type="text" id="edit-submitted-email" name="submitted[email]" value="" size="60" maxlength="128"></div>                            </div>
	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textfield webform-component--phone form-group form-item form-item-submitted-phone form-type-textfield form-group"> <label class="control-label" for="edit-submitted-phone">Phone:</label>
	<input class="form-control form-text" type="text" id="edit-submitted-phone" name="submitted[phone]" value="" size="60" maxlength="128"></div>                            </div>

	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textarea webform-component--additional form-group form-item form-item-submitted-additional form-type-textarea form-group"> <label class="control-label" for="edit-submitted-additional">Additional instructions or comments:</label>
	<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea class="form-control form-textarea" id="edit-submitted-additional" name="submitted[additional]" cols="60" rows="5"></textarea><div class="grippie"></div></div></div>                            </div>
	                            
	                        </div>
	                    </section>

	                    <input type="hidden" id="mxvfos_wpnonce_request" name="mxvfos_wpnonce_request" value="<?php echo wp_create_nonce( 'mxvfos_wpnonce_request' ) ;?>" />
	                                       
	<div class="form-actions">
		<p>
			(Caption): This is a depiction of a standard setup with the specifics and add-ons you've selected. Like what you see? Our design team will render your exact simulator within your space as part of the new simulator project kick-off process.
		</p>

		<br>

        <button class="webform-submit button-primary btn btn-primary form-submit" type="submit" name="op" id="mx_submit_button" value="Submit">Submit</button>

       

	</div>                
	            </div>
	        </div>
	    </div>
	</div>	

	<script src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/js/jquery.js"></script>	

	<script>
		var mxvfos_front_localize = {
			'ajaxurl': '<?php echo admin_url( 'admin-ajax.php' ); ?>'
		};
	</script>

	<script src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/js/script.js?v=<?php echo time(); ?>"></script>

	<script src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/js/front.js"></script>
	

	<script type="text/javascript">
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
	                            imgTarget.attr('src',imgTSrc);
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

	    </script>


	</div>

	</form>
	</section>
	</div>
	</div></div></div>
	</section>
	</div>
	</div>

</div>

		<?php return ob_get_clean();

		} );

	}
}