<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { SquarePenIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Banner',
        href: '/banner',
    },
];

const props = defineProps({
    bannerEng: Object,
    bannerFr: Object,
});
</script>

<template>

    <Head title="Banner" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">

            <h1 class="text-2xl font-medium mb-4">Banner List</h1>

            <div class="relative overflow-x-auto border border-gray-200 rounded">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Language
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sub Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Btn Text 1
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Btn Text 2
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="props.bannerEng"
                            class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ props.bannerEng.id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ props.bannerEng.language }}
                            </td>
                            <td class="px-6 py-4">
                                {{ props.bannerEng.title_eng }}
                            </td>
                            <td class="px-6 py-4">
                                {{ props.bannerEng.sub_title_eng }}
                            </td>
                            <td class="px-6 py-4">
                                {{ props.bannerEng.btn_text1_eng }}
                            </td>
                            <td class="px-6 py-4">
                                {{ props.bannerEng.btn_text2_eng }}
                            </td>
                            <td class="px-6 py-4">
                                <Link :href="'/banner/edit/' + props.bannerEng.id"><SquarePenIcon class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white" /></Link>
                            </td>
                        </tr>
                        <tr v-if="props.bannerFr"
                            class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ props.bannerFr.id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ props.bannerFr.language }}
                            </td>
                            <td class="px-6 py-4">
                                {{ props.bannerFr.title_fr }}
                            </td>
                            <td class="px-6 py-4">
                                {{ props.bannerFr.sub_title_fr }}
                            </td>
                            <td class="px-6 py-4">
                                {{ props.bannerFr.btn_text1_fr }}
                            </td>
                            <td class="px-6 py-4">
                                {{ props.bannerFr.btn_text2_fr }}
                            </td>
                            <td class="px-6 py-4">
                                <Link :href="'/banner/edit/' + props.bannerFr.id"><SquarePenIcon class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white" /></Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </AppLayout>
</template>
