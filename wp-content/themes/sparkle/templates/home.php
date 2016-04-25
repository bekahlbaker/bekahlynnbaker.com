<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>
<div class="home">
	<div class="hero content">
			<div class="container-fluid">
				<h1>bekah lynn baker</h1>
				<a href="#contact" class="button smoothScroll">contact me</a>	
		</div>
	<a name="about" style="text-decoration: none;">
	</div>
	<div class="about content">
		<div class="container-fluid">
			<div class="about-title">
				<h2>bekah lynn baker</h2>
				<hr>
				<p>front-end web developer. wordpress enthusiast.</p>
			</div>
			<div class="about-main">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/profile.png" alt="">
				<h4>about me</h4>
				<p style="">in the beginning was the Compaq Presario 5460 desktop computer, and several AOL Hometown sites built in easy designer- and they were not good.<br><br>Next came the geocities sites with flashing banners and animated backgrounds- and they were not good, either.<br><br>Then html was learned - and it was not good, but it was something.<br><br>As the years went on, more languages were learned and more sites were developed - and it was quite a bit closer, at least, to what you would call good.<br><br>And now, having learned languages such as html, css, javascript and a sprinkling of php, and understanding that under no circumstances should there be a flashing and/or flaming marquee on any site, i am confident in saying - it is good.<br><br>currently, i am working towards better.</p>
			</div>
		</div>
	</div>
	<div class="skills content">
		<div class="container-fluid">
			<div class="skills-title">
				<h2>i got skills!</h2>
				<hr>
				<p>here are a few things i'm good at</p>
			</div>
			<div class="skills-main">
				<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-2 graph"><img src="<?php bloginfo('template_directory'); ?>/assets/img/ideas.png">
							<p>uniquely creative<br>out-of-the-box ideas</p>
						</div>
						<div class="col-md-2 graph"><img src="<?php bloginfo('template_directory'); ?>/assets/img/details.png">
							<p>attention to detail</p>
						</div>
						<div class="col-md-2 graph"><img src="<?php bloginfo('template_directory'); ?>/assets/img/htmlcss.png">
							<p>html & css</p>
						</div>
						<div class="col-md-2 graph"><img src="<?php bloginfo('template_directory'); ?>/assets/img/wordpress.png">
							<p>wordpress</p>
						</div>
						<div class="col-md-2 graph"><img src="<?php bloginfo('template_directory'); ?>/assets/img/design.png">
							<p>graphic & web design</p>
						</div>
						<div class="col-md-1"></div>
					</div>
	<a name="work" style="text-decoration: none;"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio content">
		<div class="container-fluid">
			<div class="portfolio-title">
				<h2>my work</h2>
				<hr>
				<p>some of my most recent projects</p>
			</div>
			<div class="portfolio-main">
				<div class="row">
					<div class="col-md-4 work">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio.png"></a>
						<a href="<?php bloginfo('url'); ?>"><h4>my portfolio</h4></a>	
						<p>(seems obvious...but i am proud of this)<br>A custom Wordpress site</p>
					</div>
					<div class="col-md-4 work">
					<a href="http://appletimeinc.com/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/apple-time-logo.png"></a>
						<a href="http://appletimeinc.com/"><h4>appletimeinc</h4></a>	
						<p>A custom e-commerce site built with Wordpress/woocommerce</p>
	<a name="contact" style="text-decoration: none;"></a>
					</div>
					<div class="col-md-4 work">
					<a href="http://comic-quiz.com"><img src="<?php bloginfo('template_directory'); ?>/assets/img/quiz.png"></a>
						<a href="http://comic-quiz.com"><h4>dc & marvel character quiz</h4></a>	
						<p>A custom interactive quiz</p>
	<a name="contact" style="text-decoration: none;"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="contact content">
		<div class="container-fluid">
			<div class="contact-title">
				<h2>contact me</h2>
				<hr>
				<p>i am currently available for freelance work. please contact me with any projects you would like to discuss.</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-main">
							<?php 	
								if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } 
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>