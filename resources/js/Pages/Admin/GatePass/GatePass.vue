<template>
    <app-layout>
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Element</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container-fluid">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                        data-feather="toggle-right"></i></span></span>{{ gatePass ? 'Edit' : 'Add' }} Gate Pass</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <form @submit.prevent="submit">
                            <section class="hk-sec-wrapper">
                                <h5 class="hk-sec-title"></h5>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" v-model="form.name" class="form-control"
                                                           placeholder="Enter Name">
                                                    <span v-if="errors.name" class="text-danger">{{
                                                            errors.name
                                                        }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Style</label>
                                                    <input type="text" v-model="form.style" class="form-control"
                                                           placeholder="Enter Style">
                                                    <span v-if="errors.style" class="text-danger">{{
                                                            errors.style
                                                        }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Contact No</label>
                                                    <input type="text" v-model="form.contact" class="form-control"
                                                           placeholder="Enter Contact No">
                                                    <span v-if="errors.contact" class="text-danger">{{
                                                            errors.contact
                                                        }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <select v-model="form.department_id"
                                                            class="form-control custom-select">
                                                        <option v-for="department in departments"
                                                                :value="department.id">
                                                            {{ department.name }}
                                                        </option>
                                                    </select>
                                                    <span v-if="errors.department_id"
                                                          class="text-danger">{{ errors.department_id }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Purpose</label>
                                                    <input v-model="form.purpose" type="text" class="form-control"
                                                           placeholder="Enter Purpose">
                                                    <span v-if="errors.purpose" class="text-danger">{{
                                                            errors.purpose
                                                        }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <input v-model="form.amount" type="text" class="form-control"
                                                           placeholder="Enter Amount">
                                                    <span v-if="errors.amount" class="text-danger">{{
                                                            errors.amount
                                                        }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr class="table-dark">
                                            <th class="w-390p">Description</th>
                                            <th class="w-15">Type</th>
                                            <th class="w-130p">Qty</th>
                                            <th class="w-130p">Unit</th>
                                            <th class="w-190p">Returnable/Non Returnable</th>
                                            <th class="w-130p">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <gate-pass-detail v-for="(detail, i) in form.details" :key="`item-${i}`"
                                                          :iteration=i
                                                          :detail=detail :types=types :units=units :errors=errors
                                                          @removeHandler="removeDetail"
                                                          :showRemoveButton="(form.details.length>1 || i>0)"/>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Total Qty: <span>{{ total_quantity }}</span></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button @click="addDetail" type="button"
                                                        class="btn btn-primary btn-block">
                                                    Add Row
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Driver Name</label>
                                            <input v-model="form.driver_name" type="text" class="form-control"
                                                   placeholder="Enter Driver Name">
                                            <span v-if="errors.driver_name" class="text-danger">{{
                                                    errors.driver_name
                                                }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vehicle No</label>
                                            <input v-model="form.vehicle_number" type="text" class="form-control"
                                                   placeholder="Enter Vehical No">
                                            <span v-if="errors.vehicle_number"
                                                  class="text-danger">{{ errors.vehicle_number }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-15">
                                        <div class="custom-control custom-checkbox">
                                            <input v-model="form.confirmation" type="checkbox"
                                                   class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I Confirm all details
                                                give in the Gatepass are correct..</label>
                                            <span v-if="errors.confirmation"
                                                  class="d-block text-danger">{{ errors.confirmation }}</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mr-10">Submit</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </section>
                        </form>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import GatePassDetail from "@/Pages/Admin/GatePass/GatePassDetail";

const detail_structure = {
    description: null,
    type: null,
    quantity: null,
    unit_id: null,
    is_returnable: null
};
export default {
    components: {GatePassDetail, AppLayout},
    props: [
        'departments',
        'units',
        'types',
        'errors',
        'gatePass'
    ],
    data() {
        let form = this.gatePass ? this.gatePass : {
            name: null,
            style: null,
            contact: null,
            department_id: null,
            purpose: null,
            amount: null,
            driver_name: null,
            vehicle_number: null,
            confirmation: false,
            details: [
                Object.assign({}, detail_structure)
            ]
        };
        return {
            form: this.$inertia.form(form)
        }
    },
    computed: {
        total_quantity: function () {
            let total_quantity = 0;
            this.form.details.forEach(detail => {
                total_quantity += parseInt(detail.quantity) || 0;
            });
            return total_quantity;
        }
    },
    methods: {
        addDetail() {
            this.form.details.push(Object.assign({}, detail_structure))
        },
        removeDetail(index) {
            this.form.details.splice(index, 1)
        },
        submit() {
            this.form.put(this.route('admin.gate-pass.update', {gate_pass: this.gatePass.id}), {
                onFinish: (response) => {
                    console.log('resp', response)
                },
            })
        }
    }
}
</script>

<style scoped>

</style>
