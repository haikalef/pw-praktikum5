<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: 'Montserrat', sans-serif;
			line-height: 1.6;
			margin: 0;
			min-height: 100vh;
		}

		ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}


		h2,
		h3,
		a {
			color: #34495e;
		}

		a {
			text-decoration: none;
		}



		.logo {
			margin: 0;
			font-size: 1.45em;
		}

		.main-nav {
			margin-top: 5px;

		}

		.logo a,
		.main-nav a {
			padding: 10px 15px;
			text-transform: uppercase;
			text-align: center;
			display: block;
		}

		.main-nav a {
			color: #34495e;
			font-size: .99em;
		}

		.main-nav a:hover {
			color: #718daa;
		}



		.header {
			padding-top: .5em;
			padding-bottom: .5em;
			border: 1px solid #a2a2a2;
			background-color: #f4f4f4;
			-webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
			-moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
			box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		}


		/* ================================= 
  Media Queries
==================================== */




		@media (min-width: 769px) {

			.header,
			.main-nav {
				display: flex;
			}

			.header {
				flex-direction: column;
				align-items: center;

				.header {
					width: 80%;
					margin: 0 auto;
					max-width: 1150px;
				}
			}

		}

		@media (min-width: 1025px) {
			.header {
				flex-direction: row;
				justify-content: space-between;
			}

		}

		.container {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 1fr 1fr 1fr;
			gap: 0px 0px;
			grid-auto-flow: row;
			grid-template-areas:
				"container-1 container-1 container-1"
				"container-1 container-1 container-1"
				"container-2 container-2 container-2";
		}

		.container-1 {
			grid-area: container-1;
		}

		.container-2 {
			grid-area: container-2;
		}

		body {
			margin: 0;
			font-family: system-ui, sans-serif;
		}

		.wave-container {
			position: relative;
			background: #09F;
			color: #FFF;
			text-align: center;
			overflow: hidden;
		}

		.wave-container>svg {
			display: block;
		}

		h1 {
			font-size: 5rem;
			margin: 7rem 1.25rem 2.5rem 1.25rem;
		}

		p {
			font-size: 1.5rem;
			margin: 0 1.25rem 5rem 1.25rem;
		}

		.button {
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		.button1 {
			background-color: #4CAF50;
		}

		/* Green */
		.button2 {
			background-color: #008CBA;
		}

		/* Blue */
	</style>
	<header class="header">
		<h1 class="logo"><a href="#">haikalef</a></h1>
		<ul class="main-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</header>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Praktikum 5</title>
</head>

<body>
	<div class="container">
		<div class="container-1">
			<div class="wave-container">
				<h1>Hello, clown!</h1>
				<p>Check out my webpage!</p>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
					<path fill="#2a2a72" fill-opacity="0.85" d="M0,288L40,266.7C80,245,160,203,240,165.3C320,128,400,96,480,80C560,64,640,64,720,90.7C800,117,880,171,960,202.7C1040,235,1120,245,1200,245.3C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
				</svg>
			</div>
		</div>
		<div class="container-2">

			</head>

			<body>

				<button class="button button1">Back</button>
				<button class="button button2">Next</button>

			</body>

</html>
</div>
</div>
</body>

</html>