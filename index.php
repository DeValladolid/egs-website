<?php
//	$subscription_key  ='c7be03da1bmsh3f62a5a4f8824a4p155957jsnfeea4ebe4287';
//    $host = 'https://epicgames.lazylinks.fr/api.php';
//    $request_headers = array(
//                    "X-RapidAPI-Key: " . $subscription_key,
//                    'Content-Type: application/json'
//                );
//
//	$url = "https://epicgames.lazylinks.fr/api.php";
//
//    $response = callAPI("GET", $host, "");
//
//
//    // Decode
//    $result = json_decode($response);
//
//	echo "OK";
//
//    function callAPI($method, $url, $data){
//        $curl = curl_init();
//
//        switch ($method){
//            case "POST":
//                curl_setopt($curl, CURLOPT_POST, 1);
//                if ($data)
//                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//                break;
//            case "PUT":
//                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
//                if ($data)
//                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//                break;
//            default:
//                if ($data)
//                    $url = sprintf("%s?%s", $url, http_build_query($data));
//        }
//
//        // OPTIONS:
//        curl_setopt($curl, CURLOPT_URL, $url);
//        curl_setopt($curl, CURLOPT_USERAGENT, $url);
//        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//            'X-RapidAPI-Key: c7be03da1bmsh3f62a5a4f8824a4p155957jsnfeea4ebe4287',
//            'Host: fnbr.co',
//            'cache-control: max-age=1800'
//        ));
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);
//        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//
//        // EXECUTE:
//        $result = curl_exec($curl);
//        if(!$result){die("Connection Failure");}
//        curl_close($curl);
//        return $result;
//    }
$subscription_key  ='c7be03da1bmsh3f62a5a4f8824a4p155957jsnfeea4ebe4287';
$opts = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
            "Cookie: foo=bar\r\n" .
            "User-agent: BROWSER-DESCRIPTION-HERE\r\n".
            "X-RapidAPI-Host: egs-catalog.p.rapidapi.com".
            "X-RapidAPI-Key: c7be03da1bmsh3f62a5a4f8824a4p155957jsnfeea4ebe4287"
    )
);
$context = stream_context_create($opts);
// Open the file using the HTTP headers set above
$file = file_get_contents('https://epicgames.lazylinks.fr/api.php', false, $context);
$rarity = file_get_contents('https://epicgames.lazylinks.fr/api.php', false, $context);
$image_data = json_decode($file, true);
$rarityid = json_decode($file, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="./css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style-2.css">
    <!--Epic Games Store Styles-->
    <style>
            .black-skin {
                background-color: #263238;
            }
            .StoreRow-card_79057ee9 {
                width: fit-content !important;
            }
            .data {
                padding-top: 20px;
            }
            .row {
            display: flex;
            flex-wrap: wrap;
            }

            .row > div[class*='col-'] {
            display: flex;
            }

            .lazyload {
            border: 0;
            opacity: 0;
            }

            .lazyload:not(.initial) {
              transition: opacity 1s;
            }

            .lazyload.initial,
            .lazyload.loaded,
            .lazyload.error {
              opacity: 1;
            }

            .lazyload:not([src]) {
              visibility: hidden;
            }
            </style>

</head>
<body class="black-skin">
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark elegant-color">

        <!-- Navbar brand -->
        <div class="container">

        <a class="navbar-brand" href="#">
                <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="mdb logo">
        </a>
      
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
      
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
      
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
      
          </ul>
          <!-- Links -->
      
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->
    </div>
      </nav>
      <!--/.Navbar-->

        <div class="container black-skin">
            
                    <div class="row data">
                    <?php
                        for ($i = 0; $i < count($image_data['games']); $i ++) {
                            ?>
                            <div class="col-sm-4 data" id="<?php echo $image_data['games'][$i]['category'] ?>">
                              <!--Card-->
                <!-- Card Narrower -->
                
                        <div class="card elegant-color-dark card-cascade narrower">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                        <h5 style="position: absolute;"><span id="" class="badge badge-primary <?php echo $image_data['games'][$i]['category'] ?> prepurchase-<?php echo $image_data['games'][$i]['isPrepurchase'] ?>" style="position: absolute;"></span></h5>
                                        <div class="StoreCard-logo_cb78d7ad">
                                                <div class="DynamicLogo-wrapper_b556470a DynamicLogo-smallContainer_a34ac250 DynamicLogo-visible_68a10102">
                                                    <img class="DynamicLogo-logo_f5443fce lazyload" data-src="<?php echo $image_data['games'][$i]['DieselGameBoxLogo'] ?>">
                                                </div>
                                        </div>
                                   <img  class="card-img-top" src="<?php echo $image_data['games'][$i]['DieselStoreFrontWide'] ?>" alt="">
                                   <a>
                                      <div class="mask rgba-white-slight"></div>
                                   </a>
                                </div>
                                <!-- Card content -->
                                <div class="card-body text-white card-body-cascade">
                                   <!-- Label -->
                                   <h5 class="pink-text pb-2 pt-1"><?php echo $image_data['games'][$i]['developerName'] ?> | <?php echo $image_data['games'][$i]['publisherName'] ?></h5>
                                   <!-- Title -->
                                   <h4 class="font-weight-bold card-title"><?php echo $image_data['games'][$i]['title'] ?></h4>
                                   <!-- Text -->
                                   <p class="card-text"></p>
                                   <!-- Button -->
                                   <a class="btn btn-unique">Details</a>
                                   <!-- Button -->
                                   <a href="https://www.epicgames.com/store/en-US/product/<?php echo $image_data['games'][$i]['com.epicgames.app.productSlug'] ?>" target="about_blank" class="btn btn-unique">Store</a>
                                </div>
                                <!-- Card footer -->
                                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                   <ul class="list-unstyled list-inline font-small">
                                      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i><span class="shortDateFormat"><?php echo $image_data['games'][$i]['effectivedate'] ?></span></li>
                                      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fas fa-money-bill-wave"></i> <?php echo $image_data['games'][$i]['discountprice'] ?></a></li>
                                      <li class="list-inline-item pr-2 white-text"><i class="fas fa-chevron-up"></i> - <i class="fas fa-chevron-down"></i></li>
            
                                   </ul>
                                </div>
                             </div>
                             <!-- Card Narrower -->
                             <!--/.Card-->
                            </div>
                            <?php
                              }
                            ?>
                            
                          </div>
            
            
        </div>

 <!-- SCRIPTS -->
    
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="lazyload/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="lazyload/jquery.lazy.plugins.min.js"></script>
  
  
  <script src="js/lazyload.js"></script>  
  <script type="text/javascript">
  (function() {
				function logElementEvent(eventName, element) {
					console.log(
						Date.now(),
						eventName,
						element.getAttribute("data-src")
					);
				}

				var callback_enter = function(element) {
					logElementEvent("🔑 ENTERED", element);
				};
				var callback_exit = function(element) {
					logElementEvent("🚪 EXITED", element);
				};
				var callback_reveal = function(element) {
					logElementEvent("👁️ REVEALED", element);
				};
				var callback_loaded = function(element) {
					logElementEvent("👍 LOADED", element);
				};
				var callback_error = function(element) {
					logElementEvent("💀 ERROR", element);
					element.src =
						"https://via.placeholder.com/440x560/?text=Error+Placeholder";
				};
				var callback_finish = function() {
					logElementEvent("✔️ FINISHED", document.documentElement);
				};

				var ll = new LazyLoad({
					threshold: 0,
					// Assign the callbacks defined above
					callback_enter: callback_enter,
					callback_exit: callback_exit,
					callback_reveal: callback_reveal,
					callback_loaded: callback_loaded,
					callback_error: callback_error,
					callback_finish: callback_finish
				});
			})();
  </script>

<script src="js/jquery-dateformat.min.js"></script>
<script>
    jQuery(function() {
          var shortDateFormat = 'dd/MM/yyyy';
          var longDateFormat  = 'dd/MM/yyyy HH:mm:ss';

          jQuery(".shortDateFormat").each(function (idx, elem) {
              if (jQuery(elem).is(":input")) {
                  jQuery(elem).val(jQuery.format.date(jQuery(elem).val(), shortDateFormat));
              } else {
                  jQuery(elem).text(jQuery.format.date(jQuery(elem).text(), shortDateFormat));
              }
          });
          jQuery(".longDateFormat").each(function (idx, elem) {
              if (jQuery(elem).is(":input")) {
                  jQuery(elem).val(jQuery.format.date(jQuery(elem).val(), longDateFormat));
              } else {
                  jQuery(elem).text(jQuery.format.date(jQuery(elem).text(), longDateFormat));
              }
          });
      });
</script>
<script src="script.js"></script>
    
</body>
</html>