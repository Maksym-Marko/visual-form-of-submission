<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Main page Model
*/
class MXVFOS_Main_Page_Model extends MXVFOS_Model
{

	/*
	* Observe function
	*/
	public static function mxvfos_wp_ajax()
	{

		add_action( 'wp_ajax_mxvfos_update_form_data', array( 'MXVFOS_Main_Page_Model', 'prepare_update_form_data' ), 10, 1 );

	}

	/*
	* Prepare for data updates
	*/
	public static function prepare_update_form_data()
	{
		
		// Checked POST nonce is not empty
		if( empty( $_POST['nonce'] ) ) wp_die( '0' );

		// Checked or nonce match
		if( wp_verify_nonce( $_POST['nonce'], 'mxvfos_nonce_request' ) ){

			// Update data
			self::update_form_data( $_POST );		

		}

		wp_die();

	}

		// Update data
		public static function update_form_data( $_post )
		{

			$data_array = array();

			foreach ( $_post['data_obj'] as $key => $value ) {

				$data_array[$key] = sanitize_text_field( $value );

			}

			$text_area1 = wp_kses_post( $_post['text_area1'] );

			$data_array['text_area1'] = preg_replace( '/\r|\n/', '', $text_area1 );

			$text_area2 = wp_kses_post( $_post['text_area2'] );

			$data_array['text_area2'] = preg_replace( '/\r|\n/', '', $text_area2 );
			

			$option_data = maybe_serialize( $data_array );

			echo update_option( '_mx_visual_form_options', $option_data );

		}	

	public function mxvfos_get_form_data()
	{

		$form_options = get_option( '_mx_visual_form_options' );

		$form_options = maybe_unserialize( $form_options );

		return $form_options;
	}

	public static function mxvfos_set_form_data()
	{

		if( !get_option( '_mx_visual_form_options' ) ) {

			$data_options = self::mxvfos_form_data();

			$data_options = maybe_serialize( $data_options );

			add_option( '_mx_visual_form_options', $data_options );

		}
		
	}

