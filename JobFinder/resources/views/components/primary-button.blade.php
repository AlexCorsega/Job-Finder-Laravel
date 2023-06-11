<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 bg-blue-700 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-500 active:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
