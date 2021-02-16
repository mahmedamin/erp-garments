<template>
    <nav class="hk-nav hk-nav-light">
        <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
        <div class="nicescroll-bar">
            <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php" >
                            <span class="feather-icon"><i data-feather="book"></i></span>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <hr class="nav-separator">
                <div class="nav-header">
                    <span>Main Moudels</span>
                    <span>UI</span>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                            <span class="feather-icon"><i data-feather="layout"></i></span>
                            <span class="nav-link-text">Admin</span>
                        </a>
                        <ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Requsition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Dabit Note</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="list-gatepass.php">Gate Pass</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
                            <span class="feather-icon"><i data-feather="type"></i></span>
                            <span class="nav-link-text">Accounts</span>
                        </a>
                        <ul id="content_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="list-pattycash.php">Patty Cash</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Ledgers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Party Ledgers</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                            <span class="feather-icon"><i data-feather="anchor"></i></span>
                            <span class="nav-link-text">Merchandising</span>
                        </a>
                        <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="background.html">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="border.html">Costing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="colors.html">PO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="embeds.html">Cutting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="icons.html">Stitching</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="shadow.html">Production</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="sizing.html">Finishing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="spacing.html">Quality</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="spacing.html">Packing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="spacing.html">Shppping</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                            <span class="feather-icon"><i data-feather="server"></i></span>
                            <span class="nav-link-text">Store</span>
                        </a>
                        <ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-element.html">Store Inventory</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="input-groups.html">Store Issue</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                            <span class="feather-icon"><i data-feather="server"></i></span>
                            <span class="nav-link-text">Setups</span>
                        </a>
                        <ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
                            <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="form-element.html">Department</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="input-groups.html">Store Issue</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr class="nav-separator">
            </div>
        </div>
    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    </nav>
</template>

<script>
export default {
name: "Sidebar"
}
</script>

<style scoped>

</style>
