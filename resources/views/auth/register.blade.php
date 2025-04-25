<x-layout>
    <x-forms.form enctype="multipart/form-data">
        <section class="flex flex-col gap-3">
            <x-forms.input name="name" label="name" class="my-1" />
            <x-forms.input type="email" name="email" label="email" class="my-1" />
            <x-forms.input type="password" name="password" label="password" class="my-1" />
            <x-forms.input type="password" name="password_confirmation" label="password confirmation" class="my-1" />
            <hr class="m-6 border-white/25 border-t-2" />

            <x-forms.input name="employer" label="employer name" class="my-1" />
            {{-- <x-forms.input type="file" name="logo" label="employer logo" class="my-1" /> --}}
            <x-forms.file-input name="logo" label="employer logo" />
        </section>
        <x-forms.btn>register</x-forms.btn>
    </x-forms.form>
</x-layout>
