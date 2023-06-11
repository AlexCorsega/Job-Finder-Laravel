@include('layouts.mainlayout')
@section('content')
    <div class="flex">
        <!--Side Bar -->
        <section>
        </section>
        <section class="flex-fill">
            <form action="#" method="get">
                @csrf
                <div class="flex justify-between relative text-lg">
                    <input type="text"
                        class="w-full py-1 px-3 ps-10 focus:border-blue-700 focus:outline-none rounded-full border border-blue-500"
                        placeholder="Search job">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 translate-y-1/2"></i>
                    <button
                        class="rounded-full py-1 px-4 bg-blue-500 text-white absolute mt-px right-0 text-md hover:bg-blue-900">Search</button>
                </div>
            </form>
        </section>
    </div>
@endsection
