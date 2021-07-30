@extends('layouts.master')

@section('title-page')
<h4>Dashboard</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
    <li class="breadcrumbs-item active">Dashboard</li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Add New Music</h5></div>

            <button class="btn-cs btn-cs-warning">Warning</button>
            <button class="btn-cs btn-cs-success">Success</button>
            <button class="btn-cs btn-cs-primary">Info</button>
            <button class="btn-cs btn-cs-danger">Danger</button>

            <form action="" class="form-cs">
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Artist</label>
                    <input type="text" class="form-control-cs">
                </div>
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Album</label>
                    <select name="" id="" class="form-control-cs">
                        <option value="">- Select -</option>
                        <option value="option_1">Sore Tugu Pancuran</option>
                        <option value="option_2">Suara Hati</option>
                        <option value="option_3">Kisah Klasik Untuk Masa Depan</option>
                    </select>
                </div>
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Track</label>
                    <select name="" id="" class="form-control-cs">
                        <option value="">- Select -</option>
                        <option value="option_1">Albums</option>
                        <option value="option_2">Ep</option>
                        <option value="option_3">Singgle</option>
                        </select>
                </div>
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Played</label>
                    <select name="" id="" class="form-control-cs">
                        <option value="">- Select -</option>
                        <option value="option_1">Yes</option>
                        <option value="option_2">No</option>
                        <option value="option_3">In Queue</option>
                        </select>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Artist</th>
                            <th>Album</th>
                            <th>Track</th>
                            <th>Played</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Iwan Fals</td>
                            <td>Albums</td>
                            <td>Sore Tugu Pancuran</td>
                            <td>In Queue</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer-cs">
                <button class="btn-cs btn-cs-success">Simpan</button>
                <button class="btn-cs btn-cs-danger">Batal</button>
            </div>
        </div>
    </div>
</div>    
@endsection