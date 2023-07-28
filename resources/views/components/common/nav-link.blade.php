@props(['mobile' => false, 'navLabel', 'navLink'])
<div>
    <a href="{{ $navLink }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white {{ $mobile ? 'text-center' : 'text-left' }}">
        {{ $navLabel }}
    </a>
</div>