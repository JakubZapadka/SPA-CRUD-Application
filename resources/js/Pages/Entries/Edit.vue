<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import AddNewEntryForm from './Partials/AddNewEntryForm.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Entries" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <AddNewEntryForm />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
