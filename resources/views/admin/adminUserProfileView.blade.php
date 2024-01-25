@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        User Profile
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.update.user', ['id' => $user->id]) }}" method="POST" id="userForm">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input readonly type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input readonly type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Membership Plans</label>
                                <input readonly type="password" class="form-control" id="password" name="password" value="{{ $user->membership_id }}">
                            </div>
                            <div class="mb-3">
                                <label for="user_type" class="form-label">User type</label>
                                <select readonly class="form-select" id="customerType" name="customerType">
                                    <option value="personal" @if($user->customerType == 'personal') selected @endif>Personal Account</option>
                                    <option value="business" @if($user->customerType == 'business') selected @endif>Business Account</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary" id="editButton">Edit User</button>
                            <button type="submit" class="btn btn-primary" id="saveButton" style="display: none;">Save Changes</button>
                            <button type="button" class="btn btn-secondary" id="cancelButton" style="display: none;">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButton = document.getElementById('editButton');
            const saveButton = document.getElementById('saveButton');
            const cancelButton = document.getElementById('cancelButton');
            const form = document.getElementById('userForm');

            editButton.addEventListener('click', function () {
                enableFormFields();
            });

            cancelButton.addEventListener('click', function () {
                disableFormFields();
            });

            function enableFormFields() {
                form.querySelectorAll('input, select').forEach(function (element) {
                    element.removeAttribute('readonly');
                });
                editButton.style.display = 'none';
                saveButton.style.display = 'inline-block';
                cancelButton.style.display = 'inline-block';
            }

            function disableFormFields() {
                form.querySelectorAll('input, select').forEach(function (element) {
                    element.setAttribute('readonly', 'readonly');
                });
                editButton.style.display = 'inline-block';
                saveButton.style.display = 'none';
                cancelButton.style.display = 'none';
            }
        });
    </script>
@endsection
