<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Service Choose Heading Edit',
        href: '/service/choose',
    },
];

const props = defineProps<{
    serviceChoose: {
        id: number;
        language: string;
        service_choose_header_eng: string;
        service_choose_sub_header_eng: string;
        service_choose_header_fr: string;
        service_choose_sub_header_fr: string;
    };
}>();

const form = useForm({
    id: props.serviceChoose.id,
    language: props.serviceChoose.language,
    service_choose_header_eng: props.serviceChoose.service_choose_header_eng,
    service_choose_sub_header_eng: props.serviceChoose.service_choose_sub_header_eng,
    service_choose_header_fr: props.serviceChoose.service_choose_header_fr,
    service_choose_sub_header_fr: props.serviceChoose.service_choose_sub_header_fr,
});

const submit = () => {
    form.post('/service/choose/heading/update/' + props.serviceChoose.id);
};

</script>

<template>

    <Head title="Service Choose Heading Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Service Choose Heading Edit</h1>
                <Link :href="'/service/choose'"><button
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
                        <InputLabel forr="service_choose_header_eng" :label="'Choose Header English'"
                            v-model="form.service_choose_header_eng" type="text" :placeholder="'Enter your header'" />
                        <InputLabel forr="service_choose_sub_header_eng" :label="'Choose Sub Header English'"
                            v-model="form.service_choose_sub_header_eng" type="text"
                            :placeholder="'Enter your sub header'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                         <InputLabel forr="service_choose_header_fr" :label="'Choose Header France'"
                            v-model="form.service_choose_header_fr" type="text" :placeholder="'Enter your header'" />
                        <InputLabel forr="service_choose_sub_header_fr" :label="'Choose Sub Header France'"
                            v-model="form.service_choose_sub_header_fr" type="text"
                            :placeholder="'Enter your sub header'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
