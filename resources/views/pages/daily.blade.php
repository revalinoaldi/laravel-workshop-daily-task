@extends('layouts.main')

@section('main-page')
<div class="container p-2">
    <div class="d-flex justify-content-between">
        <div>
            <h3>Hello, Farhan Aldiansyah</h3>
            <h5>Daily Task List</h5>
        </div>
        <div>
            <a href="{{ route('form-daily') }}" class="btn btn-success">Tambah Daily</a>
        </div>
    </div>

    <form action="">
        <div class="row mt-4">
            <div class="col-2">
                <p>Filter by Date:</p>
            </div>
            <div class="col-4">
                <div class="mb-3 row">
                    <label for="filterFrom" class="col-sm-2 col-form-label">Dari: </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control col-8" name="from" id="filterFrom" placeholder="Dari Tanggal">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3 row">
                    <label for="filterTo" class="col-sm-2 col-form-label">Sampai: </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control col-8" name="to" id="filterTo" placeholder="Dari Tanggal">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-primary">
                    Search
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <a href="">Minggu, 12 Nov 2023</a>
                        </td>
                        <td>No Description</td>
                        <td>
                            <button class="btn btn-danger">Hapus</button>
                            <button class="btn btn-info">Update</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <a href="">Senin, 13 Nov 2023</a>
                        </td>
                        <td>No Description</td>
                        <td>
                            <button class="btn btn-danger">Hapus</button>
                            <button class="btn btn-info">Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
