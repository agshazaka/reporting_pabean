<!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
{{-- Not used yet --}}
@props(['active' => false])
<li>
    <a class="{{ $active ? 'text-gray-900 bg-gray-100 dark:bg-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' : 'text-gray-900 bg-gray-100 hover:bg-gray-200 dark:text-white dark:bg-gray-700 dark:hover:bg-gray-600' }} flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group"
        aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>
        <span class="ml-3">{{ $slot }}</span>

    </a>
</li>
