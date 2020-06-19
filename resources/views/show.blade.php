



    <!DOCTYPE HTML>
<head>
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href="css/album.css" rel="stylesheet" type="text/css" media="all" />
    <!-- start slider -->

</head>
<body>


<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="/images/demobar_w3_4thDec2019.css">
<!-- start header -->
<div class="header_btm">
    <div class="wrap">
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li> |
                    <li><a href="sale.html">sale</a></li> |
                    <li><a href="handbags.html">handbags</a></li> |
                    <li><a href="accessories.html">accessories</a></li> |
                    <li><a href="wallets.html">wallets</a></li> |
                    <li><a href="sale.html">sale</a></li> |
                    <li><a href="index.html">mens store</a></li> |
                    <li><a href="shoes.html">shoes</a></li> |
                    <li><a href="sale.html">vintage</a></li> |
                    <li><a href="service.html">services</a></li> |
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </div>
            <div class="top-nav">
                <nav class="nav">
                    <a href="#" id="w3-menu-trigger"> </a>
                    <ul class="nav-list" style="">
                        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
                        <li class="nav-item"><a href="sale.html">Sale</a></li>
                        <li class="nav-item"><a href="handbags.html">Handbags</a></li>
                        <li class="nav-item"><a href="accessories.html">Accessories</a></li>
                        <li class="nav-item"><a href="shoes.html">Shoes</a></li>
                        <li class="nav-item"><a href="service.html">Services</a></li>
                        <li class="nav-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>


<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            <div class="grids_of_3">
                @foreach($products as $pr)
                    <div class="grid1_of_3">
                        <a href="details.html">
                            <img src="pictures/{{$pr->picture_name}}"/>
                            <h3>{{$pr->description}}</h3>
                            <div class="price">
                                <h4>{{$pr->price}}<span>indulge</span></h4>
                            </div>
                            <span class="b_btm"></span>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="clear"></div>
            {{$products->links()}}
        </div>
    </div>
</div>
<div class="clear"></div>
<footer>
    <div style="background: #1d643b;width: 100%;height: 70px;"></div>
</footer>

</body>
