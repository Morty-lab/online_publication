<div class="grid grid-cols-4 mt-5 px-5">
	<div class="col-spa-1 p-4">
		<form class="flex items-center max-w-sm mx-auto">
			<label for="simple-search" class="sr-only">Search</label>
			<div class="relative w-full">
				<div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
					<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
						viewBox="0 0 20 20">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
					</svg>
				</div>
				<input type="text" id="simple-search"
					class="bg-gray-50 border-4 border-[#77B0AA] text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
					placeholder="Search Articles..." required />
			</div>

		</form>

	</div>
	<div class="col-span-2 ">

		<?php foreach ($articles as $i): ?>
			<div
				class="max-w-md mx-auto bg-white rounded-xl shadow-xl shadow-gray-400 overflow-hidden md:max-w-2xl m-4 p-5 border-2 border-gray-300">
				<div class="uppercase tracking-wide text-lg text-gray-500 font-semibold"><?= $i["title"] ?></div>
				<div class="md:flex">
					<!-- Article Image -->
					<div class="p-8">
						<h1 class="font-semibold">Abstract</h1>
						<p class="mt-2 text-gray-500 text-sm"><?= $i["abstract"] ?></p>

					</div>
					<div class="md:flex-shrink-0">
						<img class=" w-[180px] object-cover " src="<?= base_url('assets/dummy.png'); ?>"
							alt="Article Image">

						<i class="text-[10px] text-gray-500 flex flex-col text-center">
							<span>Published 2024-4-10</span>
							<span>Issue #2 Vol.24 Social Sciences</span>
						</i>

					</div>
					<!-- Article Content -->

				</div>
				<div class="flex justify-between items-center mt-4">
					<!-- Read More Button -->
					<a href="#" class="text-indigo-500 hover:text-indigo-600">Read More <span
							class="inline-block ml-2">→</span></a>
					<!-- Author(s) -->
					<!--  -->
					<div class="text-sm text-gray-500">

					<?php foreach ($article_authors as $a):
						if ($a["article_id"] == $i["articleid"]) {
							foreach ($authors as $j):
								if ($j["auid"] == $a["audid"]) {
									?>
										<?= $j["author_name"] ?>
									
									<?php
								}
							endforeach;
						} else {
							continue;
						}
						?>
						<!-- <div class="text-sm text-gray-500">Author Name</div> -->
					<?php endforeach; ?>
					</div>
				</div>
			</div>

		<?php endforeach; ?>


	</div>
	<div class="col-span-1 m-4">
		<div class="bg-white shadow-2xl border-2 border-gray-300 rounded-lg p-6 h-full">
			<h2 class="text-center text-xl font-bold mb-4">Announcement</h2>
			<p class="text-center">This is a sample announcement text. It's vertically long with round corners and
				centered at the top.</p>
		</div>
	</div>
</div>
