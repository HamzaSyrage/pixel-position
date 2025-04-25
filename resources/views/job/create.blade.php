<x-layout>
    <x-heading>create a job</x-heading>
    <section class="flex flex-col gap-3">
        <x-forms.form action="{{ route('job.store') }}">
            <x-forms.input type="text" name="name" label="name" />
            <x-forms.input type="text" name="salary" label="salary" />
            <x-forms.input type="url" name="url" label="url" />
            <x-forms.input type="text" name="location" label="location" />
            <x-forms.input type="text" name="schedule" label="schedule" />
            <x-forms.checkbox name="featured" label="featured" />
            <x-forms.input type="text" name="tags" label="tags" />

            <x-forms.btn>create</x-forms.btn>
        </x-forms.form>
    </section>
</x-layout>
