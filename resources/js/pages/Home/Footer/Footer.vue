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
        title: 'Footer',
        href: '/home/footer',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    footer: {
        id: number;
        language: string;
        section_title_eng: string;
        section_title_fr: string;
        label_eng: string;
        label_fr: string;
        url: string;
    }[];
}>();

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'language', label: 'Language' },
    { key: 'section_title_eng', label: 'Section title eng' },
    { key: 'section_title_fr', label: 'Section title fr' },
    { key: 'label_eng', label: 'Label eng' },
    { key: 'label_fr', label: 'Label fr' },
    { key: 'url', label: 'Url' },
    { key: 'action', label: 'Action' },
]

function deletefooter(id: number) {
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
            router.delete(`/home/footer/delete/${id}`, {
                preserveScroll: true,
            });
        }
    })
}
</script>

<template>

    <Head title="Footer" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <FlashMessage :flash="props.flash" />
            <Table :plans="props.footer" :columns="columns" title="Footer" :show-create-button="true"
                :create-title="'Create Footer'" :create-route="'/home/footer/create'">
                <template #action="{ item }">
                    <div class="space-x-2">
                        <Link :href="'/home/footer/edit/' + item.id"><button
                            class="bg-[#74B53B] text-white font-bold py-2 px-3 cursor-pointer rounded hover:bg-[#344248] duration-300">
                            <SquarePenIcon class="w-5 h-5" />
                        </button>
                        </Link>
                        <button @click="deletefooter(item.id)"
                            class="bg-[#CA2026] text-white font-bold py-2 px-3 cursor-pointer rounded hover:bg-[#344248] duration-300">
                            <Trash2Icon class="w-5 h-5" />
                        </button>
                    </div>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>
