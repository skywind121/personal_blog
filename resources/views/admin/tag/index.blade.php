<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>標簽
                    <small>» 列表</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/tag/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 新增標簽
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="tags-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>標簽</th>
                        <th>標題</th>
                        <th class="hidden-sm">副標題</th>
                        <th class="hidden-md">頁面圖片</th>
                        <th class="hidden-md">描述</th>
                        <th class="hidden-md">佈局</th>
                        <th class="hidden-sm">排序</th>
                        <th data-sortable="false">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->tag }}</td>
                            <td>{{ $tag->title }}</td>
                            <td class="hidden-sm">{{ $tag->subtitle }}</td>
                            <td class="hidden-md">{{ $tag->page_image }}</td>
                            <td class="hidden-md">{{ $tag->meta_description }}</td>
                            <td class="hidden-md">{{ $tag->layout }}</td>
                            <td class="hidden-sm">
                                @if ($tag->reverse_direction)
                                    逆序
                                @else
                                    升序
                                @endif
                            </td>
                            <td>
                                <a href="/admin/tag/{{ $tag->id }}/edit" class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> 編輯
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function () {
            $("#tags-table").DataTable({});
        });
    </script>
@stop