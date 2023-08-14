@include('layouts.header')


<main id="main">
    <section>
        <div class="col-xxl-12 col-md-12">
            <div class="card info-card sales-card">
                <div class="card-body">


                    <h5 class="card-title">Water Level <span>| Table</span></h5>

                    <table id="watertable" class="table table-hover " style="width:100%;">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody id="waterbody">
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </section>
</main>