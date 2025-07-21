<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
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

const props = defineProps<{
    flash: {
        message?: string;
    };
    bannerEng: {
        id: number;
        language: string;
        title_eng: string;
        sub_title_eng: string;
        btn_text1_eng: string;
        btn_text2_eng: string;
        video_eng: string;
    };
    bannerFr: {
        id: number;
        language: string;
        title_fr: string;
        sub_title_fr: string;
        btn_text1_fr: string;
        btn_text2_fr: string;
        video_fr: string;
    };
}>();
</script>

<template>

    <Head title="Banner" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <h1 class="text-2xl font-medium mb-4">Banner List</h1>
             <FlashMessage :flash="props.flash" />
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border">
                    <thead class="bg-[#74B53B]/20 text-sm text-gray-600">
                        <tr>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Language
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Title
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Sub Title
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Btn Text 1
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Btn Text 2
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="props.bannerEng">
                            <th scope="row" class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerEng.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerEng.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerEng.title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerEng.sub_title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerEng.btn_text1_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerEng.btn_text2_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/banner/edit/' + props.bannerEng.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="props.bannerFr">
                            <th scope="row" class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerFr.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerFr.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerFr.title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerFr.sub_title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerFr.btn_text1_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.bannerFr.btn_text2_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/banner/edit/' + props.bannerFr.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </AppLayout>
</template>
