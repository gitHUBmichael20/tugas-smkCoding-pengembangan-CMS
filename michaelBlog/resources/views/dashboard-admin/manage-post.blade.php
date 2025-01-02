<div class="relative overflow-x-auto">
    <div class="flex flex-wrap justify-between items-center w-full gap-4 mb-5">
        <h3 class="text-2xl font-bold text-gray-800">Edit the Post</h3>
        <form class="relative flex items-center w-full max-w-md">
            <label for="search-input" class="sr-only">Search</label>
            <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="search-input"
                class="w-full pl-10 pr-24 py-3 text-sm text-gray-700 border rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Search Mockups, Logos..." required />
            <button type="submit"
                class="absolute right-2 top-1/2 transform -translate-y-1/2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-300">
                Search
            </button>
        </form>
    </div>

    <!-- Modal (Hidden by Default) -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-bold mb-4">Edit Gallery</h2>
            <form id="editForm" action="" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="editTitle" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="editTitle" name="title" class="w-full px-4 py-2 border rounded-lg"
                        required>
                </div>
                <div class="mb-4">
                    <label for="editImage" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="text" id="editImage" name="image" class="w-full px-4 py-2 border rounded-lg"
                        required>
                </div>
                <div class="mb-4">
                    <label for="editAuthor" class="block text-sm font-medium text-gray-700">Author</label>
                    <input type="text" id="editAuthor" name="author" class="w-full px-4 py-2 border rounded-lg"
                        required>
                </div>
                <div class="mb-4">
                    <label for="editCaption" class="block text-sm font-medium text-gray-700">Caption</label>
                    <textarea id="editCaption" name="caption" class="w-full px-4 py-2 border rounded-lg" required></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeModal" class="mr-4 px-4 py-2 bg-gray-300 rounded-lg">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Table -->
    <table class="w-full text-sm text-left text-gray-700">
        <thead class="text-xs uppercase bg-gray-100 text-gray-600">
            <tr>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Author</th>
                <th scope="col" class="px-6 py-3">Caption</th>
                <th scope="col" class="px-6 py-3">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4" data-title="{{ $gallery->title }}">{{ $gallery->title }}</td>
                    <td class="px-6 py-4" data-image="{{ $gallery->image }}">{{ $gallery->image }}</td>
                    <td class="px-6 py-4" data-author="{{ $gallery->author }}">{{ $gallery->author }}</td>
                    <td class="px-6 py-4" data-caption="{{ $gallery->captions }}">{{ $gallery->captions }}</td>
                    <td class="px-6 py-4">
                        <button type="button"
                            class="editButton px-4 py-2 bg-yellow-400 text-white rounded-lg">Edit</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.querySelectorAll('.editButton').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const title = row.querySelector('[data-title]').dataset.title;
            const image = row.querySelector('[data-image]').dataset.image;
            const author = row.querySelector('[data-author]').dataset.author;
            const caption = row.querySelector('[data-caption]').dataset.caption;

            document.getElementById('editTitle').value = title;
            document.getElementById('editImage').value = image;
            document.getElementById('editAuthor').value = author;
            document.getElementById('editCaption').value = caption;

            document.getElementById('editModal').classList.remove('hidden');
        });
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('editModal').classList.add('hidden');
    });
</script>
