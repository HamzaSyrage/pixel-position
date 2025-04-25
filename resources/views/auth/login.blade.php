<x-layout>
    <x-forms.form>
        <section class="flex flex-col gap-3">
            <x-forms.input type="email" name="email" label="email" class="my-1" />
            <x-forms.input type="password" name="password" label="password" class="my-1" />
        </section>
        <x-forms.btn>login</x-forms.btn>
        <x-nav-link href="{{ route('register') }}" class="inline-block">or register</x-nav-link>

    </x-forms.form>
</x-layout>
