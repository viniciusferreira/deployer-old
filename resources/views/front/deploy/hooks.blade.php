@extends('front.layout')

@section('header-title', "{$deployment['project']} » Install Composer Dependecies » Actions")

@section('header-actions')
    <a href="/projects/1" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    <div class="row row-space">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#configure-hook"><i class="fa fa-plus"></i> Add</a>
                    </div>

                    <h3 class="panel-title"><i class="fa fa-code"></i> Before this action</h3>
                </div>

                <table class="table table-lg">
                    <tbody>
                    <tr>
                        <td>No actions been configured</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#configure-hook"><i class="fa fa-plus"></i> Add</a>
                    </div>

                    <h3 class="panel-title"><i class="fa fa-code"></i> After this action</h3>
                </div>

                <table class="table table-lg">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Run As</th>
                        <th width="1%">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Optimize</td>
                        <td>root</td>
                        <td nowrap>
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#configure-hook"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#configure-hook"><i class="fa fa-trash"></i> Remove</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Route Cache</td>
                        <td>root</td>
                        <td nowrap>
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#configure-hook"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#configure-hook"><i class="fa fa-trash"></i> Remove</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Run Migrations</td>
                        <td>root</td>
                        <td nowrap>
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#configure-hook"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#configure-hook"><i class="fa fa-trash"></i> Remove</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('app.modals.configure-hook')
@stop