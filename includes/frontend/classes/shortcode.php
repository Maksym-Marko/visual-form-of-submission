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

			$form_options = get_option( '_mx_visual_form_options' );

			$form_data = maybe_unserialize( $form_options );

			ob_start();
				
			?>
			
			<link rel="stylesheet" href="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/font-awesome-4.6.3/css/font-awesome.min.css" />

			<link rel="stylesheet" href="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/css/style.css?v=<?php echo time(); ?>" />

<!-- success -->
<div class="main-container mx-main-container-success" style="display: none;">

	<link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
   
	<section class=" container">
                            
            <h1 class="page-header"><?php echo $form_data['mx-field-172']; ?></h1>
                                    
                                <div class="alert alert-block alert-dismissible alert-success messages status">
  <a class="close" data-dismiss="alert" href="/simulation-configurator/">×</a>
<div class="text-center">
<h3 class="d-inline-block text-center m0 thanks-simcon"><?php echo $form_data['mx-field-173']; ?></h3>
</div>
</div>
    <div class="region region-content">
    <section id="block-system-main" class="block block-system clearfix">

      
  <article id="node-1216" class="node node-page clearfix" about="/simulation-configurator/" typeof="foaf:Document">
    <header>
            <span property="dc:title" content="We're on the job." class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>      </header>
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded">

    	<?php echo $form_data['text_area2']; ?>

<div><a class="btn btn-primary btn-sm" href="/simulation-configurator/"><?php echo $form_data['mx-field-174']; ?></a></div>
</div></div></div>    </article>

</section>
  </div>
            </section>

        </div>
