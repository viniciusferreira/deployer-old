<div class="title">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <span>Servers</span>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
            <a href="#" class="btn btn-default"><i class="fa fa-cog"></i> Manage Environments</a>
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#add-server"><i class="fa fa-plus"></i> Add Server</a>
        </div>
    </div>
</div>

<table class="table table-lg">
    <thead>
        <tr>
            <th>Name</th>
            <th>Connect As</th>
            <th>Server Address</th>
            <th>Receive Code</th>
            <th>Connection Status</th>
            <th width="1%">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Production Server</td>
            <td>user</td>
            <td>103.112.65.123</td>
            <td><i class="fa fa-check"></i> Yes</td>
            <td nowrap><i class="fa fa-circle" style="color: #00cc00"></i> Connected</td>
            <td nowrap>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-key"></i> Key</a>
                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove</a>
            </td>
        </tr>
    </tbody>
</table>

@include('app.modals.add-server')