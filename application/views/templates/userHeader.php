<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CodeIgniter_ITSD82</title>
	<script src="<?= base_url('assets/alpine.min.js'); ?>" defer></script>
	<script src="<?= base_url('assets/tailwindStyle.3'); ?>"></script>
	<script src="<?= base_url('assets/ckeditor.js'); ?>"></script>
	<!-- https://cdn.tailwindcss.com -->

</head>

<body>
	<aside class=" fixed flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-[#003C43] border-r rounded-tr-xl ">

		<?php
		$current_route = $this->uri->segment(1);
		?>


		<div class="flex flex-col justify-between flex-1 mt-[15vh]">
			<nav>
				<a class="flex text-center px-4 py-2 text-white bg-[#135D66] rounded-md  <?= $current_route == 'dashboard' ? 'bg-[#77B0AA] ' : '' ?>"
					href="dashboard">
					<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

					<span class="mx-4 text-center font-medium">Dashboard</span>
				</a>

				<a class="flex text-center px-4 py-2 mt-5 text-white bg-[#135D66] rounded-md  <?= $current_route == 'articles' ? 'bg-[#77B0AA] ' : '' ?>"
					href="articles">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-5 h-5">
						<rect width="256" height="256" fill="none" />
						<path d="M128,88a32,32,0,0,1,32-32h72V200H160a32,32,0,0,0-32,32" fill="none"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
						<path d="M24,200H96a32,32,0,0,1,32,32V88A32,32,0,0,0,96,56H24Z" fill="none"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
					</svg>

					<span class="mx-4 text-center font-medium">Articles</span>
				</a>

				<a class="flex text-center px-4 py-2 mt-5 text-white bg-[#135D66] rounded-md  <?= $current_route == 'volumes' ? 'bg-[#77B0AA] ' : '' ?>"
					href="volumes">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-5 h-5">
						<rect width="256" height="256" fill="none" />
						<path d="M128,88a32,32,0,0,1,32-32h72V200H160a32,32,0,0,0-32,32" fill="none"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
						<path d="M24,200H96a32,32,0,0,1,32,32V88A32,32,0,0,0,96,56H24Z" fill="none"
							stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
					</svg>

					<span class="mx-4 text-center font-medium">Volumes</span>
				</a>

				<a class="flex items-center px-4 py-2 mt-5 bg-[#135D66] text-white transition-colors duration-300 transform rounded-md  <?= $current_route == 'archives' ? 'bg-[#77B0AA] ' : '' ?>"
					href="archives">
					<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

					<span class="mx-4 font-medium">Archives</span>
				</a>

				<a class="flex items-center px-4 py-2 mt-5 bg-[#135D66] text-white transition-colors duration-300 transform rounded-md <?= $current_route == 'user' ? 'bg-[#77B0AA] ' : '' ?>"
					href="user">
					<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor"
							stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

					<span class="mx-4 font-medium">Users</span>
				</a>



				<a class="flex items-center px-4 py-2 mt-5 bg-[#135D66] text-white transition-colors duration-300 transform rounded-md  <?= $current_route == '' ? 'bg-[#77B0AA] ' : '' ?>"
					href="">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-5 h-5">
						<rect width="256" height="256" fill="none" />
						<line x1="128" y1="48" x2="128" y2="128" fill="none" stroke="currentColor"
							stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
						<path d="M176,56c24.08,15.7,40,41.11,40,72a88,88,0,0,1-176,0c0-30.89,15.92-56.3,40-72"
							fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
							stroke-width="16" />
					</svg>

					<span class="mx-4 font-medium">logout</span>
				</a>


			</nav>


		</div>
	</aside>
	<div class="w-[82vw] ml-auto">
		<!-- Main content goes here -->




		<!-- Add this script section at the end of your HTML file or in a separate JavaScript file -->
