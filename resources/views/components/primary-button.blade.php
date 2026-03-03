<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => '
            inline-flex items-center px-4 py-2
            bg-teal-600 dark:bg-teal-500
            border border-transparent rounded-md
            font-semibold text-xs uppercase tracking-widest
            text-white
            hover:bg-teal-700 dark:hover:bg-teal-400
            focus:bg-teal-700 dark:focus:bg-teal-400
            active:bg-teal-800 dark:active:bg-teal-600
            focus:outline-none
            focus:ring-2 focus:ring-teal-600
            focus:ring-offset-2 dark:focus:ring-offset-gray-800
            transition ease-in-out duration-150
        '
    ]) }}
>
    {{ $slot }}
</button>
