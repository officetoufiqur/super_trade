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
    banner: {
        id: number;
        title_eng: string;
        sub_title_eng: string;
        btn_text1_eng: string;
        btn_text2_eng: string;
        video_eng: string;
        title_fr: string;
        sub_title_fr: string;
        btn_text1_fr: string;
        btn_text2_fr: string;
        video_fr: string;
    };
}>();


const form = useForm({
    id: props.banner.id,
    title_eng: props.banner.title_eng ?? '',
    sub_title_eng: props.banner.sub_title_eng ?? '',
    btn_text1_eng: props.banner.btn_text1_eng ?? '',
    btn_text2_eng: props.banner.btn_text2_eng ?? '',
    video_eng: props.banner.video_eng ?? '',
    title_fr: props.banner.title_fr ?? '',
    sub_title_fr: props.banner.sub_title_fr ?? '',
    btn_text1_fr: props.banner.btn_text1_fr ?? '',
    btn_text2_fr: props.banner.btn_text2_fr ?? '',
    video_fr: props.banner.video_fr ?? '',
});


function submit() {
    form.post('/banner/update/' + props.banner.id);
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
                    <div v-if="form.id === 1" class="grid grid-cols-2 gap-4">
                        <InputLabel forr="title_en" :label="'Title English'" v-model="form.title_eng" type="text"
                            :placeholder="'Enter your english title'" />
                        <InputLabel forr="sub_title_en" :label="'Sub Title English'" v-model="form.sub_title_eng"
                            type="text" :placeholder="'Enter your english sub title'" />
                        <InputLabel forr="btn_text1_en" :label="'Button Text 1 English'" v-model="form.btn_text1_eng"
                            type="text" :placeholder="'Enter your english button text 1'" />
                        <InputLabel forr="btn_text2_en" :label="'Button Text English'" v-model="form.btn_text2_eng"
                            type="text" :placeholder="'Enter your english button text 2'" />
                        <InputLabel forr="video_en" :label="'Video English'" type="text" v-model="form.video_eng"
                            class="cursor-pointer" :placeholder="'Enter your english video url'" />
                    </div>

                    <div v-if="form.id === 2" class="grid grid-cols-2 gap-4">
                        <InputLabel forr="title_fr" :label="'Title French'" v-model="form.title_fr" type="text"
                            :placeholder="'Enter your french title'" />
                        <InputLabel forr="sub_title_fr" :label="'Sub Title French'" v-model="form.sub_title_fr"
                            type="text" :placeholder="'Enter your french sub title'" />
                        <InputLabel forr="btn_text1_fr" :label="'Button Text 1 French'" v-model="form.btn_text1_fr"
                            type="text" :placeholder="'Enter your french button text 1'" />
                        <InputLabel forr="btn_text2_fr" :label="'Button Text French'" v-model="form.btn_text2_fr"
                            type="text" :placeholder="'Enter your french button text 2'" />
                        <InputLabel forr="video_fr" :label="'Video French'" type="text" v-model="form.video_fr"
                            class="cursor-pointer" :placeholder="'Enter your french video url'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
