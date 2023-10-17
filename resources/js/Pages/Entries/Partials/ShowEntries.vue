<template>
    <div class="max-w-xl relative shadow-md sm:rounded-lg overflow-x-auto">
        <table class="text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="max-w-xl flex">
                    <th scope="col" class="min-w-[10%] px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="min-w-[25%] px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="min-w-[40%] px-6 py-3">
                        Content
                    </th>
                    <th scope="col" class="min-w-[25%] px-6 py-3">
                        <span class="sr-only">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="entry in entries" class="max-w-xl flex bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="min-w-[10%] px-6 py-4 font-medium text-gray-900">
                        {{ entry.id }}
                    </th>
                    <td class="min-w-[25%] px-6 py-4 whitespace-nowrap overflow-hidden text-ellipsis">
                        {{ entry.title }}
                    </td>
                    <td class="min-w-[40%] px-6 py-4 whitespace-nowrap overflow-hidden text-ellipsis"> <!--whitespace-nowrap overflow-hidden text-ellipsis-->
                        {{ entry.content }}
                    </td>
                    <td class="min-w-[25%] px-6 py-4 text-right">
                        <EditEntryForm :entry="entry"/>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import EditEntryForm from './EditEntryForm.vue';

export default {
  props: {
    entries: {
      type: Array,
      required: true
    }
  },
  components: {
    EditEntryForm
  }
  // Other component options and methods here
}
</script>