<!-- success -->


	<div class="node-type-configurator">

		<!-- <div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
		</div> -->
		<div id="marker-xs"></div>
		<div id="marker-sm"></div>
		<div id="marker-md"></div>
		<div id="marker-lg"></div>
		<header>
		    <div class="container-fluid">
		        <div class="header-inner">
		            <ul class="list-inline nav">
		                <li><a href="#mx_planned_use" class="active"><span class="small">1.</span> <?php echo $form_data['mx-field-155']; ?></a></li>
		                <li><a href="#environment"><span class="small">2.</span> <?php echo $form_data['mx-field-156']; ?></a></li>
		                <li><a href="#components"><span class="small">3.</span> <?php echo $form_data['mx-field-157']; ?></a></li>
		                <li><a href="#add-ons"><span class="small">4.</span> <?php echo $form_data['mx-field-158']; ?></a></li>
						<li><a href="#add-technologies"><span class="small">5.</span> <?php echo $form_data['mx-field-159']; ?></a></li>
		                <li><a href="#review"><span class="small">6.</span> <?php echo $form_data['mx-field-160']; ?></a></li>
		                <li><a href="#share"><span class="small">7.</span> <?php echo $form_data['mx-field-161']; ?></a></li>
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
	            <h1 class="h2"><?php echo $form_data['mx-field-162']; ?></h1>
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

	                        <img class="var-image var-image--add-on var-image--sidewall-finish" src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/images/none.png?v=2" alt="Sidewall Finish">
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
	            <div class="simcon-main-footer"><?php echo $form_data['mx-field-163']; ?></div>
	        </div>
	        <div class="col-md-4 col-md-offset-8 simcon-aux">
	            <div class="simcon-select">
	                
                    <!-- planned use ... -->
                    <section class="section-mx_planned_use mx-normal-radio-button-check">
                        <a id="mx_planned_use" data-section-marker="" class="active"></a>

                        <p class="mx-fz-p17"><?php echo $form_data['mx-field-0']; ?></p>
                        <h2 class="section-title"><span class="small">1.</span> <?php echo $form_data['mx-field-1']; ?></h2>
                        <div class="section-summary">
                        </div>
                        <div class="panel-group accordion--b" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div id="collapse-getting-started" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                        <a id="mx-edit-question1"></a>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-2']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="edit-submitted-status" class="mx-normal-radio-button">

													<div>
														<label for="edit-submitted-status-1">
															
															<input  type="radio" id="edit-submitted-status-1" name="edit-submitted-status" value="<?php echo $form_data['mx-field-3']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-3']; ?>
														</label>
													</div>

													<div>
														<label for="edit-submitted-status-2">
															
															<input  type="radio" id="edit-submitted-status-2" name="edit-submitted-status" value="<?php echo $form_data['mx-field-4']; ?>" />
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-4']; ?>
														</label>
													</div>

												</div>

											</div>
										</div>

                                        <a id="mx-edit-question2"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-5']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question2" class="mx-normal-radio-button">

													<div>
														<label for="mx-question2_1">
															
															<input  type="radio" id="mx-question2_1" name="mx-question2" value="<?php echo $form_data['mx-field-6']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-6']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question2_2">
															
															<input  type="radio" id="mx-question2_2" name="mx-question2" value="<?php echo $form_data['mx-field-6']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-6']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question2_3">
															
															<input  type="radio" id="mx-question2_3" name="mx-question2" value="<?php echo $form_data['mx-field-8']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-8']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question2_4">
															
															<input  type="radio" id="mx-question2_4" name="mx-question2" value="<?php echo $form_data['mx-field-9']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-9']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question2_5">
															
															<input  type="radio" id="mx-question2_5" name="mx-question2" value="<?php echo $form_data['mx-field-10']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-10']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question2_6">
															
															<input  type="radio" id="mx-question2_6" name="mx-question2" value="<?php echo $form_data['mx-field-11']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-11']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question2_7">
															
															<input  type="radio" id="mx-question2_7" name="mx-question2" value="<?php echo $form_data['mx-field-12']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-12']; ?> 
														</label>
													</div>

													<p>
														<?php echo $form_data['mx-field-13']; ?>
													</p>

												</div>

											</div>
										</div>

										<a id="mx-edit-question3"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-14']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question3" class="mx-normal-radio-button">

													<div>
														<label for="mx-question3_1">
															
															<input  type="radio" id="mx-question3_1" name="mx-question3" value="<?php echo $form_data['mx-field-15']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-15']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question3_2">
															
															<input  type="radio" id="mx-question3_2" name="mx-question3" value="<?php echo $form_data['mx-field-16']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-16']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question3_3">
															
															<input  type="radio" id="mx-question3_3" name="mx-question3" value="<?php echo $form_data['mx-field-17']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-17']; ?>
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
                        <h2 class="section-title"><span class="small">2.</span> <?php echo $form_data['mx-field-18']; ?></h2>
                        <div class="section-summary">
                        </div>
                        <div class="panel-group accordion--b" role="tablist" aria-multiselectable="true">
                            
							<!--  -->
                            <div class="panel mx-normal-radio-button-check">
                                <div class="panel-heading" role="tab" id="heading-getting-started2">
                                    <h4 class="panel-title">
                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-componentsx" href="#collapse-getting-started2" aria-expanded="true" aria-controls="collapse-getting-started">
                                            <?php echo $form_data['mx-field-19']; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-getting-started2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                        <a id="q-status"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-20']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question4" class="mx-normal-radio-button">

													<div>
														<label for="mx-question4_1">
															
															<input  type="radio" id="mx-question4_1" name="mx-question4" value="<?php echo $form_data['mx-field-21']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-21']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question4_2">
															
															<input  type="radio" id="mx-question4_2" name="mx-question4" value="<?php echo $form_data['mx-field-22']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-22']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question4_3">
															
															<input  type="radio" id="mx-question4_3" name="mx-question4" value="<?php echo $form_data['mx-field-23']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-23']; ?>
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
                                            <?php echo $form_data['mx-field-24']; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-getting-started3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                    	<?php echo html_entity_decode( $form_data['text_area1'] ); ?>

                                        <a id="q-enough-space"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-25']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question5" class="mx-normal-radio-button">

													<div>
														<label for="mx-question5_1">
															
															<input  type="radio" id="mx-question5_1" name="mx-question5" value="<?php echo $form_data['mx-field-26']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-26']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question5_2">
															
															<input  type="radio" id="mx-question5_2" name="mx-question5" value="<?php echo $form_data['mx-field-27']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-27']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question5_3">
															
															<input  type="radio" id="mx-question5_3" name="mx-question5" value="<?php echo $form_data['mx-field-28']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>			
															<?php echo $form_data['mx-field-28']; ?>
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
                                            <?php echo $form_data['mx-field-29']; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-getting-started4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                    	<p>
                                    		<?php echo $form_data['mx-field-30']; ?>
                                    	</p>
                                
                                        <a id="q-location"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-31']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question6" class="mx-normal-radio-button">

													<div>
														<label for="mx-question6_1">
															
															<input  type="radio" id="mx-question6_1" name="mx-question6" value="<?php echo $form_data['mx-field-32']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-32']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question6_2">
															
															<input  type="radio" id="mx-question6_2" name="mx-question6" value="<?php echo $form_data['mx-field-33']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-33']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question6_3">
															
															<input  type="radio" id="mx-question6_3" name="mx-question6" value="<?php echo $form_data['mx-field-34']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-34']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question6_4">
															
															<input  type="radio" id="mx-question6_4" name="mx-question6" value="<?php echo $form_data['mx-field-35']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-35']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question6_5">
															
															<input  type="radio" id="mx-question6_5" name="mx-question6" value="<?php echo $form_data['mx-field-36']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-36']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question6_6">
															
															<input  type="radio" id="mx-question6_6" name="mx-question6" value="<?php echo $form_data['mx-field-37']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-37']; ?>
														</label>
													</div>

												</div>
											</div>
										</div>

										<a id="q-wall-construction"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-38']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question7" class="mx-normal-radio-button">

													<div>
														<label for="mx-question7_1">
															
															<input  type="radio" id="mx-question7_1" name="mx-question7" value="<?php echo $form_data['mx-field-39']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-39']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question7_2">
															
															<input  type="radio" id="mx-question7_2" name="mx-question7" value="<?php echo $form_data['mx-field-40']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-40']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question7_3">
															
															<input  type="radio" id="mx-question7_3" name="mx-question7" value="<?php echo $form_data['mx-field-41']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-41']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question7_4">
															
															<input  type="radio" id="mx-question7_4" name="mx-question7" value="<?php echo $form_data['mx-field-42']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-42']; ?>
														</label>
													</div>

												</div>
											</div>
										</div>

										<a id="q-floor-type"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-43']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question8" class="mx-normal-radio-button">

													<div>
														<label for="mx-question8_1">
															
															<input  type="radio" id="mx-question8_1" name="mx-question8" value="<?php echo $form_data['mx-field-44']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-44']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question8_2">
															
															<input  type="radio" id="mx-question8_2" name="mx-question8" value="<?php echo $form_data['mx-field-45']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-45']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question8_3">
															
															<input  type="radio" id="mx-question8_3" name="mx-question8" value="<?php echo $form_data['mx-field-46']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-46']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question8_4">
															
															<input  type="radio" id="mx-question8_4" name="mx-question8" value="<?php echo $form_data['mx-field-47']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-47']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question8_5">
															
															<input  type="radio" id="mx-question8_5" name="mx-question8" value="<?php echo $form_data['mx-field-48']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-48']; ?>
														</label>
													</div>

												</div>
											</div>
										</div>

										<a id="q-ceiling-type"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-49']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question9" class="mx-normal-radio-button">

													<div>
														<label for="mx-question9_1">
															
															<input  type="radio" id="mx-question9_1" name="mx-question9" value="<?php echo $form_data['mx-field-50']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-50']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question9_2">
															
															<input  type="radio" id="mx-question9_2" name="mx-question9" value="<?php echo $form_data['mx-field-51']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-51']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question9_3">
															
															<input  type="radio" id="mx-question9_3" name="mx-question9" value="<?php echo $form_data['mx-field-52']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-52']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question9_4">
															
															<input  type="radio" id="mx-question9_4" name="mx-question9" value="<?php echo $form_data['mx-field-53']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-53']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question9_5">
															
															<input  type="radio" id="mx-question9_5" name="mx-question9" value="<?php echo $form_data['mx-field-54']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-54']; ?>
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
                                            <?php echo $form_data['mx-field-55']; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-getting-started5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                    	<p>
                                    		<?php echo $form_data['mx-field-56']; ?>
                                    	</p>
                                
										<a id="q-ceilings"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-57']; ?>
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question10" class="mx-normal-radio-button">

													<div>
														<label for="mx-question10_1">
															
															<input  type="radio" id="mx-question10_1" name="mx-question10" value="<?php echo $form_data['mx-field-58']; ?>" checked="checked" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-58']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question10_2">
															
															<input  type="radio" id="mx-question10_2" name="mx-question10" value="<?php echo $form_data['mx-field-59']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-59']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question10_3">
															
															<input  type="radio" id="mx-question10_3" name="mx-question10" value="<?php echo $form_data['mx-field-60']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-60']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question10_4">
															
															<input  type="radio" id="mx-question10_4" name="mx-question10" value="<?php echo $form_data['mx-field-61']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-61']; ?>
														</label>
													</div>

												</div>
											</div>
										</div>

										<a id="q-obstructions"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-checkbox">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-62']; ?> 
											 <span class="form-required" title="This field is required.">*</span></label>

												<div id="mx-question11" class="mx-normal-radio-button">

													<div>
														<label for="mx-question11_1">
															
															<input  type="checkbox" id="mx-question11_1" name="mx-question11_1" value="<?php echo $form_data['mx-field-63']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															<?php echo $form_data['mx-field-63']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question11_2">
															
															<input  type="checkbox" id="mx-question11_2" name="mx-question11_2" value="<?php echo $form_data['mx-field-64']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															<?php echo $form_data['mx-field-64']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question11_3">
															
															<input  type="checkbox" id="mx-question11_3" name="mx-question11_3" value="<?php echo $form_data['mx-field-65']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															<?php echo $form_data['mx-field-65']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question11_4">
															
															<input  type="checkbox" id="mx-question11_4" name="mx-question11_4" value="<?php echo $form_data['mx-field-66']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															<?php echo $form_data['mx-field-66']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question11_5">
															
															<input  type="checkbox" id="mx-question11_5" name="mx-question11_5" value="<?php echo $form_data['mx-field-67']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															<?php echo $form_data['mx-field-67']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question11_6">
															
															<input  type="checkbox" id="mx-question11_6" name="mx-question11_6" value="<?php echo $form_data['mx-field-68']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															<?php echo $form_data['mx-field-68']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question11_7">
															
															<input  type="checkbox" id="mx-question11_7" name="mx-question11_7" value="<?php echo $form_data['mx-field-69']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-square-o"></i>
															<?php echo $form_data['mx-field-69']; ?>
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
	                        <h2 class="section-title"><span class="small">3.</span> <?php echo $form_data['mx-field-70']; ?></h2>
	                        <div class="section-summary">
	                            <p><?php echo $form_data['mx-field-71']; ?></p>
	                        </div>
	                        <div class="panel-group accordion--b" role="tablist" aria-multiselectable="true">

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-launch-monitor">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-componentsx" href="#collapse-launch-monitor" aria-expanded="true" aria-controls="collapse-launch-monitor">
	                                            <?php echo $form_data['mx-field-72']; ?>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-launch-monitor" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-launch-monitor">
	                                    <div class="panel-body">
	                                        <a id="q-launch-monitor"></a>
	                                        <div class="sub-section-summary">
	                                            <p><?php echo $form_data['mx-field-73']; ?></p>
	                                        </div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--launch-monitor form-group form-item form-item-submitted-launch-monitor form-type-radios form-group"> <label class="control-label" for="edit-submitted-launch-monitor"><?php echo $form_data['mx-field-74']; ?> <span class="form-required" title="This field is required.">*</span></label>
	<div id="edit-submitted-launch-monitor" class="form-radios"><div class="form-item form-item-submitted-launch-monitor form-type-radio radio"> <label class="control-label gcquad checked" for="edit-submitted-launch-monitor-1"><input  type="radio" id="edit-submitted-launch-monitor-1" name="submitted[launch_monitor]" value="gcquad" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-75']; ?></label>
	</div><div class="form-item form-item-submitted-launch-monitor form-type-radio radio"> <label class="control-label gchawk" for="edit-submitted-launch-monitor-2"><input  type="radio" id="edit-submitted-launch-monitor-2" name="submitted[launch_monitor]" value="gchawk" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-77']; ?></label>
	</div><div class="form-item form-item-submitted-launch-monitor form-type-radio radio"> <label class="control-label gc2" for="edit-submitted-launch-monitor-3"><input  type="radio" id="edit-submitted-launch-monitor-3" name="submitted[launch_monitor]" value="gc2" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-79']; ?></label>
	</div><div class="form-item form-item-submitted-launch-monitor form-type-radio radio"> <label class="control-label gchmt" for="edit-submitted-launch-monitor-4"><input  type="radio" id="edit-submitted-launch-monitor-4" name="submitted[launch_monitor]" value="gchmt" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-81']; ?></label>
	</div></div></div>                                        </div>
	                                        <div class="var-summaries var-summaries--launch-monitor var-summaries--extended">
	                                            <div class="var-summary var-summary--launch-monitor var-summary--launch-monitor--gcquad" style="display: block;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-75']; ?></h5>
	                                                <div><?php echo $form_data['mx-field-76']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--launch-monitor var-summary--launch-monitor--gchawk" style="display: none;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-77']; ?></h5>
	                                                <div><?php echo $form_data['mx-field-78']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--launch-monitor var-summary--launch-monitor--gc2" style="display: none;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-79']; ?></h5>
	                                                <div><?php echo $form_data['mx-field-80']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--launch-monitor var-summary--launch-monitor--gchmt" style="display: none;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-81']; ?></h5>
	                                                <div><?php echo $form_data['mx-field-82']; ?></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-computer">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-components" href="#collapse-computer" aria-expanded="true" aria-controls="collapse-computer">
	                                            <?php echo $form_data['mx-field-83']; ?>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-computer" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-computer">
	                                    <div class="panel-body">
	                                        <a id="q-computer"></a>
	                                        <div class="sub-section-summary">
	                                            <p><?php echo $form_data['mx-field-84']; ?></p>
	                                        </div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--computer form-group form-item form-item-submitted-computer form-type-radios form-group"> <label class="control-label" for="edit-submitted-computer"><?php echo $form_data['mx-field-85']; ?> <span class="form-required" title="This field is required.">*</span></label>
	<div id="edit-submitted-computer" class="form-radios"><div class="form-item form-item-submitted-computer form-type-radio radio"> <label class="control-label desktop checked" for="edit-submitted-computer-1"><input  type="radio" id="edit-submitted-computer-1" name="submitted[computer]" value="desktop" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-86']; ?></label>
	</div><div class="form-item form-item-submitted-computer form-type-radio radio"> <label class="control-label laptop" for="edit-submitted-computer-2"><input  type="radio" id="edit-submitted-computer-2" name="submitted[computer]" value="laptop" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-88']; ?></label>
	</div><div class="form-item form-item-submitted-computer form-type-radio radio"> <label class="control-label notapp" for="edit-submitted-computer-3"><input  type="radio" id="edit-submitted-computer-3" name="submitted[computer]" value="notapp" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>I already own a compatible computer and will use it.</label>
	</div></div></div>                                        </div>


	                                        <div class="var-summaries var-summaries--computer var-summaries--extended">
	                                            <div class="var-summary var-summary--computer var-summary--computer--desktop" style="display: block;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-86']; ?></h5>
	                                                <div class="body"><?php echo $form_data['mx-field-87']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--computer var-summary--computer--laptop" style="display: none;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-88']; ?></h5>
	                                                <div class="body"><?php echo $form_data['mx-field-89']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--computer var-summary--computer--notapp" style="display: none;">
	                                                <div class="body"><?php echo $form_data['mx-field-90']; ?></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-screen">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-components" href="#collapse-screen" aria-expanded="true" aria-controls="collapse-screen">
	                                            <?php echo $form_data['mx-field-91']; ?>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-screen" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-screen">
	                                    <div class="panel-body">
	                                        <a id="q-screen"></a>
	                                        <div class="sub-section-summary">
	                                            <p><?php echo $form_data['mx-field-92']; ?></p>
	                                        </div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--screen form-group form-item form-item-submitted-screen form-type-radios form-group"> <label class="control-label" for="edit-submitted-screen"><?php echo $form_data['mx-field-93']; ?> <span class="form-required" title="This field is required.">*</span></label>
	<div id="edit-submitted-screen" class="form-radios"><div class="form-item form-item-submitted-screen form-type-radio radio"> <label class="control-label flat checked" for="edit-submitted-screen-1"><input  type="radio" id="edit-submitted-screen-1" name="submitted[screen]" value="flat" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-94']; ?></label>
	</div>

	<div class="form-item form-item-submitted-screen form-type-radio radio">

		<label class="control-label curved mx_curved_label" for="edit-submitted-screen-2"><input  type="radio" id="edit-submitted-screen-2" name="submitted[screen]" value="curved_2" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-96']; ?></label>
	</div>

	<div class="form-item form-item-submitted-screen form-type-radio radio"> <label class="control-label net_return" for="edit-submitted-screen-3"><input  type="radio" id="edit-submitted-screen-3" name="submitted[screen]" value="net_return" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-98']; ?></label>
	</div></div></div>                                        </div>

	                                        <div class="var-summaries var-summaries--screen var-summaries--extended">
	                                            <div class="var-summary var-summary--screen var-summary--screen--flat" style="display: block;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-94']; ?></h5>
	                                                <div class="body"><?php echo $form_data['mx-field-95']; ?></div>
	                                            </div>
	                                           <div class="var-summary var-summary--screen var-summary--screen--curved_2" style="display: none;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-96']; ?></h5>
	                                                <div class="body"><?php echo $form_data['mx-field-97']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--screen var-summary--screen--net_return" style="display: none;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-98']; ?></h5>
	                                                <div class="body"><?php echo $form_data['mx-field-99']; ?></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-projector">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-components" href="#collapse-projector" aria-expanded="true" aria-controls="collapse-projector">
	                                            <?php echo $form_data['mx-field-100']; ?>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-projector" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-projector">
	                                    <div class="panel-body">
	                                        <a id="q-projector"></a>
	                                        <div class="sub-section-summary">
	                                            <p><?php echo $form_data['mx-field-101']; ?></p>
	                                        </div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--projector form-group form-item form-item-submitted-projector form-type-radios form-group"> <label class="control-label" for="edit-submitted-projector"><?php echo $form_data['mx-field-102']; ?>  <span class="form-required" title="This field is required.">*</span></label>
	<div id="edit-submitted-projector" class="form-radios"><div class="form-item form-item-submitted-projector form-type-radio radio"> <label class="control-label standard checked" for="edit-submitted-projector-1"><input  type="radio" id="edit-submitted-projector-1" name="submitted[projector]" value="standard" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Standard Projector</label>
	</div><div class="form-item form-item-submitted-projector form-type-radio radio"> <label class="control-label premium" for="edit-submitted-projector-2"><input  type="radio" id="edit-submitted-projector-2" name="submitted[projector]" value="premium" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Premium Projector</label>
	</div><div class="form-item form-item-submitted-projector form-type-radio radio"> <label class="control-label notapp" for="edit-submitted-projector-3"><input  type="radio" id="edit-submitted-projector-3" name="submitted[projector]" value="notapp" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>I already own a compatible projector and will use it</label>
	</div><div class="form-item form-item-submitted-projector form-type-radio radio"> <label class="control-label notapp_net" for="edit-submitted-projector-4"><input  type="radio" id="edit-submitted-projector-4" name="submitted[projector]" value="notapp_net" class="form-radio"><i class="fa fa-fw fa-circle-o"></i>Not applicable as I will be using a net return</label>
	</div></div></div>                                        </div>

	                                        <div class="var-summaries var-summaries--projector var-summaries--extended">
	                                            <div class="var-summary var-summary--projector var-summary--projector--standard" style="display: block;">
	                                                <div class="body"><?php echo $form_data['mx-field-103']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--projector var-summary--projector--premium" style="display: none;">
	                                                <div class="body"><?php echo $form_data['mx-field-104']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--projector var-summary--projector--notapp" style="display: none;">
	                                                <div class="body"><?php echo $form_data['mx-field-105']; ?></div>
	                                            </div>
	                                            <div class="var-summary var-summary--projector var-summary--projector--notapp_net" style="display: none;">
	                                                <div class="body"><?php echo $form_data['mx-field-175']; ?></div>
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
	                                            <?php echo $form_data['mx-field-106']; ?>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-software" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-software">
	                                    <div class="panel-body">	                                        
	                                        <div class="sub-section-summary"></div>
	                                        <div class="form-item-wrapper thumbs">
	                                            <div class="form-item webform-component webform-component-radios webform-component--software form-group form-item form-item-submitted-software form-type-radios form-group"><div id="edit-submitted-software" class="form-radios"><div class="form-item form-item-submitted-software form-type-radio radio"> <label class="control-label fsx_2018 checked" for="edit-submitted-software-1"><input  type="radio" id="edit-submitted-software-1" name="submitted[software]" value="fsx_2018" checked="checked" class="form-radio"><i class="fa fa-fw fa-circle-o"></i><?php echo $form_data['mx-field-107']; ?></label>
	</div></div>
	<!-- <label class="control-label element-invisible" for="edit-submitted-software">FSX 2018 is... <span class="form-required" title="This field is required.">*</span></label> -->

	</div>                                        </div>

	                                        <div class="var-summaries var-summaries--software var-summaries--extended">
	                                            <div class="var-summary var-summary--software var-summary--software--fsx_2018" style="display: block;">
	                                                <h5 class="title"><?php echo $form_data['mx-field-107']; ?></h5>
	                                                <div class="body"><?php echo $form_data['mx-field-108']; ?></div>
	                                            </div>
	                                        </div>

	                                        <!--  -->
	                                        <!-- <a id="q-status"></a> -->
                                        	<br>
	                                        <div class="form-item-wrapper thumbs">
												<div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-109']; ?></label>

												</div>

												<p>
													<?php echo $form_data['mx-field-110']; ?>
												</p>
											</div>

											<a id="mx-edit-question4"></a>
	                                        <br>
	                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
	                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-111']; ?>
												 <span class="form-required" title="This field is required.">*</span></label>

													<div id="mx-question12" class="mx-normal-radio-button">

														<div>
															<label for="mx-question12_1">
																
																<input  type="radio" id="mx-question12_1" name="mx-question12" checked="checked" value="<?php echo $form_data['mx-field-112']; ?>" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																<?php echo $form_data['mx-field-112']; ?>
															</label>
														</div>

														<div>
															<label for="mx-question12_2">
																
																<input  type="radio" id="mx-question12_2" name="mx-question12" value="<?php echo $form_data['mx-field-113']; ?>" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																<?php echo $form_data['mx-field-113']; ?>
															</label>
														</div>

														<div>
															<label for="mx-question12_3">
																
																<input  type="radio" id="mx-question12_3" name="mx-question12" value="<?php echo $form_data['mx-field-114']; ?>" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																<?php echo $form_data['mx-field-114']; ?>
															</label>
														</div>

														<div>
															<label for="mx-question12_4">
																
																<input  type="radio" id="mx-question12_4" name="mx-question12" value="<?php echo $form_data['mx-field-115']; ?>" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																<?php echo $form_data['mx-field-115']; ?>
															</label>
														</div>

														<div>
															<label for="mx-question12_5">
																
																<input  type="radio" id="mx-question12_5" name="mx-question12" value="<?php echo $form_data['mx-field-116']; ?>" class="form-radio">	
																<i class="fa fa-fw fa-circle-o"></i>
																<?php echo $form_data['mx-field-116']; ?>
															</label>
														</div>

													</div>
												</div>
											</div>

											<div class="mx-footbal-skills" style="display: none;">
												<a id="mx-edit-question5"></a>
		                                        <br>
		                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
		                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-117']; ?>
													</label>

													<p>
														<?php echo $form_data['mx-field-118']; ?>
													</p>

														<!-- not required -->
														<div id="mx-question14" class="mx-normal-radio-button">

															<div>
																<label for="mx-question14_1">
																	
																	<input  type="radio" id="mx-question14_1" name="mx-question14" checked="checked" value="<?php echo $form_data['mx-field-119']; ?>" class="form-radio">	
																	<i class="fa fa-fw fa-circle-o"></i>
																	<?php echo $form_data['mx-field-119']; ?>
																</label>
															</div>

															<div>
																<label for="mx-question14_2">
																	
																	<input  type="radio" id="mx-question14_2" name="mx-question14" value="<?php echo $form_data['mx-field-120']; ?>" class="form-radio">	
																	<i class="fa fa-fw fa-circle-o"></i>
																	<?php echo $form_data['mx-field-120']; ?>
																</label>
															</div>

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
	                        <h2 class="section-title"><span class="small">4.</span> <?php echo $form_data['mx-field-121']; ?></h2>
	                        <div class="section-summary">
	                            <p><?php echo $form_data['mx-field-122']; ?></p>
	                        </div>
	                        <div class="panel-group accordion--b" id="accordion-add-ons" role="tablist" aria-multiselectable="true">
	                            <div class="panel">
	                                <div class="panel-heading" role="tab" id="heading-sidewall-finish">
	                                    <h4 class="panel-title">
	                                        <a class="d-block" role="button" data-toggle="collapse" data-parent="#accordion-add-onsx" href="#collapse-sidewall-finish" aria-expanded="true" aria-controls="collapse-sidewall-finish">
	                                            <?php echo $form_data['mx-field-123']; ?>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-sidewall-finish" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-sidewall-finish">
	                                    <div class="panel-body">
	                                        <a id="q-sidewall-finish"></a>
	                                        <div class="form-item-wrapper mx-normal-radio-button">
	                                            <div class="form-item webform-component webform-component-radios webform-component--sidewall-finish form-group form-item form-item-submitted-sidewall-finish form-type-radios form-group"><div id="edit-submitted-sidewall-finish" class="form-radios"><div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label checked" for="edit-submitted-sidewall-finish-1"><input type="radio" id="edit-submitted-sidewall-finish-1" name="submitted[sidewall_finish]" value="none" checked="checked" class="form-radio">
	                                            <i class="fa fa-fw fa-circle-o"></i>
	                                            <?php echo $form_data['mx-field-124']; ?> </label>
	</div><div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label" for="edit-submitted-sidewall-finish-2"><input type="radio" id="edit-submitted-sidewall-finish-2" name="submitted[sidewall_finish]" value="carpet_tiles" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	<?php echo $form_data['mx-field-125']; ?></label>
	</div><div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label" for="edit-submitted-sidewall-finish-3"><input type="radio" id="edit-submitted-sidewall-finish-3" name="submitted[sidewall_finish]" value="acoustic_tiles" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	<?php echo $form_data['mx-field-126']; ?></label>
	</div>

	<div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label" for="edit-submitted-sidewall-finish-4"><input type="radio" id="edit-submitted-sidewall-finish-4" name="submitted[sidewall_finish]" value="curtains" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	Inside/outside retractable hitting screen with side curtains</label>
	</div>

	<div class="form-item form-item-submitted-sidewall-finish form-type-radio radio"> <label class="control-label" for="edit-submitted-sidewall-finish-4_1"><input type="radio" id="edit-submitted-sidewall-finish-4_1" name="submitted[sidewall_finish]" value="canval_value" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	<?php echo $form_data['mx-field-127']; ?></label>
	</div>

	<div class="form-item form-item-submitted-sidewall-finish form-type-radio radio" style="display: none;"> <label class="control-label" for="edit-submitted-sidewall-finish-5"><input type="radio" id="edit-submitted-sidewall-finish-5" name="submitted[sidewall_finish]" value="notapp_net" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	<?php echo $form_data['mx-field-128']; ?></label>
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
	                                            <?php echo $form_data['mx-field-129']; ?>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-hitting-mat" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-hitting-mat">
	                                    <div class="panel-body">
	                                        <a id="q-hitting-mat"></a>
	                                        <div class="form-item-wrapper mx-normal-radio-button">
	                                            <div class="form-item webform-component webform-component-radios webform-component--hitting-mat form-group form-item form-item-submitted-hitting-mat form-type-radios form-group"><div id="edit-submitted-hitting-mat" class="form-radios"><div class="form-item form-item-submitted-hitting-mat form-type-radio radio"> <label class="control-label checked" for="edit-submitted-hitting-mat-1"><input type="radio" id="edit-submitted-hitting-mat-1" name="submitted[hitting_mat]" value="none" checked="checked" class="form-radio">
	                                            <i class="fa fa-fw fa-circle-o"></i>
	                                            <?php echo $form_data['mx-field-130']; ?></label>
	</div><div class="form-item form-item-submitted-hitting-mat form-type-radio radio"> <label class="control-label" for="edit-submitted-hitting-mat-2"><input type="radio" id="edit-submitted-hitting-mat-2" name="submitted[hitting_mat]" value="standard_mat" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	<?php echo $form_data['mx-field-131']; ?></label>
	</div><div class="form-item form-item-submitted-hitting-mat form-type-radio radio"> <label class="control-label" for="edit-submitted-hitting-mat-3"><input type="radio" id="edit-submitted-hitting-mat-3" name="submitted[hitting_mat]" value="double_strike_mat" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	<?php echo $form_data['mx-field-132']; ?></label>
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
	                                            <?php echo $form_data['mx-field-133']; ?>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapse-computer-cabinet" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-computer-cabinet">
	                                    <div class="panel-body mx-normal-radio-button">
	                                        <a id="q-computer-cabinet"></a>
	                                        <div class="form-item-wrapper">
	                                            <div class="form-item webform-component webform-component-radios webform-component--computer-cabinet form-group form-item form-item-submitted-computer-cabinet form-type-radios form-group"><div id="edit-submitted-computer-cabinet" class="form-radios"><div class="form-item form-item-submitted-computer-cabinet form-type-radio radio"> <label class="control-label checked" for="edit-submitted-computer-cabinet-1"><input type="radio" id="edit-submitted-computer-cabinet-1" name="submitted[computer_cabinet]" value="none" checked="checked" class="form-radio">
	                                            <i class="fa fa-fw fa-circle-o"></i>
	                                            <?php echo $form_data['mx-field-134']; ?></label>
	</div><div class="form-item form-item-submitted-computer-cabinet form-type-radio radio"> <label class="control-label" for="edit-submitted-computer-cabinet-2"><input type="radio" id="edit-submitted-computer-cabinet-2" name="submitted[computer_cabinet]" value="low_profile_cabinet_cooling_fan" class="form-radio">
	<i class="fa fa-fw fa-circle-o"></i>
	<?php echo $form_data['mx-field-135']; ?></label>
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
                        <h2 class="section-title"><span class="small">5.</span> <?php echo $form_data['mx-field-136']; ?></h2>
                        <div class="section-summary">
                        </div>
                        <div class="panel-group accordion--b" role="tablist" aria-multiselectable="true">
                        	<p>
                        		<?php echo $form_data['mx-field-137']; ?>
                        	</p>

                            <div class="panel">

                                <div id="collapse-getting-started" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-getting-started">
                                    <div class="panel-body">

                                        <a id="mx-edit-question6"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-138']; ?>
											</label>

											<p>
												<?php echo $form_data['mx-field-139']; ?>
											</p>

												<!-- not required -->
												<div id="mx-question15" class="mx-normal-radio-button">

													<div>
														<label for="mx-question15_1">
															
															<input  type="radio" id="mx-question15_1" name="mx-question15" checked="checked" value="<?php echo $form_data['mx-field-140']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-140']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question15_2">
															
															<input  type="radio" id="mx-question15_2" name="mx-question15" value="<?php echo $form_data['mx-field-141']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-141']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question15_3">
															
															<input  type="radio" id="mx-question15_3" name="mx-question15" value="<?php echo $form_data['mx-field-142']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-142']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question15_4">
															
															<input  type="radio" id="mx-question15_4" name="mx-question15" value="<?php echo $form_data['mx-field-143']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-143']; ?>
														</label>
													</div>


												</div>
											</div>
										</div>

										<a id="mx-edit-question7"></a>
                                        <br>
                                        <div class="form-item-wrapper thumbs mx-normal-radio-button-check">
                                            <div class="form-item webform-component webform-component-radios webform-component--status form-group form-item form-item-submitted-status form-type-radios form-group"> <label class="control-label"><?php echo $form_data['mx-field-144']; ?>
											</label>

											<p>
												<?php echo $form_data['mx-field-145']; ?>
											</p>

												<!-- not required -->
												<div id="mx-question16" class="mx-normal-radio-button">

													<div>
														<label for="mx-question16_1">
															
															<input  type="radio" id="mx-question16_1" name="mx-question16" checked="checked" value="<?php echo $form_data['mx-field-146']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-146']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question16_2">
															
															<input  type="radio" id="mx-question16_2" name="mx-question16" value="<?php echo $form_data['mx-field-147']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-147']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question16_3">
															
															<input  type="radio" id="mx-question16_3" name="mx-question16" value="<?php echo $form_data['mx-field-148']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-148']; ?>
														</label>
													</div>

													<div>
														<label for="mx-question16_4">
															
															<input  type="radio" id="mx-question16_4" name="mx-question16" value="<?php echo $form_data['mx-field-149']; ?>" class="form-radio">	
															<i class="fa fa-fw fa-circle-o"></i>
															<?php echo $form_data['mx-field-149']; ?>
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
	                        <h2 class="section-title"><span class="small">6.</span> <?php echo $form_data['mx-field-150']; ?></h2>
	                        <div class="section-summary">
	                            <p><?php echo $form_data['mx-field-151']; ?></p>
	                        </div>
	                            <ul class="rl">

	                            	<li class="rl-section">
	                                    <div class="rl-section-title"><?php echo $form_data['mx-field-155']; ?></div>
	                                    <ul>
	                                        <li class="rl-category rl-category--getting-started">
	                                            <ul>
	                                                <li class="qa qa--status">
	                                                    <div class="question"><?php echo $form_data['mx-field-2']; ?></div>
	                                                    <ul>
	                                                        <li id="edit-submitted-status-show"><?php echo $form_data['mx-field-3']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#mx-edit-question1">edit</a>
	                                                </li>

	                                                <li class="qa qa--status">
	                                                    <div class="question"><?php echo $form_data['mx-field-5']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question2-show"><?php echo $form_data['mx-field-6']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#mx-edit-question2">edit</a>
	                                                </li>

	                                                <li class="qa qa--status">
	                                                    <div class="question"><?php echo $form_data['mx-field-14']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question3-show"><?php echo $form_data['mx-field-15']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#mx-edit-question3">edit</a>
	                                                </li>

	                                            </ul>
	                                        </li>
                                 	                                 
	                                    </ul>
	                                </li>

	                                <li class="rl-section">
	                                    <div class="rl-section-title"><?php echo $form_data['mx-field-18']; ?></div>
	                                    <ul>
	                                        <li class="rl-category rl-category--getting-started">
	                                            <div class="rl-category-title"><?php echo $form_data['mx-field-19']; ?></div>
	                                            <ul>
	                                                <li class="qa qa--status">
	                                                    <div class="question"><?php echo $form_data['mx-field-20']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question4-show"><?php echo $form_data['mx-field-21']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-status">edit</a>
	                                                </li>
	                                            </ul>
	                                        </li>

	                                        <li class="rl-category rl-category--space">
	                                            <div class="rl-category-title"><?php echo $form_data['mx-field-24']; ?></div>
	                                            <ul>
	                                                <li class="qa qa--enough-space">
	                                                    <div class="question"><?php echo $form_data['mx-field-25']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question5-show"><?php echo $form_data['mx-field-26']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-enough-space">edit</a>
	                                                </li>
	                                            </ul>
	                                        </li>


	                                        <li class="rl-category rl-category--structural-details">
	                                            <div class="rl-category-title"><?php echo $form_data['mx-field-29']; ?></div>
	                                            <ul>
	                                                <li class="qa qa--location">
	                                                    <div class="question"><?php echo $form_data['mx-field-31']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question6-show"><?php echo $form_data['mx-field-32']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-location">edit</a>
	                                                </li>
	                                                <li class="qa qa--wall-construction">
	                                                    <div class="question"><?php echo $form_data['mx-field-38']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question7-show"><?php echo $form_data['mx-field-39']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-wall-construction">edit</a>
	                                                </li>
	                                                <li class="qa qa--floor-type">
	                                                    <div class="question"><?php echo $form_data['mx-field-43']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question8-show"><?php echo $form_data['mx-field-44']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-floor-type">edit</a>
	                                                </li>
	                                                <li class="qa qa--ceiling-type">
	                                                    <div class="question"><?php echo $form_data['mx-field-49']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question9-show"><?php echo $form_data['mx-field-50']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-ceiling-type">edit</a>
	                                                </li>
	                                            </ul>
	                                        </li>
	                                        <li class="rl-category rl-category--architectural-details">
	                                            <div class="rl-category-title"><?php echo $form_data['mx-field-55']; ?></div>
	                                            <ul>
	                                                <li class="qa qa--ceilings">
	                                                    <div class="question"><?php echo $form_data['mx-field-57']; ?></div>
	                                                    <ul>
	                                                        <li id="mx-question10-show"><?php echo $form_data['mx-field-58']; ?></li>
	                                                    </ul>
	                                                    <a class="edit" href="#q-ceilings">edit</a>
	                                                </li>
	                                                <li class="qa qa--obstructions">
	                                                    <div class="question"><?php echo $form_data['mx-field-62']; ?></div>
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
	                                    <div class="rl-section-title"><?php echo $form_data['mx-field-70']; ?></div>
	                                    <ul>
	                                        <li class="qa qa--launch-monitor">
	                                            <div class="question"><?php echo $form_data['mx-field-72']; ?></div>
	                                            <ul>
	                                                <li id="mx-question_1"><?php echo $form_data['mx-field-75']; ?></li>
	                                            </ul>
	                                            <a class="edit" href="#q-launch-monitor">edit</a>
	                                        </li>
	                                        <li class="qa qa--computer">
	                                            <div class="question"><?php echo $form_data['mx-field-83']; ?>:</div>
	                                            <ul>
	                                                <li id="mx-question_2"><?php echo $form_data['mx-field-86']; ?></li>
	                                            </ul>
	                                            <a class="edit" href="#q-computer">edit</a>
	                                        </li>
	                                        <li class="qa qa--screen">
	                                            <div class="question"><?php echo $form_data['mx-field-91']; ?>:</div>
	                                            <ul>
	                                                <li id="mx-question_3">Flat</li>
	                                            </ul>
	                                            <a class="edit" href="#q-screen">edit</a>
	                                        </li>
	                                        <li class="qa qa--projector">
	                                            <div class="question"><?php echo $form_data['mx-field-100']; ?>:</div>
	                                            <ul>
	                                                <li id="mx-question_4">Standard Projector</li>
	                                            </ul>
	                                            <a class="edit" href="#q-projector">edit</a>
	                                        </li>
	                                        <li class="qa qa--software">
	                                            <div class="question"><?php echo $form_data['mx-field-106']; ?></div>
	                                            <ul>
	                                                <li id="mx-question_5"><?php echo $form_data['mx-field-107']; ?></li>
	                                            </ul>
	                                            <a class="edit" href="#q-software">edit</a>
	                                        </li>

	                                        <li class="qa qa--course_options">
	                                            <div class="question"><?php echo $form_data['mx-field-111']; ?></div>
	                                            <ul>
	                                                <li id="mx-question12-show"> <?php echo $form_data['mx-field-112']; ?></li>
	                                            </ul>
	                                            <a class="edit" href="#mx-edit-question4">edit</a>
	                                        </li>
	                                        <div class="mx-footbal-skills" style="display: none;">
		                                        <li class="qa qa--futball_skills">
		                                            <div class="question"><?php echo $form_data['mx-field-117']; ?></div>
		                                            <ul>
		                                                <li id="mx-question14-show"><?php echo $form_data['mx-field-119']; ?></li>
		                                            </ul>
		                                            <a class="edit" href="#mx-edit-question5">edit</a>
		                                        </li>
	                                        </div>                                       

	                                    </ul>
	                                </li>
	                                <li class="rl-section">
	                                    <div class="rl-section-title"><?php echo $form_data['mx-field-121']; ?></div>
	                                    <ul>
	                                        <li class="qa qa--sidewall-finish">
	                                            <div class="question"><?php echo $form_data['mx-field-123']; ?>:</div>
	                                            <ul>
	                                                <li id="mx-question_6"><?php echo $form_data['mx-field-124']; ?></li>
	                                            </ul>
	                                            <a class="edit" href="#q-sidewall-finish">edit</a>
	                                        </li>
	                                        <li class="qa qa--hitting-mat">
	                                            <div class="question"><?php echo $form_data['mx-field-129']; ?></div>
	                                            <ul>
	                                                <li id="mx-question_7"><?php echo $form_data['mx-field-130']; ?></li>
	                                            </ul>
	                                            <a class="edit" href="#q-hitting-mat">edit</a>
	                                        </li>
	                                        <li class="qa qa--computer-cabinet">
	                                            <div class="question"><?php echo $form_data['mx-field-133']; ?>:</div>
	                                            <ul>
	                                                <li id="mx-question_8"><?php echo $form_data['mx-field-134']; ?></li>
	                                            </ul>
	                                            <a class="edit" href="#q-computer-cabinet">edit</a>
	                                        </li>
	                                    </ul>
	                                </li>

	                                <li class="rl-section">
	                                    <div class="rl-section-title"><?php echo $form_data['mx-field-136']; ?></div>
	                                    <ul>
	                                        <li class="qa qa--sidewall-finish-">
	                                            <div class="question"><?php echo $form_data['mx-field-138']; ?>:</div>
	                                            <ul>
	                                                <li id="mx-question15-show"><?php echo $form_data['mx-field-140']; ?></li>
	                                            </ul>
	                                            <a class="edit" href="#mx-edit-question6">edit</a>
	                                        </li>
	                                        <li class="qa qa--sidewall-finish--">
	                                            <div class="question"><?php echo $form_data['mx-field-144']; ?>:</div>
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
	                        <h2 class="section-title"><span class="small">7.</span> <?php echo $form_data['mx-field-152']; ?></h2>
	                        <div class="section-summary">
	                            <?php echo $form_data['mx-field-153']; ?>
	                        </div>
	                        <div class="container-fluid">

	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-select webform-component--market form-group form-item form-item-submitted-market form-type-select form-group"> <label class="control-label" for="edit-submitted-market"><?php echo $form_data['mx-field-165']; ?> <span class="form-required" title="This field is required.">*</span></label>
	<select required="required" class="form-control form-select required" id="edit-submitted-market" name="submitted[market]"><option value="UK & Ireland" selected="selected">UK & Ireland</option>
		<option value="Europe">Europe</option><option value="euuksales@foresightsports.com">Europe / UK</option>
		<option value="Middle East">Middle East</option>
		<option value="Africa">Africa</option>
		<option value="Other">Other</option>

		</select></div>                            </div>
	                            <div class="form-item-wrapper">
	                                                            </div>

	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textfield webform-component--first-name form-group form-item form-item-submitted-first-name form-type-textfield form-group"> <label class="control-label" for="edit-submitted-first-name"><?php echo $form_data['mx-field-166']; ?> <span class="form-required" title="This field is required.">*</span></label>
	<input required="required" class="form-control form-text required" type="text" id="edit-submitted-first-name" name="submitted[first_name]" value="" size="60" maxlength="128"></div>                            </div>
	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textfield webform-component--last-name form-group form-item form-item-submitted-last-name form-type-textfield form-group"> <label class="control-label" for="edit-submitted-last-name"><?php echo $form_data['mx-field-167']; ?> <span class="form-required" title="This field is required.">*</span></label>
	<input required="required" class="form-control form-text required" type="text" id="edit-submitted-last-name" name="submitted[last_name]" value="" size="60" maxlength="128"></div>                            </div>
	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textfield webform-component--email form-group form-item form-item-submitted-email form-type-textfield form-group"> <label class="control-label" for="edit-submitted-email"><?php echo $form_data['mx-field-168']; ?> <span class="form-required" title="This field is required.">*</span></label>
	<input required="required" class="form-control form-text required" type="text" id="edit-submitted-email" name="submitted[email]" value="" size="60" maxlength="128"></div>                            </div>
	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textfield webform-component--phone form-group form-item form-item-submitted-phone form-type-textfield form-group"> <label class="control-label" for="edit-submitted-phone"><?php echo $form_data['mx-field-169']; ?></label>
	<input class="form-control form-text" type="text" id="edit-submitted-phone" name="submitted[phone]" value="" size="60" maxlength="128"></div>                            </div>

	                            <div class="form-item-wrapper">
	                                <div class="form-item webform-component webform-component-textarea webform-component--additional form-group form-item form-item-submitted-additional form-type-textarea form-group"> <label class="control-label" for="edit-submitted-additional"><?php echo $form_data['mx-field-170']; ?></label>
	<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea class="form-control form-textarea" id="edit-submitted-additional" name="submitted[additional]" cols="60" rows="5"></textarea><div class="grippie"></div></div></div>                            </div>
	                            
	                        </div>
	                    </section>

	                    <input type="hidden" id="mxvfos_wpnonce_request" name="mxvfos_wpnonce_request" value="<?php echo wp_create_nonce( 'mxvfos_wpnonce_request' ) ;?>" />
	                                       
	<div class="form-actions">
		<p>
			<?php echo $form_data['mx-field-154']; ?>
		</p>

		<br>

        <button class="webform-submit button-primary btn btn-primary form-submit" type="submit" name="op" id="mx_submit_button" value="Submit"><?php echo $form_data['mx-field-171']; ?></button>

        <div class="mx-sending-progress" style="display: none; color: green;">
        	<br>
        	Sending Progress...
        </div>

       

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

	<script src="<?php echo MXVFOS_PLUGIN_URL; ?>includes/frontend/assets/js/main.js"></script>
	

	


	</div>

	</form>
	</section>
	</div>
	</div></div></div>
	</section>
	</div>
	</div>

</div>

	<script>
		jQuery( document ).ready( function( $ ) {
			$( 'input[name="submitted[launch_monitor]"]' ).on( 'change', function() {

				if( $( this ).val() === 'gchawk' ) {

					$( '.mx-footbal-skills' ).show();

				} else {

					$( '.mx-footbal-skills' ).hide();

				}

			} );
		} );
	</script>

		<?php return ob_get_clean();

		} );

	}
}