<div class="p-10">
    <form action="addVolume" method="post">

        <h2 class="text-gray-600 text-2xl mb-4">Add Volume</h2>
        <div class="mb-4">
            <label for="volume_title" class="block text-gray-600 text-sm font-medium mb-2">Volume Name</label>
            <input type="text" name="volume_title" id="volume_title"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="volume_description" class="block text-gray-600 text-sm font-medium mb-2">Volume Description</label>
            <textarea name="volume_description" id="volume_description"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                required></textarea>
        </div>

        <button type="submit"
            class="bg-[#003C43] hover:bg-[#77B0AA] text-white font-bold py-2 px-4 rounded-xl w-full">Submit</button>
    </form>
</div>
