<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Service Banner Edit',
        href: '/service/banner',
    },
];

const props = defineProps<{
    serviceBanner: {
        id: number;
        language: string;
        title_eng: string;
        sub_title_eng: string;
        title_fr: string;
        sub_title_fr: string;
        image: string;
    };
}>();


const form = useForm({
    id: props.serviceBanner.id,
    language: props.serviceBanner.language,
    title_eng: props.serviceBanner.title_eng,
    sub_title_eng: props.serviceBanner.sub_title_eng,
    title_fr: props.serviceBanner.title_fr,
    sub_title_fr: props.serviceBanner.sub_title_fr,
    image: props.serviceBanner.image
});


function submit() {
    form.post('/service/banner/update/' + props.serviceBanner.id);
}

</script>

<template>

    <Head title="Service Banner Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Service Banner Edit</h1>
                <Link :href="'/banner'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Back</button>
                </Link>
            </div>

            <div class="border border-gray-200 p-7 mt-3 shadow rounded">
                <form @submit.prevent="submit">
                    <div class="">
                        <div>
                            <label for="">Language</label>
                            <select class="border border-gray-300 rounded px-3 py-2.5 w-full mt-1"
                                v-model="form.language">
                                <option value="english">English</option>
                                <option value="france">French</option>
                            </select>
                        </div>
                    </div>

                    <div v-if="form.language === 'english'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="title_eng" :label="'Banner Title English'"
                            v-model="form.title_eng" type="text"
                            :placeholder="'Enter your english banner title'" />
                        <InputLabel forr="sub_title_eng" :label="'Banner Sub Title English'"
                            v-model="form.sub_title_eng" type="text"
                            :placeholder="'Enter your english banner Sub title'" />
                        <InputLabel forr="image" :label="'Banner Image'" v-model="form.image" type="text"
                            :placeholder="'Enter your banner image'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="title_fr" :label="'Banner Title France'"
                            v-model="form.title_fr" type="text"
                            :placeholder="'Enter your france banner title'" />
                        <InputLabel forr="sub_title_fr" :label="'Banner Sub Title France'"
                            v-model="form.sub_title_fr" type="text"
                            :placeholder="'Enter your france banner Sub title'" />
                        <InputLabel forr="image" :label="'Banner Image'" v-model="form.image" type="text"
                            :placeholder="'Enter your banner image'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
