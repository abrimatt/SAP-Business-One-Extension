@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Basic Tables</h4>
    </div>
</div>
@endsection

@php
$data = [
["firstname" => 'Sheryu', 'lastname' => 'N', 'handle' => '@Shreyu', 'css_class' => 'active'],
["firstname" => 'Greeva', 'lastname' => 'Y', 'handle' => '@greeva', 'css_class' => 'success'],
["firstname" => 'Mannat', 'lastname' => 'B', 'handle' => '@mannu', 'css_class' => 'danger'],
["firstname" => 'Dhaynu', 'lastname' => 'B', 'handle' => '@dhayanu', 'css_class' => 'warning']
];
@endphp


@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Basic example</h4>
                <p class="sub-header">
                    For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code>
                    to any <code>&lt;table&gt;</code>.
                </p>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Table Dark</h4>
                <p class="sub-header">You can also invert the colors—with light text on dark backgrounds—with
                    <code>.table-dark</code>.</p>

                <div class="table-responsive">
                    <table class="table table-dark mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        @foreach ($data as $record)
                        <tr scope="{{$loop->iteration}}">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$record['firstname']}}</td>
                            <td>{{$record['lastname']}}</td>
                            <td>{{$record['handle']}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Table head</h4>
                <p class="sub-header">
                    Similar to tables and dark tables, use the modifier classes <code>.thead-light</code> or
                    <code>.thead-dark</code> to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                </p>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Striped rows</h4>
                <p class="sub-header">
                    Use <code>.table-striped</code> to add zebra-striping to any table row within the
                    <code>&lt;tbody&gt;</code>.
                </p>

                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Bordered table</h4>
                <p class="sub-header">
                    Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and
                    cells.
                </p>

                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Borderless table</h4>
                <p class="sub-header">
                    Add <code>.table-borderless</code> for a table without borders.
                </p>

                <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Hoverable rows</h4>
                <p class="sub-header">
                    Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.
                </p>

                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Small table</h4>
                <p class="sub-header">
                    Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                </p>

                <div class="table-responsive">
                    <table class="table table-sm mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Contextual classes</h4>
                <p class="sub-header">
                    Use contextual classes to color table rows or individual cells.
                </p>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr class="table-{{$record['css_class']}}">
                                <td scope="{{$loop->iteration}}">{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Captions</h4>

                <p class="sub-header">A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps
                    users with screen readers to find a table and understand what it’s about and decide if they want to
                    read it.</p>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <caption>List of users</caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$record['firstname']}}</td>
                                <td>{{$record['lastname']}}</td>
                                <td>{{$record['handle']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Responsive tables</h4>
                <p class="sub-header">
                    Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                    to make them scroll horizontally on small devices (under 768px).
                </p>

                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                                <th>Table heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection