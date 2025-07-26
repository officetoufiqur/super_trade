<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { SquarePenIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Faq Banner ',
        href: '/faq/banner',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    faqBannerEng: {
        id: number;
        language: string;
        title_eng: string;
        sub_title_eng: string;
        image: string;
    };
    faqBannerFr: {
        id: number;
        language: string;
        title_fr: string;
        sub_title_fr: string;
        image: string;
    };
}>();
</script>

<template>

    <Head title="Faq Banner " />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <h1 class="text-2xl font-medium mb-4">Faq Banner List</h1>
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
                                Title
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="props.faqBannerEng">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.faqBannerEng.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <img :src="props.faqBannerEng.image" alt="img" class="w-15 h-15">
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.faqBannerEng.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.faqBannerEng.title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/faq/banner/edit/' + props.faqBannerEng.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="props.faqBannerFr">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.faqBannerFr.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <img :src="props.faqBannerEng.image" alt="img" class="w-15 h-15">
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.faqBannerFr.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.faqBannerFr.title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/faq/banner/edit/' + props.faqBannerFr.id">
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
