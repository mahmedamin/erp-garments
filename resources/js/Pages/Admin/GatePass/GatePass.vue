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
                        data-feather="toggle-right"></i></span></span>Add Gate Pass</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
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
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Style</label>
                                                <input type="text" v-model="form.style" class="form-control"
                                                       placeholder="Enter Style">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input type="text" v-model="form.contact" class="form-control"
                                                       placeholder="Enter Contact No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select v-model="form.department_id" class="form-control custom-select">
                                                    <option v-for="department in departments" :value="department.id">
                                                        {{ department.name }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Purpose</label>
                                                <input v-model="form.purpose" type="text" class="form-control"
                                                       placeholder="Enter Purpose">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input v-model="form.amount" type="text" class="form-control"
                                                       placeholder="Enter Amount">
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
                                    <tr v-for="(detail, i) in form.details" :key="`item-${i}`">
                                        <td><textarea v-model="detail.description" placeholder="" rows="2"
                                                      class="form-control"></textarea></td>
                                        <td>
                                            <select v-model="detail.type" class="form-control">
                                                <option v-for="type in types" :value="type">{{
                                                        type.toUpperCase()
                                                    }}
                                                </option>
                                            </select>
                                        </td>
                                        <td><input onkeyup="()=>handleQtyChange(this)"
                                                   onchange="()=>handleQtyChange(this)"
                                                   v-model="detail.quantity" type="number" class="form-control"></td>
                                        <td>
                                            <select v-model="detail.unit_id" class="form-control">
                                                <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select v-model="detail.is_returnable" class="form-control">
                                                <option value="1">Returnable</option>
                                                <option value="0">NON Returnable</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button v-if="(form.details.length>1 || i>0)" type="button"
                                                    @click="removeDetail(`item-${i}`)"
                                                    class="btn btn-danger btn-block">Remove
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Total Qty: <span>45</span></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button @click="addDetail" type="button" class="btn btn-primary btn-block">
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
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Vehicle No</label>
                                        <input v-model="form.vehicle_number" type="text" class="form-control"
                                               placeholder="Enter Vehical No">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-15">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I Confirm all details
                                            give in the Gatepass are correct..</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary mr-10">Submit</button>
                            <button type="submit" class="btn btn-light">Cancel</button>
                        </section>
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

const detail_structure = {
    description: null,
    type: null,
    quantity: null,
    unit_id: null,
    is_returnable: null
};
export default {
    components: {AppLayout},
    props: [
        'departments',
        'units',
        'types'
    ],
    data() {
        let details = [
            Object.assign({}, detail_structure)
        ];
        return {
            form: {
                name: null,
                style: null,
                contact: null,
                department_id: null,
                purpose: null,
                amount: null,
                driver_name: null,
                vehicle_number: null,
                details
            }
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
        handleQtyChange(e) {
            console.log('--val', e.value)
        }
    }
}
</script>

<style scoped>

</style>
