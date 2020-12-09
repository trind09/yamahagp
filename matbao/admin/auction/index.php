<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Golden Age Golf Auction</title>
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
      <!-- css -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/content/site.css" />
      <link rel="stylesheet" type="text/css" href="css/content/main.css" />
      <link rel="stylesheet" type="text/css" href="css/content/auction.css" />
      <link href="css/resource/resource1.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet" />
      <link href="css/resource/resource2.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet" />
      <link href="css/resource/resource3.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet" />
      <link href="css/resource/resource4.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet" /> 
      <!-- js -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="Scripts/resource1.js" type="text/javascript"></script>
      <script src="Scripts/resource2.js" type="text/javascript"></script>
      <!-- Global site tag (gtag.js) - Google Analytics --> 
      <script> 
         window.dataLayer = window.dataLayer || []; 
         function gtag(){dataLayer.push(arguments);} 
         gtag('js', new Date()); 
         
         gtag('config', 'UA-165956133-1'); 
      </script>
   </head>
   <body>
      <form method="post" action="./Gallery" id="ctl01">
         <div class="container-fluid">
            <div class="row user-actions">
               <div class="col-lg-12">
                  <a href="/login/login.aspx">Login</a> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <a href="/user/register.aspx">Register</a>
               </div>
            </div>
         </div>
         <header>
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-5"> <a href="/default.aspx"> <img src="images/logo.png"class="img-responsive header-logo" alt="Golden Age Golf Auctions" border="0" /> </a> </div>
               </div>
            </div>
         </header>
         <nav class="navbar navbar-default">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  <span class="navbar-brand" style="font-size: 13px;">Site Navigation</span> 
               </div>
               <div class="collapse navbar-collapse" id="main-nav" role="navigation">
                  <ul class="nav navbar-nav">
                     <li> <a href="https://goldenagegolfauctions.com">Home</a>
                     <li> <a href="/default.aspx">Auction</a>
                     <li> <a href="https://goldenagegolfauctions.com/about.htm">About</a> </li>
                     <li> <a href="/terms.pdf" target="_blank">Terms</a> </li>
                     <li> <a href="https://goldenagegolfauctions.com/contact.htm">Contact</a> </li>
                  </ul>
               </div>
            </div>
         </nav>
         <nav id="UserNav" class="sub-nav">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sub-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  <span class="navbar-brand" style="font-size: 13px;">My Navigation</span> 
               </div>
            </div>
         </nav>
         <div class="items">
            <div class="container-fluid content">
               <div class="row">
                  <!-- Sidebar -->
                  <div class="col-md-3 col-sm-3">
                     <div class="sidebar-widget">
                        <h5 class="title">
                           <span class="closed">&bull;</span>
                           Winter 2020
                        </h5>
                        <p>
                           Start:
                           11/10/2020 4:15 PM EST<br>
                           End:
                           11/28/2020 7:00 PM EST
                        </p>
                        <p>
                        </p>
                        <p>
                           <span style="color:red;">Prices Shown Include Buyer's Premium.</span>
                        </p>
                     </div>
                     <div class="sidebar-widget">
                        <h5 class="title">Search</h5>
                        <div class="form-group">
                           <select name="ctl00$SearchIn" id="SearchIn" class="form-control">
                              <option value="title">Title</option>
                              <option value="description">Description</option>
                              <option value="titledescription">Title or Description</option>
                              <option value="lot">Lot #</option>
                           </select>
                        </div>
                        <div class="input-group">
                           <input name="ctl00$SearchText" type="text" id="SearchText" class="form-control" placeholder="Search for..." />
                           <span class="input-group-btn">
                           <input type="submit" name="ctl00$btnGo" value="Go!" id="btnGo" class="btn btn-primary" />
                           </span>
                        </div>
                        <br>
                     </div>
                     <div class="sidebar-widget">
                        <h5 class="title">Browse</h5>
                        <div class="form-group">
                           <select name="ctl00$BrowseBy" id="BrowseBy" class="form-control">
                              <option selected="selected" value="gallery">Gallery View</option>
                              <option value="lots?image=0">Lot #</option>
                              <option value="lots?image=1">Images</option>
                              <option value="bids">Recent Bids</option>
                              <option value="prices">Price Grid</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <select name="ctl00$Auction" id="Auction" class="form-control">
                              <option value="-1">All Auctions</option>
                              <option selected="selected" value="108">Winter 2020</option>
                              <option value="107">Summer 2020 Auction</option>
                              <option value="106">Spring 2020 Auction</option>
                              <option value="105">2019 Winter Auction</option>
                              <option value="104">Summer 2019 Auction</option>
                              <option value="103">Spring 2019 Auction</option>
                              <option value="102">2018 Winter Auction</option>
                              <option value="101">Summer 2018 Auction</option>
                              <option value="100">Spring 2018 Auction</option>
                              <option value="99">2017 Winter Auction</option>
                              <option value="98">Summer 2017 Auction</option>
                              <option value="97">Spring 2017 Auction</option>
                              <option value="96">2016 Winter Auction</option>
                              <option value="95">Summer 2016 Auction</option>
                              <option value="94">Spring 2016 Auction</option>
                              <option value="93">2015 Winter Auction</option>
                              <option value="92">Summer 2015 Auction</option>
                              <option value="91">Spring 2015 Auction</option>
                              <option value="90">2014 Winter Holiday Auction</option>
                              <option value="88">Summer 2014 Auction</option>
                              <option value="87">Spring 2014 Auction</option>
                              <option value="86">2013 Winter Holiday Auction</option>
                              <option value="85">2013 Summer Auction</option>
                              <option value="83">Spring 2013 Auction</option>
                              <option value="81">2012 Winter Holiday Auction</option>
                              <option value="80">Summer 2012 Auction</option>
                              <option value="79">Spring 2012 Auction</option>
                              <option value="77">2011 Holiday Auction</option>
                              <option value="76">Summer 2011 Auction</option>
                              <option value="75">2011 Masters Auction</option>
                              <option value="74">Winter 2010/2011</option>
                              <option value="73">Summer 2010</option>
                              <option value="71">Spring 2010 Auction</option>
                              <option value="70">Fall 2009 Golf Auction</option>
                              <option value="69">2009 Spring Auction</option>
                              <option value="68">Fall 2008 Golf Auction</option>
                              <option value="67">Spring 2008 Golf Auction</option>
                              <option value="66">Summer 2007 Golf Auction</option>
                              <option value="65">Spring 2007</option>
                              <option value="63">Summer 2006 Golf Auction</option>
                           </select>
                        </div>
                     </div>
                     <div class="sidebar-widget">
                        <h5 class="title">Categories</h5>
                        <div class="form-group">
                           <div id="ctl00_Category" class="RadDropDownTree RadDropDownTree_Bootstrap" style="width:100%;">
                              <!-- 2020.2.512.45 -->
                              <span class="rddtInner">
                                 <span class="rddtFakeInput">
                                    <!-- &nbsp; -->
                                 </span>
                                 <span class="rddtIcon">
                                    <!-- &nbsp; -->
                                 </span>
                              </span>
                              <div class="rddtSlide">
                                 <div class="rddtPopup rddtPopup_Bootstrap">
                                    <div class="rddtScroll">
                                       <div id="ctl00_Category_EmbeddedTree" class="RadTreeView RadTreeView_Bootstrap">
                                          <ul class="rtUL rtLines">
                                             <li class="rtLI rtFirst">
                                                <div class="rtTop rtSelected">
                                                   <span class="rtSp"></span><span class="rtIn">All Categories</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Masters Tournament (102)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Autographs (223)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Golf Flags (95)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Antique Golf (13)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Golf Balls (14)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Golf Clubs (32)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Misc. Golf (51)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Books (46)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Tickets and Badges (26)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Programs (4)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Player Used (31)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Golf Art (21)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Ceramics (14)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Ryder Cup (25)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Augusta National Golf Club (93)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">US Amateur (4)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Trophies and Awards (13)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Photographs (17)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Course Used (3)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Golf Cards (1)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Advertising (4)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Tony Jacklin Collection (1)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">Other (2)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">US Open (11)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI">
                                                <div class="rtMid">
                                                   <span class="rtSp"></span><span class="rtIn">PGA Championship (11)</span>
                                                </div>
                                             </li>
                                             <li class="rtLI rtLast">
                                                <div class="rtBot">
                                                   <span class="rtSp"></span><span class="rtIn">Open Championship/British Open (17)</span>
                                                </div>
                                             </li>
                                          </ul>
                                          <input id="ctl00_Category_EmbeddedTree_ClientState" name="ctl00_Category_EmbeddedTree_ClientState" type="hidden" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <input id="ctl00_Category_ClientState" name="ctl00_Category_ClientState" type="hidden" />
                           </div>
                        </div>
                     </div>
                     <script type="text/javascript">
                        //<![CDATA[
                        window.__TsmHiddenField = $get('ScriptMgr1_TSM');Telerik.Web.UI.RadTreeView._preInitialize("ctl00_Category_EmbeddedTree","0");Sys.Application.add_init(function() {
                           $create(Telerik.Web.UI.RadTreeView, {"_postBackOnClick":true,"_postBackReference":"__doPostBack(\u0027ctl00$Category$EmbeddedTree\u0027,\u0027arguments\u0027)","_selectedValue":"0","_skin":"Bootstrap","_uniqueId":"ctl00$Category$EmbeddedTree","clientStateFieldID":"ctl00_Category_EmbeddedTree_ClientState","collapseAnimation":"{\"duration\":200}","expandAnimation":"{\"duration\":200}","nodeData":[{"value":"0","selected":true},{"value":"60"},{"value":"67"},{"value":"57"},{"value":"61"},{"value":"65"},{"value":"66"},{"value":"62"},{"value":"69"},{"value":"103"},{"value":"80"},{"value":"98"},{"value":"99"},{"value":"100"},{"value":"101"},{"value":"102"},{"value":"105"},{"value":"107"},{"value":"108"},{"value":"109"},{"value":"110"},{"value":"113"},{"value":"116"},{"value":"117"},{"value":"122"},{"value":"123"},{"value":"124"}],"selectedIndexes":["0"]}, null, null, $get("ctl00_Category_EmbeddedTree"));
                        });
                        Sys.Application.add_init(function() {
                           $create(Telerik.Web.UI.RadDropDownTree, {"_dropDownSettings":{"autoWidth":0,"closeDropDownOnSelection":true,"width":"","height":""},"_embeddedTreeId":"ctl00_Category_EmbeddedTree","_enableDirectionDetection":true,"_uniqueId":"ctl00$Category","clientStateFieldID":"ctl00_Category_ClientState","entryData":[{"text":"All Categories","value":"0","fullPath":"All Categories"}],"localization":{"Clear":"Clear","CheckAll":"Check All"}}, null, null, $get("ctl00_Category"));
                        });
                        //]]>
                     </script>
                  </div>
                  <!-- Content -->
                  <div class="col-md-9 col-sm-9">
                        <div class="row">
                        <div class="col-md-5 col-sm-5">
                           <nav>
                              <ul class="pagination pagination-sm">
                                 <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                 <li class="active"><a href="?page=1">1</a></li>
                                 <li><a href="?page=2">2</a></li>
                                 <li><a href="?page=2" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                              </ul>
                           </nav>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                           <div class="form-inline form-group">
                              <label for="pagesize">Page Size:</label>
                              <select class="form-control" onChange="GetValue(this);"  name="pagesize">
                                 <option value="?size=25">25</option>
                                 <option value="?size=50">50</option>
                                 <option value="?size=75">75</option>
                                 <option value="?size=100">100</option>
                                 <option selected value="?size=250">250</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                           <div class="form-inline pull-right">
                              <div class="form-group">
                                 <label for="sortby">Sort by:</label>
                                 <select class="form-control" onChange="GetValue(this);" name="sortby">
                                    <option selected value="?order=1">Lot #</option>
                                    <option value="?order=2">Highest Price</option>
                                    <option value="?order=3">Lowest Price</option>
                                    <option value="?order=4">Most Bids</option>
                                    <option value="?order=5">Least Bids</option>
                                    <option value="?order=6">Recent Bids</option>
                                    <option value="?order=8">Featured Lots</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                           <h5 class="boxed">1</h5>
                           <div class="item-details clearfix">
                              <p class="description">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29966">Gary Player 1978 Masters Tournament Trophy</a>
                              </p>
                              <div class="item-image">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29966">
                                 <img src="https://goldenagegolfauctions.com/images_items/thumbs/thumb_item_29966_1_132444.jpg" alt="" class="img-responsive" />
                                 </a>
                              </div>
                              <p>
                                 Bids: <strong>34</strong>
                                 <br>
                                 Opening Bid: <strong>$10,000</strong>
                                 <br>
                                 Status: <strong>Sold</strong>
                              </p>
                           </div>
                           <div class="item-price">
                              <a href="https://goldenagegolfauctions.com//bids/bidplace.aspx?itemid=29966">SOLD FOR $253,386</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                           <h5 class="boxed">2</h5>
                           <div class="item-details clearfix">
                              <p class="description">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29967">Gary Player 1974 Open Championship Claret Jug</a>
                              </p>
                              <div class="item-image">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29967">
                                 <img src="https://goldenagegolfauctions.com/images_items/thumbs/thumb_item_29967_1_132480.jpg" alt="" class="img-responsive" />
                                 </a>
                              </div>
                              <p>
                                 Bids: <strong>27</strong>
                                 <br>
                                 Opening Bid: <strong>$10,000</strong>
                                 <br>
                                 Status: <strong>Sold</strong>
                              </p>
                           </div>
                           <div class="item-price">
                              <a href="https://goldenagegolfauctions.com//bids/bidplace.aspx?itemid=29967">SOLD FOR $143,030</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                           <h5 class="boxed">3</h5>
                           <div class="item-details clearfix">
                              <p class="description">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29968">Gary Player 1965 US Open Trophy</a>
                              </p>
                              <div class="item-image">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29968">
                                 <img src="https://goldenagegolfauctions.com/images_items/thumbs/thumb_item_29968_1_132530.jpg" alt="" class="img-responsive" />
                                 </a>
                              </div>
                              <p>
                                 Bids: <strong>24</strong>
                                 <br>
                                 Opening Bid: <strong>$10,000</strong>
                                 <br>
                                 Status: <strong>Sold</strong>
                              </p>
                           </div>
                           <div class="item-price">
                              <a href="https://goldenagegolfauctions.com//bids/bidplace.aspx?itemid=29968">SOLD FOR $97,691</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                           <h5 class="boxed">4</h5>
                           <div class="item-details clearfix">
                              <p class="description">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29969">Gary Player 1972 PGA Championship Wanamaker Trophy</a>
                              </p>
                              <div class="item-image">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29969">
                                 <img src="https://goldenagegolfauctions.com/images_items/thumbs/thumb_item_29969_1_132591.jpg" alt="" class="img-responsive" />
                                 </a>
                              </div>
                              <p>
                                 Bids: <strong>17</strong>
                                 <br>
                                 Opening Bid: <strong>$10,000</strong>
                                 <br>
                                 Status: <strong>Sold</strong>
                              </p>
                           </div>
                           <div class="item-price">
                              <a href="https://goldenagegolfauctions.com//bids/bidplace.aspx?itemid=29969">SOLD FOR $80,736</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                           <h5 class="boxed">5</h5>
                           <div class="item-details clearfix">
                              <p class="description">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29970">Gary Player 1997 Senior British Open Claret Jug</a>
                              </p>
                              <div class="item-image">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29970">
                                 <img src="https://goldenagegolfauctions.com/images_items/thumbs/thumb_item_29970_1_134668.jpg" alt="" class="img-responsive" />
                                 </a>
                              </div>
                              <p>
                                 Bids: <strong>21</strong>
                                 <br>
                                 Opening Bid: <strong>$5,000</strong>
                                 <br>
                                 Status: <strong>Sold</strong>
                              </p>
                           </div>
                           <div class="item-price">
                              <a href="https://goldenagegolfauctions.com//bids/bidplace.aspx?itemid=29970">SOLD FOR $30,326</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                           <h5 class="boxed">6</h5>
                           <div class="item-details clearfix">
                              <p class="description">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29971">Gary Player 1988 US Senior Open Trophy</a>
                              </p>
                              <div class="item-image">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29971">
                                 <img src="https://goldenagegolfauctions.com/images_items/thumbs/thumb_item_29971_1_132684.jpg" alt="" class="img-responsive" />
                                 </a>
                              </div>
                              <p>
                                 Bids: <strong>9</strong>
                                 <br>
                                 Opening Bid: <strong>$5,000</strong>
                                 <br>
                                 Status: <strong>Sold</strong>
                              </p>
                           </div>
                           <div class="item-price">
                              <a href="https://goldenagegolfauctions.com//bids/bidplace.aspx?itemid=29971">SOLD FOR $12,860</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                           <h5 class="boxed">7</h5>
                           <div class="item-details clearfix">
                              <p class="description">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29972">Gary Player 1990 Senior PGA Championship Trophy</a>
                              </p>
                              <div class="item-image">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29972">
                                 <img src="https://goldenagegolfauctions.com/images_items/thumbs/thumb_item_29972_1_132700.jpg" alt="" class="img-responsive" />
                                 </a>
                              </div>
                              <p>
                                 Bids: <strong>10</strong>
                                 <br>
                                 Opening Bid: <strong>$5,000</strong>
                                 <br>
                                 Status: <strong>Sold</strong>
                              </p>
                           </div>
                           <div class="item-price">
                              <a href="https://goldenagegolfauctions.com//bids/bidplace.aspx?itemid=29972">SOLD FOR $14,147</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                           <h5 class="boxed">8</h5>
                           <div class="item-details clearfix">
                              <p class="description">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29973">Gary Player 1987 Senior Players ChampionshipTrophy</a>
                              </p>
                              <div class="item-image">
                                 <a href="https://goldenagegolfauctions.com/bids/bidplace.aspx?itemid=29973">
                                 <img src="https://goldenagegolfauctions.com/images_items/thumbs/thumb_item_29973_1_132728.jpg" alt="" class="img-responsive" />
                                 </a>
                              </div>
                              <p>
                                 Bids: <strong>5</strong>
                                 <br>
                                 Opening Bid: <strong>$5,000</strong>
                                 <br>
                                 Status: <strong>Sold</strong>
                              </p>
                           </div>
                           <div class="item-price">
                              <a href="https://goldenagegolfauctions.com//bids/bidplace.aspx?itemid=29973">SOLD FOR $8,784</a>
                           </div>
                        </div>
                     </div>
                     <div class="row gallery-pagination">
                        <div class="col-md-5 col-sm-5">
                           <nav>
                              <ul class="pagination pagination-sm">
                                 <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                 <li class="active"><a href="?page=1">1</a></li>
                                 <li><a href="?page=2">2</a></li>
                                 <li><a href="?page=2" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                              </ul>
                           </nav>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                           <div class="form-inline form-group">
                              <label for="pagesize">Page Size:</label>
                              <select class="form-control" onChange="GetValue(this);"  name="pagesize">
                                 <option value="?size=25">25</option>
                                 <option value="?size=50">50</option>
                                 <option value="?size=75">75</option>
                                 <option value="?size=100">100</option>
                                 <option selected value="?size=250">250</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                           <div class="form-inline pull-right">
                              <div class="form-group">
                                 <label for="sortby">Sort by:</label>
                                 <select class="form-control" onChange="GetValue(this);" name="sortby">
                                    <option selected value="?order=1">Lot #</option>
                                    <option value="?order=2">Highest Price</option>
                                    <option value="?order=3">Lowest Price</option>
                                    <option value="?order=4">Most Bids</option>
                                    <option value="?order=5">Least Bids</option>
                                    <option value="?order=6">Recent Bids</option>
                                    <option value="?order=8">Featured Lots</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Content -->
               </div>
            </div>
         </div>
      </form>
   </body>
</html>