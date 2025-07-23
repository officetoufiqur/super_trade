<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
import { SquarePenIcon, Trash2Icon } from 'lucide-vue-next';
import Swal from 'sweetalert2';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Service Card',
        href: '/services/banner',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    serviceCardEng: {
        id: number;
        language: string;
        section_card_icon: string;
        section_card_title_eng: string;
        section_card_sub_title_eng: string;
    }[];
    serviceCardFr: {
        id: number;
        language: string;
        section_card_icon: string;
        section_card_title_fr: string;
        section_card_sub_title_fr: string;
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
            router.delete(`/service/card/delete/${id}`, {
                preserveScroll: true,
            });
        }
    })
}

</script>

<template>

    <Head title="Service Card" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Service Card List</h1>
                <Link :href="'/service/card/create'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Create</button>
                </Link>
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
                                Card Title
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Card Sub Title
                            </th>
                            <th scope="col" class="px-4 py-2 text-left cursor-pointer select-none">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="card in props.serviceCardEng" :key="card.id">
                            <th scope="row" class="border px-4 py-2">
                                {{ card.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ card.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ card.section_card_title_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ card.section_card_sub_title_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/service/card/edit/' + card.id">
                                    <SquarePenIcon
                                        class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </Link>
                                    <button @click="deleteCard(card.id)" class="cursor-pointer">
                                    <Trash2Icon
                                        class="w-9 h-7 bg-[#CA2026] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr v-for="card in props.serviceCardFr" :key="'fr-' + card.id">
                            <th scope="row" class="border px-4 py-2">
                                {{ card.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ card.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ card.section_card_title_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ card.section_card_sub_title_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/service/card/edit/' + card.id">
                                    <SquarePenIcon
                                        class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </Link>
                                    <button @click="deleteCard(card.id)" class="cursor-pointer">
                                    <Trash2Icon
                                        class="w-9 h-7 bg-[#CA2026] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </AppLayout>
</template>
