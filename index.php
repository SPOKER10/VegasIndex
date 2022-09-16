<?php
  //Players Graph
  require_once 'mdb.php';
  $link = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  $query = mysqli_query($link, "SELECT record_players, record_date FROM inf_record LIMIT 29");
  while($row=mysqli_fetch_array($query))
  {
    $data[] = $row['record_date'];
    $players[] = $row['record_players'];
  }

  //Click Counts
  $query = mysqli_query($link, "SELECT Nr FROM clickcounts WHERE ID=1");
  $fclick = mysqli_fetch_array($query)['Nr'];

  $query = mysqli_query($link, "SELECT Nr FROM clickcounts WHERE ID=2");
  $pclick = mysqli_fetch_array($query)['Nr'];

  $query = mysqli_query($link, "SELECT Nr FROM clickcounts WHERE ID=3");
  $yclick = mysqli_fetch_array($query)['Nr'];

  $query = mysqli_query($link, "SELECT Nr FROM clickcounts WHERE ID=4");
  $faclick = mysqli_fetch_array($query)['Nr'];

  $query = mysqli_query($link, "SELECT count(*) as tc from players WHERE Status=1");
  $Online = mysqli_fetch_object($query)->tc;

  $query = mysqli_query($link, "SELECT count(*) as tc from bans");
  $Banned = mysqli_fetch_object($query)->tc;

  $query = mysqli_query($link, "SELECT count(*) as tc from houses");
  $Hous = mysqli_fetch_object($query)->tc;

  $query = mysqli_query($link, "SELECT count(*) as tc from business");
  $Biz = mysqli_fetch_object($query)->tc;

  mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index Gaming</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/chart.min.js"></script>
</head>
<body>

