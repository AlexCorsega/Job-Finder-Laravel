<x-guest-layout>
    <div class="py-5">
        <x-text-heading header="Tell us a little more about what you want"
            subHeader="Are you a person who finds a job or a recruiter?"></x-text-heading>
        <div class="flex justify-around mt-4">
            <x-primary-link-button href="{{route('register')}}">I'm an applicant</x-primary-link-button>
            <x-secondary-link-button href="{{route('register.recruiter')}}">I'm a recruiter</x-secondary-link-button>
        </div>
    </div>
</x-guest-layout>
