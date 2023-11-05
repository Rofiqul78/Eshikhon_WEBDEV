<?php 

include 'db_config.php';
$sel_sql = "SELECT * FROM about";
$result = mysqli_query($con, $sel_sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $name = explode(' ', $name);
} else {
    // Handle the case where no results were found, e.g., set default values or show an error message.
    $name = ['Default', 'Name'];
    $row = ['address' => 'Default Address', 'email' => 'default@example.com', 'description' =>'Default description',
    'image' => 'Default image', 'phone' => 'Default phone', 'linkedin' => 'Default linkedin', 'facebook' => 'Default facebook', 
    'github' => 'Default github'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - AKM. Rofiqul Alam</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none"></span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="<?php echo $row['image']; ?>" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    <?php echo $name[0]; ?>
                    <span class="text-primary"><?php echo($name[1] ." ". $name[2]); ?></span>
                </h1>
                <div class="subheading mb-5">
                    <?php echo $row['address']; ?>
                    <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                </div>
                <p class="lead mb-5"><?php echo $row['Description'];?>Experienced and highly skilled Web Developer with
                 a passion for creating dynamic and user-friendly websites. With a solid background in front-end and back-end
                  development, I excel at turning creative concepts into functional, responsive, and visually appealing websites. </p>
                <div class="social-icons">
                    <a class="social-icon" href="<?php echo $row['linkedin'];?>" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="<?php echo $row['github'];?>" target="_blank"><i
                            class="fab fa-github"></i></a>
                    <a class="social-icon" href="<?php echo $row['facebook'];?>" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Principal Officer</h3>
                        <div class="subheading mb-3">AB Bank Ltd.</div>
                        <p>Dedicated and results-oriented Bank Officer with a strong background in financial services and a
                         proven track record of effectively managing banking operations. I bring a comprehensive understanding 
                         of banking regulations, compliance, and customer service to the table. With a commitment to maintaining 
                         the highest standards of integrity and professionalism, I excel in building and nurturing client relationships, 
                         assessing financial needs, and providing tailored financial solutions. </p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2020 - Present</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Senior Officer</h3>
                        <div class="subheading mb-3">AB Bank Limited</div>
                        <p>Dedicated and results-oriented Bank Officer with a strong background in financial services and a
                         proven track record of effectively managing banking operations. I bring a comprehensive understanding 
                         of banking regulations, compliance, and customer service to the table. With a commitment to maintaining 
                         the highest standards of integrity and professionalism, I excel in building and nurturing client relationships, 
                         assessing financial needs, and providing tailored financial solutions. </p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2017-2020</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Officer</h3>
                        <div class="subheading mb-3">AB Bank Ltd.</div>
                        <p>Dedicated and results-oriented Bank Officer with a strong background in financial services and a
                         proven track record of effectively managing banking operations. I bring a comprehensive understanding 
                         of banking regulations, compliance, and customer service to the table. With a commitment to maintaining 
                         the highest standards of integrity and professionalism, I excel in building and nurturing client relationships, 
                         assessing financial needs, and providing tailored financial solutions. </p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2015-2017</span></div>
                </div>
                
                    
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">National University</h3>
                        <div class="subheading mb-3">Masters of Business Administration</div>
                        <div>Major in Accounting and Finance</div>
                        <p>GPA: 3.60</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2013-2015</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">East West University</h3>
                        <div class="subheading mb-3">Bachelors of Business Administration</div>
                        <p>GPA: 3.63</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2009-2013</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">
                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-react"></i></li>
                    <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                    <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                    
                </ul>
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Mobile-First, Responsive Design
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Cross Browser Testing & Debugging
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Agile Development & Scrum
                    </li>
                </ul>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Interests</h2>
                <p>In addition to my professional qualifications, I possess a diverse range of interests that enrich my 
                    life and contribute to my personal growth. These activities not only reflect my commitment to well-rounded
                    development but also demonstrate qualities such as teamwork, discipline, and creativity. My interests extend
                     to [list some of your interests, e.g., hiking, photography, volunteering, or any other relevant activities], 
                     allowing me to find balance in my life and to maintain a healthy work-life harmony. </p>
                     
                     <p class="mb-0">Furthermore, these pursuits have equipped me with a valuable skill set that complements my 
                        professional abilities, including strong communication, time management, and adaptability. By blending my 
                        personal passions with my career, I aim to foster a holistic and fulfilling lifestyle while continuously 
                        enhancing my overall skill set.</p>
                
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Awards & Certifications</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Google Analytics Certified Developer
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Mobile Web Specialist - Google Certification
                    </li>
                    
                    
                </ul>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>