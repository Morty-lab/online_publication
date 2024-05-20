<div class="flex flex-wrap  p-4 pt-16">
	<!-- Card 1 -->
	<div class="w-[400px]  bg-[#77B0AA] shadow-lg rounded-lg p-6 me-10 grid grid-cols-2">
		<div class="col-span-1 flex justify-center flex-col">
			<h2 class="text-xl font-bold mb-4 text-white">Active Users</h2>
			<img src="<?= base_url('assets/icons8-person-100.png'); ?>" alt="" class="h-20 self-center">
		</div>
		<div class="col-span-1 flex justify-center items-center">
			<h1 class="text-7xl text-center font-bold mb-4 text-white"><?=$user_count?></h1>
		</div>

	</div>

	<!-- Card 2 -->
	<div class="w-[400px]  bg-[#77B0AA] shadow-lg rounded-lg p-6 me-10 grid grid-cols-2">
		<div class="col-span-1 flex justify-center flex-col">
			<h2 class="text-xl font-bold mb-4 text-white">Published Articles</h2>
			<img src="<?= base_url('assets/book.png'); ?>" alt="" class="h-20 self-center">
		</div>
		<div class="col-span-1 flex justify-center items-center">
			<h1 class="text-7xl text-center font-bold mb-4 text-white"><?=$article_count?></h1>
		</div>

	</div>
</div>

<div class="p-4 pe-10">
	<h1 class="text-4xl text-start font-bold mb-4 text-black">Articles</h1>


	<div class="w-auto h-30 bg-white rounded-xl border-2 border-[#135D66] mt-4 px-4">
		<div class="grid grid-cols-3">
			<div class="py-6 px-4 col-span-2">
				<div class="uppercase tracking-wide text-md text-[#333333] font-semibold">Article
				</div>
				<p class="mt-2 text-sm text-gray-500">
					Issue #1

				</p>
			</div>

			<div class="flex items-center col-span-1">
				<div
					class="border-gray-300 py-2 px-4 items-center bg-[#003C43] bg-opacity-20 text-[#003C43] font-bold rounded-full">
					Published
				</div>
				<div class="border-l-2 border-[#135D66] border-opacity-50 h-full mx-4"></div>

				<div class="mx-4 border-gray-300 ">
					<button class="bg-[#135D66] hover:bg-[#77B0AA] text-white font-bold py-2 px-4 rounded-xl w-28">
						Edit
					</button>
				</div>
				<div class=" border-gray-300 pr-2">
					<button class="bg-[#77B0AA] hover:bg-[#135D66] text-white font-bold py-2 px-4 rounded-xl w-28">
						Archive
					</button>
				</div>
			</div>

		</div>
	</div>
</div>
