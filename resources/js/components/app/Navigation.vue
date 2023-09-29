<template>
    <nav class="min-w-[200px]">
        <div class="h-[80px] px-3 flex items-center gap-3">
            <Link href="/">
                <ApplicationLogo 
                    class="block h-9 w-auto fill-current text-gray-800" 
                />
            </Link>
            LaraCRUD
        </div>
        <div class="px-3">
            <CreateNewDropdown />

            <div class="py-3">
                <NavLink :href="route('profile.edit')" :active="$page.url === '/profile'">My Profile</NavLink>
                <NavLink :href="route('entries.edit')" :active="$page.url === '/entries'">Entries</NavLink>
                <NavLink :href="route('dashboard')" :active="$page.url === '/users'">Users</NavLink>
                <NavLink :href="route('logout')" method="post" as="button">Logout</NavLink>
            </div>
        </div>
    </nav>
</template>
<script setup>
import ApplicationLogo from '@/components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import CreateNewDropdown from '@/components/app/CreateNewDropdown.vue';
import NavLink from '@/components/NavLink.vue';
</script>
<style scoped>
</style>