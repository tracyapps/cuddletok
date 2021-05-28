<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( !function_exists( 'has_site_icon' ) || !has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon"/>
		<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	<?php } ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<header class="main_header">
	<nav class="main_top_nav">
		<?php start_top_nav(); ?>
	</nav>
	<div class="header_logo_container">
		<div id="cuddle_tok_logo">
			<a href="/">
			<svg xmlns="http://www.w3.org/2000/svg" width="479.879" height="85.006" viewBox="0 0 479.879 85.006">
				<g id="cuddleTok_logo" transform="translate(-322.286 -325.464)">
					<path id="Cu_dle" d="M32.448-116.456c0,19.957,15.221,33.487,33.91,33.487,5.73,0,12.919-1.459,17.08-4.348,1.12-.911,3.608-3,3.608-3l-11.77-10.805h0c-2.488,1.069-4.348,2.172-7.818,2.172-10.232,0-17.928-6.934-17.928-17.336,0-10.993,6.089-19.027,17.082-19.027a23.549,23.549,0,0,1,8.373,1.142h0l7.863-13.066c-6-3.213-10.232-4.059-17.082-4.059C46.739-151.3,32.448-137.174,32.448-116.456Zm55.96-20.126v30.189c0,14.376,9.556,23,24.439,23,14.968,0,24.354-7.949,24.354-22.409v-30.781H121.811v30.189c0,5.243-3.129,8.541-8.795,8.541-5.328,0-8.879-3.3-8.879-8.964v-29.766ZM259.7-84.66v-64.776H244.058v17.758a23.156,23.156,0,0,0-15.052-5.919c-15.306,0-24.946,13.277-24.946,27.4,0,14.46,8.964,26.807,23.593,26.807,6.85,0,11.839-1.945,16.659-6.681v5.412Zm-39.66-25.792c0-6.6,4.566-12.515,12.515-12.515,7.357,0,12.262,5.412,12.262,12.685,0,7.188-4.566,12.854-12.769,12.854C224.862-97.429,220.042-103.264,220.042-110.452ZM283.87-84.66v-64.776H268.142V-84.66Zm6.783-25.877c0,17.42,10.993,27.145,26.976,27.145,10.909,0,19.7-5.412,24.27-13.53-2.875-1.776-12.262-7.188-12.262-7.188-2.706,3.552-6.089,7.188-11.247,7.188-5.919,0-10.824-2.96-12.177-9.133h36.532c.085-1.184,0-1.86,0-3.129,0-18.519-10.57-28.413-25.538-28.413C301.9-137.6,290.653-126.265,290.653-110.536ZM317.037-124.4c4.9,0,7.611,2.368,9.471,7.357H306.8C308.75-121.868,311.71-124.4,317.037-124.4Z" transform="translate(289.838 492.281)" class="svg_inverting_color" />
					<g id="Tok" transform="translate(632.836 340.895)">
						<path id="o-pink" d="M796.785,169.331a27.679,27.679,0,1,0,0-55.356h-4.2a27.679,27.679,0,1,1,0,55.356Z" transform="translate(-714.607 -101.465)" fill="#ff004f" />
						<path id="o-blue" d="M750.923,113.975h-4.2a27.679,27.679,0,1,0,0,55.356h4.2a27.679,27.679,0,1,1,0-55.356Z" transform="translate(-673.33 -101.465)" fill="#00f2ea" />
						<path id="T_k" d="M615.544,85.572V99.6h16.433v53.458h16.44V99.98h13.377l4.586-14.408H615.544Zm115.429,0v67.486H747.03V135.62L752,131.066l15.674,22.371h17.2l-22.553-32.606,20.258-19.717H763.085L747.03,117.037V85.572Z" transform="translate(-615.544 -85.572)" class="svg_inverting_color" />
						<path id="o-black" d="M756.643,169.331a27.679,27.679,0,1,0,0-55.356h-.381a27.679,27.679,0,1,0,0,55.356Zm-13.76-27.677a13.571,13.571,0,1,1,13.573,13.461A13.515,13.515,0,0,1,742.883,141.654Z" transform="translate(-678.671 -101.465)" class="svg_inverting_color" />
					</g>
					<g id="d" transform="translate(431.748 325.464)">
						<path id="pink" d="M87.052,46.691c5.922,4.231,7.753,3.6,14.917,4.71l5.683-13.078a17.518,17.518,0,0,1-4-.443l-3.318,10.738c-7.835,0-11.772-1.365-17.7-5.6V73.777A27.878,27.878,0,0,1,39.253,96.922a27.875,27.875,0,0,0,47.8-19.476V46.691Zm5.444-15.2c-3.027-3.3-5.013-3.669-5.443-8.39V21.655H82.87c1.053,6,4.461,8.233,9.626,9.832ZM48.989,85.116A12.751,12.751,0,0,1,63,65.257V49.849a28.124,28.124,0,0,0-4.411-.254V61.588a12.746,12.746,0,0,0-9.6,23.528Z" transform="translate(-29.042 -20.297)" fill="#ff004f" />
						<path id="blue" d="M76.372,30.617l.971-2.348A23.567,23.567,0,0,1,65.6,24.619,19.421,19.421,0,0,0,76.372,30.617Zm-20.4-15.829q-.151-.86-.231-1.73V12H40.576V66.91A12.755,12.755,0,0,1,22.091,78.249a12.752,12.752,0,0,0,22.9-7.671V14.788ZM31.7,42.728V39.313a28.151,28.151,0,0,0-3.824-.259,27.855,27.855,0,0,0-15.516,51A27.853,27.853,0,0,1,31.7,42.728Z" transform="translate(0 -12)" fill="#00f2ea" />
						<path id="black" d="M60.173,40.63c5.924,4.231,9.915,5.088,16.551,5.787L81.187,34.3c-4.374-.931-8.245-2.032-11.156-5.21-4.983-3.108-8.8-5.161-9.857-11.162H47.6L46.576,69.347c-.025,7.017-3.11,14.464-9.342,15.32-4.141,0-5.836.932-10.713-1.943A12.743,12.743,0,0,1,32.258,58.6c1.349,0,2.65,1.021,3.869,1.408V45.873C22.23,44.082,5.965,51.536,5.965,73.524c0,7.582,5.4,16.324,10.318,21.346,4.434,2.976,11.2,4.809,16.945,4.809,15.392,0,27.707-12.952,27.707-28.337V40.63Z" transform="translate(-4.431 -16.476)" class="svg_inverting_color" />
					</g>
				</g>
			</svg>
			</a>
		</div>
	</div> <!--/.header_logo_container -->
	<div class="daytime_nightime_switch_container">
		<audio id='night'>
			<source src="<?php echo get_template_directory_uri(); ?>/assets/images/nighttime.mp3" type='audio/mpeg; codecs="mp3"'>
		</audio>

		<audio id='day'>
			<source src="<?php echo get_template_directory_uri(); ?>/assets/images/daytime.mp3" type='audio/mpeg; codecs="mp3"'>
		</audio>
		<div class="toggle toggle--daynight">
			<input type="checkbox" id="toggle--daynight" class="toggle--checkbox" checked>
			<label class="toggle--btn" for="toggle--daynight"><span class="toggle--feature"></span></label>
		</div>
	</div>
</header> <!-- / .site-header -->
<div class="site-content">