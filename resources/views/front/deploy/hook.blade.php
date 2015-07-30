<div class="row row-space">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $hook['title'] }}</h3>
            </div>
            <div class="panel-body">
                <table class="table table-lg">
                    <thead>
                    <tr>
                        <th>Server</th>
                        <th>Status</th>
                        <th>Started At</th>
                        <th>Finished At</th>
                        <th>Duration</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $hook['server'] }}</td>
                        <td><i class="fa fa-check"></i> {{ $hook['status'] }}</td>
                        <td>{{ $hook['started-at'] }}</td>
                        <td>{{ $hook['finished-at'] }}</td>
                        <td>{{ $hook['duration'] }}</td>
                        <td>
                            <a href="#" class="btn btn-default btn-xs"><i class="fa fa-files-o"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('app.modals.hook-output', ['modal' => slug($hook['title'])])