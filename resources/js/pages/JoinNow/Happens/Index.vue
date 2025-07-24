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
        title: 'Join Happens',
        href: '/join/happens',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    whatHappensheadingEng: {
        id: number;
        language: string;
        join_card_heading_eng: string;
        join_card_sub_heading_eng: string;
    };
    whatHappensheadingFr: {
        id: number;
        language: string;
        join_card_heading_fr: string;
        join_card_sub_heading_fr: string;
    };
    whatHappens:{
        id: number;
        language: string;
        join_card_icon_eng: string;
        join_card_title_eng: string;
        join_card_sub_title_eng: string;
        join_card_icon_fr: string;
        join_card_title_fr: string;
        join_card_sub_title_fr: string;
    }[];
}>();

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'language', label: 'Language' },
    { key: 'join_card_icon_eng', label: 'Icon(ENG)' },
    { key: 'join_card_title_eng', label: 'Title(ENG)' },
    { key: 'join_card_sub_title_eng', label: 'Sub Title(ENG)' },
    { key: 'join_card_icon_fr', label: 'Icon(FR)' },
    { key: 'join_card_title_fr', label: 'Title(FR)' },
    { key: 'join_card_sub_title_fr', label: 'Sub Title(FR)' },
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
            router.delete(`/join/happens/destroy/${id}`, {
                preserveScroll: true,
            });
        }
    })
}

</script>

<template>

    <Head title="Join Happens" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Join Happens List</h1>
            </div>
            <FlashMessage :flash="props.flash" />
            <div class="overflow-x-auto mt-5">
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
                                Sub Header
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="props.whatHappensheadingEng">
                            <th scope="row" class="border px-4 py-2">
                                {{ props.whatHappensheadingEng.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ props.whatHappensheadingEng.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.whatHappensheadingEng.join_card_heading_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.whatHappensheadingEng.join_card_sub_heading_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/join/happens/heading/edit/' + props.whatHappensheadingEng.id">
                                    <SquarePenIcon
                                        class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </Link>
                                </div>
                            </td>
                        </tr>

                        <tr v-if="props.whatHappensheadingFr">
                            <th scope="row" class="border px-4 py-2">
                                {{ props.whatHappensheadingFr.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ props.whatHappensheadingFr.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.whatHappensheadingFr.join_card_heading_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.whatHappensheadingFr.join_card_sub_heading_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/join/happens/heading/edit/' + props.whatHappensheadingFr.id">
                                    <SquarePenIcon
                                        class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </Link>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-10">
                <Table :plans="props.whatHappens" :columns="columns" title="About Cards Data List" :show-create-button="true" :create-title="'Create Happens'" :create-route="'/join/happens/create'">
                    <template #join_card_icon_eng="{ item }">
                        <span v-html="item.join_card_icon_eng"></span>
                    </template>
                    <template #join_card_icon_fr="{ item }">
                        <span v-html="item.join_card_icon_fr"></span>
                    </template>
                     <template #action="{ item }">
                        <div class="flex items-center gap-2">
                            <Link :href="'/join/happens/edit/' + item.id">
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
