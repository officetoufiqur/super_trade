<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import Table from '@/components/my-components/Table.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
import { SquarePenIcon, Trash2Icon } from 'lucide-vue-next';
import Swal from 'sweetalert2';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'About Header',
        href: '/about',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    aboutEng: {
        id: number;
        language: string;
        about_header_eng: string;
        about_title_eng: string;
        about_sub_title_eng: string;
    };
    aboutFr: {
        id: number;
        language: string;
        about_header_fr: string;
        about_title_fr: string;
        about_sub_title_fr: string;
    };
    aboutCards: {
        id: number;
        card_image: string;
        card_title_eng: string;
        card_title_fr: string;
        card_percentage_eng: string;
        card_percentage_fr: string;
    }[];
}>();

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'card_image', label: 'Image' },
    { key: 'language', label: 'Language' },
    { key: 'card_title_eng', label: 'Title(ENG)' },
    { key: 'card_percentage_eng', label: 'Percentage(ENG)' },
    { key: 'card_title_fr', label: 'Title(FR)' },
    { key: 'card_percentage_fr', label: 'Percentage(FR)' },
    { key: 'action', label: 'Action' },
]

function deleteCard(id: number) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            router.delete(`/about/card/delete/${id}`, {
                preserveScroll: true,
            });
        }
    })
}
</script>

<template>

    <Head title="About Header" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <FlashMessage :flash="props.flash" />
            <h1 class="text-2xl font-medium mb-4">About Header List</h1>
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
                                Header
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
                        <tr v-if="props.aboutEng">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.aboutEng.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.aboutEng.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.aboutEng.about_header_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.aboutEng.about_title_eng }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/about/edit/' + props.aboutEng.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="props.aboutFr">
                            <th scope="row"
                                class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.aboutFr.id }}
                            </th>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.aboutFr.language }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.aboutFr.about_header_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                {{ props.aboutFr.about_title_fr }}
                            </td>
                            <td class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                                <Link :href="'/about/edit/' + props.aboutFr.id">
                                <SquarePenIcon
                                    class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-10">
                <Table :plans="props.aboutCards" :columns="columns" title="About Cards Data List" :show-create-button="true" :create-title="'Create Card'" :create-route="'/about/card/create'">
                    <template #card_image="{ item }">
                        <div v-if="item.card_image">
                            <img :src="item.card_image" alt="image" class="w-15 rounded">
                        </div>
                        <div v-else>
                            <span class="text-sm italic text-gray-500">N/I</span>
                        </div>
                    </template>
                    <template #action="{ item }">
                        <div class="flex items-center gap-2">
                            <Link :href="'/about/card/edit/' + item.id">
                            <SquarePenIcon
                                class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                            </Link>
                            <button @click="deleteCard(item.id)" class="cursor-pointer">
                            <Trash2Icon
                                class="w-9 h-7 bg-[#CA2016] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                            </button>
                        </div>
                    </template>
                </Table>
            </div>
        </div>
    </AppLayout>
</template>
