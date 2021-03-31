<div class="modal fade createThumbnail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Thumbnail</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('fbad.thumbnail_create')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Group Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" placeholder="Input the name" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" placeholder="Input the name" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Image</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" placeholder="Input the name" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Video</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" placeholder="Input the name" id="example-text-input">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create New Thumbnail</button>
                        </form>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
</div>