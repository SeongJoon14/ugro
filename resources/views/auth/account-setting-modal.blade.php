<div class="modal-dialog modal-dialog-centered" style="width: 400px">
    <div class="modal-content">
        <div class="modal-body" style="padding-top: 85px; padding-left:40px; padding-right:40px; font-size:11px">
            <form action="{{route('user_updateprofile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="position: relative">
                    <img class="rounded-circle " id="settingavatarimage" onclick="chooseavatar()"
                        style="position: absolute; left:31%; top:-150px; border:white 3px solid;  box-shadow: 4px 4px 4px #00000050;"
                        width="130" height="130"
                        src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/default.jpg') }}"
                        alt="User Avatar">
                    <input type="file" id="avatar_file" name="avatar" accept="image/*" style="display: none;"
                        onchange="previewAvatar(event)" />
                </div>
                <div class="text-center mb-2">
                    <h3>{{ucfirst(Auth::user()->first_name)}} {{ucfirst(Auth::user()->last_name)}}</h3>
                    <h5 style="color:rgb(17, 128, 219)">VIP MEMBER</h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-firstname-input">First name</label>
                            <input type="text" class="form-control" value="{{ucfirst(Auth::user()->first_name)}}"
                                name="first_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formrow-firstname-input">Last name</label>
                            <input type="text" class="form-control" value="{{ucfirst(Auth::user()->last_name)}}"
                                name="last_name">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="formrow-firstname-input">Email Address</label>
                    <input type="text" class="form-control" value="{{Auth::user()->email}}" name="email">
                </div>
                <div class="form-group">
                    <label for="formrow-firstname-input">Current Password</label>
                    <input type="password" class="form-control" name="current_password">
                </div>
                <div class="form-group">
                    <label for="formrow-firstname-input">New Password</label>
                    <input type="password" class="form-control" name="new_password">
                </div>
                <div class="text-center mt-3 mb-3">
                    <button type="submit" class="btn btn-rounded waves-effect waves-light btn-ugro-primary"
                        style="width:70%;">Update Settings &nbsp;&nbsp;<i
                            class="fas fa-sliders-h  font-size-16 align-middle mr-1"></i></button>
                </div>
            </form>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->


<script>
    function chooseavatar(){
       $("#avatar_file").click();
    }
    function previewAvatar(event) {
        var output = document.getElementById('settingavatarimage');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    }
</script>