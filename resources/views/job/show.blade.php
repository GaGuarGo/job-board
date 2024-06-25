<x-layout>

    <x-bread-crumbs class="mb-4"
                    :links="['Jobs' => route('jobs.index'), $job->title => '#']"
    ></x-bread-crumbs>

    <x-job-card :job="$job">

    </x-job-card>
</x-layout>
