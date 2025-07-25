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
        title: 'Navbar',
        href: '/home/navbar',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
    navbar: {
        id: number;
        language: string;
        title_eng: string;
        url: string;
        title_fr: string;
    }[];
}>();

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'language', label: 'Language' },
    { key: 'title_eng' ,label: 'Title English' },
    { key: 'title_fr', label: 'Title French' },
    { key: 'url', label: 'URL', },
    { key: 'action', label: 'Action' }
]

function deleteNavbar(id: number) {
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
            router.delete(`/home/navbar/delete/${id}`, {
                preserveScroll: true,
            });
        }
    })
}
</script>

<template>

    <Head title="Navbar" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <FlashMessage :flash="props.flash" />
            <Table :plans="props.navbar" :columns="columns" title="Navbar" :show-create-button="true"
                :create-title="'Create Navbar'" :create-route="'/home/navbar/create'">
                <template #action="{ item }">
                    <div class="space-x-2">
                        <Link :href="'/home/navbar/edit/' + item.id"><button
                            class="bg-[#74B53B] text-white font-bold py-2 px-3 cursor-pointer rounded hover:bg-[#344248] duration-300">
                            <SquarePenIcon class="w-5 h-5" />
                        </button>
                        </Link>
                        <button @click="deleteNavbar(item.id)"
                            class="bg-[#CA2026] text-white font-bold py-2 px-3 cursor-pointer rounded hover:bg-[#344248] duration-300">
                            <Trash2Icon class="w-5 h-5" />
                        </button>
                    </div>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>
