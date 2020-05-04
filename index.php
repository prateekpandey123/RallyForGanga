<!doctype html>
<html lang="en">
  <head>
    <title>Rally For Ganga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/s?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <link rel="icon" href="images/logo/mainlogo.png">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body>
    <header role="banner">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid conf" style="background-color: green;">
         <!--  <a class="navbar-brand" href="index.php">
           <span>RallyFor</span><strong>Ganga</strong>
         </a> -->
         <a class="navbar-brand" href="index.php">
            <img src="images/logo/logorally-min.png" alt="" style="height: 75px; width: 75px; border-radius: 100px;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.php" id="dropdown04" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Get Involved</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="team.php">Team Member</a>
                  <a class="dropdown-item" href="events.php">Join The Events</a>
                  <a class="dropdown-item" href="http://www.ncero.com/">Research & Development </a>
                  <a class="dropdown-item" href="#">Follow The Leaderboard</a>
                  <a class="dropdown-item" href="#">Volunteer</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          <a href="Payment/index.php">
            <button type="button" class="glow-on-hover btn-default btn-lg blue-gradient btn-rounded">Donate Now</button>
          </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    <!-- Slider Images -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" style="margin-top: 83px;">
        <div class="carousel-item active">
          <img class="d-block w-100 imgset" src="images/slide4.jpeg"  alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 imgset" src="images/walpaper/tree.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 imgset" src="images/walpaper/farmer.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Slider Images -->

    <!-- 500 TREE PLANTATION -->
    <div style="background-color: #F5F6F7; rgb(245,246,247);">
      <div class="container justify-content-center">
        <div class="flex-center">
          <div class="text">Save Tree and Save Life</div>
        </div>
      </div>
      <div class="container mt-1">
        <div class="flex-center">
          <div class="trees">500 Crore Trees</div>
        </div>
        <div class="flex-center">
         <div class="trees1" style="color:limegreen">
         <?php 
            $con=mysqli_connect('localhost','root','','rallyfortree');
            $query="SELECT SUM(amount) AS sum FROM `transaction`";
            $run=mysqli_query($con,$query);
            while($row=mysqli_fetch_assoc($run))
            {
                $output=$row['sum'];
            }
         ?>
             <span>
               <?php 
                  $res=$output/99;
                  echo ceil($res);
                ?>
              </span>
           </div>
         </div>
        </div> 
      </div>
      <div class="container col-12" style="background-color: #F5F6F7; rgb(245,246,247);">
        <div class="flex-center">
          <div class="Contributed">Trees Contributed Till Now *</div>
        </div>
      </div>
      <div class="container col-12" style="background-color: #F5F6F7; rgb(245,246,247);">
        <div class="flex-center">
          <div class="trees-fee box">₹ 99 per Trees</div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-md-12 text-center">
            <a href="Payment/index.php">
            <button type="button" class="glow-on-hover btn-default btn-lg purple-gradient btn-rounded">Donate Now</button>
          </a>
          </div>
        </div>
        <div class="container mt-2">
          <div class="flex-center">
          </div>
        </div>
      </div>
    </div>
    <!-- 500 TREE PLANTATION -->
    <div class="lighten-3 mt-3" style="background-color: #F5F6F7; rgb(245,246,247);">
      <div class="flex-center">
        <ul class="mb-0 list-unstyled">
          <li>
            <h2 class="h2-responsive"><i class="fas fa-quote-left" aria-hidden="true"></i> The best friend on earth of man is the tree. When we use the tree respectfully and economically, we have one of the greatest resources on the earth. <i class="fas fa-quote-right"
            aria-hidden="true"></i></h2>
          </li>
          <li class="mb-0">
            <h5 class="text-center font-italic mb-0">~ Frank Lloyd Wright</h5>
          </li>
        </ul>
      </div>
    </div>
    <div class="section" style="background-color: #F5F6F7; rgb(245,246,247);">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <span class="d-block text-uppercase text-secondary">Who We Are</span>
            <span class="divider my-4"></span>
            <h2 class="mb-4 section-title">We Are <strong>Dharti Foundation</strong> That Bring Your Ideas Alive</h2>
            <p>With immense pleasure, I welcome you all to become part of this ‘Dharti Foundation’ and convert this dream into reality to make our home greener and cleaner.Come and join us to make awareness among people to save our planet. The plantation of more trees is an integral part of the movement and will make our mission successful.Now, it’s our responsibility to do something for our mother nature and don’t hesitate to hold the hand to cherish our culture and paradigm. Though in this grooming stage only, our organization has already taken a lot of strategies to fulfil our dreams and requires your close involvement to accomplish our sacred mission.</p>
            <p class="mb-5">Wish you all the best for beginning of a bright and prosperous future.</p>
          </div>
          <div class="col-lg-6">
            <figure class="img-dotted-bg">
              <img src="images/nishant.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
        </div>
      </div>
    </div> 



    <!-- Section: Blog v.1 -->
  <section class="my-5">
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">DHARTI FOUNDATION</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5 text-dark font-weight-bold">Dharti Foundation Certificate of Registration Under Societies Registration Act 1860 as a National Level Organization. Registration No: - District East /Society 1604/2016.</p>
    <div class="row">
      <div class="col-4 ml-5">
        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
          <img class="img-fluid" src="images/card/about1.jpg" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>
      <div class="col-lg-7">
        <h3 class="font-weight-bold mb-3"><strong>Farmer Faces The Problem</strong></h3>
        <!-- Excerpt -->
        <p class="font-weight-bold">This is the last generation on this earth. We don't have an option to survive in the new world order. We are destroying everything rapidly. See the Mountain, Forest, Animal, and Nature. Unpredictable day to day situation becomes too much pathetic for the coming generation. Who is responsible for that? every individual is responsible we don't have a concept about the emergence of a new world. You know very well farmer is the godfather for everyone but we are not able to understand the real phases of agriculture and the environment.</p>
      </div>
    </div>
    <hr class="my-5">
    <div class="row ml-5">
      <div class="col-lg-7">
        <h3 class="font-weight-bold mb-3"><strong>AN INITIATIVE TO SAVE GANGA AND PLANT 500 CRORES TREES.</strong></h3>
        <p class="font-weight-bold">This is one of the biggest challenging initiatives taken by the Dharti Foundation in the field of environmental conservation (Movement for Water). This mega project started with an aim to save the river Ganga by planting trees at the basin of Ganga River from Uttarakhand to Ganga Sagar West Bengal. Out of 500 crores, 40000 thousand trees are already being planted by the hard-working members of this organization. The Ganga is one of the most important rivers in India mostly the irrigation for Agricultural Processing and domestic uses of water-dependent on the Ganga River. Dharti Foundation has taken this step as a social responsibility to make the condition better. </p>
      </div>
      <div class="col-4">
        <div class="view overlay rounded z-depth-2">
          <img class="img-fluid" src="images/card/about2.jpg" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>
    </div>
    <hr class="my-5">
    <!-- Grid row -->
    <div class="row">
      <div class="col-4 ml-5">
        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
          <img class="img-fluid" src="images/card/about3.jpg" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>
      <div class="col-lg-7">
        <h3 class="font-weight-bold mb-3"><strong>SAVE THE GANGA RIVER</strong></h3>
        <h5>This is the simplest way to save the Ganga River and plant more trees. </h5>
        <h5>Donate 99 for one Tree</h5>
        <p class="font-weight-bold">1 Tree Plant Becomes a Mitra of Rally for Ganga.</p>
        <p class="font-weight-bold">10 Trees Plant Becomes a Member of Rally for Ganga.</p>
        <p class="font-weight-bold">100 Trees Plant Becomes an Associate Member of Rally for Ganga.</p>
        <p class="font-weight-bold">1000 Trees Plant Becomes a silver member of Rally for Ganga.</p>
        <p class="font-weight-bold">10000 Trees Plant Becomes a Golden Member of Rally for Ganga.</p>
        <p class="font-weight-bold">100000 Trees Plant Becomes a Dimond Member of Rally for Ganga.</p>
        <p class="font-weight-bold">1000000 Tress Plant Becomes a Bhagirath of Rally for Ganga.</p>
      </div>
    </div>
  </section>
  <!-- Section: Blog v.1 -->



    <div style="background-color: #F5F6F7; rgb(245,246,247);">
      <div class="text-center mt-1 font-weight-bold  text-gray-dark display-4">Support RallyForGanga</div>
      <div class="row row-cols-1 row-cols-md justify-content-center mt-5">
        <div class="col col-md-3">
          <!-- Card -->
          <div class="card">
            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="images/card/1.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Plantation</h4>
              <!--Text-->
              <p class="card-text font-weight-bold">Plantations of trees is important as they improve the life and fulfil essential needs of mankind. During photosynthesis, the trees breakdown food materials and consume carbon dioxide. Resultantly with the help of sunlight, the trees produce carbohydrates.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <a href="Payment/index.php">
                <button type="button" class="glow-on-hover aqua-gradient btn-md ">Donate</button>
              </a>
            </div>
          </div>
          <!-- Card -->
        </div>
        <div class="col col-md-3">
          <!-- Card -->
          <div class="card">
            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="images/card/2.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Save Ganga</h4>
              <!--Text-->
              <p class="card-text font-weight-bold">The Ganga river water is absolutely unfit for "direct drinking" and only seven spots from where it passes can be consumed after disinfection, the Central Pollution Control Board (CPCB) has said.A map released by the CPCB shows high level of coliform bacteria in the river.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <a href="Payment/index.php">
                <button type="button" class="glow-on-hover aqua-gradient btn-md">Donate</button>
              </a>  
            </div>
          </div>
          <!-- Card -->
        </div>
        <div class="col col-md-3">
          <!-- Card -->
          <div class="card">
            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="images/card/3.jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Water For Tree Irrigation</h4>
              <!--Text-->
              <p class="card-text font-weight-bold">Instead of having to water your trees from above the ground, the drip irrigation system delivers the liquid directly to the roots of your trees. Having this will allow your trees and shrubs to grow a deep root system One commonly used formula suggests 10 gallons of water.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <a href="Payment/index.php">
                <button type="button" class="glow-on-hover btn-md ">Donate</button>
              </a>
            </div>
          </div>
          <!-- Card -->
        </div>
      </div>
    </div>
    <!-- Card-slider -->
    <!--Carousel Wrapper-->
    <div class="color mt-3" style="background-color: #90A8AF; rgb(144,168,175);">
      <div class="title">
        <h2 class="h1 pt-4 font-weight-bold text-dark text-center">What You Can Do</h2>
      </div>
      <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top" src="images/card/action.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Action Now</h4>
                    <p class="card-text text-dark">Cooperate and aware of local communities and farmers to plant more trees and save water.</p>
                    <a href="Payment/index.php">
                      <button type="button" class="glow-on-hover btn-md ">Donate</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top" src="images/card/camp.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Start a Campaign</h4>
                    <p class="card-text text-dark">Everybody can participate and start own campaign for Save Ganga River by Plantation.</p>
                    <a href="#">
                      <button type="button" class="glow-on-hover btn-md ">Get Started</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top" src="images/card/volint.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Volunteer</h4>
                    <p class="card-text text-dark">work with us in every activity of this campaign as a certified part of this organization.</p>
                    <a href="#">
                      <button type="button" class="glow-on-hover btn-md ">Register</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!--/.Carousel Wrapper-->
    <!-- Card-slider -->
    <div class="section bg-light block-11 mt-1">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center">
            <h2 class="mb-4 section-title">Team Member</h2>
          </div>
        </div>
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-33 h-100">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/nishant2.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Kavi Nishant Bhardwaj Rajput</h2>
                  <span class="meta text-dark">Founder & President at Dharti Foundation</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; I am glad to share that we are relentlessly working in the field of environmental sustainability and river rejuvenation of the Mother Ganga.We believe that sustainable environmental practices will positively contribute to the environment as well as the social and economic sustainability of the community.With immense pleasure, I welcome you all to become part of this ‘Dharti Foundation’ and convert this dream into reality to make our home greener and cleaner. &ldquo;</p>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="block-33 h-100">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/ritesh.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Mr. Ritesh Pandey</h2>
                  <span class="meta text-dark">Dharti Foundation Public Relation Officer </span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; I would like to appreciate everyone those who are part of this world biggest movement on Environment. Our mission is 500 Crore Tress Plantation at the basin of Ganga River. India is the country where 65 % Population under the age of 35 Years. We are part of young India. So, we have possibility to resolve the pathetic condition of Rivers in our country then we think about healthy India. As a Public Relation Officer I also invite every people to become a part of Rally For Ganga. &ldquo;</p>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="block-33 h-100">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/gaurav.jpeg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Mr.Gaurav Tripathi </h2>
                  <span class="meta text-dark">Content Devlopement and Project Management</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; With skillsets such as science communication, research, content development, and project management,Currently, he is associated with a project related to flood monitoring over Kosiriver (of North Bihar, India) under “NISAR” (NASA-ISRO Synthetic Aperture Radar) mission. He's an environmental enthusiast and has very keen interest in environmental sustainability. &ldquo;</p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-33 h-100">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/alii.jpeg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Md. Quaisar Ali</h2>
                  <span class="meta text-dark">Financial Management Research Analyst</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Rally for Ganga is one of the biggest movements initiated by the Dharti Foundation to promote water sustainability and to curb water wastage in India. This movement is started by the President and Founder of the organization Mr. Nishant Bhardwaj and is widely spread in the states of Bihar, Jharkhand, West Bengal, Uttarakhand, and Uttar Pradesh. This movement will regain the lost environmental essence and transform the lives of more than 43.55 crorespeople. &ldquo;</p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-33 h-100">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/chandraa.jpeg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Mr. Chandrakant Singh</h2>
                  <span class="meta text-dark">Research Analyst</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; He is known for his oratory. He has a keen interest in Social Research and Social Activism. He has presented research papers in many international conferences including Researcher Association for The study of South Korea held at JNU.and many other institutions and organizations of national importance. He has been a member of the youth parliament presenting his excellent leadership skills. He has represented India in the embassy of India in Bhutan(Thimphu) at very young age of 19. He does have a poetic heart that paints the social issues on paper. &ldquo;</p>
                </blockquote>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- END .block-4 -->
  </div>
  <div class="bg-primary py-5">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <h3 class="text-white mb-4 font-weight-normal">How to save the ganga River?</h3>
          <p class="text-white mb-5">Moved by the government's inaction towards saving the Ganges, the eminent Ganga Mukti Sangram Saamiti decided to initiate a mass drive by gathering thousands of Ganga Devotees along with the Ganga Rath which travelled through Varanasi on 14 June and then to Allahabad, Kanpur, Matura, Vrindavan and finally reach to Delhi.</p>
          <p class="mb-0"><a href="Payment/index.php" class="glow-on-hover btn-outline-white px-4 py-3">DONATE NOW</a></p>
        </div>
      </div>
    </div>
  </div>
  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5">
          <h3 class="mb-4">About Us</h3>
          <p class="mb-5">The Ganga Water Rally is the first major water sporting events of its kind in the state. Here, the adventurous persons would be taken on a nerve rattling sojourn down the Ganga from Prayagraj to Varanasi through Mirzapur and Chunar.!</p>
        </div>
        <div class="col-md-5 mb-5 pl-md-5">
          <div class="mb-5">
            <h3 class="mb-4">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Address:</span>
                <span class="text-white">House No:- A/140, Baba Balak Nath Mandir,
                Chander Vihar, New Delhi-110091</span>
              </li>
              <li class="d-block">
                <span class="d-block">Mobile:</span><span class="text-white">+91-7598121941</span>
              </li>
              <li class="d-block">
                <span class="d-block">Email:</span><span class="text-white">dhartifoundation.info@gmail.com</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="about.php">About</a></li>
              <li><a href="http://www.ncero.com/">Get Involved</a></li>
              <li><a href="portfolio.php">Gallery</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        <div class="col-md-3">
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->



<!-- Footer -->
<footer class="page-footer font-small" style="background-color: #333333; rgb(51,51,51);">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic" href="https://www.facebook.com/nishant.b.rajput">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" href="https://twitter.com/GangaRally">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Youtube +-->
          <a class="ins-ic mr-3" href="https://www.youtube.com/channel/UCpblaL_wwjaa0SlODsaWtdw">
            <i class="fab fa-youtube fa-lg mr-md-5 mr-3 fa-2x"></i>
          </a>
          <!--Linkedin -->
          <a class="li-ic" href="https://www.linkedin.com/in/nishant-bhardwaj-rajput-51530869/">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="https://www.instagram.com/kavinishantbhardwaj/">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <!-- <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a> -->
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> RallyForGanga</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+918687767493", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->


  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/main.js"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
</body>
</html>