<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('طلبات الحجز') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">معرض الصور</th>
                                <th scope="col" class="px-6 py-3">الفيديو</th>
                                <th scope="col" class="px-6 py-3">الاسم</th>
                                <th scope="col" class="px-6 py-3">الايميل</th>
                                <th scope="col" class="px-6 py-3">رقم التليفون</th>
                                <th scope="col" class="px-6 py-3">السفارة</th>
                                <th scope="col" class="px-6 py-3">التاشيرة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $key => $request)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $key + 1 }}</th>
                                    <td class="px-6 py-4">
                                        {{-- <i class="fa fas-folder" aria-hidden="true"></i> --}}
                                        <a href={{ route('admin.requests.gellary', $request->id) }}
                                            class="btn btn-info">
                                            <svg class="w-6 h-6 text-blue-500 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path fill="currentColor"
                                                    d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                                            </svg></a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <video controls width="150" height="150"
                                            src="{{ asset('/uploads/videos/' . $request->video) }}"></video>
                                    </td>
                                    <td class="px-6 py-4">{{ $request->name }}</td>
                                    <td class="px-6 py-4">{{ $request->email }}</td>
                                    <td class="px-6 py-4">{{ $request->phone }}</td>
                                    <td class="px-6 py-4">{{ $request->embase_name }}</td>
                                    <td class="px-6 py-4">{{ $request->visa_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
