<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="item" href="item/Labuan Bajo 2.jpeg" />
    <title> Labuan Bajo</title>
    <link rel="stylesheet" href="css/style.css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<header>
			<nav>
				<div class="Item">
					<img src="item/Labuan Bajo 2.jpeg" alt="" width="100px"/>
				</div>
				<label for="click" class="menu-btn">
					<i class="fas fa-bars"></i>
				</label>
				<ul>
					<li><a href="index.html">Home</a> </li>
					<li><a href="Categories/categories.html">Categories</a>  </li>
					<li><a href="login.html" class="btn_login">Login</a> </li>
				</ul>
			</nav>
		</header>
		<main>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!--For slides-->
				<div class="carousel-inner" role="listbox">
					<div class="item">
						<img src="item/pesona Labuan Bajo.jpeg" alt="Labuan Bajo" width="600px">
						<div class="carousel-caption">
							<h1>Labuan Bajo</h1>
							<p>Menjelajahi surga tersembunyi di Nusa Tenggara Timur.</p>
						</div>
					</div>

					<div class="item">
						<img src="item/Pantai.pink.jpeg" alt="Pantai pink">
						<div class="carousel-caption">
							<h1>Pantai Pink</h1>
							<p>Melihat Keindahan Pantai pink yang merupakan salah satu pantai dengan pasri berwarna pink di dunia.</p>
						</div>
					</div>

					<div class="item">
						<img src="item/pulau.komodo.jpeg" alt="Pulau komodo">
						<div class="carousel-caption">
							<h1>Pulau Komodo</h1>
							<p>Mengunjungi dan melihat habitat hewan komodo secara langsung ke pulau komodo</p>
						</div>
					</div>

					<div class="item">
						<img src="item/Penginapan.LB.jpeg" alt="Penginapan">
						<div class="carousel-caption">
							<h1>Loccal Collection Hotel</h1>
							<p>Setelah hari yang panjang mari bermalam di Loccal Colletion Hotel. istirahat anda akan lebih nyaman dengan vasilitas yang tersedia disini.</p>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>

			  <center>
				<div class="card-categories">
					<h2>Visiting Options</h2>
					<div class="card-categories">
						<div class="card">
							<div class="card-image">
								<img src="item/pesona Labuan Bajo.jpeg" alt="Labuan Bajo"/>
							</div>
							<div class="card-content">
								<h4>Labuan Bajo</h4> 
								<p class="description">Menjelajahi surga tersembunyi di Nusa Tenggara Timur.</p>
								<p class="price"><span>Rp</span>50.000</p>
								<button class="btn_belanja" type="submit">Book</button>
							</div>
						</div>

						<div class="card">
							<div class="card-image">
								<img src="item/Pantai.pink.jpeg" alt="Pantai pink"/>
							</div>
							<div class="card-content">
								<h4>Pantai Pink</h4> 
								<p class="description">Melihat Keindahan Pantai pink yang merupakan salah satu pantai dengan pasri berwarna pink di dunia.</p>
								<p class="price"><span>Rp</span>50.000</p>
								<button class="btn_belanja" type="submit">Book</button>
							</div>
						</div>

						<div class="card">
							<div class="card-image">
								<img src="item/pulau.komodo.jpeg" alt="Pulau Komodo"/>
							</div>
							<div class="card-content">
								<h4>Pulau Komodo</h4> 
								<p class="description">Mengunjungi dan melihat habitat hewan komodo secara langsung ke pulau komodo.</p>
								<p class="price"><span>Rp</span>50.000</p>
								<button class="btn_belanja" type="submit">Book</button>
							</div>
						</div>
						
						<div class="card">
							<div class="card-image">
								<img src="item/Penginapan.LB.jpeg" alt="Penginapan"/>
							</div>
							<div class="card-content">
								<h4>Loccal Colletion Hotel</h4> 
								<p class="description">Setelah hari yang panjang mari bermalam di Loccal Colletion Hotel. istirahat anda akan lebih nyaman dengan vasilitas yang tersedia disini.</p>
								<p class="price"><span>Rp</span>300.000</p>
								<button class="btn_belanja" type="submit">Book</button>
							</div>
						</div>
					</div>
				</div>
			  </center>
		</main>
		<footer>
			<h5>&copy; Pesona Labuan Bajo</h5>
		</footer>
	</div>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	</style>
	<script>
		// Menangkap elemen-elemen HTML yang akan diubah atau diberi fungsi
		const btnGetStarted = document.querySelector('.btn_getStarted');
		const btnBelanja = document.querySelectorAll('.btn_belanja');

		// Menambahkan event listener untuk tombol "Get Started"
		btnGetStarted.addEventListener('click', () => {
			// Mengarahkan pengguna ke halaman lain saat tombol ditekan
		window.location.href = 'get-started.html';
	    });
		// Menambahkan event listener untuk setiap tombol "Buy"
		btnBelanja.forEach(button => {
			button.addEventListener('click', () => {
				// Mengambil nama dan harga produk dari elemen-elemen terkait
				const productName = button.parentElement.querySelector('h4').textContent;
				const productPrice = button.parentElement.querySelector('.price').textContent;
				
				// Menampilkan pesan pop-up atau melakukan tindakan lain
				alert(`berhasil Booking ${productName} Sebesar ${productPrice}`);
			});
        })
	</script>
</body>
</html>