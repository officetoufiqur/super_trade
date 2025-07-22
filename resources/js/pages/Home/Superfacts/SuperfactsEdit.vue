<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Super Facts Edit',
        href: '/superfacts',
    },
];

const props = defineProps<{
    superfacts: {
        id: number;
        title_eng: string;
        description_eng: string;
        btn_text_eng: string;
        title_fr: string;
        description_fr: string;
        btn_text_fr: string;
        image: string;
    };
}>();


const form = useForm({
    id: props.superfacts.id,
    title_eng: props.superfacts.title_eng ?? '',
    description_eng: props.superfacts.description_eng ?? '',
    btn_text_eng: props.superfacts.btn_text_eng ?? '',
    title_fr: props.superfacts.title_fr ?? '',
    description_fr: props.superfacts.description_fr ?? '',
    btn_text_fr: props.superfacts.btn_text_fr ?? '',
    image: props.superfacts.image ?? '',
});


function submit() {
    form.post('/home/superfacts/update/' + props.superfacts.id);
}

</script>

<template>

    <Head title="Super Facts Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Super Facts Edit</h1>
                <Link :href="'/home/superfacts'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Back</button>
                </Link>
            </div>

            <div class="border border-gray-200 p-7 mt-3 shadow rounded">
                <form @submit.prevent="submit">
                    <div v-if="form.id === 1" class="grid grid-cols-2 gap-4">
                        <InputLabel forr="title_en" :label="'Title English'" v-model="form.title_eng" type="text"
                            :placeholder="'Enter your english title'" />
                        <InputLabel forr="description_en" :label="'Description English'" v-model="form.description_eng"
                            type="text" :placeholder="'Enter your english description'" />
                        <InputLabel forr="btn_text_en" :label="'Button Text English'" v-model="form.btn_text_eng"
                            type="text" :placeholder="'Enter your english button text'" />
                        <InputLabel forr="image" :label="'Image French'" type="text" v-model="form.image"
                            class="cursor-pointer" :placeholder="'Enter your french image url'" />
                    </div>

                    <div v-if="form.id === 2" class="grid grid-cols-2 gap-4">
                        <InputLabel forr="title_fr" :label="'Title French'" v-model="form.title_fr" type="text"
                            :placeholder="'Enter your french title'" />
                        <InputLabel forr="description_fr" :label="'Description French'" v-model="form.description_fr"
                            type="text" :placeholder="'Enter your french description'" />
                        <InputLabel forr="btn_text_fr" :label="'Button Text French'" v-model="form.btn_text_fr"
                            type="text" :placeholder="'Enter your french button text'" />
                        <InputLabel forr="image" :label="'Image French'" type="text" v-model="form.image"
                            class="cursor-pointer" :placeholder="'Enter your french image url'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