<div class="device-notification">
  <div class="contact--lockup">
    <div class="modal">
        <a class="device-notification--logo" href="#0">
    <img src="assets/img/logo.png" alt="VEGAS INDEX">
    <p class="lg">VEGAS INDEX</p>
  </a>
  </br>Rezolutia este prea mica pentru a afisa index-ul!
      <ul class="modal--options">
        <li class="btn-change"><a href="#" onclick="countClicks(1)"><i class="fa fa-500px"></i> FORUM</br><font style="font-size:12px;"><i class="fa fa-feed"></i> <?php echo $fclick; ?></font></a></li>
        <li class="btn-change"><a href="#" onclick="countClicks(2)"><i class="fa fa-bolt"></i> PANEL</br><font style="font-size:12px;"><i class="fa fa-feed"></i> <?php echo $pclick; ?></font></a></li>
        </hr>
        <li class="btn-change"><a href="#" onclick="countClicks(3)"><i class="fa fa-youtube"></i> YOUTUBE</br><font style="font-size:12px;"><i class="fa fa-feed"></i> <?php echo $yclick; ?></font></a></li>
        <li class="btn-change"><a href="#" onclick="countClicks(4)"><i class="fa fa-facebook"></i> FACEBOOK</br><font style="font-size:12px;"><i class="fa fa-feed"></i> <?php echo $faclick; ?></font></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="#0"><img src="assets/img/logo.png" alt="VEGAS INDEX"><p class="lg">VEGAS INDEX</p></a>
          <div class="header--nav-toggle lg"><i class="fa fa-image" style="font-size:18px;"></i></div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span><i class="fa fa-home"></i> Home</span></li>
            <li><span><i class="fa fa-anchor"></i> Systems</span></li>
            <li><span><i class="fa fa-bullseye"></i> About</span></li>
            <li><span><i class="fa fa-android"></i> Media</span></li>
            <li><span><i class="fa fa-cubes"></i> Server</span></li>
          </ul>
        </nav>
        <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="dso" id="ok">
            <div class="intro">
              <div class="intro--banner">
                <h1 class="ann">Bun venit...</h1>
                <div id="slideshow">
                 <header id="img" class="masthead" style="border-radius: 20%;"><canvas id="myChart" width="30" height="10"></header>
              </div>
              </div>
              <div class="intro--options">
                <a href="#0" id="s1" onclick="drawHome(1)" style="color:#00ff66;">
                  <h3><i class="fa fa-film"></i> TEXT...</h3>
                  <p>De editat, aici ownerii isi pot trece textele...</br>Test...</p>
                </a>
                <a href="#0" onclick="drawHome(2)" id="s2">
                  <h3><i class="fa fa-glass"></i> TEXT...</h3>
                  <p>De editat, aici ownerii isi pot trece textele...</br>Test...</p>
                </a>
                 <a href="#0" onclick="drawHome(3)" id="s3">
                  <h3><i class="fa fa-gift"></i> TEXT...</h3>
                  <p>De editat, aici ownerii isi pot trece textele...</br>Test...</p>
                </a>
                 <a href="#0" onclick="drawHome(4)" id="s4">
                  <h3><i class="fa fa-send-o"></i> TEXT...</h3>
                  <p>De editat, aici ownerii isi pot trece textele...</br>Test...</p>
                </a>
              </div>
            </div></div>
          </li>
          <li class="l-section section">
            <div class="ds">
            <div class="work">
              <h2 class="ann">O variatate de sisteme...</h2>
              <div class="work--lockup">
                <ul class="slider">
                  <li class="slider--item slider--item-left">
                      <div class="slider--item-image">
                        <img src="assets/img/pol.png">
                      </div>
                      <p class="slider--item-title">DON'T MOVE!</p>
                      <p class="slider--item-description">Politia este mereu prezenta la datorie, crezi ca-i poti face fata? Sau... crezi ca i te poti alatura?</br>TU ALEGI!</p>
                  </li>
                  <li class="slider--item slider--item-center">
                      <div class="slider--item-image">
                        <img src="assets/img/tun.png">
                      </div>
                      <p class="slider--item-title">TUNNING EVENT</p>
                      <p class="slider--item-description">Ce este mai frumos pe strazile orasului decat o masina tunata? Participa si tu alaturi de jucatorii serverului la diverse evenimente pe aceasta tema.</br>Premiile sunt destul de considerabile, sigur nu vrei sa le ratezi!</p>
                  </li>
                  <li class="slider--item slider--item-right">
                      <div class="slider--item-image">
                        <img src="assets/img/sky.png">
                      </div>
                      <p class="slider--item-title">SKYDIVE</p>
                      <p class="slider--item-description">Adrenalina... Adrenalina face parte din acest server, vino alaturi de noi s-o traiesti la cote maxime!</p>
                  </li>
                  <li class="slider--item">
                      <div class="slider--item-image">
                        <img src="assets/img/rsf.png">
                      </div>
                      <p class="slider--item-title">FUN IN SF</p>
                      <p class="slider--item-description">Distractie in SF? Da... Ne distram oriunde si oricand, te asteptam si pe tine alaturi de noi, nu vei regreta!</p>
                  </li>
                  <li class="slider--item">
                      <div class="slider--item-image">
                        <img src="assets/img/rc.png">
                      </div>
                      <p class="slider--item-title">RACE</p>
                      <p class="slider--item-description">Nevoia de viteza se simte la cote maxime aici, tu crezi ca poti fi un pilot de curse bun? Faci fata provocarii? Demonstreaza!</p>
                  </li>
                </ul>
                <div class="slider--prev">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                </div>
                <div class="slider--next">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                </div>
              </div>
            </div></div>
          </li>
          <li class="l-section section">
            <div class="about">
              <div class="about--banner">
                <h2 class="ann">Cateva<br>informatii</br>folositoare...</h2>
                <a href="#0" id="ipHR" onclick="copyIP('11.111.11.11:7777')"><span class='txt'>COPY SERVER IP</span>
                  <span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                  </span>
                </a>
              </br>
              <a href="#0" id="panelHR" onclick="copyPanel('www.vegas-index-panel.ro')"><span class='txt'>COPY PANEL ADDRESS</span>
                  <span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                  </span>
                </a>
              </br><a href="#0" id="forumHR" onclick="copyForum('www.vegas-index-forum.ro')"><span class='txt'>COPY FORUM ADDRESS</span>
                  <span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                  </span>
                </a>
                <img src="assets/img/about.png" alt="About Us">
              </div>
              <div class="about--options">
                <a href="#" onclick="document.getElementById('id1').style.display='block'">
                  <h3>VEGAS INDEX</h3>
                </a>
                <a href="#" onclick="document.getElementById('id2').style.display='block'">
                  <h3>DOAR DE TEST</h3>
                </a>
                <a href="#" onclick="document.getElementById('id3').style.display='block'">
                  <h3>INFORMATII NOI</h3>
                </a>
                <a href="#" onclick="document.getElementById('id4').style.display='block'">
                  <h3>DESCHIDERE</h3>
                </a>
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="contact">
              <div class="contact--lockup">
                <div class="modal">
                  <div class="modal--information">
                    <p class="ann"><i class="fa fa-info-circle" style="font-size:30px;"></i></br>NE CONECTAM?</p>
                  </div>
                  <ul class="modal--options">
                    <li class="btn-change"><a href="#" onclick="countClicks(1)"><i class="fa fa-500px"></i> FORUM</br><font style="font-size:12px;"><i class="fa fa-feed"></i> <?php echo $fclick; ?></font></a></li>
                    <li class="btn-change"><a href="#" onclick="countClicks(2)"><i class="fa fa-bolt"></i> PANEL</br><font style="font-size:12px;"><i class="fa fa-feed"></i> <?php echo $pclick; ?></font></a></li>
                    </hr>
                    <li class="btn-change"><a href="#" onclick="countClicks(3)"><i class="fa fa-youtube"></i> YOUTUBE</br><font style="font-size:12px;"><i class="fa fa-feed"></i> <?php echo $yclick; ?></font></a></li>
                    <li class="btn-change"><a href="#" onclick="countClicks(4)"><i class="fa fa-facebook"></i> FACEBOOK</br><font style="font-size:12px;"><i class="fa fa-feed"></i> <?php echo $faclick; ?></font></a></li>
                  </ul>
                </div>
                <img src="assets/img/log.png" style="width:45%;" alt="VEGAS INDEX">
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="hire2">
              <div class="hire">
              <h2 class="ann">Server Stats</h2>
              <form class="work-request">
                <div class="work-request--options">
                  <span class="options-a">
                    <label for="opt-1" style="background-image: url('assets/img/o1.jpg');">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      <i class="fa fa-users"></i> Online: <?php echo $Online; ?>/500
                    </label>
                    <label for="opt-2" style="background-image: url('assets/img/o2.jpg');">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      <i class="fa fa-ban"></i> Banned: <?php echo $Banned; ?>
                    </label>
                    <label for="opt-3" style="background-image: url('assets/img/o3.jpg');">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      <i class="fa fa-home"></i> Houses: <?php echo $Hous; ?>
                    </label>
                  </span>
                  <span class="options-b">
                    <label for="opt-4" style="background-image: url('assets/img/o4.jpg');">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      <i class="fa fa-bank"></i> Businesses: <?php echo $Biz; ?>
                    </label>
                    <label for="opt-5" style="background-image: url('assets/img/bg2.png');">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      <i class="fa fa-microchip"></i> Factions: 12
                    </label>
                    <label for="opt-6" style="background-image: url('assets/img/gb3.jpg');">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      <i class="fa fa-cubes"></i> Jobs: 14
                    </label>
                  </span>
                </div>
                <a href="http://monitor.sacnr.com/server-1809870.html"><img src="http://monitor.sacnr.com/sig-4-1809870" /></a>
              </form></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <ul class="outer-nav">
    <li class="is-active"><i class="fa fa-home"></i> Home</li>
    <li><i class="fa fa-anchor"></i> Systems</li>
    <li><i class="fa fa-bullseye"></i> About</li>
    <li><i class="fa fa-android"></i> Media</li>
    <li><i class="fa fa-cubes"></i> Server</li>
  </ul>
