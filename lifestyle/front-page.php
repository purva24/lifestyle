<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lifestyle
 */

get_header(); ?>
	<body>
		<div class="site-content">
			<div class="site-inner container">
				<div class="site-header">
					<div class="site-menu wrap">
						<ul>
							<li class="first"><a href="#">Home</a></li>
							<li><a href="#">Sample Page</a></li>
							<li><a href="#">Page Layouts</a></li>
							<li><a href="#">Page Templates</a></li>
							<li><a href="#">Our Shop</a></li>
							<li><a href="#">Contact Page</a></li>
						<ul>
					</div>
				</div>
				<div class="site-banner">
					<div class = "wrap">
						<div class="title-area">
							<div class="site-title">
								<h1><a href="#">Lifestyle Pro</a></h1>
								<p class="site-tagline">A Mobile Responsive Genesis Theme</p>
							</div>
						</div>
					</div>
				</div>
				<nav class="secondary-menu">
					<div class="wrap">
						<ul>
							<li><a href="#">Category #1</a></li>
							<li><a href="#">Category #2</a></li>
							<li><a href="#">Category #3</a></li>
							<li><a href="#">Category #4</a></li>
							<li><a href="#">Category #5</a></li>
						</ul>
					</div>
				</nav>
				<div class="site-content">
					<div class="wrap">
						<main class="content">
							<div class="home-top widget-area">
								<section class="site-post">
									<article class="featured-post">
										<a href="#">
											<img width="634" height="360" src="http://media.caranddriver.com/images/media/51/2017-10best-lead-photo-672628-s-original.jpg">
										</a>
										<header class="post-header">
											<h4 class="post-title"><a href="#">This is a Featured Post #1</a></h4>
											<p class="post-content">This is an example of a WordPress post, you could edit this to put information about 
																	yourself or your site so readers know where you are coming from. You can create as many
																	posts as you like in order to share with your readers what is on your mind. This is an 
																	example of a WordPress post, you could edit this to put information …
												<a href="#" class="more-link">Read More</a>
											</p>
										</header>
									</article>
								</section>
							</div>
							<div class="home-middle widget-area">
								<section class="site-post-middle">
									<article class="featured-post featured-post-middle">
										<a href="#" class="alignleft">
											<img src="http://blog.caranddriver.com/wp-content/uploads/2014/06/140176_CAR1.jpg" class="post-image">
										</a>
										<header class="post-header  post-header-middle">
											<h4 class="post-title"> This is Featured Post #2</h4>
											<p class="post-content">
												This is an example of a WordPress post, you could edit this to put information about yourself or your site 
												so readers know where you are coming from. You can create …
												<a href="#" class="more-link">Read More</a>
											</p>
										</header>
									</article>
									<article class="featured-post featured-post-middle">
										<a href="#" class="alignleft">
											<img src="http://blog.caranddriver.com/wp-content/uploads/2014/06/140176_CAR1.jpg" class="post-image">
										</a>
										<header class="post-header  post-header-middle">
											<h4 class="post-title"> This is Featured Post #3</h4>
											<p class="post-content">
												This is an example of a WordPress post, you could edit this to put information about yourself or your site 
												so readers know where you are coming from. You can create …
												<a href="#" class="more-link">Read More</a>
											</p>
										</header>
									</article>
									<article class="featured-post featured-post-middle">
										<a href="#" class="alignleft">
											<img src="http://blog.caranddriver.com/wp-content/uploads/2014/06/140176_CAR1.jpg" class="post-image">
										</a>
										<header class="post-header  post-header-middle">
											<h4 class="post-title"> This is Featured Post #4</h4>
											<p class="post-content">
												This is an example of a WordPress post, you could edit this to put information about yourself or your site 
												so readers know where you are coming from. You can create …
												<a href="#" class="more-link">Read More</a>
											</p>
										</header>
									</article>
								</section>
							</div>
							<div class="home-bottom">
								<div class="wrap">
									<div class="home-bottom-left widget-area">
										<section class="featured-post-bottom">
											<div class="widget-header">
												<h3 class="widget-title">Featured Category </h3>
												<article class="featured-post fetured-post-bottom">
													<a href="#" class="alignnone">
														<img src="http://www.jaguarusa.com/Images/JNA_F-TYPE17-base-coupe_640x318_tcm97-204811_desktop_640x318.jpg?v=2">
													</a>
													<header class="post-header  post-header-bottom">
														<h4 class="post-title"> This is Featured Post #5</h4>
														<p class="post-content">
															This is an example of a WordPress post, you could edit this to put information about yourself or your site 
															so readers know where you are coming from. You can create …
															<a href="#" class="more-link">Read More</a>
														</p>
													</header>
												</article>
												<article class="featured-post fetured-post-bottom">
													<a href="#" class="alignnone">
														<img src="http://www.jaguarusa.com/Images/JNA_F-TYPE17-base-coupe_640x318_tcm97-204811_desktop_640x318.jpg?v=2">
													</a>
													<header class="post-header  post-header-bottom">
														<h4 class="post-title"> This is Featured Post #6</h4>
														<p class="post-content">
															This is an example of a WordPress post, you could edit this to put information about yourself or your site 
															so readers know where you are coming from. You can create …
															<a href="#" class="more-link">Read More</a>
														</p>
													</header>
												</article>
											</div>
										</section>
									</div>
									<div class="home-bottom-right widget-area">
										<section class="featured-post-bottom">
											<div class="widget-header">
												<h3 class="widget-title">Featured Category </h3>
												<article class="featured-post fetured-post-bottom">
													<a href="#" class="alignnone">
														<img src="http://www.jaguarusa.com/Images/JNA_F-TYPE17-base-coupe_640x318_tcm97-204811_desktop_640x318.jpg?v=2">
													</a>
													<header class="post-header  post-header-bottom">
														<h4 class="post-title"> This is Featured Post #7</h4>
														<p class="post-content">
															This is an example of a WordPress post, you could edit this to put information about yourself or your site 
															so readers know where you are coming from. You can create …
															<a href="#" class="more-link">Read More</a>
														</p>
													</header>
												</article>
												<article class="featured-post fetured-post-bottom">
													<a href="#" class="alignnone">
														<img src="http://www.jaguarusa.com/Images/JNA_F-TYPE17-base-coupe_640x318_tcm97-204811_desktop_640x318.jpg?v=2">
													</a>
													<header class="post-header  post-header-bottom">
														<h4 class="post-title"> This is Featured Post #8</h4>
														<p class="post-content">
															This is an example of a WordPress post, you could edit this to put information about yourself or your site 
															so readers know where you are coming from. You can create …
															<a href="#" class="more-link">Read More</a>
														</p>
													</header>
												</article>
											</div>
										</section>
									</div>
								</div>
							</div>
						</main>
						<aside class="sidebar sidebar-primary widget-area">
							<section class="social-icons widget">
								<div class="social-content">
									<h3 class="widgettitle">
										Connect With Us Online
									</h3>
									<ul class="aligncenter">
										<li class="ssi-facebook">
											<a href="#">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li class="ssi-instagram">
											<a href="#">
												<i class="fa fa-instagram" aria-hidden="true"></i>
											</a>
										</li>
										<li class="ssi-pinterest">
											<a href="#">
												<i class="fa fa-pinterest" aria-hidden="true"></i>
											</a>
										</li>
										<li class="ssi-google">
											<a href="#">
												<i class="fa fa-google" aria-hidden="true"></i>
											</a>
										</li>
										<li class="ssi-rss">
											<a href="#">
												<i class="fa fa-rss" aria-hidden="true"></i>
											</a>
										</li>
										<li class="ssi-twitter">
											<a href="#">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
									</u>
								</div>
							</section>
							<section class="newsletter widget">
								<div class="enews">
									<h3 class="widgettitle">Email Newsletter</h3>
									<p>Sign up to receive email updates and to hear what's going on with us!</p>
									<form id="enews-form">
										<input type="text" id="subbox1" class="enews-subbox" placeholder="First Name">
										<input type="text" id="subbox2" class="enews-subbox" placeholder="Last Name">
										<input type="email" id="subbox3" class="enews-subbox" placeholder="Email">
										<input type="submit" value="Sign Up Now" id="subbutton">
									</form>
								</div>
							</section>
							<section class="user-profile-widget widget">	
								<div class="user-profile">
									<h3 class="widgettitle">A Little About Me</h3>
									<div class="alignleft profile-image">
										<img src="https://secure.gravatar.com/avatar/f7478b09179c624a91ba6c45422fbf4e?s=125&d=mm&r=g">
									</div>
									<p>Designer, Developer, and VP of StudioPress at Rainmaker Digital. Follow me on twitter or instagram.</p>
								</div>
							</section>
							<section class="search-widget widget">
								<div class="search">
									<h3 class="widgettitle">Looking for Something</h3>
									<form class="search-form">
										<input type="text" name="search" placeholder="Search..">
									</form>
								</div>
							</section>
						</aside>
					</div>
				</div>
				
			</div>
		</div>

	</body>
<?php
get_footer();
