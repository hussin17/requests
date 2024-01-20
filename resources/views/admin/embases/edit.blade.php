<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight d-inline">
                {{ __('تعديل السفارة') }}
            </h2>
            <a href="{{ route('admin.embases.index') }}" class="btn btn-primary">الرجوع الى الخلف</a>
        </div>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">

                @if (Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                <form action="{{ route('admin.embases.update', $embases->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">اسم السفارة</label>
                        <input type="text" name="name" value="{{ $embases->name }}" required id="disabledTextInput" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary text-dark">ارسال</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
