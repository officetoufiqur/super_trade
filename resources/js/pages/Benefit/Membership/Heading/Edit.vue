<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Benefit Heading Edit',
        href: '/benefit/membership',
    },
];

const props = defineProps<{
    benefitCardHeading: {
        id: number;
        language: string;
        heading_eng: string;
        sub_heading_eng: string;
        heading_fr: string;
        sub_heading_fr: string;
    };
}>();

const form = useForm({
    id: props.benefitCardHeading.id,
    language: props.benefitCardHeading.language,
    heading_eng: props.benefitCardHeading.heading_eng,
    sub_heading_eng: props.benefitCardHeading.sub_heading_eng,
    heading_fr: props.benefitCardHeading.heading_fr,
    sub_heading_fr: props.benefitCardHeading.sub_heading_fr,
});

const submit = () => {
    form.post('/benefit/heading/update/' + props.benefitCardHeading.id);
};

</script>

<template>

    <Head title="Benefit Heading Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Benefit Heading Edit</h1>
                <Link :href="'/join/happens'"><button
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
                        <InputLabel forr="heading_eng" :label="'Benefit Header English'"
                            v-model="form.heading_eng" type="text" :placeholder="'Enter your header'" />
                        <InputLabel forr="sub_heading_eng" :label="'Benefit Sub Header English'"
                            v-model="form.sub_heading_eng" type="text"
                            :placeholder="'Enter your sub header'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="heading_fr" :label="'Benefit Header French'"
                            v-model="form.heading_fr" type="text" :placeholder="'Enter your header'" />
                        <InputLabel forr="sub_heading_fr" :label="'Benefit Sub Header French'"
                            v-model="form.sub_heading_fr" type="text"
                            :placeholder="'Enter your sub header'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
