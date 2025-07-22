<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Footer Create',
        href: '/home/footer/create',
    },
];

const form = useForm({
    language:'',
    section_title_eng: '',
    section_title_fr: '',
    label_eng: '',
    label_fr: '',
    url: '',
});

const submit = () => {
    form.post('/home/footer/store');
};

</script>

<template>

    <Head title="footer Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Footer Create</h1>
                <Link :href="'/home/footer'"><button
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
                        <InputLabel forr="section_title_eng" :label="'Section Title English'"
                            v-model="form.section_title_eng" type="text"
                            :placeholder="'Enter your english section title'" />
                        <InputLabel forr="label_eng" :label="'Label English'" v-model="form.label_eng" type="text"
                            :placeholder="'Enter your label english'" />
                        <InputLabel forr="url" :label="'Url'" v-model="form.url" type="text"
                            :placeholder="'Enter your url'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="section_title_fr" :label="'Section Title French'"
                            v-model="form.section_title_fr" type="text"
                            :placeholder="'Enter your french section title'" />
                        <InputLabel forr="label_fr" :label="'Label French'" v-model="form.label_fr" type="text"
                            :placeholder="'Enter your label french'" />
                        <InputLabel forr="url" :label="'Url'" v-model="form.url" type="text"
                            :placeholder="'Enter your url'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Store</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
