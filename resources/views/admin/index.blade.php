<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        @include('partials._head')
    </head>
    <body style="min-height: 100vh; background: url(/images/7.jpg); background-size: 100% 100%; background-repeat: no-repeat;">
        @include('partials._navbar')
        <div style="margin-top: 80px;" class="col-sm-8 col-sm-offset-2">
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">News / Update</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="news">
                        <form action="{{ url('admin/news') }}" method="post" class="form-horizontal w3-text-white" style="margin-top: 30px;">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="type" class="col-sm-2 control-label">Video</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="type" id="type">
                                        <option value="video">Video</option>
                                        <option value="image">Image</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="attachment" class="col-sm-2 control-label">Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="attachment" placeholder="attachment..." class="form-control" value="{{ old('attachment') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" rows="10" class="form-control" placeholder="description...">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <input type="submit" value="Update" class="btn btn-success btn-block">
                        </form>
                        @if(count($errors) > 0)
                            <div class="w3-panel w3-red w3-display-container w3-round" style="overflow: hidden;">
                                <span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                                <h3>Error!</h3>
                                <p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </p>
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="w3-panel w3-green w3-display-container w3-round" style="overflow: hidden;">
                                <span onclick="this.parentElement.style.display='none'" class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                                <h3>Success!</h3>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
