<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="RP 9.000.000"/>
        <x-forms.input label="Location" name="location" placeholder="Surabaya"/>

        <x-forms.select label="Schedule" name="schedule">
            <option class="font-black">Part Time</option>
            <option class="font-black">Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>
        <x-forms.checkbox label="Feature (Cost Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracast, video"/>



        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
