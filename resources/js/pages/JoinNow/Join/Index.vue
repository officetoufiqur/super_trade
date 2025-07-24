<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { SquarePenIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Join Now',
        href: '/join/now',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    joinNowEng: {
        id: number;
        language: string;
        join_heading_eng: string;
        join_sub_heading_eng: string;
        join_title_eng: string;
        join_description_eng: string;
        join_video_eng: string;
        join_list1_eng: string;
        join_list2_eng: string;
        join_list3_eng: string;
        join_list4_eng: string;
        join_list5_eng: string;
        join_card_icon1_eng: string;
        join_card_icon2_eng: string;
        join_card_icon3_eng: string;
        join_card_title1_eng: string;
        join_card_title2_eng: string;
        join_card_title3_eng: string;
        join_card_sub_title1_eng: string;
        join_card_sub_title2_eng: string;
        join_card_sub_title3_eng: string;
    };
    joinNowFr: {
        id: number;
        language: string;
        join_heading_fr: string;
        join_sub_heading_fr: string;
        join_title_fr: string;
        join_description_fr: string;
        join_video_fr: string;
        join_list1_fr: string;
        join_list2_fr: string;
        join_list3_fr: string;
        join_list4_fr: string;
        join_list5_fr: string;
        join_card_icon1_fr: string;
        join_card_icon2_fr: string;
        join_card_icon3_fr: string;
        join_card_title1_fr: string;
        join_card_title2_fr: string;
        join_card_title3_fr: string;
        join_card_sub_title1_fr: string;
        join_card_sub_title2_fr: string;
        join_card_sub_title3_fr: string;
    };
}>();
</script>

<template>

    <Head title="Join Now" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <h1 class="text-2xl font-medium mb-4">Join Now List</h1>
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
                                Heading
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Title
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Description
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="props.joinNowEng">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowEng.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowEng.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowEng.join_heading_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowEng.join_title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowEng.join_description_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/join/now/edit/' + props.joinNowEng.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="props.joinNowFr">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowFr.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowFr.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowFr.join_heading_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowFr.join_title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinNowFr.join_description_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/join/now/edit/' + props.joinNowFr.id">
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
