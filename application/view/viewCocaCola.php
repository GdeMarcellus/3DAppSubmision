<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

      <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
    
    <title>Assignment MVC Web 3D Applications</title>

  </head>
  <body id="bodyColor">
      <!-- The 3D App header -->
      <nav class = "navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <span onclick="openNav()"><i class=" fa fa-fw fa-search" style="color: #ffffff;"></i></span>
      
      <div class="logo">
                  <a class="navbar-brand" href="#">
                    <h1>Coca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                  </a>
        </div>
      
        <nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a id="navHome" href="#">Home</a>
        <a id="navAbout" href="#" data-toggle="popover" data-trigger="hover" data-placement="left" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
        <li class="nav-item dropdown">
          <a id="navModels" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-placement="bottom" title="X3D Models">Models</a>
          <div class="dropdown-menu"> 
              <a class="dropdown-item" href="#" onclick="cokeScene(); cokeDescription();">Coca Cola</a>
              <a class="dropdown-item" href="#" onclick="fantaScene(); fantaDescription();">Fanta</a>
              <a class="dropdown-item" href="#" onclick="poweradeScene(); poweradeDescription();">Powerade</a>
          </div>
        </li>
        <a  href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
      </nav>
    </nav>


      

      <!-- This is the main contents of the page, -->
      <div class="container-fluid">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">
            

          <div class="row">
              <div class="col-sm-12">
                    <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                      </div> 
              </div>
            </div>  
            <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
            <div class="row">
              <?php for ($i=0; $i <count($data); $i++){ ?>
                  <div class="col-sm-4" >
                    <div class="card img-narrow"> 
                      
                      <a href="../application/assets/images/renderImages/<?php echo $data[$i]['brand'] ?>.png" data-fancybox data-caption="My 3D <?php echo $data[$i]['brand'] ?> Render">
                      <img class="" src="../application/assets/images/<?php echo str_replace(' ', '_', $data[$i]['brand']) ?>.jpg" alt="<?php echo $data[$i]['brand'] ?>" style="width:100%;">
                      </a>
                            <div class="card-body">
                                <div id="<?php echo "title_".strval($i+1) ?>" class=""></div>
                                <div id="<?php echo "subTitle_".strval($i+1) ?>" class=""></div>
                                <div id="<?php echo "description_".strval($i+1) ?>" class=""></div> 
                                <div id="<?php echo "url_".strval($i+1) ?>" class="btn btn-primary btn-responsive"></div>                     
                            </div>
                      </div>
                  </div>
                <?php } ?>

            </div>
          <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->
          

          
          </div>  
          <!-- End home page contents-->

          <div id="about" style="display:none;">
              where i got some resource for this site
              <li> <a href="https://www.vecteezy.com/free-vector/coca-cola-logo">Coca Cola Logo Vectors by Vecteezy</a></li>
              <li><a href="https://pt.wikipedia.org/wiki/Fanta#/media/Ficheiro:Fanta_logo_(2016).png">fanta logo since 2016  found in wikipedia</a></li>
              <li><a href="https://ie.coca-colahellenic.com/en/our-24-7-portfolio/hydration/powerade">powerade logo found here</a></li>
              <li><a href="https://www.pinterest.com/pin/30-soda-can-template-printable--453667362472954776/">coke label for texture found here</a></li>
              <li><a href="https://www.reddit.com/r/europe/comments/10aesx4/anpc_discovered_differences_in_the_composition_of/">fanta label used for both bottle texture found here</a></li>
            </div>  

          <!-- This is the content for X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
              <!-- X3D Model -->
              <div class="col-sm-8">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <?php for ($i=0; $i <count ($data); $i++){ ?>
                      <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#" onMouseUp=
                          "<?php echo strtolower($data[$i]['brand']). "Description();". strtolower($data[$i]['brand']). "Scene(); " ?>"><?php echo $data[$i]['brand']?>
                        </a>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>

                    <!-- X3D model tiles and Buttons to change bettwen model -->
                    <?php for ($i=0; $i <count ($data); $i++){ ?>
                        <div id="<?php echo "x3dModelTitle_" . strtolower($data[$i]['brand']) ?>" class="card-title drinksText"></div>
                    <?php } ?>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                <?php for ($i=0; $i <count ($data); $i++){ ?>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/<?php echo strtolower($data[$i]['brand']) ?>.x3d" > </inline>
                                    </transform>
                                    <?php } ?>
                                  </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <?php for ($i=0; $i <count ($data); $i++){ ?>
                        <div id="<?php echo "x3dCreationMethod_" . strtolower($data[$i]['brand']) ?>" class="card-text drinksText"><?php echo "x3d Creation Method: " . $data[$i]['x3dCreationMethod'] ?></div>
                        <?php } ?>
                    </div>
                  </div>
                </div>
                                              <!-- 3D image gallery -->
                <div style = "width: 100%">
                  <div class="card text-left" style = "width: 100%">
                    <div class="card-body"  style = "width: 50%">
                        <div id = "title_gallery" class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                  </div> <!-- End gallery card -->
                </div> <!-- End gallery column --> 
              </div>
              <?php for ($i=0; $i <count ($data); $i++){ ?>
              <!-- Row to hold one card to hold the coke descriptive text, etc.-->
              <div id="<?php echo strtolower($data[$i]['brand'])."Description"  ?>" class="row" >
                  <div class="col-sm-12">
                      <div class="card">
                          <div class="card-body">
                              <div id="<?php echo "title_".strtolower($data[$i]['brand'])  ?>" class="card-title drinksText">
                              <h2><?php echo $data[$i]['modelTitle'] ?> </h2>
                              </div>
                              <div id="<?php echo "subTitle_".strtolower($data[$i]['brand']) ?>" class="card-subtitle drinksText">
                              <h3> <?php echo $data[$i]['modelSubtitle'] ?> </h3>
                            </div>
                              <div id="<?php echo "description_".strtolower($data[$i]['brand'])  ?>" class="card-text drinksText">
                              <?php echo $data[$i]['modelDescription']  ?>
                            </div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive"><?php echo $data[$i]['brand'] ?></a>                 
                          </div>
                      </div>
                  </div>
              </div> <!-- End description contents -->
          <?php } ?>            
            </div> <!-- End row for X3D Model and Gallery -->
          </div> 

          <!-- Row to hold the interaction panels -->
          <div id="interaction" class="row" style="display:none;">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints play around a bit with it</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">Rotate</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These why not make the model rotate a bit</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                              <a class="nav-link active" href="#">Render</a>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive" onclick="polyFrame();">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the  lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                              <a class="nav-link active" href="#">Render</a>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive" onclick="frontLight();">Ligth 1</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="leftLight();">Ligth 2</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="leftLight();">Ligth 3</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="backLight();">Ligth 4</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="offLight();">off</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of lighting options multiple ligth can be on at once</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div> <!-- End row for the interaction panels -->

                  

      </div> <!-- End 3D App SPA Contents -->
      
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2023 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 

      
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">3D App Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Gregoire de Marcellus, </p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="../application/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="../application/js/swap_restyle.js"></script>

      
      <script src="../application/js/display.js"></script>
      

      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="../application/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="../application/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="../application/js/jquery.fancybox.min.js"></script>
  </body>
</html>