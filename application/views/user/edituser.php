<!-- edit_account.php -->
<div class="container mx-auto px-4 py-8">
	<h2 class="text-2xl font-bold mb-4"><?= $title ?></h2>
	<?php 
    // Determine the correct action URL based on the presence of $user or $author
    $actionUrl = isset($user)? "updateUser?id={$user['userid']}" : "updateAuthor?id={$author['auid']}";
   ?>
    <form id="editAccountForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?= $actionUrl?>" method="POST">
		<div class="mb-4">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="completeName">
				Complete Name
			</label>
			<input
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
				name="completeName" type="text" placeholder="John Doe" value="<?= isset($user)? $user['complete_name'] : $author['author_name']; ?>" required>
		</div>

		<div class="mb-4">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="email">
				Email
			</label>
			<input
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
				name="email" type="email" placeholder="example@example.com" value="<?= isset($user)? $user['email'] : $author['email']; ?>" required>
		</div>

		<?php
		if (isset($author)) {
		?>

		<div class="mb-4">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="contact_num">
				Contact Number
			</label>
			<input
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
				name="contact_num" id="contact_num" type="text" value="<?= $author['contact_num'] ?>" placeholder="+63 123 456 7890" required>
		</div>

		<div class="mb-4">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="title">
				Title
			</label>
			<input
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
				name="title" id="title" type="text" placeholder="Mr./Mrs." value="<?= $author['title'] ?>" required>
		</div>
		<?php
		}
		?>

		<div class="mb-6">
			<label class="block text-gray-700 text-sm font-bold mb-2" for="password">
				Password
			</label>
			<input
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
				name="password" type="password" placeholder="******************" value="<?= isset($user)? $user['complete_name'] : $author['author_name']; ?>" required>
		</div>

		<div class="flex items-center justify-between">
			<button id="submitButton"
				class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
				type="submit">
				Update
			</button>

		</div>
	</form>
</div>
<script>
    document.getElementById('submitButton').addEventListener('click', function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Get the form fields
        var completeName = document.querySelector('input[name="completeName"]').value;
        var email = document.querySelector('input[name="email"]').value;
        var password = document.querySelector('input[name="password"]').value;

        // Perform validations
        if (!completeName) {
            alert('Complete Name is required.');
            return;
        }

        if (!email) {
            alert('Email is required.');
            return;
        }

        // Simple email validation
        var emailRegex = /^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        if (!password) {
            alert('Password is required.');
            return;
        }

        // If all validations pass, submit the form
        document.getElementById('editAccountForm').submit();
    });
</script>
