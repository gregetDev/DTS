@extends('layouts.admin')

@section('title', 'Images')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Images</h1>
        <p class="mb-4">Silahkan drag and drop pada tempat dibawah.</p>

        <div class="row">
            <div class="col-md-12">
                <!-- Awal Panel -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Upload Images</div>
                    </div>

                    <!-- Awal Panel Body -->
                    <div class="card-body">
                        <section class="body">
                            <section role="main" class="content-body" style="padding: 20px;">
                                <div class="images_layout">
                                    <div class="images_dropbox" id="dragAndDropFiles">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <center>
                                        Drag and Drop Images Here
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="images_chk">
                                        <div class="row">
                                            <div class="images_chk_list">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        
                        </section>

                        <!-- Modal -->
                        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content modal-dialog-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form name="formImageUpload" id="formImageUpload" enctype="multipart/form-data">
                                        <div class="modal-body ">
                                            <div class="modal_body_inner" style="text-align: center">
                                                Are you sure you want to Add All this images?
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="spinner" id="img_spin"></div>
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary" id="submitHandler">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Akhir Panel Body -->

                </div>
                <!-- Akhir Panel -->
            </div>
        </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>

    <script>

        $(document).ready(function() {

            initImageUpload();

        });


        function uploadImage(config) {

            this.config = config;
            this.items = "";
            this.all = [];
            var self = this;

            uploadImage.prototype._init = function() {

                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    document.getElementById(this.config.dragArea).addEventListener("dragover", function(e) {
                        $(this).css('background', 'antiquewhite');
                        e.stopPropagation();
                        e.preventDefault();
                    }, false);
                    document.getElementById(this.config.dragArea).addEventListener("drop", this._dropFiles, false);
                    document.getElementById(this.config.form).addEventListener("submit", this._submit, false);
                } else
                    console.log("Browser supports failed");
            }

            uploadImage.prototype._submit = function(e) {

                e.stopPropagation();
                e.preventDefault();

                $("#img_spin").addClass('is-active');
                self._startUpload();
            }

            uploadImage.prototype._preview = function(data) {

                this.items = data;
                if (this.items.length) {
                    var html = "";
                    var uId = "";
                    for (var i = 0; i < this.items.length; i++) {
                        var sampleIcon = '<i class="fa fa-image"></i> ';
                        var errorClass = "";
                        if (typeof this.items[i] != undefined) {
                            if (self._validate(this.items[i].type) <= 0) {
                                sampleIcon = '<i class="glyphicon glyphicon-minus-sign"></i>';
                                errorClass = " invalid";
                            }
                            html += '<div class="dfiles' + errorClass + '" rel="' + uId + '"><h5>' + sampleIcon + this.items[i].name + '</h5></div>';
                        }
                    }
                    $("#dragAndDropFiles").append(html);
                }
            }

            uploadImage.prototype._read = function(evt) {

                if (evt.target.files) {
                    self._preview(evt.target.files);
                    self.all.push(evt.target.files);
                } else
                    console.log("Failed file reading");
            }

            uploadImage.prototype._validate = function(format) {

                var arr = this.config.support.split(",");

                return arr.indexOf(format);
            }

            uploadImage.prototype._dropFiles = function(e) {

                e.stopPropagation();
                e.preventDefault();
                // reset
                self.all = [];
                $(this).css('background', 'white');
                var files = e.dataTransfer.files;
                console.log(files);
                if (files.length) {
                    for (var i=0; i < files.length; i++) {
                        // check file type
                        if (self._validate(files[i].type) <= 0) {
                            swal("error", "Uploaded file (" + files[i].name + ") is not a valid image. Only JPG and PNG files are allowed", "error");
                            return false;
                        }
                    }
                }
                // preview file
                self._preview(e.dataTransfer.files);
                // push file to array
                self.all.push(e.dataTransfer.files);
                $('#imageModal').modal({backdrop: 'static', keyboard: false});
            }

            uploadImage.prototype._uploader = function(file, f) {

                if (typeof file[f] != undefined && self._validate(file[f].type) > 0) {
                    // set data
                    var data = new FormData();
                    data.append('file', file[f]);
                    data.append('_token', '<?php echo csrf_token() ?>');
                    $.ajax({
                        type: "POST",
                        url: this.config.uploadUrl,
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(rponse) {
                            self._formReset();
                            $(".dfiles").hide();
                            $('#imageModal').modal('hide');
                            self._appendImage(rponse);

                            if (f + 1 < file.length) {
                                self._uploader(file, f + 1);
                            }
                        },
                        error: function(jqXhr, textStatus, errorThrown) {
                            console.log('Uploaded failed')
                        }
                    });
                } else
                    console.log("Invalid file format - " + file[f].name);
            }

            uploadImage.prototype._startUpload = function() {
                if (this.all.length) {
                    for (var k = 0; k < this.all.length; k++) {
                        var file = this.all[k];
                        this._uploader(file, 0);
                    }
                }
                // set empty
                self.all = [];
            }

            uploadImage.prototype._appendImage = function (rponse) {

                var img = '';
                img += '<div style="margin-top:30px; margin-bottom:20px" class="col-md-2">'
                img += '<label id="img_id_' + rponse.img_id + '" class="item_img">';
                img += '<div class="images_demo thumbnail">';
                img += '<img style="width: 100%; height: 15vw; object-fit: cover;" class="img-fluid images_demo" src="' + rponse.url + '">';
                img += '</div>';
                img += '</label>';
                img += '</div>';
                $('.images_chk_list').append(img).slideDown(400);
            }

            uploadImage.prototype._formReset = function() {
                $("#img_spin").removeClass('is-active');
            }

            this._init();
        }

        function initImageUpload() {

            var url = '/drag-drop-images';
            var config = {
                support: "image/jpg,image/png,image/jpeg",
                form: "formImageUpload",
                dragArea: "dragAndDropFiles",
                uploadUrl: url 
            }
            new uploadImage(config);
        }

        // if close Modal
        $('#imageModal').on('hidden.bs.modal', function () {

            $('.dfiles').remove();
            $("#img_spin").removeClass('is-active');
        });

    </script>
    
@endsection