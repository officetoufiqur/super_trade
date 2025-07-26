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
        title: 'Benefit Membership',
        href: '/benefit/membership',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    benefitHeadingEng: {
        id: number;
        language: string;
        heading_eng: string;
        sub_heading_eng: string;
    };
    benefitHeadingFr: {
        id: number;
        language: string;
        heading_fr: string;
        sub_heading_fr: string;
    };
    benefitMembership: {
        id: number;
        language: string;
        image: string;
        icon: string;
        card_title_eng: string;
        card_description_eng: string;
        card_btn_text_eng: string;
        card_title_fr: string;
        card_description_fr: string;
        card_btn_text_fr: string;
    }[];
}>();

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'language', label: 'Language' },
    { key: 'image', label: 'Image' },
    { key: 'icon', label: 'Icon' },
    { key: 'card_title_eng', label: 'Title(ENG)' },
    { key: 'card_description_eng', label: 'Description(ENG)' },
    { key: 'card_btn_text_eng', label: 'Button Text(ENG)' },
    { key: 'card_title_fr', label: 'Title(FR)' },
    { key: 'card_description_fr', label: 'Description(FR)' },
    { key: 'card_btn_text_fr', label: 'Button Text(FR)' },
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
            router.delete(`/benefit/membership/destroy/${id}`, {
                preserveScroll: true,
            });
        }
    })
}

</script>

<template>

    <Head title="Benefit Membership" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Benefit Membership List</h1>
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
                        <tr v-if="props.benefitHeadingEng">
                            <th scope="row" class="border px-4 py-2">
                                {{ props.benefitHeadingEng.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ props.benefitHeadingEng.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.benefitHeadingEng.heading_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.benefitHeadingEng.sub_heading_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/benefit/heading/edit/' + props.benefitHeadingEng.id">
                                    <SquarePenIcon
                                        class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </Link>
                                </div>
                            </td>
                        </tr>

                        <tr v-if="props.benefitHeadingFr">
                            <th scope="row" class="border px-4 py-2">
                                {{ props.benefitHeadingFr.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ props.benefitHeadingFr.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.benefitHeadingFr.heading_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.benefitHeadingFr.sub_heading_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/benefit/heading/edit/' + props.benefitHeadingFr.id">
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
                <Table :plans="props.benefitMembership" :columns="columns" title="Membership Cards Data List"
                    :show-create-button="true" :create-title="'Create Membership'" :create-route="'/benefit/membership/create'">
                    <template #image="{ item }">
                        <img :src="item.image" alt="" class="w-15">
                    </template>
                    <template #icon="{ item }">
                        <span v-html="item.icon" class="text-[#707070]"></span>
                    </template>
                    <template #card_description_eng="{ item }">
                        {{ item.card_description_eng ? item.card_description_eng.slice(0, 100) : '' }}
                    </template>

                    <template #action="{ item }">
                        <div class="flex items-center gap-2">
                            <Link :href="'/benefit/membership/edit/' + item.id">
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
