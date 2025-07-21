<script setup lang="ts">
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import Table from '@/components/my-components/Table.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

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
    {
        key: 'id',
        label: 'ID',
    },
    {
        key: 'language',
        label: 'Language',
    },
    {
        key: 'title_eng',
        label: 'Title English',
    },
    {
        key: 'title_fr',
        label: 'Title French',
    },
    {
        key: 'url',
        label: 'URL',
    }
]
</script>

<template>

    <Head title="Navbar" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <FlashMessage :flash="props.flash" />
            <Table :plans="props.navbar" :columns="columns" title="Navbar" :show-create-button="true" :create-title="'Create Navbar'" :create-route="'/home/navbar/create'" />
        </div>
    </AppLayout>
</template>
