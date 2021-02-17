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
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>Add Gate Pass</h4>
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
                                            <input type="text" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Style</label>
                                            <input type="text" class="form-control" placeholder="Enter Style">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Enter Contact No">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control custom-select">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Purpose</label>
                                            <input type="text" class="form-control" placeholder="Enter Purpose">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input type="text" class="form-control" placeholder="Enter Amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="table-dark">
                                    <th class="w-390p">Descrription</th>
                                    <th class="w-15">Type</th>
                                    <th class="w-130p">Qty</th>
                                    <th class="w-130p">Unit</th>
                                    <th class="w-190p">Returnable/Non Returnable</th>
                                    <th class="w-130p">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <gate-pass-detail />
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Total Qty: <span>45</span></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-block">Add Row</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Driver Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Driver Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vehical No</label>
                                    <input type="text" class="form-control" placeholder="Enter Vehical No">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-15">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">I Confirm all details give in the Gatepass are correct..</label>
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
import GatePassDetail from "@/Pages/Admin/GatePass/GatePassDetail";
export default {
    components: {GatePassDetail, AppLayout}
}
</script>

<style scoped>

</style>
