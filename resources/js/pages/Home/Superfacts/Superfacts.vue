<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { SquarePenIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Super Facts',
        href: '/superfacts',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    superfactsEng: {
        id: number;
        language: string;
        title_eng: string;
        description_eng: string;
        btn_text_eng: string;
        image: string;
    };
    superfactsFr: {
        id: number;
        language: string;
        title_fr: string;
        description_fr: string;
        btn_text_fr: string;
        image: string;
    };
}>();
</script>

<template>

    <Head title="superfacts" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <h1 class="text-2xl font-medium mb-4">superfacts List</h1>
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
                                Description
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Btn Text
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="props.superfactsEng">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsEng.id }}
                            </th>
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <div class="bg-gradient-to-b from-[#134118] to-[#9ACB34] rounded">
                                    <img :src="props.superfactsEng.image" alt="" class="w-25 h-15">
                                </div>
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsEng.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsEng.title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsEng.description_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsEng.btn_text_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/home/superfacts/edit/' + props.superfactsEng.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="props.superfactsFr">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsFr.id }}
                            </th>
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <div class="bg-gradient-to-b from-[#134118] to-[#9ACB34] rounded">
                                    <img :src="props.superfactsEng.image" alt="" class="w-25 h-15">
                                </div>
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsFr.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsFr.title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsFr.description_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.superfactsFr.btn_text_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/home/superfacts/edit/' + props.superfactsFr.id">
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
