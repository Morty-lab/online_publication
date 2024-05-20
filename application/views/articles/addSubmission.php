<div class="p-10">
	<form action="submitArticle" method="post">

		<h2 class="text-gray-600 text-2xl mb-4">Submit Article</h2>
		<div class="mb-4">
			<label for="title" class="block text-gray-600 text-sm font-medium mb-2">Title</label>
			<input type="text" name="title" id="title"
				class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
				required>
		</div>
		<div class="flex justify-between gap-5 w-full">
			<div class="mb-4 flex-1 h-full">
				<label for="filename" class="block text-gray-600 text-sm font-medium mb-2">File</label>
				<input type="file" name="filename" id="filename"
					class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
					required>
			</div>
			<div class="mb-4 flex-1 h-full">
				<label for="volumeid" class="block text-gray-600 text-sm font-medium mb-2">Volume </label>
				<select name="volumeid" id="volumeid"
					class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
					required>
					<?php
					foreach ($volumes as $volume):
						?>
						<!-- Options for volumeid go here -->
						<option value="<?= $volume['volumeid'] ?>"><?= $volume['vol_name'] ?></option>

					<?php endforeach; ?>


					<!-- Add more options as needed -->
				</select>
			</div>
		</div>

		<div class="mb-4">
			<label for="abstract" class="block text-gray-600 text-sm font-medium mb-2">Abstract</label>
			<div id="editor"></div>

			<script>
				ClassicEditor
					.create(document.querySelector('#editor'))
					.catch(error => {
						console.error(error);
					});
			</script>
		</div>


		<button type="submit"
			class="bg-[#003C43] hover:bg-[#77B0AA] text-white font-bold py-2 px-4 rounded-xl w-full">Submit</button>
	</form>

</div>
