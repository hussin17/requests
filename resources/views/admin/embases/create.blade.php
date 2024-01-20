<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between;">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 d-inline">
                {{ __('اضافة سفارة جديدة') }}
            </h2>
            <a href="{{ route('admin.embases.index') }}"
                class="text-white bg-gray-800 hover:bg-gray-900 flex focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">الرجوع
                الى الخلف</a>
        </div>
    </x-slot>

    <div class="py-12 ">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-3 overflow-hidden bg-white shadow-sm sm:rounded-lg">

                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                <form action="{{ route('admin.embases.store') }}" class="p-4 bg-white md:p-5" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="disabledTextInput"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">اسم السفارة</label>
                        <input type="text" name="name" required id="disabledTextInput"
                            class="bg-gray-50 border col-span-2 sm:col-span-1 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ارسال</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
