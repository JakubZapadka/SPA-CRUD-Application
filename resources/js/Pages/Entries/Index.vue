<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import StoreNewEntryForm from './Partials/StoreNewEntryForm.vue';
import ShowEntries from './Partials/ShowEntries.vue';

const props = defineProps({ entries: Array });
</script>

<template>
    <Head title="Entries" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="grid gap-4">
                        <StoreNewEntryForm/>
                        <ShowEntries :entries="props.entries"/>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
