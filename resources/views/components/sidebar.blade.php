<!-- An unexamined life is not worth living. - Socrates -->

<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        {{-- <form action="#" method="GET" class="md:hidden mb-2">
        <label for="sidebar-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                    </path>
                </svg>
            </div>
            <input type="text" name="search" id="sidebar-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Search" />
        </div>
    </form> --}}
        <ul class="space-y-2">
            <li>
                <a href="/pemasukan_barang"
                    class="{{ request()->is('pemasukan_barang') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700' : 'text-gray-900 bg-white hover:bg-gray-200 dark:text-white dark:bg-gray-800 dark:hover:bg-gray-600' }} flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group"
                    aria-current="{{ request()->is('pemasukan_barang') ? 'page' : false }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 transition duration-75 {{ request()->is('pemasukan_barang') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Pemasukan Barang</span>
                </a>
            </li>
            <li>
                <a href="/pengeluaran_barang"
                    class="{{ request()->is('pengeluaran_barang') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700' : 'text-gray-900 bg-white hover:bg-gray-200 dark:text-white dark:bg-gray-800 dark:hover:bg-gray-600' }} flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group"
                    aria-current="{{ request()->is('pengeluaran_barang') ? 'page' : false }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 transition duration-75 {{ request()->is('pengeluaran_barang') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Pengeluaran Barang</span>
                </a>
            </li>
            <li>
                <a href="/posisi_wip"
                    class="{{ request()->is('posisi_wip') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700' : 'text-gray-900 bg-white hover:bg-gray-200 dark:text-white dark:bg-gray-800 dark:hover:bg-gray-600' }} flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group"
                    aria-current="{{ request()->is('posisi_wip') ? 'page' : false }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 transition duration-75 {{ request()->is('posisi_wip') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Posisi WIP</span>
                </a>
            </li>
            <li>
                <a href="/mutasi_bahan"
                    class="{{ request()->is('mutasi_bahan') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700' : 'text-gray-900 bg-white hover:bg-gray-200 dark:text-white dark:bg-gray-800 dark:hover:bg-gray-600' }} flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group"
                    aria-current="{{ request()->is('mutasi_bahan') ? 'page' : false }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 transition duration-75 {{ request()->is('mutasi_bahan') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Mutasi Bahan</span>
                </a>
            </li>
            <li>
                <a href="/mutasi_barang_jadi"
                    class="{{ request()->is('mutasi_barang_jadi') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700' : 'text-gray-900 bg-white hover:bg-gray-200 dark:text-white dark:bg-gray-800 dark:hover:bg-gray-600' }} flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group"
                    aria-current="{{ request()->is('mutasi_barang_jadi') ? 'page' : false }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 transition duration-75 {{ request()->is('mutasi_barang_jadi') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Mutasi Barang Jadi</span>
                </a>
            </li>
            <li>
                <a href="/mutasi_mesin"
                    class="{{ request()->is('mutasi_mesin') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700' : 'text-gray-900 bg-white hover:bg-gray-200 dark:text-white dark:bg-gray-800 dark:hover:bg-gray-600' }} flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group"
                    aria-current="{{ request()->is('mutasi_mesin') ? 'page' : false }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 transition duration-75 {{ request()->is('mutasi_mesin') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Mutasi Mesin</span>
                </a>
            </li>
            <li>
                <a href="/barang_reject"
                    class="{{ request()->is('barang_reject') ? 'text-gray-900 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-600 focus:bg-gray-100 dark:focus:bg-gray-700' : 'text-gray-900 bg-white hover:bg-gray-200 dark:text-white dark:bg-gray-800 dark:hover:bg-gray-600' }} flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group"
                    aria-current="{{ request()->is('barang_reject') ? 'page' : false }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6 transition duration-75 {{ request()->is('barang_reject') ? 'text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Barang Reject</span>
                </a>
            </li>
        </ul>
    </div>
    <div
        class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20">
        {{-- <div id="tooltip-settings" role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
            Settings page
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div> --}}
        <!-- Dropdown -->
        <button id="theme-toggle" type="button"
            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</aside>
