<x-layout>
    <x-bread-crumbs class="mb-4"
                    :links="['Jobs' => route('jobs.index')]"
    ></x-bread-crumbs>
    @foreach($jobs as $job)
        <x-job-card :job="$job">
            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    Show
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
