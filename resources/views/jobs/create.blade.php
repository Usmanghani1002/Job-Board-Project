<x-layout>
    <x-page-heading> Create a Job </x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Job Title" name="title" placeholder="Web Developer"/>
        <x-forms.input label="Job Description" name="description" placeholder="Job Description" type="textarea" />
        <x-forms.input label="Job Location" name="location" placeholder="Rawalpindi"/>
        <x-forms.input label="Job Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.select label="type" name="type">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>
        <x-forms.input label="Job URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />
        <x-forms.divider />
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="frontend, video, education" />
        <x-forms.button> Create Job </x-forms.button>
    </x-forms.form>

</x-layout>