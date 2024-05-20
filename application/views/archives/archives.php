<div class="flex h-screen bg-white" x-data="{ showAll: false , selectedVolume: <?= $volumes[0]["volumeid"] ?> }">
	<div class="mt-36 w-52 bg-[#D9D9D9] h-[270] rounded-2xl overflow-hidden " x-bind:class="{ 'h-fit': showAll }">
		<div class="p-4">

			<ul class="mt-4">
				<?php
				$count = 1;
				foreach ($volumes as $i):
					
					if ($count == 5) {
						?>
						<li @click="showAll =!showAll" class="flex justify-center items-center mt-3"
							x-bind:class="{ 'hidden': showAll }">
							<p>See More</p>
							<img src="<?= base_url('assets/arrow_down.png'); ?>" alt="" class="h-4">
						</li>
						<li class="mt-3  p-2 text-center rounded-full" @click="selectedVolume = <?= $i["volumeid"] ?>"
							x-bind:class="{'bg-[#003C43]': selectedVolume == <?= $i["volumeid"] ?>, 'bg-[#77B0AA]': selectedVolume!= <?= $i["volumeid"] ?>}">
							<a href="#" class="text-white "><?= $i["vol_name"] ?></a>
						</li>

						<?php
					} else {
						?>
						<li class="mt-3  p-2 text-center rounded-full" @click="selectedVolume = <?= $i["volumeid"] ?>"
							x-bind:class="{'bg-[#003C43]': selectedVolume == <?= $i["volumeid"] ?>, 'bg-[#77B0AA]': selectedVolume!= <?= $i["volumeid"] ?>}">
							<a href="#" class="text-white "><?= $i["vol_name"] ?></a>
						</li>
						<?php
					}

					$count++;
				endforeach;


				?>

				<li @click="showAll =!showAll, selectedVolume = <?= $volumes[0]["volumeid"] ?>" class="flex justify-center items-center mt-3"
					x-bind:class="{ 'block': showAll }">
					<p>See Less</p>
					<img src="<?= base_url('assets/arrow_down.png'); ?>" alt="" class="h-4">
				</li>

				<script>
					console.log(<?= $count ?>)
				</script>



			</ul>
		</div>
	</div>

	<div class="mt-36 ml-5 ">

		<?php
		foreach ($articles as $i):
			?>
			<div class="w-[950px] h-30 bg-white rounded-xl border-2 border-[#135D66] px-4 mb-2"
				x-show="selectedVolume == <?= $i["volumeid"] ?>">
				<div class="flex justify-between">
					<div class="py-6 px-4 col-span-2">
						<div class="uppercase tracking-wide text-md text-[#333333] font-semibold"><?= $i["title"] ?>
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

		<?php endforeach; ?>


	</div>

	<!-- <div class="flex-1 flex flex-col overflow-hidden">
		
		<div class="container d-flex align-items-center" style="height:100vh;">
			<table class="table table-hover">
				<thead>
					<tr class="table-primary text-center">
						<th scope="col">#</th>
						<th scope="col">Volume Name</th>
						<th scope="col">Description</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($volumes as $i): ?>
					<tr class="table-primary">
						<th class="text-center" scope="row"><?= $i["volumeid"] ?></th>
						<td class="text-center"><?= $i["vol_name"] ?></td>
						<td class="text-center"><?= $i["description"] ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div> -->
</div>
