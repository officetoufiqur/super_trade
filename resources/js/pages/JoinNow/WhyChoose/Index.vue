<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { SquarePenIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Join Why Choose',
        href: '/join/choose',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    joinChooseEng: {
        id: number;
        language: string;
        join_why_chooses_count_eng: string;
        join_why_chooses_count_title_eng: string;
        join_why_chooses_image_eng: string;
        join_why_chooses_title_eng: string;
        join_why_chooses_list1_eng: string;
        join_why_chooses_list2_eng: string;
        join_why_chooses_list3_eng: string;
        join_why_chooses_list4_eng: string;
        join_why_chooses_list5_eng: string;
        join_why_chooses_list6_eng: string;
        join_why_chooses_list7_eng: string;
        join_why_chooses_list8_eng: string;
        join_why_chooses_offer_number_eng: string;
        join_why_chooses_offer_title_eng: string;
    };
    joinChooseFr: {
        id: number;
        language: string;
        join_why_chooses_count_fr: string;
        join_why_chooses_count_title_fr: string;
        join_why_chooses_image_fr: string;
        join_why_chooses_title_fr: string;
        join_why_chooses_list1_fr: string;
        join_why_chooses_list2_fr: string;
        join_why_chooses_list3_fr: string;
        join_why_chooses_list4_fr: string;
        join_why_chooses_list5_fr: string;
        join_why_chooses_list6_fr: string;
        join_why_chooses_list7_fr: string;
        join_why_chooses_list8_fr: string;
        join_why_chooses_offer_number_fr: string;
        join_why_chooses_offer_title_fr: string;
    };
}>();
</script>

<template>

    <Head title="Join Why Choose" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <h1 class="text-2xl font-medium mb-4">Join Why Choose List</h1>
            <FlashMessage :flash="props.flash" />
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border">
                    <thead class="bg-[#74B53B]/20 text-sm text-gray-600">
                        <tr>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Image
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Language
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Count Title
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Title
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="props.joinChooseEng">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinChooseEng.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <img :src="props.joinChooseEng.join_why_chooses_image_eng" alt="" class="w-15 h-15">
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinChooseEng.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinChooseEng.join_why_chooses_count_title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinChooseEng.join_why_chooses_title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/join/choose/edit/' + props.joinChooseEng.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="props.joinChooseFr">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinChooseFr.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <img :src="props.joinChooseFr.join_why_chooses_image_fr" alt="" class="w-15 h-15">
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinChooseFr.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinChooseFr.join_why_chooses_count_title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinChooseFr.join_why_chooses_title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/join/choose/edit/' + props.joinChooseFr.id">
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
