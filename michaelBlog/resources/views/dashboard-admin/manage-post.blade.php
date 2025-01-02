<div class="relative overflow-x-auto">
    <h3 class="text-xl font-semibold mb-4">
        Edit the Post
    </h3>
    <table class="w-full text-sm text-left text-gray-700">
        <thead class="text-xs uppercase bg-gray-100 text-gray-600">
            <tr>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Author</th>
                <th scope="col" class="px-6 py-3">Caption</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                        {{ $gallery->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $gallery->image }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $gallery->author }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $gallery->captions }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

