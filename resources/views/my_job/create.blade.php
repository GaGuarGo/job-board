<x-layout>

    <x-bread-crumbs :links="['My Jobs' => route('my-jobs.index'), 'Create' => '#']" class="mb-4"/>

    <x-card class="mb-8">

        <form action="{{route('my-jobs.store')}}" method="POST">
            @csrf

            <div class="mb-4 grid grid-cols-2 gap-4">

                <div>
                    <x-label for="title" :required="true">Job Title</x-label>
                    <x-text-input name="title"></x-text-input>
                </div>
                <div>
                    <x-label for="location" :required="true">Location</x-label>
                    <x-text-input name="location"></x-text-input>
                </div>
                <div class="col-span-2">
                    <x-label for="salary" :required="true">Salary</x-label>
                    <x-text-input type="number" name="salary"></x-text-input>
                </div>

                <div class="col-span-2">
                    <x-label for="description" :required="true">Description</x-label>
                    <x-text-input type="textarea" name="description"></x-text-input>
                </div>

                <div>
                    <x-label for="experience" :required="true">Experience</x-label>
                    <x-radio-group name="experience" :value="old('experience')"
                                   :options="array_combine( array_map('ucfirst', \App\Models\Job::$experience),\App\Models\Job::$experience)"
                                   :allOption="false"
                    />
                </div>

                <div>
                    <x-label for="category" :required="true">Category</x-label>
                    <x-radio-group name="category" :value="old('category')"
                                   :options="array_combine( array_map('ucfirst', \App\Models\Job::$category),\App\Models\Job::$category)"
                                   :allOption="false"
                    />
                </div>

                <x-button class="w-full col-span-2">Create Job</x-button>

            </div>

        </form>

    </x-card>

</x-layout>