@extends('layouts.main')

@section('main-page')
<div class="container p-2">
    <h1>Hello, Farhan Aldiansyah</h1>
    <h4>Form Daily</h4>

    <div class="row">
        <div class="col-12">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Date Task</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Description</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Masukkan deskripsi " required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class="col-12 text-end">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endpush
