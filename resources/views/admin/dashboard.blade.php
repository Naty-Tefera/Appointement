
<x-admin-layout>
    <div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">people</i>
                        </div>
                        <p class="card-category">Users</p>
                        <h3 class="card-title">{{$users}}</h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <p class="card-category">Clients</p>
                        <h3 class="card-title">{{$clients}}</h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">store</i>
                        </div>
                        <p class="card-category">Appointments</p>
                        <h3 class="card-title">{{$appointments}}</h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">lightbulb</i>
                        </div>
                        <p class="card-category">Followers</p>
                        <h3 class="card-title">+245</h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons"></i>
                        </div>
                        <h4 class="card-title">Global Sales by Top Locations</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="table-responsive table-sales">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="assets/img/flags/US.png"/>
                                                    </div>
                                                </td>
                                                <td>USA</td>
                                                <td class="text-right">2.920</td>
                                                <td class="text-right">53.23%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="assets/img/flags/DE.png"/>
                                                    </div>
                                                </td>
                                                <td>Germany</td>
                                                <td class="text-right">1.300</td>
                                                <td class="text-right">20.43%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="assets/img/flags/AU.png"/>
                                                    </div>
                                                </td>
                                                <td>Australia</td>
                                                <td class="text-right">760</td>
                                                <td class="text-right">10.35%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="assets/img/flags/GB.png"/>
                                                    </div>
                                                </td>
                                                <td>United Kingdom</td>
                                                <td class="text-right">690</td>
                                                <td class="text-right">7.87%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="assets/img/flags/RO.png"/>
                                                    </div>
                                                </td>
                                                <td>Romania</td>
                                                <td class="text-right">600</td>
                                                <td class="text-right">5.94%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="assets/img/flags/BR.png"/>
                                                    </div>
                                                </td>
                                                <td>Brasil</td>
                                                <td class="text-right">550</td>
                                                <td class="text-right">4.34%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 ml-auto mr-auto">
                                <div id="worldMap" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
        7 days
        </button> -->

    </div>
</x-admin-layout>