<!-- Stage- Bootstrap one page Event ticket booking theme 
    Created by pixpalette.com - online design magazine -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hamster</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom2.css" rel="stylesheet">

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
    <div class="loader">
        <div>
            <img src="images/icons/preloader.gif" />
        </div>
    </div><!-- 로딩 -->

    <div class="container-fluid">
        <div class="row">
            <nav class="side-menu">
                <ul>
                    <li class="active"><a href="#nav1" data-toggle="tab">My Info<span><i class="fa fa-map-marker"></i></span></a></li>
                    <li><a href="#nav2" data-toggle="tab">latest news<span><i class="fa fa-compass"></i></span></a></li>
                    <li><a href="#nav3" data-toggle="tab">Direct MSG<span><i class="fa fa-bicycle"></i></span></a></li>
                    <li><a href="#nav4" data-toggle="tab">Accomodation<span><i class="fa fa-bed"></i></span></a></li>
                    <li><a href="#nav5" data-toggle="tab">Free Time<span><i class="fa fa-book"></i></span></a></li>
                    <li><a href="#nav6" data-toggle="tab">Food&Drnk<span><i class="fa fa-beer"></i></span></a></li>
                </ul>
            </nav><!-- side-menu end -->
            <nav class="submenu">
                <input type="checkbox" href="#" class="submenu-open" name="submenu-open" id="submenu-open" />
                <label class="submenu-open-button" for="submenu-open">
                    <span class="hamburger hamburger-1"></span>
                    <span class="hamburger hamburger-2"></span>
                    <span class="hamburger hamburger-3"></span>
                </label>
                <a href="#" class="submenu-item"> <i class="fa fa-bar-chart"></i> </a>
                <a href="#" class="submenu-item"> <i class="fa fa-plus"></i> </a>
                <a href="#" class="submenu-item"> <i class="fa fa-heart"></i> </a>
                <a href="#" class="submenu-item"> <i class="fa fa-envelope"></i> </a>
            </nav><!-- submenu end -->
            <!-- <nav>
                <ul>
                    <li class="active"><a href="#nav1" data-toggle="tab">1</a></li>
                    <li><a href="#nav2" data-toggle="tab">2</a></li>
                    <li><a href="#nav3" data-toggle="tab">3</a></li>
                </ul>
            </nav> -->
            <!-- nav tab page -->
            <div class="nav_page tab-content">
                <div class="col-sm-5 left-wrapper tab-pane active" id="nav1">
                    <div class="event-banner-wrapper">
                        <div class="logo">
                            <h1>Hamster</h1>
                        </div>
                        <h2>Twitter<br>Instagram<span>fake</span></h2>
                    </div>
                </div><!-- nav1 end -->
                <div class="col-sm-5 left-wrapper tab-pane" id="nav2">
                    <div class="event-banner-wrapper">
                        <div class="logo">
                            <h1>햄스터입니다!</h1>
                        </div>
                        <h2>Twitter<br>Instagram<span>fake</span></h2>
                    </div>
                </div><!-- nav2 end -->
                <div class="col-sm-5 left-wrapper tab-pane" id="nav3">
                    <div class="event-banner-wrapper">
                        <div class="logo">
                            <h1>햄스터입니다!</h1>
                        </div>
                        <h2>Twitter<br>Instagram<span>fake</span></h2>
                    </div>
                </div><!-- nav3 end -->
            </div><!-- nav_page end -->
            <div class="col-sm-7 right-wrapper">
                <div class="row" id="post_box">
                    <div class="col-md-12">
                        <div class="widget-area no-padding blank">
                            <div class="status-upload">
                                <form>
                                    <textarea placeholder="What are you doing right now?" ></textarea>
                                    <ul>
                                        <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
                                        <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                        <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
                                        <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                                    </ul>
                                    <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
                                </form>
                            </div><!-- Status Upload end -->
                        </div><!-- Widget Area end -->
                    </div>
                </div><!-- post box end -->
                <div class="event-text-wrapper">
                    <div class="event-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#following" aria-controls="following_post" role="tab" data-toggle="tab">Following Post</a>
                            </li>
                            <li role="presentation">
                                <a href="#favorite" aria-controls="favorite_post" role="tab" data-toggle="tab">Favorit Post</a>
                            </li>
                            <li role="presentation">
                                <a href="#my" aria-controls="my_post" role="tab" data-toggle="tab">My Post</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="following">
                                <div class="row" ng-app="myApp" ng-controller="sampleController">
                                    <div class="col-md-12">
                                        <ul class="list-group">
                                            <div infinite-scroll="paging()" infinite-scroll-distance="3">
                                                <li class="list-group-item" ng-repeat="value in values">
                                                    <div class="textBox">
                                                        <div class="inactiveStatus"></div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="text-name">111<span>111<br>111</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-description">
                                                            <p>afasdfsdf</p>
                                                        </div>
                                                    </div><!-- textbox end -->
                                                </li>
                                            </div>
                                        </ul><!-- list-group end -->
                                    </div>
                                </div><!-- my app end -->
                            </div><!-- following end -->
                            <div role="tabpanel" class="tab-pane fade" id="favorite">
                                <div class="row" ng-app="myApp" ng-controller="sampleController">
                                    <div class="col-md-12">
                                        <ul class="list-group">
                                            <div infinite-scroll="paging()" infinite-scroll-distance="3">
                                                <li class="list-group-item" ng-repeat="value in values">
                                                    <div class="textBox">
                                                        <div class="inactiveStatus"></div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="text-name">222<span>222<br>222</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-description">
                                                            <p>afasdfsdf</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </div><!-- my app end -->
                            </div><!-- favorite end -->
                            <div role="tabpanel" class="tab-pane fade" id="my">
                                <div class="row" ng-app="myApp" ng-controller="sampleController">
                                    <div class="col-md-12">
                                        <ul class="list-group">
                                            <div infinite-scroll="paging()" infinite-scroll-distance="3">
                                                <li class="list-group-item" ng-repeat="value in values">
                                                    <div class="textBox">
                                                        <div class="inactiveStatus"></div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="text-name">333<span>333<br>333</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-description">
                                                            <p>afasdfsdf</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                        </ul><!-- list-group end -->
                                    </div>
                                </div><!-- my app end -->
                            </div><!-- my end -->
                        </div><!-- tab-content -->
                    </div><!-- event-tab end -->
                </div><!-- event-text-wrapper end -->
            </div><!-- right-wrapper end -->
        </div><!-- row end -->
    </div><!-- container-fluid end -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/allscript.js"></script>
<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ngInfiniteScroll/1.2.1/ng-infinite-scroll.min.js"></script>
  <script type="text/javascript">
    var app = angular.module('myApp', ['infinite-scroll']);

app.controller('sampleController', ['$scope', function ($scope) {
  $scope.values = [];
  for(var i = 0; i < 20; i++){
    $scope.values.push("[" + (i+1) + "]");
  }
  $scope.paging = function(){
    var s = $scope.values.length;
    for(var i = s; i < (s + 20); i++){
      $scope.values.push("[" + (i+1) + "]");
    }    
  }
}]);
</script>
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("post_box").style.top = "0";
  } else {
    document.getElementById("post_box").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
</body>
</html>