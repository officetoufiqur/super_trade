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
        title: 'Service Choose',
        href: '/service/choose',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    chooseHeaderEng: {
        id: number;
        language: string;
        trading_header_eng: string;
        trading_sub_header_eng: string;
    };
    chooseHeaderFr: {
        id: number;
        language: string;
        trading_header_fr: string;
        trading_sub_header_fr: string;
    };
    chooseCardEng:{
        id: number;
        language: string;
        trading_card_image: string;
        trading_card_title_eng: string;
        trading_card_sub_title_eng: string;
        trading_card_list1_eng: string;
        trading_card_list2_eng: string;
        trading_card_list3_eng: string;
        trading_card_title_fr: string;
        trading_card_sub_title_fr: string;
        trading_card_list1_fr: string;
        trading_card_list2_fr: string;
        trading_card_list3_fr: string;
    }[];
}>();

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
            router.delete(`/service/trading/card/delete/${id}`, {
                preserveScroll: true,
            });
        }
    })
}

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'language', label: 'Language' },
    { key: 'trading_card_image', label: 'Image' },
    { key: 'trading_card_title_eng', label: 'Title(ENG)' },
    { key: 'trading_card_sub_title_eng', label: 'Sub Title(ENG)' },
    { key: 'trading_card_title_fr', label: 'Title(FR)' },
    { key: 'trading_card_sub_title_fr', label: 'Sub Title(FR)' },
    { key: 'action', label: 'Action' },
]

</script>

<template>

    <Head title="Service Choose" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Service Choose List</h1>
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
                        <tr v-if="props.tradingHeaderEng">
                            <th scope="row" class="border px-4 py-2">
                                {{ props.tradingHeaderEng.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ props.tradingHeaderEng.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.tradingHeaderEng.trading_header_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.tradingHeaderEng.trading_sub_header_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/service/trading/heading/edit/' + props.tradingHeaderEng.id">
                                    <SquarePenIcon
                                        class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </Link>
                                </div>
                            </td>
                        </tr>

                        <tr v-if="props.tradingHeaderFr">
                            <th scope="row" class="border px-4 py-2">
                                {{ props.tradingHeaderFr.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ props.tradingHeaderFr.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.tradingHeaderFr.trading_header_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.tradingHeaderFr.trading_sub_header_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/service/trading/heading/edit/' + props.tradingHeaderFr.id">
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
                <Table :plans="props.tradingCard" :columns="columns" title="About Cards Data List" :show-create-button="true" :create-title="'Create Trading Card'" :create-route="'/service/trading/card/create'">
                    <template #trading_card_image="{ item }">
                        <div v-if="item.trading_card_image">
                            <img :src="item.trading_card_image" alt="image" class="w-15 rounded">
                        </div>
                        <div v-else>
                            <span class="text-sm italic text-gray-500">N/I</span>
                        </div>
                    </template>
                    <template #action="{ item }">
                        <div class="flex items-center gap-2">
                            <Link :href="'/service/trading/edit/' + item.id">
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
