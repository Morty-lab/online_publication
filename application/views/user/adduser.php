<div class="container mx-auto px-4 py-8">
	<h2 class="text-2xl font-bold mb-4">Registration Form</h2>
	<form id="registrationForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="addUser" method="POST">
		<div class="mb-4">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="completeName">
				Complete Name
			</label>
			<input
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
				name="completeName" id="completeName" type="text" placeholder="John Doe" required>
		</div>

		<div class="mb-4">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="email">
				Email
			</label>
			<input
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
				name="email" id="email" type="email" placeholder="example@example.com" required>
		</div>

		<div class="mb-6">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="password">
				Password
			</label>
			<input
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
				name="password" id="password" type="password" placeholder="******************" required>
		</div>

		<div class="flex items-center justify-between">
			<button id="submitBtn"
				class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
				type="submit">
				Submit
			</button>
		</div>
	</form>
	<script>
		var emailRegex = /^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/;

		document.getElementById('submitBtn').addEventListener('click', function (e) {
			e.preventDefault(); // Prevent the default form submission
			var completeName = document.getElementById('completeName').value;
			var email = document.getElementById('email').value;
			var password = document.getElementById('password').value;

			// Example validation checks
			if (completeName === '' || email === '' || password === '') {
				alert('Please fill in all fields.');
				return; // Stop the form submission
			}

			// Email validation using regex
			if (!emailRegex.test(email)) {
				alert('Please enter a valid email address.');
				return; // Stop the form submission
			}
			
			document.getElementById('registrationForm').submit(); // Submit the form programmatically
		});
	</script>
</div>
