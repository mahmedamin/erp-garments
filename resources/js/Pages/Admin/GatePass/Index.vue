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
                    <h4 class="hk-pg-title">
                    <span class="pg-title-icon"><span class="feather-icon">
                    <i data-feather="toggle-right"></i></span>
                    </span>List Gate Pass</h4>
                    <div class="d-flex">
                        <inertia-link :href="route('admin.gate-pass.create')" class="btn btn-primary">
                            Add
                        </inertia-link>
                    </div>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                            <tr class="table-dark">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Style</th>
                                                <th>Contact No</th>
                                                <th>Driver Name</th>
                                                <th>Vehicle No</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-for="gatePass in gatePasses">
                                                <td>{{ gatePass.id }}</td>
                                                <td>{{ gatePass.name }}</td>
                                                <td>{{ gatePass.created_at }}</td>
                                                <td>{{ gatePass.style }}</td>
                                                <td>{{ gatePass.contact }}</td>
                                                <td>{{ gatePass.driver_name }}</td>
                                                <td>{{ gatePass.vehical_number }}</td>
                                                <td>
                                                    <inertia-link :href="route('admin.gate-pass.edit',{'gate_pass':gatePass.id})"
                                                       class="btn btn-info btn-xs">Edit</inertia-link>
                                                    <button class="btn btn-danger btn-xs">Delete</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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

export default {
    components: {AppLayout},
    props: ['gatePasses'],
}
</script>

<style scoped>

</style>
