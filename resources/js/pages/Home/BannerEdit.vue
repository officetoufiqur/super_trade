<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Banner Edit',
        href: '/banner',
    },
];

</script>

<template>

    <Head title="Banner Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Banner Edit</h1>
                <Link :href="'/banner'"><button class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded">Back</button></Link>
            </div>

            <div class="border border-gray-200 p-5 mt-3 shadow rounded">
                <form action="">
                    <p class="mb-1">English</p>
                    <div class="grid grid-cols-2 gap-4">
                        <InputLabel forr="title_en" :label="'Title English'" type="text" :placeholder="'Enter your english title'" />
                        <InputLabel forr="sub_title_en" :label="'Sub Title English'" type="text" :placeholder="'Enter your english sub title'" />
                        <InputLabel forr="btn_text1_en" :label="'Button Text 1 English'" type="text" :placeholder="'Enter your english button text 1'" />
                        <InputLabel forr="btn_text2_en" :label="'Button Text English'" type="text" :placeholder="'Enter your english button text 2'" />
                        <InputLabel forr="video_en" :label="'Video English'" type="file" class="cursor-pointer" />
                    </div>

                    <p class="mt-5 mb-1">French</p>
                    <div class="grid grid-cols-2 gap-4">
                        <InputLabel forr="title_fr" :label="'Title French'" type="text" :placeholder="'Enter your french title'" />
                        <InputLabel forr="sub_title_fr" :label="'Sub Title French'" type="text" :placeholder="'Enter your french sub title'" />
                        <InputLabel forr="btn_text1_fr" :label="'Button Text 1 French'" type="text" :placeholder="'Enter your french button text 1'" />
                        <InputLabel forr="btn_text2_fr" :label="'Button Text French'" type="text" :placeholder="'Enter your french button text 2'" />
                        <InputLabel forr="video_fr" :label="'Video French'" type="file" class="cursor-pointer" />
                    </div>

                    <button type="submit" class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