</div>
<div id="id1" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id1').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <center><p style="color:white;">
         <img src="assets/img/o1.jpg"></br>
        <b class="oks">VEGAS INDEX</b>
        </br></br>Informatii, texte, doar de teste.........</br>Se pot pune aici !!!! adsoasdpoads adspadspoadspoas asoiasoadso
        aiosioadsasiod addiasadsioaodsadsioaiods!</br>adsoasdpoadspoadspoads aspodaoadspoadspoadspoaspoadspo</br>adsoasoapdspoadspoa !!!!</p></center>
    </div>
  </div>
</div>
<div id="id2" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id2').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <center><p style="color:white;">
         <img src="assets/img/o2.jpg"></br>
        <b class="oks">DOAR DE TEST</b>
        </br></br>Informatii, texte, doar de teste.........</br>Se pot pune aici !!!! adsoasdpoads adspadspoadspoas asoiasoadso
        aiosioadsasiod addiasadsioaodsadsioaiods!</br>adsoasdpoadspoadspoads aspodaoadspoadspoadspoaspoadspo</br>adsoasoapdspoadspoa !!!!</p></center>
    </div>
  </div>
</div>
<div id="id3" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id3').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <center><p style="color:white;">
         <img src="assets/img/o3.jpg"></br>
        <b class="oks">INFORMATII NOI</b>
        </br></br>Informatii, texte, doar de teste.........</br>Se pot pune aici !!!! adsoasdpoads adspadspoadspoas asoiasoadso
        aiosioadsasiod addiasadsioaodsadsioaiods!</br>adsoasdpoadspoadspoads aspodaoadspoadspoadspoaspoadspo</br>adsoasoapdspoadspoa !!!!
        aiosioadsasiod addiasadsioaodsadsioaiods!</br>adsoasdpoadspoadspoads aspodaoadspoadspoadspoaspoadspo</br>adsoasoapdspoadspoa !!!!</p></center>
    </div>
  </div>
</div>
<div id="id4" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id4').style.display='none'" class="w3-button w3-display-topright" style="color:red;">&times;</span>
      <center><p style="color:white;">
         <img src="assets/img/o4.jpg"></br>
        <b class="oks">DESCHIDERE</b>
        </br></br>Informatii, texte, doar de teste.........</br>Se pot pune aici !!!!</p></center>
    </div>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>

