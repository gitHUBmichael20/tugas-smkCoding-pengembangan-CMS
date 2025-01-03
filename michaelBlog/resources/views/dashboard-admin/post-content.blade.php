<div class="bg-white border-4 rounded-lg shadow relative m-10">
    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Post a New Image
        </h3>
    </div>

    <form action="{{ route('gallery.store') }}" method="POST">
        @csrf
        <div class="p-6 space-y-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="title" class="text-sm font-medium text-gray-900 block mb-2">Image Title</label>
                    <input type="text" name="title" id="title"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="How to Build new app”" required="" autofocus>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="captions" class="text-sm font-medium text-gray-900 block mb-2">captions</label>
                    <input type="textarea" name="captions" id="captions"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="CSS" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="image" class="text-sm font-medium text-gray-900 block mb-2">IMAGE (in url)</label>
                    <input type="text" name="image" id="image"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="https:placeholding/" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="author" class="text-sm font-medium text-gray-900 block mb-2">Author</label>
                    <input type="text" name="author" id="author" value="michael"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="michael" readonly>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 rounded-b">
            <button type="submit"
                class="text-white bg-cyan-600 hover:bg-cyan-700 font-medium rounded-lg text-sm px-5 py-2.5">Post</button>
        </div>
    </form>
</div>

@if (session()->has('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

@if (session()->has('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif  