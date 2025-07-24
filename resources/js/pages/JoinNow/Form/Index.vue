<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { SquarePenIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Join Form',
        href: '/join/form',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    joinFormEng: {
        id: number;
        language: string;
        join_form_icon_eng: string;
        join_form_title_eng: string;
        join_form_sub_title_eng: string;
        join_form_cname_label_eng: string;
        join_form_cname_placeholder_eng: string;
        join_form_name_label_eng: string;
        join_form_name_placeholder_eng: string;
        join_form_phone_label_eng: string;
        join_form_phone_placeholder_eng: string;
        join_form_email_label_eng: string;
        join_form_email_placeholder_eng: string;
        join_form_business_label_eng: string;
        join_form_business_placeholder_eng: string;
        join_form_address_label_eng: string;
        join_form_address_placeholder_eng: string;
        join_form_about_us_label_eng: string;
        join_form_about_us_placeholder_eng: string;
        join_form_about_us_menu1_eng: string;
        join_form_about_us_menu2_eng: string;
        join_form_about_us_menu3_eng: string;
        join_form_about_us_menu4_eng: string;
        join_form_about_us_menu5_eng: string;
        join_form_about_us_menu6_eng: string;
    };
    joinFormFr: {
        id: number;
        language: string;
        join_form_icon_fr: string;
        join_form_title_fr: string;
        join_form_sub_title_fr: string;
        join_form_cname_label_fr: string;
        join_form_cname_placeholder_fr: string;
        join_form_name_label_fr: string;
        join_form_name_placeholder_fr: string;
        join_form_phone_label_fr: string;
        join_form_phone_placeholder_fr: string;
        join_form_email_label_fr: string;
        join_form_email_placeholder_fr: string;
        join_form_business_label_fr: string;
        join_form_business_placeholder_fr: string;
        join_form_address_label_fr: string;
        join_form_address_placeholder_fr: string;
        join_form_about_us_label_fr: string;
        join_form_about_us_placeholder_fr: string;
        join_form_about_us_menu1_fr: string;
        join_form_about_us_menu2_fr: string;
        join_form_about_us_menu3_fr: string;
        join_form_about_us_menu4_fr: string;
        join_form_about_us_menu5_fr: string;
        join_form_about_us_menu6_fr: string;
    };
}>();
</script>

<template>

    <Head title="Join Form" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <h1 class="text-2xl font-medium mb-4">Join Form List</h1>
            <FlashMessage :flash="props.flash" />
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border">
                    <thead class="bg-[#74B53B]/20 text-sm text-gray-600">
                        <tr>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                ID
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Icon
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
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="props.joinFormEng">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinFormEng.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <span v-html="props.joinFormEng.join_form_icon_eng"></span>
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinFormEng.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinFormEng.join_form_title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinFormEng.join_form_sub_title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/join/form/edit/' + props.joinFormEng.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="props.joinFormFr">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinFormFr.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <span v-html="props.joinFormFr.join_form_icon_fr"></span>
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinFormFr.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinFormFr.join_form_title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.joinFormFr.join_form_sub_title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/join/form/edit/' + props.joinFormFr.id">
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
