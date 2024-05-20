<div class="flex flex-col items-start  h-screen" x-data="{open:true}">




	<div class="sticky top-0 bg-white w-full  p-0">
		<ul class="flex flex-wrap justify-between text-sm font-medium text-center text-gray-500 border-b border-gray-200 mt-20 ms-10 ">
			<li class="me-2">
				<a aria-current="page" x-on:click="open = true"
					:class="{ 'bg-[#77B0AA] text-white': open, 'text-[#617273] hover:bg-[#77B0AA] hover:text-white':!open }"
					class="inline-block p-4 text-xl bg-[#77B0AA] rounded-t-lg h-16 w-60">Published Articles</a>
					<a x-on:click="open = false"
					:class="{ 'bg-[#77B0AA] text-white':!open, 'hover:bg-[#77B0AA] hover:text-white hover:bg-[77B0AA]': open }"
					class="inline-block p-4 text-xl rounded-t-lg active h-16 w-60">Submissions</a>
			</li>
			<!-- <li class="me-2">
				
			</li> -->
			<li class=" justify-end mx-16 mt-5" x-show="!open">

				<a href="addSubmission"
					class=" my-4 bg-[#77B0AA] hover:bg-[#003C43] text-white font-bold py-2 px-4 rounded-xl">
					Add Submission
				</a>

			</li>
		</ul>


	</div>



	<div x-show="open" class="mt-4">

		<div class="overflow-hidden border border-gray-200 mx-10 w-[75vw] " x-show="open">
			<table class="min-w-full divide-y divide-gray-200 ">
				<thead class="bg-gray-50 ">
					<tr>


						<th scope="col" class="px-12 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							#
						</th>

						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							Article Title
						</th>

						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							File
						</th>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							Volume
						</th>

						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							Actions</th>
					</tr>
				</thead>
				<tbody class="bg-white divide-y divide-gray-200  ">
					<?php
					$i = 1;
					foreach ($articles as $article):
						?>



						<tr>
							<td class="px-4 py-4 text-md text-center whitespace-nowrap font-medium text-gray-500 ">
								<?= $i ?>
							</td>
							<td class="px-12 py-4 text-sm font-medium whitespace-nowrap text-gray-500">
								<?= $article["title"] ?>
							</td>
							<td class="px-4 py-4 text-sm whitespace-nowrap text-gray-500">
								<?= $article["filename"] ?>
							</td>
							<td class="px-4 py-4 text-sm whitespace-nowrap text-gray-500">
								<?php foreach ($volumes as $volume):
									if ($volume["volumeid"] == $article["volumeid"]) {
										echo $volume["vol_name"];
									}

								endforeach;

								?>
							</td>
							<td class="px-4 py-4 text-sm whitespace-nowrap flex flex-row gap-1">
								<!-- <button
											class="bg-blue-500 hover:bg-blue-700 text-gray-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
											data-modal-toggle="viewModal">
											View
										</button> -->
								<!-- <a href="editUser?id=<?= $user["userid"] ?>"
											class="bg-green-500 hover:bg-green-700 text-gray-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
										</a> -->
								<a href="deleteUser/<?php // $user["userid"] ?>"
									class="px-2 py-2 bg-[#135D66] rounded-md flex justify-center items-center w-fit">
									<img src="<?= base_url() ?>assets/delete.png" alt="" class="h-5 w-5 inline-block ">
								</a>
								<a href="editUser?id=<?php // $user["userid"] ?>"
									class="px-2 py-2 bg-[#135D66] rounded-md flex justify-center items-center w-fit">
									<img src="<?= base_url() ?>assets/pencil-simple.svg" alt=""
										class="h-5 w-5 inline-block ">
								</a>

							</td>


						</tr>
						<?php
						$i++;
					endforeach;
					?>





				</tbody>
			</table>

		</div>






		<!-- Content for Published Articles goes here -->
	</div>

	<!-- Submissions Content -->
	<div x-show="!open" class="mt-4">

		<div class="overflow-hidden border border-gray-200 mx-10 w-[75vw] " x-show="!open">
			<table class="min-w-full divide-y divide-gray-200 ">
				<thead class="bg-gray-50 ">
					<tr>


						<th scope="col" class="px-12 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							#
						</th>

						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							Article Title
						</th>

						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							File
						</th>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							Volume
						</th>

						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left  text-gray-500 ">
							Actions</th>
					</tr>
				</thead>
				<tbody class="bg-white divide-y divide-gray-200  ">
					<?php
					$i = 1;
					foreach ($submission as $article):
						if ($article["published"] == 1) {
							continue;
						} else {

							?>



							<tr>
								<td class="px-4 py-4 text-md text-center whitespace-nowrap font-medium text-gray-500 ">
									<?= $i ?>
								</td>
								<td class="px-12 py-4 text-sm font-medium whitespace-nowrap text-gray-500">
									<?= $article["title"] ?>
								</td>
								<td class="px-4 py-4 text-sm whitespace-nowrap text-gray-500">
									<?= $article["filename"] ?>
								</td>
								<td class="px-4 py-4 text-sm whitespace-nowrap text-gray-500">
									<?php foreach ($volumes as $volume):
										if ($volume["volumeid"] == $article["volumeid"]) {
											echo $volume["vol_name"];
										}

									endforeach;

									?>
								</td>
								<td class="px-4 py-4 text-sm whitespace-nowrap flex flex-row gap-1">
									<!-- <button
											class="bg-blue-500 hover:bg-blue-700 text-gray-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
											data-modal-toggle="viewModal">
											View
										</button> -->
									<!-- <a href="editUser?id=<?= $user["userid"] ?>"
											class="bg-green-500 hover:bg-green-700 text-gray-500 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
										</a> -->
									<a href="publish?id=<?= $article["submission_id"] ?>"
										class="px-2 py-2 bg-[#135D66] rounded-md flex justify-center items-center w-fit">
										<img src="<?= base_url() ?>assets/arrow-square-up.svg" alt=""
											class="h-5 w-5 inline-block ">
									</a>
									<a href="deleteUser/<?php // $user["userid"] ?>"
										class="px-2 py-2 bg-[#135D66] rounded-md flex justify-center items-center w-fit">
										<img src="<?= base_url() ?>assets/delete.png" alt="" class="h-5 w-5 inline-block ">
									</a>
									<a href="editUser?id=<?php // $user["userid"] ?>"
										class="px-2 py-2 bg-[#135D66] rounded-md flex justify-center items-center w-fit">
										<img src="<?= base_url() ?>assets/pencil-simple.svg" alt=""
											class="h-5 w-5 inline-block ">
									</a>

								</td>


							</tr>
							<?php
							$i++;
						}
					endforeach;
					?>





				</tbody>
			</table>

		</div>
	</div>


</div>
