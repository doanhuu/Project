<html>
  <head>
		<title>
			Trang chu
		</title>
		<link rel="stylesheet" type="text/css" href="CSS/banhang.css"/>
		<script language="javascript">
			var imageList = new Array;
			imageList[0] = new Image;imageList[0].src = "Phone/Phone12.png";
			imageList[1] = new Image;imageList[1].src = "Phone/Phone72.png";
			function slideShow() {
			   var imageNumber = Math.floor(Math.random() * imageList.length);
			   document.image_name.src = imageList[imageNumber].src;
			   document.x1.value_image_number.value =  imageNumber;
			   window.setTimeout("slideShow(" + imageNumber + ")",800);
			}
		</script>
	</head>
	<body onLoad="slideShow()">
		<div>
			<div id="logo">
				<span>DIDONG.COM</span>
				<button><a href="#"><b>Dang nhap/Dang ki</b></a></button>
			</div>
			<div >
				<div class="menu">
					<ul>
						<li><a href="#"> Trang Chu</a></li>
						<li><a href="#">San Pham</a>
							<ul>
								<li><a href="#">SAM SUNG</a></li>
								<li><a href="#">NOKIA</a></li>
								<li><a href="#">SONY ERICSON</a></li>
							</ul>
						</li>
						<li><a href="#">Lien he</a></li>
						<li><a href="#">Ho tro</a></li>
					</ul>
				<div>
				<div class="timkiem">
					<input type="text" size="10px"/>
					<button type="submit" value="submit"><b>Tim Kiem</b></button>
				</div>	
			</div>
		</div>
		<!--End Header----------------->
		<div id="content">
			<div>
				<div>
					<div id="slideshow">
						
							<form name="x1" method="post" action="#" style="display:none;">
								<input name="value_image_number" value="" type="text" readonly="false">
							</form>
							<img src="" name="image_name"/>
						
					</div>
					<div id="Account">
					</div>
				</div>
				<div class="show">
					<div class="product">
						<img src="Phone/Phone2.png"/>
						<button><a>Chi tiet</a></button>
						<button>Them vao gio hang</button>
					</div>
					<div class="product">
						<img src="Phone/Phone3.png"/>
						<button><a href="#">Chi tiet</a></button>
						<button>Them vao gio hang</button>
					</div>
					<div class="product">
						<img src="Phone/Phone4.png"/>
						<button><a href="#">Chi tiet</a></button>
						<button>Them vao gio hang</button>
					</div>
					<div class="product">
						<img src="Phone/Phone8.png"/>
						<button><a href="#">Chi tiet</a></button>
						<button>Them vao gio hang</button>
					</div>
					<div class="product">
						<img src="Phone/Phone2.png"/>
						<button>Chi tiet</button>
						<button>Them vao gio hang</button>
					</div>
					<div class="product">
						<img src="Phone/Phone3.png"/>
						<button><a href="#">Chi tiet</a></button>
						<button>Them vao gio hang</button>
					</div>
					<div class="product">
						<img src="Phone/Phone4.png"/>
						<button><a href="#">Chi tiet</a></button>
						<button>Them vao gio hang</button>
					</div>
					<div class="product">
						<img src="Phone/Phone8.png"/>
						<button><a href="#">Chi tiet</a></button>
						<button>Them vao gio hang</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Content-------------------------->
		
		<div id="footer">
			<div>
				<span><li><a href="#">NOKIA</a></li></span>
				<ul>
					<li><a href="#">SP1</a></li>
					<li><a href="#">SP2</a></li>
					<li><a href="#">SP3</a></li>
					<li><a href="#">SP4</a></li>
					<li><a href="#">SP5</a></li>
				</ul>
			</div>
			<div>
				<span><li><a href="#">SAMSUNG</a></li></span>
				<ul>
					<li><a href="#">SP1</a></li>
					<li><a href="#">SP2</a></li>
					<li><a href="#">SP3</a></li>
					<li><a href="#">SP4</a></li>
					<li><a href="#">SP4</a></li>
				</ul>
			</div>
			<div>
				<span><li><a href="#">SONY ERICSON</a></li></span>
				<ul>
					<li><a href="#">SP1</a></li>
					<li><a href="#">SP2</a></li>
					<li><a href="#">SP3</a></li>
					<li><a href="#">SP4</a></li>
					<li><a href="#">SP5</a></li>
				</ul>
			</div>
			<div>
				<ul>
					<span><li><a href="#">Lien He</a></li>
					<li><a href="#">Ho Tro</a></li></span>
				</ul>
				<!--<a href="http://ipv6.he.net/certification/scoresheet.php?pass_name=doanhuu" target="_blank"><img src="http://ipv6.he.net/certification/create_badge.php?pass_name=doanhuu&amp;badge=1" style="border: 0; width: 128px; height: 128px" alt="IPv6 Certification Badge for doanhuu"></img></a>-->
			</div>
		</div>
	</body>
	
</html>
