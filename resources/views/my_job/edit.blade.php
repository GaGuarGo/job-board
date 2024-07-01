<x-layout>

    <x-bread-crumbs :links="['My Jobs' => route('my-jobs.index'), 'Edit Job' => '#']" class="mb-4"/>

    <x-card class="mb-8">

        <form action="{{route('my-jobs.update', $job)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4 grid grid-cols-2 gap-4">

                <div>
                    <x-label for="title" :required="true">Job Title</x-label>
                    <x-text-input name="title" :value="$job->title"></x-text-input>
                </div>
                <div>
                    <x-label for="location" :required="true">Location</x-label>
                    <x-text-input name="location" :value="$job->location"></x-text-input>
                </div>
                <div class="col-span-2">
                    <x-label for="salary" :required="true">Salary</x-label>
                    <x-text-input type="number" name="salary" :value="$job->salary"></x-text-input>
                </div>

                <div class="col-span-2">
                    <x-label for="description" :required="true">Description</x-label>
                    <x-text-input type="textarea" name="description" :value="$job->description"></x-text-input>
                </div>

                <div>
                    <x-label for="experience" :required="true">Experience</x-label>
                    <x-radio-group name="experience" :value="$job->experience"
                                   :options="array_combine( array_map('ucfirst', \App\Models\Job::$experience),\App\Models\Job::$experience)"
                                   :allOption="false"
                    />
                </div>

                <div>
                    <x-label for="category" :required="true">Category</x-label>
                    <x-radio-group name="category" :value="$job->category"
                                   :options="array_combine( array_map('ucfirst', \App\Models\Job::$category),\App\Models\Job::$category)"
                                   :allOption="false"
                    />
                </div>

                <x-button class="w-full col-span-2">Edit Job</x-button>

            </div>

        </form>

    </x-card>

</x-layout>
