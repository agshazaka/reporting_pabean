<x-layout>
    <!-- Start block -->
    <div class="mx-4 max-h-screen-full py-4">
        <!-- Start coding here -->
        <div class="lg:flex lg:items-center lg:justify-between mb-5">
            <div class="min-w-0 flex-1">
                <h2
                    class="text-2xl font-bold leading-7 text-gray-900 dark:text-white sm:truncate sm:text-3xl sm:tracking-tight">
                    {{ $title }}
                </h2>
                <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        {{ $title }}
                    </div>
                </div>
            </div>
            <div class="mt-5 flex lg:ml-4 lg:mt-0">
            </div>
        </div>
        <div class="bg-white dark:bg-gray-900 relative shadow-md sm:rounded-lg overflow-hidden pb-4">

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 dark:bg-gray-800">
                    <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400 border-b-2">
                        <tr>
                            <th scope="col" class="px-4 py-3" rowspan="2">No</th>
                            <th scope="col" class="px-4 py-3" rowspan="2">Kode Barang</th>
                            <th scope="col" class="px-4 py-3" rowspan="2">Nama Barang</th>
                            <th scope="col" class="px-4 py-3" rowspan="2">Sat</th>
                            <th scope="col" class="px-4 py-3" rowspan="2">Jumlah</th>
                            <th scope="col" class="px-4 py-3" rowspan="2">
                                #
                                <span class="sr-only">#</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3" colspan="6">
                                <p class="font-semibold text-xl my-4">Data is Empty!</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End block -->
</x-layout>
