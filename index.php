<?php
include 'forms/contact.php';

$mail_sent = false;
$mail_error = false;

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(send_email($name, $email, $subject, $message)) {
        $mail_sent = true;


    } else {
        $mail_error = true;
        ?>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Mohamed Haneef</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

	<!-- Mobile nav toggle button -->
	<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

	<!-- ======= Header ======= -->
	<header id="header">
		<div class="d-flex flex-column">

			<div class="profile">
				<img src="assets/img/mohamed-haneef.jpg" alt="" class="img-fluid rounded-circle">
				<h1 class="text-light"><a href="index.html">Mohamed Haneef</a></h1>
				<div class="social-links mt-3 text-center">

					<a href="https://github.com/Mohamed-Haneef" class="github"><i class="bx bxl-github"></i></a>
					<a href="https://instagram.com/_haneef_22_?igshid=MXBhOTFvejltaWhkbQ==" class="instagram"><i
							class="bx bxl-instagram"></i></a>

					<a href="https://www.linkedin.com/in/mohamed-haneef22?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
						class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
			</div>

			<nav id="navbar" class="nav-menu navbar">
				<ul>
					<li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
							<span>Home</span></a></li>
					<li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
					</li>
					<li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
							<span>Resume</span></a></li>
					<li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
							<span>Portfolio</span></a></li>
					<li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
							<span>Services</span></a></li>
					<li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
							<span>Contact</span></a></li>
				</ul>
			</nav><!-- .nav-menu -->
		</div>
	</header><!-- End Header -->

	<!-- ======= BG Section ======= -->
	<section id="BG" class="d-flex flex-column justify-content-center align-items-center">
		<div class="BG-container" data-aos="fade-in">
			<h1>Mohamed <span class="text-info">Haneef</span></h1>
			<p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Programmer"></span></p>
		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container">

				<div class="section-title">
					<h2>About</h2>
					<p>Innovative developer by day, coder by night, I thrive on cracking tough challenges and pushing
						the tech envelope. Whether leading a team or solo coding, My passion for progress shines. Try
						catching me to upgrade tech of your place.</p>
				</div>

				<div class="row">
					<div class="col-lg-4" data-aos="fade-right">
						<img src="assets/img/mohamed-haneef.jpg" class="img-fluid w-75 " alt="">
					</div>
					<div class="col-lg-8 pt-4 pt-lg-0 content mt-5" data-aos="fade-left">
						<h3>Web Developer &amp; Programmer.</h3>
						<p class="fst-italic">
							Wanna build Websites? I value open communication and look forward to hearing from you.
							Whether you have questions, suggestions, or you're interested in collaboration, reaching me
							is easy. Use the contact form at the end of the page to send me a message, and I'll get back
							to you promptly.
						</p>
						<div class="row">
							<div class="col-lg-6">
								<ul>

									<li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
										<span>mohamedhaneef.zeal.ninja</span>
									</li>
									<li><i class="bi bi-chevron-right"></i> <strong>Instagram:</strong>
										<span>@_haneef_22_</span>
									</li>
									<li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
										<span>Available</span>
									</li>
								</ul>
							</div>
							<div class="col-lg-6">
								<ul>
									<li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>17</span></li>
									<!-- <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li> -->
									<li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
										<span>mohamedhaneef840@gmail.com</span>
									</li>

								</ul>
							</div>
						</div>
						<p>
							A collaborator at heart, I often work in team environments, transforming abstract concepts
							into tangible digital realities. I understand that a successful project requires not just
							clean code but also effective communication and a shared vision among people.
						</p>
					</div>
				</div>

			</div>
		</section><!-- End About Section -->

		<!-- ======= Facts Section ======= -->
		<section id="facts" class="facts">
			<div class="container">

				<div class="section-title">
					<h2>Facts</h2>
					<p>
						Welcome to my journey in the dynamic world of web development. With a passion for innovation and
						an unwavering commitment to quality, I have accumulated a rich tapestry of experiences, honing
						my skills and pushing the boundaries of what's possible in the digital realm.
					</p>
				</div>

				<div class="row no-gutters">

					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
						<div class="count-box">
							<i class="bi bi-emoji-smile"></i>
							<span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
								class="purecounter"></span>
							<p><strong>Happy Clients</strong> Turning Happy Clients into Satisfied Smiles - Where
								Excellence Meets Experience!</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
						data-aos-delay="100">
						<div class="count-box">
							<i class="bi bi-journal-richtext"></i>
							<span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
								class="purecounter"></span>
							<p><strong>Projects</strong> Total projects made with my experience and skills!</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
						data-aos-delay="200">
						<div class="count-box">
							<i class="bi bi-headset"></i>
							<span data-purecounter-start="0" data-purecounter-end="700" data-purecounter-duration="1"
								class="purecounter"></span>
							<p><strong>Hustle Hours</strong> Time I spent learning and honing my skills </p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
						data-aos-delay="300">
						<div class="count-box">
							<i class="bi bi-people"></i>
							<span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
								class="purecounter"></span>
							<p><strong>collaborators</strong> People who work hard with me and strive for excellence</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Facts Section -->

		<!-- ======= Skills Section ======= -->
		<section id="skills" class="skills section-bg">
			<div class="container">

				<div class="section-title">
					<h2>Skills <span class="text-info">Set</span></h2>
					<p>Welcome to explore my skills defined by versatility and innovation used for development. With a
						robust foundation and a commitment to continuous growth, I bring a dynamic range of capabilities
						that transcend traditional boundaries which I have reached so far.</p>
				</div>

				<div class="row skills-content">

					<div class="col-lg-6" data-aos="fade-up">

						<div class="progress">
							<span class="skill">HTML <i class="val">100%</i></span>
							<div class="progress-bar-wrap">
								<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
									aria-valuemax="100">
								</div>
							</div>
						</div>

						<div class="progress">
							<span class="skill">CSS <i class="val">90%</i></span>
							<div class="progress-bar-wrap">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
									aria-valuemax="100">
								</div>
							</div>
						</div>

						<div class="progress">
							<span class="skill">JavaScript <i class="val">75%</i></span>
							<div class="progress-bar-wrap">
								<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
									aria-valuemax="100">
								</div>
							</div>
						</div>

						<div class="progress">
							<span class="skill">Flask <i class="val">60%</i></span>
							<div class="progress-bar-wrap">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
									aria-valuemax="100">
								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

						<div class="progress">
							<span class="skill">PHP <i class="val">90%</i></span>
							<div class="progress-bar-wrap">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
									aria-valuemax="100">
								</div>
							</div>
						</div>

						<div class="progress">
							<span class="skill">WordPress/CMS <i class="val">90%</i></span>
							<div class="progress-bar-wrap">
								<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
									aria-valuemax="100">
								</div>
							</div>
						</div>

						<div class="progress">
							<span class="skill">Database Management <i class="val">70%</i></span>
							<div class="progress-bar-wrap">
								<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
									aria-valuemax="100">
								</div>
							</div>
						</div>

						<div class="progress">
							<span class="skill">ReactJS <i class="val">65%</i></span>
							<div class="progress-bar-wrap">
								<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
									aria-valuemax="100">
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</section><!-- End Skills Section -->

		<!-- ======= Resume Section ======= -->
		<section id="resume" class="resume">
			<div class="container">

				<div class="section-title">
					<h2>Resume</h2>
					<p> From innovative problem-solving to effective collaboration, each section unveils a story of
						growth and impact. I invite you to explore this snapshot of my career, confident that it
						captures the essence of my dedication, versatility, and the unique value I bring to any
						professional endeavor.</p>
				</div>

				<div class="row">
					<div class="col-lg-6" data-aos="fade-up">
						<h3 class="resume-title">Sumary</h3>
						<div class="resume-item pb-0">
							<h4>Mohamed Haneef</h4>
							<p><em>Innovative developer and a Programming craftsman building websites and writing code
									for years.</em></p>
							<ul>
								<li>Tamilnadu, India</li>
								<li>+91 81228 50355</li>
								<li>mohamedhaneef840@gmail.com</li>
							</ul>
						</div>

						<h3 class="resume-title">Education</h3>
						<div class="resume-item">
							<h4>Bachelor Of Computer Science &amp; Engineering</h4>
							<h5>2023 - 2027</h5>
							<p><em>Mohamed Sathak College of Engineering, Ramanathapuram, Tamilnadu</em></p>
							<p>This is one of the best phase of my life where I got chance to meet wonderful people, and
								to experience Real life</p>
						</div>
						<div class="resume-item">
							<h4>Higher Secondary</h4>
							<h5>2022-2023</h5>
							<p><em>Mohamed Sathak Dastagir Matriculation Higher Secondary School</em></p>
							<p>School time is the best time to explore the various opportunities available.</p>
						</div>


					</div>
					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
						<h3 class="resume-title">Professional Experience</h3>
						<div class="resume-item">
							<h4>Web Developer</h4>
							<h5>2022 - Present</h5>
							<p><em>Freelancing</em></p>
							<ul>
								<li>Doing projects with My skills and knowledge to experience what Web developmet really
									is.</li>
								<li>Hustling 8+ hours per day.</li>
								<li>Working on College Projects</li>

							</ul>
						</div>
						<div class="resume-item">
							<h4>Programmer</h4>
							<h5>2022 - present</h5>
							<p><em>Learning</em></p>
							<ul>
								<li>Working on small projects using C, Python, etc</li>
								<li>Managed to finish College work and Programming simultaneously under pressure.</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Resume Section -->

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio section-bg">
			<div class="container">

				<div class="section-title">
					<h2>Portfolio</h2>
					<p>Check out the projects I have done so far.</p>
				</div>

				<div class="row" data-aos="fade-up">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-app">App</li>
							<li data-filter=".filter-card">Card</li>
							<li data-filter=".filter-web">Web</li>
						</ul>
					</div>
				</div>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">



					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="assets/img/portfolio/portfolio-haneef.jpg" class="img-fluid" alt="">
							<div class="portfolio-links">
								<a href="assets/img/portfolio/portfolio-haneef.jpg" data-gallery="portfolioGallery"
									class="portfolio-lightbox" title=" My Portfolio"><i class="bx bx-plus"></i></a>
								<a href="portfolio-details.html" title="More Details"><i
										class="bx bx-dots-horizontal-rounded"></i></a>
							</div>
						</div>
					</div>



				</div>

			</div>
		</section><!-- End Portfolio Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services">
			<div class="container">

				<div class="section-title">
					<h2>Services</h2>
					<p>Here are some of the services I offer.</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
						<div class="icon"><i class="bi bi-briefcase"></i></div>
						<h4 class="title"><a href="">Development</a></h4>
						<p class="description">Bringing your digital dreams into a reality. Developing Websites, Web
							applications managing your services. All at an affordable Price</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
						<div class="icon"><i class="bi bi-card-checklist"></i></div>
						<h4 class="title"><a href="">Tasks</a></h4>
						<p class="description">Finishing the tasks according to your plans. I will manage the digital
							part of your dreams with perfection.</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
						<div class="icon"><i class="bi bi-bar-chart"></i></div>
						<h4 class="title"><a href="">Upgrade your business </a></h4>
						<p class="description">Wanna level up your business? Web is one the best ways to upscale your
							business. Team up with me to upgrade your business into large-scale</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
						<div class="icon"><i class="bi bi-binoculars"></i></div>
						<h4 class="title"><a href="">Vision</a></h4>
						<p class="description">Collab with me and find the possibilities which you never would have
							never thought of!!</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
						<div class="icon"><i class="bi bi-brightness-high"></i></div>
						<h4 class="title"><a href="">Uniqueness</a></h4>
						<p class="description">Thinking of quality. Make your websites Unique which makes your plan
							reach sky-high</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
						<div class="icon"><i class="bi bi-calendar4-week"></i></div>
						<h4 class="title"><a href="">Time Management</a></h4>
						<p class="description">As a web developer, my approach to time management is a meticulous blend
							of foresight, prioritization, and adaptability.</p>
					</div>
				</div>

			</div>
		</section>

		<!-- Contact Form Section -->
		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title">
					<h2>Contact <span class="text-info">Me</span></h2>
					<p>Whether you have inquiries, suggestions, or collaboration proposals, I've streamlined the process
						for you. Simply fill out the form below, and your message will swiftly find its way to me. I
						value your input and look forward to the opportunity to connect. Your thoughts matter, and this
						contact form is the gateway to a responsive and collaborative dialogue. Thank you for reaching
						out, and I anticipate the pleasure of engaging with you soon.</p>
				</div>

				<div class="row" data-aos="fade-in">

					<div class="col-lg-5 d-flex align-items-stretch">
						<div class="info">
							<div class="address">
								<i class="bi bi-geo-alt"></i>
								<h4>Location:</h4>
								<p>1/904-1, BharathiNagar, Ramnad, Ramanathapuram, Tamilnadu</p>
							</div>

							<div class="email">
								<i class="bi bi-envelope cursor-pointer"></i>
								<h4>Email:</h4>
								<p>mohamedhaneef840@gmail.com</p>
							</div>

							<div class="phone">
								<i class="bi bi-instagram"></i>
								<h4>Instagram:</h4>
								<p>@_haneef_22_</p>
							</div>

						</div>

					</div>

					<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" id="contact-form">
						<form method="post" role="form" class="php-email-form">
							<div class="row">
								<div class="form-group col-md-6">
									<label for="name">Your Name</label>
									<input type="text" name="name" class="form-control" id="name" required>
								</div>
								<div class="form-group col-md-6">
									<label for="name">Your Email</label>
									<input type="email" class="form-control" name="email" id="email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" required>
							</div>
							<div class="form-group">
								<label for="name">Message</label>
								<textarea class="form-control" name="message" rows="10" required></textarea>
							</div>
							<?php if($mail_sent == true) {
							    ?>
							<script>
								document.addEventListener("DOMContentLoaded", function() {
									const contactFormSection = document.getElementById("contact-form");
									contactFormSection.scrollIntoView({
										behavior: 'smooth'
									});
								});
							</script>
							<div class="row d-flex justify-content-center my-3 text-center">
								<span class="text-info">Thanks for contacting.. I will contact you ASAP.</span>
							</div>


							<?php } ?>
							<?php if($mail_error == true) {
							    ?>
							<script>
								document.addEventListener("DOMContentLoaded", function() {
									const contactFormSection = document.getElementById("contact-form");
									contactFormSection.scrollIntoView({
										behavior: 'smooth'
									});
								});
							</script>
							<div class="row d-flex justify-content-center my-3 text-center">
								<span class="text-danger">Mail not send. Kindly try again !</span>
							</div>

							<?php } ?>
							<div class="text-center"><button type="submit" name="send">Send Message</button></div>


						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Form Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="container">
			<div class="copyright">
				&copy; Copyrighted by <strong><span class="text-info">Mohamed Haneef</span></strong>
			</div>
			<div class="credits">

				Made By <a href="/">Mohamed Haneef</a>
			</div>
		</div>
	</footer><!-- End  Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/typed.js/typed.umd.js"></script>
	<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>