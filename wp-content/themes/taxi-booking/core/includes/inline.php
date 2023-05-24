<?php


$taxi_booking_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$taxi_booking_text_transform = get_theme_mod( 'menu_text_transform_taxi_booking','CAPITALISE');

    if($taxi_booking_text_transform == 'CAPITALISE'){

		$taxi_booking_custom_css .='#main-menu ul li a{';

			$taxi_booking_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$taxi_booking_custom_css .='}';

	}else if($taxi_booking_text_transform == 'UPPERCASE'){

		$taxi_booking_custom_css .='#main-menu ul li a{';

			$taxi_booking_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$taxi_booking_custom_css .='}';

	}else if($taxi_booking_text_transform == 'LOWERCASE'){

		$taxi_booking_custom_css .='#main-menu ul li a{';

			$taxi_booking_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$taxi_booking_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$taxi_booking_container_width = get_theme_mod('taxi_booking_container_width');

			$taxi_booking_custom_css .='body{';

				$taxi_booking_custom_css .='width: '.esc_attr($taxi_booking_container_width).'%; margin: auto;';

			$taxi_booking_custom_css .='}';

			/*---------------------------Slider-content-alignment-------------------*/


	$taxi_booking_slider_content_alignment = get_theme_mod( 'taxi_booking_slider_content_alignment','CENTER-ALIGN');

	 if($taxi_booking_slider_content_alignment == 'LEFT-ALIGN'){

			$taxi_booking_custom_css .='.blog_box{';

				$taxi_booking_custom_css .='text-align:left;';

			$taxi_booking_custom_css .='}';


		}else if($taxi_booking_slider_content_alignment == 'CENTER-ALIGN'){

			$taxi_booking_custom_css .='.blog_box{';

				$taxi_booking_custom_css .='text-align:center;';

			$taxi_booking_custom_css .='}';


		}else if($taxi_booking_slider_content_alignment == 'RIGHT-ALIGN'){

			$taxi_booking_custom_css .='.blog_box{';

				$taxi_booking_custom_css .='text-align:right;';

			$taxi_booking_custom_css .='}';

		}

		/*---------------------------Copyright Text alignment-------------------*/

$taxi_booking_copyright_text_alignment = get_theme_mod( 'taxi_booking_copyright_text_alignment','LEFT-ALIGN');

 if($taxi_booking_copyright_text_alignment == 'LEFT-ALIGN'){

		$taxi_booking_custom_css .='.copy-text p{';

			$taxi_booking_custom_css .='text-align:left;';

		$taxi_booking_custom_css .='}';


	}else if($taxi_booking_copyright_text_alignment == 'CENTER-ALIGN'){

		$taxi_booking_custom_css .='.copy-text p{';

			$taxi_booking_custom_css .='text-align:center;';

		$taxi_booking_custom_css .='}';


	}else if($taxi_booking_copyright_text_alignment == 'RIGHT-ALIGN'){

		$taxi_booking_custom_css .='.copy-text p{';

			$taxi_booking_custom_css .='text-align:right;';

		$taxi_booking_custom_css .='}';

	}

