@extends('layouts.app')

@section('content')
    <x-settings heading="Publish New Post">
        <form method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" required />
            <x-form.input name="slug" required />
            <x-form.input name="thumbnail" type="file" required />
            <x-form.textarea name="excerpt" required />
            <x-form.textarea name="body" required />
            <x-form.field>


                <x-form.field>
                    <x-form.label name="category"/>

                    <select name="category_id" id="category_id" required>
                        @foreach ($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category_id"/>
                </x-form.field>

            </x-form.field>
            <x-form.button>Publish</x-form.button>
        </form>
    </x-settings>
@endsection
