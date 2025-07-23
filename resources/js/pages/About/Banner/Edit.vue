<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Banner Edit',
        href: '/banner',
    },
];

const props = defineProps<{
    aboutBanner: {
        id: number;
        language: string;
        banner_title_eng: string;
        banner_sort_title_eng: string;
        banner_title_fr: string;
        banner_sort_title_fr: string;
        banner_image: string;
    };
}>();


const form = useForm({
    id: props.aboutBanner.id,
    language: props.aboutBanner.language,
    banner_title_eng: props.aboutBanner.banner_title_eng,
    banner_sort_title_eng: props.aboutBanner.banner_sort_title_eng,
    banner_title_fr: props.aboutBanner.banner_title_fr,
    banner_sort_title_fr: props.aboutBanner.banner_sort_title_fr,
    banner_image: props.aboutBanner.banner_image,
});


function submit() {
    form.post('/about/banner/update/' + props.aboutBanner.id);
}

</script>

<template>

    <Head title="Banner Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Banner Edit</h1>
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
                        <InputLabel forr="banner_title_eng" :label="'Banner Title English'"
                            v-model="form.banner_title_eng" type="text"
                            :placeholder="'Enter your english banner title'" />
                        <InputLabel forr="banner_sort_title_eng" :label="'Banner Sort Title English'"
                            v-model="form.banner_sort_title_eng" type="text"
                            :placeholder="'Enter your english banner sort title'" />
                        <InputLabel forr="banner_image" :label="'banner_image'" v-model="form.banner_image" type="text"
                            :placeholder="'Enter your banner image'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="banner_title_fr" :label="'Banner Title French'"
                            v-model="form.banner_title_fr" type="text"
                            :placeholder="'Enter your french banner title'" />
                        <InputLabel forr="banner_sort_title_fr" :label="'Banner Sort Title French'"
                            v-model="form.banner_sort_title_fr" type="text"
                            :placeholder="'Enter your french banner sort title'" />
                        <InputLabel forr="banner_image" :label="'banner_image'" v-model="form.banner_image" type="text"
                            :placeholder="'Enter your banner image'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
