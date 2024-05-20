<div class="container mx-auto p-5">

	<?php
	// Determine the correct action URL based on the presence of articleid or submission_id
	$actionUrl = isset($article['articleid']) ? "updateArticle?id={$article['articleid']}" : "updateSubmission?id={$article['submission_id']}";
	$formTitle = isset($article['articleid']) ? "Edit Article" : "Edit Submission";
	$file = isset($article['articleid']) ? "disabled" : "";
	?>
	<h2 class="text-2xl mb-4 font-semibold"><?= $formTitle ?></h2>
	<form action="<?= $actionUrl ?>" method="post" class="space-y-4">
		<div class="relative">
			<label for="title" class="block text-gray-700 text-sm font-medium mb-2">Title</label>
			<input type="text"
				class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
				id="title" name="title" value="<?= $article["title"] ?>" required>
		</div>
		<div class="relative">
			<label for="filename" class="block text-gray-700 text-sm font-medium mb-2">File</label>
			<input type="text"
				class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
				id="filename" name="filename" value="<?= $article["filename"] ?>" <?=$file?>>
		</div>
		<div class="relative">
			<label for="volumeid" class="block text-gray-700 text-sm font-medium mb-2">Volume</label>
			<select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
				id="volumeid" name="volumeid" required>
				<?php foreach ($volumes as $volume): ?>
					<option value="<?= $volume['volumeid'] ?>"><?= $volume['vol_name'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="relative">
			<label for="abstract" class="block text-gray-700 text-sm font-medium mb-2">Abstract</label>
			<textarea
				class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
				id="editor" name="abstract" rows="3" required> <?= $article['abstract'] ?> </textarea>
		</div>
		<!-- <input type="hidden" name="id" value="<?php echo $article['articleid']; ?>"> -->
		<button type="submit"
			class="w-full bg-[#003C43] hover:bg-[#77B0AA] text-white font-bold py-2 px-4 rounded">Update</button>
	</form>
</div>

<script>
	ClassicEditor
		.create(document.querySelector('#editor'))
		.catch(error => console.error(error));
</script>
