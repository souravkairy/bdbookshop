@php
$site_setting = DB::table('site_setting_tabel')->first();
@endphp
@extends('BackEnd/MasterLayout/master')
@section('dashboard')
    <div id="wrapper">
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                {{-- <h4 class="page-title">Seo Setting</h4> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Setting</h4>
                                    <form class="" action="{{url('save_site_setting_data')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            {{-- <label>Logo</label> --}}
                                            {{-- <input type="file" name="logo" class="form-control"  placeholder="Site Logo"/> --}}
                                            <img src="{{$site_setting->logo}}" alt="">
                                            <input type="hidden" value="{{$site_setting->id}}" name="id">
                                        </div>
                                        <div class="form-group">
                                            <label>C.Number</label>
                                            <input value="{{$site_setting->contact_number}}" type="text" class="form-control" name="contact_number"  placeholder="Contact Number"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="{{$site_setting->email}}" type="text" class="form-control" name="email"  placeholder="Contact Email"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input value="{{$site_setting->address}}" type="text" class="form-control" name="address"  placeholder="Address"/>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success btn-lg btn-block waves-effect waves-light" type="submit">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card m-b-30">
                                <div class="card-body">
                                <h4 class="mt-0 header-title">Slider</h4>
                                <table
                                    class="table table-bordered table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td><img style="width: 10%;" src="" alt=""></td>
                                                <td>
                                                    <a href="" class=""><i class="fas fa-trash-alt btn btn-danger"></i></a>
                                                </td>
                                            </tr>

                                        {{-- <?php foreach ($fetchData as $row) { ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$row->category_name}}</td>
                                            <td>{{$row->category_desc}}</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a href="" class=""><i
                                                        class="fab fa-nintendo-switch btn btn-success"></i></a>
                                                <a href="" class=""><i class="fas fa-user-edit btn btn-warning"></i></a>
                                                <a href="{{url('dlt_cat/'.$row->id)}}" class=""><i class="fas fa-trash-alt btn btn-danger"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++;} ?> --}}
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-light waves-effect mb-3 btn-lg btn-block" data-toggle="modal"
                                data-target=".bs-example-modal-lg">Add New Slider</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Social Link</h4>
                                    <form class="" action="#">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="title" class="form-control"  placeholder="Facebook"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input value="" type="text" class="form-control" name="share_title"  placeholder="Twitter"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input value="" type="text" class="form-control" name="share_title"  placeholder="Instagram"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input value="" type="text" class="form-control" name="share_title"  placeholder="Youtube"/>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success btn-lg btn-block waves-effect waves-light" type="submit">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div> <!-- end row -->

                </div>

            </div>


        </div>
    </div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form class="" action="{{url('save_brand')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="Slider Heading" required placeholder="Slider Heading"/>
                                </div>
                                <div class="form-group">
                                    <label>Sub-Heading</label>
                                    <input type="text" class="form-control" name="Slider Sub Heading" required placeholder="Slider Sub Heading"/>
                                </div>
                                <div class="form-group">
                                    <label>Button</label>
                                    <input type="text" class="form-control" name="Button Text" required placeholder="Button Text"/>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="brand_image" required/>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-success btn-lg btn-block waves-effect waves-light">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        </form>

                    </div>
                </div>



            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
@endsection
