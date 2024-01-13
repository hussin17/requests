<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight d-inline">
                {{ __('التاشيرات') }}
            </h2>
            <a href="{{ route('admin.visa.create') }}" class="btn btn-primary">اضافة تاشيرة جديدة</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                        <th class="text-primary">#</th>
                        <th class="text-primary">الاسم</th>
                        <th class="text-primary">التحكم</th>
                    </thead>
                    <tbody>
                        @foreach ($visa as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('admin.visa.edit', $item->id) }}" class="btn btn-info">تعديل</a>

                                    {{-- <form action="{{ route('admin.visa.destroy', $item->id) }}" class="d-inline-block" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-dark">حذف</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
