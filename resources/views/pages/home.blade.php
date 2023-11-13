@extends('layouts.main')

@section('main-page')
    <div class="container p-2">
        <h1>Hello, Farhan Aldiansyah</h1>
        <h4>Daily List : Today</h4>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senin, 13 Nov 2023</h5>
                    </div>
                    <div class="card-body">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                    [1435] - Item Task List
                                    </label>
                                    <p>
                                        Status :
                                        <span class="badge text-bg-primary">Progress</span><br>

                                        <div id="finish-attach-task">
                                            <span>Finish Date : 13 Nov 2023 14:00</span>
                                            <p>
                                                <span>Attachment:</span>
                                                <ul>
                                                    <li>Attach 1</li>
                                                    <li>Attach 2</li>
                                                    <li>Attach 3</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </p>
                                </div>
                                <div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">To Do</option>
                                        <option value="2">Progress</option>
                                        <option value="3">Done/Finish</option>
                                    </select>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
