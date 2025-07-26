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
        title: 'Faq',
        href: '/faq',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    faqHeadingEng: {
        id: number;
        language: string;
        heading_eng: string;
        sub_heading_eng: string;
    };
    faqHeadingFr: {
        id: number;
        language: string;
        heading_fr: string;
        sub_heading_fr: string;
    };
    faq: {
        id: number;
        language: string;
        question_eng: string;
        answer_eng: string;
        question_fr: string;
        answer_fr: string;
    }[];
}>();

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'language', label: 'Language' },
    { key: 'question_eng', label: 'Question(ENG)' },
    { key: 'answer_eng', label: 'Answer(ENG)' },
    { key: 'question_fr', label: 'Question(FR)' },
    { key: 'answer_fr', label: 'Answer(FR)' },
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
            router.delete(`/faq/destroy/${id}`, {
                preserveScroll: true,
            });
        }
    })
}

</script>

<template>

    <Head title="Faq" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Faq List</h1>
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
                        <tr v-if="props.faqHeadingEng">
                            <th scope="row" class="border px-4 py-2">
                                {{ props.faqHeadingEng.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ props.faqHeadingEng.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.faqHeadingEng.heading_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.faqHeadingEng.sub_heading_eng }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/faq/heading/edit/' + props.faqHeadingEng.id">
                                    <SquarePenIcon
                                        class="w-9 h-7 bg-[#74B53B] p-1 rounded text-white hover:bg-[#344248] duration-300" />
                                    </Link>
                                </div>
                            </td>
                        </tr>

                        <tr v-if="props.faqHeadingFr">
                            <th scope="row" class="border px-4 py-2">
                                {{ props.faqHeadingFr.id }}
                            </th>
                            <td class="border px-4 py-2">
                                {{ props.faqHeadingFr.language }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.faqHeadingFr.heading_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ props.faqHeadingFr.sub_heading_fr }}
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2">
                                    <Link :href="'/faq/heading/edit/' + props.faqHeadingFr.id">
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
                <Table :plans="props.faq" :columns="columns" title="Faq List"
                    :show-create-button="true" :create-title="'Create Faq'" :create-route="'/faq/create'">
                    <template #answer_eng="{ item }">
                        {{ item.answer_eng ? item.answer_eng.slice(0, 100) : '' }}
                    </template>
                    <template #answer_fr="{ item }">
                        {{ item.answer_fr ? item.answer_fr.slice(0, 100) : '' }}
                    </template>
                    <template #action="{ item }">
                        <div class="flex items-center gap-2">
                            <Link :href="'/faq/edit/' + item.id">
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
