<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('طلبات الحجز') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                        <th class="text-primary">#</th>
                        <th class="text-primary">معرض الصور</th>
                        <th class="text-primary">الفيديو</th>
                        <th class="text-primary">الاسم</th>
                        <th class="text-primary">الايميل</th>
                        <th class="text-primary">رقم التليفون</th>
                        <th class="text-primary">السفارة</th>
                        <th class="text-primary">التاشيرة</th>
                    </thead>
                    <tbody>
                        @foreach ($requests as $key=>$request)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <video src="{{ asset('/uploads/videos/' . $request->video) }}"></video>
                                </td>
                                <td>
                                    <i class="fa fas-folder"></i>
                                </td>
                                <td>{{ $request->name }}</td>
                                <td>{{ $request->email }}</td>
                                <td>{{ $request->phone }}</td>
                                <td>{{ $request->embase_name }}</td>
                                <td>{{ $request->visa_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