	public static function mxvfos_form_data()
	{

		return array (
			  'mx-field-0' => 'Our Performance Simulation solutions are designed with your personal specifications in mind. With our easy online app, you&apos;ll learn the basic space requirements and components needed to start designing your own Performance Simulation solution. Along the way, we’ll help you build your personal wish list of components to make the process of realising your dream golf simulator even faster and easier.',
			  'mx-field-1' => 'Planned Use',
			  'mx-field-2' => 'Before we get into the specifics of your simulator, can you tell us a little about how you plan to use the technology? Please select from the options below that best describe your planned use of the simulator.',
			  'mx-field-3' => 'I&apos;m looking for a simulator for personal use, and with family and friends',
			  'mx-field-4' => 'I&apos;m looking for a simulator for use within a business environment',
			  'mx-field-5' => 'Please select from below the option that best describes how the simulator will be used once installed.',
			  'mx-field-6' => 'Private Home Entertainment',
			  'mx-field-7' => 'Golf Club',
			  'mx-field-8' => 'Teaching Academy',
			  'mx-field-9' => 'Club Fitting',
			  'mx-field-10' => 'Indoor Golf Centre',
			  'mx-field-11' => 'Corporate/Office Space',
			  'mx-field-12' => 'Gym/Health Club/Other Sports',
			  'mx-field-13' => 'Why is this important? Understanding how you plan to use the space helps us determine the best components (such as wall construction or flooring) for ensuring safety, function, and aesthetics.',
			  'mx-field-14' => 'Do you currently have a golf simulator?',
			  'mx-field-15' => 'No',
			  'mx-field-16' => 'Yes, but I want to completely replace it',
			  'mx-field-17' => 'Yes, but I want to upgrade the technology',
			  'mx-field-18' => 'Environment',
			  'mx-field-19' => 'Getting Started',
			  'mx-field-20' => 'Please select from below the option that best describes the environment into which you&apos;re planning to locate your simulator.',
			  'mx-field-21' => 'I&apos;m planning to use a room/area in an existing building',
			  'mx-field-22' => 'I&apos;m designing a room/area in a building now being constructed',
			  'mx-field-23' => 'I&apos;m planning to construct a new building and am still in the design phase',
			  'mx-field-24' => 'Space',
			  'mx-field-25' => 'Please select from below the option that best describes your available space.',
			  'mx-field-26' => 'I have enough space for a Performance Simulator!',
			  'mx-field-27' => 'I may not have enough but want to discuss what we can do within my space',
			  'mx-field-28' => 'I do not have enough space but would like to learn more about alternatives such as net solutions',
			  'mx-field-29' => 'Structural Details',
			  'mx-field-30' => 'Please tell us a little about the location and construction of the room/area you&apos;re planning to use for your Performance Simulator.',
			  'mx-field-31' => 'Location:',
			  'mx-field-32' => 'Basement',
			  'mx-field-33' => 'Ground floor room',
			  'mx-field-34' => 'Upper floor room',
			  'mx-field-35' => 'Garage',
			  'mx-field-36' => 'Outbuilding/Shed',
			  'mx-field-37' => 'Other',
			  'mx-field-38' => 'Wall construction:',
			  'mx-field-39' => 'Brick',
			  'mx-field-40' => 'Concrete',
			  'mx-field-41' => 'Stud with plaster',
			  'mx-field-42' => 'Other',
			  'mx-field-43' => 'Floor type:',
			  'mx-field-44' => 'Carpet',
			  'mx-field-45' => 'Wood',
			  'mx-field-46' => 'Vinyl',
			  'mx-field-47' => 'Concrete',
			  'mx-field-48' => 'Other',
			  'mx-field-49' => 'Ceiling type:',
			  'mx-field-50' => 'Plasterboard over joists',
			  'mx-field-51' => 'Void/Exposed joists',
			  'mx-field-52' => 'Panel',
			  'mx-field-53' => 'Wood',
			  'mx-field-54' => 'Other',
			  'mx-field-55' => 'Architectural Details',
			  'mx-field-56' => 'Please tell us a little about the features of the room/area you&apos;re planning to use for your simulator.',
			  'mx-field-57' => 'Ceilings:',
			  'mx-field-58' => 'Flat',
			  'mx-field-59' => 'Beamed',
			  'mx-field-60' => 'Pitched',
			  'mx-field-61' => 'Other',
			  'mx-field-62' => 'Select any of the following that are near or within the room/area where you would like your simulator installed:',
			  'mx-field-63' => 'Door(s)',
			  'mx-field-64' => 'Window(s)',
			  'mx-field-65' => 'Mounted heater or air conditioner',
			  'mx-field-66' => 'Ceiling Fan(s)',
			  'mx-field-67' => 'Lighting Fixture(s)',
			  'mx-field-68' => 'Mounted Cabinets',
			  'mx-field-69' => 'Other',
			  'mx-field-70' => 'Components',
			  'mx-field-71' => 'Now for the fun part! All of our Performance Simulation solutions come with these core components: Launch Monitor, Computer, Hitting Screen, Projector and Simulation Software. Let&apos;s review them and see which options are the best for you.',
			  'mx-field-72' => 'Launch Monitor',
			  'mx-field-73' => 'Every one of our Performance Simulators is powered by our core GC launch monitor technology. Which means, unlike other golf simulators, you aren&apos;t limited by exact room dimensions and large costs.',
			  'mx-field-74' => 'Please review the launch monitor options available and select the one that best fits your needs.',
			  'mx-field-75' => 'GCQuad',
			  'mx-field-76' => 'Our most advanced mobile launch monitor, the GCQuad delivers complete ball and club performance data with unprecedented accuracy and reliability. Perfect for your Performance Simulator or a day at the golf range.',
			  'mx-field-77' => 'GCHawk',
			  'mx-field-78' => 'Our latest innovation, the GCHawk is a ceiling-mounted solution that delivers the same level of simulation precision and reliability you expect from our GC line of launch monitors. Not only that, but the Hawk now also provides dynamic football tracking and analysis for complete family fun.',
			  'mx-field-79' => 'GC2',
			  'mx-field-80' => 'Our original Game Changer, and the best-selling professional-grade launch monitor of all time, the GC2 is the perfect choice when looking for a budget-conscious simulation solution that doesn&apos;t compromise on accuracy.',
			  'mx-field-81' => 'GC+HMT',
			  'mx-field-82' => 'Combining the legendary GC2 with our attachable HMT (Head Measurement Technology), this power duo delivers ball and club data with incredible accuracy and reliability.',
			  'mx-field-83' => 'Computer',
			  'mx-field-84' => 'All our computers are optimised for maximum performance with our FSX gaming software, and are pre-built to ensure no unnecessary software or bloatware. All our computers come with a 3-year warranty.',
			  'mx-field-85' => 'Please review the computer options available and select the one that best fits your needs.',
			  'mx-field-86' => 'Desktop',
			  'mx-field-87' => 'Recommended for projection-based simulation, our powerful desktop solution has been custom configured to handle the demands of high-resolution or multi-projection display output.',
			  'mx-field-88' => 'Laptop',
			  'mx-field-89' => 'Recommended for monitor-based (non-projection) simulation, our laptop solution delivers the speed and power to run our FSX software whether indoors or outdoors.',
			  'mx-field-90' => 'I already own a compatible computer and will use it.',
			  'mx-field-91' => 'Hitting Screen',
			  'mx-field-92' => 'Our hitting screens are bespoke designed and handmade to deliver the maximum image brightness and long-term durability for years of practice and gaming fun.',
			  'mx-field-93' => 'Please review the hitting screen options available and select the one that best fits your needs.',
			  'mx-field-94' => 'Tensioned Screen System',
			  'mx-field-95' => 'Our bespoke built tensioned screens are custom fabricated from a series of lightweight materials for optimal image clarity, brightness, and ball-impact durability, all without a wrinkle in sight.',
			  'mx-field-96' => 'Hung Screen',
			  'mx-field-97' => 'For those looking for big screen projection but with budgets in mind, our non-tensioned mid-level screens can be eyelet mounted and corner suspended to provide a safe, big screen experience.',
			  'mx-field-98' => 'Net Solution',
			  'mx-field-99' => 'Need to save space but still want the industry&apos;s leading technology? Our net solutions are a compact, budget-friendly option for even the smallest of spaces.',
			  'mx-field-100' => 'Projector',
			  'mx-field-101' => 'We&apos;ve selected only the industry’s most advanced, durable, and image-rich projectors for our Performance Simulator solutions.',
			  'mx-field-102' => 'Please review the projector options available and select the one that best fits your needs.',
			  'mx-field-103' => 'Standard Projector with non-interchangeable lens',
			  'mx-field-104' => 'Premium Projector with interchangeable and short-throw lens options',
			  'mx-field-105' => 'I already own a compatible projector and will be using it',
			  'mx-field-106' => 'Software',
			  'mx-field-107' => 'FSX 2018',
			  'mx-field-108' => 'Experience the most realistic golf simulation ever with FSX 2018. Play the world&apos;s best and most exclusive courses, practice your skills on the range, or even compete in skill-building competitions with players around the world — all in beautiful 4K resolution.',
			  'mx-field-109' => 'Golf Courses',
			  'mx-field-110' => 'Take your experience further by adding to your library of world-famous courses. From iconic Open venues to lesser known gems, our ever-growing range of venues ensure you&apos;ll always be wanting to play more!',
			  'mx-field-111' => 'Please review the course options below to give a sense of how many you might wish to kick off with.',
			  'mx-field-112' => 'I&apos;m happy to start with the standard 5 courses that come with FSX',
			  'mx-field-113' => 'I&apos;d like to start with another 5 to 10 courses',
			  'mx-field-114' => 'I&apos;d like to start with another 15 to 25 courses',
			  'mx-field-115' => 'I&apos;d like to start with more than 30 courses',
			  'mx-field-116' => 'I&apos;d like to start with every course available (Fully Loaded)',
			  'mx-field-117' => 'Football Skills',
			  'mx-field-118' => 'Want to play and practice football in your Performance Simulator as well as golf? As long as you&apos;ve chosen the GCHawk you can now add Football Skills software to your simulator, allowing you to work on your free-kicks, corners, and penalties.',
			  'mx-field-119' => 'No thank you, I&apos;m only looking for golf at the moment',
			  'mx-field-120' => 'Football as well as golf sounds good to me.',
			  'mx-field-121' => 'Simulator Structures and Options',
			  'mx-field-122' => 'Our Performance Simulators include an endless number of custom options to ensure you get the exact function, safety and finished look you desire. Our installation team will walk you through each option and outline the advantages and cost of each. In the meantime, here are some you can consider:',
			  'mx-field-123' => 'Simulator Structure',
			  'mx-field-124' => 'Full size hard-sided structure with side/ceiling protection baffles and carpeting',
			  'mx-field-125' => 'Half-length hard-sided structure with side/ceiling protection baffles and carpeting',
			  'mx-field-126' => 'Minimum-length rear screen section only with retractable side curtains',
			  'mx-field-127' => 'Canvas and pole structure',
			  'mx-field-128' => 'Not applicable as I will be using a net return',
			  'mx-field-129' => 'Hitting Mat',
			  'mx-field-130' => 'None',
			  'mx-field-131' => 'Standard Hitting Mat (Green)',
			  'mx-field-132' => 'Bespoke Hitting Mat (Black/Other Colour)',
			  'mx-field-133' => 'Computer Cabinet',
			  'mx-field-134' => 'None',
			  'mx-field-135' => 'Black low-profile cabinet with cooling fan',
			  'mx-field-136' => 'Additional Technology',
			  'mx-field-137' => 'Looking to go even further with your Performance Simulator? Private and business users often enhance their technology with a number of hardware and software add-ons. By ticking the boxes below you&apos;re not committing to anything, but it will allow us to be able to discuss your plans (short- or long-term) when we next talk:',
			  'mx-field-138' => 'Audio-Visual/Cinema',
			  'mx-field-139' => 'Why not add home cinema to your simulator for big screen sports or latest blockbusters. We offer a range of solutions to take your big screen to the next level:',
			  'mx-field-140' => 'Not for me, thank you',
			  'mx-field-141' => 'Entry-level Audio-Visual Package',
			  'mx-field-142' => 'Mid-Range Cinema Audio-Visual Package',
			  'mx-field-143' => 'Bespoke high-end Audio-Visual and Home Automation',
			  'mx-field-144' => 'Video Analysis and Pressure Mapping',
			  'mx-field-145' => 'Want more insight into your, or your visitors&apos; golf games? Why not add in a dedicated video analysis system and even pressure mapping and analysis. Our video and pressure systems seamlessly integrate with our Performance Simulator.',
			  'mx-field-146' => 'No thank you',
			  'mx-field-147' => 'Video Analysis only',
			  'mx-field-148' => 'Video and Pressure Mapping',
			  'mx-field-149' => 'Pressure Mapping only',
			  'mx-field-150' => 'Review',
			  'mx-field-151' => 'Congratulations - you&apos;ve taken the first steps toward designing your own Performance Simulator! Below is a summary of the simulation components you’ve selected, along with the details of the space you’re considering. Please take a moment to review. To change a selection, simply click the ‘edit’ link next to that component.',
			  'mx-field-152' => 'Share',
			  'mx-field-153' => 'Sharing your ideas with our design team is simple - just fill out your name and preferred contact information below and hit the submit button.',
			  'mx-field-154' => '(Caption): This is a depiction of a standard setup with the specifics and add-ons you&apos;ve selected. Like what you see? Our design team will render your exact simulator within your space as part of the new simulator project kick-off process.',
			  'mx-field-155' => 'Planned Use',
			  'mx-field-156' => 'Environment',
			  'mx-field-157' => 'Components',
			  'mx-field-158' => 'Options',
			  'mx-field-159' => 'Additional Technology',
			  'mx-field-160' => 'Review',
			  'mx-field-161' => 'Share',
			  'mx-field-162' => 'Simulation Configurator',
			  'mx-field-163' => 'This is a depiction of a standard setup with the specifics and add-ons you&apos;ve selected. Like what you see? Our professionals will render your exact simulator once you\\\'ve discussed your specific needs with a sales representative.',
			  'mx-field-164' => 'rkundu065@gmail.com',
			  'text_area1' => '					&lt;p&gt;                		Let’s make sure there’s enough space for your Performance Simulator. For safety, you need to be able to safely swing a golf club in the room or area you intend to house the simulator. Here’s our recommended safety dimensions:                	&lt;/p&gt;                	&lt;ul&gt;            			&lt;li&gt;Safe swing zone = 4 metre diameter with the player in the centre &lt;/li&gt;            			&lt;li&gt;Ceiling height = 3.05 metres&lt;/li&gt;						&lt;li&gt;Player’s distance from the hitting screen = 3.6 metres&lt;/li&gt;						&lt;li&gt;If you’re not sure you have the recommended dimensions, don’t worry, as we have a host of solutions for smaller or awkward spaces. Please continue to complete the Simulator Configurator and we will be able to provide advice and solutions tailored to your exact space.&lt;/li&gt;            		&lt;/ul&gt;            		&lt;p&gt;                		Tip: To be extra sure your chosen area is big enough, take a driver (your longest club) and mimic your swing in slow motion. Have someone watch as you swing to see if the club head comes within striking distance of any fixed obstacle, such as a wall or the ceiling.                	&lt;/p&gt;				',
			); 

	}
	
}