<x-app-layout>
    <x-sidebar.sidebar />
    <div class="py-12 bg-blue-100 px-20">
        <div class="ml-[200px]">
            <div class= "overflow-hidden shadow-sm sm:rounded-lg md:px-8 md:py-8 bg-white">
                <div class="form-container">
                    <form method="POST">
                        @csrf
                        <div class="add-category">
                            <label for="add_category" class="text-black text-2xl font-medium leading-normal font-sans">Add Job Category</label>
                             <input type="text" name="add_category" class="py-2 rounded-md w-[100%] mt-4 text-lg font-medium leading-normal font-sans"  />
                        </div>

                        <div class="button-submit-cancel my-3 flex gap-x-4">
                            <button type="submit" class="bg-green-500 px-6 py-2 rounded-md text-white font-bold text-lg">Submit</button> <a href="" aria-label="cancel" class="bg-red-500 px-6 py-2 rounded-md text-white text-lg font-bold">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>