<!-- Compressed... -->
<script>var ctx = document.getElementById('myChart').getContext('2d'), sid = 1, myChart = new Chart(ctx, {type: 'line', data: {labels: <?php echo json_encode($data);?>, datasets: [ {label: 'Grafic Jucatori', data: <?php echo json_encode($players);?>, backgroundColor: 'rgba(255,0,98,0.5)', borderColor: '#ff0062',}]},options: {legend: {labels: {fontColor: 'white'}},scales: {yAxes: [{ticks: {beginAtZero: true,fontColor: 'white',}}],xAxes: [{ticks: {fontColor: 'white'},}]}}});$("#slideshow > div:gt(0)").hide();var timer = setInterval(function(){if(sid == 4) sid = 0, document.getElementById('s4').style.color = "white";sid++, document.getElementById('s'+sid+'').style.color = "#00ff66";if(sid != 1) document.getElementById('s'+(sid-1)+'').style.color = "white";document.getElementById("ok").style.backgroundImage = 'url("assets/img/gb'+sid+'.jpg")';},  2500);function drawHome(value) {document.getElementById("ok").style.backgroundImage = 'url("assets/img/gb'+value+'.jpg")', clearInterval(timer);switch(value){case 1:sid = 1, document.getElementById('s4').style.color = "white", document.getElementById('s3').style.color = "white",document.getElementById('s2').style.color = "white", document.getElementById('s'+1+'').style.color = "#00ff66";break;case 2:sid = 2, document.getElementById('s4').style.color = "white", document.getElementById('s3').style.color = "white",document.getElementById('s'+2+'').style.color = "#00ff66", document.getElementById('s1').style.color = "white";break;case 3:sid = 3, document.getElementById('s4').style.color = "white", document.getElementById('s2').style.color = "white";document.getElementById('s'+3+'').style.color = "#00ff66", document.getElementById('s1').style.color = "white";break;case 4:sid = 4, document.getElementById('s2').style.color = "white", document.getElementById('s3').style.color = "white";document.getElementById('s'+4+'').style.color = "#00ff66", document.getElementById('s1').style.color = "white";break;}timer = setInterval(function(){if(sid == 4) sid = 0, document.getElementById('s4').style.color = "white";sid++, document.getElementById('s'+sid+'').style.color = "#00ff66";if(sid != 1) document.getElementById('s'+(sid-1)+'').style.color = "white";document.getElementById("ok").style.backgroundImage = 'url("assets/img/gb'+sid+'.jpg")';},  2500);}function copyIP(value) {$('#panelHR .txt').text("COPY PANEL ADDRESS!");document.getElementById('panelHR').setAttribute('style', 'color:#ffffff;');$('#forumHR .txt').text("COPY FORUM ADDRESS!");document.getElementById('forumHR').setAttribute('style', 'color:#ffffff;');$('#ipHR .txt').text("IP COPIED!");document.getElementById('ipHR').setAttribute('style', 'color:#c4302b;');var tempInput = document.createElement("input");tempInput.style = "position: absolute; left: -1000px; top: -1000px";tempInput.value = value;document.body.appendChild(tempInput);tempInput.select();document.execCommand("copy");document.body.removeChild(tempInput);}function copyPanel(value) {$('#ipHR .txt').text("COPY SERVER IP!");document.getElementById('ipHR').setAttribute('style', 'color:#ffffff;');$('#forumHR .txt').text("COPY FORUM ADDRESS!");document.getElementById('forumHR').setAttribute('style', 'color:#ffffff;');$('#panelHR .txt').text("PANEL COPIED!");document.getElementById('panelHR').setAttribute('style', 'color:#c4302b;');var tempInput = document.createElement("input");tempInput.style = "position: absolute; left: -1000px; top: -1000px";tempInput.value = value;document.body.appendChild(tempInput);tempInput.select();document.execCommand("copy");document.body.removeChild(tempInput);}function copyForum(value) {$('#ipHR .txt').text("COPY SERVER IP!");document.getElementById('ipHR').setAttribute('style', 'color:#ffffff;');$('#panelHR .txt').text("COPY PANEL ADDRESS!");document.getElementById('panelHR').setAttribute('style', 'color:#ffffff;');$('#forumHR .txt').text("FORUM COPIED!");document.getElementById('forumHR').setAttribute('style', 'color:#c4302b;');var tempInput = document.createElement("input");tempInput.style = "position: absolute; left: -1000px; top: -1000px";tempInput.value = value;document.body.appendChild(tempInput);tempInput.select();document.execCommand("copy");document.body.removeChild(tempInput);}function countClicks(vas){$.ajax({type: "POST",data: { "sad": vas },url: "update_value.php"});}</script>
</html>
