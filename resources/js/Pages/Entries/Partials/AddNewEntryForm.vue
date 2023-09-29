<template>
    <div>
        <button @click="showForm = !showForm" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">New Item</button>
        <div v-if="showForm" class="fixed inset-0 flex items-center justify-center bg-black/25">
            <div class="bg-white p-4 rounded-lg sm:w-1/2 w-5/6">
                <form @submit.prevent="createNewItem" class="flex flex-col gap-4">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-90">Title</label>
                    <input id="title" v-model="itemName" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-90">Content</label>
                    <textarea id="content" rows="4" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your content here..."></textarea>
                    <div class="flex justify-between">
                        <button type="reset" @click="showForm = !showForm" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 w-1/3">Cancel</button>
                        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-1/3">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showForm: false,
            itemName: "",
        };
    },
    methods: {
        createNewItem() {
            // Send an HTTP request to your Laravel backend to create a new item
            // After creating the item, you can handle any necessary updates or redirects
        },
    },
};
</script>
