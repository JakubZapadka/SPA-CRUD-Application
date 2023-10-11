<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Content
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="entry in entries" class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ entry.id }}
                </th>
                <td class="px-6 py-4">
                    {{ entry.title }}
                </td>
                <td class="px-6 py-4">
                    {{ entry.content }}
                </td>
                <td class="px-6 py-4 text-right">
                    <!--<EditEntryForm />-->
                </td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
import { ref } from 'vue'
import EditEntryForm from './EditEntryForm.vue';



export default{
    props: {
        entries: {
            type: Object
        }
    },
    components: { EditEntryForm }
}
</script>