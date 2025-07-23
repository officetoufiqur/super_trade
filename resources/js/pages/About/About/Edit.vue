<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'About Header Edit',
        href: '/about',
    },
];

const props = defineProps<{
    about: {
        id: number;
        language: string;
        about_header_eng: string;
        about_title_eng: string;
        about_sub_title_eng: string;
        about_header_fr: string;
        about_title_fr: string;
        about_sub_title_fr: string;
    };
}>();


const form = useForm({
    id: props.about.id,
    language: props.about.language,
    about_header_eng: props.about.about_header_eng,
    about_title_eng: props.about.about_title_eng,
    about_sub_title_eng: props.about.about_sub_title_eng,
    about_header_fr: props.about.about_header_fr,
    about_title_fr: props.about.about_title_fr,
    about_sub_title_fr: props.about.about_sub_title_fr,
});


function submit() {
    form.post('/about/update/' + props.about.id);
}

</script>

<template>

    <Head title="Banner Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Banner Edit</h1>
                <Link :href="'/about'"><button
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
                        <InputLabel forr="about_header_eng" :label="'About Header English'"
                            v-model="form.about_header_eng" type="text"
                            :placeholder="'Enter your english about header'" />
                        <InputLabel forr="about_title_eng" :label="'About Title English'"
                            v-model="form.about_title_eng" type="text"
                            :placeholder="'Enter your english about title'" />
                        <InputLabel forr="about_sub_title_eng" :label="'about_sub_title_eng'" v-model="form.about_sub_title_eng" type="text"
                            :placeholder="'Enter your about sub title'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                       <InputLabel forr="about_header_fr" :label="'About Header France'"
                            v-model="form.about_header_fr" type="text"
                            :placeholder="'Enter your france about header'" />
                        <InputLabel forr="about_title_fr" :label="'About Title France'"
                            v-model="form.about_title_fr" type="text"
                            :placeholder="'Enter your france about title'" />
                        <InputLabel forr="about_sub_title_fr" :label="'about_sub_title_fr'" v-model="form.about_sub_title_fr" type="text"
                            :placeholder="'Enter your about sub title'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
