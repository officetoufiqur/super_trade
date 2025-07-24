<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Join Happens Heading Edit',
        href: '/service/choose',
    },
];

const props = defineProps<{
    joinCard: {
        id: number;
        language: string;
        join_card_heading_eng: string;
        join_card_sub_heading_eng: string;
        join_card_heading_fr: string;
        join_card_sub_heading_fr: string;
    };
}>();

const form = useForm({
    id: props.joinCard.id,
    language: props.joinCard.language,
    join_card_heading_eng: props.joinCard.join_card_heading_eng,
    join_card_sub_heading_eng: props.joinCard.join_card_sub_heading_eng,
    join_card_heading_fr: props.joinCard.join_card_heading_fr,
    join_card_sub_heading_fr: props.joinCard.join_card_sub_heading_fr,
});

const submit = () => {
    form.post('/join/happens/heading/update/' + props.joinCard.id);
};

</script>

<template>

    <Head title="Join Happens Heading Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Join Happens Heading Edit</h1>
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
                        <InputLabel forr="join_card_heading_eng" :label="'Join Header English'"
                            v-model="form.join_card_heading_eng" type="text" :placeholder="'Enter your header'" />
                        <InputLabel forr="join_card_sub_heading_eng" :label="'Join Sub Header English'"
                            v-model="form.join_card_sub_heading_eng" type="text"
                            :placeholder="'Enter your sub header'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="join_card_heading_fr" :label="'Join Header French'"
                            v-model="form.join_card_heading_fr" type="text" :placeholder="'Enter your header'" />
                        <InputLabel forr="join_card_sub_heading_fr" :label="'Join Sub Header French'"
                            v-model="form.join_card_sub_heading_fr" type="text"
                            :placeholder="'Enter your sub header'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
