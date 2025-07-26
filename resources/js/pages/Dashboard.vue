<script setup lang="ts">
import Card from '@/components/my-components/dashboard/Card.vue';
import ChartDemo from '@/components/my-components/dashboard/Chart.vue';
import FlashMessage from '@/components/my-components/FlashMessage.vue';
import Table from '@/components/my-components/Table.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { HeartIcon, Users2Icon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

const props = defineProps<{
    flash: {
        message?: string;
    };
}>();

const row = [
    {
        id: 1,
        name: 'name',
        email: 'johndoe@example.com',
        role: 'customer',
    },
    {
        id: 2,
        name: 'name',
        email: 'johndoe@example.com',
        role: 'customer',
    },
    {
        id: 3,
        name: 'name',
        email: 'johndoe@example.com',
        role: 'customer',
    },
    {
        id: 4,
        name: 'name',
        email: 'johndoe@example.com',
        role: 'customer',
    }
]

const columns = [
    { key: 'id', label: 'ID' },
    { key: 'name', label: 'Name' },
    { key: 'email', label: 'Email' },
    { key: 'role', label: 'Role)' },
    { key: 'action', label: 'Action' },
]
</script>

<template>

    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex gap-8 h-screen flex-1 flex-col rounded-xl p-10">
            <FlashMessage :flash="props.flash" />
            <div class="grid auto-rows-min gap-8 md:grid-cols-3">
                <Card title="Total User" value="200">
                    <template #icon>
                        <Users2Icon />
                    </template>
                </Card>
                <Card title="Card" value="200">
                    <template #icon>
                        <HeartIcon />
                    </template>
                </Card>
                <Card title="Card" value="200">
                    <template #icon>
                        <HeartIcon />
                    </template>
                </Card>
            </div>

            <div class="lg:grid lg:grid-cols-3 relative gap-5">
                <div class="lg:col-span-2 p-10 rounded-xl border border-sidebar-border/70">
                    <ChartDemo />
                </div>
                <div class="lg:col-span-1 p-5 rounded-xl border border-sidebar-border/70">
                    <div>
                       <Table :plans="row" :columns="columns" />
                    </div>
                </div>
            </div>


        </div>
    </AppLayout>
</template>
