<template>
    <tr>
        <td>
            <textarea v-model="detail.description" placeholder="" rows="2" class="form-control"></textarea>
            <span v-if="filterValidationError('description')"
                  class="text-danger">{{ filterValidationError('description') }}</span>
        </td>
        <td>
            <select v-model="detail.type" class="form-control">
                <option v-for="type in types" :value="type">{{
                        type.toUpperCase()
                    }}
                </option>
            </select>
            <span v-if="filterValidationError('type')" class="text-danger">{{ filterValidationError('type') }}</span>
        </td>
        <td>
            <input v-model="quantity" type="number" class="form-control">
            <span v-if="filterValidationError('quantity')" class="text-danger">{{
                    filterValidationError('quantity')
                }}</span>
        </td>
        <td>
            <select v-model="detail.unit_id" class="form-control">
                <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
            </select>
            <span v-if="filterValidationError('unit_id')" class="text-danger">{{
                    filterValidationError('unit_id')
                }}</span>
        </td>
        <td>
            <select v-model="detail.is_returnable" class="form-control">
                <option value="1">Returnable</option>
                <option value="0">NON Returnable</option>
            </select>
            <span v-if="filterValidationError('is_returnable')"
                  class="text-danger">{{ filterValidationError('is_returnable') }}</span>
        </td>
        <td>
            <button v-if="(showRemoveButton)" type="button"
                    @click="remove(`item-${iteration}`)"
                    class="btn btn-danger btn-block">Remove
            </button>
        </td>
    </tr>
</template>

<script>
export default {
    props: ['detail', 'iteration', 'types', 'units', 'showRemoveButton', 'errors'],
    data() {
        return {
            quantity: this.detail.quantity
        }
    },
    methods: {
        filterValidationError(field) {
            let completeFieldName = `details.${this.iteration}.${field}`;
            if (this.errors[completeFieldName]) {
                let error = this.errors[completeFieldName];
                return error.replace(completeFieldName, field);
            }
            return null;
        },
        remove: function (index) {
            this.$emit('removeHandler', index);
        }
    },
    watch: {
        quantity: function (newVal, oldVal) {
            if (newVal < 0)
                this.quantity = 0;
            this.detail.quantity = this.quantity;
        }
    }
}
</script>

<style scoped>

</style>
