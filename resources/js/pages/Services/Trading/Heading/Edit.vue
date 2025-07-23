<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Service Card Create',
        href: '/service/card',
    },
];

const props = defineProps<{
    serviceTrading: {
        id: number;
        language: string;
        trading_header_eng: string;
        trading_sub_header_eng: string;
        trading_header_fr: string;
        trading_sub_header_fr: string;
    };
}>();

const form = useForm({
    id: props.serviceTrading.id,
    language: props.serviceTrading.language,
    trading_header_eng: props.serviceTrading.trading_header_eng,
    trading_sub_header_eng: props.serviceTrading.trading_sub_header_eng,
    trading_header_fr: props.serviceTrading.trading_header_fr,
    trading_sub_header_fr: props.serviceTrading.trading_sub_header_fr,
});

const submit = () => {
    form.post('/service/trading/heading/update/' + props.serviceTrading.id);
};

</script>

<template>

    <Head title="Service Card Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Service Card Create</h1>
                <Link :href="'/service/trading'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Back</button>
                </Link>
            </div>

            <div class="border border-gray-200 p-10 mt-3 shadow rounded">
                <form @submit.prevent="submit">
                    <div class="">
                        <div>
                            <label for="">Language</label>
                            <select class="border border-gray-300 rounded px-3 py-2.5 w-full mt-1"
                                v-model="form.language">
                                <option value="english">English</option>
                                <option value="france">French</option>
                            </select>
                        </div>
                    </div>

                    <div v-if="form.language === 'english'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="trading_header_eng" :label="'Header'" v-model="form.trading_header_eng"
                            type="text" :placeholder="'Enter your header'" />
                        <InputLabel forr="trading_sub_header_eng" :label="'Sub Header'" v-model="form.trading_sub_header_eng"
                            type="text" :placeholder="'Enter your sub header'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="trading_header_fr" :label="'Header'" v-model="form.trading_header_fr"
                            type="text" :placeholder="'Enter your header'" />
                        <InputLabel forr="trading_sub_header_fr" :label="'Sub Header'" v-model="form.trading_sub_header_fr"
                            type="text" :placeholder="'Enter your sub header'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
