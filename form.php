<div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adding or Updating Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addform" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <!-- Username -->
                        <label>Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepent">
                                <span class="iput-group-text bg-dark"><i class="fa-solid fa-square-user text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter you Username" autocomplete="off" required="required" id="username" name="username">
                        </div>
                    </div>
                    <!-- email -->
                    <div class="form-group">
                        <label>Email:</label>
                        <div class="input-group">
                            <div class="input-group-prepent">
                                <span class="iput-group-text bg-dark"><i class="fa-regular fa-envelope  text-light"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Enter you Email" autocomplete="off" required="required" id="email" name="email">
                        </div>
                    </div>
                    <!-- mobil -->
                    <div class="form-group">
                        <label>Mobile:</label>
                        <div class="input-group">
                            <div class="input-group-prepent">
                                <span class="iput-group-text bg-dark"><i class="fa-regular fa-mobile  text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter you Mobile " autocomplete="off" required="required" id="mobile" name="mobile" maxlength="13" minlength="13">
                        </div>
                    </div>
                    <!-- photo -->
                    <div class="form-group">
                        <label>Photo:</label>
                        <div class="input-group">
                            <label class="custom-file-label" for="userphoto">Choose File</label>
                            <input type="file" class="custom-file-input" name="photo" id="userphoto">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>