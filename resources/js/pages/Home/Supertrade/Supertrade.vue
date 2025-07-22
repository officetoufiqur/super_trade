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
        title: 'Supertrade',
        href: '/home/supertrade',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    supertrade: {
        id: number;
        language: string;
        title_eng: string;
        title_fr: string;
        card_title_eng: string;
        card_title_fr: string;
        card_description_eng: string;
        card_description_fr: string;
        image: string;
    }[];
}>();

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'language', label: 'Language' },
    { key: 'title_eng', label: 'Title English' },
    { key: 'card_title_eng', label: 'Card Title English' },
    { key: 'title_fr', label: 'Title French' },
    { key: 'card_title_fr', label: 'Card Title French' },
    { key: 'action', label: 'Action' }
]

function deletesupertrade(id: number) {
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
            router.delete(`/home/supertrade/delete/${id}`, {
                preserveScroll: true,
            });
        }
    })
}
</script>

<template>

    <Head title="Supertrade" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <FlashMessage :flash="props.flash" />
            <Table :plans="props.supertrade" :columns="columns" title="Supertrade" :show-create-button="true"
                :create-title="'Create Supertrade'" :create-route="'/home/supertrade/create'">
                <template #action="{ item }">
                    <div class="space-x-2 flex">
                        <Link :href="'/home/supertrade/edit/' + item.id">
                        <button
                            class="bg-[#74B53B] text-white font-bold py-2 px-3 cursor-pointer rounded hover:bg-[#344248] duration-300">
                            <SquarePenIcon class="w-5 h-5" />
                        </button>
                        </Link>
                        <div v-if="(
                            (!item.title_eng || item.title_eng.trim() === '') &&
                            (!item.title_fr || item.title_fr.trim() === '')
                        )">
                            <button @click="deletesupertrade(item.id)"
                                class="bg-[#CA2026] text-white font-bold py-2 px-3 cursor-pointer rounded hover:bg-[#344248] duration-300">
                                <Trash2Icon class="w-5 h-5" />
                            </button>
                        </div>
                    </div>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>
