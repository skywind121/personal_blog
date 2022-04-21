{{-- 創建目錄 --}}
<div class="modal fade" id="modal-folder-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/admin/upload/folder" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="folder" value="{{ $folder }}">
                <div class="modal-header">
                    <h4 class="modal-title">創建新目錄</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="new_folder_name" class="col-sm-3 col-form-label">
                            目錄名稱
                        </label>
                        <div class="col-sm-8">
                            <input type="text" id="new_folder_name" name="new_folder" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        取消
                    </button>
                    <button type="submit" class="btn btn-primary">
                        創建新目錄
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- 刪除文件 --}}
<div class="modal fade" id="modal-file-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">請確認</h4>
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">
                    <i class="fa fa-question-circle fa-lg"></i>
                    確定要刪除
                    <kbd><span id="delete-file-name1">file</span></kbd>
                    這個文件嗎？
                </p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="/admin/upload/file">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="folder" value="{{ $folder }}">
                    <input type="hidden" name="del_file" id="delete-file-name2">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        取消
                    </button>
                    <button type="submit" class="btn btn-danger">
                        刪除文件
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- 刪除目錄 --}}
<div class="modal fade" id="modal-folder-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">請確認</h4>
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">
                    <i class="fa fa-question-circle fa-lg"></i>
                    確定要刪除
                    <kbd><span id="delete-folder-name1">folder</span></kbd>
                    這個目錄嗎？
                </p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="/admin/upload/folder">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="folder" value="{{ $folder }}">
                    <input type="hidden" name="del_folder" id="delete-folder-name2">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        取消
                    </button>
                    <button type="submit" class="btn btn-danger">
                        刪除目錄
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- 上傳文件 --}}
<div class="modal fade" id="modal-file-upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/admin/upload/file" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="folder" value="{{ $folder }}">
                <div class="modal-header">
                    <h4 class="modal-title">上傳新文件</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="file" class="col-sm-3 col-form-label">
                            文件
                        </label>
                        <div class="col-sm-8">
                            <input type="file" id="file" name="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_name" class="col-sm-3 col-form-label">
                            文件名（可選）
                        </label>
                        <div class="col-sm-8">
                            <input type="text" id="file_name" name="file_name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        取消
                    </button>
                    <button type="submit" class="btn btn-primary">
                        上傳文件
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- 瀏覽圖片 --}}
<div class="modal fade" id="modal-image-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">圖片預覽</h4>
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <img id="preview-image" src="x" class="img-responsive">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    取消
                </button>
            </div>
        </div>
    </div>
</div>