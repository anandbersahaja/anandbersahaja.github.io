<?php 

// function get_curl($url){

//   // create url resource
//   $ch = curl_init();

//   // set url
//   curl_setopt($ch, CURLOPT_URL, $url);

//   //  return the transfer as string
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//   // $output contains the output string
//   $output = curl_exec($ch);

//   // clos curl resource to free up system resources
//   curl_close($ch);

//   return json_decode($output, 1);
// }


// $url = 'https://www.googleapis.com/youtube/v3/playlistItems?key=AIzaSyDeIIInYgI6E7Eu1gV6OW7er4V8NsYx2ek&part=snippet,contentDetails&playlistId=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&maxResults=1';

// $output = get_curl($url);

$channelTitle = $output['items'][0]['snippet']['channelTitle'];
$videoTitle = $output['items'][0]['snippet']['title'];
$videoId = $output['items'][0]['snippet']['resourceId']['videoId'];

$env = file_get_contents("env.json");
$env = json_decode($env, true);


// PORTFOLIO
$portfolios = $env['items']['img']['portfolio']['url'];

// SLIDER
$sliders = $env['items']['img']['slider']['url'];
$words = $env['items']['img']['slider']['word'];
$taglines = $env['items']['img']['slider']['tagline'];

// CLIENT
$clients = $env['items']['img']['client']['url'];

?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- My style -->
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Bersahaja</title>
    </head>

    <body id="home" class="scrollspy">

    <!-- Navbar -->
      <div class="navbar-fixed">
        <nav class="white">
          <div class="container">

            <div class="nav-wrapper">
              <a href="#home" class="brand-logo black-text">Bersahaja</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#about" class="black-text">About Us</a></li>
                <li><a href="#clients" class="black-text">Clients</a></li>
                <li><a href="#services" class="black-text">Service</a></li>
                <li><a href="#portfolio" class="black-text">Portfolio</a></li>
                <li><a href="#contact" class="black-text">Contact Us</a></li>
              </ul>
            </div>
    
          </div>
        </nav>
      </div>
      <!-- Akhir navbar -->


      <!-- Sidebar -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">About Us</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#services">Service</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact Us</a></li>        
      </ul> 
      <!-- akhir siderbar -->


      <!-- Slider -->
      <div class="slider">
        <ul class="slides">
          <?php for($i=0; $i<count($sliders); $i++): ?>
            <li>
              <img src="<?= $sliders[$i] ?>">
              <div class="caption left-align">
                <h3><?= $taglines[$i] ?></h3>
                <h5 class="light gery-text text-lighten-3"><?= $words[$i] ?></h5>
              </div>
            </li>
          <?php endfor; ?>
        </ul>
      </div>
      <!-- Akhir Slider -->


      <!-- About US -->
      <section class="about scrollspy" id="about">
        <div class="container">
          <div class="row">
            <h3 class="center light gery-text text-lighten-3">About Us</h3>
            <div class="col m6 light">
              <h5>We Are Profeesionals</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt fuga, veniam dolorem explicabo ipsa eum maxime sint delectus qui hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, atque! Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Repudiandae, ut.</p>
            </div>

            <div class="col m6 light">
              <p>WEB DEVELOPMENT</p>
              <div class="progress">
                <div class="determinate blue" style="width: 90%"></div>
              </div>
              
              <p>MOBILE APP DEVELOPMENT</p>
              <div class="progress">
                <div class="determinate blue" style="width: 85%"></div>
              </div>
              
              <p>GAME DEVELOPMENT</p>
              <div class="progress">
                <div class="determinate blue" style="width: 85%"></div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- Akhir About US -->


      <!-- Clients -->
      <div class="parallax-container clients scrollspy" id="clients">
      <div class="parallax"><img src="img/slider/z.jpg"></div>

        <div class="center container clients">
          <h3 class="center light white-text text-lighten-3">Clients</h3>
          
          <div class="row">
            <?php foreach($clients as $client):?>
              <div class="col m4 s12">
                <img src="<?= $client ?>">
              </div>
            <?php endforeach; ?> 
          </div>
        </div>
      </div>
      <!-- Akhir Clients -->
  

      <!-- Our Services -->
      <section class="services scrollspy grey lighten-3" id="services">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-4">Services</h3>

            <div class="col m4 s12">
              <div class="center card-panel m4 s12">
                <i class="medium material-icons">desktop_windows</i>
                <h5>Web Development</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eos?</p>
              </div>
            </div>

            <div class="col m4 s12">
              <div class="center card-panel m4 s12">
                <i class="medium material-icons">developer_mode</i>
                <h5>Mobile Development</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eos?</p>
              </div>
            </div>

            <div class="col m4 s12">
              <div class="center card-panel m4 s12">
                <i class="medium material-icons">videogame_asset</i>
                <h5>Game Development</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eos?</p>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- Akhir Our Services -->


      <!-- Portfolio -->
      <section class="portfolio scrollspy" id="portfolio">
        <div class="container">
          <h3 class="center light gery-text text-lighten-3">Portfolio</h3>
          <div class="row">
            <?php foreach($portfolios as $port): ?>
              <div class="col m3 sm12">
                <img src="<?= $port ?>" class="responsive-img materialboxed">
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </section>
      <!-- Akhir portfolio -->

      <!-- Contact Us -->
      <section class="contact scrollspy grey lighten-3" id="contact">
        <div class="container">
          <h3 class="center light grey-text text-darken-4">Contact Us</h3>
          <div class="row">
            <div class="col m5 sm12">
              <div class="center card-panel white-text grey darken-3">
                <i class="material-icons ">mail</i>
                <h5 class="center">Contact</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, laudantium!</p>
              </div>
              <ul class="collection with-header">
                <li class="collection-header">Our Office</li>
                <li class="collection-item">Bersahaja</li>
                <li class="collection-item">jln. Turi Jaya gg1</li>
                <li class="collection-item">Desa Segara Makmur</li>
                <li class="collection-item">North Bekasi, Indoenesia</li>
              </ul>
            </div>

            <div class="col m7 sm12">
              <div class="card-panel">
                <h5>Please fill out this form</h5>
                <div class="input-field">
                  <input type="text" name="name" id="name" class="validate" autocomplete="off">
                  <label for="name">Name</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email" class="validate" autocomplete="off">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="text" name="phone" id="phone" autocomplete="off">
                  <label for="phone">Phone Number</label>
                </div>
                <div class="input-field">
                  <textarea name="message" id="message" class="materialize-textarea"></textarea>
                  <label for="message">Message</label>
                </div>
                <button type="submit" class="btn grey darken-3">Send</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir Contact Us -->


      <!-- Footer -->
        <footer class="page-footer grey darken-4">
          <div class="container">
            <div class="row mb-0">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Social Media</h5>
                <ul>
                  <li><a target="blank" class="blue-text text-accent-2" href="https://www.facebook.com/anandbersahaja/">facebook</a></li>
                  <li><a target="blank" class="red-text text-lighten-1" href="https://www.instagram.com/anandbersahaja/">instagram</a></li>
                  <li><a target="blank" class="blue-text text-darken-3" href="https://www.linkedin.com/in/achmadsyaifulanand/">linkedin</a></li>
                  <li><a target="blank" class="grey-text text-lighten-3" href="https://github.com/anandbersahaja">github</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright built by Anand Bersahaja
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
          </div>
        </footer>
      <!-- Akhir Footer -->


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);


        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          duration: 700,
          interval: 3000

        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialize = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialize);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 65
        });

      </script> 

    </body>
  </html>
