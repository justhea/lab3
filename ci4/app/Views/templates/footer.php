<!-- Bootstrap 4.3.1 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- Google maps JS API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- AOS 2.3.1 jQuery plugin JS (Animations) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->



<script src="js/jquery.maskedinput.min.js"></script>
<!-- Startup 3 JS (Custom js for all blocks) -->
<script src="js/script.js"></script>
<script type="text/javascript">
		// Define an array of quotes
		var quotes = [
			"Art is not what you see, but what you make others see.",
			"The aim of art is to represent not the outward appearance of things, but their inward significance.",
			"Art is the lie that enables us to realize the truth.",
			"Art should comfort the disturbed and disturb the comfortable.",
			"Creativity takes courage."
		];

		// Function to display a random quote
		function displayQuote() {
			var index = Math.floor(Math.random() * quotes.length);
			var quoteElement = document.getElementById("quote");
			quoteElement.innerHTML = quotes[index];
		}

		// Call displayQuote function initially
		displayQuote();

		// Call displayQuote function in a given interval
		setInterval(function() {
			displayQuote();
		}, 2000); // Change the interval time (in milliseconds) as per your requirement
	</script>
</body>
</html>