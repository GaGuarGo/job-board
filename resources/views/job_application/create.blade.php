<x-layout>
    <x-bread-crumbs class="mb-4"
                    :links="['Jobs' => route('jobs.index'), $job->title => route('jobs.show', ['job' => $job]), 'Apply' => '#']"/>

    <x-job-card :$job>

    </x-job-card>

    <x-card>
        <h2 class="mb-4 text-lg font-medium">
            Your Job Application
        </h2>

        <form action="{{route('job.application.store', $job)}}" method="POST">
            @csrf

            <div class="mb-4">

                <label class="mb-2 block text-sm font-medium text-slate-900" for="expected_salary">Expected Salary</label>
                <x-text-input type="number" name="expected_salary" />

            </div>

            <x-button class="w-full">Apply</x-button>

        </form>
    </x-card>
</x-layout>
